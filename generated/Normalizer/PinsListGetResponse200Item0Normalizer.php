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
    class PinsListGetResponse200Item0Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\PinsListGetResponse200Item0' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\PinsListGetResponse200Item0' === \get_class($data);
        }

        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\PinsListGetResponse200Item0();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('items', $data) && null !== $data['items']) {
                $value = $data['items'];
                if (\is_array($data['items']) && $this->isOnlyNumericKeys($data['items'])) {
                    $values = [];
                    foreach ($data['items'] as $value_1) {
                        $values[] = $this->denormalizer->denormalize($value_1, 'JoliCode\\Slack\\Api\\Model\\PinsListGetResponse200Item0ItemsItem0', 'json', $context);
                    }
                    $value = $values;
                } elseif (\is_array($data['items']) && $this->isOnlyNumericKeys($data['items'])) {
                    $values_1 = [];
                    foreach ($data['items'] as $value_2) {
                        $values_1[] = $this->denormalizer->denormalize($value_2, 'JoliCode\\Slack\\Api\\Model\\PinsListGetResponse200Item0ItemsItem1', 'json', $context);
                    }
                    $value = $values_1;
                }
                $object->setItems($value);
            } elseif (\array_key_exists('items', $data) && null === $data['items']) {
                $object->setItems(null);
            }
            if (\array_key_exists('ok', $data) && null !== $data['ok']) {
                $object->setOk($data['ok']);
            } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
                $object->setOk(null);
            }

            return $object;
        }

        public function normalize(mixed $object, string $format = null, array $context = []): null|array|\ArrayObject|bool|float|int|string
        {
            $data = [];
            $value = $object->getItems();
            if (\is_array($object->getItems())) {
                $values = [];
                foreach ($object->getItems() as $value_1) {
                    $values[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $value = $values;
            } elseif (\is_array($object->getItems())) {
                $values_1 = [];
                foreach ($object->getItems() as $value_2) {
                    $values_1[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $value = $values_1;
            }
            $data['items'] = $value;
            $data['ok'] = $object->getOk();

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\PinsListGetResponse200Item0' => false];
        }
    }
} else {
    class PinsListGetResponse200Item0Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\PinsListGetResponse200Item0' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\PinsListGetResponse200Item0' === \get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\PinsListGetResponse200Item0();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('items', $data) && null !== $data['items']) {
                $value = $data['items'];
                if (\is_array($data['items']) && $this->isOnlyNumericKeys($data['items'])) {
                    $values = [];
                    foreach ($data['items'] as $value_1) {
                        $values[] = $this->denormalizer->denormalize($value_1, 'JoliCode\\Slack\\Api\\Model\\PinsListGetResponse200Item0ItemsItem0', 'json', $context);
                    }
                    $value = $values;
                } elseif (\is_array($data['items']) && $this->isOnlyNumericKeys($data['items'])) {
                    $values_1 = [];
                    foreach ($data['items'] as $value_2) {
                        $values_1[] = $this->denormalizer->denormalize($value_2, 'JoliCode\\Slack\\Api\\Model\\PinsListGetResponse200Item0ItemsItem1', 'json', $context);
                    }
                    $value = $values_1;
                }
                $object->setItems($value);
            } elseif (\array_key_exists('items', $data) && null === $data['items']) {
                $object->setItems(null);
            }
            if (\array_key_exists('ok', $data) && null !== $data['ok']) {
                $object->setOk($data['ok']);
            } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
                $object->setOk(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $value = $object->getItems();
            if (\is_array($object->getItems())) {
                $values = [];
                foreach ($object->getItems() as $value_1) {
                    $values[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $value = $values;
            } elseif (\is_array($object->getItems())) {
                $values_1 = [];
                foreach ($object->getItems() as $value_2) {
                    $values_1[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $value = $values_1;
            }
            $data['items'] = $value;
            $data['ok'] = $object->getOk();

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\PinsListGetResponse200Item0' => false];
        }
    }
}
