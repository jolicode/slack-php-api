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
        if (!\is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsGroup();
        if (property_exists($data, 'created') && null !== $data->{'created'}) {
            $object->setCreated($data->{'created'});
        } elseif (property_exists($data, 'created') && null === $data->{'created'}) {
            $object->setCreated(null);
        }
        if (property_exists($data, 'creator') && null !== $data->{'creator'}) {
            $object->setCreator($data->{'creator'});
        } elseif (property_exists($data, 'creator') && null === $data->{'creator'}) {
            $object->setCreator(null);
        }
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        } elseif (property_exists($data, 'id') && null === $data->{'id'}) {
            $object->setId(null);
        }
        if (property_exists($data, 'is_archived') && null !== $data->{'is_archived'}) {
            $object->setIsArchived($data->{'is_archived'});
        } elseif (property_exists($data, 'is_archived') && null === $data->{'is_archived'}) {
            $object->setIsArchived(null);
        }
        if (property_exists($data, 'is_deleted') && null !== $data->{'is_deleted'}) {
            $object->setIsDeleted($data->{'is_deleted'});
        } elseif (property_exists($data, 'is_deleted') && null === $data->{'is_deleted'}) {
            $object->setIsDeleted(null);
        }
        if (property_exists($data, 'is_group') && null !== $data->{'is_group'}) {
            $object->setIsGroup($data->{'is_group'});
        } elseif (property_exists($data, 'is_group') && null === $data->{'is_group'}) {
            $object->setIsGroup(null);
        }
        if (property_exists($data, 'is_moved') && null !== $data->{'is_moved'}) {
            $object->setIsMoved($data->{'is_moved'});
        } elseif (property_exists($data, 'is_moved') && null === $data->{'is_moved'}) {
            $object->setIsMoved(null);
        }
        if (property_exists($data, 'is_mpim') && null !== $data->{'is_mpim'}) {
            $object->setIsMpim($data->{'is_mpim'});
        } elseif (property_exists($data, 'is_mpim') && null === $data->{'is_mpim'}) {
            $object->setIsMpim(null);
        }
        if (property_exists($data, 'is_open') && null !== $data->{'is_open'}) {
            $object->setIsOpen($data->{'is_open'});
        } elseif (property_exists($data, 'is_open') && null === $data->{'is_open'}) {
            $object->setIsOpen(null);
        }
        if (property_exists($data, 'is_pending_ext_shared') && null !== $data->{'is_pending_ext_shared'}) {
            $object->setIsPendingExtShared($data->{'is_pending_ext_shared'});
        } elseif (property_exists($data, 'is_pending_ext_shared') && null === $data->{'is_pending_ext_shared'}) {
            $object->setIsPendingExtShared(null);
        }
        if (property_exists($data, 'last_read') && null !== $data->{'last_read'}) {
            $object->setLastRead($data->{'last_read'});
        } elseif (property_exists($data, 'last_read') && null === $data->{'last_read'}) {
            $object->setLastRead(null);
        }
        if (property_exists($data, 'latest') && null !== $data->{'latest'}) {
            $object->setLatest($data->{'latest'});
        } elseif (property_exists($data, 'latest') && null === $data->{'latest'}) {
            $object->setLatest(null);
        }
        if (property_exists($data, 'members') && null !== $data->{'members'}) {
            $values = [];
            foreach ($data->{'members'} as $value) {
                $values[] = $value;
            }
            $object->setMembers($values);
        } elseif (property_exists($data, 'members') && null === $data->{'members'}) {
            $object->setMembers(null);
        }
        if (property_exists($data, 'name') && null !== $data->{'name'}) {
            $object->setName($data->{'name'});
        } elseif (property_exists($data, 'name') && null === $data->{'name'}) {
            $object->setName(null);
        }
        if (property_exists($data, 'name_normalized') && null !== $data->{'name_normalized'}) {
            $object->setNameNormalized($data->{'name_normalized'});
        } elseif (property_exists($data, 'name_normalized') && null === $data->{'name_normalized'}) {
            $object->setNameNormalized(null);
        }
        if (property_exists($data, 'num_members') && null !== $data->{'num_members'}) {
            $object->setNumMembers($data->{'num_members'});
        } elseif (property_exists($data, 'num_members') && null === $data->{'num_members'}) {
            $object->setNumMembers(null);
        }
        if (property_exists($data, 'priority') && null !== $data->{'priority'}) {
            $object->setPriority($data->{'priority'});
        } elseif (property_exists($data, 'priority') && null === $data->{'priority'}) {
            $object->setPriority(null);
        }
        if (property_exists($data, 'purpose') && null !== $data->{'purpose'}) {
            $object->setPurpose($this->denormalizer->denormalize($data->{'purpose'}, 'JoliCode\\Slack\\Api\\Model\\ObjsGroupPurpose', 'json', $context));
        } elseif (property_exists($data, 'purpose') && null === $data->{'purpose'}) {
            $object->setPurpose(null);
        }
        if (property_exists($data, 'topic') && null !== $data->{'topic'}) {
            $object->setTopic($this->denormalizer->denormalize($data->{'topic'}, 'JoliCode\\Slack\\Api\\Model\\ObjsGroupTopic', 'json', $context));
        } elseif (property_exists($data, 'topic') && null === $data->{'topic'}) {
            $object->setTopic(null);
        }
        if (property_exists($data, 'unread_count') && null !== $data->{'unread_count'}) {
            $object->setUnreadCount($data->{'unread_count'});
        } elseif (property_exists($data, 'unread_count') && null === $data->{'unread_count'}) {
            $object->setUnreadCount(null);
        }
        if (property_exists($data, 'unread_count_display') && null !== $data->{'unread_count_display'}) {
            $object->setUnreadCountDisplay($data->{'unread_count_display'});
        } elseif (property_exists($data, 'unread_count_display') && null === $data->{'unread_count_display'}) {
            $object->setUnreadCountDisplay(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCreated()) {
            $data->{'created'} = $object->getCreated();
        } else {
            $data->{'created'} = null;
        }
        if (null !== $object->getCreator()) {
            $data->{'creator'} = $object->getCreator();
        } else {
            $data->{'creator'} = null;
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        } else {
            $data->{'id'} = null;
        }
        if (null !== $object->getIsArchived()) {
            $data->{'is_archived'} = $object->getIsArchived();
        } else {
            $data->{'is_archived'} = null;
        }
        if (null !== $object->getIsDeleted()) {
            $data->{'is_deleted'} = $object->getIsDeleted();
        } else {
            $data->{'is_deleted'} = null;
        }
        if (null !== $object->getIsGroup()) {
            $data->{'is_group'} = $object->getIsGroup();
        } else {
            $data->{'is_group'} = null;
        }
        if (null !== $object->getIsMoved()) {
            $data->{'is_moved'} = $object->getIsMoved();
        } else {
            $data->{'is_moved'} = null;
        }
        if (null !== $object->getIsMpim()) {
            $data->{'is_mpim'} = $object->getIsMpim();
        } else {
            $data->{'is_mpim'} = null;
        }
        if (null !== $object->getIsOpen()) {
            $data->{'is_open'} = $object->getIsOpen();
        } else {
            $data->{'is_open'} = null;
        }
        if (null !== $object->getIsPendingExtShared()) {
            $data->{'is_pending_ext_shared'} = $object->getIsPendingExtShared();
        } else {
            $data->{'is_pending_ext_shared'} = null;
        }
        if (null !== $object->getLastRead()) {
            $data->{'last_read'} = $object->getLastRead();
        } else {
            $data->{'last_read'} = null;
        }
        if (null !== $object->getLatest()) {
            $data->{'latest'} = $object->getLatest();
        } else {
            $data->{'latest'} = null;
        }
        if (null !== $object->getMembers()) {
            $values = [];
            foreach ($object->getMembers() as $value) {
                $values[] = $value;
            }
            $data->{'members'} = $values;
        } else {
            $data->{'members'} = null;
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        } else {
            $data->{'name'} = null;
        }
        if (null !== $object->getNameNormalized()) {
            $data->{'name_normalized'} = $object->getNameNormalized();
        } else {
            $data->{'name_normalized'} = null;
        }
        if (null !== $object->getNumMembers()) {
            $data->{'num_members'} = $object->getNumMembers();
        } else {
            $data->{'num_members'} = null;
        }
        if (null !== $object->getPriority()) {
            $data->{'priority'} = $object->getPriority();
        } else {
            $data->{'priority'} = null;
        }
        if (null !== $object->getPurpose()) {
            $data->{'purpose'} = $this->normalizer->normalize($object->getPurpose(), 'json', $context);
        } else {
            $data->{'purpose'} = null;
        }
        if (null !== $object->getTopic()) {
            $data->{'topic'} = $this->normalizer->normalize($object->getTopic(), 'json', $context);
        } else {
            $data->{'topic'} = null;
        }
        if (null !== $object->getUnreadCount()) {
            $data->{'unread_count'} = $object->getUnreadCount();
        } else {
            $data->{'unread_count'} = null;
        }
        if (null !== $object->getUnreadCountDisplay()) {
            $data->{'unread_count_display'} = $object->getUnreadCountDisplay();
        } else {
            $data->{'unread_count_display'} = null;
        }

        return $data;
    }
}
