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
    class ConversationsHistoryGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\ConversationsHistoryGetResponse200' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ConversationsHistoryGetResponse200' === \get_class($data);
        }

        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ConversationsHistoryGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('channel_actions_count', $data) && null !== $data['channel_actions_count']) {
                $object->setChannelActionsCount($data['channel_actions_count']);
            } elseif (\array_key_exists('channel_actions_count', $data) && null === $data['channel_actions_count']) {
                $object->setChannelActionsCount(null);
            }
            if (\array_key_exists('channel_actions_ts', $data) && null !== $data['channel_actions_ts']) {
                $object->setChannelActionsTs($data['channel_actions_ts']);
            } elseif (\array_key_exists('channel_actions_ts', $data) && null === $data['channel_actions_ts']) {
                $object->setChannelActionsTs(null);
            }
            if (\array_key_exists('has_more', $data) && null !== $data['has_more']) {
                $object->setHasMore($data['has_more']);
            } elseif (\array_key_exists('has_more', $data) && null === $data['has_more']) {
                $object->setHasMore(null);
            }
            if (\array_key_exists('messages', $data) && null !== $data['messages']) {
                $values = [];
                foreach ($data['messages'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\ObjsMessage', 'json', $context);
                }
                $object->setMessages($values);
            } elseif (\array_key_exists('messages', $data) && null === $data['messages']) {
                $object->setMessages(null);
            }
            if (\array_key_exists('ok', $data) && null !== $data['ok']) {
                $object->setOk($data['ok']);
            } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
                $object->setOk(null);
            }
            if (\array_key_exists('pin_count', $data) && null !== $data['pin_count']) {
                $object->setPinCount($data['pin_count']);
            } elseif (\array_key_exists('pin_count', $data) && null === $data['pin_count']) {
                $object->setPinCount(null);
            }
            if (\array_key_exists('response_metadata', $data) && null !== $data['response_metadata']) {
                $object->setResponseMetadata($this->denormalizer->denormalize($data['response_metadata'], 'JoliCode\\Slack\\Api\\Model\\ConversationsHistoryGetResponse200ResponseMetadata', 'json', $context));
            } elseif (\array_key_exists('response_metadata', $data) && null === $data['response_metadata']) {
                $object->setResponseMetadata(null);
            }

            return $object;
        }

        public function normalize(mixed $object, string $format = null, array $context = []): null|array|\ArrayObject|bool|float|int|string
        {
            $data = [];
            $data['channel_actions_count'] = $object->getChannelActionsCount();
            $data['channel_actions_ts'] = $object->getChannelActionsTs();
            $data['has_more'] = $object->getHasMore();
            $values = [];
            foreach ($object->getMessages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['messages'] = $values;
            $data['ok'] = $object->getOk();
            $data['pin_count'] = $object->getPinCount();
            if ($object->isInitialized('responseMetadata') && null !== $object->getResponseMetadata()) {
                $data['response_metadata'] = $this->normalizer->normalize($object->getResponseMetadata(), 'json', $context);
            }

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\ConversationsHistoryGetResponse200' => false];
        }
    }
} else {
    class ConversationsHistoryGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\ConversationsHistoryGetResponse200' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ConversationsHistoryGetResponse200' === \get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ConversationsHistoryGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('channel_actions_count', $data) && null !== $data['channel_actions_count']) {
                $object->setChannelActionsCount($data['channel_actions_count']);
            } elseif (\array_key_exists('channel_actions_count', $data) && null === $data['channel_actions_count']) {
                $object->setChannelActionsCount(null);
            }
            if (\array_key_exists('channel_actions_ts', $data) && null !== $data['channel_actions_ts']) {
                $object->setChannelActionsTs($data['channel_actions_ts']);
            } elseif (\array_key_exists('channel_actions_ts', $data) && null === $data['channel_actions_ts']) {
                $object->setChannelActionsTs(null);
            }
            if (\array_key_exists('has_more', $data) && null !== $data['has_more']) {
                $object->setHasMore($data['has_more']);
            } elseif (\array_key_exists('has_more', $data) && null === $data['has_more']) {
                $object->setHasMore(null);
            }
            if (\array_key_exists('messages', $data) && null !== $data['messages']) {
                $values = [];
                foreach ($data['messages'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\ObjsMessage', 'json', $context);
                }
                $object->setMessages($values);
            } elseif (\array_key_exists('messages', $data) && null === $data['messages']) {
                $object->setMessages(null);
            }
            if (\array_key_exists('ok', $data) && null !== $data['ok']) {
                $object->setOk($data['ok']);
            } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
                $object->setOk(null);
            }
            if (\array_key_exists('pin_count', $data) && null !== $data['pin_count']) {
                $object->setPinCount($data['pin_count']);
            } elseif (\array_key_exists('pin_count', $data) && null === $data['pin_count']) {
                $object->setPinCount(null);
            }
            if (\array_key_exists('response_metadata', $data) && null !== $data['response_metadata']) {
                $object->setResponseMetadata($this->denormalizer->denormalize($data['response_metadata'], 'JoliCode\\Slack\\Api\\Model\\ConversationsHistoryGetResponse200ResponseMetadata', 'json', $context));
            } elseif (\array_key_exists('response_metadata', $data) && null === $data['response_metadata']) {
                $object->setResponseMetadata(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['channel_actions_count'] = $object->getChannelActionsCount();
            $data['channel_actions_ts'] = $object->getChannelActionsTs();
            $data['has_more'] = $object->getHasMore();
            $values = [];
            foreach ($object->getMessages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['messages'] = $values;
            $data['ok'] = $object->getOk();
            $data['pin_count'] = $object->getPinCount();
            if ($object->isInitialized('responseMetadata') && null !== $object->getResponseMetadata()) {
                $data['response_metadata'] = $this->normalizer->normalize($object->getResponseMetadata(), 'json', $context);
            }

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\ConversationsHistoryGetResponse200' => false];
        }
    }
}
