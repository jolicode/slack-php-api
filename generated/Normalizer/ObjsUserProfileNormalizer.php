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

class ObjsUserProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\ObjsUserProfile::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\ObjsUserProfile::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsUserProfile();
        if (\array_key_exists('always_active', $data) && \is_int($data['always_active'])) {
            $data['always_active'] = (bool) $data['always_active'];
        }
        if (\array_key_exists('is_app_user', $data) && \is_int($data['is_app_user'])) {
            $data['is_app_user'] = (bool) $data['is_app_user'];
        }
        if (\array_key_exists('is_custom_image', $data) && \is_int($data['is_custom_image'])) {
            $data['is_custom_image'] = (bool) $data['is_custom_image'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('always_active', $data) && null !== $data['always_active']) {
            $object->setAlwaysActive($data['always_active']);
        } elseif (\array_key_exists('always_active', $data) && null === $data['always_active']) {
            $object->setAlwaysActive(null);
        }
        if (\array_key_exists('api_app_id', $data) && null !== $data['api_app_id']) {
            $object->setApiAppId($data['api_app_id']);
        } elseif (\array_key_exists('api_app_id', $data) && null === $data['api_app_id']) {
            $object->setApiAppId(null);
        }
        if (\array_key_exists('avatar_hash', $data) && null !== $data['avatar_hash']) {
            $object->setAvatarHash($data['avatar_hash']);
        } elseif (\array_key_exists('avatar_hash', $data) && null === $data['avatar_hash']) {
            $object->setAvatarHash(null);
        }
        if (\array_key_exists('bot_id', $data) && null !== $data['bot_id']) {
            $object->setBotId($data['bot_id']);
        } elseif (\array_key_exists('bot_id', $data) && null === $data['bot_id']) {
            $object->setBotId(null);
        }
        if (\array_key_exists('display_name', $data) && null !== $data['display_name']) {
            $object->setDisplayName($data['display_name']);
        } elseif (\array_key_exists('display_name', $data) && null === $data['display_name']) {
            $object->setDisplayName(null);
        }
        if (\array_key_exists('display_name_normalized', $data) && null !== $data['display_name_normalized']) {
            $object->setDisplayNameNormalized($data['display_name_normalized']);
        } elseif (\array_key_exists('display_name_normalized', $data) && null === $data['display_name_normalized']) {
            $object->setDisplayNameNormalized(null);
        }
        if (\array_key_exists('email', $data) && null !== $data['email']) {
            $value = $data['email'];
            if (\is_string($data['email'])) {
                $value = $data['email'];
            }
            $object->setEmail($value);
        } elseif (\array_key_exists('email', $data) && null === $data['email']) {
            $object->setEmail(null);
        }
        if (\array_key_exists('fields', $data) && null !== $data['fields']) {
            $value_1 = $data['fields'];
            if (\is_array($data['fields']) && $this->isOnlyNumericKeys($data['fields'])) {
                $values = [];
                foreach ($data['fields'] as $value_2) {
                    $values[] = $value_2;
                }
                $value_1 = $values;
            } elseif (isset($data['fields'])) {
                $value_1 = $data['fields'];
            }
            $object->setFields($value_1);
        } elseif (\array_key_exists('fields', $data) && null === $data['fields']) {
            $object->setFields(null);
        }
        if (\array_key_exists('first_name', $data) && null !== $data['first_name']) {
            $value_3 = $data['first_name'];
            if (\is_string($data['first_name'])) {
                $value_3 = $data['first_name'];
            }
            $object->setFirstName($value_3);
        } elseif (\array_key_exists('first_name', $data) && null === $data['first_name']) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('guest_expiration_ts', $data) && null !== $data['guest_expiration_ts']) {
            $value_4 = $data['guest_expiration_ts'];
            if (\is_int($data['guest_expiration_ts'])) {
                $value_4 = $data['guest_expiration_ts'];
            }
            $object->setGuestExpirationTs($value_4);
        } elseif (\array_key_exists('guest_expiration_ts', $data) && null === $data['guest_expiration_ts']) {
            $object->setGuestExpirationTs(null);
        }
        if (\array_key_exists('guest_invited_by', $data) && null !== $data['guest_invited_by']) {
            $value_5 = $data['guest_invited_by'];
            if (\is_string($data['guest_invited_by'])) {
                $value_5 = $data['guest_invited_by'];
            }
            $object->setGuestInvitedBy($value_5);
        } elseif (\array_key_exists('guest_invited_by', $data) && null === $data['guest_invited_by']) {
            $object->setGuestInvitedBy(null);
        }
        if (\array_key_exists('image_1024', $data) && null !== $data['image_1024']) {
            $value_6 = $data['image_1024'];
            if (\is_string($data['image_1024'])) {
                $value_6 = $data['image_1024'];
            }
            $object->setImage1024($value_6);
        } elseif (\array_key_exists('image_1024', $data) && null === $data['image_1024']) {
            $object->setImage1024(null);
        }
        if (\array_key_exists('image_192', $data) && null !== $data['image_192']) {
            $value_7 = $data['image_192'];
            if (\is_string($data['image_192'])) {
                $value_7 = $data['image_192'];
            }
            $object->setImage192($value_7);
        } elseif (\array_key_exists('image_192', $data) && null === $data['image_192']) {
            $object->setImage192(null);
        }
        if (\array_key_exists('image_24', $data) && null !== $data['image_24']) {
            $value_8 = $data['image_24'];
            if (\is_string($data['image_24'])) {
                $value_8 = $data['image_24'];
            }
            $object->setImage24($value_8);
        } elseif (\array_key_exists('image_24', $data) && null === $data['image_24']) {
            $object->setImage24(null);
        }
        if (\array_key_exists('image_32', $data) && null !== $data['image_32']) {
            $value_9 = $data['image_32'];
            if (\is_string($data['image_32'])) {
                $value_9 = $data['image_32'];
            }
            $object->setImage32($value_9);
        } elseif (\array_key_exists('image_32', $data) && null === $data['image_32']) {
            $object->setImage32(null);
        }
        if (\array_key_exists('image_48', $data) && null !== $data['image_48']) {
            $value_10 = $data['image_48'];
            if (\is_string($data['image_48'])) {
                $value_10 = $data['image_48'];
            }
            $object->setImage48($value_10);
        } elseif (\array_key_exists('image_48', $data) && null === $data['image_48']) {
            $object->setImage48(null);
        }
        if (\array_key_exists('image_512', $data) && null !== $data['image_512']) {
            $value_11 = $data['image_512'];
            if (\is_string($data['image_512'])) {
                $value_11 = $data['image_512'];
            }
            $object->setImage512($value_11);
        } elseif (\array_key_exists('image_512', $data) && null === $data['image_512']) {
            $object->setImage512(null);
        }
        if (\array_key_exists('image_72', $data) && null !== $data['image_72']) {
            $value_12 = $data['image_72'];
            if (\is_string($data['image_72'])) {
                $value_12 = $data['image_72'];
            }
            $object->setImage72($value_12);
        } elseif (\array_key_exists('image_72', $data) && null === $data['image_72']) {
            $object->setImage72(null);
        }
        if (\array_key_exists('image_original', $data) && null !== $data['image_original']) {
            $value_13 = $data['image_original'];
            if (\is_string($data['image_original'])) {
                $value_13 = $data['image_original'];
            }
            $object->setImageOriginal($value_13);
        } elseif (\array_key_exists('image_original', $data) && null === $data['image_original']) {
            $object->setImageOriginal(null);
        }
        if (\array_key_exists('is_app_user', $data) && null !== $data['is_app_user']) {
            $object->setIsAppUser($data['is_app_user']);
        } elseif (\array_key_exists('is_app_user', $data) && null === $data['is_app_user']) {
            $object->setIsAppUser(null);
        }
        if (\array_key_exists('is_custom_image', $data) && null !== $data['is_custom_image']) {
            $object->setIsCustomImage($data['is_custom_image']);
        } elseif (\array_key_exists('is_custom_image', $data) && null === $data['is_custom_image']) {
            $object->setIsCustomImage(null);
        }
        if (\array_key_exists('is_restricted', $data) && null !== $data['is_restricted']) {
            $value_14 = $data['is_restricted'];
            if (\is_bool($data['is_restricted'])) {
                $value_14 = $data['is_restricted'];
            }
            $object->setIsRestricted($value_14);
        } elseif (\array_key_exists('is_restricted', $data) && null === $data['is_restricted']) {
            $object->setIsRestricted(null);
        }
        if (\array_key_exists('is_ultra_restricted', $data) && null !== $data['is_ultra_restricted']) {
            $value_15 = $data['is_ultra_restricted'];
            if (\is_bool($data['is_ultra_restricted'])) {
                $value_15 = $data['is_ultra_restricted'];
            }
            $object->setIsUltraRestricted($value_15);
        } elseif (\array_key_exists('is_ultra_restricted', $data) && null === $data['is_ultra_restricted']) {
            $object->setIsUltraRestricted(null);
        }
        if (\array_key_exists('last_avatar_image_hash', $data) && null !== $data['last_avatar_image_hash']) {
            $object->setLastAvatarImageHash($data['last_avatar_image_hash']);
        } elseif (\array_key_exists('last_avatar_image_hash', $data) && null === $data['last_avatar_image_hash']) {
            $object->setLastAvatarImageHash(null);
        }
        if (\array_key_exists('last_name', $data) && null !== $data['last_name']) {
            $value_16 = $data['last_name'];
            if (\is_string($data['last_name'])) {
                $value_16 = $data['last_name'];
            }
            $object->setLastName($value_16);
        } elseif (\array_key_exists('last_name', $data) && null === $data['last_name']) {
            $object->setLastName(null);
        }
        if (\array_key_exists('memberships_count', $data) && null !== $data['memberships_count']) {
            $object->setMembershipsCount($data['memberships_count']);
        } elseif (\array_key_exists('memberships_count', $data) && null === $data['memberships_count']) {
            $object->setMembershipsCount(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $value_17 = $data['name'];
            if (\is_string($data['name'])) {
                $value_17 = $data['name'];
            }
            $object->setName($value_17);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('phone', $data) && null !== $data['phone']) {
            $object->setPhone($data['phone']);
        } elseif (\array_key_exists('phone', $data) && null === $data['phone']) {
            $object->setPhone(null);
        }
        if (\array_key_exists('pronouns', $data) && null !== $data['pronouns']) {
            $object->setPronouns($data['pronouns']);
        } elseif (\array_key_exists('pronouns', $data) && null === $data['pronouns']) {
            $object->setPronouns(null);
        }
        if (\array_key_exists('real_name', $data) && null !== $data['real_name']) {
            $object->setRealName($data['real_name']);
        } elseif (\array_key_exists('real_name', $data) && null === $data['real_name']) {
            $object->setRealName(null);
        }
        if (\array_key_exists('real_name_normalized', $data) && null !== $data['real_name_normalized']) {
            $object->setRealNameNormalized($data['real_name_normalized']);
        } elseif (\array_key_exists('real_name_normalized', $data) && null === $data['real_name_normalized']) {
            $object->setRealNameNormalized(null);
        }
        if (\array_key_exists('skype', $data) && null !== $data['skype']) {
            $object->setSkype($data['skype']);
        } elseif (\array_key_exists('skype', $data) && null === $data['skype']) {
            $object->setSkype(null);
        }
        if (\array_key_exists('status_default_emoji', $data) && null !== $data['status_default_emoji']) {
            $object->setStatusDefaultEmoji($data['status_default_emoji']);
        } elseif (\array_key_exists('status_default_emoji', $data) && null === $data['status_default_emoji']) {
            $object->setStatusDefaultEmoji(null);
        }
        if (\array_key_exists('status_default_text', $data) && null !== $data['status_default_text']) {
            $object->setStatusDefaultText($data['status_default_text']);
        } elseif (\array_key_exists('status_default_text', $data) && null === $data['status_default_text']) {
            $object->setStatusDefaultText(null);
        }
        if (\array_key_exists('status_default_text_canonical', $data) && null !== $data['status_default_text_canonical']) {
            $value_18 = $data['status_default_text_canonical'];
            if (\is_string($data['status_default_text_canonical'])) {
                $value_18 = $data['status_default_text_canonical'];
            }
            $object->setStatusDefaultTextCanonical($value_18);
        } elseif (\array_key_exists('status_default_text_canonical', $data) && null === $data['status_default_text_canonical']) {
            $object->setStatusDefaultTextCanonical(null);
        }
        if (\array_key_exists('status_emoji', $data) && null !== $data['status_emoji']) {
            $object->setStatusEmoji($data['status_emoji']);
        } elseif (\array_key_exists('status_emoji', $data) && null === $data['status_emoji']) {
            $object->setStatusEmoji(null);
        }
        if (\array_key_exists('status_expiration', $data) && null !== $data['status_expiration']) {
            $object->setStatusExpiration($data['status_expiration']);
        } elseif (\array_key_exists('status_expiration', $data) && null === $data['status_expiration']) {
            $object->setStatusExpiration(null);
        }
        if (\array_key_exists('status_text', $data) && null !== $data['status_text']) {
            $object->setStatusText($data['status_text']);
        } elseif (\array_key_exists('status_text', $data) && null === $data['status_text']) {
            $object->setStatusText(null);
        }
        if (\array_key_exists('status_text_canonical', $data) && null !== $data['status_text_canonical']) {
            $value_19 = $data['status_text_canonical'];
            if (\is_string($data['status_text_canonical'])) {
                $value_19 = $data['status_text_canonical'];
            }
            $object->setStatusTextCanonical($value_19);
        } elseif (\array_key_exists('status_text_canonical', $data) && null === $data['status_text_canonical']) {
            $object->setStatusTextCanonical(null);
        }
        if (\array_key_exists('team', $data) && null !== $data['team']) {
            $object->setTeam($data['team']);
        } elseif (\array_key_exists('team', $data) && null === $data['team']) {
            $object->setTeam(null);
        }
        if (\array_key_exists('title', $data) && null !== $data['title']) {
            $object->setTitle($data['title']);
        } elseif (\array_key_exists('title', $data) && null === $data['title']) {
            $object->setTitle(null);
        }
        if (\array_key_exists('updated', $data) && null !== $data['updated']) {
            $object->setUpdated($data['updated']);
        } elseif (\array_key_exists('updated', $data) && null === $data['updated']) {
            $object->setUpdated(null);
        }
        if (\array_key_exists('user_id', $data) && null !== $data['user_id']) {
            $object->setUserId($data['user_id']);
        } elseif (\array_key_exists('user_id', $data) && null === $data['user_id']) {
            $object->setUserId(null);
        }
        if (\array_key_exists('username', $data) && null !== $data['username']) {
            $value_20 = $data['username'];
            if (\is_string($data['username'])) {
                $value_20 = $data['username'];
            }
            $object->setUsername($value_20);
        } elseif (\array_key_exists('username', $data) && null === $data['username']) {
            $object->setUsername(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('alwaysActive') && null !== $data->getAlwaysActive()) {
            $dataArray['always_active'] = $data->getAlwaysActive();
        }
        if ($data->isInitialized('apiAppId') && null !== $data->getApiAppId()) {
            $dataArray['api_app_id'] = $data->getApiAppId();
        }
        $dataArray['avatar_hash'] = $data->getAvatarHash();
        if ($data->isInitialized('botId') && null !== $data->getBotId()) {
            $dataArray['bot_id'] = $data->getBotId();
        }
        $dataArray['display_name'] = $data->getDisplayName();
        $dataArray['display_name_normalized'] = $data->getDisplayNameNormalized();
        if ($data->isInitialized('email') && null !== $data->getEmail()) {
            $value = $data->getEmail();
            if (\is_string($data->getEmail())) {
                $value = $data->getEmail();
            }
            $dataArray['email'] = $value;
        }
        $value_1 = $data->getFields();
        if (\is_array($data->getFields())) {
            $values = [];
            foreach ($data->getFields() as $value_2) {
                $values[] = $value_2;
            }
            $value_1 = $values;
        } elseif (null !== $data->getFields()) {
            $value_1 = $data->getFields();
        }
        $dataArray['fields'] = $value_1;
        if ($data->isInitialized('firstName') && null !== $data->getFirstName()) {
            $value_3 = $data->getFirstName();
            if (\is_string($data->getFirstName())) {
                $value_3 = $data->getFirstName();
            }
            $dataArray['first_name'] = $value_3;
        }
        if ($data->isInitialized('guestExpirationTs') && null !== $data->getGuestExpirationTs()) {
            $value_4 = $data->getGuestExpirationTs();
            if (\is_int($data->getGuestExpirationTs())) {
                $value_4 = $data->getGuestExpirationTs();
            }
            $dataArray['guest_expiration_ts'] = $value_4;
        }
        if ($data->isInitialized('guestInvitedBy') && null !== $data->getGuestInvitedBy()) {
            $value_5 = $data->getGuestInvitedBy();
            if (\is_string($data->getGuestInvitedBy())) {
                $value_5 = $data->getGuestInvitedBy();
            }
            $dataArray['guest_invited_by'] = $value_5;
        }
        if ($data->isInitialized('image1024') && null !== $data->getImage1024()) {
            $value_6 = $data->getImage1024();
            if (\is_string($data->getImage1024())) {
                $value_6 = $data->getImage1024();
            }
            $dataArray['image_1024'] = $value_6;
        }
        if ($data->isInitialized('image192') && null !== $data->getImage192()) {
            $value_7 = $data->getImage192();
            if (\is_string($data->getImage192())) {
                $value_7 = $data->getImage192();
            }
            $dataArray['image_192'] = $value_7;
        }
        if ($data->isInitialized('image24') && null !== $data->getImage24()) {
            $value_8 = $data->getImage24();
            if (\is_string($data->getImage24())) {
                $value_8 = $data->getImage24();
            }
            $dataArray['image_24'] = $value_8;
        }
        if ($data->isInitialized('image32') && null !== $data->getImage32()) {
            $value_9 = $data->getImage32();
            if (\is_string($data->getImage32())) {
                $value_9 = $data->getImage32();
            }
            $dataArray['image_32'] = $value_9;
        }
        if ($data->isInitialized('image48') && null !== $data->getImage48()) {
            $value_10 = $data->getImage48();
            if (\is_string($data->getImage48())) {
                $value_10 = $data->getImage48();
            }
            $dataArray['image_48'] = $value_10;
        }
        if ($data->isInitialized('image512') && null !== $data->getImage512()) {
            $value_11 = $data->getImage512();
            if (\is_string($data->getImage512())) {
                $value_11 = $data->getImage512();
            }
            $dataArray['image_512'] = $value_11;
        }
        if ($data->isInitialized('image72') && null !== $data->getImage72()) {
            $value_12 = $data->getImage72();
            if (\is_string($data->getImage72())) {
                $value_12 = $data->getImage72();
            }
            $dataArray['image_72'] = $value_12;
        }
        if ($data->isInitialized('imageOriginal') && null !== $data->getImageOriginal()) {
            $value_13 = $data->getImageOriginal();
            if (\is_string($data->getImageOriginal())) {
                $value_13 = $data->getImageOriginal();
            }
            $dataArray['image_original'] = $value_13;
        }
        if ($data->isInitialized('isAppUser') && null !== $data->getIsAppUser()) {
            $dataArray['is_app_user'] = $data->getIsAppUser();
        }
        if ($data->isInitialized('isCustomImage') && null !== $data->getIsCustomImage()) {
            $dataArray['is_custom_image'] = $data->getIsCustomImage();
        }
        if ($data->isInitialized('isRestricted') && null !== $data->getIsRestricted()) {
            $value_14 = $data->getIsRestricted();
            if (\is_bool($data->getIsRestricted())) {
                $value_14 = $data->getIsRestricted();
            }
            $dataArray['is_restricted'] = $value_14;
        }
        if ($data->isInitialized('isUltraRestricted') && null !== $data->getIsUltraRestricted()) {
            $value_15 = $data->getIsUltraRestricted();
            if (\is_bool($data->getIsUltraRestricted())) {
                $value_15 = $data->getIsUltraRestricted();
            }
            $dataArray['is_ultra_restricted'] = $value_15;
        }
        if ($data->isInitialized('lastAvatarImageHash') && null !== $data->getLastAvatarImageHash()) {
            $dataArray['last_avatar_image_hash'] = $data->getLastAvatarImageHash();
        }
        if ($data->isInitialized('lastName') && null !== $data->getLastName()) {
            $value_16 = $data->getLastName();
            if (\is_string($data->getLastName())) {
                $value_16 = $data->getLastName();
            }
            $dataArray['last_name'] = $value_16;
        }
        if ($data->isInitialized('membershipsCount') && null !== $data->getMembershipsCount()) {
            $dataArray['memberships_count'] = $data->getMembershipsCount();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $value_17 = $data->getName();
            if (\is_string($data->getName())) {
                $value_17 = $data->getName();
            }
            $dataArray['name'] = $value_17;
        }
        $dataArray['phone'] = $data->getPhone();
        if ($data->isInitialized('pronouns') && null !== $data->getPronouns()) {
            $dataArray['pronouns'] = $data->getPronouns();
        }
        $dataArray['real_name'] = $data->getRealName();
        $dataArray['real_name_normalized'] = $data->getRealNameNormalized();
        $dataArray['skype'] = $data->getSkype();
        if ($data->isInitialized('statusDefaultEmoji') && null !== $data->getStatusDefaultEmoji()) {
            $dataArray['status_default_emoji'] = $data->getStatusDefaultEmoji();
        }
        if ($data->isInitialized('statusDefaultText') && null !== $data->getStatusDefaultText()) {
            $dataArray['status_default_text'] = $data->getStatusDefaultText();
        }
        if ($data->isInitialized('statusDefaultTextCanonical') && null !== $data->getStatusDefaultTextCanonical()) {
            $value_18 = $data->getStatusDefaultTextCanonical();
            if (\is_string($data->getStatusDefaultTextCanonical())) {
                $value_18 = $data->getStatusDefaultTextCanonical();
            }
            $dataArray['status_default_text_canonical'] = $value_18;
        }
        $dataArray['status_emoji'] = $data->getStatusEmoji();
        if ($data->isInitialized('statusExpiration') && null !== $data->getStatusExpiration()) {
            $dataArray['status_expiration'] = $data->getStatusExpiration();
        }
        $dataArray['status_text'] = $data->getStatusText();
        if ($data->isInitialized('statusTextCanonical') && null !== $data->getStatusTextCanonical()) {
            $value_19 = $data->getStatusTextCanonical();
            if (\is_string($data->getStatusTextCanonical())) {
                $value_19 = $data->getStatusTextCanonical();
            }
            $dataArray['status_text_canonical'] = $value_19;
        }
        if ($data->isInitialized('team') && null !== $data->getTeam()) {
            $dataArray['team'] = $data->getTeam();
        }
        $dataArray['title'] = $data->getTitle();
        if ($data->isInitialized('updated') && null !== $data->getUpdated()) {
            $dataArray['updated'] = $data->getUpdated();
        }
        if ($data->isInitialized('userId') && null !== $data->getUserId()) {
            $dataArray['user_id'] = $data->getUserId();
        }
        if ($data->isInitialized('username') && null !== $data->getUsername()) {
            $value_20 = $data->getUsername();
            if (\is_string($data->getUsername())) {
                $value_20 = $data->getUsername();
            }
            $dataArray['username'] = $value_20;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\ObjsUserProfile::class => false];
    }
}
