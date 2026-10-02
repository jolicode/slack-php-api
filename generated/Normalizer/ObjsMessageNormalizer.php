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

class ObjsMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\ObjsMessage::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\ObjsMessage::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \JoliCode\Slack\Api\Model\ObjsMessage();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('display_as_bot', $data) && \is_int($data['display_as_bot'])) {
            $data['display_as_bot'] = (bool) $data['display_as_bot'];
        }
        if (\array_key_exists('is_delayed_message', $data) && \is_int($data['is_delayed_message'])) {
            $data['is_delayed_message'] = (bool) $data['is_delayed_message'];
        }
        if (\array_key_exists('is_intro', $data) && \is_int($data['is_intro'])) {
            $data['is_intro'] = (bool) $data['is_intro'];
        }
        if (\array_key_exists('is_starred', $data) && \is_int($data['is_starred'])) {
            $data['is_starred'] = (bool) $data['is_starred'];
        }
        if (\array_key_exists('subscribed', $data) && \is_int($data['subscribed'])) {
            $data['subscribed'] = (bool) $data['subscribed'];
        }
        if (\array_key_exists('upload', $data) && \is_int($data['upload'])) {
            $data['upload'] = (bool) $data['upload'];
        }
        if (\array_key_exists('attachments', $data) && null !== $data['attachments']) {
            $values = [];
            foreach ($data['attachments'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItem::class, 'json', $context);
            }
            $object->attachments = $values;
        } elseif (\array_key_exists('attachments', $data)) {
            $object->attachments = null;
        }
        if (\array_key_exists('blocks', $data) && null !== $data['blocks']) {
            $values_1 = [];
            foreach ($data['blocks'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \JoliCode\Slack\Api\Model\BlocksItem::class, 'json', $context);
            }
            $object->blocks = $values_1;
        } elseif (\array_key_exists('blocks', $data)) {
            $object->blocks = null;
        }
        if (\array_key_exists('bot_id', $data) && null !== $data['bot_id']) {
            $object->botId = $data['bot_id'];
        } elseif (\array_key_exists('bot_id', $data)) {
            $object->botId = null;
        }
        if (\array_key_exists('bot_profile', $data) && null !== $data['bot_profile']) {
            $object->botProfile = $this->denormalizer->denormalize($data['bot_profile'], \JoliCode\Slack\Api\Model\ObjsBotProfile::class, 'json', $context);
        } elseif (\array_key_exists('bot_profile', $data)) {
            $object->botProfile = null;
        }
        if (\array_key_exists('client_msg_id', $data) && null !== $data['client_msg_id']) {
            $object->clientMsgId = $data['client_msg_id'];
        } elseif (\array_key_exists('client_msg_id', $data)) {
            $object->clientMsgId = null;
        }
        if (\array_key_exists('comment', $data) && null !== $data['comment']) {
            $object->comment = $this->denormalizer->denormalize($data['comment'], \JoliCode\Slack\Api\Model\ObjsComment::class, 'json', $context);
        } elseif (\array_key_exists('comment', $data)) {
            $object->comment = null;
        }
        if (\array_key_exists('display_as_bot', $data) && null !== $data['display_as_bot']) {
            $object->displayAsBot = $data['display_as_bot'];
        } elseif (\array_key_exists('display_as_bot', $data)) {
            $object->displayAsBot = null;
        }
        if (\array_key_exists('file', $data) && null !== $data['file']) {
            $object->file = $this->denormalizer->denormalize($data['file'], \JoliCode\Slack\Api\Model\ObjsFile::class, 'json', $context);
        } elseif (\array_key_exists('file', $data)) {
            $object->file = null;
        }
        if (\array_key_exists('files', $data) && null !== $data['files']) {
            $values_2 = [];
            foreach ($data['files'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \JoliCode\Slack\Api\Model\ObjsFile::class, 'json', $context);
            }
            $object->files = $values_2;
        } elseif (\array_key_exists('files', $data)) {
            $object->files = null;
        }
        if (\array_key_exists('icons', $data) && null !== $data['icons']) {
            $object->icons = $this->denormalizer->denormalize($data['icons'], \JoliCode\Slack\Api\Model\ObjsMessageIcons::class, 'json', $context);
        } elseif (\array_key_exists('icons', $data)) {
            $object->icons = null;
        }
        if (\array_key_exists('inviter', $data) && null !== $data['inviter']) {
            $object->inviter = $data['inviter'];
        } elseif (\array_key_exists('inviter', $data)) {
            $object->inviter = null;
        }
        if (\array_key_exists('is_delayed_message', $data) && null !== $data['is_delayed_message']) {
            $object->isDelayedMessage = $data['is_delayed_message'];
        } elseif (\array_key_exists('is_delayed_message', $data)) {
            $object->isDelayedMessage = null;
        }
        if (\array_key_exists('is_intro', $data) && null !== $data['is_intro']) {
            $object->isIntro = $data['is_intro'];
        } elseif (\array_key_exists('is_intro', $data)) {
            $object->isIntro = null;
        }
        if (\array_key_exists('is_starred', $data) && null !== $data['is_starred']) {
            $object->isStarred = $data['is_starred'];
        } elseif (\array_key_exists('is_starred', $data)) {
            $object->isStarred = null;
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
        if (\array_key_exists('metadata', $data) && null !== $data['metadata']) {
            $object->metadata = $this->denormalizer->denormalize($data['metadata'], \JoliCode\Slack\Api\Model\ObjsMetadata::class, 'json', $context);
        } elseif (\array_key_exists('metadata', $data)) {
            $object->metadata = null;
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->name = $data['name'];
        } elseif (\array_key_exists('name', $data)) {
            $object->name = null;
        }
        if (\array_key_exists('old_name', $data) && null !== $data['old_name']) {
            $object->oldName = $data['old_name'];
        } elseif (\array_key_exists('old_name', $data)) {
            $object->oldName = null;
        }
        if (\array_key_exists('parent_user_id', $data) && null !== $data['parent_user_id']) {
            $object->parentUserId = $data['parent_user_id'];
        } elseif (\array_key_exists('parent_user_id', $data)) {
            $object->parentUserId = null;
        }
        if (\array_key_exists('permalink', $data) && null !== $data['permalink']) {
            $object->permalink = $data['permalink'];
        } elseif (\array_key_exists('permalink', $data)) {
            $object->permalink = null;
        }
        if (\array_key_exists('pinned_to', $data) && null !== $data['pinned_to']) {
            $values_3 = [];
            foreach ($data['pinned_to'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->pinnedTo = $values_3;
        } elseif (\array_key_exists('pinned_to', $data)) {
            $object->pinnedTo = null;
        }
        if (\array_key_exists('purpose', $data) && null !== $data['purpose']) {
            $object->purpose = $data['purpose'];
        } elseif (\array_key_exists('purpose', $data)) {
            $object->purpose = null;
        }
        if (\array_key_exists('reactions', $data) && null !== $data['reactions']) {
            $values_4 = [];
            foreach ($data['reactions'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \JoliCode\Slack\Api\Model\ObjsReaction::class, 'json', $context);
            }
            $object->reactions = $values_4;
        } elseif (\array_key_exists('reactions', $data)) {
            $object->reactions = null;
        }
        if (\array_key_exists('reply_count', $data) && null !== $data['reply_count']) {
            $object->replyCount = $data['reply_count'];
        } elseif (\array_key_exists('reply_count', $data)) {
            $object->replyCount = null;
        }
        if (\array_key_exists('reply_users', $data) && null !== $data['reply_users']) {
            $values_5 = [];
            foreach ($data['reply_users'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->replyUsers = $values_5;
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
        if (\array_key_exists('subtype', $data) && null !== $data['subtype']) {
            $object->subtype = $data['subtype'];
        } elseif (\array_key_exists('subtype', $data)) {
            $object->subtype = null;
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
        if (\array_key_exists('topic', $data) && null !== $data['topic']) {
            $object->topic = $data['topic'];
        } elseif (\array_key_exists('topic', $data)) {
            $object->topic = null;
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
        if (\array_key_exists('upload', $data) && null !== $data['upload']) {
            $object->upload = $data['upload'];
        } elseif (\array_key_exists('upload', $data)) {
            $object->upload = null;
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
        if (\array_key_exists('username', $data) && null !== $data['username']) {
            $object->username = $data['username'];
        } elseif (\array_key_exists('username', $data)) {
            $object->username = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('attachments', get_object_vars($data)) && null !== ($data->attachments ?? null)) {
            $values = [];
            foreach ($data->attachments as $value) {
                $normalized = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = is_iterable($normalized) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['attachments'] = $values;
        }
        if (\array_key_exists('blocks', get_object_vars($data)) && null !== ($data->blocks ?? null)) {
            $values_1 = [];
            foreach ($data->blocks as $value_1) {
                $normalized_1 = null === $value_1 ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = is_iterable($normalized_1) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['blocks'] = $values_1;
        }
        if (\array_key_exists('botId', get_object_vars($data)) && null !== ($data->botId ?? null)) {
            $dataArray['bot_id'] = $data->botId;
        }
        if (\array_key_exists('botProfile', get_object_vars($data)) && null !== ($data->botProfile ?? null)) {
            $normalized_2 = $this->normalizer->normalize($data->botProfile, 'json', $context);
            $dataArray['bot_profile'] = is_iterable($normalized_2) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (\array_key_exists('clientMsgId', get_object_vars($data)) && null !== ($data->clientMsgId ?? null)) {
            $dataArray['client_msg_id'] = $data->clientMsgId;
        }
        if (\array_key_exists('comment', get_object_vars($data)) && null !== ($data->comment ?? null)) {
            $normalized_3 = $this->normalizer->normalize($data->comment, 'json', $context);
            $dataArray['comment'] = is_iterable($normalized_3) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        if (\array_key_exists('displayAsBot', get_object_vars($data)) && null !== ($data->displayAsBot ?? null)) {
            $dataArray['display_as_bot'] = $data->displayAsBot;
        }
        if (\array_key_exists('file', get_object_vars($data)) && null !== ($data->file ?? null)) {
            $normalized_4 = $this->normalizer->normalize($data->file, 'json', $context);
            $dataArray['file'] = is_iterable($normalized_4) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized_4) : $normalized_4;
        }
        if (\array_key_exists('files', get_object_vars($data)) && null !== ($data->files ?? null)) {
            $values_2 = [];
            foreach ($data->files as $value_2) {
                $normalized_5 = null === $value_2 ? null : $this->normalizer->normalize($value_2, 'json', $context);
                $values_2[] = is_iterable($normalized_5) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized_5) : $normalized_5;
            }
            $dataArray['files'] = $values_2;
        }
        if (\array_key_exists('icons', get_object_vars($data)) && null !== ($data->icons ?? null)) {
            $normalized_6 = $this->normalizer->normalize($data->icons, 'json', $context);
            $dataArray['icons'] = is_iterable($normalized_6) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized_6) : $normalized_6;
        }
        if (\array_key_exists('inviter', get_object_vars($data)) && null !== ($data->inviter ?? null)) {
            $dataArray['inviter'] = $data->inviter;
        }
        if (\array_key_exists('isDelayedMessage', get_object_vars($data)) && null !== ($data->isDelayedMessage ?? null)) {
            $dataArray['is_delayed_message'] = $data->isDelayedMessage;
        }
        if (\array_key_exists('isIntro', get_object_vars($data)) && null !== ($data->isIntro ?? null)) {
            $dataArray['is_intro'] = $data->isIntro;
        }
        if (\array_key_exists('isStarred', get_object_vars($data)) && null !== ($data->isStarred ?? null)) {
            $dataArray['is_starred'] = $data->isStarred;
        }
        if (\array_key_exists('lastRead', get_object_vars($data)) && null !== ($data->lastRead ?? null)) {
            $dataArray['last_read'] = $data->lastRead;
        }
        if (\array_key_exists('latestReply', get_object_vars($data)) && null !== ($data->latestReply ?? null)) {
            $dataArray['latest_reply'] = $data->latestReply;
        }
        if (\array_key_exists('metadata', get_object_vars($data)) && null !== ($data->metadata ?? null)) {
            $normalized_7 = $this->normalizer->normalize($data->metadata, 'json', $context);
            $dataArray['metadata'] = is_iterable($normalized_7) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized_7) : $normalized_7;
        }
        if (\array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name;
        }
        if (\array_key_exists('oldName', get_object_vars($data)) && null !== ($data->oldName ?? null)) {
            $dataArray['old_name'] = $data->oldName;
        }
        if (\array_key_exists('parentUserId', get_object_vars($data)) && null !== ($data->parentUserId ?? null)) {
            $dataArray['parent_user_id'] = $data->parentUserId;
        }
        if (\array_key_exists('permalink', get_object_vars($data)) && null !== ($data->permalink ?? null)) {
            $dataArray['permalink'] = $data->permalink;
        }
        if (\array_key_exists('pinnedTo', get_object_vars($data)) && null !== ($data->pinnedTo ?? null)) {
            $values_3 = [];
            foreach ($data->pinnedTo as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['pinned_to'] = $values_3;
        }
        if (\array_key_exists('purpose', get_object_vars($data)) && null !== ($data->purpose ?? null)) {
            $dataArray['purpose'] = $data->purpose;
        }
        if (\array_key_exists('reactions', get_object_vars($data)) && null !== ($data->reactions ?? null)) {
            $values_4 = [];
            foreach ($data->reactions as $value_4) {
                $normalized_8 = null === $value_4 ? null : $this->normalizer->normalize($value_4, 'json', $context);
                $values_4[] = is_iterable($normalized_8) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized_8) : $normalized_8;
            }
            $dataArray['reactions'] = $values_4;
        }
        if (\array_key_exists('replyCount', get_object_vars($data)) && null !== ($data->replyCount ?? null)) {
            $dataArray['reply_count'] = $data->replyCount;
        }
        if (\array_key_exists('replyUsers', get_object_vars($data)) && null !== ($data->replyUsers ?? null)) {
            $values_5 = [];
            foreach ($data->replyUsers as $value_5) {
                $values_5[] = $value_5;
            }
            $dataArray['reply_users'] = $values_5;
        }
        if (\array_key_exists('replyUsersCount', get_object_vars($data)) && null !== ($data->replyUsersCount ?? null)) {
            $dataArray['reply_users_count'] = $data->replyUsersCount;
        }
        if (\array_key_exists('sourceTeam', get_object_vars($data)) && null !== ($data->sourceTeam ?? null)) {
            $dataArray['source_team'] = $data->sourceTeam;
        }
        if (\array_key_exists('subscribed', get_object_vars($data)) && null !== ($data->subscribed ?? null)) {
            $dataArray['subscribed'] = $data->subscribed;
        }
        if (\array_key_exists('subtype', get_object_vars($data)) && null !== ($data->subtype ?? null)) {
            $dataArray['subtype'] = $data->subtype;
        }
        if (\array_key_exists('team', get_object_vars($data)) && null !== ($data->team ?? null)) {
            $dataArray['team'] = $data->team;
        }
        $dataArray['text'] = $data->text;
        if (\array_key_exists('threadTs', get_object_vars($data)) && null !== ($data->threadTs ?? null)) {
            $dataArray['thread_ts'] = $data->threadTs;
        }
        if (\array_key_exists('topic', get_object_vars($data)) && null !== ($data->topic ?? null)) {
            $dataArray['topic'] = $data->topic;
        }
        $dataArray['ts'] = $data->ts;
        $dataArray['type'] = $data->type;
        if (\array_key_exists('unreadCount', get_object_vars($data)) && null !== ($data->unreadCount ?? null)) {
            $dataArray['unread_count'] = $data->unreadCount;
        }
        if (\array_key_exists('upload', get_object_vars($data)) && null !== ($data->upload ?? null)) {
            $dataArray['upload'] = $data->upload;
        }
        if (\array_key_exists('user', get_object_vars($data)) && null !== ($data->user ?? null)) {
            $dataArray['user'] = $data->user;
        }
        if (\array_key_exists('userProfile', get_object_vars($data)) && null !== ($data->userProfile ?? null)) {
            $normalized_9 = $this->normalizer->normalize($data->userProfile, 'json', $context);
            $dataArray['user_profile'] = is_iterable($normalized_9) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized_9) : $normalized_9;
        }
        if (\array_key_exists('userTeam', get_object_vars($data)) && null !== ($data->userTeam ?? null)) {
            $dataArray['user_team'] = $data->userTeam;
        }
        if (\array_key_exists('username', get_object_vars($data)) && null !== ($data->username ?? null)) {
            $dataArray['username'] = $data->username;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\ObjsMessage::class => false];
    }
}
