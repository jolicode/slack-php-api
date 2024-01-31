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
    class ReactionsListGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\ReactionsListGetResponse200' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ReactionsListGetResponse200' === \get_class($data);
        }

        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ReactionsListGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('items', $data) && null !== $data['items']) {
                $values = [];
                foreach ($data['items'] as $value) {
                    $values[] = $value;
                }
                $object->setItems($values);
            } elseif (\array_key_exists('items', $data) && null === $data['items']) {
                $object->setItems(null);
            }
            if (\array_key_exists('ok', $data) && null !== $data['ok']) {
                $object->setOk($data['ok']);
            } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
                $object->setOk(null);
            }
            if (\array_key_exists('paging', $data) && null !== $data['paging']) {
                $object->setPaging($this->denormalizer->denormalize($data['paging'], 'JoliCode\\Slack\\Api\\Model\\ObjsPaging', 'json', $context));
            } elseif (\array_key_exists('paging', $data) && null === $data['paging']) {
                $object->setPaging(null);
            }
            if (\array_key_exists('response_metadata', $data) && null !== $data['response_metadata']) {
                $object->setResponseMetadata($this->denormalizer->denormalize($data['response_metadata'], 'JoliCode\\Slack\\Api\\Model\\ObjsResponseMetadata', 'json', $context));
            } elseif (\array_key_exists('response_metadata', $data) && null === $data['response_metadata']) {
                $object->setResponseMetadata(null);
            }

            return $object;
        }

        public function normalize(mixed $object, string $format = null, array $context = []): null|array|\ArrayObject|bool|float|int|string
        {
            $data = [];
            $values = [];
            foreach ($object->getItems() as $value) {
                $values[] = $value;
            }
            $data['items'] = $values;
            $data['ok'] = $object->getOk();
            if ($object->isInitialized('paging') && null !== $object->getPaging()) {
                $data['paging'] = $this->normalizer->normalize($object->getPaging(), 'json', $context);
            }
            if ($object->isInitialized('responseMetadata') && null !== $object->getResponseMetadata()) {
                $data['response_metadata'] = $this->normalizer->normalize($object->getResponseMetadata(), 'json', $context);
            }

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\ReactionsListGetResponse200' => false];
        }
    }
} else {
    class ReactionsListGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\ReactionsListGetResponse200' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ReactionsListGetResponse200' === \get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ReactionsListGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('items', $data) && null !== $data['items']) {
                $values = [];
                foreach ($data['items'] as $value) {
                    $values[] = $value;
                }
                $object->setItems($values);
            } elseif (\array_key_exists('items', $data) && null === $data['items']) {
                $object->setItems(null);
            }
            if (\array_key_exists('ok', $data) && null !== $data['ok']) {
                $object->setOk($data['ok']);
            } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
                $object->setOk(null);
            }
            if (\array_key_exists('paging', $data) && null !== $data['paging']) {
                $object->setPaging($this->denormalizer->denormalize($data['paging'], 'JoliCode\\Slack\\Api\\Model\\ObjsPaging', 'json', $context));
            } elseif (\array_key_exists('paging', $data) && null === $data['paging']) {
                $object->setPaging(null);
            }
            if (\array_key_exists('response_metadata', $data) && null !== $data['response_metadata']) {
                $object->setResponseMetadata($this->denormalizer->denormalize($data['response_metadata'], 'JoliCode\\Slack\\Api\\Model\\ObjsResponseMetadata', 'json', $context));
            } elseif (\array_key_exists('response_metadata', $data) && null === $data['response_metadata']) {
                $object->setResponseMetadata(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $values = [];
            foreach ($object->getItems() as $value) {
                $values[] = $value;
            }
            $data['items'] = $values;
            $data['ok'] = $object->getOk();
            if ($object->isInitialized('paging') && null !== $object->getPaging()) {
                $data['paging'] = $this->normalizer->normalize($object->getPaging(), 'json', $context);
            }
            if ($object->isInitialized('responseMetadata') && null !== $object->getResponseMetadata()) {
                $data['response_metadata'] = $this->normalizer->normalize($object->getResponseMetadata(), 'json', $context);
            }

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\ReactionsListGetResponse200' => false];
        }
    }
}
