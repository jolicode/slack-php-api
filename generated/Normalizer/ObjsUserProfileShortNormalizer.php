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

class ObjsUserProfileShortNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ObjsUserProfileShort' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsUserProfileShort' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\ObjsUserProfileShort();
        if (property_exists($data, 'avatar_hash') && null !== $data->{'avatar_hash'}) {
            $object->setAvatarHash($data->{'avatar_hash'});
        } elseif (property_exists($data, 'avatar_hash') && null === $data->{'avatar_hash'}) {
            $object->setAvatarHash(null);
        }
        if (property_exists($data, 'display_name') && null !== $data->{'display_name'}) {
            $object->setDisplayName($data->{'display_name'});
        } elseif (property_exists($data, 'display_name') && null === $data->{'display_name'}) {
            $object->setDisplayName(null);
        }
        if (property_exists($data, 'first_name') && null !== $data->{'first_name'}) {
            $object->setFirstName($data->{'first_name'});
        } elseif (property_exists($data, 'first_name') && null === $data->{'first_name'}) {
            $object->setFirstName(null);
        }
        if (property_exists($data, 'image_72') && null !== $data->{'image_72'}) {
            $object->setImage72($data->{'image_72'});
        } elseif (property_exists($data, 'image_72') && null === $data->{'image_72'}) {
            $object->setImage72(null);
        }
        if (property_exists($data, 'is_restricted') && null !== $data->{'is_restricted'}) {
            $object->setIsRestricted($data->{'is_restricted'});
        } elseif (property_exists($data, 'is_restricted') && null === $data->{'is_restricted'}) {
            $object->setIsRestricted(null);
        }
        if (property_exists($data, 'is_ultra_restricted') && null !== $data->{'is_ultra_restricted'}) {
            $object->setIsUltraRestricted($data->{'is_ultra_restricted'});
        } elseif (property_exists($data, 'is_ultra_restricted') && null === $data->{'is_ultra_restricted'}) {
            $object->setIsUltraRestricted(null);
        }
        if (property_exists($data, 'name') && null !== $data->{'name'}) {
            $object->setName($data->{'name'});
        } elseif (property_exists($data, 'name') && null === $data->{'name'}) {
            $object->setName(null);
        }
        if (property_exists($data, 'real_name') && null !== $data->{'real_name'}) {
            $object->setRealName($data->{'real_name'});
        } elseif (property_exists($data, 'real_name') && null === $data->{'real_name'}) {
            $object->setRealName(null);
        }
        if (property_exists($data, 'team') && null !== $data->{'team'}) {
            $object->setTeam($data->{'team'});
        } elseif (property_exists($data, 'team') && null === $data->{'team'}) {
            $object->setTeam(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAvatarHash()) {
            $data->{'avatar_hash'} = $object->getAvatarHash();
        } else {
            $data->{'avatar_hash'} = null;
        }
        if (null !== $object->getDisplayName()) {
            $data->{'display_name'} = $object->getDisplayName();
        } else {
            $data->{'display_name'} = null;
        }
        if (null !== $object->getFirstName()) {
            $data->{'first_name'} = $object->getFirstName();
        } else {
            $data->{'first_name'} = null;
        }
        if (null !== $object->getImage72()) {
            $data->{'image_72'} = $object->getImage72();
        } else {
            $data->{'image_72'} = null;
        }
        if (null !== $object->getIsRestricted()) {
            $data->{'is_restricted'} = $object->getIsRestricted();
        } else {
            $data->{'is_restricted'} = null;
        }
        if (null !== $object->getIsUltraRestricted()) {
            $data->{'is_ultra_restricted'} = $object->getIsUltraRestricted();
        } else {
            $data->{'is_ultra_restricted'} = null;
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        } else {
            $data->{'name'} = null;
        }
        if (null !== $object->getRealName()) {
            $data->{'real_name'} = $object->getRealName();
        } else {
            $data->{'real_name'} = null;
        }
        if (null !== $object->getTeam()) {
            $data->{'team'} = $object->getTeam();
        } else {
            $data->{'team'} = null;
        }

        return $data;
    }
}
