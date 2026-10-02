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

class FilesInfoGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\FilesInfoGetResponse200::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\FilesInfoGetResponse200::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \JoliCode\Slack\Api\Model\FilesInfoGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('ok', $data) && \is_int($data['ok'])) {
            $data['ok'] = (bool) $data['ok'];
        }
        if (\array_key_exists('comments', $data) && null !== $data['comments']) {
            $values = [];
            foreach ($data['comments'] as $value) {
                $values[] = $value;
            }
            $object->comments = $values;
        } elseif (\array_key_exists('comments', $data)) {
            $object->comments = null;
        }
        if (\array_key_exists('content_html', $data) && null !== $data['content_html']) {
            $object->contentHtml = $data['content_html'];
        } elseif (\array_key_exists('content_html', $data)) {
            $object->contentHtml = null;
        }
        if (\array_key_exists('editor', $data) && null !== $data['editor']) {
            $object->editor = $data['editor'];
        } elseif (\array_key_exists('editor', $data)) {
            $object->editor = null;
        }
        if (\array_key_exists('file', $data) && null !== $data['file']) {
            $object->file = $this->denormalizer->denormalize($data['file'], \JoliCode\Slack\Api\Model\ObjsFile::class, 'json', $context);
        } elseif (\array_key_exists('file', $data)) {
            $object->file = null;
        }
        if (\array_key_exists('ok', $data) && null !== $data['ok']) {
            $object->ok = $data['ok'];
        } elseif (\array_key_exists('ok', $data)) {
            $object->ok = null;
        }
        if (\array_key_exists('paging', $data) && null !== $data['paging']) {
            $object->paging = $this->denormalizer->denormalize($data['paging'], \JoliCode\Slack\Api\Model\ObjsPaging::class, 'json', $context);
        } elseif (\array_key_exists('paging', $data)) {
            $object->paging = null;
        }
        if (\array_key_exists('response_metadata', $data) && null !== $data['response_metadata']) {
            $object->responseMetadata = $this->denormalizer->denormalize($data['response_metadata'], \JoliCode\Slack\Api\Model\ObjsResponseMetadata::class, 'json', $context);
        } elseif (\array_key_exists('response_metadata', $data)) {
            $object->responseMetadata = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $values = [];
        foreach ($data->comments as $value) {
            $values[] = $value;
        }
        $dataArray['comments'] = $values;
        if (\array_key_exists('contentHtml', get_object_vars($data)) && null !== ($data->contentHtml ?? null)) {
            $dataArray['content_html'] = $data->contentHtml;
        }
        if (\array_key_exists('editor', get_object_vars($data)) && null !== ($data->editor ?? null)) {
            $dataArray['editor'] = $data->editor;
        }
        $normalized = null === $data->file ? null : $this->normalizer->normalize($data->file, 'json', $context);
        $dataArray['file'] = is_iterable($normalized) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized) : $normalized;
        $dataArray['ok'] = $data->ok;
        if (\array_key_exists('paging', get_object_vars($data)) && null !== ($data->paging ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->paging, 'json', $context);
            $dataArray['paging'] = is_iterable($normalized_1) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (\array_key_exists('responseMetadata', get_object_vars($data)) && null !== ($data->responseMetadata ?? null)) {
            $normalized_2 = $this->normalizer->normalize($data->responseMetadata, 'json', $context);
            $dataArray['response_metadata'] = is_iterable($normalized_2) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized_2) : $normalized_2;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\FilesInfoGetResponse200::class => false];
    }
}
