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
    class ReactionsListGetResponse200ItemsItemItem2Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \JoliCode\Slack\Api\Model\ReactionsListGetResponse200ItemsItemItem2::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && \JoliCode\Slack\Api\Model\ReactionsListGetResponse200ItemsItemItem2::class === \get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ReactionsListGetResponse200ItemsItemItem2();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('comment', $data) && null !== $data['comment']) {
                $object->setComment($this->denormalizer->denormalize($data['comment'], \JoliCode\Slack\Api\Model\ObjsComment::class, 'json', $context));
            } elseif (\array_key_exists('comment', $data) && null === $data['comment']) {
                $object->setComment(null);
            }
            if (\array_key_exists('file', $data) && null !== $data['file']) {
                $object->setFile($this->denormalizer->denormalize($data['file'], \JoliCode\Slack\Api\Model\ObjsFile::class, 'json', $context));
            } elseif (\array_key_exists('file', $data) && null === $data['file']) {
                $object->setFile(null);
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
            $data['comment'] = $this->normalizer->normalize($object->getComment(), 'json', $context);
            $data['file'] = $this->normalizer->normalize($object->getFile(), 'json', $context);
            $data['type'] = $object->getType();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\JoliCode\Slack\Api\Model\ReactionsListGetResponse200ItemsItemItem2::class => false];
        }
    }
} else {
    class ReactionsListGetResponse200ItemsItemItem2Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \JoliCode\Slack\Api\Model\ReactionsListGetResponse200ItemsItemItem2::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && \JoliCode\Slack\Api\Model\ReactionsListGetResponse200ItemsItemItem2::class === \get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ReactionsListGetResponse200ItemsItemItem2();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('comment', $data) && null !== $data['comment']) {
                $object->setComment($this->denormalizer->denormalize($data['comment'], \JoliCode\Slack\Api\Model\ObjsComment::class, 'json', $context));
            } elseif (\array_key_exists('comment', $data) && null === $data['comment']) {
                $object->setComment(null);
            }
            if (\array_key_exists('file', $data) && null !== $data['file']) {
                $object->setFile($this->denormalizer->denormalize($data['file'], \JoliCode\Slack\Api\Model\ObjsFile::class, 'json', $context));
            } elseif (\array_key_exists('file', $data) && null === $data['file']) {
                $object->setFile(null);
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
            $data['comment'] = $this->normalizer->normalize($object->getComment(), 'json', $context);
            $data['file'] = $this->normalizer->normalize($object->getFile(), 'json', $context);
            $data['type'] = $object->getType();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\JoliCode\Slack\Api\Model\ReactionsListGetResponse200ItemsItemItem2::class => false];
        }
    }
}
