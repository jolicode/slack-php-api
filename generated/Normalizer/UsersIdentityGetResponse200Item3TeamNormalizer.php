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

class UsersIdentityGetResponse200Item3TeamNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\UsersIdentityGetResponse200Item3Team' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\UsersIdentityGetResponse200Item3Team' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item3Team();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('domain', $data) && null !== $data['domain']) {
            $object->setDomain($data['domain']);
        } elseif (\array_key_exists('domain', $data) && null === $data['domain']) {
            $object->setDomain(null);
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('image_102', $data) && null !== $data['image_102']) {
            $object->setImage102($data['image_102']);
        } elseif (\array_key_exists('image_102', $data) && null === $data['image_102']) {
            $object->setImage102(null);
        }
        if (\array_key_exists('image_132', $data) && null !== $data['image_132']) {
            $object->setImage132($data['image_132']);
        } elseif (\array_key_exists('image_132', $data) && null === $data['image_132']) {
            $object->setImage132(null);
        }
        if (\array_key_exists('image_230', $data) && null !== $data['image_230']) {
            $object->setImage230($data['image_230']);
        } elseif (\array_key_exists('image_230', $data) && null === $data['image_230']) {
            $object->setImage230(null);
        }
        if (\array_key_exists('image_34', $data) && null !== $data['image_34']) {
            $object->setImage34($data['image_34']);
        } elseif (\array_key_exists('image_34', $data) && null === $data['image_34']) {
            $object->setImage34(null);
        }
        if (\array_key_exists('image_44', $data) && null !== $data['image_44']) {
            $object->setImage44($data['image_44']);
        } elseif (\array_key_exists('image_44', $data) && null === $data['image_44']) {
            $object->setImage44(null);
        }
        if (\array_key_exists('image_68', $data) && null !== $data['image_68']) {
            $object->setImage68($data['image_68']);
        } elseif (\array_key_exists('image_68', $data) && null === $data['image_68']) {
            $object->setImage68(null);
        }
        if (\array_key_exists('image_88', $data) && null !== $data['image_88']) {
            $object->setImage88($data['image_88']);
        } elseif (\array_key_exists('image_88', $data) && null === $data['image_88']) {
            $object->setImage88(null);
        }
        if (\array_key_exists('image_default', $data) && null !== $data['image_default']) {
            $object->setImageDefault($data['image_default']);
        } elseif (\array_key_exists('image_default', $data) && null === $data['image_default']) {
            $object->setImageDefault(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['domain'] = $object->getDomain();
        $data['id'] = $object->getId();
        $data['image_102'] = $object->getImage102();
        $data['image_132'] = $object->getImage132();
        $data['image_230'] = $object->getImage230();
        $data['image_34'] = $object->getImage34();
        $data['image_44'] = $object->getImage44();
        $data['image_68'] = $object->getImage68();
        $data['image_88'] = $object->getImage88();
        $data['image_default'] = $object->getImageDefault();
        $data['name'] = $object->getName();

        return $data;
    }
}
