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

use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ChannelsRepliesGetResponse200MessagesItemItem0Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ChannelsRepliesGetResponse200MessagesItemItem0' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ChannelsRepliesGetResponse200MessagesItemItem0' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ChannelsRepliesGetResponse200MessagesItemItem0();
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
        if (\array_key_exists('replies', $data) && null !== $data['replies']) {
            $values = [];
            foreach ($data['replies'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\ChannelsRepliesGetResponse200MessagesItemItem0RepliesItem', 'json', $context);
            }
            $object->setReplies($values);
        } elseif (\array_key_exists('replies', $data) && null === $data['replies']) {
            $object->setReplies(null);
        }
        if (\array_key_exists('reply_count', $data) && null !== $data['reply_count']) {
            $object->setReplyCount($data['reply_count']);
        } elseif (\array_key_exists('reply_count', $data) && null === $data['reply_count']) {
            $object->setReplyCount(null);
        }
        if (\array_key_exists('reply_users', $data) && null !== $data['reply_users']) {
            $values_1 = [];
            foreach ($data['reply_users'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setReplyUsers($values_1);
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
        if (\array_key_exists('unread_count', $data) && null !== $data['unread_count']) {
            $object->setUnreadCount($data['unread_count']);
        } elseif (\array_key_exists('unread_count', $data) && null === $data['unread_count']) {
            $object->setUnreadCount(null);
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

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getLastRead()) {
            $data['last_read'] = $object->getLastRead();
        } else {
            $data['last_read'] = null;
        }
        if (null !== $object->getLatestReply()) {
            $data['latest_reply'] = $object->getLatestReply();
        } else {
            $data['latest_reply'] = null;
        }
        if (null !== $object->getReplies()) {
            $values = [];
            foreach ($object->getReplies() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['replies'] = $values;
        } else {
            $data['replies'] = null;
        }
        if (null !== $object->getReplyCount()) {
            $data['reply_count'] = $object->getReplyCount();
        } else {
            $data['reply_count'] = null;
        }
        if (null !== $object->getReplyUsers()) {
            $values_1 = [];
            foreach ($object->getReplyUsers() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['reply_users'] = $values_1;
        } else {
            $data['reply_users'] = null;
        }
        if (null !== $object->getReplyUsersCount()) {
            $data['reply_users_count'] = $object->getReplyUsersCount();
        } else {
            $data['reply_users_count'] = null;
        }
        if (null !== $object->getSourceTeam()) {
            $data['source_team'] = $object->getSourceTeam();
        } else {
            $data['source_team'] = null;
        }
        if (null !== $object->getSubscribed()) {
            $data['subscribed'] = $object->getSubscribed();
        } else {
            $data['subscribed'] = null;
        }
        if (null !== $object->getTeam()) {
            $data['team'] = $object->getTeam();
        } else {
            $data['team'] = null;
        }
        if (null !== $object->getText()) {
            $data['text'] = $object->getText();
        } else {
            $data['text'] = null;
        }
        if (null !== $object->getThreadTs()) {
            $data['thread_ts'] = $object->getThreadTs();
        } else {
            $data['thread_ts'] = null;
        }
        if (null !== $object->getTs()) {
            $data['ts'] = $object->getTs();
        } else {
            $data['ts'] = null;
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        } else {
            $data['type'] = null;
        }
        if (null !== $object->getUnreadCount()) {
            $data['unread_count'] = $object->getUnreadCount();
        } else {
            $data['unread_count'] = null;
        }
        if (null !== $object->getUser()) {
            $data['user'] = $object->getUser();
        } else {
            $data['user'] = null;
        }
        if (null !== $object->getUserProfile()) {
            $data['user_profile'] = $this->normalizer->normalize($object->getUserProfile(), 'json', $context);
        } else {
            $data['user_profile'] = null;
        }
        if (null !== $object->getUserTeam()) {
            $data['user_team'] = $object->getUserTeam();
        } else {
            $data['user_team'] = null;
        }

        return $data;
    }
}
