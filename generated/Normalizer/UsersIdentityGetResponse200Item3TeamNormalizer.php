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

class UsersIdentityGetResponse200Item3TeamNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
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
        if (!\is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item3Team();
        if (property_exists($data, 'domain') && null !== $data->{'domain'}) {
            $object->setDomain($data->{'domain'});
        } elseif (property_exists($data, 'domain') && null === $data->{'domain'}) {
            $object->setDomain(null);
        }
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        } elseif (property_exists($data, 'id') && null === $data->{'id'}) {
            $object->setId(null);
        }
        if (property_exists($data, 'image_102') && null !== $data->{'image_102'}) {
            $object->setImage102($data->{'image_102'});
        } elseif (property_exists($data, 'image_102') && null === $data->{'image_102'}) {
            $object->setImage102(null);
        }
        if (property_exists($data, 'image_132') && null !== $data->{'image_132'}) {
            $object->setImage132($data->{'image_132'});
        } elseif (property_exists($data, 'image_132') && null === $data->{'image_132'}) {
            $object->setImage132(null);
        }
        if (property_exists($data, 'image_230') && null !== $data->{'image_230'}) {
            $object->setImage230($data->{'image_230'});
        } elseif (property_exists($data, 'image_230') && null === $data->{'image_230'}) {
            $object->setImage230(null);
        }
        if (property_exists($data, 'image_34') && null !== $data->{'image_34'}) {
            $object->setImage34($data->{'image_34'});
        } elseif (property_exists($data, 'image_34') && null === $data->{'image_34'}) {
            $object->setImage34(null);
        }
        if (property_exists($data, 'image_44') && null !== $data->{'image_44'}) {
            $object->setImage44($data->{'image_44'});
        } elseif (property_exists($data, 'image_44') && null === $data->{'image_44'}) {
            $object->setImage44(null);
        }
        if (property_exists($data, 'image_68') && null !== $data->{'image_68'}) {
            $object->setImage68($data->{'image_68'});
        } elseif (property_exists($data, 'image_68') && null === $data->{'image_68'}) {
            $object->setImage68(null);
        }
        if (property_exists($data, 'image_88') && null !== $data->{'image_88'}) {
            $object->setImage88($data->{'image_88'});
        } elseif (property_exists($data, 'image_88') && null === $data->{'image_88'}) {
            $object->setImage88(null);
        }
        if (property_exists($data, 'image_default') && null !== $data->{'image_default'}) {
            $object->setImageDefault($data->{'image_default'});
        } elseif (property_exists($data, 'image_default') && null === $data->{'image_default'}) {
            $object->setImageDefault(null);
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
        if (null !== $object->getDomain()) {
            $data->{'domain'} = $object->getDomain();
        } else {
            $data->{'domain'} = null;
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        } else {
            $data->{'id'} = null;
        }
        if (null !== $object->getImage102()) {
            $data->{'image_102'} = $object->getImage102();
        } else {
            $data->{'image_102'} = null;
        }
        if (null !== $object->getImage132()) {
            $data->{'image_132'} = $object->getImage132();
        } else {
            $data->{'image_132'} = null;
        }
        if (null !== $object->getImage230()) {
            $data->{'image_230'} = $object->getImage230();
        } else {
            $data->{'image_230'} = null;
        }
        if (null !== $object->getImage34()) {
            $data->{'image_34'} = $object->getImage34();
        } else {
            $data->{'image_34'} = null;
        }
        if (null !== $object->getImage44()) {
            $data->{'image_44'} = $object->getImage44();
        } else {
            $data->{'image_44'} = null;
        }
        if (null !== $object->getImage68()) {
            $data->{'image_68'} = $object->getImage68();
        } else {
            $data->{'image_68'} = null;
        }
        if (null !== $object->getImage88()) {
            $data->{'image_88'} = $object->getImage88();
        } else {
            $data->{'image_88'} = null;
        }
        if (null !== $object->getImageDefault()) {
            $data->{'image_default'} = $object->getImageDefault();
        } else {
            $data->{'image_default'} = null;
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        } else {
            $data->{'name'} = null;
        }

        return $data;
    }
}
