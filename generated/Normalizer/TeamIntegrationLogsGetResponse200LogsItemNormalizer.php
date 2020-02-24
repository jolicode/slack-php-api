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

class TeamIntegrationLogsGetResponse200LogsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\TeamIntegrationLogsGetResponse200LogsItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\TeamIntegrationLogsGetResponse200LogsItem' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\TeamIntegrationLogsGetResponse200LogsItem();
        if (property_exists($data, 'admin_app_id') && null !== $data->{'admin_app_id'}) {
            $object->setAdminAppId($data->{'admin_app_id'});
        } elseif (property_exists($data, 'admin_app_id') && null === $data->{'admin_app_id'}) {
            $object->setAdminAppId(null);
        }
        if (property_exists($data, 'app_id') && null !== $data->{'app_id'}) {
            $object->setAppId($data->{'app_id'});
        } elseif (property_exists($data, 'app_id') && null === $data->{'app_id'}) {
            $object->setAppId(null);
        }
        if (property_exists($data, 'app_type') && null !== $data->{'app_type'}) {
            $object->setAppType($data->{'app_type'});
        } elseif (property_exists($data, 'app_type') && null === $data->{'app_type'}) {
            $object->setAppType(null);
        }
        if (property_exists($data, 'change_type') && null !== $data->{'change_type'}) {
            $object->setChangeType($data->{'change_type'});
        } elseif (property_exists($data, 'change_type') && null === $data->{'change_type'}) {
            $object->setChangeType(null);
        }
        if (property_exists($data, 'channel') && null !== $data->{'channel'}) {
            $object->setChannel($data->{'channel'});
        } elseif (property_exists($data, 'channel') && null === $data->{'channel'}) {
            $object->setChannel(null);
        }
        if (property_exists($data, 'date') && null !== $data->{'date'}) {
            $object->setDate($data->{'date'});
        } elseif (property_exists($data, 'date') && null === $data->{'date'}) {
            $object->setDate(null);
        }
        if (property_exists($data, 'scope') && null !== $data->{'scope'}) {
            $object->setScope($data->{'scope'});
        } elseif (property_exists($data, 'scope') && null === $data->{'scope'}) {
            $object->setScope(null);
        }
        if (property_exists($data, 'service_id') && null !== $data->{'service_id'}) {
            $object->setServiceId($data->{'service_id'});
        } elseif (property_exists($data, 'service_id') && null === $data->{'service_id'}) {
            $object->setServiceId(null);
        }
        if (property_exists($data, 'service_type') && null !== $data->{'service_type'}) {
            $object->setServiceType($data->{'service_type'});
        } elseif (property_exists($data, 'service_type') && null === $data->{'service_type'}) {
            $object->setServiceType(null);
        }
        if (property_exists($data, 'user_id') && null !== $data->{'user_id'}) {
            $object->setUserId($data->{'user_id'});
        } elseif (property_exists($data, 'user_id') && null === $data->{'user_id'}) {
            $object->setUserId(null);
        }
        if (property_exists($data, 'user_name') && null !== $data->{'user_name'}) {
            $object->setUserName($data->{'user_name'});
        } elseif (property_exists($data, 'user_name') && null === $data->{'user_name'}) {
            $object->setUserName(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAdminAppId()) {
            $data->{'admin_app_id'} = $object->getAdminAppId();
        } else {
            $data->{'admin_app_id'} = null;
        }
        if (null !== $object->getAppId()) {
            $data->{'app_id'} = $object->getAppId();
        } else {
            $data->{'app_id'} = null;
        }
        if (null !== $object->getAppType()) {
            $data->{'app_type'} = $object->getAppType();
        } else {
            $data->{'app_type'} = null;
        }
        if (null !== $object->getChangeType()) {
            $data->{'change_type'} = $object->getChangeType();
        } else {
            $data->{'change_type'} = null;
        }
        if (null !== $object->getChannel()) {
            $data->{'channel'} = $object->getChannel();
        } else {
            $data->{'channel'} = null;
        }
        if (null !== $object->getDate()) {
            $data->{'date'} = $object->getDate();
        } else {
            $data->{'date'} = null;
        }
        if (null !== $object->getScope()) {
            $data->{'scope'} = $object->getScope();
        } else {
            $data->{'scope'} = null;
        }
        if (null !== $object->getServiceId()) {
            $data->{'service_id'} = $object->getServiceId();
        } else {
            $data->{'service_id'} = null;
        }
        if (null !== $object->getServiceType()) {
            $data->{'service_type'} = $object->getServiceType();
        } else {
            $data->{'service_type'} = null;
        }
        if (null !== $object->getUserId()) {
            $data->{'user_id'} = $object->getUserId();
        } else {
            $data->{'user_id'} = null;
        }
        if (null !== $object->getUserName()) {
            $data->{'user_name'} = $object->getUserName();
        } else {
            $data->{'user_name'} = null;
        }

        return $data;
    }
}
