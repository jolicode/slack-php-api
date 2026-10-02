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

class ObjsChannelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\ObjsChannel::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\ObjsChannel::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \JoliCode\Slack\Api\Model\ObjsChannel();
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
        if (\array_key_exists('is_archived', $data) && \is_int($data['is_archived'])) {
            $data['is_archived'] = (bool) $data['is_archived'];
        }
        if (\array_key_exists('is_channel', $data) && \is_int($data['is_channel'])) {
            $data['is_channel'] = (bool) $data['is_channel'];
        }
        if (\array_key_exists('is_frozen', $data) && \is_int($data['is_frozen'])) {
            $data['is_frozen'] = (bool) $data['is_frozen'];
        }
        if (\array_key_exists('is_general', $data) && \is_int($data['is_general'])) {
            $data['is_general'] = (bool) $data['is_general'];
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
        if (\array_key_exists('is_thread_only', $data) && \is_int($data['is_thread_only'])) {
            $data['is_thread_only'] = (bool) $data['is_thread_only'];
        }
        if (\array_key_exists('accepted_user', $data) && null !== $data['accepted_user']) {
            $object->acceptedUser = $data['accepted_user'];
        } elseif (\array_key_exists('accepted_user', $data)) {
            $object->acceptedUser = null;
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
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->id = $data['id'];
        } elseif (\array_key_exists('id', $data)) {
            $object->id = null;
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
        if (\array_key_exists('is_thread_only', $data) && null !== $data['is_thread_only']) {
            $object->isThreadOnly = $data['is_thread_only'];
        } elseif (\array_key_exists('is_thread_only', $data)) {
            $object->isThreadOnly = null;
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
        if (\array_key_exists('members', $data) && null !== $data['members']) {
            $values = [];
            foreach ($data['members'] as $value) {
                $values[] = $value;
            }
            $object->members = $values;
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
        if (\array_key_exists('pending_shared', $data) && null !== $data['pending_shared']) {
            $values_1 = [];
            foreach ($data['pending_shared'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->pendingShared = $values_1;
        } elseif (\array_key_exists('pending_shared', $data)) {
            $object->pendingShared = null;
        }
        if (\array_key_exists('previous_names', $data) && null !== $data['previous_names']) {
            $values_2 = [];
            foreach ($data['previous_names'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->previousNames = $values_2;
        } elseif (\array_key_exists('previous_names', $data)) {
            $object->previousNames = null;
        }
        if (\array_key_exists('priority', $data) && null !== $data['priority']) {
            $object->priority = $data['priority'];
        } elseif (\array_key_exists('priority', $data)) {
            $object->priority = null;
        }
        if (\array_key_exists('purpose', $data) && null !== $data['purpose']) {
            $object->purpose = $this->denormalizer->denormalize($data['purpose'], \JoliCode\Slack\Api\Model\ObjsChannelPurpose::class, 'json', $context);
        } elseif (\array_key_exists('purpose', $data)) {
            $object->purpose = null;
        }
        if (\array_key_exists('topic', $data) && null !== $data['topic']) {
            $object->topic = $this->denormalizer->denormalize($data['topic'], \JoliCode\Slack\Api\Model\ObjsChannelTopic::class, 'json', $context);
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

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('acceptedUser', get_object_vars($data)) && null !== ($data->acceptedUser ?? null)) {
            $dataArray['accepted_user'] = $data->acceptedUser;
        }
        $dataArray['created'] = $data->created;
        $dataArray['creator'] = $data->creator;
        $dataArray['id'] = $data->id;
        if (\array_key_exists('isArchived', get_object_vars($data)) && null !== ($data->isArchived ?? null)) {
            $dataArray['is_archived'] = $data->isArchived;
        }
        $dataArray['is_channel'] = $data->isChannel;
        if (\array_key_exists('isFrozen', get_object_vars($data)) && null !== ($data->isFrozen ?? null)) {
            $dataArray['is_frozen'] = $data->isFrozen;
        }
        if (\array_key_exists('isGeneral', get_object_vars($data)) && null !== ($data->isGeneral ?? null)) {
            $dataArray['is_general'] = $data->isGeneral;
        }
        if (\array_key_exists('isMember', get_object_vars($data)) && null !== ($data->isMember ?? null)) {
            $dataArray['is_member'] = $data->isMember;
        }
        if (\array_key_exists('isMoved', get_object_vars($data)) && null !== ($data->isMoved ?? null)) {
            $dataArray['is_moved'] = $data->isMoved;
        }
        $dataArray['is_mpim'] = $data->isMpim;
        if (\array_key_exists('isNonThreadable', get_object_vars($data)) && null !== ($data->isNonThreadable ?? null)) {
            $dataArray['is_non_threadable'] = $data->isNonThreadable;
        }
        $dataArray['is_org_shared'] = $data->isOrgShared;
        if (\array_key_exists('isPendingExtShared', get_object_vars($data)) && null !== ($data->isPendingExtShared ?? null)) {
            $dataArray['is_pending_ext_shared'] = $data->isPendingExtShared;
        }
        $dataArray['is_private'] = $data->isPrivate;
        if (\array_key_exists('isReadOnly', get_object_vars($data)) && null !== ($data->isReadOnly ?? null)) {
            $dataArray['is_read_only'] = $data->isReadOnly;
        }
        $dataArray['is_shared'] = $data->isShared;
        if (\array_key_exists('isThreadOnly', get_object_vars($data)) && null !== ($data->isThreadOnly ?? null)) {
            $dataArray['is_thread_only'] = $data->isThreadOnly;
        }
        if (\array_key_exists('lastRead', get_object_vars($data)) && null !== ($data->lastRead ?? null)) {
            $dataArray['last_read'] = $data->lastRead;
        }
        if (\array_key_exists('latest', get_object_vars($data)) && null !== ($data->latest ?? null)) {
            $dataArray['latest'] = $data->latest;
        }
        $values = [];
        foreach ($data->members as $value) {
            $values[] = $value;
        }
        $dataArray['members'] = $values;
        $dataArray['name'] = $data->name;
        $dataArray['name_normalized'] = $data->nameNormalized;
        if (\array_key_exists('numMembers', get_object_vars($data)) && null !== ($data->numMembers ?? null)) {
            $dataArray['num_members'] = $data->numMembers;
        }
        if (\array_key_exists('pendingShared', get_object_vars($data)) && null !== ($data->pendingShared ?? null)) {
            $values_1 = [];
            foreach ($data->pendingShared as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['pending_shared'] = $values_1;
        }
        if (\array_key_exists('previousNames', get_object_vars($data)) && null !== ($data->previousNames ?? null)) {
            $values_2 = [];
            foreach ($data->previousNames as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['previous_names'] = $values_2;
        }
        if (\array_key_exists('priority', get_object_vars($data)) && null !== ($data->priority ?? null)) {
            $dataArray['priority'] = $data->priority;
        }
        $normalized = null === $data->purpose ? null : $this->normalizer->normalize($data->purpose, 'json', $context);
        $dataArray['purpose'] = is_iterable($normalized) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized) : $normalized;
        $normalized_1 = null === $data->topic ? null : $this->normalizer->normalize($data->topic, 'json', $context);
        $dataArray['topic'] = is_iterable($normalized_1) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
        if (\array_key_exists('unlinked', get_object_vars($data)) && null !== ($data->unlinked ?? null)) {
            $dataArray['unlinked'] = $data->unlinked;
        }
        if (\array_key_exists('unreadCount', get_object_vars($data)) && null !== ($data->unreadCount ?? null)) {
            $dataArray['unread_count'] = $data->unreadCount;
        }
        if (\array_key_exists('unreadCountDisplay', get_object_vars($data)) && null !== ($data->unreadCountDisplay ?? null)) {
            $dataArray['unread_count_display'] = $data->unreadCountDisplay;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\ObjsChannel::class => false];
    }
}
