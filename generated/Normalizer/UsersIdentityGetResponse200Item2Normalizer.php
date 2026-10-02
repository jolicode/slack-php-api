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

class UsersIdentityGetResponse200Item2Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item2::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item2::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item2();
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
        if (\array_key_exists('ok', $data) && null !== $data['ok']) {
            $object->ok = $data['ok'];
        } elseif (\array_key_exists('ok', $data)) {
            $object->ok = null;
        }
        if (\array_key_exists('team', $data) && null !== $data['team']) {
            $object->team = $this->denormalizer->denormalize($data['team'], \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item2Team::class, 'json', $context);
        } elseif (\array_key_exists('team', $data)) {
            $object->team = null;
        }
        if (\array_key_exists('user', $data) && null !== $data['user']) {
            $object->user = $this->denormalizer->denormalize($data['user'], \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item2User::class, 'json', $context);
        } elseif (\array_key_exists('user', $data)) {
            $object->user = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['ok'] = $data->ok;
        $normalized = null === $data->team ? null : $this->normalizer->normalize($data->team, 'json', $context);
        $dataArray['team'] = is_iterable($normalized) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized) : $normalized;
        $normalized_1 = null === $data->user ? null : $this->normalizer->normalize($data->user, 'json', $context);
        $dataArray['user'] = is_iterable($normalized_1) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized_1) : $normalized_1;

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item2::class => false];
    }
}
