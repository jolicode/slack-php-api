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

class ObjsConversationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsConversation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('accepted_user', $data) && null !== $data['accepted_user']) {
            $object->setAcceptedUser($data['accepted_user']);
        } elseif (\array_key_exists('accepted_user', $data) && null === $data['accepted_user']) {
            $object->setAcceptedUser(null);
        }
        if (\array_key_exists('connected_team_ids', $data) && null !== $data['connected_team_ids']) {
            $values = [];
            foreach ($data['connected_team_ids'] as $value) {
                $values[] = $value;
            }
            $object->setConnectedTeamIds($values);
        } elseif (\array_key_exists('connected_team_ids', $data) && null === $data['connected_team_ids']) {
            $object->setConnectedTeamIds(null);
        }
        if (\array_key_exists('conversation_host_id', $data) && null !== $data['conversation_host_id']) {
            $object->setConversationHostId($data['conversation_host_id']);
        } elseif (\array_key_exists('conversation_host_id', $data) && null === $data['conversation_host_id']) {
            $object->setConversationHostId(null);
        }
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
        if (\array_key_exists('display_counts', $data) && null !== $data['display_counts']) {
            $object->setDisplayCounts($this->denormalizer->denormalize($data['display_counts'], 'JoliCode\\Slack\\Api\\Model\\ObjsConversationDisplayCounts', 'json', $context));
        } elseif (\array_key_exists('display_counts', $data) && null === $data['display_counts']) {
            $object->setDisplayCounts(null);
        }
        if (\array_key_exists('enterprise_id', $data) && null !== $data['enterprise_id']) {
            $object->setEnterpriseId($data['enterprise_id']);
        } elseif (\array_key_exists('enterprise_id', $data) && null === $data['enterprise_id']) {
            $object->setEnterpriseId(null);
        }
        if (\array_key_exists('has_pins', $data) && null !== $data['has_pins']) {
            $object->setHasPins($data['has_pins']);
        } elseif (\array_key_exists('has_pins', $data) && null === $data['has_pins']) {
            $object->setHasPins(null);
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('internal_team_ids', $data) && null !== $data['internal_team_ids']) {
            $values_1 = [];
            foreach ($data['internal_team_ids'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setInternalTeamIds($values_1);
        } elseif (\array_key_exists('internal_team_ids', $data) && null === $data['internal_team_ids']) {
            $object->setInternalTeamIds(null);
        }
        if (\array_key_exists('is_archived', $data) && null !== $data['is_archived']) {
            $object->setIsArchived($data['is_archived']);
        } elseif (\array_key_exists('is_archived', $data) && null === $data['is_archived']) {
            $object->setIsArchived(null);
        }
        if (\array_key_exists('is_channel', $data) && null !== $data['is_channel']) {
            $object->setIsChannel($data['is_channel']);
        } elseif (\array_key_exists('is_channel', $data) && null === $data['is_channel']) {
            $object->setIsChannel(null);
        }
        if (\array_key_exists('is_ext_shared', $data) && null !== $data['is_ext_shared']) {
            $object->setIsExtShared($data['is_ext_shared']);
        } elseif (\array_key_exists('is_ext_shared', $data) && null === $data['is_ext_shared']) {
            $object->setIsExtShared(null);
        }
        if (\array_key_exists('is_frozen', $data) && null !== $data['is_frozen']) {
            $object->setIsFrozen($data['is_frozen']);
        } elseif (\array_key_exists('is_frozen', $data) && null === $data['is_frozen']) {
            $object->setIsFrozen(null);
        }
        if (\array_key_exists('is_general', $data) && null !== $data['is_general']) {
            $object->setIsGeneral($data['is_general']);
        } elseif (\array_key_exists('is_general', $data) && null === $data['is_general']) {
            $object->setIsGeneral(null);
        }
        if (\array_key_exists('is_global_shared', $data) && null !== $data['is_global_shared']) {
            $object->setIsGlobalShared($data['is_global_shared']);
        } elseif (\array_key_exists('is_global_shared', $data) && null === $data['is_global_shared']) {
            $object->setIsGlobalShared(null);
        }
        if (\array_key_exists('is_group', $data) && null !== $data['is_group']) {
            $object->setIsGroup($data['is_group']);
        } elseif (\array_key_exists('is_group', $data) && null === $data['is_group']) {
            $object->setIsGroup(null);
        }
        if (\array_key_exists('is_im', $data) && null !== $data['is_im']) {
            $object->setIsIm($data['is_im']);
        } elseif (\array_key_exists('is_im', $data) && null === $data['is_im']) {
            $object->setIsIm(null);
        }
        if (\array_key_exists('is_member', $data) && null !== $data['is_member']) {
            $object->setIsMember($data['is_member']);
        } elseif (\array_key_exists('is_member', $data) && null === $data['is_member']) {
            $object->setIsMember(null);
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
        if (\array_key_exists('is_non_threadable', $data) && null !== $data['is_non_threadable']) {
            $object->setIsNonThreadable($data['is_non_threadable']);
        } elseif (\array_key_exists('is_non_threadable', $data) && null === $data['is_non_threadable']) {
            $object->setIsNonThreadable(null);
        }
        if (\array_key_exists('is_open', $data) && null !== $data['is_open']) {
            $object->setIsOpen($data['is_open']);
        } elseif (\array_key_exists('is_open', $data) && null === $data['is_open']) {
            $object->setIsOpen(null);
        }
        if (\array_key_exists('is_org_default', $data) && null !== $data['is_org_default']) {
            $object->setIsOrgDefault($data['is_org_default']);
        } elseif (\array_key_exists('is_org_default', $data) && null === $data['is_org_default']) {
            $object->setIsOrgDefault(null);
        }
        if (\array_key_exists('is_org_mandatory', $data) && null !== $data['is_org_mandatory']) {
            $object->setIsOrgMandatory($data['is_org_mandatory']);
        } elseif (\array_key_exists('is_org_mandatory', $data) && null === $data['is_org_mandatory']) {
            $object->setIsOrgMandatory(null);
        }
        if (\array_key_exists('is_org_shared', $data) && null !== $data['is_org_shared']) {
            $object->setIsOrgShared($data['is_org_shared']);
        } elseif (\array_key_exists('is_org_shared', $data) && null === $data['is_org_shared']) {
            $object->setIsOrgShared(null);
        }
        if (\array_key_exists('is_pending_ext_shared', $data) && null !== $data['is_pending_ext_shared']) {
            $object->setIsPendingExtShared($data['is_pending_ext_shared']);
        } elseif (\array_key_exists('is_pending_ext_shared', $data) && null === $data['is_pending_ext_shared']) {
            $object->setIsPendingExtShared(null);
        }
        if (\array_key_exists('is_private', $data) && null !== $data['is_private']) {
            $object->setIsPrivate($data['is_private']);
        } elseif (\array_key_exists('is_private', $data) && null === $data['is_private']) {
            $object->setIsPrivate(null);
        }
        if (\array_key_exists('is_read_only', $data) && null !== $data['is_read_only']) {
            $object->setIsReadOnly($data['is_read_only']);
        } elseif (\array_key_exists('is_read_only', $data) && null === $data['is_read_only']) {
            $object->setIsReadOnly(null);
        }
        if (\array_key_exists('is_shared', $data) && null !== $data['is_shared']) {
            $object->setIsShared($data['is_shared']);
        } elseif (\array_key_exists('is_shared', $data) && null === $data['is_shared']) {
            $object->setIsShared(null);
        }
        if (\array_key_exists('is_starred', $data) && null !== $data['is_starred']) {
            $object->setIsStarred($data['is_starred']);
        } elseif (\array_key_exists('is_starred', $data) && null === $data['is_starred']) {
            $object->setIsStarred(null);
        }
        if (\array_key_exists('is_thread_only', $data) && null !== $data['is_thread_only']) {
            $object->setIsThreadOnly($data['is_thread_only']);
        } elseif (\array_key_exists('is_thread_only', $data) && null === $data['is_thread_only']) {
            $object->setIsThreadOnly(null);
        }
        if (\array_key_exists('is_user_deleted', $data) && null !== $data['is_user_deleted']) {
            $object->setIsUserDeleted($data['is_user_deleted']);
        } elseif (\array_key_exists('is_user_deleted', $data) && null === $data['is_user_deleted']) {
            $object->setIsUserDeleted(null);
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
        if (\array_key_exists('locale', $data) && null !== $data['locale']) {
            $object->setLocale($data['locale']);
        } elseif (\array_key_exists('locale', $data) && null === $data['locale']) {
            $object->setLocale(null);
        }
        if (\array_key_exists('members', $data) && null !== $data['members']) {
            $values_2 = [];
            foreach ($data['members'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setMembers($values_2);
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
        if (\array_key_exists('parent_conversation', $data) && null !== $data['parent_conversation']) {
            $object->setParentConversation($data['parent_conversation']);
        } elseif (\array_key_exists('parent_conversation', $data) && null === $data['parent_conversation']) {
            $object->setParentConversation(null);
        }
        if (\array_key_exists('pending_connected_team_ids', $data) && null !== $data['pending_connected_team_ids']) {
            $values_3 = [];
            foreach ($data['pending_connected_team_ids'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setPendingConnectedTeamIds($values_3);
        } elseif (\array_key_exists('pending_connected_team_ids', $data) && null === $data['pending_connected_team_ids']) {
            $object->setPendingConnectedTeamIds(null);
        }
        if (\array_key_exists('pending_shared', $data) && null !== $data['pending_shared']) {
            $values_4 = [];
            foreach ($data['pending_shared'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setPendingShared($values_4);
        } elseif (\array_key_exists('pending_shared', $data) && null === $data['pending_shared']) {
            $object->setPendingShared(null);
        }
        if (\array_key_exists('pin_count', $data) && null !== $data['pin_count']) {
            $object->setPinCount($data['pin_count']);
        } elseif (\array_key_exists('pin_count', $data) && null === $data['pin_count']) {
            $object->setPinCount(null);
        }
        if (\array_key_exists('previous_names', $data) && null !== $data['previous_names']) {
            $values_5 = [];
            foreach ($data['previous_names'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setPreviousNames($values_5);
        } elseif (\array_key_exists('previous_names', $data) && null === $data['previous_names']) {
            $object->setPreviousNames(null);
        }
        if (\array_key_exists('priority', $data) && null !== $data['priority']) {
            $object->setPriority($data['priority']);
        } elseif (\array_key_exists('priority', $data) && null === $data['priority']) {
            $object->setPriority(null);
        }
        if (\array_key_exists('purpose', $data) && null !== $data['purpose']) {
            $object->setPurpose($this->denormalizer->denormalize($data['purpose'], 'JoliCode\\Slack\\Api\\Model\\ObjsConversationPurpose', 'json', $context));
        } elseif (\array_key_exists('purpose', $data) && null === $data['purpose']) {
            $object->setPurpose(null);
        }
        if (\array_key_exists('shared_team_ids', $data) && null !== $data['shared_team_ids']) {
            $values_6 = [];
            foreach ($data['shared_team_ids'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setSharedTeamIds($values_6);
        } elseif (\array_key_exists('shared_team_ids', $data) && null === $data['shared_team_ids']) {
            $object->setSharedTeamIds(null);
        }
        if (\array_key_exists('shares', $data) && null !== $data['shares']) {
            $values_7 = [];
            foreach ($data['shares'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'JoliCode\\Slack\\Api\\Model\\ObjsConversationSharesItem', 'json', $context);
            }
            $object->setShares($values_7);
        } elseif (\array_key_exists('shares', $data) && null === $data['shares']) {
            $object->setShares(null);
        }
        if (\array_key_exists('timezone_count', $data) && null !== $data['timezone_count']) {
            $object->setTimezoneCount($data['timezone_count']);
        } elseif (\array_key_exists('timezone_count', $data) && null === $data['timezone_count']) {
            $object->setTimezoneCount(null);
        }
        if (\array_key_exists('topic', $data) && null !== $data['topic']) {
            $object->setTopic($this->denormalizer->denormalize($data['topic'], 'JoliCode\\Slack\\Api\\Model\\ObjsConversationTopic', 'json', $context));
        } elseif (\array_key_exists('topic', $data) && null === $data['topic']) {
            $object->setTopic(null);
        }
        if (\array_key_exists('unlinked', $data) && null !== $data['unlinked']) {
            $object->setUnlinked($data['unlinked']);
        } elseif (\array_key_exists('unlinked', $data) && null === $data['unlinked']) {
            $object->setUnlinked(null);
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
        if (\array_key_exists('use_case', $data) && null !== $data['use_case']) {
            $object->setUseCase($data['use_case']);
        } elseif (\array_key_exists('use_case', $data) && null === $data['use_case']) {
            $object->setUseCase(null);
        }
        if (\array_key_exists('user', $data) && null !== $data['user']) {
            $object->setUser($data['user']);
        } elseif (\array_key_exists('user', $data) && null === $data['user']) {
            $object->setUser(null);
        }
        if (\array_key_exists('version', $data) && null !== $data['version']) {
            $object->setVersion($data['version']);
        } elseif (\array_key_exists('version', $data) && null === $data['version']) {
            $object->setVersion(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getAcceptedUser()) {
            $data['accepted_user'] = $object->getAcceptedUser();
        }
        if (null !== $object->getConnectedTeamIds()) {
            $values = [];
            foreach ($object->getConnectedTeamIds() as $value) {
                $values[] = $value;
            }
            $data['connected_team_ids'] = $values;
        }
        if (null !== $object->getConversationHostId()) {
            $data['conversation_host_id'] = $object->getConversationHostId();
        }
        $data['created'] = $object->getCreated();
        if (null !== $object->getCreator()) {
            $data['creator'] = $object->getCreator();
        }
        if (null !== $object->getDisplayCounts()) {
            $data['display_counts'] = $this->normalizer->normalize($object->getDisplayCounts(), 'json', $context);
        }
        if (null !== $object->getEnterpriseId()) {
            $data['enterprise_id'] = $object->getEnterpriseId();
        }
        if (null !== $object->getHasPins()) {
            $data['has_pins'] = $object->getHasPins();
        }
        $data['id'] = $object->getId();
        if (null !== $object->getInternalTeamIds()) {
            $values_1 = [];
            foreach ($object->getInternalTeamIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['internal_team_ids'] = $values_1;
        }
        if (null !== $object->getIsArchived()) {
            $data['is_archived'] = $object->getIsArchived();
        }
        if (null !== $object->getIsChannel()) {
            $data['is_channel'] = $object->getIsChannel();
        }
        if (null !== $object->getIsExtShared()) {
            $data['is_ext_shared'] = $object->getIsExtShared();
        }
        if (null !== $object->getIsFrozen()) {
            $data['is_frozen'] = $object->getIsFrozen();
        }
        if (null !== $object->getIsGeneral()) {
            $data['is_general'] = $object->getIsGeneral();
        }
        if (null !== $object->getIsGlobalShared()) {
            $data['is_global_shared'] = $object->getIsGlobalShared();
        }
        if (null !== $object->getIsGroup()) {
            $data['is_group'] = $object->getIsGroup();
        }
        $data['is_im'] = $object->getIsIm();
        if (null !== $object->getIsMember()) {
            $data['is_member'] = $object->getIsMember();
        }
        if (null !== $object->getIsMoved()) {
            $data['is_moved'] = $object->getIsMoved();
        }
        if (null !== $object->getIsMpim()) {
            $data['is_mpim'] = $object->getIsMpim();
        }
        if (null !== $object->getIsNonThreadable()) {
            $data['is_non_threadable'] = $object->getIsNonThreadable();
        }
        if (null !== $object->getIsOpen()) {
            $data['is_open'] = $object->getIsOpen();
        }
        if (null !== $object->getIsOrgDefault()) {
            $data['is_org_default'] = $object->getIsOrgDefault();
        }
        if (null !== $object->getIsOrgMandatory()) {
            $data['is_org_mandatory'] = $object->getIsOrgMandatory();
        }
        $data['is_org_shared'] = $object->getIsOrgShared();
        if (null !== $object->getIsPendingExtShared()) {
            $data['is_pending_ext_shared'] = $object->getIsPendingExtShared();
        }
        if (null !== $object->getIsPrivate()) {
            $data['is_private'] = $object->getIsPrivate();
        }
        if (null !== $object->getIsReadOnly()) {
            $data['is_read_only'] = $object->getIsReadOnly();
        }
        if (null !== $object->getIsShared()) {
            $data['is_shared'] = $object->getIsShared();
        }
        if (null !== $object->getIsStarred()) {
            $data['is_starred'] = $object->getIsStarred();
        }
        if (null !== $object->getIsThreadOnly()) {
            $data['is_thread_only'] = $object->getIsThreadOnly();
        }
        if (null !== $object->getIsUserDeleted()) {
            $data['is_user_deleted'] = $object->getIsUserDeleted();
        }
        if (null !== $object->getLastRead()) {
            $data['last_read'] = $object->getLastRead();
        }
        if (null !== $object->getLatest()) {
            $data['latest'] = $object->getLatest();
        }
        if (null !== $object->getLocale()) {
            $data['locale'] = $object->getLocale();
        }
        if (null !== $object->getMembers()) {
            $values_2 = [];
            foreach ($object->getMembers() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['members'] = $values_2;
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getNameNormalized()) {
            $data['name_normalized'] = $object->getNameNormalized();
        }
        if (null !== $object->getNumMembers()) {
            $data['num_members'] = $object->getNumMembers();
        }
        if (null !== $object->getParentConversation()) {
            $data['parent_conversation'] = $object->getParentConversation();
        }
        if (null !== $object->getPendingConnectedTeamIds()) {
            $values_3 = [];
            foreach ($object->getPendingConnectedTeamIds() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['pending_connected_team_ids'] = $values_3;
        }
        if (null !== $object->getPendingShared()) {
            $values_4 = [];
            foreach ($object->getPendingShared() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['pending_shared'] = $values_4;
        }
        if (null !== $object->getPinCount()) {
            $data['pin_count'] = $object->getPinCount();
        }
        if (null !== $object->getPreviousNames()) {
            $values_5 = [];
            foreach ($object->getPreviousNames() as $value_5) {
                $values_5[] = $value_5;
            }
            $data['previous_names'] = $values_5;
        }
        if (null !== $object->getPriority()) {
            $data['priority'] = $object->getPriority();
        }
        if (null !== $object->getPurpose()) {
            $data['purpose'] = $this->normalizer->normalize($object->getPurpose(), 'json', $context);
        }
        if (null !== $object->getSharedTeamIds()) {
            $values_6 = [];
            foreach ($object->getSharedTeamIds() as $value_6) {
                $values_6[] = $value_6;
            }
            $data['shared_team_ids'] = $values_6;
        }
        if (null !== $object->getShares()) {
            $values_7 = [];
            foreach ($object->getShares() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data['shares'] = $values_7;
        }
        if (null !== $object->getTimezoneCount()) {
            $data['timezone_count'] = $object->getTimezoneCount();
        }
        if (null !== $object->getTopic()) {
            $data['topic'] = $this->normalizer->normalize($object->getTopic(), 'json', $context);
        }
        if (null !== $object->getUnlinked()) {
            $data['unlinked'] = $object->getUnlinked();
        }
        if (null !== $object->getUnreadCount()) {
            $data['unread_count'] = $object->getUnreadCount();
        }
        if (null !== $object->getUnreadCountDisplay()) {
            $data['unread_count_display'] = $object->getUnreadCountDisplay();
        }
        if (null !== $object->getUseCase()) {
            $data['use_case'] = $object->getUseCase();
        }
        if (null !== $object->getUser()) {
            $data['user'] = $object->getUser();
        }
        if (null !== $object->getVersion()) {
            $data['version'] = $object->getVersion();
        }

        return $data;
    }
}
