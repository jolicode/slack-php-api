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
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class RtmConnectGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
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
        if (!\is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\RtmConnectGetResponse200();
        if (property_exists($data, 'ok') && null !== $data->{'ok'}) {
            $object->setOk($data->{'ok'});
        } elseif (property_exists($data, 'ok') && null === $data->{'ok'}) {
            $object->setOk(null);
        }
        if (property_exists($data, 'self') && null !== $data->{'self'}) {
            $object->setSelf($this->denormalizer->denormalize($data->{'self'}, 'JoliCode\\Slack\\Api\\Model\\RtmConnectGetResponse200Self', 'json', $context));
        } elseif (property_exists($data, 'self') && null === $data->{'self'}) {
            $object->setSelf(null);
        }
        if (property_exists($data, 'team') && null !== $data->{'team'}) {
            $object->setTeam($this->denormalizer->denormalize($data->{'team'}, 'JoliCode\\Slack\\Api\\Model\\RtmConnectGetResponse200Team', 'json', $context));
        } elseif (property_exists($data, 'team') && null === $data->{'team'}) {
            $object->setTeam(null);
        }
        if (property_exists($data, 'url') && null !== $data->{'url'}) {
            $object->setUrl($data->{'url'});
        } elseif (property_exists($data, 'url') && null === $data->{'url'}) {
            $object->setUrl(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getOk()) {
            $data->{'ok'} = $object->getOk();
        } else {
            $data->{'ok'} = null;
        }
        if (null !== $object->getSelf()) {
            $data->{'self'} = $this->normalizer->normalize($object->getSelf(), 'json', $context);
        } else {
            $data->{'self'} = null;
        }
        if (null !== $object->getTeam()) {
            $data->{'team'} = $this->normalizer->normalize($object->getTeam(), 'json', $context);
        } else {
            $data->{'team'} = null;
        }
        if (null !== $object->getUrl()) {
            $data->{'url'} = $object->getUrl();
        } else {
            $data->{'url'} = null;
        }

        return $data;
    }
}
