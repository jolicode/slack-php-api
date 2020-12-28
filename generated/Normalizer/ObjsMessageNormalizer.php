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

use Jane\JsonSchemaRuntime\Reference;
use JoliCode\Slack\Api\Runtime\Normalizer\CheckArray;
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

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ObjsMessage' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsMessage' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsMessage();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('attachments', $data) && null !== $data['attachments']) {
            $values = [];
            foreach ($data['attachments'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\ObjsMessageAttachmentsItem', 'json', $context);
            }
            $object->setAttachments($values);
        } elseif (\array_key_exists('attachments', $data) && null === $data['attachments']) {
            $object->setAttachments(null);
        }
        if (\array_key_exists('blocks', $data) && null !== $data['blocks']) {
            $values_1 = [];
            foreach ($data['blocks'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'JoliCode\\Slack\\Api\\Model\\BlocksItem', 'json', $context);
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
            $object->setBotProfile($this->denormalizer->denormalize($data['bot_profile'], 'JoliCode\\Slack\\Api\\Model\\ObjsBotProfile', 'json', $context));
        } elseif (\array_key_exists('bot_profile', $data) && null === $data['bot_profile']) {
            $object->setBotProfile(null);
        }
        if (\array_key_exists('client_msg_id', $data) && null !== $data['client_msg_id']) {
            $object->setClientMsgId($data['client_msg_id']);
        } elseif (\array_key_exists('client_msg_id', $data) && null === $data['client_msg_id']) {
            $object->setClientMsgId(null);
        }
        if (\array_key_exists('comment', $data) && null !== $data['comment']) {
            $object->setComment($this->denormalizer->denormalize($data['comment'], 'JoliCode\\Slack\\Api\\Model\\ObjsComment', 'json', $context));
        } elseif (\array_key_exists('comment', $data) && null === $data['comment']) {
            $object->setComment(null);
        }
        if (\array_key_exists('display_as_bot', $data) && null !== $data['display_as_bot']) {
            $object->setDisplayAsBot($data['display_as_bot']);
        } elseif (\array_key_exists('display_as_bot', $data) && null === $data['display_as_bot']) {
            $object->setDisplayAsBot(null);
        }
        if (\array_key_exists('file', $data) && null !== $data['file']) {
            $object->setFile($this->denormalizer->denormalize($data['file'], 'JoliCode\\Slack\\Api\\Model\\ObjsFile', 'json', $context));
        } elseif (\array_key_exists('file', $data) && null === $data['file']) {
            $object->setFile(null);
        }
        if (\array_key_exists('files', $data) && null !== $data['files']) {
            $values_2 = [];
            foreach ($data['files'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'JoliCode\\Slack\\Api\\Model\\ObjsFile', 'json', $context);
            }
            $object->setFiles($values_2);
        } elseif (\array_key_exists('files', $data) && null === $data['files']) {
            $object->setFiles(null);
        }
        if (\array_key_exists('icons', $data) && null !== $data['icons']) {
            $object->setIcons($this->denormalizer->denormalize($data['icons'], 'JoliCode\\Slack\\Api\\Model\\ObjsMessageIcons', 'json', $context));
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
                $values_4[] = $this->denormalizer->denormalize($value_4, 'JoliCode\\Slack\\Api\\Model\\ObjsReaction', 'json', $context);
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
            $object->setUserProfile($this->denormalizer->denormalize($data['user_profile'], 'JoliCode\\Slack\\Api\\Model\\ObjsUserProfileShort', 'json', $context));
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

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getAttachments()) {
            $values = [];
            foreach ($object->getAttachments() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['attachments'] = $values;
        }
        if (null !== $object->getBlocks()) {
            $values_1 = [];
            foreach ($object->getBlocks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['blocks'] = $values_1;
        }
        if (null !== $object->getBotId()) {
            $data['bot_id'] = $object->getBotId();
        }
        if (null !== $object->getBotProfile()) {
            $data['bot_profile'] = $this->normalizer->normalize($object->getBotProfile(), 'json', $context);
        }
        if (null !== $object->getClientMsgId()) {
            $data['client_msg_id'] = $object->getClientMsgId();
        }
        if (null !== $object->getComment()) {
            $data['comment'] = $this->normalizer->normalize($object->getComment(), 'json', $context);
        }
        if (null !== $object->getDisplayAsBot()) {
            $data['display_as_bot'] = $object->getDisplayAsBot();
        }
        if (null !== $object->getFile()) {
            $data['file'] = $this->normalizer->normalize($object->getFile(), 'json', $context);
        }
        if (null !== $object->getFiles()) {
            $values_2 = [];
            foreach ($object->getFiles() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['files'] = $values_2;
        }
        if (null !== $object->getIcons()) {
            $data['icons'] = $this->normalizer->normalize($object->getIcons(), 'json', $context);
        }
        if (null !== $object->getInviter()) {
            $data['inviter'] = $object->getInviter();
        }
        if (null !== $object->getIsDelayedMessage()) {
            $data['is_delayed_message'] = $object->getIsDelayedMessage();
        }
        if (null !== $object->getIsIntro()) {
            $data['is_intro'] = $object->getIsIntro();
        }
        if (null !== $object->getIsStarred()) {
            $data['is_starred'] = $object->getIsStarred();
        }
        if (null !== $object->getLastRead()) {
            $data['last_read'] = $object->getLastRead();
        }
        if (null !== $object->getLatestReply()) {
            $data['latest_reply'] = $object->getLatestReply();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getOldName()) {
            $data['old_name'] = $object->getOldName();
        }
        if (null !== $object->getParentUserId()) {
            $data['parent_user_id'] = $object->getParentUserId();
        }
        if (null !== $object->getPermalink()) {
            $data['permalink'] = $object->getPermalink();
        }
        if (null !== $object->getPinnedTo()) {
            $values_3 = [];
            foreach ($object->getPinnedTo() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['pinned_to'] = $values_3;
        }
        if (null !== $object->getPurpose()) {
            $data['purpose'] = $object->getPurpose();
        }
        if (null !== $object->getReactions()) {
            $values_4 = [];
            foreach ($object->getReactions() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['reactions'] = $values_4;
        }
        if (null !== $object->getReplyCount()) {
            $data['reply_count'] = $object->getReplyCount();
        }
        if (null !== $object->getReplyUsers()) {
            $values_5 = [];
            foreach ($object->getReplyUsers() as $value_5) {
                $values_5[] = $value_5;
            }
            $data['reply_users'] = $values_5;
        }
        if (null !== $object->getReplyUsersCount()) {
            $data['reply_users_count'] = $object->getReplyUsersCount();
        }
        if (null !== $object->getSourceTeam()) {
            $data['source_team'] = $object->getSourceTeam();
        }
        if (null !== $object->getSubscribed()) {
            $data['subscribed'] = $object->getSubscribed();
        }
        if (null !== $object->getSubtype()) {
            $data['subtype'] = $object->getSubtype();
        }
        if (null !== $object->getTeam()) {
            $data['team'] = $object->getTeam();
        }
        $data['text'] = $object->getText();
        if (null !== $object->getThreadTs()) {
            $data['thread_ts'] = $object->getThreadTs();
        }
        if (null !== $object->getTopic()) {
            $data['topic'] = $object->getTopic();
        }
        $data['ts'] = $object->getTs();
        $data['type'] = $object->getType();
        if (null !== $object->getUnreadCount()) {
            $data['unread_count'] = $object->getUnreadCount();
        }
        if (null !== $object->getUpload()) {
            $data['upload'] = $object->getUpload();
        }
        if (null !== $object->getUser()) {
            $data['user'] = $object->getUser();
        }
        if (null !== $object->getUserProfile()) {
            $data['user_profile'] = $this->normalizer->normalize($object->getUserProfile(), 'json', $context);
        }
        if (null !== $object->getUserTeam()) {
            $data['user_team'] = $object->getUserTeam();
        }
        if (null !== $object->getUsername()) {
            $data['username'] = $object->getUsername();
        }

        return $data;
    }
}
