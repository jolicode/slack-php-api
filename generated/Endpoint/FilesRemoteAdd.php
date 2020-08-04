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

namespace JoliCode\Slack\Api\Endpoint;

class FilesRemoteAdd extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    /**
     * Adds a file from a remote service.
     *
     * @param array $formParameters {
     *
     *     @var string $title title of the file being shared
     *     @var string $filetype type of file
     *     @var string $token Authentication token. Requires scope: `remote_files:write`
     *     @var string $indexable_file_contents A text file (txt, pdf, doc, etc.) containing textual search terms that are used to improve discovery of the remote file.
     *     @var string $preview_image preview of the document via `multipart/form-data`
     *     @var string $external_id creator defined GUID for the file
     *     @var string $external_url URL of the remote file.
     * }
     */
    public function __construct(array $formParameters = [])
    {
        $this->formParameters = $formParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/files.remote.add';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getFormBody();
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getFormOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getFormOptionsResolver();
        $optionsResolver->setDefined(['title', 'filetype', 'token', 'indexable_file_contents', 'preview_image', 'external_id', 'external_url']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('title', ['string']);
        $optionsResolver->setAllowedTypes('filetype', ['string']);
        $optionsResolver->setAllowedTypes('token', ['string']);
        $optionsResolver->setAllowedTypes('indexable_file_contents', ['string']);
        $optionsResolver->setAllowedTypes('preview_image', ['string']);
        $optionsResolver->setAllowedTypes('external_id', ['string']);
        $optionsResolver->setAllowedTypes('external_url', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \JoliCode\Slack\Api\Model\FilesRemoteAddPostResponse200|\JoliCode\Slack\Api\Model\FilesRemoteAddPostResponsedefault|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\FilesRemoteAddPostResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\FilesRemoteAddPostResponsedefault', 'json');
    }
}
