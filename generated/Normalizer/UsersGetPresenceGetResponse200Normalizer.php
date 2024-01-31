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
    class UsersGetPresenceGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\UsersGetPresenceGetResponse200' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\UsersGetPresenceGetResponse200' === \get_class($data);
        }

        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\UsersGetPresenceGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('auto_away', $data) && null !== $data['auto_away']) {
                $object->setAutoAway($data['auto_away']);
                unset($data['auto_away']);
            } elseif (\array_key_exists('auto_away', $data) && null === $data['auto_away']) {
                $object->setAutoAway(null);
            }
            if (\array_key_exists('connection_count', $data) && null !== $data['connection_count']) {
                $object->setConnectionCount($data['connection_count']);
                unset($data['connection_count']);
            } elseif (\array_key_exists('connection_count', $data) && null === $data['connection_count']) {
                $object->setConnectionCount(null);
            }
            if (\array_key_exists('last_activity', $data) && null !== $data['last_activity']) {
                $object->setLastActivity($data['last_activity']);
                unset($data['last_activity']);
            } elseif (\array_key_exists('last_activity', $data) && null === $data['last_activity']) {
                $object->setLastActivity(null);
            }
            if (\array_key_exists('manual_away', $data) && null !== $data['manual_away']) {
                $object->setManualAway($data['manual_away']);
                unset($data['manual_away']);
            } elseif (\array_key_exists('manual_away', $data) && null === $data['manual_away']) {
                $object->setManualAway(null);
            }
            if (\array_key_exists('ok', $data) && null !== $data['ok']) {
                $object->setOk($data['ok']);
                unset($data['ok']);
            } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
                $object->setOk(null);
            }
            if (\array_key_exists('online', $data) && null !== $data['online']) {
                $object->setOnline($data['online']);
                unset($data['online']);
            } elseif (\array_key_exists('online', $data) && null === $data['online']) {
                $object->setOnline(null);
            }
            if (\array_key_exists('presence', $data) && null !== $data['presence']) {
                $object->setPresence($data['presence']);
                unset($data['presence']);
            } elseif (\array_key_exists('presence', $data) && null === $data['presence']) {
                $object->setPresence(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, string $format = null, array $context = []): null|array|\ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('autoAway') && null !== $object->getAutoAway()) {
                $data['auto_away'] = $object->getAutoAway();
            }
            if ($object->isInitialized('connectionCount') && null !== $object->getConnectionCount()) {
                $data['connection_count'] = $object->getConnectionCount();
            }
            if ($object->isInitialized('lastActivity') && null !== $object->getLastActivity()) {
                $data['last_activity'] = $object->getLastActivity();
            }
            if ($object->isInitialized('manualAway') && null !== $object->getManualAway()) {
                $data['manual_away'] = $object->getManualAway();
            }
            $data['ok'] = $object->getOk();
            if ($object->isInitialized('online') && null !== $object->getOnline()) {
                $data['online'] = $object->getOnline();
            }
            $data['presence'] = $object->getPresence();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\UsersGetPresenceGetResponse200' => false];
        }
    }
} else {
    class UsersGetPresenceGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\UsersGetPresenceGetResponse200' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\UsersGetPresenceGetResponse200' === \get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\UsersGetPresenceGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('auto_away', $data) && null !== $data['auto_away']) {
                $object->setAutoAway($data['auto_away']);
                unset($data['auto_away']);
            } elseif (\array_key_exists('auto_away', $data) && null === $data['auto_away']) {
                $object->setAutoAway(null);
            }
            if (\array_key_exists('connection_count', $data) && null !== $data['connection_count']) {
                $object->setConnectionCount($data['connection_count']);
                unset($data['connection_count']);
            } elseif (\array_key_exists('connection_count', $data) && null === $data['connection_count']) {
                $object->setConnectionCount(null);
            }
            if (\array_key_exists('last_activity', $data) && null !== $data['last_activity']) {
                $object->setLastActivity($data['last_activity']);
                unset($data['last_activity']);
            } elseif (\array_key_exists('last_activity', $data) && null === $data['last_activity']) {
                $object->setLastActivity(null);
            }
            if (\array_key_exists('manual_away', $data) && null !== $data['manual_away']) {
                $object->setManualAway($data['manual_away']);
                unset($data['manual_away']);
            } elseif (\array_key_exists('manual_away', $data) && null === $data['manual_away']) {
                $object->setManualAway(null);
            }
            if (\array_key_exists('ok', $data) && null !== $data['ok']) {
                $object->setOk($data['ok']);
                unset($data['ok']);
            } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
                $object->setOk(null);
            }
            if (\array_key_exists('online', $data) && null !== $data['online']) {
                $object->setOnline($data['online']);
                unset($data['online']);
            } elseif (\array_key_exists('online', $data) && null === $data['online']) {
                $object->setOnline(null);
            }
            if (\array_key_exists('presence', $data) && null !== $data['presence']) {
                $object->setPresence($data['presence']);
                unset($data['presence']);
            } elseif (\array_key_exists('presence', $data) && null === $data['presence']) {
                $object->setPresence(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('autoAway') && null !== $object->getAutoAway()) {
                $data['auto_away'] = $object->getAutoAway();
            }
            if ($object->isInitialized('connectionCount') && null !== $object->getConnectionCount()) {
                $data['connection_count'] = $object->getConnectionCount();
            }
            if ($object->isInitialized('lastActivity') && null !== $object->getLastActivity()) {
                $data['last_activity'] = $object->getLastActivity();
            }
            if ($object->isInitialized('manualAway') && null !== $object->getManualAway()) {
                $data['manual_away'] = $object->getManualAway();
            }
            $data['ok'] = $object->getOk();
            if ($object->isInitialized('online') && null !== $object->getOnline()) {
                $data['online'] = $object->getOnline();
            }
            $data['presence'] = $object->getPresence();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\UsersGetPresenceGetResponse200' => false];
        }
    }
}
