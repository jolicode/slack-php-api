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
    class UsersSetPhotoPostResponsedefaultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\UsersSetPhotoPostResponsedefault' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\UsersSetPhotoPostResponsedefault' === \get_class($data);
        }

        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\UsersSetPhotoPostResponsedefault();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('callstack', $data) && null !== $data['callstack']) {
                $object->setCallstack($data['callstack']);
            } elseif (\array_key_exists('callstack', $data) && null === $data['callstack']) {
                $object->setCallstack(null);
            }
            if (\array_key_exists('debug_step', $data) && null !== $data['debug_step']) {
                $object->setDebugStep($data['debug_step']);
            } elseif (\array_key_exists('debug_step', $data) && null === $data['debug_step']) {
                $object->setDebugStep(null);
            }
            if (\array_key_exists('dims', $data) && null !== $data['dims']) {
                $object->setDims($data['dims']);
            } elseif (\array_key_exists('dims', $data) && null === $data['dims']) {
                $object->setDims(null);
            }
            if (\array_key_exists('error', $data) && null !== $data['error']) {
                $object->setError($data['error']);
            } elseif (\array_key_exists('error', $data) && null === $data['error']) {
                $object->setError(null);
            }
            if (\array_key_exists('ok', $data) && null !== $data['ok']) {
                $object->setOk($data['ok']);
            } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
                $object->setOk(null);
            }
            if (\array_key_exists('time_ident', $data) && null !== $data['time_ident']) {
                $object->setTimeIdent($data['time_ident']);
            } elseif (\array_key_exists('time_ident', $data) && null === $data['time_ident']) {
                $object->setTimeIdent(null);
            }

            return $object;
        }

        public function normalize(mixed $object, string $format = null, array $context = []): null|array|\ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('callstack') && null !== $object->getCallstack()) {
                $data['callstack'] = $object->getCallstack();
            }
            if ($object->isInitialized('debugStep') && null !== $object->getDebugStep()) {
                $data['debug_step'] = $object->getDebugStep();
            }
            if ($object->isInitialized('dims') && null !== $object->getDims()) {
                $data['dims'] = $object->getDims();
            }
            $data['error'] = $object->getError();
            $data['ok'] = $object->getOk();
            if ($object->isInitialized('timeIdent') && null !== $object->getTimeIdent()) {
                $data['time_ident'] = $object->getTimeIdent();
            }

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\UsersSetPhotoPostResponsedefault' => false];
        }
    }
} else {
    class UsersSetPhotoPostResponsedefaultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\UsersSetPhotoPostResponsedefault' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\UsersSetPhotoPostResponsedefault' === \get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\UsersSetPhotoPostResponsedefault();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('callstack', $data) && null !== $data['callstack']) {
                $object->setCallstack($data['callstack']);
            } elseif (\array_key_exists('callstack', $data) && null === $data['callstack']) {
                $object->setCallstack(null);
            }
            if (\array_key_exists('debug_step', $data) && null !== $data['debug_step']) {
                $object->setDebugStep($data['debug_step']);
            } elseif (\array_key_exists('debug_step', $data) && null === $data['debug_step']) {
                $object->setDebugStep(null);
            }
            if (\array_key_exists('dims', $data) && null !== $data['dims']) {
                $object->setDims($data['dims']);
            } elseif (\array_key_exists('dims', $data) && null === $data['dims']) {
                $object->setDims(null);
            }
            if (\array_key_exists('error', $data) && null !== $data['error']) {
                $object->setError($data['error']);
            } elseif (\array_key_exists('error', $data) && null === $data['error']) {
                $object->setError(null);
            }
            if (\array_key_exists('ok', $data) && null !== $data['ok']) {
                $object->setOk($data['ok']);
            } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
                $object->setOk(null);
            }
            if (\array_key_exists('time_ident', $data) && null !== $data['time_ident']) {
                $object->setTimeIdent($data['time_ident']);
            } elseif (\array_key_exists('time_ident', $data) && null === $data['time_ident']) {
                $object->setTimeIdent(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('callstack') && null !== $object->getCallstack()) {
                $data['callstack'] = $object->getCallstack();
            }
            if ($object->isInitialized('debugStep') && null !== $object->getDebugStep()) {
                $data['debug_step'] = $object->getDebugStep();
            }
            if ($object->isInitialized('dims') && null !== $object->getDims()) {
                $data['dims'] = $object->getDims();
            }
            $data['error'] = $object->getError();
            $data['ok'] = $object->getOk();
            if ($object->isInitialized('timeIdent') && null !== $object->getTimeIdent()) {
                $data['time_ident'] = $object->getTimeIdent();
            }

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\UsersSetPhotoPostResponsedefault' => false];
        }
    }
}
