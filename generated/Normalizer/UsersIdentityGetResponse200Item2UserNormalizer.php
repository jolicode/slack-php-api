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

class UsersIdentityGetResponse200Item2UserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item2User();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('image_192', $data) && null !== $data['image_192']) {
            $object->setImage192($data['image_192']);
        } elseif (\array_key_exists('image_192', $data) && null === $data['image_192']) {
            $object->setImage192(null);
        }
        if (\array_key_exists('image_24', $data) && null !== $data['image_24']) {
            $object->setImage24($data['image_24']);
        } elseif (\array_key_exists('image_24', $data) && null === $data['image_24']) {
            $object->setImage24(null);
        }
        if (\array_key_exists('image_32', $data) && null !== $data['image_32']) {
            $object->setImage32($data['image_32']);
        } elseif (\array_key_exists('image_32', $data) && null === $data['image_32']) {
            $object->setImage32(null);
        }
        if (\array_key_exists('image_48', $data) && null !== $data['image_48']) {
            $object->setImage48($data['image_48']);
        } elseif (\array_key_exists('image_48', $data) && null === $data['image_48']) {
            $object->setImage48(null);
        }
        if (\array_key_exists('image_512', $data) && null !== $data['image_512']) {
            $object->setImage512($data['image_512']);
        } elseif (\array_key_exists('image_512', $data) && null === $data['image_512']) {
            $object->setImage512(null);
        }
        if (\array_key_exists('image_72', $data) && null !== $data['image_72']) {
            $object->setImage72($data['image_72']);
        } elseif (\array_key_exists('image_72', $data) && null === $data['image_72']) {
            $object->setImage72(null);
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
        $data['id'] = $object->getId();
        $data['image_192'] = $object->getImage192();
        $data['image_24'] = $object->getImage24();
        $data['image_32'] = $object->getImage32();
        $data['image_48'] = $object->getImage48();
        $data['image_512'] = $object->getImage512();
        $data['image_72'] = $object->getImage72();
        $data['name'] = $object->getName();

        return $data;
    }
}
