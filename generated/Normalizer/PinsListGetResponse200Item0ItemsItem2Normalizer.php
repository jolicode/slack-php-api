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

class PinsListGetResponse200Item0ItemsItem2Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\PinsListGetResponse200Item0ItemsItem2' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\PinsListGetResponse200Item0ItemsItem2' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\PinsListGetResponse200Item0ItemsItem2();
        if (property_exists($data, 'channel') && null !== $data->{'channel'}) {
            $object->setChannel($data->{'channel'});
        } elseif (property_exists($data, 'channel') && null === $data->{'channel'}) {
            $object->setChannel(null);
        }
        if (property_exists($data, 'created') && null !== $data->{'created'}) {
            $object->setCreated($data->{'created'});
        } elseif (property_exists($data, 'created') && null === $data->{'created'}) {
            $object->setCreated(null);
        }
        if (property_exists($data, 'created_by') && null !== $data->{'created_by'}) {
            $object->setCreatedBy($data->{'created_by'});
        } elseif (property_exists($data, 'created_by') && null === $data->{'created_by'}) {
            $object->setCreatedBy(null);
        }
        if (property_exists($data, 'message') && null !== $data->{'message'}) {
            $object->setMessage($this->denormalizer->denormalize($data->{'message'}, 'JoliCode\\Slack\\Api\\Model\\ObjsMessage', 'json', $context));
        } elseif (property_exists($data, 'message') && null === $data->{'message'}) {
            $object->setMessage(null);
        }
        if (property_exists($data, 'type') && null !== $data->{'type'}) {
            $object->setType($data->{'type'});
        } elseif (property_exists($data, 'type') && null === $data->{'type'}) {
            $object->setType(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getChannel()) {
            $data->{'channel'} = $object->getChannel();
        } else {
            $data->{'channel'} = null;
        }
        if (null !== $object->getCreated()) {
            $data->{'created'} = $object->getCreated();
        } else {
            $data->{'created'} = null;
        }
        if (null !== $object->getCreatedBy()) {
            $data->{'created_by'} = $object->getCreatedBy();
        } else {
            $data->{'created_by'} = null;
        }
        if (null !== $object->getMessage()) {
            $data->{'message'} = $this->normalizer->normalize($object->getMessage(), 'json', $context);
        } else {
            $data->{'message'} = null;
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        } else {
            $data->{'type'} = null;
        }

        return $data;
    }
}
