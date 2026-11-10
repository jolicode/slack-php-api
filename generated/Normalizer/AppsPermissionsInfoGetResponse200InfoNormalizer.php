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

class AppsPermissionsInfoGetResponse200InfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200Info::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200Info::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200Info();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('app_home', $data) && null !== $data['app_home']) {
            $object->appHome = $this->denormalizer->denormalize($data['app_home'], \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoAppHome::class, 'json', $context);
        } elseif (\array_key_exists('app_home', $data)) {
            $object->appHome = null;
        }
        if (\array_key_exists('channel', $data) && null !== $data['channel']) {
            $object->channel = $this->denormalizer->denormalize($data['channel'], \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoChannel::class, 'json', $context);
        } elseif (\array_key_exists('channel', $data)) {
            $object->channel = null;
        }
        if (\array_key_exists('group', $data) && null !== $data['group']) {
            $object->group = $this->denormalizer->denormalize($data['group'], \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoGroup::class, 'json', $context);
        } elseif (\array_key_exists('group', $data)) {
            $object->group = null;
        }
        if (\array_key_exists('im', $data) && null !== $data['im']) {
            $object->im = $this->denormalizer->denormalize($data['im'], \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoIm::class, 'json', $context);
        } elseif (\array_key_exists('im', $data)) {
            $object->im = null;
        }
        if (\array_key_exists('mpim', $data) && null !== $data['mpim']) {
            $object->mpim = $this->denormalizer->denormalize($data['mpim'], \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoMpim::class, 'json', $context);
        } elseif (\array_key_exists('mpim', $data)) {
            $object->mpim = null;
        }
        if (\array_key_exists('team', $data) && null !== $data['team']) {
            $object->team = $this->denormalizer->denormalize($data['team'], \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoTeam::class, 'json', $context);
        } elseif (\array_key_exists('team', $data)) {
            $object->team = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $normalized = null === $data->appHome ? null : $this->normalizer->normalize($data->appHome, 'json', $context);
        $dataArray['app_home'] = is_iterable($normalized) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized) : $normalized;
        $normalized_1 = null === $data->channel ? null : $this->normalizer->normalize($data->channel, 'json', $context);
        $dataArray['channel'] = is_iterable($normalized_1) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
        $normalized_2 = null === $data->group ? null : $this->normalizer->normalize($data->group, 'json', $context);
        $dataArray['group'] = is_iterable($normalized_2) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized_2) : $normalized_2;
        $normalized_3 = null === $data->im ? null : $this->normalizer->normalize($data->im, 'json', $context);
        $dataArray['im'] = is_iterable($normalized_3) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized_3) : $normalized_3;
        $normalized_4 = null === $data->mpim ? null : $this->normalizer->normalize($data->mpim, 'json', $context);
        $dataArray['mpim'] = is_iterable($normalized_4) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized_4) : $normalized_4;
        $normalized_5 = null === $data->team ? null : $this->normalizer->normalize($data->team, 'json', $context);
        $dataArray['team'] = is_iterable($normalized_5) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized_5) : $normalized_5;

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200Info::class => false];
    }
}
