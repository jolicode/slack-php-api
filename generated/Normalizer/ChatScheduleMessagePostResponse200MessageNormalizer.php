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
    class ChatScheduleMessagePostResponse200MessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\ChatScheduleMessagePostResponse200Message' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ChatScheduleMessagePostResponse200Message' === \get_class($data);
        }

        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200Message();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('attachments', $data) && null !== $data['attachments']) {
                $values = [];
                foreach ($data['attachments'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\ChatScheduleMessagePostResponse200MessageAttachmentsItem', 'json', $context);
                }
                $object->setAttachments($values);
            } elseif (\array_key_exists('attachments', $data) && null === $data['attachments']) {
                $object->setAttachments(null);
            }
            if (\array_key_exists('bot_id', $data) && null !== $data['bot_id']) {
                $object->setBotId($data['bot_id']);
            } elseif (\array_key_exists('bot_id', $data) && null === $data['bot_id']) {
                $object->setBotId(null);
            }
            if (\array_key_exists('bot_profile', $data) && null !== $data['bot_profile']) {
                $object->setBotProfile($this->denormalizer->denormalize($data['bot_profile'], 'JoliCode\\Slack\\Api\\Model\\ObjsBotProfile', 'json', $context));
            } elseif (\array_key_exists('bot_profile', $data) && null === $data['bot_profile']) {
                $object->setBotProfile(null);
            }
            if (\array_key_exists('subtype', $data) && null !== $data['subtype']) {
                $object->setSubtype($data['subtype']);
            } elseif (\array_key_exists('subtype', $data) && null === $data['subtype']) {
                $object->setSubtype(null);
            }
            if (\array_key_exists('team', $data) && null !== $data['team']) {
                $object->setTeam($data['team']);
            } elseif (\array_key_exists('team', $data) && null === $data['team']) {
                $object->setTeam(null);
            }
            if (\array_key_exists('text', $data) && null !== $data['text']) {
                $object->setText($data['text']);
            } elseif (\array_key_exists('text', $data) && null === $data['text']) {
                $object->setText(null);
            }
            if (\array_key_exists('type', $data) && null !== $data['type']) {
                $object->setType($data['type']);
            } elseif (\array_key_exists('type', $data) && null === $data['type']) {
                $object->setType(null);
            }
            if (\array_key_exists('user', $data) && null !== $data['user']) {
                $object->setUser($data['user']);
            } elseif (\array_key_exists('user', $data) && null === $data['user']) {
                $object->setUser(null);
            }
            if (\array_key_exists('username', $data) && null !== $data['username']) {
                $object->setUsername($data['username']);
            } elseif (\array_key_exists('username', $data) && null === $data['username']) {
                $object->setUsername(null);
            }

            return $object;
        }

        public function normalize(mixed $object, string $format = null, array $context = []): null|array|\ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('attachments') && null !== $object->getAttachments()) {
                $values = [];
                foreach ($object->getAttachments() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['attachments'] = $values;
            }
            $data['bot_id'] = $object->getBotId();
            if ($object->isInitialized('botProfile') && null !== $object->getBotProfile()) {
                $data['bot_profile'] = $this->normalizer->normalize($object->getBotProfile(), 'json', $context);
            }
            if ($object->isInitialized('subtype') && null !== $object->getSubtype()) {
                $data['subtype'] = $object->getSubtype();
            }
            $data['team'] = $object->getTeam();
            $data['text'] = $object->getText();
            $data['type'] = $object->getType();
            $data['user'] = $object->getUser();
            if ($object->isInitialized('username') && null !== $object->getUsername()) {
                $data['username'] = $object->getUsername();
            }

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\ChatScheduleMessagePostResponse200Message' => false];
        }
    }
} else {
    class ChatScheduleMessagePostResponse200MessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\ChatScheduleMessagePostResponse200Message' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ChatScheduleMessagePostResponse200Message' === \get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200Message();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('attachments', $data) && null !== $data['attachments']) {
                $values = [];
                foreach ($data['attachments'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\ChatScheduleMessagePostResponse200MessageAttachmentsItem', 'json', $context);
                }
                $object->setAttachments($values);
            } elseif (\array_key_exists('attachments', $data) && null === $data['attachments']) {
                $object->setAttachments(null);
            }
            if (\array_key_exists('bot_id', $data) && null !== $data['bot_id']) {
                $object->setBotId($data['bot_id']);
            } elseif (\array_key_exists('bot_id', $data) && null === $data['bot_id']) {
                $object->setBotId(null);
            }
            if (\array_key_exists('bot_profile', $data) && null !== $data['bot_profile']) {
                $object->setBotProfile($this->denormalizer->denormalize($data['bot_profile'], 'JoliCode\\Slack\\Api\\Model\\ObjsBotProfile', 'json', $context));
            } elseif (\array_key_exists('bot_profile', $data) && null === $data['bot_profile']) {
                $object->setBotProfile(null);
            }
            if (\array_key_exists('subtype', $data) && null !== $data['subtype']) {
                $object->setSubtype($data['subtype']);
            } elseif (\array_key_exists('subtype', $data) && null === $data['subtype']) {
                $object->setSubtype(null);
            }
            if (\array_key_exists('team', $data) && null !== $data['team']) {
                $object->setTeam($data['team']);
            } elseif (\array_key_exists('team', $data) && null === $data['team']) {
                $object->setTeam(null);
            }
            if (\array_key_exists('text', $data) && null !== $data['text']) {
                $object->setText($data['text']);
            } elseif (\array_key_exists('text', $data) && null === $data['text']) {
                $object->setText(null);
            }
            if (\array_key_exists('type', $data) && null !== $data['type']) {
                $object->setType($data['type']);
            } elseif (\array_key_exists('type', $data) && null === $data['type']) {
                $object->setType(null);
            }
            if (\array_key_exists('user', $data) && null !== $data['user']) {
                $object->setUser($data['user']);
            } elseif (\array_key_exists('user', $data) && null === $data['user']) {
                $object->setUser(null);
            }
            if (\array_key_exists('username', $data) && null !== $data['username']) {
                $object->setUsername($data['username']);
            } elseif (\array_key_exists('username', $data) && null === $data['username']) {
                $object->setUsername(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('attachments') && null !== $object->getAttachments()) {
                $values = [];
                foreach ($object->getAttachments() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['attachments'] = $values;
            }
            $data['bot_id'] = $object->getBotId();
            if ($object->isInitialized('botProfile') && null !== $object->getBotProfile()) {
                $data['bot_profile'] = $this->normalizer->normalize($object->getBotProfile(), 'json', $context);
            }
            if ($object->isInitialized('subtype') && null !== $object->getSubtype()) {
                $data['subtype'] = $object->getSubtype();
            }
            $data['team'] = $object->getTeam();
            $data['text'] = $object->getText();
            $data['type'] = $object->getType();
            $data['user'] = $object->getUser();
            if ($object->isInitialized('username') && null !== $object->getUsername()) {
                $data['username'] = $object->getUsername();
            }

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\ChatScheduleMessagePostResponse200Message' => false];
        }
    }
}
