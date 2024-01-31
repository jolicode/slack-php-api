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
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) || (Kernel::MAJOR_VERSION >= 7 || (Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4 && version_compare(PHP_VERSION, '8.0.0', '>=')))) {
    class ObjsChannelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\ObjsChannel' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsChannel' === \get_class($data);
        }

        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
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
                $object->setPurpose($this->denormalizer->denormalize($data['purpose'], 'JoliCode\\Slack\\Api\\Model\\ObjsChannelPurpose', 'json', $context));
            } elseif (\array_key_exists('purpose', $data) && null === $data['purpose']) {
                $object->setPurpose(null);
            }
            if (\array_key_exists('topic', $data) && null !== $data['topic']) {
                $object->setTopic($this->denormalizer->denormalize($data['topic'], 'JoliCode\\Slack\\Api\\Model\\ObjsChannelTopic', 'json', $context));
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

        public function normalize(mixed $object, string $format = null, array $context = []): null|array|\ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('acceptedUser') && null !== $object->getAcceptedUser()) {
                $data['accepted_user'] = $object->getAcceptedUser();
            }
            $data['created'] = $object->getCreated();
            $data['creator'] = $object->getCreator();
            $data['id'] = $object->getId();
            if ($object->isInitialized('isArchived') && null !== $object->getIsArchived()) {
                $data['is_archived'] = $object->getIsArchived();
            }
            $data['is_channel'] = $object->getIsChannel();
            if ($object->isInitialized('isFrozen') && null !== $object->getIsFrozen()) {
                $data['is_frozen'] = $object->getIsFrozen();
            }
            if ($object->isInitialized('isGeneral') && null !== $object->getIsGeneral()) {
                $data['is_general'] = $object->getIsGeneral();
            }
            if ($object->isInitialized('isMember') && null !== $object->getIsMember()) {
                $data['is_member'] = $object->getIsMember();
            }
            if ($object->isInitialized('isMoved') && null !== $object->getIsMoved()) {
                $data['is_moved'] = $object->getIsMoved();
            }
            $data['is_mpim'] = $object->getIsMpim();
            if ($object->isInitialized('isNonThreadable') && null !== $object->getIsNonThreadable()) {
                $data['is_non_threadable'] = $object->getIsNonThreadable();
            }
            $data['is_org_shared'] = $object->getIsOrgShared();
            if ($object->isInitialized('isPendingExtShared') && null !== $object->getIsPendingExtShared()) {
                $data['is_pending_ext_shared'] = $object->getIsPendingExtShared();
            }
            $data['is_private'] = $object->getIsPrivate();
            if ($object->isInitialized('isReadOnly') && null !== $object->getIsReadOnly()) {
                $data['is_read_only'] = $object->getIsReadOnly();
            }
            $data['is_shared'] = $object->getIsShared();
            if ($object->isInitialized('isThreadOnly') && null !== $object->getIsThreadOnly()) {
                $data['is_thread_only'] = $object->getIsThreadOnly();
            }
            if ($object->isInitialized('lastRead') && null !== $object->getLastRead()) {
                $data['last_read'] = $object->getLastRead();
            }
            if ($object->isInitialized('latest') && null !== $object->getLatest()) {
                $data['latest'] = $object->getLatest();
            }
            $values = [];
            foreach ($object->getMembers() as $value) {
                $values[] = $value;
            }
            $data['members'] = $values;
            $data['name'] = $object->getName();
            $data['name_normalized'] = $object->getNameNormalized();
            if ($object->isInitialized('numMembers') && null !== $object->getNumMembers()) {
                $data['num_members'] = $object->getNumMembers();
            }
            if ($object->isInitialized('pendingShared') && null !== $object->getPendingShared()) {
                $values_1 = [];
                foreach ($object->getPendingShared() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['pending_shared'] = $values_1;
            }
            if ($object->isInitialized('previousNames') && null !== $object->getPreviousNames()) {
                $values_2 = [];
                foreach ($object->getPreviousNames() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['previous_names'] = $values_2;
            }
            if ($object->isInitialized('priority') && null !== $object->getPriority()) {
                $data['priority'] = $object->getPriority();
            }
            $data['purpose'] = $this->normalizer->normalize($object->getPurpose(), 'json', $context);
            $data['topic'] = $this->normalizer->normalize($object->getTopic(), 'json', $context);
            if ($object->isInitialized('unlinked') && null !== $object->getUnlinked()) {
                $data['unlinked'] = $object->getUnlinked();
            }
            if ($object->isInitialized('unreadCount') && null !== $object->getUnreadCount()) {
                $data['unread_count'] = $object->getUnreadCount();
            }
            if ($object->isInitialized('unreadCountDisplay') && null !== $object->getUnreadCountDisplay()) {
                $data['unread_count_display'] = $object->getUnreadCountDisplay();
            }

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\ObjsChannel' => false];
        }
    }
} else {
    class ObjsChannelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\ObjsChannel' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsChannel' === \get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
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
                $object->setPurpose($this->denormalizer->denormalize($data['purpose'], 'JoliCode\\Slack\\Api\\Model\\ObjsChannelPurpose', 'json', $context));
            } elseif (\array_key_exists('purpose', $data) && null === $data['purpose']) {
                $object->setPurpose(null);
            }
            if (\array_key_exists('topic', $data) && null !== $data['topic']) {
                $object->setTopic($this->denormalizer->denormalize($data['topic'], 'JoliCode\\Slack\\Api\\Model\\ObjsChannelTopic', 'json', $context));
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

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('acceptedUser') && null !== $object->getAcceptedUser()) {
                $data['accepted_user'] = $object->getAcceptedUser();
            }
            $data['created'] = $object->getCreated();
            $data['creator'] = $object->getCreator();
            $data['id'] = $object->getId();
            if ($object->isInitialized('isArchived') && null !== $object->getIsArchived()) {
                $data['is_archived'] = $object->getIsArchived();
            }
            $data['is_channel'] = $object->getIsChannel();
            if ($object->isInitialized('isFrozen') && null !== $object->getIsFrozen()) {
                $data['is_frozen'] = $object->getIsFrozen();
            }
            if ($object->isInitialized('isGeneral') && null !== $object->getIsGeneral()) {
                $data['is_general'] = $object->getIsGeneral();
            }
            if ($object->isInitialized('isMember') && null !== $object->getIsMember()) {
                $data['is_member'] = $object->getIsMember();
            }
            if ($object->isInitialized('isMoved') && null !== $object->getIsMoved()) {
                $data['is_moved'] = $object->getIsMoved();
            }
            $data['is_mpim'] = $object->getIsMpim();
            if ($object->isInitialized('isNonThreadable') && null !== $object->getIsNonThreadable()) {
                $data['is_non_threadable'] = $object->getIsNonThreadable();
            }
            $data['is_org_shared'] = $object->getIsOrgShared();
            if ($object->isInitialized('isPendingExtShared') && null !== $object->getIsPendingExtShared()) {
                $data['is_pending_ext_shared'] = $object->getIsPendingExtShared();
            }
            $data['is_private'] = $object->getIsPrivate();
            if ($object->isInitialized('isReadOnly') && null !== $object->getIsReadOnly()) {
                $data['is_read_only'] = $object->getIsReadOnly();
            }
            $data['is_shared'] = $object->getIsShared();
            if ($object->isInitialized('isThreadOnly') && null !== $object->getIsThreadOnly()) {
                $data['is_thread_only'] = $object->getIsThreadOnly();
            }
            if ($object->isInitialized('lastRead') && null !== $object->getLastRead()) {
                $data['last_read'] = $object->getLastRead();
            }
            if ($object->isInitialized('latest') && null !== $object->getLatest()) {
                $data['latest'] = $object->getLatest();
            }
            $values = [];
            foreach ($object->getMembers() as $value) {
                $values[] = $value;
            }
            $data['members'] = $values;
            $data['name'] = $object->getName();
            $data['name_normalized'] = $object->getNameNormalized();
            if ($object->isInitialized('numMembers') && null !== $object->getNumMembers()) {
                $data['num_members'] = $object->getNumMembers();
            }
            if ($object->isInitialized('pendingShared') && null !== $object->getPendingShared()) {
                $values_1 = [];
                foreach ($object->getPendingShared() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['pending_shared'] = $values_1;
            }
            if ($object->isInitialized('previousNames') && null !== $object->getPreviousNames()) {
                $values_2 = [];
                foreach ($object->getPreviousNames() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['previous_names'] = $values_2;
            }
            if ($object->isInitialized('priority') && null !== $object->getPriority()) {
                $data['priority'] = $object->getPriority();
            }
            $data['purpose'] = $this->normalizer->normalize($object->getPurpose(), 'json', $context);
            $data['topic'] = $this->normalizer->normalize($object->getTopic(), 'json', $context);
            if ($object->isInitialized('unlinked') && null !== $object->getUnlinked()) {
                $data['unlinked'] = $object->getUnlinked();
            }
            if ($object->isInitialized('unreadCount') && null !== $object->getUnreadCount()) {
                $data['unread_count'] = $object->getUnreadCount();
            }
            if ($object->isInitialized('unreadCountDisplay') && null !== $object->getUnreadCountDisplay()) {
                $data['unread_count_display'] = $object->getUnreadCountDisplay();
            }

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\ObjsChannel' => false];
        }
    }
}
