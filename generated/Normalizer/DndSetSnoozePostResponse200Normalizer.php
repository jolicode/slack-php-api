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
    class DndSetSnoozePostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\Slack\Api\Model\DndSetSnoozePostResponse200' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\Slack\Api\Model\DndSetSnoozePostResponse200' === \get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\DndSetSnoozePostResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ok', $data) && null !== $data['ok']) {
                $object->setOk($data['ok']);
            } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
                $object->setOk(null);
            }
            if (\array_key_exists('snooze_enabled', $data) && null !== $data['snooze_enabled']) {
                $object->setSnoozeEnabled($data['snooze_enabled']);
            } elseif (\array_key_exists('snooze_enabled', $data) && null === $data['snooze_enabled']) {
                $object->setSnoozeEnabled(null);
            }
            if (\array_key_exists('snooze_endtime', $data) && null !== $data['snooze_endtime']) {
                $object->setSnoozeEndtime($data['snooze_endtime']);
            } elseif (\array_key_exists('snooze_endtime', $data) && null === $data['snooze_endtime']) {
                $object->setSnoozeEndtime(null);
            }
            if (\array_key_exists('snooze_remaining', $data) && null !== $data['snooze_remaining']) {
                $object->setSnoozeRemaining($data['snooze_remaining']);
            } elseif (\array_key_exists('snooze_remaining', $data) && null === $data['snooze_remaining']) {
                $object->setSnoozeRemaining(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['ok'] = $object->getOk();
            $data['snooze_enabled'] = $object->getSnoozeEnabled();
            $data['snooze_endtime'] = $object->getSnoozeEndtime();
            $data['snooze_remaining'] = $object->getSnoozeRemaining();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['JoliCode\Slack\Api\Model\DndSetSnoozePostResponse200' => false];
        }
    }
} else {
    class DndSetSnoozePostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\Slack\Api\Model\DndSetSnoozePostResponse200' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\Slack\Api\Model\DndSetSnoozePostResponse200' === \get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\DndSetSnoozePostResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ok', $data) && null !== $data['ok']) {
                $object->setOk($data['ok']);
            } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
                $object->setOk(null);
            }
            if (\array_key_exists('snooze_enabled', $data) && null !== $data['snooze_enabled']) {
                $object->setSnoozeEnabled($data['snooze_enabled']);
            } elseif (\array_key_exists('snooze_enabled', $data) && null === $data['snooze_enabled']) {
                $object->setSnoozeEnabled(null);
            }
            if (\array_key_exists('snooze_endtime', $data) && null !== $data['snooze_endtime']) {
                $object->setSnoozeEndtime($data['snooze_endtime']);
            } elseif (\array_key_exists('snooze_endtime', $data) && null === $data['snooze_endtime']) {
                $object->setSnoozeEndtime(null);
            }
            if (\array_key_exists('snooze_remaining', $data) && null !== $data['snooze_remaining']) {
                $object->setSnoozeRemaining($data['snooze_remaining']);
            } elseif (\array_key_exists('snooze_remaining', $data) && null === $data['snooze_remaining']) {
                $object->setSnoozeRemaining(null);
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
            $data['snooze_enabled'] = $object->getSnoozeEnabled();
            $data['snooze_endtime'] = $object->getSnoozeEndtime();
            $data['snooze_remaining'] = $object->getSnoozeRemaining();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['JoliCode\Slack\Api\Model\DndSetSnoozePostResponse200' => false];
        }
    }
}
