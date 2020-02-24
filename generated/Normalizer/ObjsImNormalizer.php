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

class ObjsImNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ObjsIm' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsIm' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\ObjsIm();
        if (property_exists($data, 'created') && null !== $data->{'created'}) {
            $object->setCreated($data->{'created'});
        } elseif (property_exists($data, 'created') && null === $data->{'created'}) {
            $object->setCreated(null);
        }
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        } elseif (property_exists($data, 'id') && null === $data->{'id'}) {
            $object->setId(null);
        }
        if (property_exists($data, 'is_app_home') && null !== $data->{'is_app_home'}) {
            $object->setIsAppHome($data->{'is_app_home'});
        } elseif (property_exists($data, 'is_app_home') && null === $data->{'is_app_home'}) {
            $object->setIsAppHome(null);
        }
        if (property_exists($data, 'is_ext_shared') && null !== $data->{'is_ext_shared'}) {
            $object->setIsExtShared($data->{'is_ext_shared'});
        } elseif (property_exists($data, 'is_ext_shared') && null === $data->{'is_ext_shared'}) {
            $object->setIsExtShared(null);
        }
        if (property_exists($data, 'is_im') && null !== $data->{'is_im'}) {
            $object->setIsIm($data->{'is_im'});
        } elseif (property_exists($data, 'is_im') && null === $data->{'is_im'}) {
            $object->setIsIm(null);
        }
        if (property_exists($data, 'is_org_shared') && null !== $data->{'is_org_shared'}) {
            $object->setIsOrgShared($data->{'is_org_shared'});
        } elseif (property_exists($data, 'is_org_shared') && null === $data->{'is_org_shared'}) {
            $object->setIsOrgShared(null);
        }
        if (property_exists($data, 'is_shared') && null !== $data->{'is_shared'}) {
            $object->setIsShared($data->{'is_shared'});
        } elseif (property_exists($data, 'is_shared') && null === $data->{'is_shared'}) {
            $object->setIsShared(null);
        }
        if (property_exists($data, 'is_user_deleted') && null !== $data->{'is_user_deleted'}) {
            $object->setIsUserDeleted($data->{'is_user_deleted'});
        } elseif (property_exists($data, 'is_user_deleted') && null === $data->{'is_user_deleted'}) {
            $object->setIsUserDeleted(null);
        }
        if (property_exists($data, 'priority') && null !== $data->{'priority'}) {
            $object->setPriority($data->{'priority'});
        } elseif (property_exists($data, 'priority') && null === $data->{'priority'}) {
            $object->setPriority(null);
        }
        if (property_exists($data, 'user') && null !== $data->{'user'}) {
            $object->setUser($data->{'user'});
        } elseif (property_exists($data, 'user') && null === $data->{'user'}) {
            $object->setUser(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCreated()) {
            $data->{'created'} = $object->getCreated();
        } else {
            $data->{'created'} = null;
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        } else {
            $data->{'id'} = null;
        }
        if (null !== $object->getIsAppHome()) {
            $data->{'is_app_home'} = $object->getIsAppHome();
        } else {
            $data->{'is_app_home'} = null;
        }
        if (null !== $object->getIsExtShared()) {
            $data->{'is_ext_shared'} = $object->getIsExtShared();
        } else {
            $data->{'is_ext_shared'} = null;
        }
        if (null !== $object->getIsIm()) {
            $data->{'is_im'} = $object->getIsIm();
        } else {
            $data->{'is_im'} = null;
        }
        if (null !== $object->getIsOrgShared()) {
            $data->{'is_org_shared'} = $object->getIsOrgShared();
        } else {
            $data->{'is_org_shared'} = null;
        }
        if (null !== $object->getIsShared()) {
            $data->{'is_shared'} = $object->getIsShared();
        } else {
            $data->{'is_shared'} = null;
        }
        if (null !== $object->getIsUserDeleted()) {
            $data->{'is_user_deleted'} = $object->getIsUserDeleted();
        } else {
            $data->{'is_user_deleted'} = null;
        }
        if (null !== $object->getPriority()) {
            $data->{'priority'} = $object->getPriority();
        } else {
            $data->{'priority'} = null;
        }
        if (null !== $object->getUser()) {
            $data->{'user'} = $object->getUser();
        } else {
            $data->{'user'} = null;
        }

        return $data;
    }
}
