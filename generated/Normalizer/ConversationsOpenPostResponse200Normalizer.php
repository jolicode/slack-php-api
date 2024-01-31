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
    class ConversationsOpenPostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\ConversationsOpenPostResponse200' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ConversationsOpenPostResponse200' === \get_class($data);
        }

        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ConversationsOpenPostResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('already_open', $data) && null !== $data['already_open']) {
                $object->setAlreadyOpen($data['already_open']);
            } elseif (\array_key_exists('already_open', $data) && null === $data['already_open']) {
                $object->setAlreadyOpen(null);
            }
            if (\array_key_exists('channel', $data) && null !== $data['channel']) {
                $object->setChannel($data['channel']);
            } elseif (\array_key_exists('channel', $data) && null === $data['channel']) {
                $object->setChannel(null);
            }
            if (\array_key_exists('no_op', $data) && null !== $data['no_op']) {
                $object->setNoOp($data['no_op']);
            } elseif (\array_key_exists('no_op', $data) && null === $data['no_op']) {
                $object->setNoOp(null);
            }
            if (\array_key_exists('ok', $data) && null !== $data['ok']) {
                $object->setOk($data['ok']);
            } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
                $object->setOk(null);
            }

            return $object;
        }

        public function normalize(mixed $object, string $format = null, array $context = []): null|array|\ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('alreadyOpen') && null !== $object->getAlreadyOpen()) {
                $data['already_open'] = $object->getAlreadyOpen();
            }
            $data['channel'] = $object->getChannel();
            if ($object->isInitialized('noOp') && null !== $object->getNoOp()) {
                $data['no_op'] = $object->getNoOp();
            }
            $data['ok'] = $object->getOk();

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\ConversationsOpenPostResponse200' => false];
        }
    }
} else {
    class ConversationsOpenPostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\ConversationsOpenPostResponse200' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ConversationsOpenPostResponse200' === \get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ConversationsOpenPostResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('already_open', $data) && null !== $data['already_open']) {
                $object->setAlreadyOpen($data['already_open']);
            } elseif (\array_key_exists('already_open', $data) && null === $data['already_open']) {
                $object->setAlreadyOpen(null);
            }
            if (\array_key_exists('channel', $data) && null !== $data['channel']) {
                $object->setChannel($data['channel']);
            } elseif (\array_key_exists('channel', $data) && null === $data['channel']) {
                $object->setChannel(null);
            }
            if (\array_key_exists('no_op', $data) && null !== $data['no_op']) {
                $object->setNoOp($data['no_op']);
            } elseif (\array_key_exists('no_op', $data) && null === $data['no_op']) {
                $object->setNoOp(null);
            }
            if (\array_key_exists('ok', $data) && null !== $data['ok']) {
                $object->setOk($data['ok']);
            } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
                $object->setOk(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('alreadyOpen') && null !== $object->getAlreadyOpen()) {
                $data['already_open'] = $object->getAlreadyOpen();
            }
            $data['channel'] = $object->getChannel();
            if ($object->isInitialized('noOp') && null !== $object->getNoOp()) {
                $data['no_op'] = $object->getNoOp();
            }
            $data['ok'] = $object->getOk();

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\ConversationsOpenPostResponse200' => false];
        }
    }
}
