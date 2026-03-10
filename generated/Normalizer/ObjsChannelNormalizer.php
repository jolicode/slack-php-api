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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsChannel();
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
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('accepted_user', $data) && null !== $data['accepted_user']) {
            $object->setAcceptedUser($data['accepted_user']);
        } elseif (\array_key_exists('accepted_user', $data) && null === $data['accepted_user']) {
            $object->setAcceptedUser(null);
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
        if (\array_key_exists('is_channel', $data) && null !== $data['is_channel']) {
            $object->setIsChannel($data['is_channel']);
        } elseif (\array_key_exists('is_channel', $data) && null === $data['is_channel']) {
            $object->setIsChannel(null);
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
        if (\array_key_exists('is_thread_only', $data) && null !== $data['is_thread_only']) {
            $object->setIsThreadOnly($data['is_thread_only']);
        } elseif (\array_key_exists('is_thread_only', $data) && null === $data['is_thread_only']) {
            $object->setIsThreadOnly(null);
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
        if (\array_key_exists('pending_shared', $data) && null !== $data['pending_shared']) {
            $values_1 = [];
            foreach ($data['pending_shared'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setPendingShared($values_1);
        } elseif (\array_key_exists('pending_shared', $data) && null === $data['pending_shared']) {
            $object->setPendingShared(null);
        }
        if (\array_key_exists('previous_names', $data) && null !== $data['previous_names']) {
            $values_2 = [];
            foreach ($data['previous_names'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setPreviousNames($values_2);
        } elseif (\array_key_exists('previous_names', $data) && null === $data['previous_names']) {
            $object->setPreviousNames(null);
        }
        if (\array_key_exists('priority', $data) && null !== $data['priority']) {
            $object->setPriority($data['priority']);
        } elseif (\array_key_exists('priority', $data) && null === $data['priority']) {
            $object->setPriority(null);
        }
        if (\array_key_exists('purpose', $data) && null !== $data['purpose']) {
            $object->setPurpose($this->denormalizer->denormalize($data['purpose'], \JoliCode\Slack\Api\Model\ObjsChannelPurpose::class, 'json', $context));
        } elseif (\array_key_exists('purpose', $data) && null === $data['purpose']) {
            $object->setPurpose(null);
        }
        if (\array_key_exists('topic', $data) && null !== $data['topic']) {
            $object->setTopic($this->denormalizer->denormalize($data['topic'], \JoliCode\Slack\Api\Model\ObjsChannelTopic::class, 'json', $context));
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

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('acceptedUser') && null !== $data->getAcceptedUser()) {
            $dataArray['accepted_user'] = $data->getAcceptedUser();
        }
        $dataArray['created'] = $data->getCreated();
        $dataArray['creator'] = $data->getCreator();
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('isArchived') && null !== $data->getIsArchived()) {
            $dataArray['is_archived'] = $data->getIsArchived();
        }
        $dataArray['is_channel'] = $data->getIsChannel();
        if ($data->isInitialized('isFrozen') && null !== $data->getIsFrozen()) {
            $dataArray['is_frozen'] = $data->getIsFrozen();
        }
        if ($data->isInitialized('isGeneral') && null !== $data->getIsGeneral()) {
            $dataArray['is_general'] = $data->getIsGeneral();
        }
        if ($data->isInitialized('isMember') && null !== $data->getIsMember()) {
            $dataArray['is_member'] = $data->getIsMember();
        }
        if ($data->isInitialized('isMoved') && null !== $data->getIsMoved()) {
            $dataArray['is_moved'] = $data->getIsMoved();
        }
        $dataArray['is_mpim'] = $data->getIsMpim();
        if ($data->isInitialized('isNonThreadable') && null !== $data->getIsNonThreadable()) {
            $dataArray['is_non_threadable'] = $data->getIsNonThreadable();
        }
        $dataArray['is_org_shared'] = $data->getIsOrgShared();
        if ($data->isInitialized('isPendingExtShared') && null !== $data->getIsPendingExtShared()) {
            $dataArray['is_pending_ext_shared'] = $data->getIsPendingExtShared();
        }
        $dataArray['is_private'] = $data->getIsPrivate();
        if ($data->isInitialized('isReadOnly') && null !== $data->getIsReadOnly()) {
            $dataArray['is_read_only'] = $data->getIsReadOnly();
        }
        $dataArray['is_shared'] = $data->getIsShared();
        if ($data->isInitialized('isThreadOnly') && null !== $data->getIsThreadOnly()) {
            $dataArray['is_thread_only'] = $data->getIsThreadOnly();
        }
        if ($data->isInitialized('lastRead') && null !== $data->getLastRead()) {
            $dataArray['last_read'] = $data->getLastRead();
        }
        if ($data->isInitialized('latest') && null !== $data->getLatest()) {
            $dataArray['latest'] = $data->getLatest();
        }
        $values = [];
        foreach ($data->getMembers() as $value) {
            $values[] = $value;
        }
        $dataArray['members'] = $values;
        $dataArray['name'] = $data->getName();
        $dataArray['name_normalized'] = $data->getNameNormalized();
        if ($data->isInitialized('numMembers') && null !== $data->getNumMembers()) {
            $dataArray['num_members'] = $data->getNumMembers();
        }
        if ($data->isInitialized('pendingShared') && null !== $data->getPendingShared()) {
            $values_1 = [];
            foreach ($data->getPendingShared() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['pending_shared'] = $values_1;
        }
        if ($data->isInitialized('previousNames') && null !== $data->getPreviousNames()) {
            $values_2 = [];
            foreach ($data->getPreviousNames() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['previous_names'] = $values_2;
        }
        if ($data->isInitialized('priority') && null !== $data->getPriority()) {
            $dataArray['priority'] = $data->getPriority();
        }
        $dataArray['purpose'] = $this->normalizer->normalize($data->getPurpose(), 'json', $context);
        $dataArray['topic'] = $this->normalizer->normalize($data->getTopic(), 'json', $context);
        if ($data->isInitialized('unlinked') && null !== $data->getUnlinked()) {
            $dataArray['unlinked'] = $data->getUnlinked();
        }
        if ($data->isInitialized('unreadCount') && null !== $data->getUnreadCount()) {
            $dataArray['unread_count'] = $data->getUnreadCount();
        }
        if ($data->isInitialized('unreadCountDisplay') && null !== $data->getUnreadCountDisplay()) {
            $dataArray['unread_count_display'] = $data->getUnreadCountDisplay();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\ObjsChannel::class => false];
    }
}
