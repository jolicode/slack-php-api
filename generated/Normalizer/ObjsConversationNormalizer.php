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

class ObjsConversationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ObjsConversation' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsConversation' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\ObjsConversation();
        if (property_exists($data, 'accepted_user') && null !== $data->{'accepted_user'}) {
            $object->setAcceptedUser($data->{'accepted_user'});
        } elseif (property_exists($data, 'accepted_user') && null === $data->{'accepted_user'}) {
            $object->setAcceptedUser(null);
        }
        if (property_exists($data, 'connected_team_ids') && null !== $data->{'connected_team_ids'}) {
            $values = [];
            foreach ($data->{'connected_team_ids'} as $value) {
                $values[] = $value;
            }
            $object->setConnectedTeamIds($values);
        } elseif (property_exists($data, 'connected_team_ids') && null === $data->{'connected_team_ids'}) {
            $object->setConnectedTeamIds(null);
        }
        if (property_exists($data, 'conversation_host_id') && null !== $data->{'conversation_host_id'}) {
            $object->setConversationHostId($data->{'conversation_host_id'});
        } elseif (property_exists($data, 'conversation_host_id') && null === $data->{'conversation_host_id'}) {
            $object->setConversationHostId(null);
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
        if (property_exists($data, 'display_counts') && null !== $data->{'display_counts'}) {
            $object->setDisplayCounts($this->denormalizer->denormalize($data->{'display_counts'}, 'JoliCode\\Slack\\Api\\Model\\ObjsConversationDisplayCounts', 'json', $context));
        } elseif (property_exists($data, 'display_counts') && null === $data->{'display_counts'}) {
            $object->setDisplayCounts(null);
        }
        if (property_exists($data, 'enterprise_id') && null !== $data->{'enterprise_id'}) {
            $object->setEnterpriseId($data->{'enterprise_id'});
        } elseif (property_exists($data, 'enterprise_id') && null === $data->{'enterprise_id'}) {
            $object->setEnterpriseId(null);
        }
        if (property_exists($data, 'external_connections') && null !== $data->{'external_connections'}) {
            $object->setExternalConnections($data->{'external_connections'});
        } elseif (property_exists($data, 'external_connections') && null === $data->{'external_connections'}) {
            $object->setExternalConnections(null);
        }
        if (property_exists($data, 'has_pins') && null !== $data->{'has_pins'}) {
            $object->setHasPins($data->{'has_pins'});
        } elseif (property_exists($data, 'has_pins') && null === $data->{'has_pins'}) {
            $object->setHasPins(null);
        }
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        } elseif (property_exists($data, 'id') && null === $data->{'id'}) {
            $object->setId(null);
        }
        if (property_exists($data, 'internal_team_ids') && null !== $data->{'internal_team_ids'}) {
            $values_1 = [];
            foreach ($data->{'internal_team_ids'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setInternalTeamIds($values_1);
        } elseif (property_exists($data, 'internal_team_ids') && null === $data->{'internal_team_ids'}) {
            $object->setInternalTeamIds(null);
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
        if (property_exists($data, 'is_ext_shared') && null !== $data->{'is_ext_shared'}) {
            $object->setIsExtShared($data->{'is_ext_shared'});
        } elseif (property_exists($data, 'is_ext_shared') && null === $data->{'is_ext_shared'}) {
            $object->setIsExtShared(null);
        }
        if (property_exists($data, 'is_general') && null !== $data->{'is_general'}) {
            $object->setIsGeneral($data->{'is_general'});
        } elseif (property_exists($data, 'is_general') && null === $data->{'is_general'}) {
            $object->setIsGeneral(null);
        }
        if (property_exists($data, 'is_global_shared') && null !== $data->{'is_global_shared'}) {
            $object->setIsGlobalShared($data->{'is_global_shared'});
        } elseif (property_exists($data, 'is_global_shared') && null === $data->{'is_global_shared'}) {
            $object->setIsGlobalShared(null);
        }
        if (property_exists($data, 'is_group') && null !== $data->{'is_group'}) {
            $object->setIsGroup($data->{'is_group'});
        } elseif (property_exists($data, 'is_group') && null === $data->{'is_group'}) {
            $object->setIsGroup(null);
        }
        if (property_exists($data, 'is_im') && null !== $data->{'is_im'}) {
            $object->setIsIm($data->{'is_im'});
        } elseif (property_exists($data, 'is_im') && null === $data->{'is_im'}) {
            $object->setIsIm(null);
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
        if (property_exists($data, 'is_non_threadable') && null !== $data->{'is_non_threadable'}) {
            $object->setIsNonThreadable($data->{'is_non_threadable'});
        } elseif (property_exists($data, 'is_non_threadable') && null === $data->{'is_non_threadable'}) {
            $object->setIsNonThreadable(null);
        }
        if (property_exists($data, 'is_open') && null !== $data->{'is_open'}) {
            $object->setIsOpen($data->{'is_open'});
        } elseif (property_exists($data, 'is_open') && null === $data->{'is_open'}) {
            $object->setIsOpen(null);
        }
        if (property_exists($data, 'is_org_default') && null !== $data->{'is_org_default'}) {
            $object->setIsOrgDefault($data->{'is_org_default'});
        } elseif (property_exists($data, 'is_org_default') && null === $data->{'is_org_default'}) {
            $object->setIsOrgDefault(null);
        }
        if (property_exists($data, 'is_org_mandatory') && null !== $data->{'is_org_mandatory'}) {
            $object->setIsOrgMandatory($data->{'is_org_mandatory'});
        } elseif (property_exists($data, 'is_org_mandatory') && null === $data->{'is_org_mandatory'}) {
            $object->setIsOrgMandatory(null);
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
        if (property_exists($data, 'is_starred') && null !== $data->{'is_starred'}) {
            $object->setIsStarred($data->{'is_starred'});
        } elseif (property_exists($data, 'is_starred') && null === $data->{'is_starred'}) {
            $object->setIsStarred(null);
        }
        if (property_exists($data, 'is_thread_only') && null !== $data->{'is_thread_only'}) {
            $object->setIsThreadOnly($data->{'is_thread_only'});
        } elseif (property_exists($data, 'is_thread_only') && null === $data->{'is_thread_only'}) {
            $object->setIsThreadOnly(null);
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
            $values_2 = [];
            foreach ($data->{'members'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setMembers($values_2);
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
        if (property_exists($data, 'parent_conversation') && null !== $data->{'parent_conversation'}) {
            $object->setParentConversation($data->{'parent_conversation'});
        } elseif (property_exists($data, 'parent_conversation') && null === $data->{'parent_conversation'}) {
            $object->setParentConversation(null);
        }
        if (property_exists($data, 'pending_connected_team_ids') && null !== $data->{'pending_connected_team_ids'}) {
            $values_3 = [];
            foreach ($data->{'pending_connected_team_ids'} as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setPendingConnectedTeamIds($values_3);
        } elseif (property_exists($data, 'pending_connected_team_ids') && null === $data->{'pending_connected_team_ids'}) {
            $object->setPendingConnectedTeamIds(null);
        }
        if (property_exists($data, 'pending_shared') && null !== $data->{'pending_shared'}) {
            $values_4 = [];
            foreach ($data->{'pending_shared'} as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setPendingShared($values_4);
        } elseif (property_exists($data, 'pending_shared') && null === $data->{'pending_shared'}) {
            $object->setPendingShared(null);
        }
        if (property_exists($data, 'pin_count') && null !== $data->{'pin_count'}) {
            $object->setPinCount($data->{'pin_count'});
        } elseif (property_exists($data, 'pin_count') && null === $data->{'pin_count'}) {
            $object->setPinCount(null);
        }
        if (property_exists($data, 'previous_names') && null !== $data->{'previous_names'}) {
            $values_5 = [];
            foreach ($data->{'previous_names'} as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setPreviousNames($values_5);
        } elseif (property_exists($data, 'previous_names') && null === $data->{'previous_names'}) {
            $object->setPreviousNames(null);
        }
        if (property_exists($data, 'priority') && null !== $data->{'priority'}) {
            $object->setPriority($data->{'priority'});
        } elseif (property_exists($data, 'priority') && null === $data->{'priority'}) {
            $object->setPriority(null);
        }
        if (property_exists($data, 'purpose') && null !== $data->{'purpose'}) {
            $object->setPurpose($this->denormalizer->denormalize($data->{'purpose'}, 'JoliCode\\Slack\\Api\\Model\\ObjsConversationPurpose', 'json', $context));
        } elseif (property_exists($data, 'purpose') && null === $data->{'purpose'}) {
            $object->setPurpose(null);
        }
        if (property_exists($data, 'shared_team_ids') && null !== $data->{'shared_team_ids'}) {
            $values_6 = [];
            foreach ($data->{'shared_team_ids'} as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setSharedTeamIds($values_6);
        } elseif (property_exists($data, 'shared_team_ids') && null === $data->{'shared_team_ids'}) {
            $object->setSharedTeamIds(null);
        }
        if (property_exists($data, 'shares') && null !== $data->{'shares'}) {
            $values_7 = [];
            foreach ($data->{'shares'} as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'JoliCode\\Slack\\Api\\Model\\ObjsConversationSharesItem', 'json', $context);
            }
            $object->setShares($values_7);
        } elseif (property_exists($data, 'shares') && null === $data->{'shares'}) {
            $object->setShares(null);
        }
        if (property_exists($data, 'timezone_count') && null !== $data->{'timezone_count'}) {
            $object->setTimezoneCount($data->{'timezone_count'});
        } elseif (property_exists($data, 'timezone_count') && null === $data->{'timezone_count'}) {
            $object->setTimezoneCount(null);
        }
        if (property_exists($data, 'topic') && null !== $data->{'topic'}) {
            $object->setTopic($this->denormalizer->denormalize($data->{'topic'}, 'JoliCode\\Slack\\Api\\Model\\ObjsConversationTopic', 'json', $context));
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
        if (property_exists($data, 'user') && null !== $data->{'user'}) {
            $object->setUser($data->{'user'});
        } elseif (property_exists($data, 'user') && null === $data->{'user'}) {
            $object->setUser(null);
        }
        if (property_exists($data, 'version') && null !== $data->{'version'}) {
            $object->setVersion($data->{'version'});
        } elseif (property_exists($data, 'version') && null === $data->{'version'}) {
            $object->setVersion(null);
        }
        if (property_exists($data, 'is_user_deleted') && null !== $data->{'is_user_deleted'}) {
            $object->setIsUserDeleted($data->{'is_user_deleted'});
        } elseif (property_exists($data, 'is_user_deleted') && null === $data->{'is_user_deleted'}) {
            $object->setIsUserDeleted(null);
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
        if (null !== $object->getConnectedTeamIds()) {
            $values = [];
            foreach ($object->getConnectedTeamIds() as $value) {
                $values[] = $value;
            }
            $data->{'connected_team_ids'} = $values;
        } else {
            $data->{'connected_team_ids'} = null;
        }
        if (null !== $object->getConversationHostId()) {
            $data->{'conversation_host_id'} = $object->getConversationHostId();
        } else {
            $data->{'conversation_host_id'} = null;
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
        if (null !== $object->getDisplayCounts()) {
            $data->{'display_counts'} = $this->normalizer->normalize($object->getDisplayCounts(), 'json', $context);
        } else {
            $data->{'display_counts'} = null;
        }
        if (null !== $object->getEnterpriseId()) {
            $data->{'enterprise_id'} = $object->getEnterpriseId();
        } else {
            $data->{'enterprise_id'} = null;
        }
        if (null !== $object->getExternalConnections()) {
            $data->{'external_connections'} = $object->getExternalConnections();
        } else {
            $data->{'external_connections'} = null;
        }
        if (null !== $object->getHasPins()) {
            $data->{'has_pins'} = $object->getHasPins();
        } else {
            $data->{'has_pins'} = null;
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        } else {
            $data->{'id'} = null;
        }
        if (null !== $object->getInternalTeamIds()) {
            $values_1 = [];
            foreach ($object->getInternalTeamIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'internal_team_ids'} = $values_1;
        } else {
            $data->{'internal_team_ids'} = null;
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
        if (null !== $object->getIsExtShared()) {
            $data->{'is_ext_shared'} = $object->getIsExtShared();
        } else {
            $data->{'is_ext_shared'} = null;
        }
        if (null !== $object->getIsGeneral()) {
            $data->{'is_general'} = $object->getIsGeneral();
        } else {
            $data->{'is_general'} = null;
        }
        if (null !== $object->getIsGlobalShared()) {
            $data->{'is_global_shared'} = $object->getIsGlobalShared();
        } else {
            $data->{'is_global_shared'} = null;
        }
        if (null !== $object->getIsGroup()) {
            $data->{'is_group'} = $object->getIsGroup();
        } else {
            $data->{'is_group'} = null;
        }
        if (null !== $object->getIsIm()) {
            $data->{'is_im'} = $object->getIsIm();
        } else {
            $data->{'is_im'} = null;
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
        if (null !== $object->getIsNonThreadable()) {
            $data->{'is_non_threadable'} = $object->getIsNonThreadable();
        } else {
            $data->{'is_non_threadable'} = null;
        }
        if (null !== $object->getIsOpen()) {
            $data->{'is_open'} = $object->getIsOpen();
        } else {
            $data->{'is_open'} = null;
        }
        if (null !== $object->getIsOrgDefault()) {
            $data->{'is_org_default'} = $object->getIsOrgDefault();
        } else {
            $data->{'is_org_default'} = null;
        }
        if (null !== $object->getIsOrgMandatory()) {
            $data->{'is_org_mandatory'} = $object->getIsOrgMandatory();
        } else {
            $data->{'is_org_mandatory'} = null;
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
        if (null !== $object->getIsStarred()) {
            $data->{'is_starred'} = $object->getIsStarred();
        } else {
            $data->{'is_starred'} = null;
        }
        if (null !== $object->getIsThreadOnly()) {
            $data->{'is_thread_only'} = $object->getIsThreadOnly();
        } else {
            $data->{'is_thread_only'} = null;
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
            $values_2 = [];
            foreach ($object->getMembers() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'members'} = $values_2;
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
        if (null !== $object->getParentConversation()) {
            $data->{'parent_conversation'} = $object->getParentConversation();
        } else {
            $data->{'parent_conversation'} = null;
        }
        if (null !== $object->getPendingConnectedTeamIds()) {
            $values_3 = [];
            foreach ($object->getPendingConnectedTeamIds() as $value_3) {
                $values_3[] = $value_3;
            }
            $data->{'pending_connected_team_ids'} = $values_3;
        } else {
            $data->{'pending_connected_team_ids'} = null;
        }
        if (null !== $object->getPendingShared()) {
            $values_4 = [];
            foreach ($object->getPendingShared() as $value_4) {
                $values_4[] = $value_4;
            }
            $data->{'pending_shared'} = $values_4;
        } else {
            $data->{'pending_shared'} = null;
        }
        if (null !== $object->getPinCount()) {
            $data->{'pin_count'} = $object->getPinCount();
        } else {
            $data->{'pin_count'} = null;
        }
        if (null !== $object->getPreviousNames()) {
            $values_5 = [];
            foreach ($object->getPreviousNames() as $value_5) {
                $values_5[] = $value_5;
            }
            $data->{'previous_names'} = $values_5;
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
        if (null !== $object->getSharedTeamIds()) {
            $values_6 = [];
            foreach ($object->getSharedTeamIds() as $value_6) {
                $values_6[] = $value_6;
            }
            $data->{'shared_team_ids'} = $values_6;
        } else {
            $data->{'shared_team_ids'} = null;
        }
        if (null !== $object->getShares()) {
            $values_7 = [];
            foreach ($object->getShares() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data->{'shares'} = $values_7;
        } else {
            $data->{'shares'} = null;
        }
        if (null !== $object->getTimezoneCount()) {
            $data->{'timezone_count'} = $object->getTimezoneCount();
        } else {
            $data->{'timezone_count'} = null;
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
        if (null !== $object->getUser()) {
            $data->{'user'} = $object->getUser();
        } else {
            $data->{'user'} = null;
        }
        if (null !== $object->getVersion()) {
            $data->{'version'} = $object->getVersion();
        } else {
            $data->{'version'} = null;
        }
        if (null !== $object->getIsUserDeleted()) {
            $data->{'is_user_deleted'} = $object->getIsUserDeleted();
        } else {
            $data->{'is_user_deleted'} = null;
        }

        return $data;
    }
}
