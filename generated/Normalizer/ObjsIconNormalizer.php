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
    class ObjsIconNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\ObjsIcon' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsIcon' === \get_class($data);
        }

        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ObjsIcon();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('image_102', $data) && null !== $data['image_102']) {
                $object->setImage102($data['image_102']);
            } elseif (\array_key_exists('image_102', $data) && null === $data['image_102']) {
                $object->setImage102(null);
            }
            if (\array_key_exists('image_132', $data) && null !== $data['image_132']) {
                $object->setImage132($data['image_132']);
            } elseif (\array_key_exists('image_132', $data) && null === $data['image_132']) {
                $object->setImage132(null);
            }
            if (\array_key_exists('image_230', $data) && null !== $data['image_230']) {
                $object->setImage230($data['image_230']);
            } elseif (\array_key_exists('image_230', $data) && null === $data['image_230']) {
                $object->setImage230(null);
            }
            if (\array_key_exists('image_34', $data) && null !== $data['image_34']) {
                $object->setImage34($data['image_34']);
            } elseif (\array_key_exists('image_34', $data) && null === $data['image_34']) {
                $object->setImage34(null);
            }
            if (\array_key_exists('image_44', $data) && null !== $data['image_44']) {
                $object->setImage44($data['image_44']);
            } elseif (\array_key_exists('image_44', $data) && null === $data['image_44']) {
                $object->setImage44(null);
            }
            if (\array_key_exists('image_68', $data) && null !== $data['image_68']) {
                $object->setImage68($data['image_68']);
            } elseif (\array_key_exists('image_68', $data) && null === $data['image_68']) {
                $object->setImage68(null);
            }
            if (\array_key_exists('image_88', $data) && null !== $data['image_88']) {
                $object->setImage88($data['image_88']);
            } elseif (\array_key_exists('image_88', $data) && null === $data['image_88']) {
                $object->setImage88(null);
            }
            if (\array_key_exists('image_default', $data) && null !== $data['image_default']) {
                $object->setImageDefault($data['image_default']);
            } elseif (\array_key_exists('image_default', $data) && null === $data['image_default']) {
                $object->setImageDefault(null);
            }

            return $object;
        }

        public function normalize(mixed $object, string $format = null, array $context = []): null|array|\ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('image102') && null !== $object->getImage102()) {
                $data['image_102'] = $object->getImage102();
            }
            if ($object->isInitialized('image132') && null !== $object->getImage132()) {
                $data['image_132'] = $object->getImage132();
            }
            if ($object->isInitialized('image230') && null !== $object->getImage230()) {
                $data['image_230'] = $object->getImage230();
            }
            if ($object->isInitialized('image34') && null !== $object->getImage34()) {
                $data['image_34'] = $object->getImage34();
            }
            if ($object->isInitialized('image44') && null !== $object->getImage44()) {
                $data['image_44'] = $object->getImage44();
            }
            if ($object->isInitialized('image68') && null !== $object->getImage68()) {
                $data['image_68'] = $object->getImage68();
            }
            if ($object->isInitialized('image88') && null !== $object->getImage88()) {
                $data['image_88'] = $object->getImage88();
            }
            if ($object->isInitialized('imageDefault') && null !== $object->getImageDefault()) {
                $data['image_default'] = $object->getImageDefault();
            }

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\ObjsIcon' => false];
        }
    }
} else {
    class ObjsIconNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\ObjsIcon' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsIcon' === \get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ObjsIcon();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('image_102', $data) && null !== $data['image_102']) {
                $object->setImage102($data['image_102']);
            } elseif (\array_key_exists('image_102', $data) && null === $data['image_102']) {
                $object->setImage102(null);
            }
            if (\array_key_exists('image_132', $data) && null !== $data['image_132']) {
                $object->setImage132($data['image_132']);
            } elseif (\array_key_exists('image_132', $data) && null === $data['image_132']) {
                $object->setImage132(null);
            }
            if (\array_key_exists('image_230', $data) && null !== $data['image_230']) {
                $object->setImage230($data['image_230']);
            } elseif (\array_key_exists('image_230', $data) && null === $data['image_230']) {
                $object->setImage230(null);
            }
            if (\array_key_exists('image_34', $data) && null !== $data['image_34']) {
                $object->setImage34($data['image_34']);
            } elseif (\array_key_exists('image_34', $data) && null === $data['image_34']) {
                $object->setImage34(null);
            }
            if (\array_key_exists('image_44', $data) && null !== $data['image_44']) {
                $object->setImage44($data['image_44']);
            } elseif (\array_key_exists('image_44', $data) && null === $data['image_44']) {
                $object->setImage44(null);
            }
            if (\array_key_exists('image_68', $data) && null !== $data['image_68']) {
                $object->setImage68($data['image_68']);
            } elseif (\array_key_exists('image_68', $data) && null === $data['image_68']) {
                $object->setImage68(null);
            }
            if (\array_key_exists('image_88', $data) && null !== $data['image_88']) {
                $object->setImage88($data['image_88']);
            } elseif (\array_key_exists('image_88', $data) && null === $data['image_88']) {
                $object->setImage88(null);
            }
            if (\array_key_exists('image_default', $data) && null !== $data['image_default']) {
                $object->setImageDefault($data['image_default']);
            } elseif (\array_key_exists('image_default', $data) && null === $data['image_default']) {
                $object->setImageDefault(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('image102') && null !== $object->getImage102()) {
                $data['image_102'] = $object->getImage102();
            }
            if ($object->isInitialized('image132') && null !== $object->getImage132()) {
                $data['image_132'] = $object->getImage132();
            }
            if ($object->isInitialized('image230') && null !== $object->getImage230()) {
                $data['image_230'] = $object->getImage230();
            }
            if ($object->isInitialized('image34') && null !== $object->getImage34()) {
                $data['image_34'] = $object->getImage34();
            }
            if ($object->isInitialized('image44') && null !== $object->getImage44()) {
                $data['image_44'] = $object->getImage44();
            }
            if ($object->isInitialized('image68') && null !== $object->getImage68()) {
                $data['image_68'] = $object->getImage68();
            }
            if ($object->isInitialized('image88') && null !== $object->getImage88()) {
                $data['image_88'] = $object->getImage88();
            }
            if ($object->isInitialized('imageDefault') && null !== $object->getImageDefault()) {
                $data['image_default'] = $object->getImageDefault();
            }

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\ObjsIcon' => false];
        }
    }
}
