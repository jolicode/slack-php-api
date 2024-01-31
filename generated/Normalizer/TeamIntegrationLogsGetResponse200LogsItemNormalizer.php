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
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) || (Kernel::MAJOR_VERSION >= 7 || (Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4 && version_compare(PHP_VERSION, '8.0.0', '>=')))) {
    class TeamIntegrationLogsGetResponse200LogsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\TeamIntegrationLogsGetResponse200LogsItem' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\TeamIntegrationLogsGetResponse200LogsItem' === \get_class($data);
        }

        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\TeamIntegrationLogsGetResponse200LogsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('admin_app_id', $data) && null !== $data['admin_app_id']) {
                $object->setAdminAppId($data['admin_app_id']);
            } elseif (\array_key_exists('admin_app_id', $data) && null === $data['admin_app_id']) {
                $object->setAdminAppId(null);
            }
            if (\array_key_exists('app_id', $data) && null !== $data['app_id']) {
                $object->setAppId($data['app_id']);
            } elseif (\array_key_exists('app_id', $data) && null === $data['app_id']) {
                $object->setAppId(null);
            }
            if (\array_key_exists('app_type', $data) && null !== $data['app_type']) {
                $object->setAppType($data['app_type']);
            } elseif (\array_key_exists('app_type', $data) && null === $data['app_type']) {
                $object->setAppType(null);
            }
            if (\array_key_exists('change_type', $data) && null !== $data['change_type']) {
                $object->setChangeType($data['change_type']);
            } elseif (\array_key_exists('change_type', $data) && null === $data['change_type']) {
                $object->setChangeType(null);
            }
            if (\array_key_exists('channel', $data) && null !== $data['channel']) {
                $object->setChannel($data['channel']);
            } elseif (\array_key_exists('channel', $data) && null === $data['channel']) {
                $object->setChannel(null);
            }
            if (\array_key_exists('date', $data) && null !== $data['date']) {
                $object->setDate($data['date']);
            } elseif (\array_key_exists('date', $data) && null === $data['date']) {
                $object->setDate(null);
            }
            if (\array_key_exists('scope', $data) && null !== $data['scope']) {
                $object->setScope($data['scope']);
            } elseif (\array_key_exists('scope', $data) && null === $data['scope']) {
                $object->setScope(null);
            }
            if (\array_key_exists('service_id', $data) && null !== $data['service_id']) {
                $object->setServiceId($data['service_id']);
            } elseif (\array_key_exists('service_id', $data) && null === $data['service_id']) {
                $object->setServiceId(null);
            }
            if (\array_key_exists('service_type', $data) && null !== $data['service_type']) {
                $object->setServiceType($data['service_type']);
            } elseif (\array_key_exists('service_type', $data) && null === $data['service_type']) {
                $object->setServiceType(null);
            }
            if (\array_key_exists('user_id', $data) && null !== $data['user_id']) {
                $object->setUserId($data['user_id']);
            } elseif (\array_key_exists('user_id', $data) && null === $data['user_id']) {
                $object->setUserId(null);
            }
            if (\array_key_exists('user_name', $data) && null !== $data['user_name']) {
                $object->setUserName($data['user_name']);
            } elseif (\array_key_exists('user_name', $data) && null === $data['user_name']) {
                $object->setUserName(null);
            }

            return $object;
        }

        public function normalize(mixed $object, string $format = null, array $context = []): null|array|\ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('adminAppId') && null !== $object->getAdminAppId()) {
                $data['admin_app_id'] = $object->getAdminAppId();
            }
            $data['app_id'] = $object->getAppId();
            $data['app_type'] = $object->getAppType();
            $data['change_type'] = $object->getChangeType();
            if ($object->isInitialized('channel') && null !== $object->getChannel()) {
                $data['channel'] = $object->getChannel();
            }
            $data['date'] = $object->getDate();
            $data['scope'] = $object->getScope();
            if ($object->isInitialized('serviceId') && null !== $object->getServiceId()) {
                $data['service_id'] = $object->getServiceId();
            }
            if ($object->isInitialized('serviceType') && null !== $object->getServiceType()) {
                $data['service_type'] = $object->getServiceType();
            }
            $data['user_id'] = $object->getUserId();
            $data['user_name'] = $object->getUserName();

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\TeamIntegrationLogsGetResponse200LogsItem' => false];
        }
    }
} else {
    class TeamIntegrationLogsGetResponse200LogsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\TeamIntegrationLogsGetResponse200LogsItem' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\TeamIntegrationLogsGetResponse200LogsItem' === \get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\TeamIntegrationLogsGetResponse200LogsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('admin_app_id', $data) && null !== $data['admin_app_id']) {
                $object->setAdminAppId($data['admin_app_id']);
            } elseif (\array_key_exists('admin_app_id', $data) && null === $data['admin_app_id']) {
                $object->setAdminAppId(null);
            }
            if (\array_key_exists('app_id', $data) && null !== $data['app_id']) {
                $object->setAppId($data['app_id']);
            } elseif (\array_key_exists('app_id', $data) && null === $data['app_id']) {
                $object->setAppId(null);
            }
            if (\array_key_exists('app_type', $data) && null !== $data['app_type']) {
                $object->setAppType($data['app_type']);
            } elseif (\array_key_exists('app_type', $data) && null === $data['app_type']) {
                $object->setAppType(null);
            }
            if (\array_key_exists('change_type', $data) && null !== $data['change_type']) {
                $object->setChangeType($data['change_type']);
            } elseif (\array_key_exists('change_type', $data) && null === $data['change_type']) {
                $object->setChangeType(null);
            }
            if (\array_key_exists('channel', $data) && null !== $data['channel']) {
                $object->setChannel($data['channel']);
            } elseif (\array_key_exists('channel', $data) && null === $data['channel']) {
                $object->setChannel(null);
            }
            if (\array_key_exists('date', $data) && null !== $data['date']) {
                $object->setDate($data['date']);
            } elseif (\array_key_exists('date', $data) && null === $data['date']) {
                $object->setDate(null);
            }
            if (\array_key_exists('scope', $data) && null !== $data['scope']) {
                $object->setScope($data['scope']);
            } elseif (\array_key_exists('scope', $data) && null === $data['scope']) {
                $object->setScope(null);
            }
            if (\array_key_exists('service_id', $data) && null !== $data['service_id']) {
                $object->setServiceId($data['service_id']);
            } elseif (\array_key_exists('service_id', $data) && null === $data['service_id']) {
                $object->setServiceId(null);
            }
            if (\array_key_exists('service_type', $data) && null !== $data['service_type']) {
                $object->setServiceType($data['service_type']);
            } elseif (\array_key_exists('service_type', $data) && null === $data['service_type']) {
                $object->setServiceType(null);
            }
            if (\array_key_exists('user_id', $data) && null !== $data['user_id']) {
                $object->setUserId($data['user_id']);
            } elseif (\array_key_exists('user_id', $data) && null === $data['user_id']) {
                $object->setUserId(null);
            }
            if (\array_key_exists('user_name', $data) && null !== $data['user_name']) {
                $object->setUserName($data['user_name']);
            } elseif (\array_key_exists('user_name', $data) && null === $data['user_name']) {
                $object->setUserName(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('adminAppId') && null !== $object->getAdminAppId()) {
                $data['admin_app_id'] = $object->getAdminAppId();
            }
            $data['app_id'] = $object->getAppId();
            $data['app_type'] = $object->getAppType();
            $data['change_type'] = $object->getChangeType();
            if ($object->isInitialized('channel') && null !== $object->getChannel()) {
                $data['channel'] = $object->getChannel();
            }
            $data['date'] = $object->getDate();
            $data['scope'] = $object->getScope();
            if ($object->isInitialized('serviceId') && null !== $object->getServiceId()) {
                $data['service_id'] = $object->getServiceId();
            }
            if ($object->isInitialized('serviceType') && null !== $object->getServiceType()) {
                $data['service_type'] = $object->getServiceType();
            }
            $data['user_id'] = $object->getUserId();
            $data['user_name'] = $object->getUserName();

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\TeamIntegrationLogsGetResponse200LogsItem' => false];
        }
    }
}
