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

class ObjsMessageAttachmentsItemActionsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ObjsMessageAttachmentsItemActionsItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsMessageAttachmentsItemActionsItem' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItemActionsItem();
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        } elseif (property_exists($data, 'id') && null === $data->{'id'}) {
            $object->setId(null);
        }
        if (property_exists($data, 'name') && null !== $data->{'name'}) {
            $object->setName($data->{'name'});
        } elseif (property_exists($data, 'name') && null === $data->{'name'}) {
            $object->setName(null);
        }
        if (property_exists($data, 'text') && null !== $data->{'text'}) {
            $object->setText($data->{'text'});
        } elseif (property_exists($data, 'text') && null === $data->{'text'}) {
            $object->setText(null);
        }
        if (property_exists($data, 'type') && null !== $data->{'type'}) {
            $object->setType($data->{'type'});
        } elseif (property_exists($data, 'type') && null === $data->{'type'}) {
            $object->setType(null);
        }
        if (property_exists($data, 'value') && null !== $data->{'value'}) {
            $object->setValue($data->{'value'});
        } elseif (property_exists($data, 'value') && null === $data->{'value'}) {
            $object->setValue(null);
        }
        if (property_exists($data, 'style') && null !== $data->{'style'}) {
            $object->setStyle($data->{'style'});
        } elseif (property_exists($data, 'style') && null === $data->{'style'}) {
            $object->setStyle(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        } else {
            $data->{'id'} = null;
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        } else {
            $data->{'name'} = null;
        }
        if (null !== $object->getText()) {
            $data->{'text'} = $object->getText();
        } else {
            $data->{'text'} = null;
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        } else {
            $data->{'type'} = null;
        }
        if (null !== $object->getValue()) {
            $data->{'value'} = $object->getValue();
        } else {
            $data->{'value'} = null;
        }
        if (null !== $object->getStyle()) {
            $data->{'style'} = $object->getStyle();
        } else {
            $data->{'style'} = null;
        }

        return $data;
    }
}
