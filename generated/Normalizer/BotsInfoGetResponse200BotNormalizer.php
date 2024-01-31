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
    class BotsInfoGetResponse200BotNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\BotsInfoGetResponse200Bot' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\BotsInfoGetResponse200Bot' === \get_class($data);
        }

        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\BotsInfoGetResponse200Bot();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('app_id', $data) && null !== $data['app_id']) {
                $object->setAppId($data['app_id']);
            } elseif (\array_key_exists('app_id', $data) && null === $data['app_id']) {
                $object->setAppId(null);
            }
            if (\array_key_exists('deleted', $data) && null !== $data['deleted']) {
                $object->setDeleted($data['deleted']);
            } elseif (\array_key_exists('deleted', $data) && null === $data['deleted']) {
                $object->setDeleted(null);
            }
            if (\array_key_exists('icons', $data) && null !== $data['icons']) {
                $object->setIcons($this->denormalizer->denormalize($data['icons'], 'JoliCode\\Slack\\Api\\Model\\BotsInfoGetResponse200BotIcons', 'json', $context));
            } elseif (\array_key_exists('icons', $data) && null === $data['icons']) {
                $object->setIcons(null);
            }
            if (\array_key_exists('id', $data) && null !== $data['id']) {
                $object->setId($data['id']);
            } elseif (\array_key_exists('id', $data) && null === $data['id']) {
                $object->setId(null);
            }
            if (\array_key_exists('name', $data) && null !== $data['name']) {
                $object->setName($data['name']);
            } elseif (\array_key_exists('name', $data) && null === $data['name']) {
                $object->setName(null);
            }
            if (\array_key_exists('updated', $data) && null !== $data['updated']) {
                $object->setUpdated($data['updated']);
            } elseif (\array_key_exists('updated', $data) && null === $data['updated']) {
                $object->setUpdated(null);
            }
            if (\array_key_exists('user_id', $data) && null !== $data['user_id']) {
                $object->setUserId($data['user_id']);
            } elseif (\array_key_exists('user_id', $data) && null === $data['user_id']) {
                $object->setUserId(null);
            }

            return $object;
        }

        public function normalize(mixed $object, string $format = null, array $context = []): null|array|\ArrayObject|bool|float|int|string
        {
            $data = [];
            $data['app_id'] = $object->getAppId();
            $data['deleted'] = $object->getDeleted();
            $data['icons'] = $this->normalizer->normalize($object->getIcons(), 'json', $context);
            $data['id'] = $object->getId();
            $data['name'] = $object->getName();
            $data['updated'] = $object->getUpdated();
            if ($object->isInitialized('userId') && null !== $object->getUserId()) {
                $data['user_id'] = $object->getUserId();
            }

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\BotsInfoGetResponse200Bot' => false];
        }
    }
} else {
    class BotsInfoGetResponse200BotNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\BotsInfoGetResponse200Bot' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\BotsInfoGetResponse200Bot' === \get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\BotsInfoGetResponse200Bot();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('app_id', $data) && null !== $data['app_id']) {
                $object->setAppId($data['app_id']);
            } elseif (\array_key_exists('app_id', $data) && null === $data['app_id']) {
                $object->setAppId(null);
            }
            if (\array_key_exists('deleted', $data) && null !== $data['deleted']) {
                $object->setDeleted($data['deleted']);
            } elseif (\array_key_exists('deleted', $data) && null === $data['deleted']) {
                $object->setDeleted(null);
            }
            if (\array_key_exists('icons', $data) && null !== $data['icons']) {
                $object->setIcons($this->denormalizer->denormalize($data['icons'], 'JoliCode\\Slack\\Api\\Model\\BotsInfoGetResponse200BotIcons', 'json', $context));
            } elseif (\array_key_exists('icons', $data) && null === $data['icons']) {
                $object->setIcons(null);
            }
            if (\array_key_exists('id', $data) && null !== $data['id']) {
                $object->setId($data['id']);
            } elseif (\array_key_exists('id', $data) && null === $data['id']) {
                $object->setId(null);
            }
            if (\array_key_exists('name', $data) && null !== $data['name']) {
                $object->setName($data['name']);
            } elseif (\array_key_exists('name', $data) && null === $data['name']) {
                $object->setName(null);
            }
            if (\array_key_exists('updated', $data) && null !== $data['updated']) {
                $object->setUpdated($data['updated']);
            } elseif (\array_key_exists('updated', $data) && null === $data['updated']) {
                $object->setUpdated(null);
            }
            if (\array_key_exists('user_id', $data) && null !== $data['user_id']) {
                $object->setUserId($data['user_id']);
            } elseif (\array_key_exists('user_id', $data) && null === $data['user_id']) {
                $object->setUserId(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['app_id'] = $object->getAppId();
            $data['deleted'] = $object->getDeleted();
            $data['icons'] = $this->normalizer->normalize($object->getIcons(), 'json', $context);
            $data['id'] = $object->getId();
            $data['name'] = $object->getName();
            $data['updated'] = $object->getUpdated();
            if ($object->isInitialized('userId') && null !== $object->getUserId()) {
                $data['user_id'] = $object->getUserId();
            }

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\BotsInfoGetResponse200Bot' => false];
        }
    }
}
