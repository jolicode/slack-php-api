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

use Jane\Component\JsonSchemaRuntime\Reference;
use JoliCode\Slack\Api\Runtime\Normalizer\CheckArray;
use JoliCode\Slack\Api\Runtime\Normalizer\ValidatorTrait;
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
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\TeamAccessLogsGetResponse200LoginsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\TeamAccessLogsGetResponse200LoginsItem::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \JoliCode\Slack\Api\Model\TeamAccessLogsGetResponse200LoginsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('count', $data) && null !== $data['count']) {
            $object->count = $data['count'];
        } elseif (\array_key_exists('count', $data)) {
            $object->count = null;
        }
        if (\array_key_exists('country', $data) && null !== $data['country']) {
            $value = $data['country'];
            if (\is_string($data['country'])) {
                $value = $data['country'];
            }
            $object->country = $value;
        } elseif (\array_key_exists('country', $data)) {
            $object->country = null;
        }
        if (\array_key_exists('date_first', $data) && null !== $data['date_first']) {
            $object->dateFirst = $data['date_first'];
        } elseif (\array_key_exists('date_first', $data)) {
            $object->dateFirst = null;
        }
        if (\array_key_exists('date_last', $data) && null !== $data['date_last']) {
            $object->dateLast = $data['date_last'];
        } elseif (\array_key_exists('date_last', $data)) {
            $object->dateLast = null;
        }
        if (\array_key_exists('ip', $data) && null !== $data['ip']) {
            $value_1 = $data['ip'];
            if (\is_string($data['ip'])) {
                $value_1 = $data['ip'];
            }
            $object->ip = $value_1;
        } elseif (\array_key_exists('ip', $data)) {
            $object->ip = null;
        }
        if (\array_key_exists('isp', $data) && null !== $data['isp']) {
            $value_2 = $data['isp'];
            if (\is_string($data['isp'])) {
                $value_2 = $data['isp'];
            }
            $object->isp = $value_2;
        } elseif (\array_key_exists('isp', $data)) {
            $object->isp = null;
        }
        if (\array_key_exists('region', $data) && null !== $data['region']) {
            $value_3 = $data['region'];
            if (\is_string($data['region'])) {
                $value_3 = $data['region'];
            }
            $object->region = $value_3;
        } elseif (\array_key_exists('region', $data)) {
            $object->region = null;
        }
        if (\array_key_exists('user_agent', $data) && null !== $data['user_agent']) {
            $object->userAgent = $data['user_agent'];
        } elseif (\array_key_exists('user_agent', $data)) {
            $object->userAgent = null;
        }
        if (\array_key_exists('user_id', $data) && null !== $data['user_id']) {
            $object->userId = $data['user_id'];
        } elseif (\array_key_exists('user_id', $data)) {
            $object->userId = null;
        }
        if (\array_key_exists('username', $data) && null !== $data['username']) {
            $object->username = $data['username'];
        } elseif (\array_key_exists('username', $data)) {
            $object->username = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['count'] = $data->count;
        $value = $data->country;
        if (\is_string($data->country)) {
            $value = $data->country;
        }
        $dataArray['country'] = $value;
        $dataArray['date_first'] = $data->dateFirst;
        $dataArray['date_last'] = $data->dateLast;
        $value_1 = $data->ip;
        if (\is_string($data->ip)) {
            $value_1 = $data->ip;
        }
        $dataArray['ip'] = $value_1;
        $value_2 = $data->isp;
        if (\is_string($data->isp)) {
            $value_2 = $data->isp;
        }
        $dataArray['isp'] = $value_2;
        $value_3 = $data->region;
        if (\is_string($data->region)) {
            $value_3 = $data->region;
        }
        $dataArray['region'] = $value_3;
        $dataArray['user_agent'] = $data->userAgent;
        $dataArray['user_id'] = $data->userId;
        $dataArray['username'] = $data->username;

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\TeamAccessLogsGetResponse200LoginsItem::class => false];
    }
}
