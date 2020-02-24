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

class UsersIdentityGetResponse200Item2UserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\UsersIdentityGetResponse200Item2User' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\UsersIdentityGetResponse200Item2User' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item2User();
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        } elseif (property_exists($data, 'id') && null === $data->{'id'}) {
            $object->setId(null);
        }
        if (property_exists($data, 'image_192') && null !== $data->{'image_192'}) {
            $object->setImage192($data->{'image_192'});
        } elseif (property_exists($data, 'image_192') && null === $data->{'image_192'}) {
            $object->setImage192(null);
        }
        if (property_exists($data, 'image_24') && null !== $data->{'image_24'}) {
            $object->setImage24($data->{'image_24'});
        } elseif (property_exists($data, 'image_24') && null === $data->{'image_24'}) {
            $object->setImage24(null);
        }
        if (property_exists($data, 'image_32') && null !== $data->{'image_32'}) {
            $object->setImage32($data->{'image_32'});
        } elseif (property_exists($data, 'image_32') && null === $data->{'image_32'}) {
            $object->setImage32(null);
        }
        if (property_exists($data, 'image_48') && null !== $data->{'image_48'}) {
            $object->setImage48($data->{'image_48'});
        } elseif (property_exists($data, 'image_48') && null === $data->{'image_48'}) {
            $object->setImage48(null);
        }
        if (property_exists($data, 'image_512') && null !== $data->{'image_512'}) {
            $object->setImage512($data->{'image_512'});
        } elseif (property_exists($data, 'image_512') && null === $data->{'image_512'}) {
            $object->setImage512(null);
        }
        if (property_exists($data, 'image_72') && null !== $data->{'image_72'}) {
            $object->setImage72($data->{'image_72'});
        } elseif (property_exists($data, 'image_72') && null === $data->{'image_72'}) {
            $object->setImage72(null);
        }
        if (property_exists($data, 'name') && null !== $data->{'name'}) {
            $object->setName($data->{'name'});
        } elseif (property_exists($data, 'name') && null === $data->{'name'}) {
            $object->setName(null);
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
        if (null !== $object->getImage192()) {
            $data->{'image_192'} = $object->getImage192();
        } else {
            $data->{'image_192'} = null;
        }
        if (null !== $object->getImage24()) {
            $data->{'image_24'} = $object->getImage24();
        } else {
            $data->{'image_24'} = null;
        }
        if (null !== $object->getImage32()) {
            $data->{'image_32'} = $object->getImage32();
        } else {
            $data->{'image_32'} = null;
        }
        if (null !== $object->getImage48()) {
            $data->{'image_48'} = $object->getImage48();
        } else {
            $data->{'image_48'} = null;
        }
        if (null !== $object->getImage512()) {
            $data->{'image_512'} = $object->getImage512();
        } else {
            $data->{'image_512'} = null;
        }
        if (null !== $object->getImage72()) {
            $data->{'image_72'} = $object->getImage72();
        } else {
            $data->{'image_72'} = null;
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        } else {
            $data->{'name'} = null;
        }

        return $data;
    }
}
