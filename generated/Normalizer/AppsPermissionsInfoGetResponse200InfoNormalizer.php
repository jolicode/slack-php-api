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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200Info();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('app_home', $data) && null !== $data['app_home']) {
            $object->setAppHome($this->denormalizer->denormalize($data['app_home'], \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoAppHome::class, 'json', $context));
        } elseif (\array_key_exists('app_home', $data) && null === $data['app_home']) {
            $object->setAppHome(null);
        }
        if (\array_key_exists('channel', $data) && null !== $data['channel']) {
            $object->setChannel($this->denormalizer->denormalize($data['channel'], \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoChannel::class, 'json', $context));
        } elseif (\array_key_exists('channel', $data) && null === $data['channel']) {
            $object->setChannel(null);
        }
        if (\array_key_exists('group', $data) && null !== $data['group']) {
            $object->setGroup($this->denormalizer->denormalize($data['group'], \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoGroup::class, 'json', $context));
        } elseif (\array_key_exists('group', $data) && null === $data['group']) {
            $object->setGroup(null);
        }
        if (\array_key_exists('im', $data) && null !== $data['im']) {
            $object->setIm($this->denormalizer->denormalize($data['im'], \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoIm::class, 'json', $context));
        } elseif (\array_key_exists('im', $data) && null === $data['im']) {
            $object->setIm(null);
        }
        if (\array_key_exists('mpim', $data) && null !== $data['mpim']) {
            $object->setMpim($this->denormalizer->denormalize($data['mpim'], \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoMpim::class, 'json', $context));
        } elseif (\array_key_exists('mpim', $data) && null === $data['mpim']) {
            $object->setMpim(null);
        }
        if (\array_key_exists('team', $data) && null !== $data['team']) {
            $object->setTeam($this->denormalizer->denormalize($data['team'], \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoTeam::class, 'json', $context));
        } elseif (\array_key_exists('team', $data) && null === $data['team']) {
            $object->setTeam(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['app_home'] = $this->normalizer->normalize($data->getAppHome(), 'json', $context);
        $dataArray['channel'] = $this->normalizer->normalize($data->getChannel(), 'json', $context);
        $dataArray['group'] = $this->normalizer->normalize($data->getGroup(), 'json', $context);
        $dataArray['im'] = $this->normalizer->normalize($data->getIm(), 'json', $context);
        $dataArray['mpim'] = $this->normalizer->normalize($data->getMpim(), 'json', $context);
        $dataArray['team'] = $this->normalizer->normalize($data->getTeam(), 'json', $context);

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200Info::class => false];
    }
}
