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

class ObjsUserProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ObjsUserProfile' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsUserProfile' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsUserProfile();
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

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getAlwaysActive()) {
            $data['always_active'] = $object->getAlwaysActive();
        }
        if (null !== $object->getApiAppId()) {
            $data['api_app_id'] = $object->getApiAppId();
        }
        $data['avatar_hash'] = $object->getAvatarHash();
        if (null !== $object->getBotId()) {
            $data['bot_id'] = $object->getBotId();
        }
        $data['display_name'] = $object->getDisplayName();
        $data['display_name_normalized'] = $object->getDisplayNameNormalized();
        if (null !== $object->getEmail()) {
            $value = $object->getEmail();
            if (\is_string($object->getEmail())) {
                $value = $object->getEmail();
            }
            $data['email'] = $value;
        }
        $value_1 = $object->getFields();
        if (\is_array($object->getFields())) {
            $values = [];
            foreach ($object->getFields() as $value_2) {
                $values[] = $value_2;
            }
            $value_1 = $values;
        } elseif (null !== $object->getFields()) {
            $value_1 = $object->getFields();
        }
        $data['fields'] = $value_1;
        if (null !== $object->getFirstName()) {
            $value_3 = $object->getFirstName();
            if (\is_string($object->getFirstName())) {
                $value_3 = $object->getFirstName();
            }
            $data['first_name'] = $value_3;
        }
        if (null !== $object->getGuestExpirationTs()) {
            $value_4 = $object->getGuestExpirationTs();
            if (\is_int($object->getGuestExpirationTs())) {
                $value_4 = $object->getGuestExpirationTs();
            }
            $data['guest_expiration_ts'] = $value_4;
        }
        if (null !== $object->getGuestInvitedBy()) {
            $value_5 = $object->getGuestInvitedBy();
            if (\is_string($object->getGuestInvitedBy())) {
                $value_5 = $object->getGuestInvitedBy();
            }
            $data['guest_invited_by'] = $value_5;
        }
        if (null !== $object->getImage1024()) {
            $value_6 = $object->getImage1024();
            if (\is_string($object->getImage1024())) {
                $value_6 = $object->getImage1024();
            }
            $data['image_1024'] = $value_6;
        }
        if (null !== $object->getImage192()) {
            $value_7 = $object->getImage192();
            if (\is_string($object->getImage192())) {
                $value_7 = $object->getImage192();
            }
            $data['image_192'] = $value_7;
        }
        if (null !== $object->getImage24()) {
            $value_8 = $object->getImage24();
            if (\is_string($object->getImage24())) {
                $value_8 = $object->getImage24();
            }
            $data['image_24'] = $value_8;
        }
        if (null !== $object->getImage32()) {
            $value_9 = $object->getImage32();
            if (\is_string($object->getImage32())) {
                $value_9 = $object->getImage32();
            }
            $data['image_32'] = $value_9;
        }
        if (null !== $object->getImage48()) {
            $value_10 = $object->getImage48();
            if (\is_string($object->getImage48())) {
                $value_10 = $object->getImage48();
            }
            $data['image_48'] = $value_10;
        }
        if (null !== $object->getImage512()) {
            $value_11 = $object->getImage512();
            if (\is_string($object->getImage512())) {
                $value_11 = $object->getImage512();
            }
            $data['image_512'] = $value_11;
        }
        if (null !== $object->getImage72()) {
            $value_12 = $object->getImage72();
            if (\is_string($object->getImage72())) {
                $value_12 = $object->getImage72();
            }
            $data['image_72'] = $value_12;
        }
        if (null !== $object->getImageOriginal()) {
            $value_13 = $object->getImageOriginal();
            if (\is_string($object->getImageOriginal())) {
                $value_13 = $object->getImageOriginal();
            }
            $data['image_original'] = $value_13;
        }
        if (null !== $object->getIsAppUser()) {
            $data['is_app_user'] = $object->getIsAppUser();
        }
        if (null !== $object->getIsCustomImage()) {
            $data['is_custom_image'] = $object->getIsCustomImage();
        }
        if (null !== $object->getIsRestricted()) {
            $value_14 = $object->getIsRestricted();
            if (\is_bool($object->getIsRestricted())) {
                $value_14 = $object->getIsRestricted();
            }
            $data['is_restricted'] = $value_14;
        }
        if (null !== $object->getIsUltraRestricted()) {
            $value_15 = $object->getIsUltraRestricted();
            if (\is_bool($object->getIsUltraRestricted())) {
                $value_15 = $object->getIsUltraRestricted();
            }
            $data['is_ultra_restricted'] = $value_15;
        }
        if (null !== $object->getLastAvatarImageHash()) {
            $data['last_avatar_image_hash'] = $object->getLastAvatarImageHash();
        }
        if (null !== $object->getLastName()) {
            $value_16 = $object->getLastName();
            if (\is_string($object->getLastName())) {
                $value_16 = $object->getLastName();
            }
            $data['last_name'] = $value_16;
        }
        if (null !== $object->getMembershipsCount()) {
            $data['memberships_count'] = $object->getMembershipsCount();
        }
        if (null !== $object->getName()) {
            $value_17 = $object->getName();
            if (\is_string($object->getName())) {
                $value_17 = $object->getName();
            }
            $data['name'] = $value_17;
        }
        $data['phone'] = $object->getPhone();
        if (null !== $object->getPronouns()) {
            $data['pronouns'] = $object->getPronouns();
        }
        $data['real_name'] = $object->getRealName();
        $data['real_name_normalized'] = $object->getRealNameNormalized();
        $data['skype'] = $object->getSkype();
        if (null !== $object->getStatusDefaultEmoji()) {
            $data['status_default_emoji'] = $object->getStatusDefaultEmoji();
        }
        if (null !== $object->getStatusDefaultText()) {
            $data['status_default_text'] = $object->getStatusDefaultText();
        }
        if (null !== $object->getStatusDefaultTextCanonical()) {
            $value_18 = $object->getStatusDefaultTextCanonical();
            if (\is_string($object->getStatusDefaultTextCanonical())) {
                $value_18 = $object->getStatusDefaultTextCanonical();
            }
            $data['status_default_text_canonical'] = $value_18;
        }
        $data['status_emoji'] = $object->getStatusEmoji();
        if (null !== $object->getStatusExpiration()) {
            $data['status_expiration'] = $object->getStatusExpiration();
        }
        $data['status_text'] = $object->getStatusText();
        if (null !== $object->getStatusTextCanonical()) {
            $value_19 = $object->getStatusTextCanonical();
            if (\is_string($object->getStatusTextCanonical())) {
                $value_19 = $object->getStatusTextCanonical();
            }
            $data['status_text_canonical'] = $value_19;
        }
        if (null !== $object->getTeam()) {
            $data['team'] = $object->getTeam();
        }
        $data['title'] = $object->getTitle();
        if (null !== $object->getUpdated()) {
            $data['updated'] = $object->getUpdated();
        }
        if (null !== $object->getUserId()) {
            $data['user_id'] = $object->getUserId();
        }
        if (null !== $object->getUsername()) {
            $value_20 = $object->getUsername();
            if (\is_string($object->getUsername())) {
                $value_20 = $object->getUsername();
            }
            $data['username'] = $value_20;
        }

        return $data;
    }
}
