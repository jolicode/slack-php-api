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
    class ObjsReminderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\ObjsReminder' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsReminder' === \get_class($data);
        }

        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ObjsReminder();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('complete_ts', $data) && null !== $data['complete_ts']) {
                $object->setCompleteTs($data['complete_ts']);
            } elseif (\array_key_exists('complete_ts', $data) && null === $data['complete_ts']) {
                $object->setCompleteTs(null);
            }
            if (\array_key_exists('creator', $data) && null !== $data['creator']) {
                $object->setCreator($data['creator']);
            } elseif (\array_key_exists('creator', $data) && null === $data['creator']) {
                $object->setCreator(null);
            }
            if (\array_key_exists('id', $data) && null !== $data['id']) {
                $object->setId($data['id']);
            } elseif (\array_key_exists('id', $data) && null === $data['id']) {
                $object->setId(null);
            }
            if (\array_key_exists('recurring', $data) && null !== $data['recurring']) {
                $object->setRecurring($data['recurring']);
            } elseif (\array_key_exists('recurring', $data) && null === $data['recurring']) {
                $object->setRecurring(null);
            }
            if (\array_key_exists('text', $data) && null !== $data['text']) {
                $object->setText($data['text']);
            } elseif (\array_key_exists('text', $data) && null === $data['text']) {
                $object->setText(null);
            }
            if (\array_key_exists('time', $data) && null !== $data['time']) {
                $object->setTime($data['time']);
            } elseif (\array_key_exists('time', $data) && null === $data['time']) {
                $object->setTime(null);
            }
            if (\array_key_exists('user', $data) && null !== $data['user']) {
                $object->setUser($data['user']);
            } elseif (\array_key_exists('user', $data) && null === $data['user']) {
                $object->setUser(null);
            }

            return $object;
        }

        public function normalize(mixed $object, string $format = null, array $context = []): null|array|\ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('completeTs') && null !== $object->getCompleteTs()) {
                $data['complete_ts'] = $object->getCompleteTs();
            }
            $data['creator'] = $object->getCreator();
            $data['id'] = $object->getId();
            $data['recurring'] = $object->getRecurring();
            $data['text'] = $object->getText();
            if ($object->isInitialized('time') && null !== $object->getTime()) {
                $data['time'] = $object->getTime();
            }
            $data['user'] = $object->getUser();

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\ObjsReminder' => false];
        }
    }
} else {
    class ObjsReminderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\ObjsReminder' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsReminder' === \get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ObjsReminder();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('complete_ts', $data) && null !== $data['complete_ts']) {
                $object->setCompleteTs($data['complete_ts']);
            } elseif (\array_key_exists('complete_ts', $data) && null === $data['complete_ts']) {
                $object->setCompleteTs(null);
            }
            if (\array_key_exists('creator', $data) && null !== $data['creator']) {
                $object->setCreator($data['creator']);
            } elseif (\array_key_exists('creator', $data) && null === $data['creator']) {
                $object->setCreator(null);
            }
            if (\array_key_exists('id', $data) && null !== $data['id']) {
                $object->setId($data['id']);
            } elseif (\array_key_exists('id', $data) && null === $data['id']) {
                $object->setId(null);
            }
            if (\array_key_exists('recurring', $data) && null !== $data['recurring']) {
                $object->setRecurring($data['recurring']);
            } elseif (\array_key_exists('recurring', $data) && null === $data['recurring']) {
                $object->setRecurring(null);
            }
            if (\array_key_exists('text', $data) && null !== $data['text']) {
                $object->setText($data['text']);
            } elseif (\array_key_exists('text', $data) && null === $data['text']) {
                $object->setText(null);
            }
            if (\array_key_exists('time', $data) && null !== $data['time']) {
                $object->setTime($data['time']);
            } elseif (\array_key_exists('time', $data) && null === $data['time']) {
                $object->setTime(null);
            }
            if (\array_key_exists('user', $data) && null !== $data['user']) {
                $object->setUser($data['user']);
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
            if ($object->isInitialized('completeTs') && null !== $object->getCompleteTs()) {
                $data['complete_ts'] = $object->getCompleteTs();
            }
            $data['creator'] = $object->getCreator();
            $data['id'] = $object->getId();
            $data['recurring'] = $object->getRecurring();
            $data['text'] = $object->getText();
            if ($object->isInitialized('time') && null !== $object->getTime()) {
                $data['time'] = $object->getTime();
            }
            $data['user'] = $object->getUser();

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\ObjsReminder' => false];
        }
    }
}
