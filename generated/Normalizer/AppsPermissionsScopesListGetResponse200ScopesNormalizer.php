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

if (!class_exists(Kernel::class) || (Kernel::MAJOR_VERSION >= 7 || Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4)) {
    class AppsPermissionsScopesListGetResponse200ScopesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsScopesListGetResponse200Scopes' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsScopesListGetResponse200Scopes' === \get_class($data);
        }

        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\AppsPermissionsScopesListGetResponse200Scopes();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('app_home', $data) && null !== $data['app_home']) {
                $values = [];
                foreach ($data['app_home'] as $value) {
                    $values[] = $value;
                }
                $object->setAppHome($values);
                unset($data['app_home']);
            } elseif (\array_key_exists('app_home', $data) && null === $data['app_home']) {
                $object->setAppHome(null);
            }
            if (\array_key_exists('channel', $data) && null !== $data['channel']) {
                $values_1 = [];
                foreach ($data['channel'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setChannel($values_1);
                unset($data['channel']);
            } elseif (\array_key_exists('channel', $data) && null === $data['channel']) {
                $object->setChannel(null);
            }
            if (\array_key_exists('group', $data) && null !== $data['group']) {
                $values_2 = [];
                foreach ($data['group'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setGroup($values_2);
                unset($data['group']);
            } elseif (\array_key_exists('group', $data) && null === $data['group']) {
                $object->setGroup(null);
            }
            if (\array_key_exists('im', $data) && null !== $data['im']) {
                $values_3 = [];
                foreach ($data['im'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setIm($values_3);
                unset($data['im']);
            } elseif (\array_key_exists('im', $data) && null === $data['im']) {
                $object->setIm(null);
            }
            if (\array_key_exists('mpim', $data) && null !== $data['mpim']) {
                $values_4 = [];
                foreach ($data['mpim'] as $value_4) {
                    $values_4[] = $value_4;
                }
                $object->setMpim($values_4);
                unset($data['mpim']);
            } elseif (\array_key_exists('mpim', $data) && null === $data['mpim']) {
                $object->setMpim(null);
            }
            if (\array_key_exists('team', $data) && null !== $data['team']) {
                $values_5 = [];
                foreach ($data['team'] as $value_5) {
                    $values_5[] = $value_5;
                }
                $object->setTeam($values_5);
                unset($data['team']);
            } elseif (\array_key_exists('team', $data) && null === $data['team']) {
                $object->setTeam(null);
            }
            if (\array_key_exists('user', $data) && null !== $data['user']) {
                $values_6 = [];
                foreach ($data['user'] as $value_6) {
                    $values_6[] = $value_6;
                }
                $object->setUser($values_6);
                unset($data['user']);
            } elseif (\array_key_exists('user', $data) && null === $data['user']) {
                $object->setUser(null);
            }
            foreach ($data as $key => $value_7) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_7;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, string $format = null, array $context = []): null|array|\ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('appHome') && null !== $object->getAppHome()) {
                $values = [];
                foreach ($object->getAppHome() as $value) {
                    $values[] = $value;
                }
                $data['app_home'] = $values;
            }
            if ($object->isInitialized('channel') && null !== $object->getChannel()) {
                $values_1 = [];
                foreach ($object->getChannel() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['channel'] = $values_1;
            }
            if ($object->isInitialized('group') && null !== $object->getGroup()) {
                $values_2 = [];
                foreach ($object->getGroup() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['group'] = $values_2;
            }
            if ($object->isInitialized('im') && null !== $object->getIm()) {
                $values_3 = [];
                foreach ($object->getIm() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['im'] = $values_3;
            }
            if ($object->isInitialized('mpim') && null !== $object->getMpim()) {
                $values_4 = [];
                foreach ($object->getMpim() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['mpim'] = $values_4;
            }
            if ($object->isInitialized('team') && null !== $object->getTeam()) {
                $values_5 = [];
                foreach ($object->getTeam() as $value_5) {
                    $values_5[] = $value_5;
                }
                $data['team'] = $values_5;
            }
            if ($object->isInitialized('user') && null !== $object->getUser()) {
                $values_6 = [];
                foreach ($object->getUser() as $value_6) {
                    $values_6[] = $value_6;
                }
                $data['user'] = $values_6;
            }
            foreach ($object as $key => $value_7) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_7;
                }
            }

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\AppsPermissionsScopesListGetResponse200Scopes' => false];
        }
    }
} else {
    class AppsPermissionsScopesListGetResponse200ScopesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsScopesListGetResponse200Scopes' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsScopesListGetResponse200Scopes' === \get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\AppsPermissionsScopesListGetResponse200Scopes();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('app_home', $data) && null !== $data['app_home']) {
                $values = [];
                foreach ($data['app_home'] as $value) {
                    $values[] = $value;
                }
                $object->setAppHome($values);
                unset($data['app_home']);
            } elseif (\array_key_exists('app_home', $data) && null === $data['app_home']) {
                $object->setAppHome(null);
            }
            if (\array_key_exists('channel', $data) && null !== $data['channel']) {
                $values_1 = [];
                foreach ($data['channel'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setChannel($values_1);
                unset($data['channel']);
            } elseif (\array_key_exists('channel', $data) && null === $data['channel']) {
                $object->setChannel(null);
            }
            if (\array_key_exists('group', $data) && null !== $data['group']) {
                $values_2 = [];
                foreach ($data['group'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setGroup($values_2);
                unset($data['group']);
            } elseif (\array_key_exists('group', $data) && null === $data['group']) {
                $object->setGroup(null);
            }
            if (\array_key_exists('im', $data) && null !== $data['im']) {
                $values_3 = [];
                foreach ($data['im'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setIm($values_3);
                unset($data['im']);
            } elseif (\array_key_exists('im', $data) && null === $data['im']) {
                $object->setIm(null);
            }
            if (\array_key_exists('mpim', $data) && null !== $data['mpim']) {
                $values_4 = [];
                foreach ($data['mpim'] as $value_4) {
                    $values_4[] = $value_4;
                }
                $object->setMpim($values_4);
                unset($data['mpim']);
            } elseif (\array_key_exists('mpim', $data) && null === $data['mpim']) {
                $object->setMpim(null);
            }
            if (\array_key_exists('team', $data) && null !== $data['team']) {
                $values_5 = [];
                foreach ($data['team'] as $value_5) {
                    $values_5[] = $value_5;
                }
                $object->setTeam($values_5);
                unset($data['team']);
            } elseif (\array_key_exists('team', $data) && null === $data['team']) {
                $object->setTeam(null);
            }
            if (\array_key_exists('user', $data) && null !== $data['user']) {
                $values_6 = [];
                foreach ($data['user'] as $value_6) {
                    $values_6[] = $value_6;
                }
                $object->setUser($values_6);
                unset($data['user']);
            } elseif (\array_key_exists('user', $data) && null === $data['user']) {
                $object->setUser(null);
            }
            foreach ($data as $key => $value_7) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_7;
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
            if ($object->isInitialized('appHome') && null !== $object->getAppHome()) {
                $values = [];
                foreach ($object->getAppHome() as $value) {
                    $values[] = $value;
                }
                $data['app_home'] = $values;
            }
            if ($object->isInitialized('channel') && null !== $object->getChannel()) {
                $values_1 = [];
                foreach ($object->getChannel() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['channel'] = $values_1;
            }
            if ($object->isInitialized('group') && null !== $object->getGroup()) {
                $values_2 = [];
                foreach ($object->getGroup() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['group'] = $values_2;
            }
            if ($object->isInitialized('im') && null !== $object->getIm()) {
                $values_3 = [];
                foreach ($object->getIm() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['im'] = $values_3;
            }
            if ($object->isInitialized('mpim') && null !== $object->getMpim()) {
                $values_4 = [];
                foreach ($object->getMpim() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['mpim'] = $values_4;
            }
            if ($object->isInitialized('team') && null !== $object->getTeam()) {
                $values_5 = [];
                foreach ($object->getTeam() as $value_5) {
                    $values_5[] = $value_5;
                }
                $data['team'] = $values_5;
            }
            if ($object->isInitialized('user') && null !== $object->getUser()) {
                $values_6 = [];
                foreach ($object->getUser() as $value_6) {
                    $values_6[] = $value_6;
                }
                $data['user'] = $values_6;
            }
            foreach ($object as $key => $value_7) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_7;
                }
            }

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\AppsPermissionsScopesListGetResponse200Scopes' => false];
        }
    }
}
