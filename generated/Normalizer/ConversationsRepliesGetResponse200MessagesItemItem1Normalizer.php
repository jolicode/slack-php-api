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
    class ConversationsRepliesGetResponse200MessagesItemItem1Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\ConversationsRepliesGetResponse200MessagesItemItem1' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ConversationsRepliesGetResponse200MessagesItemItem1' === \get_class($data);
        }

        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ConversationsRepliesGetResponse200MessagesItemItem1();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('is_starred', $data) && null !== $data['is_starred']) {
                $object->setIsStarred($data['is_starred']);
            } elseif (\array_key_exists('is_starred', $data) && null === $data['is_starred']) {
                $object->setIsStarred(null);
            }
            if (\array_key_exists('parent_user_id', $data) && null !== $data['parent_user_id']) {
                $object->setParentUserId($data['parent_user_id']);
            } elseif (\array_key_exists('parent_user_id', $data) && null === $data['parent_user_id']) {
                $object->setParentUserId(null);
            }
            if (\array_key_exists('source_team', $data) && null !== $data['source_team']) {
                $object->setSourceTeam($data['source_team']);
            } elseif (\array_key_exists('source_team', $data) && null === $data['source_team']) {
                $object->setSourceTeam(null);
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
            if (\array_key_exists('thread_ts', $data) && null !== $data['thread_ts']) {
                $object->setThreadTs($data['thread_ts']);
            } elseif (\array_key_exists('thread_ts', $data) && null === $data['thread_ts']) {
                $object->setThreadTs(null);
            }
            if (\array_key_exists('ts', $data) && null !== $data['ts']) {
                $object->setTs($data['ts']);
            } elseif (\array_key_exists('ts', $data) && null === $data['ts']) {
                $object->setTs(null);
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
            if (\array_key_exists('user_profile', $data) && null !== $data['user_profile']) {
                $object->setUserProfile($this->denormalizer->denormalize($data['user_profile'], 'JoliCode\\Slack\\Api\\Model\\ObjsUserProfileShort', 'json', $context));
            } elseif (\array_key_exists('user_profile', $data) && null === $data['user_profile']) {
                $object->setUserProfile(null);
            }
            if (\array_key_exists('user_team', $data) && null !== $data['user_team']) {
                $object->setUserTeam($data['user_team']);
            } elseif (\array_key_exists('user_team', $data) && null === $data['user_team']) {
                $object->setUserTeam(null);
            }

            return $object;
        }

        public function normalize(mixed $object, string $format = null, array $context = []): null|array|\ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('isStarred') && null !== $object->getIsStarred()) {
                $data['is_starred'] = $object->getIsStarred();
            }
            $data['parent_user_id'] = $object->getParentUserId();
            if ($object->isInitialized('sourceTeam') && null !== $object->getSourceTeam()) {
                $data['source_team'] = $object->getSourceTeam();
            }
            if ($object->isInitialized('team') && null !== $object->getTeam()) {
                $data['team'] = $object->getTeam();
            }
            $data['text'] = $object->getText();
            $data['thread_ts'] = $object->getThreadTs();
            $data['ts'] = $object->getTs();
            $data['type'] = $object->getType();
            $data['user'] = $object->getUser();
            if ($object->isInitialized('userProfile') && null !== $object->getUserProfile()) {
                $data['user_profile'] = $this->normalizer->normalize($object->getUserProfile(), 'json', $context);
            }
            if ($object->isInitialized('userTeam') && null !== $object->getUserTeam()) {
                $data['user_team'] = $object->getUserTeam();
            }

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\ConversationsRepliesGetResponse200MessagesItemItem1' => false];
        }
    }
} else {
    class ConversationsRepliesGetResponse200MessagesItemItem1Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\ConversationsRepliesGetResponse200MessagesItemItem1' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ConversationsRepliesGetResponse200MessagesItemItem1' === \get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ConversationsRepliesGetResponse200MessagesItemItem1();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('is_starred', $data) && null !== $data['is_starred']) {
                $object->setIsStarred($data['is_starred']);
            } elseif (\array_key_exists('is_starred', $data) && null === $data['is_starred']) {
                $object->setIsStarred(null);
            }
            if (\array_key_exists('parent_user_id', $data) && null !== $data['parent_user_id']) {
                $object->setParentUserId($data['parent_user_id']);
            } elseif (\array_key_exists('parent_user_id', $data) && null === $data['parent_user_id']) {
                $object->setParentUserId(null);
            }
            if (\array_key_exists('source_team', $data) && null !== $data['source_team']) {
                $object->setSourceTeam($data['source_team']);
            } elseif (\array_key_exists('source_team', $data) && null === $data['source_team']) {
                $object->setSourceTeam(null);
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
            if (\array_key_exists('thread_ts', $data) && null !== $data['thread_ts']) {
                $object->setThreadTs($data['thread_ts']);
            } elseif (\array_key_exists('thread_ts', $data) && null === $data['thread_ts']) {
                $object->setThreadTs(null);
            }
            if (\array_key_exists('ts', $data) && null !== $data['ts']) {
                $object->setTs($data['ts']);
            } elseif (\array_key_exists('ts', $data) && null === $data['ts']) {
                $object->setTs(null);
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
            if (\array_key_exists('user_profile', $data) && null !== $data['user_profile']) {
                $object->setUserProfile($this->denormalizer->denormalize($data['user_profile'], 'JoliCode\\Slack\\Api\\Model\\ObjsUserProfileShort', 'json', $context));
            } elseif (\array_key_exists('user_profile', $data) && null === $data['user_profile']) {
                $object->setUserProfile(null);
            }
            if (\array_key_exists('user_team', $data) && null !== $data['user_team']) {
                $object->setUserTeam($data['user_team']);
            } elseif (\array_key_exists('user_team', $data) && null === $data['user_team']) {
                $object->setUserTeam(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('isStarred') && null !== $object->getIsStarred()) {
                $data['is_starred'] = $object->getIsStarred();
            }
            $data['parent_user_id'] = $object->getParentUserId();
            if ($object->isInitialized('sourceTeam') && null !== $object->getSourceTeam()) {
                $data['source_team'] = $object->getSourceTeam();
            }
            if ($object->isInitialized('team') && null !== $object->getTeam()) {
                $data['team'] = $object->getTeam();
            }
            $data['text'] = $object->getText();
            $data['thread_ts'] = $object->getThreadTs();
            $data['ts'] = $object->getTs();
            $data['type'] = $object->getType();
            $data['user'] = $object->getUser();
            if ($object->isInitialized('userProfile') && null !== $object->getUserProfile()) {
                $data['user_profile'] = $this->normalizer->normalize($object->getUserProfile(), 'json', $context);
            }
            if ($object->isInitialized('userTeam') && null !== $object->getUserTeam()) {
                $data['user_team'] = $object->getUserTeam();
            }

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\ConversationsRepliesGetResponse200MessagesItemItem1' => false];
        }
    }
}
