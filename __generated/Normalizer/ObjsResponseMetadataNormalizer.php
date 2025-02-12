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
    class ObjsResponseMetadataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \JoliCode\Slack\Api\Model\ObjsResponseMetadata::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && \JoliCode\Slack\Api\Model\ObjsResponseMetadata::class === \get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ObjsResponseMetadata();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('messages', $data) && null !== $data['messages']) {
                $values = [];
                foreach ($data['messages'] as $value) {
                    $values[] = $value;
                }
                $object->setMessages($values);
            } elseif (\array_key_exists('messages', $data) && null === $data['messages']) {
                $object->setMessages(null);
            }
            if (\array_key_exists('next_cursor', $data) && null !== $data['next_cursor']) {
                $object->setNextCursor($data['next_cursor']);
            } elseif (\array_key_exists('next_cursor', $data) && null === $data['next_cursor']) {
                $object->setNextCursor(null);
            }
            if (\array_key_exists('warnings', $data) && null !== $data['warnings']) {
                $values_1 = [];
                foreach ($data['warnings'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setWarnings($values_1);
            } elseif (\array_key_exists('warnings', $data) && null === $data['warnings']) {
                $object->setWarnings(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('messages') && null !== $object->getMessages()) {
                $values = [];
                foreach ($object->getMessages() as $value) {
                    $values[] = $value;
                }
                $data['messages'] = $values;
            }
            $data['next_cursor'] = $object->getNextCursor();
            if ($object->isInitialized('warnings') && null !== $object->getWarnings()) {
                $values_1 = [];
                foreach ($object->getWarnings() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['warnings'] = $values_1;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\JoliCode\Slack\Api\Model\ObjsResponseMetadata::class => false];
        }
    }
} else {
    class ObjsResponseMetadataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \JoliCode\Slack\Api\Model\ObjsResponseMetadata::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && \JoliCode\Slack\Api\Model\ObjsResponseMetadata::class === \get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ObjsResponseMetadata();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('messages', $data) && null !== $data['messages']) {
                $values = [];
                foreach ($data['messages'] as $value) {
                    $values[] = $value;
                }
                $object->setMessages($values);
            } elseif (\array_key_exists('messages', $data) && null === $data['messages']) {
                $object->setMessages(null);
            }
            if (\array_key_exists('next_cursor', $data) && null !== $data['next_cursor']) {
                $object->setNextCursor($data['next_cursor']);
            } elseif (\array_key_exists('next_cursor', $data) && null === $data['next_cursor']) {
                $object->setNextCursor(null);
            }
            if (\array_key_exists('warnings', $data) && null !== $data['warnings']) {
                $values_1 = [];
                foreach ($data['warnings'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setWarnings($values_1);
            } elseif (\array_key_exists('warnings', $data) && null === $data['warnings']) {
                $object->setWarnings(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('messages') && null !== $object->getMessages()) {
                $values = [];
                foreach ($object->getMessages() as $value) {
                    $values[] = $value;
                }
                $data['messages'] = $values;
            }
            $data['next_cursor'] = $object->getNextCursor();
            if ($object->isInitialized('warnings') && null !== $object->getWarnings()) {
                $values_1 = [];
                foreach ($object->getWarnings() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['warnings'] = $values_1;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\JoliCode\Slack\Api\Model\ObjsResponseMetadata::class => false];
        }
    }
}
