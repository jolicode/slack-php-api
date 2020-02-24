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
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class MpimRepliesGetResponse200MessagesItemItem0Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\MpimRepliesGetResponse200MessagesItemItem0' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\MpimRepliesGetResponse200MessagesItemItem0' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!\is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\MpimRepliesGetResponse200MessagesItemItem0();
        if (property_exists($data, 'last_read') && null !== $data->{'last_read'}) {
            $object->setLastRead($data->{'last_read'});
        } elseif (property_exists($data, 'last_read') && null === $data->{'last_read'}) {
            $object->setLastRead(null);
        }
        if (property_exists($data, 'latest_reply') && null !== $data->{'latest_reply'}) {
            $object->setLatestReply($data->{'latest_reply'});
        } elseif (property_exists($data, 'latest_reply') && null === $data->{'latest_reply'}) {
            $object->setLatestReply(null);
        }
        if (property_exists($data, 'replies') && null !== $data->{'replies'}) {
            $values = [];
            foreach ($data->{'replies'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\MpimRepliesGetResponse200MessagesItemItem0RepliesItem', 'json', $context);
            }
            $object->setReplies($values);
        } elseif (property_exists($data, 'replies') && null === $data->{'replies'}) {
            $object->setReplies(null);
        }
        if (property_exists($data, 'reply_count') && null !== $data->{'reply_count'}) {
            $object->setReplyCount($data->{'reply_count'});
        } elseif (property_exists($data, 'reply_count') && null === $data->{'reply_count'}) {
            $object->setReplyCount(null);
        }
        if (property_exists($data, 'reply_users') && null !== $data->{'reply_users'}) {
            $values_1 = [];
            foreach ($data->{'reply_users'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setReplyUsers($values_1);
        } elseif (property_exists($data, 'reply_users') && null === $data->{'reply_users'}) {
            $object->setReplyUsers(null);
        }
        if (property_exists($data, 'reply_users_count') && null !== $data->{'reply_users_count'}) {
            $object->setReplyUsersCount($data->{'reply_users_count'});
        } elseif (property_exists($data, 'reply_users_count') && null === $data->{'reply_users_count'}) {
            $object->setReplyUsersCount(null);
        }
        if (property_exists($data, 'source_team') && null !== $data->{'source_team'}) {
            $object->setSourceTeam($data->{'source_team'});
        } elseif (property_exists($data, 'source_team') && null === $data->{'source_team'}) {
            $object->setSourceTeam(null);
        }
        if (property_exists($data, 'subscribed') && null !== $data->{'subscribed'}) {
            $object->setSubscribed($data->{'subscribed'});
        } elseif (property_exists($data, 'subscribed') && null === $data->{'subscribed'}) {
            $object->setSubscribed(null);
        }
        if (property_exists($data, 'team') && null !== $data->{'team'}) {
            $object->setTeam($data->{'team'});
        } elseif (property_exists($data, 'team') && null === $data->{'team'}) {
            $object->setTeam(null);
        }
        if (property_exists($data, 'text') && null !== $data->{'text'}) {
            $object->setText($data->{'text'});
        } elseif (property_exists($data, 'text') && null === $data->{'text'}) {
            $object->setText(null);
        }
        if (property_exists($data, 'thread_ts') && null !== $data->{'thread_ts'}) {
            $object->setThreadTs($data->{'thread_ts'});
        } elseif (property_exists($data, 'thread_ts') && null === $data->{'thread_ts'}) {
            $object->setThreadTs(null);
        }
        if (property_exists($data, 'ts') && null !== $data->{'ts'}) {
            $object->setTs($data->{'ts'});
        } elseif (property_exists($data, 'ts') && null === $data->{'ts'}) {
            $object->setTs(null);
        }
        if (property_exists($data, 'type') && null !== $data->{'type'}) {
            $object->setType($data->{'type'});
        } elseif (property_exists($data, 'type') && null === $data->{'type'}) {
            $object->setType(null);
        }
        if (property_exists($data, 'unread_count') && null !== $data->{'unread_count'}) {
            $object->setUnreadCount($data->{'unread_count'});
        } elseif (property_exists($data, 'unread_count') && null === $data->{'unread_count'}) {
            $object->setUnreadCount(null);
        }
        if (property_exists($data, 'user') && null !== $data->{'user'}) {
            $object->setUser($data->{'user'});
        } elseif (property_exists($data, 'user') && null === $data->{'user'}) {
            $object->setUser(null);
        }
        if (property_exists($data, 'user_profile') && null !== $data->{'user_profile'}) {
            $object->setUserProfile($this->denormalizer->denormalize($data->{'user_profile'}, 'JoliCode\\Slack\\Api\\Model\\ObjsUserProfileShort', 'json', $context));
        } elseif (property_exists($data, 'user_profile') && null === $data->{'user_profile'}) {
            $object->setUserProfile(null);
        }
        if (property_exists($data, 'user_team') && null !== $data->{'user_team'}) {
            $object->setUserTeam($data->{'user_team'});
        } elseif (property_exists($data, 'user_team') && null === $data->{'user_team'}) {
            $object->setUserTeam(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getLastRead()) {
            $data->{'last_read'} = $object->getLastRead();
        } else {
            $data->{'last_read'} = null;
        }
        if (null !== $object->getLatestReply()) {
            $data->{'latest_reply'} = $object->getLatestReply();
        } else {
            $data->{'latest_reply'} = null;
        }
        if (null !== $object->getReplies()) {
            $values = [];
            foreach ($object->getReplies() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'replies'} = $values;
        } else {
            $data->{'replies'} = null;
        }
        if (null !== $object->getReplyCount()) {
            $data->{'reply_count'} = $object->getReplyCount();
        } else {
            $data->{'reply_count'} = null;
        }
        if (null !== $object->getReplyUsers()) {
            $values_1 = [];
            foreach ($object->getReplyUsers() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'reply_users'} = $values_1;
        } else {
            $data->{'reply_users'} = null;
        }
        if (null !== $object->getReplyUsersCount()) {
            $data->{'reply_users_count'} = $object->getReplyUsersCount();
        } else {
            $data->{'reply_users_count'} = null;
        }
        if (null !== $object->getSourceTeam()) {
            $data->{'source_team'} = $object->getSourceTeam();
        } else {
            $data->{'source_team'} = null;
        }
        if (null !== $object->getSubscribed()) {
            $data->{'subscribed'} = $object->getSubscribed();
        } else {
            $data->{'subscribed'} = null;
        }
        if (null !== $object->getTeam()) {
            $data->{'team'} = $object->getTeam();
        } else {
            $data->{'team'} = null;
        }
        if (null !== $object->getText()) {
            $data->{'text'} = $object->getText();
        } else {
            $data->{'text'} = null;
        }
        if (null !== $object->getThreadTs()) {
            $data->{'thread_ts'} = $object->getThreadTs();
        } else {
            $data->{'thread_ts'} = null;
        }
        if (null !== $object->getTs()) {
            $data->{'ts'} = $object->getTs();
        } else {
            $data->{'ts'} = null;
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        } else {
            $data->{'type'} = null;
        }
        if (null !== $object->getUnreadCount()) {
            $data->{'unread_count'} = $object->getUnreadCount();
        } else {
            $data->{'unread_count'} = null;
        }
        if (null !== $object->getUser()) {
            $data->{'user'} = $object->getUser();
        } else {
            $data->{'user'} = null;
        }
        if (null !== $object->getUserProfile()) {
            $data->{'user_profile'} = $this->normalizer->normalize($object->getUserProfile(), 'json', $context);
        } else {
            $data->{'user_profile'} = null;
        }
        if (null !== $object->getUserTeam()) {
            $data->{'user_team'} = $object->getUserTeam();
        } else {
            $data->{'user_team'} = null;
        }

        return $data;
    }
}
