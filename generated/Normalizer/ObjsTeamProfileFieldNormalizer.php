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

namespace JoliCode\Slack\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use JoliCode\Slack\Api\Runtime\Normalizer\CheckArray;
use JoliCode\Slack\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ObjsTeamProfileFieldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\ObjsTeamProfileField::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\ObjsTeamProfileField::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \JoliCode\Slack\Api\Model\ObjsTeamProfileField();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('ordering', $data) && \is_int($data['ordering'])) {
            $data['ordering'] = (float) $data['ordering'];
        }
        if (\array_key_exists('is_hidden', $data) && \is_int($data['is_hidden'])) {
            $data['is_hidden'] = (bool) $data['is_hidden'];
        }
        if (\array_key_exists('field_name', $data) && null !== $data['field_name']) {
            $value = $data['field_name'];
            if (\is_string($data['field_name'])) {
                $value = $data['field_name'];
            }
            $object->fieldName = $value;
        } elseif (\array_key_exists('field_name', $data)) {
            $object->fieldName = null;
        }
        if (\array_key_exists('hint', $data) && null !== $data['hint']) {
            $object->hint = $data['hint'];
        } elseif (\array_key_exists('hint', $data)) {
            $object->hint = null;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->id = $data['id'];
        } elseif (\array_key_exists('id', $data)) {
            $object->id = null;
        }
        if (\array_key_exists('is_hidden', $data) && null !== $data['is_hidden']) {
            $object->isHidden = $data['is_hidden'];
        } elseif (\array_key_exists('is_hidden', $data)) {
            $object->isHidden = null;
        }
        if (\array_key_exists('label', $data) && null !== $data['label']) {
            $object->label = $data['label'];
        } elseif (\array_key_exists('label', $data)) {
            $object->label = null;
        }
        if (\array_key_exists('options', $data) && null !== $data['options']) {
            $object->options = $this->denormalizer->denormalize($data['options'], \JoliCode\Slack\Api\Model\ObjsTeamProfileFieldOption::class, 'json', $context);
        } elseif (\array_key_exists('options', $data)) {
            $object->options = null;
        }
        if (\array_key_exists('ordering', $data) && null !== $data['ordering']) {
            $object->ordering = $data['ordering'];
        } elseif (\array_key_exists('ordering', $data)) {
            $object->ordering = null;
        }
        if (\array_key_exists('possible_values', $data) && null !== $data['possible_values']) {
            $values = [];
            foreach ($data['possible_values'] as $value_1) {
                $values[] = $value_1;
            }
            $object->possibleValues = $values;
        } elseif (\array_key_exists('possible_values', $data)) {
            $object->possibleValues = null;
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->type = $data['type'];
        } elseif (\array_key_exists('type', $data)) {
            $object->type = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('fieldName', get_object_vars($data)) && null !== ($data->fieldName ?? null)) {
            $value = $data->fieldName;
            if (\is_string($data->fieldName)) {
                $value = $data->fieldName;
            }
            $dataArray['field_name'] = $value;
        }
        $dataArray['hint'] = $data->hint;
        $dataArray['id'] = $data->id;
        if (\array_key_exists('isHidden', get_object_vars($data)) && null !== ($data->isHidden ?? null)) {
            $dataArray['is_hidden'] = $data->isHidden;
        }
        $dataArray['label'] = $data->label;
        if (\array_key_exists('options', get_object_vars($data)) && null !== ($data->options ?? null)) {
            $normalized = $this->normalizer->normalize($data->options, 'json', $context);
            $dataArray['options'] = is_iterable($normalized) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized) : $normalized;
        }
        $dataArray['ordering'] = $data->ordering;
        if (\array_key_exists('possibleValues', get_object_vars($data)) && null !== ($data->possibleValues ?? null)) {
            $values = [];
            foreach ($data->possibleValues as $value_1) {
                $values[] = $value_1;
            }
            $dataArray['possible_values'] = $values;
        }
        $dataArray['type'] = $data->type;

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\ObjsTeamProfileField::class => false];
    }
}
