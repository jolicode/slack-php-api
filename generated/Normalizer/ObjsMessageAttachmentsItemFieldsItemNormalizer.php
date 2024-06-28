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
    class ObjsMessageAttachmentsItemFieldsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItemFieldsItem' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItemFieldsItem' === \get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItemFieldsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('short', $data) && null !== $data['short']) {
                $object->setShort($data['short']);
            } elseif (\array_key_exists('short', $data) && null === $data['short']) {
                $object->setShort(null);
            }
            if (\array_key_exists('title', $data) && null !== $data['title']) {
                $object->setTitle($data['title']);
            } elseif (\array_key_exists('title', $data) && null === $data['title']) {
                $object->setTitle(null);
            }
            if (\array_key_exists('value', $data) && null !== $data['value']) {
                $object->setValue($data['value']);
            } elseif (\array_key_exists('value', $data) && null === $data['value']) {
                $object->setValue(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('short') && null !== $object->getShort()) {
                $data['short'] = $object->getShort();
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            if ($object->isInitialized('value') && null !== $object->getValue()) {
                $data['value'] = $object->getValue();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItemFieldsItem' => false];
        }
    }
} else {
    class ObjsMessageAttachmentsItemFieldsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItemFieldsItem' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItemFieldsItem' === \get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItemFieldsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('short', $data) && null !== $data['short']) {
                $object->setShort($data['short']);
            } elseif (\array_key_exists('short', $data) && null === $data['short']) {
                $object->setShort(null);
            }
            if (\array_key_exists('title', $data) && null !== $data['title']) {
                $object->setTitle($data['title']);
            } elseif (\array_key_exists('title', $data) && null === $data['title']) {
                $object->setTitle(null);
            }
            if (\array_key_exists('value', $data) && null !== $data['value']) {
                $object->setValue($data['value']);
            } elseif (\array_key_exists('value', $data) && null === $data['value']) {
                $object->setValue(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('short') && null !== $object->getShort()) {
                $data['short'] = $object->getShort();
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            if ($object->isInitialized('value') && null !== $object->getValue()) {
                $data['value'] = $object->getValue();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItemFieldsItem' => false];
        }
    }
}
