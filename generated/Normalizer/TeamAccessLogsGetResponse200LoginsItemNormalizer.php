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

class TeamAccessLogsGetResponse200LoginsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\TeamAccessLogsGetResponse200LoginsItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\TeamAccessLogsGetResponse200LoginsItem' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\TeamAccessLogsGetResponse200LoginsItem();
        if (property_exists($data, 'count') && null !== $data->{'count'}) {
            $object->setCount($data->{'count'});
        } elseif (property_exists($data, 'count') && null === $data->{'count'}) {
            $object->setCount(null);
        }
        if (property_exists($data, 'country') && null !== $data->{'country'}) {
            $object->setCountry($data->{'country'});
        } elseif (property_exists($data, 'country') && null === $data->{'country'}) {
            $object->setCountry(null);
        }
        if (property_exists($data, 'date_first') && null !== $data->{'date_first'}) {
            $object->setDateFirst($data->{'date_first'});
        } elseif (property_exists($data, 'date_first') && null === $data->{'date_first'}) {
            $object->setDateFirst(null);
        }
        if (property_exists($data, 'date_last') && null !== $data->{'date_last'}) {
            $object->setDateLast($data->{'date_last'});
        } elseif (property_exists($data, 'date_last') && null === $data->{'date_last'}) {
            $object->setDateLast(null);
        }
        if (property_exists($data, 'ip') && null !== $data->{'ip'}) {
            $object->setIp($data->{'ip'});
        } elseif (property_exists($data, 'ip') && null === $data->{'ip'}) {
            $object->setIp(null);
        }
        if (property_exists($data, 'isp') && null !== $data->{'isp'}) {
            $object->setIsp($data->{'isp'});
        } elseif (property_exists($data, 'isp') && null === $data->{'isp'}) {
            $object->setIsp(null);
        }
        if (property_exists($data, 'region') && null !== $data->{'region'}) {
            $object->setRegion($data->{'region'});
        } elseif (property_exists($data, 'region') && null === $data->{'region'}) {
            $object->setRegion(null);
        }
        if (property_exists($data, 'user_agent') && null !== $data->{'user_agent'}) {
            $object->setUserAgent($data->{'user_agent'});
        } elseif (property_exists($data, 'user_agent') && null === $data->{'user_agent'}) {
            $object->setUserAgent(null);
        }
        if (property_exists($data, 'user_id') && null !== $data->{'user_id'}) {
            $object->setUserId($data->{'user_id'});
        } elseif (property_exists($data, 'user_id') && null === $data->{'user_id'}) {
            $object->setUserId(null);
        }
        if (property_exists($data, 'username') && null !== $data->{'username'}) {
            $object->setUsername($data->{'username'});
        } elseif (property_exists($data, 'username') && null === $data->{'username'}) {
            $object->setUsername(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCount()) {
            $data->{'count'} = $object->getCount();
        } else {
            $data->{'count'} = null;
        }
        if (null !== $object->getCountry()) {
            $data->{'country'} = $object->getCountry();
        } else {
            $data->{'country'} = null;
        }
        if (null !== $object->getDateFirst()) {
            $data->{'date_first'} = $object->getDateFirst();
        } else {
            $data->{'date_first'} = null;
        }
        if (null !== $object->getDateLast()) {
            $data->{'date_last'} = $object->getDateLast();
        } else {
            $data->{'date_last'} = null;
        }
        if (null !== $object->getIp()) {
            $data->{'ip'} = $object->getIp();
        } else {
            $data->{'ip'} = null;
        }
        if (null !== $object->getIsp()) {
            $data->{'isp'} = $object->getIsp();
        } else {
            $data->{'isp'} = null;
        }
        if (null !== $object->getRegion()) {
            $data->{'region'} = $object->getRegion();
        } else {
            $data->{'region'} = null;
        }
        if (null !== $object->getUserAgent()) {
            $data->{'user_agent'} = $object->getUserAgent();
        } else {
            $data->{'user_agent'} = null;
        }
        if (null !== $object->getUserId()) {
            $data->{'user_id'} = $object->getUserId();
        } else {
            $data->{'user_id'} = null;
        }
        if (null !== $object->getUsername()) {
            $data->{'username'} = $object->getUsername();
        } else {
            $data->{'username'} = null;
        }

        return $data;
    }
}
