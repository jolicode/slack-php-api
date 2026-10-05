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
        $object = new \JoliCode\Slack\Api\Model\ObjsConversation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
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
        if (\array_key_exists('accepted_user', $data) && null !== $data['accepted_user']) {
            $object->acceptedUser = $data['accepted_user'];
        } elseif (\array_key_exists('accepted_user', $data)) {
            $object->acceptedUser = null;
        }
        if (\array_key_exists('connected_team_ids', $data) && null !== $data['connected_team_ids']) {
            $values = [];
            foreach ($data['connected_team_ids'] as $value) {
                $values[] = $value;
            }
            $object->connectedTeamIds = $values;
        } elseif (\array_key_exists('connected_team_ids', $data)) {
            $object->connectedTeamIds = null;
        }
        if (\array_key_exists('conversation_host_id', $data) && null !== $data['conversation_host_id']) {
            $object->conversationHostId = $data['conversation_host_id'];
        } elseif (\array_key_exists('conversation_host_id', $data)) {
            $object->conversationHostId = null;
        }
        if (\array_key_exists('created', $data) && null !== $data['created']) {
            $object->created = $data['created'];
        } elseif (\array_key_exists('created', $data)) {
            $object->created = null;
        }
        if (\array_key_exists('creator', $data) && null !== $data['creator']) {
            $object->creator = $data['creator'];
        } elseif (\array_key_exists('creator', $data)) {
            $object->creator = null;
        }
        if (\array_key_exists('display_counts', $data) && null !== $data['display_counts']) {
            $object->displayCounts = $this->denormalizer->denormalize($data['display_counts'], \JoliCode\Slack\Api\Model\ObjsConversationDisplayCounts::class, 'json', $context);
        } elseif (\array_key_exists('display_counts', $data)) {
            $object->displayCounts = null;
        }
        if (\array_key_exists('enterprise_id', $data) && null !== $data['enterprise_id']) {
            $object->enterpriseId = $data['enterprise_id'];
        } elseif (\array_key_exists('enterprise_id', $data)) {
            $object->enterpriseId = null;
        }
        if (\array_key_exists('has_pins', $data) && null !== $data['has_pins']) {
            $object->hasPins = $data['has_pins'];
        } elseif (\array_key_exists('has_pins', $data)) {
            $object->hasPins = null;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->id = $data['id'];
        } elseif (\array_key_exists('id', $data)) {
            $object->id = null;
        }
        if (\array_key_exists('internal_team_ids', $data) && null !== $data['internal_team_ids']) {
            $values_1 = [];
            foreach ($data['internal_team_ids'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->internalTeamIds = $values_1;
        } elseif (\array_key_exists('internal_team_ids', $data)) {
            $object->internalTeamIds = null;
        }
        if (\array_key_exists('is_archived', $data) && null !== $data['is_archived']) {
            $object->isArchived = $data['is_archived'];
        } elseif (\array_key_exists('is_archived', $data)) {
            $object->isArchived = null;
        }
        if (\array_key_exists('is_channel', $data) && null !== $data['is_channel']) {
            $object->isChannel = $data['is_channel'];
        } elseif (\array_key_exists('is_channel', $data)) {
            $object->isChannel = null;
        }
        if (\array_key_exists('is_ext_shared', $data) && null !== $data['is_ext_shared']) {
            $object->isExtShared = $data['is_ext_shared'];
        } elseif (\array_key_exists('is_ext_shared', $data)) {
            $object->isExtShared = null;
        }
        if (\array_key_exists('is_frozen', $data) && null !== $data['is_frozen']) {
            $object->isFrozen = $data['is_frozen'];
        } elseif (\array_key_exists('is_frozen', $data)) {
            $object->isFrozen = null;
        }
        if (\array_key_exists('is_general', $data) && null !== $data['is_general']) {
            $object->isGeneral = $data['is_general'];
        } elseif (\array_key_exists('is_general', $data)) {
            $object->isGeneral = null;
        }
        if (\array_key_exists('is_global_shared', $data) && null !== $data['is_global_shared']) {
            $object->isGlobalShared = $data['is_global_shared'];
        } elseif (\array_key_exists('is_global_shared', $data)) {
            $object->isGlobalShared = null;
        }
        if (\array_key_exists('is_group', $data) && null !== $data['is_group']) {
            $object->isGroup = $data['is_group'];
        } elseif (\array_key_exists('is_group', $data)) {
            $object->isGroup = null;
        }
        if (\array_key_exists('is_im', $data) && null !== $data['is_im']) {
            $object->isIm = $data['is_im'];
        } elseif (\array_key_exists('is_im', $data)) {
            $object->isIm = null;
        }
        if (\array_key_exists('is_member', $data) && null !== $data['is_member']) {
            $object->isMember = $data['is_member'];
        } elseif (\array_key_exists('is_member', $data)) {
            $object->isMember = null;
        }
        if (\array_key_exists('is_moved', $data) && null !== $data['is_moved']) {
            $object->isMoved = $data['is_moved'];
        } elseif (\array_key_exists('is_moved', $data)) {
            $object->isMoved = null;
        }
        if (\array_key_exists('is_mpim', $data) && null !== $data['is_mpim']) {
            $object->isMpim = $data['is_mpim'];
        } elseif (\array_key_exists('is_mpim', $data)) {
            $object->isMpim = null;
        }
        if (\array_key_exists('is_non_threadable', $data) && null !== $data['is_non_threadable']) {
            $object->isNonThreadable = $data['is_non_threadable'];
        } elseif (\array_key_exists('is_non_threadable', $data)) {
            $object->isNonThreadable = null;
        }
        if (\array_key_exists('is_open', $data) && null !== $data['is_open']) {
            $object->isOpen = $data['is_open'];
        } elseif (\array_key_exists('is_open', $data)) {
            $object->isOpen = null;
        }
        if (\array_key_exists('is_org_default', $data) && null !== $data['is_org_default']) {
            $object->isOrgDefault = $data['is_org_default'];
        } elseif (\array_key_exists('is_org_default', $data)) {
            $object->isOrgDefault = null;
        }
        if (\array_key_exists('is_org_mandatory', $data) && null !== $data['is_org_mandatory']) {
            $object->isOrgMandatory = $data['is_org_mandatory'];
        } elseif (\array_key_exists('is_org_mandatory', $data)) {
            $object->isOrgMandatory = null;
        }
        if (\array_key_exists('is_org_shared', $data) && null !== $data['is_org_shared']) {
            $object->isOrgShared = $data['is_org_shared'];
        } elseif (\array_key_exists('is_org_shared', $data)) {
            $object->isOrgShared = null;
        }
        if (\array_key_exists('is_pending_ext_shared', $data) && null !== $data['is_pending_ext_shared']) {
            $object->isPendingExtShared = $data['is_pending_ext_shared'];
        } elseif (\array_key_exists('is_pending_ext_shared', $data)) {
            $object->isPendingExtShared = null;
        }
        if (\array_key_exists('is_private', $data) && null !== $data['is_private']) {
            $object->isPrivate = $data['is_private'];
        } elseif (\array_key_exists('is_private', $data)) {
            $object->isPrivate = null;
        }
        if (\array_key_exists('is_read_only', $data) && null !== $data['is_read_only']) {
            $object->isReadOnly = $data['is_read_only'];
        } elseif (\array_key_exists('is_read_only', $data)) {
            $object->isReadOnly = null;
        }
        if (\array_key_exists('is_shared', $data) && null !== $data['is_shared']) {
            $object->isShared = $data['is_shared'];
        } elseif (\array_key_exists('is_shared', $data)) {
            $object->isShared = null;
        }
        if (\array_key_exists('is_starred', $data) && null !== $data['is_starred']) {
            $object->isStarred = $data['is_starred'];
        } elseif (\array_key_exists('is_starred', $data)) {
            $object->isStarred = null;
        }
        if (\array_key_exists('is_thread_only', $data) && null !== $data['is_thread_only']) {
            $object->isThreadOnly = $data['is_thread_only'];
        } elseif (\array_key_exists('is_thread_only', $data)) {
            $object->isThreadOnly = null;
        }
        if (\array_key_exists('is_user_deleted', $data) && null !== $data['is_user_deleted']) {
            $object->isUserDeleted = $data['is_user_deleted'];
        } elseif (\array_key_exists('is_user_deleted', $data)) {
            $object->isUserDeleted = null;
        }
        if (\array_key_exists('last_read', $data) && null !== $data['last_read']) {
            $object->lastRead = $data['last_read'];
        } elseif (\array_key_exists('last_read', $data)) {
            $object->lastRead = null;
        }
        if (\array_key_exists('latest', $data) && null !== $data['latest']) {
            $object->latest = $data['latest'];
        } elseif (\array_key_exists('latest', $data)) {
            $object->latest = null;
        }
        if (\array_key_exists('locale', $data) && null !== $data['locale']) {
            $object->locale = $data['locale'];
        } elseif (\array_key_exists('locale', $data)) {
            $object->locale = null;
        }
        if (\array_key_exists('members', $data) && null !== $data['members']) {
            $values_2 = [];
            foreach ($data['members'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->members = $values_2;
        } elseif (\array_key_exists('members', $data)) {
            $object->members = null;
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->name = $data['name'];
        } elseif (\array_key_exists('name', $data)) {
            $object->name = null;
        }
        if (\array_key_exists('name_normalized', $data) && null !== $data['name_normalized']) {
            $object->nameNormalized = $data['name_normalized'];
        } elseif (\array_key_exists('name_normalized', $data)) {
            $object->nameNormalized = null;
        }
        if (\array_key_exists('num_members', $data) && null !== $data['num_members']) {
            $object->numMembers = $data['num_members'];
        } elseif (\array_key_exists('num_members', $data)) {
            $object->numMembers = null;
        }
        if (\array_key_exists('parent_conversation', $data) && null !== $data['parent_conversation']) {
            $object->parentConversation = $data['parent_conversation'];
        } elseif (\array_key_exists('parent_conversation', $data)) {
            $object->parentConversation = null;
        }
        if (\array_key_exists('pending_connected_team_ids', $data) && null !== $data['pending_connected_team_ids']) {
            $values_3 = [];
            foreach ($data['pending_connected_team_ids'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->pendingConnectedTeamIds = $values_3;
        } elseif (\array_key_exists('pending_connected_team_ids', $data)) {
            $object->pendingConnectedTeamIds = null;
        }
        if (\array_key_exists('pending_shared', $data) && null !== $data['pending_shared']) {
            $values_4 = [];
            foreach ($data['pending_shared'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->pendingShared = $values_4;
        } elseif (\array_key_exists('pending_shared', $data)) {
            $object->pendingShared = null;
        }
        if (\array_key_exists('pin_count', $data) && null !== $data['pin_count']) {
            $object->pinCount = $data['pin_count'];
        } elseif (\array_key_exists('pin_count', $data)) {
            $object->pinCount = null;
        }
        if (\array_key_exists('previous_names', $data) && null !== $data['previous_names']) {
            $values_5 = [];
            foreach ($data['previous_names'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->previousNames = $values_5;
        } elseif (\array_key_exists('previous_names', $data)) {
            $object->previousNames = null;
        }
        if (\array_key_exists('priority', $data) && null !== $data['priority']) {
            $object->priority = $data['priority'];
        } elseif (\array_key_exists('priority', $data)) {
            $object->priority = null;
        }
        if (\array_key_exists('purpose', $data) && null !== $data['purpose']) {
            $object->purpose = $this->denormalizer->denormalize($data['purpose'], \JoliCode\Slack\Api\Model\ObjsConversationPurpose::class, 'json', $context);
        } elseif (\array_key_exists('purpose', $data)) {
            $object->purpose = null;
        }
        if (\array_key_exists('shared_team_ids', $data) && null !== $data['shared_team_ids']) {
            $values_6 = [];
            foreach ($data['shared_team_ids'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->sharedTeamIds = $values_6;
        } elseif (\array_key_exists('shared_team_ids', $data)) {
            $object->sharedTeamIds = null;
        }
        if (\array_key_exists('shares', $data) && null !== $data['shares']) {
            $values_7 = [];
            foreach ($data['shares'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, \JoliCode\Slack\Api\Model\ObjsConversationSharesItem::class, 'json', $context);
            }
            $object->shares = $values_7;
        } elseif (\array_key_exists('shares', $data)) {
            $object->shares = null;
        }
        if (\array_key_exists('timezone_count', $data) && null !== $data['timezone_count']) {
            $object->timezoneCount = $data['timezone_count'];
        } elseif (\array_key_exists('timezone_count', $data)) {
            $object->timezoneCount = null;
        }
        if (\array_key_exists('topic', $data) && null !== $data['topic']) {
            $object->topic = $this->denormalizer->denormalize($data['topic'], \JoliCode\Slack\Api\Model\ObjsConversationTopic::class, 'json', $context);
        } elseif (\array_key_exists('topic', $data)) {
            $object->topic = null;
        }
        if (\array_key_exists('unlinked', $data) && null !== $data['unlinked']) {
            $object->unlinked = $data['unlinked'];
        } elseif (\array_key_exists('unlinked', $data)) {
            $object->unlinked = null;
        }
        if (\array_key_exists('unread_count', $data) && null !== $data['unread_count']) {
            $object->unreadCount = $data['unread_count'];
        } elseif (\array_key_exists('unread_count', $data)) {
            $object->unreadCount = null;
        }
        if (\array_key_exists('unread_count_display', $data) && null !== $data['unread_count_display']) {
            $object->unreadCountDisplay = $data['unread_count_display'];
        } elseif (\array_key_exists('unread_count_display', $data)) {
            $object->unreadCountDisplay = null;
        }
        if (\array_key_exists('use_case', $data) && null !== $data['use_case']) {
            $object->useCase = $data['use_case'];
        } elseif (\array_key_exists('use_case', $data)) {
            $object->useCase = null;
        }
        if (\array_key_exists('user', $data) && null !== $data['user']) {
            $object->user = $data['user'];
        } elseif (\array_key_exists('user', $data)) {
            $object->user = null;
        }
        if (\array_key_exists('version', $data) && null !== $data['version']) {
            $object->version = $data['version'];
        } elseif (\array_key_exists('version', $data)) {
            $object->version = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('acceptedUser', get_object_vars($data)) && null !== ($data->acceptedUser ?? null)) {
            $dataArray['accepted_user'] = $data->acceptedUser;
        }
        if (\array_key_exists('connectedTeamIds', get_object_vars($data)) && null !== ($data->connectedTeamIds ?? null)) {
            $values = [];
            foreach ($data->connectedTeamIds as $value) {
                $values[] = $value;
            }
            $dataArray['connected_team_ids'] = $values;
        }
        if (\array_key_exists('conversationHostId', get_object_vars($data)) && null !== ($data->conversationHostId ?? null)) {
            $dataArray['conversation_host_id'] = $data->conversationHostId;
        }
        $dataArray['created'] = $data->created;
        if (\array_key_exists('creator', get_object_vars($data)) && null !== ($data->creator ?? null)) {
            $dataArray['creator'] = $data->creator;
        }
        if (\array_key_exists('displayCounts', get_object_vars($data)) && null !== ($data->displayCounts ?? null)) {
            $normalized = $this->normalizer->normalize($data->displayCounts, 'json', $context);
            $dataArray['display_counts'] = is_iterable($normalized) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized) : $normalized;
        }
        if (\array_key_exists('enterpriseId', get_object_vars($data)) && null !== ($data->enterpriseId ?? null)) {
            $dataArray['enterprise_id'] = $data->enterpriseId;
        }
        if (\array_key_exists('hasPins', get_object_vars($data)) && null !== ($data->hasPins ?? null)) {
            $dataArray['has_pins'] = $data->hasPins;
        }
        $dataArray['id'] = $data->id;
        if (\array_key_exists('internalTeamIds', get_object_vars($data)) && null !== ($data->internalTeamIds ?? null)) {
            $values_1 = [];
            foreach ($data->internalTeamIds as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['internal_team_ids'] = $values_1;
        }
        if (\array_key_exists('isArchived', get_object_vars($data)) && null !== ($data->isArchived ?? null)) {
            $dataArray['is_archived'] = $data->isArchived;
        }
        if (\array_key_exists('isChannel', get_object_vars($data)) && null !== ($data->isChannel ?? null)) {
            $dataArray['is_channel'] = $data->isChannel;
        }
        if (\array_key_exists('isExtShared', get_object_vars($data)) && null !== ($data->isExtShared ?? null)) {
            $dataArray['is_ext_shared'] = $data->isExtShared;
        }
        if (\array_key_exists('isFrozen', get_object_vars($data)) && null !== ($data->isFrozen ?? null)) {
            $dataArray['is_frozen'] = $data->isFrozen;
        }
        if (\array_key_exists('isGeneral', get_object_vars($data)) && null !== ($data->isGeneral ?? null)) {
            $dataArray['is_general'] = $data->isGeneral;
        }
        if (\array_key_exists('isGlobalShared', get_object_vars($data)) && null !== ($data->isGlobalShared ?? null)) {
            $dataArray['is_global_shared'] = $data->isGlobalShared;
        }
        if (\array_key_exists('isGroup', get_object_vars($data)) && null !== ($data->isGroup ?? null)) {
            $dataArray['is_group'] = $data->isGroup;
        }
        $dataArray['is_im'] = $data->isIm;
        if (\array_key_exists('isMember', get_object_vars($data)) && null !== ($data->isMember ?? null)) {
            $dataArray['is_member'] = $data->isMember;
        }
        if (\array_key_exists('isMoved', get_object_vars($data)) && null !== ($data->isMoved ?? null)) {
            $dataArray['is_moved'] = $data->isMoved;
        }
        if (\array_key_exists('isMpim', get_object_vars($data)) && null !== ($data->isMpim ?? null)) {
            $dataArray['is_mpim'] = $data->isMpim;
        }
        if (\array_key_exists('isNonThreadable', get_object_vars($data)) && null !== ($data->isNonThreadable ?? null)) {
            $dataArray['is_non_threadable'] = $data->isNonThreadable;
        }
        if (\array_key_exists('isOpen', get_object_vars($data)) && null !== ($data->isOpen ?? null)) {
            $dataArray['is_open'] = $data->isOpen;
        }
        if (\array_key_exists('isOrgDefault', get_object_vars($data)) && null !== ($data->isOrgDefault ?? null)) {
            $dataArray['is_org_default'] = $data->isOrgDefault;
        }
        if (\array_key_exists('isOrgMandatory', get_object_vars($data)) && null !== ($data->isOrgMandatory ?? null)) {
            $dataArray['is_org_mandatory'] = $data->isOrgMandatory;
        }
        $dataArray['is_org_shared'] = $data->isOrgShared;
        if (\array_key_exists('isPendingExtShared', get_object_vars($data)) && null !== ($data->isPendingExtShared ?? null)) {
            $dataArray['is_pending_ext_shared'] = $data->isPendingExtShared;
        }
        if (\array_key_exists('isPrivate', get_object_vars($data)) && null !== ($data->isPrivate ?? null)) {
            $dataArray['is_private'] = $data->isPrivate;
        }
        if (\array_key_exists('isReadOnly', get_object_vars($data)) && null !== ($data->isReadOnly ?? null)) {
            $dataArray['is_read_only'] = $data->isReadOnly;
        }
        if (\array_key_exists('isShared', get_object_vars($data)) && null !== ($data->isShared ?? null)) {
            $dataArray['is_shared'] = $data->isShared;
        }
        if (\array_key_exists('isStarred', get_object_vars($data)) && null !== ($data->isStarred ?? null)) {
            $dataArray['is_starred'] = $data->isStarred;
        }
        if (\array_key_exists('isThreadOnly', get_object_vars($data)) && null !== ($data->isThreadOnly ?? null)) {
            $dataArray['is_thread_only'] = $data->isThreadOnly;
        }
        if (\array_key_exists('isUserDeleted', get_object_vars($data)) && null !== ($data->isUserDeleted ?? null)) {
            $dataArray['is_user_deleted'] = $data->isUserDeleted;
        }
        if (\array_key_exists('lastRead', get_object_vars($data)) && null !== ($data->lastRead ?? null)) {
            $dataArray['last_read'] = $data->lastRead;
        }
        if (\array_key_exists('latest', get_object_vars($data)) && null !== ($data->latest ?? null)) {
            $dataArray['latest'] = $data->latest;
        }
        if (\array_key_exists('locale', get_object_vars($data)) && null !== ($data->locale ?? null)) {
            $dataArray['locale'] = $data->locale;
        }
        if (\array_key_exists('members', get_object_vars($data)) && null !== ($data->members ?? null)) {
            $values_2 = [];
            foreach ($data->members as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['members'] = $values_2;
        }
        if (\array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name;
        }
        if (\array_key_exists('nameNormalized', get_object_vars($data)) && null !== ($data->nameNormalized ?? null)) {
            $dataArray['name_normalized'] = $data->nameNormalized;
        }
        if (\array_key_exists('numMembers', get_object_vars($data)) && null !== ($data->numMembers ?? null)) {
            $dataArray['num_members'] = $data->numMembers;
        }
        if (\array_key_exists('parentConversation', get_object_vars($data)) && null !== ($data->parentConversation ?? null)) {
            $dataArray['parent_conversation'] = $data->parentConversation;
        }
        if (\array_key_exists('pendingConnectedTeamIds', get_object_vars($data)) && null !== ($data->pendingConnectedTeamIds ?? null)) {
            $values_3 = [];
            foreach ($data->pendingConnectedTeamIds as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['pending_connected_team_ids'] = $values_3;
        }
        if (\array_key_exists('pendingShared', get_object_vars($data)) && null !== ($data->pendingShared ?? null)) {
            $values_4 = [];
            foreach ($data->pendingShared as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['pending_shared'] = $values_4;
        }
        if (\array_key_exists('pinCount', get_object_vars($data)) && null !== ($data->pinCount ?? null)) {
            $dataArray['pin_count'] = $data->pinCount;
        }
        if (\array_key_exists('previousNames', get_object_vars($data)) && null !== ($data->previousNames ?? null)) {
            $values_5 = [];
            foreach ($data->previousNames as $value_5) {
                $values_5[] = $value_5;
            }
            $dataArray['previous_names'] = $values_5;
        }
        if (\array_key_exists('priority', get_object_vars($data)) && null !== ($data->priority ?? null)) {
            $dataArray['priority'] = $data->priority;
        }
        if (\array_key_exists('purpose', get_object_vars($data)) && null !== ($data->purpose ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->purpose, 'json', $context);
            $dataArray['purpose'] = is_iterable($normalized_1) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (\array_key_exists('sharedTeamIds', get_object_vars($data)) && null !== ($data->sharedTeamIds ?? null)) {
            $values_6 = [];
            foreach ($data->sharedTeamIds as $value_6) {
                $values_6[] = $value_6;
            }
            $dataArray['shared_team_ids'] = $values_6;
        }
        if (\array_key_exists('shares', get_object_vars($data)) && null !== ($data->shares ?? null)) {
            $values_7 = [];
            foreach ($data->shares as $value_7) {
                $normalized_2 = null === $value_7 ? null : $this->normalizer->normalize($value_7, 'json', $context);
                $values_7[] = is_iterable($normalized_2) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized_2) : $normalized_2;
            }
            $dataArray['shares'] = $values_7;
        }
        if (\array_key_exists('timezoneCount', get_object_vars($data)) && null !== ($data->timezoneCount ?? null)) {
            $dataArray['timezone_count'] = $data->timezoneCount;
        }
        if (\array_key_exists('topic', get_object_vars($data)) && null !== ($data->topic ?? null)) {
            $normalized_3 = $this->normalizer->normalize($data->topic, 'json', $context);
            $dataArray['topic'] = is_iterable($normalized_3) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        if (\array_key_exists('unlinked', get_object_vars($data)) && null !== ($data->unlinked ?? null)) {
            $dataArray['unlinked'] = $data->unlinked;
        }
        if (\array_key_exists('unreadCount', get_object_vars($data)) && null !== ($data->unreadCount ?? null)) {
            $dataArray['unread_count'] = $data->unreadCount;
        }
        if (\array_key_exists('unreadCountDisplay', get_object_vars($data)) && null !== ($data->unreadCountDisplay ?? null)) {
            $dataArray['unread_count_display'] = $data->unreadCountDisplay;
        }
        if (\array_key_exists('useCase', get_object_vars($data)) && null !== ($data->useCase ?? null)) {
            $dataArray['use_case'] = $data->useCase;
        }
        if (\array_key_exists('user', get_object_vars($data)) && null !== ($data->user ?? null)) {
            $dataArray['user'] = $data->user;
        }
        if (\array_key_exists('version', get_object_vars($data)) && null !== ($data->version ?? null)) {
            $dataArray['version'] = $data->version;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\ObjsConversation::class => false];
    }
}
