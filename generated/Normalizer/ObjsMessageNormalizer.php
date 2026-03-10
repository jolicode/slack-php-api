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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsMessage();
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
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('attachments', $data) && null !== $data['attachments']) {
            $values = [];
            foreach ($data['attachments'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItem::class, 'json', $context);
            }
            $object->setAttachments($values);
        } elseif (\array_key_exists('attachments', $data) && null === $data['attachments']) {
            $object->setAttachments(null);
        }
        if (\array_key_exists('blocks', $data) && null !== $data['blocks']) {
            $values_1 = [];
            foreach ($data['blocks'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \JoliCode\Slack\Api\Model\BlocksItem::class, 'json', $context);
            }
            $object->setBlocks($values_1);
        } elseif (\array_key_exists('blocks', $data) && null === $data['blocks']) {
            $object->setBlocks(null);
        }
        if (\array_key_exists('bot_id', $data) && null !== $data['bot_id']) {
            $object->setBotId($data['bot_id']);
        } elseif (\array_key_exists('bot_id', $data) && null === $data['bot_id']) {
            $object->setBotId(null);
        }
        if (\array_key_exists('bot_profile', $data) && null !== $data['bot_profile']) {
            $object->setBotProfile($this->denormalizer->denormalize($data['bot_profile'], \JoliCode\Slack\Api\Model\ObjsBotProfile::class, 'json', $context));
        } elseif (\array_key_exists('bot_profile', $data) && null === $data['bot_profile']) {
            $object->setBotProfile(null);
        }
        if (\array_key_exists('client_msg_id', $data) && null !== $data['client_msg_id']) {
            $object->setClientMsgId($data['client_msg_id']);
        } elseif (\array_key_exists('client_msg_id', $data) && null === $data['client_msg_id']) {
            $object->setClientMsgId(null);
        }
        if (\array_key_exists('comment', $data) && null !== $data['comment']) {
            $object->setComment($this->denormalizer->denormalize($data['comment'], \JoliCode\Slack\Api\Model\ObjsComment::class, 'json', $context));
        } elseif (\array_key_exists('comment', $data) && null === $data['comment']) {
            $object->setComment(null);
        }
        if (\array_key_exists('display_as_bot', $data) && null !== $data['display_as_bot']) {
            $object->setDisplayAsBot($data['display_as_bot']);
        } elseif (\array_key_exists('display_as_bot', $data) && null === $data['display_as_bot']) {
            $object->setDisplayAsBot(null);
        }
        if (\array_key_exists('file', $data) && null !== $data['file']) {
            $object->setFile($this->denormalizer->denormalize($data['file'], \JoliCode\Slack\Api\Model\ObjsFile::class, 'json', $context));
        } elseif (\array_key_exists('file', $data) && null === $data['file']) {
            $object->setFile(null);
        }
        if (\array_key_exists('files', $data) && null !== $data['files']) {
            $values_2 = [];
            foreach ($data['files'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \JoliCode\Slack\Api\Model\ObjsFile::class, 'json', $context);
            }
            $object->setFiles($values_2);
        } elseif (\array_key_exists('files', $data) && null === $data['files']) {
            $object->setFiles(null);
        }
        if (\array_key_exists('icons', $data) && null !== $data['icons']) {
            $object->setIcons($this->denormalizer->denormalize($data['icons'], \JoliCode\Slack\Api\Model\ObjsMessageIcons::class, 'json', $context));
        } elseif (\array_key_exists('icons', $data) && null === $data['icons']) {
            $object->setIcons(null);
        }
        if (\array_key_exists('inviter', $data) && null !== $data['inviter']) {
            $object->setInviter($data['inviter']);
        } elseif (\array_key_exists('inviter', $data) && null === $data['inviter']) {
            $object->setInviter(null);
        }
        if (\array_key_exists('is_delayed_message', $data) && null !== $data['is_delayed_message']) {
            $object->setIsDelayedMessage($data['is_delayed_message']);
        } elseif (\array_key_exists('is_delayed_message', $data) && null === $data['is_delayed_message']) {
            $object->setIsDelayedMessage(null);
        }
        if (\array_key_exists('is_intro', $data) && null !== $data['is_intro']) {
            $object->setIsIntro($data['is_intro']);
        } elseif (\array_key_exists('is_intro', $data) && null === $data['is_intro']) {
            $object->setIsIntro(null);
        }
        if (\array_key_exists('is_starred', $data) && null !== $data['is_starred']) {
            $object->setIsStarred($data['is_starred']);
        } elseif (\array_key_exists('is_starred', $data) && null === $data['is_starred']) {
            $object->setIsStarred(null);
        }
        if (\array_key_exists('last_read', $data) && null !== $data['last_read']) {
            $object->setLastRead($data['last_read']);
        } elseif (\array_key_exists('last_read', $data) && null === $data['last_read']) {
            $object->setLastRead(null);
        }
        if (\array_key_exists('latest_reply', $data) && null !== $data['latest_reply']) {
            $object->setLatestReply($data['latest_reply']);
        } elseif (\array_key_exists('latest_reply', $data) && null === $data['latest_reply']) {
            $object->setLatestReply(null);
        }
        if (\array_key_exists('metadata', $data) && null !== $data['metadata']) {
            $object->setMetadata($this->denormalizer->denormalize($data['metadata'], \JoliCode\Slack\Api\Model\ObjsMetadata::class, 'json', $context));
        } elseif (\array_key_exists('metadata', $data) && null === $data['metadata']) {
            $object->setMetadata(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('old_name', $data) && null !== $data['old_name']) {
            $object->setOldName($data['old_name']);
        } elseif (\array_key_exists('old_name', $data) && null === $data['old_name']) {
            $object->setOldName(null);
        }
        if (\array_key_exists('parent_user_id', $data) && null !== $data['parent_user_id']) {
            $object->setParentUserId($data['parent_user_id']);
        } elseif (\array_key_exists('parent_user_id', $data) && null === $data['parent_user_id']) {
            $object->setParentUserId(null);
        }
        if (\array_key_exists('permalink', $data) && null !== $data['permalink']) {
            $object->setPermalink($data['permalink']);
        } elseif (\array_key_exists('permalink', $data) && null === $data['permalink']) {
            $object->setPermalink(null);
        }
        if (\array_key_exists('pinned_to', $data) && null !== $data['pinned_to']) {
            $values_3 = [];
            foreach ($data['pinned_to'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setPinnedTo($values_3);
        } elseif (\array_key_exists('pinned_to', $data) && null === $data['pinned_to']) {
            $object->setPinnedTo(null);
        }
        if (\array_key_exists('purpose', $data) && null !== $data['purpose']) {
            $object->setPurpose($data['purpose']);
        } elseif (\array_key_exists('purpose', $data) && null === $data['purpose']) {
            $object->setPurpose(null);
        }
        if (\array_key_exists('reactions', $data) && null !== $data['reactions']) {
            $values_4 = [];
            foreach ($data['reactions'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \JoliCode\Slack\Api\Model\ObjsReaction::class, 'json', $context);
            }
            $object->setReactions($values_4);
        } elseif (\array_key_exists('reactions', $data) && null === $data['reactions']) {
            $object->setReactions(null);
        }
        if (\array_key_exists('reply_count', $data) && null !== $data['reply_count']) {
            $object->setReplyCount($data['reply_count']);
        } elseif (\array_key_exists('reply_count', $data) && null === $data['reply_count']) {
            $object->setReplyCount(null);
        }
        if (\array_key_exists('reply_users', $data) && null !== $data['reply_users']) {
            $values_5 = [];
            foreach ($data['reply_users'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setReplyUsers($values_5);
        } elseif (\array_key_exists('reply_users', $data) && null === $data['reply_users']) {
            $object->setReplyUsers(null);
        }
        if (\array_key_exists('reply_users_count', $data) && null !== $data['reply_users_count']) {
            $object->setReplyUsersCount($data['reply_users_count']);
        } elseif (\array_key_exists('reply_users_count', $data) && null === $data['reply_users_count']) {
            $object->setReplyUsersCount(null);
        }
        if (\array_key_exists('source_team', $data) && null !== $data['source_team']) {
            $object->setSourceTeam($data['source_team']);
        } elseif (\array_key_exists('source_team', $data) && null === $data['source_team']) {
            $object->setSourceTeam(null);
        }
        if (\array_key_exists('subscribed', $data) && null !== $data['subscribed']) {
            $object->setSubscribed($data['subscribed']);
        } elseif (\array_key_exists('subscribed', $data) && null === $data['subscribed']) {
            $object->setSubscribed(null);
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
        if (\array_key_exists('thread_ts', $data) && null !== $data['thread_ts']) {
            $object->setThreadTs($data['thread_ts']);
        } elseif (\array_key_exists('thread_ts', $data) && null === $data['thread_ts']) {
            $object->setThreadTs(null);
        }
        if (\array_key_exists('topic', $data) && null !== $data['topic']) {
            $object->setTopic($data['topic']);
        } elseif (\array_key_exists('topic', $data) && null === $data['topic']) {
            $object->setTopic(null);
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
        if (\array_key_exists('unread_count', $data) && null !== $data['unread_count']) {
            $object->setUnreadCount($data['unread_count']);
        } elseif (\array_key_exists('unread_count', $data) && null === $data['unread_count']) {
            $object->setUnreadCount(null);
        }
        if (\array_key_exists('upload', $data) && null !== $data['upload']) {
            $object->setUpload($data['upload']);
        } elseif (\array_key_exists('upload', $data) && null === $data['upload']) {
            $object->setUpload(null);
        }
        if (\array_key_exists('user', $data) && null !== $data['user']) {
            $object->setUser($data['user']);
        } elseif (\array_key_exists('user', $data) && null === $data['user']) {
            $object->setUser(null);
        }
        if (\array_key_exists('user_profile', $data) && null !== $data['user_profile']) {
            $object->setUserProfile($this->denormalizer->denormalize($data['user_profile'], \JoliCode\Slack\Api\Model\ObjsUserProfileShort::class, 'json', $context));
        } elseif (\array_key_exists('user_profile', $data) && null === $data['user_profile']) {
            $object->setUserProfile(null);
        }
        if (\array_key_exists('user_team', $data) && null !== $data['user_team']) {
            $object->setUserTeam($data['user_team']);
        } elseif (\array_key_exists('user_team', $data) && null === $data['user_team']) {
            $object->setUserTeam(null);
        }
        if (\array_key_exists('username', $data) && null !== $data['username']) {
            $object->setUsername($data['username']);
        } elseif (\array_key_exists('username', $data) && null === $data['username']) {
            $object->setUsername(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('attachments') && null !== $data->getAttachments()) {
            $values = [];
            foreach ($data->getAttachments() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['attachments'] = $values;
        }
        if ($data->isInitialized('blocks') && null !== $data->getBlocks()) {
            $values_1 = [];
            foreach ($data->getBlocks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['blocks'] = $values_1;
        }
        if ($data->isInitialized('botId') && null !== $data->getBotId()) {
            $dataArray['bot_id'] = $data->getBotId();
        }
        if ($data->isInitialized('botProfile') && null !== $data->getBotProfile()) {
            $dataArray['bot_profile'] = $this->normalizer->normalize($data->getBotProfile(), 'json', $context);
        }
        if ($data->isInitialized('clientMsgId') && null !== $data->getClientMsgId()) {
            $dataArray['client_msg_id'] = $data->getClientMsgId();
        }
        if ($data->isInitialized('comment') && null !== $data->getComment()) {
            $dataArray['comment'] = $this->normalizer->normalize($data->getComment(), 'json', $context);
        }
        if ($data->isInitialized('displayAsBot') && null !== $data->getDisplayAsBot()) {
            $dataArray['display_as_bot'] = $data->getDisplayAsBot();
        }
        if ($data->isInitialized('file') && null !== $data->getFile()) {
            $dataArray['file'] = $this->normalizer->normalize($data->getFile(), 'json', $context);
        }
        if ($data->isInitialized('files') && null !== $data->getFiles()) {
            $values_2 = [];
            foreach ($data->getFiles() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['files'] = $values_2;
        }
        if ($data->isInitialized('icons') && null !== $data->getIcons()) {
            $dataArray['icons'] = $this->normalizer->normalize($data->getIcons(), 'json', $context);
        }
        if ($data->isInitialized('inviter') && null !== $data->getInviter()) {
            $dataArray['inviter'] = $data->getInviter();
        }
        if ($data->isInitialized('isDelayedMessage') && null !== $data->getIsDelayedMessage()) {
            $dataArray['is_delayed_message'] = $data->getIsDelayedMessage();
        }
        if ($data->isInitialized('isIntro') && null !== $data->getIsIntro()) {
            $dataArray['is_intro'] = $data->getIsIntro();
        }
        if ($data->isInitialized('isStarred') && null !== $data->getIsStarred()) {
            $dataArray['is_starred'] = $data->getIsStarred();
        }
        if ($data->isInitialized('lastRead') && null !== $data->getLastRead()) {
            $dataArray['last_read'] = $data->getLastRead();
        }
        if ($data->isInitialized('latestReply') && null !== $data->getLatestReply()) {
            $dataArray['latest_reply'] = $data->getLatestReply();
        }
        if ($data->isInitialized('metadata') && null !== $data->getMetadata()) {
            $dataArray['metadata'] = $this->normalizer->normalize($data->getMetadata(), 'json', $context);
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('oldName') && null !== $data->getOldName()) {
            $dataArray['old_name'] = $data->getOldName();
        }
        if ($data->isInitialized('parentUserId') && null !== $data->getParentUserId()) {
            $dataArray['parent_user_id'] = $data->getParentUserId();
        }
        if ($data->isInitialized('permalink') && null !== $data->getPermalink()) {
            $dataArray['permalink'] = $data->getPermalink();
        }
        if ($data->isInitialized('pinnedTo') && null !== $data->getPinnedTo()) {
            $values_3 = [];
            foreach ($data->getPinnedTo() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['pinned_to'] = $values_3;
        }
        if ($data->isInitialized('purpose') && null !== $data->getPurpose()) {
            $dataArray['purpose'] = $data->getPurpose();
        }
        if ($data->isInitialized('reactions') && null !== $data->getReactions()) {
            $values_4 = [];
            foreach ($data->getReactions() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['reactions'] = $values_4;
        }
        if ($data->isInitialized('replyCount') && null !== $data->getReplyCount()) {
            $dataArray['reply_count'] = $data->getReplyCount();
        }
        if ($data->isInitialized('replyUsers') && null !== $data->getReplyUsers()) {
            $values_5 = [];
            foreach ($data->getReplyUsers() as $value_5) {
                $values_5[] = $value_5;
            }
            $dataArray['reply_users'] = $values_5;
        }
        if ($data->isInitialized('replyUsersCount') && null !== $data->getReplyUsersCount()) {
            $dataArray['reply_users_count'] = $data->getReplyUsersCount();
        }
        if ($data->isInitialized('sourceTeam') && null !== $data->getSourceTeam()) {
            $dataArray['source_team'] = $data->getSourceTeam();
        }
        if ($data->isInitialized('subscribed') && null !== $data->getSubscribed()) {
            $dataArray['subscribed'] = $data->getSubscribed();
        }
        if ($data->isInitialized('subtype') && null !== $data->getSubtype()) {
            $dataArray['subtype'] = $data->getSubtype();
        }
        if ($data->isInitialized('team') && null !== $data->getTeam()) {
            $dataArray['team'] = $data->getTeam();
        }
        $dataArray['text'] = $data->getText();
        if ($data->isInitialized('threadTs') && null !== $data->getThreadTs()) {
            $dataArray['thread_ts'] = $data->getThreadTs();
        }
        if ($data->isInitialized('topic') && null !== $data->getTopic()) {
            $dataArray['topic'] = $data->getTopic();
        }
        $dataArray['ts'] = $data->getTs();
        $dataArray['type'] = $data->getType();
        if ($data->isInitialized('unreadCount') && null !== $data->getUnreadCount()) {
            $dataArray['unread_count'] = $data->getUnreadCount();
        }
        if ($data->isInitialized('upload') && null !== $data->getUpload()) {
            $dataArray['upload'] = $data->getUpload();
        }
        if ($data->isInitialized('user') && null !== $data->getUser()) {
            $dataArray['user'] = $data->getUser();
        }
        if ($data->isInitialized('userProfile') && null !== $data->getUserProfile()) {
            $dataArray['user_profile'] = $this->normalizer->normalize($data->getUserProfile(), 'json', $context);
        }
        if ($data->isInitialized('userTeam') && null !== $data->getUserTeam()) {
            $dataArray['user_team'] = $data->getUserTeam();
        }
        if ($data->isInitialized('username') && null !== $data->getUsername()) {
            $dataArray['username'] = $data->getUsername();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\ObjsMessage::class => false];
    }
}
