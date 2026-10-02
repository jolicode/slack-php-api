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

class PinsListGetResponse200Item0Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\PinsListGetResponse200Item0::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\PinsListGetResponse200Item0::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \JoliCode\Slack\Api\Model\PinsListGetResponse200Item0();
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
        if (\array_key_exists('items', $data) && null !== $data['items']) {
            $value = $data['items'];
            if (\is_array($data['items']) && $this->isOnlyNumericKeys($data['items'])) {
                $values = [];
                foreach ($data['items'] as $value_1) {
                    $values[] = $this->denormalizer->denormalize($value_1, \JoliCode\Slack\Api\Model\PinsListGetResponse200Item0ItemsItem0::class, 'json', $context);
                }
                $value = $values;
            } elseif (\is_array($data['items']) && $this->isOnlyNumericKeys($data['items'])) {
                $values_1 = [];
                foreach ($data['items'] as $value_2) {
                    $values_1[] = $this->denormalizer->denormalize($value_2, \JoliCode\Slack\Api\Model\PinsListGetResponse200Item0ItemsItem1::class, 'json', $context);
                }
                $value = $values_1;
            }
            $object->items = $value;
        } elseif (\array_key_exists('items', $data)) {
            $object->items = null;
        }
        if (\array_key_exists('ok', $data) && null !== $data['ok']) {
            $object->ok = $data['ok'];
        } elseif (\array_key_exists('ok', $data)) {
            $object->ok = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $value = $data->items;
        if (\is_array($data->items)) {
            $values = [];
            foreach ($data->items as $value_1) {
                $normalized = null === $value_1 ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values[] = is_iterable($normalized) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized) : $normalized;
            }
            $value = $values;
        } elseif (\is_array($data->items)) {
            $values_1 = [];
            foreach ($data->items as $value_2) {
                $normalized_1 = null === $value_2 ? null : $this->normalizer->normalize($value_2, 'json', $context);
                $values_1[] = is_iterable($normalized_1) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $value = $values_1;
        }
        $dataArray['items'] = $value;
        $dataArray['ok'] = $data->ok;

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\PinsListGetResponse200Item0::class => false];
    }
}
