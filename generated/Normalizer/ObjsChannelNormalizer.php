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

class ObjsChannelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ObjsChannel' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsChannel' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\ObjsChannel();
        if (property_exists($data, 'accepted_user') && null !== $data->{'accepted_user'}) {
            $object->setAcceptedUser($data->{'accepted_user'});
        } elseif (property_exists($data, 'accepted_user') && null === $data->{'accepted_user'}) {
            $object->setAcceptedUser(null);
        }
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
        if (property_exists($data, 'is_channel') && null !== $data->{'is_channel'}) {
            $object->setIsChannel($data->{'is_channel'});
        } elseif (property_exists($data, 'is_channel') && null === $data->{'is_channel'}) {
            $object->setIsChannel(null);
        }
        if (property_exists($data, 'is_general') && null !== $data->{'is_general'}) {
            $object->setIsGeneral($data->{'is_general'});
        } elseif (property_exists($data, 'is_general') && null === $data->{'is_general'}) {
            $object->setIsGeneral(null);
        }
        if (property_exists($data, 'is_member') && null !== $data->{'is_member'}) {
            $object->setIsMember($data->{'is_member'});
        } elseif (property_exists($data, 'is_member') && null === $data->{'is_member'}) {
            $object->setIsMember(null);
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
        if (property_exists($data, 'is_org_shared') && null !== $data->{'is_org_shared'}) {
            $object->setIsOrgShared($data->{'is_org_shared'});
        } elseif (property_exists($data, 'is_org_shared') && null === $data->{'is_org_shared'}) {
            $object->setIsOrgShared(null);
        }
        if (property_exists($data, 'is_pending_ext_shared') && null !== $data->{'is_pending_ext_shared'}) {
            $object->setIsPendingExtShared($data->{'is_pending_ext_shared'});
        } elseif (property_exists($data, 'is_pending_ext_shared') && null === $data->{'is_pending_ext_shared'}) {
            $object->setIsPendingExtShared(null);
        }
        if (property_exists($data, 'is_private') && null !== $data->{'is_private'}) {
            $object->setIsPrivate($data->{'is_private'});
        } elseif (property_exists($data, 'is_private') && null === $data->{'is_private'}) {
            $object->setIsPrivate(null);
        }
        if (property_exists($data, 'is_read_only') && null !== $data->{'is_read_only'}) {
            $object->setIsReadOnly($data->{'is_read_only'});
        } elseif (property_exists($data, 'is_read_only') && null === $data->{'is_read_only'}) {
            $object->setIsReadOnly(null);
        }
        if (property_exists($data, 'is_shared') && null !== $data->{'is_shared'}) {
            $object->setIsShared($data->{'is_shared'});
        } elseif (property_exists($data, 'is_shared') && null === $data->{'is_shared'}) {
            $object->setIsShared(null);
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
        if (property_exists($data, 'pending_shared') && null !== $data->{'pending_shared'}) {
            $values_1 = [];
            foreach ($data->{'pending_shared'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setPendingShared($values_1);
        } elseif (property_exists($data, 'pending_shared') && null === $data->{'pending_shared'}) {
            $object->setPendingShared(null);
        }
        if (property_exists($data, 'previous_names') && null !== $data->{'previous_names'}) {
            $values_2 = [];
            foreach ($data->{'previous_names'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setPreviousNames($values_2);
        } elseif (property_exists($data, 'previous_names') && null === $data->{'previous_names'}) {
            $object->setPreviousNames(null);
        }
        if (property_exists($data, 'priority') && null !== $data->{'priority'}) {
            $object->setPriority($data->{'priority'});
        } elseif (property_exists($data, 'priority') && null === $data->{'priority'}) {
            $object->setPriority(null);
        }
        if (property_exists($data, 'purpose') && null !== $data->{'purpose'}) {
            $object->setPurpose($this->denormalizer->denormalize($data->{'purpose'}, 'JoliCode\\Slack\\Api\\Model\\ObjsChannelPurpose', 'json', $context));
        } elseif (property_exists($data, 'purpose') && null === $data->{'purpose'}) {
            $object->setPurpose(null);
        }
        if (property_exists($data, 'topic') && null !== $data->{'topic'}) {
            $object->setTopic($this->denormalizer->denormalize($data->{'topic'}, 'JoliCode\\Slack\\Api\\Model\\ObjsChannelTopic', 'json', $context));
        } elseif (property_exists($data, 'topic') && null === $data->{'topic'}) {
            $object->setTopic(null);
        }
        if (property_exists($data, 'unlinked') && null !== $data->{'unlinked'}) {
            $object->setUnlinked($data->{'unlinked'});
        } elseif (property_exists($data, 'unlinked') && null === $data->{'unlinked'}) {
            $object->setUnlinked(null);
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
        if (null !== $object->getAcceptedUser()) {
            $data->{'accepted_user'} = $object->getAcceptedUser();
        } else {
            $data->{'accepted_user'} = null;
        }
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
        if (null !== $object->getIsChannel()) {
            $data->{'is_channel'} = $object->getIsChannel();
        } else {
            $data->{'is_channel'} = null;
        }
        if (null !== $object->getIsGeneral()) {
            $data->{'is_general'} = $object->getIsGeneral();
        } else {
            $data->{'is_general'} = null;
        }
        if (null !== $object->getIsMember()) {
            $data->{'is_member'} = $object->getIsMember();
        } else {
            $data->{'is_member'} = null;
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
        if (null !== $object->getIsOrgShared()) {
            $data->{'is_org_shared'} = $object->getIsOrgShared();
        } else {
            $data->{'is_org_shared'} = null;
        }
        if (null !== $object->getIsPendingExtShared()) {
            $data->{'is_pending_ext_shared'} = $object->getIsPendingExtShared();
        } else {
            $data->{'is_pending_ext_shared'} = null;
        }
        if (null !== $object->getIsPrivate()) {
            $data->{'is_private'} = $object->getIsPrivate();
        } else {
            $data->{'is_private'} = null;
        }
        if (null !== $object->getIsReadOnly()) {
            $data->{'is_read_only'} = $object->getIsReadOnly();
        } else {
            $data->{'is_read_only'} = null;
        }
        if (null !== $object->getIsShared()) {
            $data->{'is_shared'} = $object->getIsShared();
        } else {
            $data->{'is_shared'} = null;
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
        if (null !== $object->getPendingShared()) {
            $values_1 = [];
            foreach ($object->getPendingShared() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'pending_shared'} = $values_1;
        } else {
            $data->{'pending_shared'} = null;
        }
        if (null !== $object->getPreviousNames()) {
            $values_2 = [];
            foreach ($object->getPreviousNames() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'previous_names'} = $values_2;
        } else {
            $data->{'previous_names'} = null;
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
        if (null !== $object->getUnlinked()) {
            $data->{'unlinked'} = $object->getUnlinked();
        } else {
            $data->{'unlinked'} = null;
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
