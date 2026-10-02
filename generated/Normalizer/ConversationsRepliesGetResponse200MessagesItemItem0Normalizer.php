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
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ConversationsRepliesGetResponse200MessagesItemItem0Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\ConversationsRepliesGetResponse200MessagesItemItem0::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\ConversationsRepliesGetResponse200MessagesItemItem0::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \JoliCode\Slack\Api\Model\ConversationsRepliesGetResponse200MessagesItemItem0();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('subscribed', $data) && \is_int($data['subscribed'])) {
            $data['subscribed'] = (bool) $data['subscribed'];
        }
        if (\array_key_exists('last_read', $data) && null !== $data['last_read']) {
            $object->lastRead = $data['last_read'];
        } elseif (\array_key_exists('last_read', $data)) {
            $object->lastRead = null;
        }
        if (\array_key_exists('latest_reply', $data) && null !== $data['latest_reply']) {
            $object->latestReply = $data['latest_reply'];
        } elseif (\array_key_exists('latest_reply', $data)) {
            $object->latestReply = null;
        }
        if (\array_key_exists('reply_count', $data) && null !== $data['reply_count']) {
            $object->replyCount = $data['reply_count'];
        } elseif (\array_key_exists('reply_count', $data)) {
            $object->replyCount = null;
        }
        if (\array_key_exists('reply_users', $data) && null !== $data['reply_users']) {
            $values = [];
            foreach ($data['reply_users'] as $value) {
                $values[] = $value;
            }
            $object->replyUsers = $values;
        } elseif (\array_key_exists('reply_users', $data)) {
            $object->replyUsers = null;
        }
        if (\array_key_exists('reply_users_count', $data) && null !== $data['reply_users_count']) {
            $object->replyUsersCount = $data['reply_users_count'];
        } elseif (\array_key_exists('reply_users_count', $data)) {
            $object->replyUsersCount = null;
        }
        if (\array_key_exists('source_team', $data) && null !== $data['source_team']) {
            $object->sourceTeam = $data['source_team'];
        } elseif (\array_key_exists('source_team', $data)) {
            $object->sourceTeam = null;
        }
        if (\array_key_exists('subscribed', $data) && null !== $data['subscribed']) {
            $object->subscribed = $data['subscribed'];
        } elseif (\array_key_exists('subscribed', $data)) {
            $object->subscribed = null;
        }
        if (\array_key_exists('team', $data) && null !== $data['team']) {
            $object->team = $data['team'];
        } elseif (\array_key_exists('team', $data)) {
            $object->team = null;
        }
        if (\array_key_exists('text', $data) && null !== $data['text']) {
            $object->text = $data['text'];
        } elseif (\array_key_exists('text', $data)) {
            $object->text = null;
        }
        if (\array_key_exists('thread_ts', $data) && null !== $data['thread_ts']) {
            $object->threadTs = $data['thread_ts'];
        } elseif (\array_key_exists('thread_ts', $data)) {
            $object->threadTs = null;
        }
        if (\array_key_exists('ts', $data) && null !== $data['ts']) {
            $object->ts = $data['ts'];
        } elseif (\array_key_exists('ts', $data)) {
            $object->ts = null;
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->type = $data['type'];
        } elseif (\array_key_exists('type', $data)) {
            $object->type = null;
        }
        if (\array_key_exists('unread_count', $data) && null !== $data['unread_count']) {
            $object->unreadCount = $data['unread_count'];
        } elseif (\array_key_exists('unread_count', $data)) {
            $object->unreadCount = null;
        }
        if (\array_key_exists('user', $data) && null !== $data['user']) {
            $object->user = $data['user'];
        } elseif (\array_key_exists('user', $data)) {
            $object->user = null;
        }
        if (\array_key_exists('user_profile', $data) && null !== $data['user_profile']) {
            $object->userProfile = $this->denormalizer->denormalize($data['user_profile'], \JoliCode\Slack\Api\Model\ObjsUserProfileShort::class, 'json', $context);
        } elseif (\array_key_exists('user_profile', $data)) {
            $object->userProfile = null;
        }
        if (\array_key_exists('user_team', $data) && null !== $data['user_team']) {
            $object->userTeam = $data['user_team'];
        } elseif (\array_key_exists('user_team', $data)) {
            $object->userTeam = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('lastRead', get_object_vars($data)) && null !== ($data->lastRead ?? null)) {
            $dataArray['last_read'] = $data->lastRead;
        }
        if (\array_key_exists('latestReply', get_object_vars($data)) && null !== ($data->latestReply ?? null)) {
            $dataArray['latest_reply'] = $data->latestReply;
        }
        $dataArray['reply_count'] = $data->replyCount;
        if (\array_key_exists('replyUsers', get_object_vars($data)) && null !== ($data->replyUsers ?? null)) {
            $values = [];
            foreach ($data->replyUsers as $value) {
                $values[] = $value;
            }
            $dataArray['reply_users'] = $values;
        }
        if (\array_key_exists('replyUsersCount', get_object_vars($data)) && null !== ($data->replyUsersCount ?? null)) {
            $dataArray['reply_users_count'] = $data->replyUsersCount;
        }
        if (\array_key_exists('sourceTeam', get_object_vars($data)) && null !== ($data->sourceTeam ?? null)) {
            $dataArray['source_team'] = $data->sourceTeam;
        }
        $dataArray['subscribed'] = $data->subscribed;
        if (\array_key_exists('team', get_object_vars($data)) && null !== ($data->team ?? null)) {
            $dataArray['team'] = $data->team;
        }
        $dataArray['text'] = $data->text;
        $dataArray['thread_ts'] = $data->threadTs;
        $dataArray['ts'] = $data->ts;
        $dataArray['type'] = $data->type;
        if (\array_key_exists('unreadCount', get_object_vars($data)) && null !== ($data->unreadCount ?? null)) {
            $dataArray['unread_count'] = $data->unreadCount;
        }
        $dataArray['user'] = $data->user;
        if (\array_key_exists('userProfile', get_object_vars($data)) && null !== ($data->userProfile ?? null)) {
            $normalized = $this->normalizer->normalize($data->userProfile, 'json', $context);
            $dataArray['user_profile'] = is_iterable($normalized) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized) : $normalized;
        }
        if (\array_key_exists('userTeam', get_object_vars($data)) && null !== ($data->userTeam ?? null)) {
            $dataArray['user_team'] = $data->userTeam;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\ConversationsRepliesGetResponse200MessagesItemItem0::class => false];
    }
}
