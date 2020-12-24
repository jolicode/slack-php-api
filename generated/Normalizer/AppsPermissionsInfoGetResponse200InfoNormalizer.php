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

use Jane\JsonSchemaRuntime\Reference;
use JoliCode\Slack\Api\Runtime\Normalizer\CheckArray;
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

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsInfoGetResponse200Info' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsInfoGetResponse200Info' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
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
            $object->setAppHome($this->denormalizer->denormalize($data['app_home'], 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsInfoGetResponse200InfoAppHome', 'json', $context));
        } elseif (\array_key_exists('app_home', $data) && null === $data['app_home']) {
            $object->setAppHome(null);
        }
        if (\array_key_exists('channel', $data) && null !== $data['channel']) {
            $object->setChannel($this->denormalizer->denormalize($data['channel'], 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsInfoGetResponse200InfoChannel', 'json', $context));
        } elseif (\array_key_exists('channel', $data) && null === $data['channel']) {
            $object->setChannel(null);
        }
        if (\array_key_exists('group', $data) && null !== $data['group']) {
            $object->setGroup($this->denormalizer->denormalize($data['group'], 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsInfoGetResponse200InfoGroup', 'json', $context));
        } elseif (\array_key_exists('group', $data) && null === $data['group']) {
            $object->setGroup(null);
        }
        if (\array_key_exists('im', $data) && null !== $data['im']) {
            $object->setIm($this->denormalizer->denormalize($data['im'], 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsInfoGetResponse200InfoIm', 'json', $context));
        } elseif (\array_key_exists('im', $data) && null === $data['im']) {
            $object->setIm(null);
        }
        if (\array_key_exists('mpim', $data) && null !== $data['mpim']) {
            $object->setMpim($this->denormalizer->denormalize($data['mpim'], 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsInfoGetResponse200InfoMpim', 'json', $context));
        } elseif (\array_key_exists('mpim', $data) && null === $data['mpim']) {
            $object->setMpim(null);
        }
        if (\array_key_exists('team', $data) && null !== $data['team']) {
            $object->setTeam($this->denormalizer->denormalize($data['team'], 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsInfoGetResponse200InfoTeam', 'json', $context));
        } elseif (\array_key_exists('team', $data) && null === $data['team']) {
            $object->setTeam(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['app_home'] = $this->normalizer->normalize($object->getAppHome(), 'json', $context);
        $data['channel'] = $this->normalizer->normalize($object->getChannel(), 'json', $context);
        $data['group'] = $this->normalizer->normalize($object->getGroup(), 'json', $context);
        $data['im'] = $this->normalizer->normalize($object->getIm(), 'json', $context);
        $data['mpim'] = $this->normalizer->normalize($object->getMpim(), 'json', $context);
        $data['team'] = $this->normalizer->normalize($object->getTeam(), 'json', $context);

        return $data;
    }
}
