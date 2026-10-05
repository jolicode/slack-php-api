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

class TeamIntegrationLogsGetResponse200LogsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\TeamIntegrationLogsGetResponse200LogsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\TeamIntegrationLogsGetResponse200LogsItem::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \JoliCode\Slack\Api\Model\TeamIntegrationLogsGetResponse200LogsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('admin_app_id', $data) && null !== $data['admin_app_id']) {
            $object->adminAppId = $data['admin_app_id'];
        } elseif (\array_key_exists('admin_app_id', $data)) {
            $object->adminAppId = null;
        }
        if (\array_key_exists('app_id', $data) && null !== $data['app_id']) {
            $object->appId = $data['app_id'];
        } elseif (\array_key_exists('app_id', $data)) {
            $object->appId = null;
        }
        if (\array_key_exists('app_type', $data) && null !== $data['app_type']) {
            $object->appType = $data['app_type'];
        } elseif (\array_key_exists('app_type', $data)) {
            $object->appType = null;
        }
        if (\array_key_exists('change_type', $data) && null !== $data['change_type']) {
            $object->changeType = $data['change_type'];
        } elseif (\array_key_exists('change_type', $data)) {
            $object->changeType = null;
        }
        if (\array_key_exists('channel', $data) && null !== $data['channel']) {
            $object->channel = $data['channel'];
        } elseif (\array_key_exists('channel', $data)) {
            $object->channel = null;
        }
        if (\array_key_exists('date', $data) && null !== $data['date']) {
            $object->date = $data['date'];
        } elseif (\array_key_exists('date', $data)) {
            $object->date = null;
        }
        if (\array_key_exists('scope', $data) && null !== $data['scope']) {
            $object->scope = $data['scope'];
        } elseif (\array_key_exists('scope', $data)) {
            $object->scope = null;
        }
        if (\array_key_exists('service_id', $data) && null !== $data['service_id']) {
            $object->serviceId = $data['service_id'];
        } elseif (\array_key_exists('service_id', $data)) {
            $object->serviceId = null;
        }
        if (\array_key_exists('service_type', $data) && null !== $data['service_type']) {
            $object->serviceType = $data['service_type'];
        } elseif (\array_key_exists('service_type', $data)) {
            $object->serviceType = null;
        }
        if (\array_key_exists('user_id', $data) && null !== $data['user_id']) {
            $object->userId = $data['user_id'];
        } elseif (\array_key_exists('user_id', $data)) {
            $object->userId = null;
        }
        if (\array_key_exists('user_name', $data) && null !== $data['user_name']) {
            $object->userName = $data['user_name'];
        } elseif (\array_key_exists('user_name', $data)) {
            $object->userName = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('adminAppId', get_object_vars($data)) && null !== ($data->adminAppId ?? null)) {
            $dataArray['admin_app_id'] = $data->adminAppId;
        }
        $dataArray['app_id'] = $data->appId;
        $dataArray['app_type'] = $data->appType;
        $dataArray['change_type'] = $data->changeType;
        if (\array_key_exists('channel', get_object_vars($data)) && null !== ($data->channel ?? null)) {
            $dataArray['channel'] = $data->channel;
        }
        $dataArray['date'] = $data->date;
        $dataArray['scope'] = $data->scope;
        if (\array_key_exists('serviceId', get_object_vars($data)) && null !== ($data->serviceId ?? null)) {
            $dataArray['service_id'] = $data->serviceId;
        }
        if (\array_key_exists('serviceType', get_object_vars($data)) && null !== ($data->serviceType ?? null)) {
            $dataArray['service_type'] = $data->serviceType;
        }
        $dataArray['user_id'] = $data->userId;
        $dataArray['user_name'] = $data->userName;

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\TeamIntegrationLogsGetResponse200LogsItem::class => false];
    }
}
