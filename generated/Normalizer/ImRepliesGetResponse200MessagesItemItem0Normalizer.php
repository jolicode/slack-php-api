<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ImRepliesGetResponse200MessagesItemItem0Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ImRepliesGetResponse200MessagesItemItem0';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ImRepliesGetResponse200MessagesItemItem0';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ImRepliesGetResponse200MessagesItemItem0();
        if (property_exists($data, 'last_read') && $data->{'last_read'} !== null) {
            $object->setLastRead($data->{'last_read'});
        }
        if (property_exists($data, 'latest_reply') && $data->{'latest_reply'} !== null) {
            $object->setLatestReply($data->{'latest_reply'});
        }
        if (property_exists($data, 'replies') && $data->{'replies'} !== null) {
            $values = [];
            foreach ($data->{'replies'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\ImRepliesGetResponse200MessagesItemItem0RepliesItem', 'json', $context);
            }
            $object->setReplies($values);
        }
        if (property_exists($data, 'reply_count') && $data->{'reply_count'} !== null) {
            $object->setReplyCount($data->{'reply_count'});
        }
        if (property_exists($data, 'reply_users') && $data->{'reply_users'} !== null) {
            $values_1 = [];
            foreach ($data->{'reply_users'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setReplyUsers($values_1);
        }
        if (property_exists($data, 'reply_users_count') && $data->{'reply_users_count'} !== null) {
            $object->setReplyUsersCount($data->{'reply_users_count'});
        }
        if (property_exists($data, 'source_team') && $data->{'source_team'} !== null) {
            $object->setSourceTeam($data->{'source_team'});
        }
        if (property_exists($data, 'subscribed') && $data->{'subscribed'} !== null) {
            $object->setSubscribed($data->{'subscribed'});
        }
        if (property_exists($data, 'team') && $data->{'team'} !== null) {
            $object->setTeam($data->{'team'});
        }
        if (property_exists($data, 'text') && $data->{'text'} !== null) {
            $object->setText($data->{'text'});
        }
        if (property_exists($data, 'thread_ts') && $data->{'thread_ts'} !== null) {
            $object->setThreadTs($data->{'thread_ts'});
        }
        if (property_exists($data, 'ts') && $data->{'ts'} !== null) {
            $object->setTs($data->{'ts'});
        }
        if (property_exists($data, 'type') && $data->{'type'} !== null) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'unread_count') && $data->{'unread_count'} !== null) {
            $object->setUnreadCount($data->{'unread_count'});
        }
        if (property_exists($data, 'user') && $data->{'user'} !== null) {
            $object->setUser($data->{'user'});
        }
        if (property_exists($data, 'user_profile') && $data->{'user_profile'} !== null) {
            $object->setUserProfile($this->denormalizer->denormalize($data->{'user_profile'}, 'JoliCode\\Slack\\Api\\Model\\ObjsUserProfileShort', 'json', $context));
        }
        if (property_exists($data, 'user_team') && $data->{'user_team'} !== null) {
            $object->setUserTeam($data->{'user_team'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getLastRead()) {
            $data->{'last_read'} = $object->getLastRead();
        }
        if (null !== $object->getLatestReply()) {
            $data->{'latest_reply'} = $object->getLatestReply();
        }
        if (null !== $object->getReplies()) {
            $values = [];
            foreach ($object->getReplies() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'replies'} = $values;
        }
        if (null !== $object->getReplyCount()) {
            $data->{'reply_count'} = $object->getReplyCount();
        }
        if (null !== $object->getReplyUsers()) {
            $values_1 = [];
            foreach ($object->getReplyUsers() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'reply_users'} = $values_1;
        }
        if (null !== $object->getReplyUsersCount()) {
            $data->{'reply_users_count'} = $object->getReplyUsersCount();
        }
        if (null !== $object->getSourceTeam()) {
            $data->{'source_team'} = $object->getSourceTeam();
        }
        if (null !== $object->getSubscribed()) {
            $data->{'subscribed'} = $object->getSubscribed();
        }
        if (null !== $object->getTeam()) {
            $data->{'team'} = $object->getTeam();
        }
        if (null !== $object->getText()) {
            $data->{'text'} = $object->getText();
        }
        if (null !== $object->getThreadTs()) {
            $data->{'thread_ts'} = $object->getThreadTs();
        }
        if (null !== $object->getTs()) {
            $data->{'ts'} = $object->getTs();
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getUnreadCount()) {
            $data->{'unread_count'} = $object->getUnreadCount();
        }
        if (null !== $object->getUser()) {
            $data->{'user'} = $object->getUser();
        }
        if (null !== $object->getUserProfile()) {
            $data->{'user_profile'} = $this->normalizer->normalize($object->getUserProfile(), 'json', $context);
        }
        if (null !== $object->getUserTeam()) {
            $data->{'user_team'} = $object->getUserTeam();
        }

        return $data;
    }
}
