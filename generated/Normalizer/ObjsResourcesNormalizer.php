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
    class ObjsResourcesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\Slack\Api\Model\ObjsResources' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\Slack\Api\Model\ObjsResources' === \get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ObjsResources();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('excluded_ids', $data) && null !== $data['excluded_ids']) {
                $values = [];
                foreach ($data['excluded_ids'] as $value) {
                    $values[] = $value;
                }
                $object->setExcludedIds($values);
            } elseif (\array_key_exists('excluded_ids', $data) && null === $data['excluded_ids']) {
                $object->setExcludedIds(null);
            }
            if (\array_key_exists('ids', $data) && null !== $data['ids']) {
                $values_1 = [];
                foreach ($data['ids'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setIds($values_1);
            } elseif (\array_key_exists('ids', $data) && null === $data['ids']) {
                $object->setIds(null);
            }
            if (\array_key_exists('wildcard', $data) && null !== $data['wildcard']) {
                $object->setWildcard($data['wildcard']);
            } elseif (\array_key_exists('wildcard', $data) && null === $data['wildcard']) {
                $object->setWildcard(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('excludedIds') && null !== $object->getExcludedIds()) {
                $values = [];
                foreach ($object->getExcludedIds() as $value) {
                    $values[] = $value;
                }
                $data['excluded_ids'] = $values;
            }
            $values_1 = [];
            foreach ($object->getIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['ids'] = $values_1;
            if ($object->isInitialized('wildcard') && null !== $object->getWildcard()) {
                $data['wildcard'] = $object->getWildcard();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['JoliCode\Slack\Api\Model\ObjsResources' => false];
        }
    }
} else {
    class ObjsResourcesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\Slack\Api\Model\ObjsResources' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\Slack\Api\Model\ObjsResources' === \get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ObjsResources();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('excluded_ids', $data) && null !== $data['excluded_ids']) {
                $values = [];
                foreach ($data['excluded_ids'] as $value) {
                    $values[] = $value;
                }
                $object->setExcludedIds($values);
            } elseif (\array_key_exists('excluded_ids', $data) && null === $data['excluded_ids']) {
                $object->setExcludedIds(null);
            }
            if (\array_key_exists('ids', $data) && null !== $data['ids']) {
                $values_1 = [];
                foreach ($data['ids'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setIds($values_1);
            } elseif (\array_key_exists('ids', $data) && null === $data['ids']) {
                $object->setIds(null);
            }
            if (\array_key_exists('wildcard', $data) && null !== $data['wildcard']) {
                $object->setWildcard($data['wildcard']);
            } elseif (\array_key_exists('wildcard', $data) && null === $data['wildcard']) {
                $object->setWildcard(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('excludedIds') && null !== $object->getExcludedIds()) {
                $values = [];
                foreach ($object->getExcludedIds() as $value) {
                    $values[] = $value;
                }
                $data['excluded_ids'] = $values;
            }
            $values_1 = [];
            foreach ($object->getIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['ids'] = $values_1;
            if ($object->isInitialized('wildcard') && null !== $object->getWildcard()) {
                $data['wildcard'] = $object->getWildcard();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['JoliCode\Slack\Api\Model\ObjsResources' => false];
        }
    }
}
