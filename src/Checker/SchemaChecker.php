<?php

declare(strict_types=1);

/*
 * This file is part of JoliCode's Slack PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Slack\Checker;

use Opis\JsonSchema\Schema;
use Opis\JsonSchema\Validator;

/**
 * @internal
 */
class SchemaChecker
{
    public function check(string $schemaPath): array
    {
        $summary = [];

        $schemaJson = file_get_contents($schemaPath);

        if (!$schemaJson) {
            throw new \Exception("Could not load the schema at \"$schemaPath\"");
        }

        $schema = json_decode($schemaJson, false);

        if (!$schema) {
            throw new \Exception("Could not decode JSON in schema at \"$schemaPath\"");
        }

        $validator = new Validator(null);

        foreach ($schema->paths ?? [] as $path => $methods) {
            foreach ($methods as $method => $methodConfig) {
                foreach ($methodConfig->responses as $response => $responseConfig) {
                    if (empty($responseConfig->examples) || empty($responseConfig->examples->{'application/json'})) {
                        $summary[$path][$method][$response] = [
                            'errors' => [
                                [
                                    'property' => '',
                                    'error' => 'No example given',
                                ],
                            ],
                        ];

                        continue;
                    }

                    $responseSchema = $responseConfig->schema;

                    // Force validation to fail when the schema misses properties
                    if (isset($responseSchema->type) && 'object' === $responseSchema->type) {
                        $responseSchema->additionalProperties = false;
                    }

                    // Copy global definitions to make references working
                    $responseSchema->definitions = $schema->definitions;
                    $result = $validator->schemaValidation($responseConfig->examples->{'application/json'}, new Schema($responseSchema), 1000);

                    if ($result->isValid()) {
                        continue;
                    }

                    $errors = [];

                    foreach ($result->getErrors() as $error) {
                        $property = implode('->', $error->dataPointer());

                        if ('required' === $error->keyword()) {
                            // We don't care too much about invalid example missing required props
                            continue;
                        }

                        if ('error' === $property && 'enum' === $error->keyword() && isset($error->keywordArgs()['expected'])) {
                            // We know some endpoint miss description at the moment and does not even define the error field.
                            // But because error are handled by JoliCode\Slack\HttpPlugin\SlackErrorPlugin, we don't care too much here
                            continue;
                        }

                        if ('format' === $error->keyword() && isset($error->keywordArgs()['format']) && 'uri' === $error->keywordArgs()['format']) {
                            // Slack uses invalid uri (like https://.../dramacat_480.gif) in their examples.
                            // Just ignore this kind of errors.
                            continue;
                        }

                        if ('pattern' === $error->keyword() && isset($error->keywordArgs()['pattern']) && false !== strpos($error->keywordArgs()['pattern'], '[A-Z0-9]{8,}$')) {
                            // Slack did not update their examples when they changed their id length definition.
                            continue;
                        }

                        // Some endpoint are completely not described, so let's just ignore them if the example contains more data.
                        if ('additionalProperties' === $error->keyword() && isset($error->schema()->description) && 'Verbose schema not yet ready for this method.' === $error->schema()->description) {
                            continue;
                        }

                        $precision = '';

                        if ('additionalProperties' === $error->keyword()) {
                            $fields = [];
                            foreach ($error->subErrors() as $subError) {
                                $fields[] = implode('->', $subError->dataPointer());
                            }

                            $precision = implode(', ', $fields);
                        } elseif ($error->keywordArgs()) {
                            $precision = 'constraints: '.json_encode($error->keywordArgs());
                        }

                        $errors[] = [
                            'property' => $property,
                            'error' => $error->keyword().($precision ? ' ('.$precision.')' : ''),
                        ];
                    }

                    $summary[$path][$method][$response] = [
                        'errors' => $errors,
                    ];
                }
            }
        }

        return $summary;
    }
}
