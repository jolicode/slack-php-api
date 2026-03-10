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

class ObjsConversationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\ObjsConversation::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\ObjsConversation::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsConversation();
        if (\array_key_exists('priority', $data) && \is_int($data['priority'])) {
            $data['priority'] = (float) $data['priority'];
        }
        if (\array_key_exists('has_pins', $data) && \is_int($data['has_pins'])) {
            $data['has_pins'] = (bool) $data['has_pins'];
        }
        if (\array_key_exists('is_archived', $data) && \is_int($data['is_archived'])) {
            $data['is_archived'] = (bool) $data['is_archived'];
        }
        if (\array_key_exists('is_channel', $data) && \is_int($data['is_channel'])) {
            $data['is_channel'] = (bool) $data['is_channel'];
        }
        if (\array_key_exists('is_ext_shared', $data) && \is_int($data['is_ext_shared'])) {
            $data['is_ext_shared'] = (bool) $data['is_ext_shared'];
        }
        if (\array_key_exists('is_frozen', $data) && \is_int($data['is_frozen'])) {
            $data['is_frozen'] = (bool) $data['is_frozen'];
        }
        if (\array_key_exists('is_general', $data) && \is_int($data['is_general'])) {
            $data['is_general'] = (bool) $data['is_general'];
        }
        if (\array_key_exists('is_global_shared', $data) && \is_int($data['is_global_shared'])) {
            $data['is_global_shared'] = (bool) $data['is_global_shared'];
        }
        if (\array_key_exists('is_group', $data) && \is_int($data['is_group'])) {
            $data['is_group'] = (bool) $data['is_group'];
        }
        if (\array_key_exists('is_im', $data) && \is_int($data['is_im'])) {
            $data['is_im'] = (bool) $data['is_im'];
        }
        if (\array_key_exists('is_member', $data) && \is_int($data['is_member'])) {
            $data['is_member'] = (bool) $data['is_member'];
        }
        if (\array_key_exists('is_mpim', $data) && \is_int($data['is_mpim'])) {
            $data['is_mpim'] = (bool) $data['is_mpim'];
        }
        if (\array_key_exists('is_non_threadable', $data) && \is_int($data['is_non_threadable'])) {
            $data['is_non_threadable'] = (bool) $data['is_non_threadable'];
        }
        if (\array_key_exists('is_open', $data) && \is_int($data['is_open'])) {
            $data['is_open'] = (bool) $data['is_open'];
        }
        if (\array_key_exists('is_org_default', $data) && \is_int($data['is_org_default'])) {
            $data['is_org_default'] = (bool) $data['is_org_default'];
        }
        if (\array_key_exists('is_org_mandatory', $data) && \is_int($data['is_org_mandatory'])) {
            $data['is_org_mandatory'] = (bool) $data['is_org_mandatory'];
        }
        if (\array_key_exists('is_org_shared', $data) && \is_int($data['is_org_shared'])) {
            $data['is_org_shared'] = (bool) $data['is_org_shared'];
        }
        if (\array_key_exists('is_pending_ext_shared', $data) && \is_int($data['is_pending_ext_shared'])) {
            $data['is_pending_ext_shared'] = (bool) $data['is_pending_ext_shared'];
        }
        if (\array_key_exists('is_private', $data) && \is_int($data['is_private'])) {
            $data['is_private'] = (bool) $data['is_private'];
        }
        if (\array_key_exists('is_read_only', $data) && \is_int($data['is_read_only'])) {
            $data['is_read_only'] = (bool) $data['is_read_only'];
        }
        if (\array_key_exists('is_shared', $data) && \is_int($data['is_shared'])) {
            $data['is_shared'] = (bool) $data['is_shared'];
        }
        if (\array_key_exists('is_starred', $data) && \is_int($data['is_starred'])) {
            $data['is_starred'] = (bool) $data['is_starred'];
        }
        if (\array_key_exists('is_thread_only', $data) && \is_int($data['is_thread_only'])) {
            $data['is_thread_only'] = (bool) $data['is_thread_only'];
        }
        if (\array_key_exists('is_user_deleted', $data) && \is_int($data['is_user_deleted'])) {
            $data['is_user_deleted'] = (bool) $data['is_user_deleted'];
        }
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
            $object->setDisplayCounts($this->denormalizer->denormalize($data['display_counts'], \JoliCode\Slack\Api\Model\ObjsConversationDisplayCounts::class, 'json', $context));
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
            $object->setPurpose($this->denormalizer->denormalize($data['purpose'], \JoliCode\Slack\Api\Model\ObjsConversationPurpose::class, 'json', $context));
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
                $values_7[] = $this->denormalizer->denormalize($value_7, \JoliCode\Slack\Api\Model\ObjsConversationSharesItem::class, 'json', $context);
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
            $object->setTopic($this->denormalizer->denormalize($data['topic'], \JoliCode\Slack\Api\Model\ObjsConversationTopic::class, 'json', $context));
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

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('acceptedUser') && null !== $data->getAcceptedUser()) {
            $dataArray['accepted_user'] = $data->getAcceptedUser();
        }
        if ($data->isInitialized('connectedTeamIds') && null !== $data->getConnectedTeamIds()) {
            $values = [];
            foreach ($data->getConnectedTeamIds() as $value) {
                $values[] = $value;
            }
            $dataArray['connected_team_ids'] = $values;
        }
        if ($data->isInitialized('conversationHostId') && null !== $data->getConversationHostId()) {
            $dataArray['conversation_host_id'] = $data->getConversationHostId();
        }
        $dataArray['created'] = $data->getCreated();
        if ($data->isInitialized('creator') && null !== $data->getCreator()) {
            $dataArray['creator'] = $data->getCreator();
        }
        if ($data->isInitialized('displayCounts') && null !== $data->getDisplayCounts()) {
            $dataArray['display_counts'] = $this->normalizer->normalize($data->getDisplayCounts(), 'json', $context);
        }
        if ($data->isInitialized('enterpriseId') && null !== $data->getEnterpriseId()) {
            $dataArray['enterprise_id'] = $data->getEnterpriseId();
        }
        if ($data->isInitialized('hasPins') && null !== $data->getHasPins()) {
            $dataArray['has_pins'] = $data->getHasPins();
        }
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('internalTeamIds') && null !== $data->getInternalTeamIds()) {
            $values_1 = [];
            foreach ($data->getInternalTeamIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['internal_team_ids'] = $values_1;
        }
        if ($data->isInitialized('isArchived') && null !== $data->getIsArchived()) {
            $dataArray['is_archived'] = $data->getIsArchived();
        }
        if ($data->isInitialized('isChannel') && null !== $data->getIsChannel()) {
            $dataArray['is_channel'] = $data->getIsChannel();
        }
        if ($data->isInitialized('isExtShared') && null !== $data->getIsExtShared()) {
            $dataArray['is_ext_shared'] = $data->getIsExtShared();
        }
        if ($data->isInitialized('isFrozen') && null !== $data->getIsFrozen()) {
            $dataArray['is_frozen'] = $data->getIsFrozen();
        }
        if ($data->isInitialized('isGeneral') && null !== $data->getIsGeneral()) {
            $dataArray['is_general'] = $data->getIsGeneral();
        }
        if ($data->isInitialized('isGlobalShared') && null !== $data->getIsGlobalShared()) {
            $dataArray['is_global_shared'] = $data->getIsGlobalShared();
        }
        if ($data->isInitialized('isGroup') && null !== $data->getIsGroup()) {
            $dataArray['is_group'] = $data->getIsGroup();
        }
        $dataArray['is_im'] = $data->getIsIm();
        if ($data->isInitialized('isMember') && null !== $data->getIsMember()) {
            $dataArray['is_member'] = $data->getIsMember();
        }
        if ($data->isInitialized('isMoved') && null !== $data->getIsMoved()) {
            $dataArray['is_moved'] = $data->getIsMoved();
        }
        if ($data->isInitialized('isMpim') && null !== $data->getIsMpim()) {
            $dataArray['is_mpim'] = $data->getIsMpim();
        }
        if ($data->isInitialized('isNonThreadable') && null !== $data->getIsNonThreadable()) {
            $dataArray['is_non_threadable'] = $data->getIsNonThreadable();
        }
        if ($data->isInitialized('isOpen') && null !== $data->getIsOpen()) {
            $dataArray['is_open'] = $data->getIsOpen();
        }
        if ($data->isInitialized('isOrgDefault') && null !== $data->getIsOrgDefault()) {
            $dataArray['is_org_default'] = $data->getIsOrgDefault();
        }
        if ($data->isInitialized('isOrgMandatory') && null !== $data->getIsOrgMandatory()) {
            $dataArray['is_org_mandatory'] = $data->getIsOrgMandatory();
        }
        $dataArray['is_org_shared'] = $data->getIsOrgShared();
        if ($data->isInitialized('isPendingExtShared') && null !== $data->getIsPendingExtShared()) {
            $dataArray['is_pending_ext_shared'] = $data->getIsPendingExtShared();
        }
        if ($data->isInitialized('isPrivate') && null !== $data->getIsPrivate()) {
            $dataArray['is_private'] = $data->getIsPrivate();
        }
        if ($data->isInitialized('isReadOnly') && null !== $data->getIsReadOnly()) {
            $dataArray['is_read_only'] = $data->getIsReadOnly();
        }
        if ($data->isInitialized('isShared') && null !== $data->getIsShared()) {
            $dataArray['is_shared'] = $data->getIsShared();
        }
        if ($data->isInitialized('isStarred') && null !== $data->getIsStarred()) {
            $dataArray['is_starred'] = $data->getIsStarred();
        }
        if ($data->isInitialized('isThreadOnly') && null !== $data->getIsThreadOnly()) {
            $dataArray['is_thread_only'] = $data->getIsThreadOnly();
        }
        if ($data->isInitialized('isUserDeleted') && null !== $data->getIsUserDeleted()) {
            $dataArray['is_user_deleted'] = $data->getIsUserDeleted();
        }
        if ($data->isInitialized('lastRead') && null !== $data->getLastRead()) {
            $dataArray['last_read'] = $data->getLastRead();
        }
        if ($data->isInitialized('latest') && null !== $data->getLatest()) {
            $dataArray['latest'] = $data->getLatest();
        }
        if ($data->isInitialized('locale') && null !== $data->getLocale()) {
            $dataArray['locale'] = $data->getLocale();
        }
        if ($data->isInitialized('members') && null !== $data->getMembers()) {
            $values_2 = [];
            foreach ($data->getMembers() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['members'] = $values_2;
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('nameNormalized') && null !== $data->getNameNormalized()) {
            $dataArray['name_normalized'] = $data->getNameNormalized();
        }
        if ($data->isInitialized('numMembers') && null !== $data->getNumMembers()) {
            $dataArray['num_members'] = $data->getNumMembers();
        }
        if ($data->isInitialized('parentConversation') && null !== $data->getParentConversation()) {
            $dataArray['parent_conversation'] = $data->getParentConversation();
        }
        if ($data->isInitialized('pendingConnectedTeamIds') && null !== $data->getPendingConnectedTeamIds()) {
            $values_3 = [];
            foreach ($data->getPendingConnectedTeamIds() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['pending_connected_team_ids'] = $values_3;
        }
        if ($data->isInitialized('pendingShared') && null !== $data->getPendingShared()) {
            $values_4 = [];
            foreach ($data->getPendingShared() as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['pending_shared'] = $values_4;
        }
        if ($data->isInitialized('pinCount') && null !== $data->getPinCount()) {
            $dataArray['pin_count'] = $data->getPinCount();
        }
        if ($data->isInitialized('previousNames') && null !== $data->getPreviousNames()) {
            $values_5 = [];
            foreach ($data->getPreviousNames() as $value_5) {
                $values_5[] = $value_5;
            }
            $dataArray['previous_names'] = $values_5;
        }
        if ($data->isInitialized('priority') && null !== $data->getPriority()) {
            $dataArray['priority'] = $data->getPriority();
        }
        if ($data->isInitialized('purpose') && null !== $data->getPurpose()) {
            $dataArray['purpose'] = $this->normalizer->normalize($data->getPurpose(), 'json', $context);
        }
        if ($data->isInitialized('sharedTeamIds') && null !== $data->getSharedTeamIds()) {
            $values_6 = [];
            foreach ($data->getSharedTeamIds() as $value_6) {
                $values_6[] = $value_6;
            }
            $dataArray['shared_team_ids'] = $values_6;
        }
        if ($data->isInitialized('shares') && null !== $data->getShares()) {
            $values_7 = [];
            foreach ($data->getShares() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $dataArray['shares'] = $values_7;
        }
        if ($data->isInitialized('timezoneCount') && null !== $data->getTimezoneCount()) {
            $dataArray['timezone_count'] = $data->getTimezoneCount();
        }
        if ($data->isInitialized('topic') && null !== $data->getTopic()) {
            $dataArray['topic'] = $this->normalizer->normalize($data->getTopic(), 'json', $context);
        }
        if ($data->isInitialized('unlinked') && null !== $data->getUnlinked()) {
            $dataArray['unlinked'] = $data->getUnlinked();
        }
        if ($data->isInitialized('unreadCount') && null !== $data->getUnreadCount()) {
            $dataArray['unread_count'] = $data->getUnreadCount();
        }
        if ($data->isInitialized('unreadCountDisplay') && null !== $data->getUnreadCountDisplay()) {
            $dataArray['unread_count_display'] = $data->getUnreadCountDisplay();
        }
        if ($data->isInitialized('useCase') && null !== $data->getUseCase()) {
            $dataArray['use_case'] = $data->getUseCase();
        }
        if ($data->isInitialized('user') && null !== $data->getUser()) {
            $dataArray['user'] = $data->getUser();
        }
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['version'] = $data->getVersion();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\ObjsConversation::class => false];
    }
}
