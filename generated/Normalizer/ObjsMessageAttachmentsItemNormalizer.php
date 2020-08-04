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

class ObjsMessageAttachmentsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ObjsMessageAttachmentsItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsMessageAttachmentsItem' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItem();
        if (property_exists($data, 'fallback') && null !== $data->{'fallback'}) {
            $object->setFallback($data->{'fallback'});
        } elseif (property_exists($data, 'fallback') && null === $data->{'fallback'}) {
            $object->setFallback(null);
        }
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        } elseif (property_exists($data, 'id') && null === $data->{'id'}) {
            $object->setId(null);
        }
        if (property_exists($data, 'image_bytes') && null !== $data->{'image_bytes'}) {
            $object->setImageBytes($data->{'image_bytes'});
        } elseif (property_exists($data, 'image_bytes') && null === $data->{'image_bytes'}) {
            $object->setImageBytes(null);
        }
        if (property_exists($data, 'image_height') && null !== $data->{'image_height'}) {
            $object->setImageHeight($data->{'image_height'});
        } elseif (property_exists($data, 'image_height') && null === $data->{'image_height'}) {
            $object->setImageHeight(null);
        }
        if (property_exists($data, 'image_url') && null !== $data->{'image_url'}) {
            $object->setImageUrl($data->{'image_url'});
        } elseif (property_exists($data, 'image_url') && null === $data->{'image_url'}) {
            $object->setImageUrl(null);
        }
        if (property_exists($data, 'image_width') && null !== $data->{'image_width'}) {
            $object->setImageWidth($data->{'image_width'});
        } elseif (property_exists($data, 'image_width') && null === $data->{'image_width'}) {
            $object->setImageWidth(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getFallback()) {
            $data->{'fallback'} = $object->getFallback();
        } else {
            $data->{'fallback'} = null;
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        } else {
            $data->{'id'} = null;
        }
        if (null !== $object->getImageBytes()) {
            $data->{'image_bytes'} = $object->getImageBytes();
        } else {
            $data->{'image_bytes'} = null;
        }
        if (null !== $object->getImageHeight()) {
            $data->{'image_height'} = $object->getImageHeight();
        } else {
            $data->{'image_height'} = null;
        }
        if (null !== $object->getImageUrl()) {
            $data->{'image_url'} = $object->getImageUrl();
        } else {
            $data->{'image_url'} = null;
        }
        if (null !== $object->getImageWidth()) {
            $data->{'image_width'} = $object->getImageWidth();
        } else {
            $data->{'image_width'} = null;
        }

        return $data;
    }
}
