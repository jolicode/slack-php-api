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
    class ObjsMessageIconsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \JoliCode\Slack\Api\Model\ObjsMessageIcons::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && \JoliCode\Slack\Api\Model\ObjsMessageIcons::class === \get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ObjsMessageIcons();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('emoji', $data) && null !== $data['emoji']) {
                $object->setEmoji($data['emoji']);
            } elseif (\array_key_exists('emoji', $data) && null === $data['emoji']) {
                $object->setEmoji(null);
            }
            if (\array_key_exists('image_64', $data) && null !== $data['image_64']) {
                $object->setImage64($data['image_64']);
            } elseif (\array_key_exists('image_64', $data) && null === $data['image_64']) {
                $object->setImage64(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('emoji') && null !== $object->getEmoji()) {
                $data['emoji'] = $object->getEmoji();
            }
            if ($object->isInitialized('image64') && null !== $object->getImage64()) {
                $data['image_64'] = $object->getImage64();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\JoliCode\Slack\Api\Model\ObjsMessageIcons::class => false];
        }
    }
} else {
    class ObjsMessageIconsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \JoliCode\Slack\Api\Model\ObjsMessageIcons::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && \JoliCode\Slack\Api\Model\ObjsMessageIcons::class === \get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ObjsMessageIcons();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('emoji', $data) && null !== $data['emoji']) {
                $object->setEmoji($data['emoji']);
            } elseif (\array_key_exists('emoji', $data) && null === $data['emoji']) {
                $object->setEmoji(null);
            }
            if (\array_key_exists('image_64', $data) && null !== $data['image_64']) {
                $object->setImage64($data['image_64']);
            } elseif (\array_key_exists('image_64', $data) && null === $data['image_64']) {
                $object->setImage64(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('emoji') && null !== $object->getEmoji()) {
                $data['emoji'] = $object->getEmoji();
            }
            if ($object->isInitialized('image64') && null !== $object->getImage64()) {
                $data['image_64'] = $object->getImage64();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\JoliCode\Slack\Api\Model\ObjsMessageIcons::class => false];
        }
    }
}
