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
    class UsersIdentityGetResponse200Item2Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\UsersIdentityGetResponse200Item2' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\UsersIdentityGetResponse200Item2' === \get_class($data);
        }

        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item2();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ok', $data) && null !== $data['ok']) {
                $object->setOk($data['ok']);
            } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
                $object->setOk(null);
            }
            if (\array_key_exists('team', $data) && null !== $data['team']) {
                $object->setTeam($this->denormalizer->denormalize($data['team'], 'JoliCode\\Slack\\Api\\Model\\UsersIdentityGetResponse200Item2Team', 'json', $context));
            } elseif (\array_key_exists('team', $data) && null === $data['team']) {
                $object->setTeam(null);
            }
            if (\array_key_exists('user', $data) && null !== $data['user']) {
                $object->setUser($this->denormalizer->denormalize($data['user'], 'JoliCode\\Slack\\Api\\Model\\UsersIdentityGetResponse200Item2User', 'json', $context));
            } elseif (\array_key_exists('user', $data) && null === $data['user']) {
                $object->setUser(null);
            }

            return $object;
        }

        public function normalize(mixed $object, string $format = null, array $context = []): null|array|\ArrayObject|bool|float|int|string
        {
            $data = [];
            $data['ok'] = $object->getOk();
            $data['team'] = $this->normalizer->normalize($object->getTeam(), 'json', $context);
            $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\UsersIdentityGetResponse200Item2' => false];
        }
    }
} else {
    class UsersIdentityGetResponse200Item2Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\UsersIdentityGetResponse200Item2' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\UsersIdentityGetResponse200Item2' === \get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item2();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ok', $data) && null !== $data['ok']) {
                $object->setOk($data['ok']);
            } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
                $object->setOk(null);
            }
            if (\array_key_exists('team', $data) && null !== $data['team']) {
                $object->setTeam($this->denormalizer->denormalize($data['team'], 'JoliCode\\Slack\\Api\\Model\\UsersIdentityGetResponse200Item2Team', 'json', $context));
            } elseif (\array_key_exists('team', $data) && null === $data['team']) {
                $object->setTeam(null);
            }
            if (\array_key_exists('user', $data) && null !== $data['user']) {
                $object->setUser($this->denormalizer->denormalize($data['user'], 'JoliCode\\Slack\\Api\\Model\\UsersIdentityGetResponse200Item2User', 'json', $context));
            } elseif (\array_key_exists('user', $data) && null === $data['user']) {
                $object->setUser(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['ok'] = $object->getOk();
            $data['team'] = $this->normalizer->normalize($object->getTeam(), 'json', $context);
            $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\UsersIdentityGetResponse200Item2' => false];
        }
    }
}
