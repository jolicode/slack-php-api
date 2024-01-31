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
    class MigrationExchangeGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\MigrationExchangeGetResponse200' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\MigrationExchangeGetResponse200' === \get_class($data);
        }

        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\MigrationExchangeGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('enterprise_id', $data) && null !== $data['enterprise_id']) {
                $object->setEnterpriseId($data['enterprise_id']);
                unset($data['enterprise_id']);
            } elseif (\array_key_exists('enterprise_id', $data) && null === $data['enterprise_id']) {
                $object->setEnterpriseId(null);
            }
            if (\array_key_exists('invalid_user_ids', $data) && null !== $data['invalid_user_ids']) {
                $values = [];
                foreach ($data['invalid_user_ids'] as $value) {
                    $values[] = $value;
                }
                $object->setInvalidUserIds($values);
                unset($data['invalid_user_ids']);
            } elseif (\array_key_exists('invalid_user_ids', $data) && null === $data['invalid_user_ids']) {
                $object->setInvalidUserIds(null);
            }
            if (\array_key_exists('ok', $data) && null !== $data['ok']) {
                $object->setOk($data['ok']);
                unset($data['ok']);
            } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
                $object->setOk(null);
            }
            if (\array_key_exists('team_id', $data) && null !== $data['team_id']) {
                $object->setTeamId($data['team_id']);
                unset($data['team_id']);
            } elseif (\array_key_exists('team_id', $data) && null === $data['team_id']) {
                $object->setTeamId(null);
            }
            if (\array_key_exists('user_id_map', $data) && null !== $data['user_id_map']) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['user_id_map'] as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $object->setUserIdMap($values_1);
                unset($data['user_id_map']);
            } elseif (\array_key_exists('user_id_map', $data) && null === $data['user_id_map']) {
                $object->setUserIdMap(null);
            }
            foreach ($data as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_2;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, string $format = null, array $context = []): null|array|\ArrayObject|bool|float|int|string
        {
            $data = [];
            $data['enterprise_id'] = $object->getEnterpriseId();
            if ($object->isInitialized('invalidUserIds') && null !== $object->getInvalidUserIds()) {
                $values = [];
                foreach ($object->getInvalidUserIds() as $value) {
                    $values[] = $value;
                }
                $data['invalid_user_ids'] = $values;
            }
            $data['ok'] = $object->getOk();
            $data['team_id'] = $object->getTeamId();
            if ($object->isInitialized('userIdMap') && null !== $object->getUserIdMap()) {
                $values_1 = [];
                foreach ($object->getUserIdMap() as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $data['user_id_map'] = $values_1;
            }
            foreach ($object as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\MigrationExchangeGetResponse200' => false];
        }
    }
} else {
    class MigrationExchangeGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\MigrationExchangeGetResponse200' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\MigrationExchangeGetResponse200' === \get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\MigrationExchangeGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('enterprise_id', $data) && null !== $data['enterprise_id']) {
                $object->setEnterpriseId($data['enterprise_id']);
                unset($data['enterprise_id']);
            } elseif (\array_key_exists('enterprise_id', $data) && null === $data['enterprise_id']) {
                $object->setEnterpriseId(null);
            }
            if (\array_key_exists('invalid_user_ids', $data) && null !== $data['invalid_user_ids']) {
                $values = [];
                foreach ($data['invalid_user_ids'] as $value) {
                    $values[] = $value;
                }
                $object->setInvalidUserIds($values);
                unset($data['invalid_user_ids']);
            } elseif (\array_key_exists('invalid_user_ids', $data) && null === $data['invalid_user_ids']) {
                $object->setInvalidUserIds(null);
            }
            if (\array_key_exists('ok', $data) && null !== $data['ok']) {
                $object->setOk($data['ok']);
                unset($data['ok']);
            } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
                $object->setOk(null);
            }
            if (\array_key_exists('team_id', $data) && null !== $data['team_id']) {
                $object->setTeamId($data['team_id']);
                unset($data['team_id']);
            } elseif (\array_key_exists('team_id', $data) && null === $data['team_id']) {
                $object->setTeamId(null);
            }
            if (\array_key_exists('user_id_map', $data) && null !== $data['user_id_map']) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['user_id_map'] as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $object->setUserIdMap($values_1);
                unset($data['user_id_map']);
            } elseif (\array_key_exists('user_id_map', $data) && null === $data['user_id_map']) {
                $object->setUserIdMap(null);
            }
            foreach ($data as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_2;
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
            $data['enterprise_id'] = $object->getEnterpriseId();
            if ($object->isInitialized('invalidUserIds') && null !== $object->getInvalidUserIds()) {
                $values = [];
                foreach ($object->getInvalidUserIds() as $value) {
                    $values[] = $value;
                }
                $data['invalid_user_ids'] = $values;
            }
            $data['ok'] = $object->getOk();
            $data['team_id'] = $object->getTeamId();
            if ($object->isInitialized('userIdMap') && null !== $object->getUserIdMap()) {
                $values_1 = [];
                foreach ($object->getUserIdMap() as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $data['user_id_map'] = $values_1;
            }
            foreach ($object as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\MigrationExchangeGetResponse200' => false];
        }
    }
}
