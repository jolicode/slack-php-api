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
    class PinsListGetResponse200Item0ItemsItem1Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \JoliCode\Slack\Api\Model\PinsListGetResponse200Item0ItemsItem1::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && \JoliCode\Slack\Api\Model\PinsListGetResponse200Item0ItemsItem1::class === \get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\PinsListGetResponse200Item0ItemsItem1();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('channel', $data) && null !== $data['channel']) {
                $object->setChannel($data['channel']);
            } elseif (\array_key_exists('channel', $data) && null === $data['channel']) {
                $object->setChannel(null);
            }
            if (\array_key_exists('created', $data) && null !== $data['created']) {
                $object->setCreated($data['created']);
            } elseif (\array_key_exists('created', $data) && null === $data['created']) {
                $object->setCreated(null);
            }
            if (\array_key_exists('created_by', $data) && null !== $data['created_by']) {
                $object->setCreatedBy($data['created_by']);
            } elseif (\array_key_exists('created_by', $data) && null === $data['created_by']) {
                $object->setCreatedBy(null);
            }
            if (\array_key_exists('message', $data) && null !== $data['message']) {
                $object->setMessage($this->denormalizer->denormalize($data['message'], \JoliCode\Slack\Api\Model\ObjsMessage::class, 'json', $context));
            } elseif (\array_key_exists('message', $data) && null === $data['message']) {
                $object->setMessage(null);
            }
            if (\array_key_exists('type', $data) && null !== $data['type']) {
                $object->setType($data['type']);
            } elseif (\array_key_exists('type', $data) && null === $data['type']) {
                $object->setType(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('channel') && null !== $object->getChannel()) {
                $data['channel'] = $object->getChannel();
            }
            if ($object->isInitialized('created') && null !== $object->getCreated()) {
                $data['created'] = $object->getCreated();
            }
            if ($object->isInitialized('createdBy') && null !== $object->getCreatedBy()) {
                $data['created_by'] = $object->getCreatedBy();
            }
            if ($object->isInitialized('message') && null !== $object->getMessage()) {
                $data['message'] = $this->normalizer->normalize($object->getMessage(), 'json', $context);
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\JoliCode\Slack\Api\Model\PinsListGetResponse200Item0ItemsItem1::class => false];
        }
    }
} else {
    class PinsListGetResponse200Item0ItemsItem1Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \JoliCode\Slack\Api\Model\PinsListGetResponse200Item0ItemsItem1::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && \JoliCode\Slack\Api\Model\PinsListGetResponse200Item0ItemsItem1::class === \get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\PinsListGetResponse200Item0ItemsItem1();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('channel', $data) && null !== $data['channel']) {
                $object->setChannel($data['channel']);
            } elseif (\array_key_exists('channel', $data) && null === $data['channel']) {
                $object->setChannel(null);
            }
            if (\array_key_exists('created', $data) && null !== $data['created']) {
                $object->setCreated($data['created']);
            } elseif (\array_key_exists('created', $data) && null === $data['created']) {
                $object->setCreated(null);
            }
            if (\array_key_exists('created_by', $data) && null !== $data['created_by']) {
                $object->setCreatedBy($data['created_by']);
            } elseif (\array_key_exists('created_by', $data) && null === $data['created_by']) {
                $object->setCreatedBy(null);
            }
            if (\array_key_exists('message', $data) && null !== $data['message']) {
                $object->setMessage($this->denormalizer->denormalize($data['message'], \JoliCode\Slack\Api\Model\ObjsMessage::class, 'json', $context));
            } elseif (\array_key_exists('message', $data) && null === $data['message']) {
                $object->setMessage(null);
            }
            if (\array_key_exists('type', $data) && null !== $data['type']) {
                $object->setType($data['type']);
            } elseif (\array_key_exists('type', $data) && null === $data['type']) {
                $object->setType(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('channel') && null !== $object->getChannel()) {
                $data['channel'] = $object->getChannel();
            }
            if ($object->isInitialized('created') && null !== $object->getCreated()) {
                $data['created'] = $object->getCreated();
            }
            if ($object->isInitialized('createdBy') && null !== $object->getCreatedBy()) {
                $data['created_by'] = $object->getCreatedBy();
            }
            if ($object->isInitialized('message') && null !== $object->getMessage()) {
                $data['message'] = $this->normalizer->normalize($object->getMessage(), 'json', $context);
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\JoliCode\Slack\Api\Model\PinsListGetResponse200Item0ItemsItem1::class => false];
        }
    }
}
