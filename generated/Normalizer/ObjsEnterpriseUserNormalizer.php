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

class ObjsEnterpriseUserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ObjsEnterpriseUser' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsEnterpriseUser' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\ObjsEnterpriseUser();
        if (property_exists($data, 'enterprise_id') && null !== $data->{'enterprise_id'}) {
            $object->setEnterpriseId($data->{'enterprise_id'});
        } elseif (property_exists($data, 'enterprise_id') && null === $data->{'enterprise_id'}) {
            $object->setEnterpriseId(null);
        }
        if (property_exists($data, 'enterprise_name') && null !== $data->{'enterprise_name'}) {
            $object->setEnterpriseName($data->{'enterprise_name'});
        } elseif (property_exists($data, 'enterprise_name') && null === $data->{'enterprise_name'}) {
            $object->setEnterpriseName(null);
        }
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        } elseif (property_exists($data, 'id') && null === $data->{'id'}) {
            $object->setId(null);
        }
        if (property_exists($data, 'is_admin') && null !== $data->{'is_admin'}) {
            $object->setIsAdmin($data->{'is_admin'});
        } elseif (property_exists($data, 'is_admin') && null === $data->{'is_admin'}) {
            $object->setIsAdmin(null);
        }
        if (property_exists($data, 'is_owner') && null !== $data->{'is_owner'}) {
            $object->setIsOwner($data->{'is_owner'});
        } elseif (property_exists($data, 'is_owner') && null === $data->{'is_owner'}) {
            $object->setIsOwner(null);
        }
        if (property_exists($data, 'teams') && null !== $data->{'teams'}) {
            $values = [];
            foreach ($data->{'teams'} as $value) {
                $values[] = $value;
            }
            $object->setTeams($values);
        } elseif (property_exists($data, 'teams') && null === $data->{'teams'}) {
            $object->setTeams(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getEnterpriseId()) {
            $data->{'enterprise_id'} = $object->getEnterpriseId();
        } else {
            $data->{'enterprise_id'} = null;
        }
        if (null !== $object->getEnterpriseName()) {
            $data->{'enterprise_name'} = $object->getEnterpriseName();
        } else {
            $data->{'enterprise_name'} = null;
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        } else {
            $data->{'id'} = null;
        }
        if (null !== $object->getIsAdmin()) {
            $data->{'is_admin'} = $object->getIsAdmin();
        } else {
            $data->{'is_admin'} = null;
        }
        if (null !== $object->getIsOwner()) {
            $data->{'is_owner'} = $object->getIsOwner();
        } else {
            $data->{'is_owner'} = null;
        }
        if (null !== $object->getTeams()) {
            $values = [];
            foreach ($object->getTeams() as $value) {
                $values[] = $value;
            }
            $data->{'teams'} = $values;
        } else {
            $data->{'teams'} = null;
        }

        return $data;
    }
}
