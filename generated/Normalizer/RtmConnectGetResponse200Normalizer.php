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

class RtmConnectGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\RtmConnectGetResponse200' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\RtmConnectGetResponse200' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\RtmConnectGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ok', $data) && null !== $data['ok']) {
            $object->setOk($data['ok']);
        } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
            $object->setOk(null);
        }
        if (\array_key_exists('self', $data) && null !== $data['self']) {
            $object->setSelf($this->denormalizer->denormalize($data['self'], 'JoliCode\\Slack\\Api\\Model\\RtmConnectGetResponse200Self', 'json', $context));
        } elseif (\array_key_exists('self', $data) && null === $data['self']) {
            $object->setSelf(null);
        }
        if (\array_key_exists('team', $data) && null !== $data['team']) {
            $object->setTeam($this->denormalizer->denormalize($data['team'], 'JoliCode\\Slack\\Api\\Model\\RtmConnectGetResponse200Team', 'json', $context));
        } elseif (\array_key_exists('team', $data) && null === $data['team']) {
            $object->setTeam(null);
        }
        if (\array_key_exists('url', $data) && null !== $data['url']) {
            $object->setUrl($data['url']);
        } elseif (\array_key_exists('url', $data) && null === $data['url']) {
            $object->setUrl(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['ok'] = $object->getOk();
        $data['self'] = $this->normalizer->normalize($object->getSelf(), 'json', $context);
        $data['team'] = $this->normalizer->normalize($object->getTeam(), 'json', $context);
        $data['url'] = $object->getUrl();

        return $data;
    }
}
