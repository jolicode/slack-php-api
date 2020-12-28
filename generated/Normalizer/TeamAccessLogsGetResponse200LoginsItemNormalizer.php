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

class TeamAccessLogsGetResponse200LoginsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\TeamAccessLogsGetResponse200LoginsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('count', $data) && null !== $data['count']) {
            $object->setCount($data['count']);
        } elseif (\array_key_exists('count', $data) && null === $data['count']) {
            $object->setCount(null);
        }
        if (\array_key_exists('country', $data) && null !== $data['country']) {
            $value = $data['country'];
            if (\is_string($data['country'])) {
                $value = $data['country'];
            }
            $object->setCountry($value);
        } elseif (\array_key_exists('country', $data) && null === $data['country']) {
            $object->setCountry(null);
        }
        if (\array_key_exists('date_first', $data) && null !== $data['date_first']) {
            $object->setDateFirst($data['date_first']);
        } elseif (\array_key_exists('date_first', $data) && null === $data['date_first']) {
            $object->setDateFirst(null);
        }
        if (\array_key_exists('date_last', $data) && null !== $data['date_last']) {
            $object->setDateLast($data['date_last']);
        } elseif (\array_key_exists('date_last', $data) && null === $data['date_last']) {
            $object->setDateLast(null);
        }
        if (\array_key_exists('ip', $data) && null !== $data['ip']) {
            $value_1 = $data['ip'];
            if (\is_string($data['ip'])) {
                $value_1 = $data['ip'];
            }
            $object->setIp($value_1);
        } elseif (\array_key_exists('ip', $data) && null === $data['ip']) {
            $object->setIp(null);
        }
        if (\array_key_exists('isp', $data) && null !== $data['isp']) {
            $value_2 = $data['isp'];
            if (\is_string($data['isp'])) {
                $value_2 = $data['isp'];
            }
            $object->setIsp($value_2);
        } elseif (\array_key_exists('isp', $data) && null === $data['isp']) {
            $object->setIsp(null);
        }
        if (\array_key_exists('region', $data) && null !== $data['region']) {
            $value_3 = $data['region'];
            if (\is_string($data['region'])) {
                $value_3 = $data['region'];
            }
            $object->setRegion($value_3);
        } elseif (\array_key_exists('region', $data) && null === $data['region']) {
            $object->setRegion(null);
        }
        if (\array_key_exists('user_agent', $data) && null !== $data['user_agent']) {
            $object->setUserAgent($data['user_agent']);
        } elseif (\array_key_exists('user_agent', $data) && null === $data['user_agent']) {
            $object->setUserAgent(null);
        }
        if (\array_key_exists('user_id', $data) && null !== $data['user_id']) {
            $object->setUserId($data['user_id']);
        } elseif (\array_key_exists('user_id', $data) && null === $data['user_id']) {
            $object->setUserId(null);
        }
        if (\array_key_exists('username', $data) && null !== $data['username']) {
            $object->setUsername($data['username']);
        } elseif (\array_key_exists('username', $data) && null === $data['username']) {
            $object->setUsername(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['count'] = $object->getCount();
        $value = $object->getCountry();
        if (\is_string($object->getCountry())) {
            $value = $object->getCountry();
        }
        $data['country'] = $value;
        $data['date_first'] = $object->getDateFirst();
        $data['date_last'] = $object->getDateLast();
        $value_1 = $object->getIp();
        if (\is_string($object->getIp())) {
            $value_1 = $object->getIp();
        }
        $data['ip'] = $value_1;
        $value_2 = $object->getIsp();
        if (\is_string($object->getIsp())) {
            $value_2 = $object->getIsp();
        }
        $data['isp'] = $value_2;
        $value_3 = $object->getRegion();
        if (\is_string($object->getRegion())) {
            $value_3 = $object->getRegion();
        }
        $data['region'] = $value_3;
        $data['user_agent'] = $object->getUserAgent();
        $data['user_id'] = $object->getUserId();
        $data['username'] = $object->getUsername();

        return $data;
    }
}
