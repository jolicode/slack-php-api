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

class ObjsGroupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ObjsGroup' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsGroup' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsGroup();
        if (\array_key_exists('created', $data) && null !== $data['created']) {
            $object->setCreated($data['created']);
        } elseif (\array_key_exists('created', $data) && null === $data['created']) {
            $object->setCreated(null);
        }
        if (\array_key_exists('creator', $data) && null !== $data['creator']) {
            $object->setCreator($data['creator']);
        } elseif (\array_key_exists('creator', $data) && null === $data['creator']) {
            $object->setCreator(null);
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('is_archived', $data) && null !== $data['is_archived']) {
            $object->setIsArchived($data['is_archived']);
        } elseif (\array_key_exists('is_archived', $data) && null === $data['is_archived']) {
            $object->setIsArchived(null);
        }
        if (\array_key_exists('is_deleted', $data) && null !== $data['is_deleted']) {
            $object->setIsDeleted($data['is_deleted']);
        } elseif (\array_key_exists('is_deleted', $data) && null === $data['is_deleted']) {
            $object->setIsDeleted(null);
        }
        if (\array_key_exists('is_group', $data) && null !== $data['is_group']) {
            $object->setIsGroup($data['is_group']);
        } elseif (\array_key_exists('is_group', $data) && null === $data['is_group']) {
            $object->setIsGroup(null);
        }
        if (\array_key_exists('is_moved', $data) && null !== $data['is_moved']) {
            $object->setIsMoved($data['is_moved']);
        } elseif (\array_key_exists('is_moved', $data) && null === $data['is_moved']) {
            $object->setIsMoved(null);
        }
        if (\array_key_exists('is_mpim', $data) && null !== $data['is_mpim']) {
            $object->setIsMpim($data['is_mpim']);
        } elseif (\array_key_exists('is_mpim', $data) && null === $data['is_mpim']) {
            $object->setIsMpim(null);
        }
        if (\array_key_exists('is_open', $data) && null !== $data['is_open']) {
            $object->setIsOpen($data['is_open']);
        } elseif (\array_key_exists('is_open', $data) && null === $data['is_open']) {
            $object->setIsOpen(null);
        }
        if (\array_key_exists('is_pending_ext_shared', $data) && null !== $data['is_pending_ext_shared']) {
            $object->setIsPendingExtShared($data['is_pending_ext_shared']);
        } elseif (\array_key_exists('is_pending_ext_shared', $data) && null === $data['is_pending_ext_shared']) {
            $object->setIsPendingExtShared(null);
        }
        if (\array_key_exists('last_read', $data) && null !== $data['last_read']) {
            $object->setLastRead($data['last_read']);
        } elseif (\array_key_exists('last_read', $data) && null === $data['last_read']) {
            $object->setLastRead(null);
        }
        if (\array_key_exists('latest', $data) && null !== $data['latest']) {
            $object->setLatest($data['latest']);
        } elseif (\array_key_exists('latest', $data) && null === $data['latest']) {
            $object->setLatest(null);
        }
        if (\array_key_exists('members', $data) && null !== $data['members']) {
            $values = [];
            foreach ($data['members'] as $value) {
                $values[] = $value;
            }
            $object->setMembers($values);
        } elseif (\array_key_exists('members', $data) && null === $data['members']) {
            $object->setMembers(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('name_normalized', $data) && null !== $data['name_normalized']) {
            $object->setNameNormalized($data['name_normalized']);
        } elseif (\array_key_exists('name_normalized', $data) && null === $data['name_normalized']) {
            $object->setNameNormalized(null);
        }
        if (\array_key_exists('num_members', $data) && null !== $data['num_members']) {
            $object->setNumMembers($data['num_members']);
        } elseif (\array_key_exists('num_members', $data) && null === $data['num_members']) {
            $object->setNumMembers(null);
        }
        if (\array_key_exists('priority', $data) && null !== $data['priority']) {
            $object->setPriority($data['priority']);
        } elseif (\array_key_exists('priority', $data) && null === $data['priority']) {
            $object->setPriority(null);
        }
        if (\array_key_exists('purpose', $data) && null !== $data['purpose']) {
            $object->setPurpose($this->denormalizer->denormalize($data['purpose'], 'JoliCode\\Slack\\Api\\Model\\ObjsGroupPurpose', 'json', $context));
        } elseif (\array_key_exists('purpose', $data) && null === $data['purpose']) {
            $object->setPurpose(null);
        }
        if (\array_key_exists('topic', $data) && null !== $data['topic']) {
            $object->setTopic($this->denormalizer->denormalize($data['topic'], 'JoliCode\\Slack\\Api\\Model\\ObjsGroupTopic', 'json', $context));
        } elseif (\array_key_exists('topic', $data) && null === $data['topic']) {
            $object->setTopic(null);
        }
        if (\array_key_exists('unread_count', $data) && null !== $data['unread_count']) {
            $object->setUnreadCount($data['unread_count']);
        } elseif (\array_key_exists('unread_count', $data) && null === $data['unread_count']) {
            $object->setUnreadCount(null);
        }
        if (\array_key_exists('unread_count_display', $data) && null !== $data['unread_count_display']) {
            $object->setUnreadCountDisplay($data['unread_count_display']);
        } elseif (\array_key_exists('unread_count_display', $data) && null === $data['unread_count_display']) {
            $object->setUnreadCountDisplay(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getCreated()) {
            $data['created'] = $object->getCreated();
        } else {
            $data['created'] = null;
        }
        if (null !== $object->getCreator()) {
            $data['creator'] = $object->getCreator();
        } else {
            $data['creator'] = null;
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        } else {
            $data['id'] = null;
        }
        if (null !== $object->getIsArchived()) {
            $data['is_archived'] = $object->getIsArchived();
        } else {
            $data['is_archived'] = null;
        }
        if (null !== $object->getIsDeleted()) {
            $data['is_deleted'] = $object->getIsDeleted();
        } else {
            $data['is_deleted'] = null;
        }
        if (null !== $object->getIsGroup()) {
            $data['is_group'] = $object->getIsGroup();
        } else {
            $data['is_group'] = null;
        }
        if (null !== $object->getIsMoved()) {
            $data['is_moved'] = $object->getIsMoved();
        } else {
            $data['is_moved'] = null;
        }
        if (null !== $object->getIsMpim()) {
            $data['is_mpim'] = $object->getIsMpim();
        } else {
            $data['is_mpim'] = null;
        }
        if (null !== $object->getIsOpen()) {
            $data['is_open'] = $object->getIsOpen();
        } else {
            $data['is_open'] = null;
        }
        if (null !== $object->getIsPendingExtShared()) {
            $data['is_pending_ext_shared'] = $object->getIsPendingExtShared();
        } else {
            $data['is_pending_ext_shared'] = null;
        }
        if (null !== $object->getLastRead()) {
            $data['last_read'] = $object->getLastRead();
        } else {
            $data['last_read'] = null;
        }
        if (null !== $object->getLatest()) {
            $data['latest'] = $object->getLatest();
        } else {
            $data['latest'] = null;
        }
        if (null !== $object->getMembers()) {
            $values = [];
            foreach ($object->getMembers() as $value) {
                $values[] = $value;
            }
            $data['members'] = $values;
        } else {
            $data['members'] = null;
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        } else {
            $data['name'] = null;
        }
        if (null !== $object->getNameNormalized()) {
            $data['name_normalized'] = $object->getNameNormalized();
        } else {
            $data['name_normalized'] = null;
        }
        if (null !== $object->getNumMembers()) {
            $data['num_members'] = $object->getNumMembers();
        } else {
            $data['num_members'] = null;
        }
        if (null !== $object->getPriority()) {
            $data['priority'] = $object->getPriority();
        } else {
            $data['priority'] = null;
        }
        if (null !== $object->getPurpose()) {
            $data['purpose'] = $this->normalizer->normalize($object->getPurpose(), 'json', $context);
        } else {
            $data['purpose'] = null;
        }
        if (null !== $object->getTopic()) {
            $data['topic'] = $this->normalizer->normalize($object->getTopic(), 'json', $context);
        } else {
            $data['topic'] = null;
        }
        if (null !== $object->getUnreadCount()) {
            $data['unread_count'] = $object->getUnreadCount();
        } else {
            $data['unread_count'] = null;
        }
        if (null !== $object->getUnreadCountDisplay()) {
            $data['unread_count_display'] = $object->getUnreadCountDisplay();
        } else {
            $data['unread_count_display'] = null;
        }

        return $data;
    }
}
