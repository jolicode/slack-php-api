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

class PinsListGetResponse200Item0ItemsItem1Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\PinsListGetResponse200Item0ItemsItem1::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\PinsListGetResponse200Item0ItemsItem1::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \JoliCode\Slack\Api\Model\PinsListGetResponse200Item0ItemsItem1();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('channel', $data) && null !== $data['channel']) {
            $object->channel = $data['channel'];
        } elseif (\array_key_exists('channel', $data)) {
            $object->channel = null;
        }
        if (\array_key_exists('created', $data) && null !== $data['created']) {
            $object->created = $data['created'];
        } elseif (\array_key_exists('created', $data)) {
            $object->created = null;
        }
        if (\array_key_exists('created_by', $data) && null !== $data['created_by']) {
            $object->createdBy = $data['created_by'];
        } elseif (\array_key_exists('created_by', $data)) {
            $object->createdBy = null;
        }
        if (\array_key_exists('message', $data) && null !== $data['message']) {
            $object->message = $this->denormalizer->denormalize($data['message'], \JoliCode\Slack\Api\Model\ObjsMessage::class, 'json', $context);
        } elseif (\array_key_exists('message', $data)) {
            $object->message = null;
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
        if (\array_key_exists('channel', get_object_vars($data)) && null !== ($data->channel ?? null)) {
            $dataArray['channel'] = $data->channel;
        }
        if (\array_key_exists('created', get_object_vars($data)) && null !== ($data->created ?? null)) {
            $dataArray['created'] = $data->created;
        }
        if (\array_key_exists('createdBy', get_object_vars($data)) && null !== ($data->createdBy ?? null)) {
            $dataArray['created_by'] = $data->createdBy;
        }
        if (\array_key_exists('message', get_object_vars($data)) && null !== ($data->message ?? null)) {
            $normalized = $this->normalizer->normalize($data->message, 'json', $context);
            $dataArray['message'] = is_iterable($normalized) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized) : $normalized;
        }
        if (\array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['type'] = $data->type;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\PinsListGetResponse200Item0ItemsItem1::class => false];
    }
}
