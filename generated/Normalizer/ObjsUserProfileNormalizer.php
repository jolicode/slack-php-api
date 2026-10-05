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
        $object = new \JoliCode\Slack\Api\Model\ObjsUserProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('always_active', $data) && \is_int($data['always_active'])) {
            $data['always_active'] = (bool) $data['always_active'];
        }
        if (\array_key_exists('is_app_user', $data) && \is_int($data['is_app_user'])) {
            $data['is_app_user'] = (bool) $data['is_app_user'];
        }
        if (\array_key_exists('is_custom_image', $data) && \is_int($data['is_custom_image'])) {
            $data['is_custom_image'] = (bool) $data['is_custom_image'];
        }
        if (\array_key_exists('always_active', $data) && null !== $data['always_active']) {
            $object->alwaysActive = $data['always_active'];
        } elseif (\array_key_exists('always_active', $data)) {
            $object->alwaysActive = null;
        }
        if (\array_key_exists('api_app_id', $data) && null !== $data['api_app_id']) {
            $object->apiAppId = $data['api_app_id'];
        } elseif (\array_key_exists('api_app_id', $data)) {
            $object->apiAppId = null;
        }
        if (\array_key_exists('avatar_hash', $data) && null !== $data['avatar_hash']) {
            $object->avatarHash = $data['avatar_hash'];
        } elseif (\array_key_exists('avatar_hash', $data)) {
            $object->avatarHash = null;
        }
        if (\array_key_exists('bot_id', $data) && null !== $data['bot_id']) {
            $object->botId = $data['bot_id'];
        } elseif (\array_key_exists('bot_id', $data)) {
            $object->botId = null;
        }
        if (\array_key_exists('display_name', $data) && null !== $data['display_name']) {
            $object->displayName = $data['display_name'];
        } elseif (\array_key_exists('display_name', $data)) {
            $object->displayName = null;
        }
        if (\array_key_exists('display_name_normalized', $data) && null !== $data['display_name_normalized']) {
            $object->displayNameNormalized = $data['display_name_normalized'];
        } elseif (\array_key_exists('display_name_normalized', $data)) {
            $object->displayNameNormalized = null;
        }
        if (\array_key_exists('email', $data) && null !== $data['email']) {
            $value = $data['email'];
            if (\is_string($data['email'])) {
                $value = $data['email'];
            }
            $object->email = $value;
        } elseif (\array_key_exists('email', $data)) {
            $object->email = null;
        }
        if (\array_key_exists('fields', $data) && null !== $data['fields']) {
            $values = [];
            foreach ($data['fields'] as $value_1) {
                $values[] = $value_1;
            }
            $object->fields = $values;
        } elseif (\array_key_exists('fields', $data)) {
            $object->fields = null;
        }
        if (\array_key_exists('first_name', $data) && null !== $data['first_name']) {
            $value_2 = $data['first_name'];
            if (\is_string($data['first_name'])) {
                $value_2 = $data['first_name'];
            }
            $object->firstName = $value_2;
        } elseif (\array_key_exists('first_name', $data)) {
            $object->firstName = null;
        }
        if (\array_key_exists('guest_expiration_ts', $data) && null !== $data['guest_expiration_ts']) {
            $value_3 = $data['guest_expiration_ts'];
            if (\is_int($data['guest_expiration_ts'])) {
                $value_3 = $data['guest_expiration_ts'];
            }
            $object->guestExpirationTs = $value_3;
        } elseif (\array_key_exists('guest_expiration_ts', $data)) {
            $object->guestExpirationTs = null;
        }
        if (\array_key_exists('guest_invited_by', $data) && null !== $data['guest_invited_by']) {
            $value_4 = $data['guest_invited_by'];
            if (\is_string($data['guest_invited_by'])) {
                $value_4 = $data['guest_invited_by'];
            }
            $object->guestInvitedBy = $value_4;
        } elseif (\array_key_exists('guest_invited_by', $data)) {
            $object->guestInvitedBy = null;
        }
        if (\array_key_exists('image_1024', $data) && null !== $data['image_1024']) {
            $value_5 = $data['image_1024'];
            if (\is_string($data['image_1024'])) {
                $value_5 = $data['image_1024'];
            }
            $object->image1024 = $value_5;
        } elseif (\array_key_exists('image_1024', $data)) {
            $object->image1024 = null;
        }
        if (\array_key_exists('image_192', $data) && null !== $data['image_192']) {
            $value_6 = $data['image_192'];
            if (\is_string($data['image_192'])) {
                $value_6 = $data['image_192'];
            }
            $object->image192 = $value_6;
        } elseif (\array_key_exists('image_192', $data)) {
            $object->image192 = null;
        }
        if (\array_key_exists('image_24', $data) && null !== $data['image_24']) {
            $value_7 = $data['image_24'];
            if (\is_string($data['image_24'])) {
                $value_7 = $data['image_24'];
            }
            $object->image24 = $value_7;
        } elseif (\array_key_exists('image_24', $data)) {
            $object->image24 = null;
        }
        if (\array_key_exists('image_32', $data) && null !== $data['image_32']) {
            $value_8 = $data['image_32'];
            if (\is_string($data['image_32'])) {
                $value_8 = $data['image_32'];
            }
            $object->image32 = $value_8;
        } elseif (\array_key_exists('image_32', $data)) {
            $object->image32 = null;
        }
        if (\array_key_exists('image_48', $data) && null !== $data['image_48']) {
            $value_9 = $data['image_48'];
            if (\is_string($data['image_48'])) {
                $value_9 = $data['image_48'];
            }
            $object->image48 = $value_9;
        } elseif (\array_key_exists('image_48', $data)) {
            $object->image48 = null;
        }
        if (\array_key_exists('image_512', $data) && null !== $data['image_512']) {
            $value_10 = $data['image_512'];
            if (\is_string($data['image_512'])) {
                $value_10 = $data['image_512'];
            }
            $object->image512 = $value_10;
        } elseif (\array_key_exists('image_512', $data)) {
            $object->image512 = null;
        }
        if (\array_key_exists('image_72', $data) && null !== $data['image_72']) {
            $value_11 = $data['image_72'];
            if (\is_string($data['image_72'])) {
                $value_11 = $data['image_72'];
            }
            $object->image72 = $value_11;
        } elseif (\array_key_exists('image_72', $data)) {
            $object->image72 = null;
        }
        if (\array_key_exists('image_original', $data) && null !== $data['image_original']) {
            $value_12 = $data['image_original'];
            if (\is_string($data['image_original'])) {
                $value_12 = $data['image_original'];
            }
            $object->imageOriginal = $value_12;
        } elseif (\array_key_exists('image_original', $data)) {
            $object->imageOriginal = null;
        }
        if (\array_key_exists('is_app_user', $data) && null !== $data['is_app_user']) {
            $object->isAppUser = $data['is_app_user'];
        } elseif (\array_key_exists('is_app_user', $data)) {
            $object->isAppUser = null;
        }
        if (\array_key_exists('is_custom_image', $data) && null !== $data['is_custom_image']) {
            $object->isCustomImage = $data['is_custom_image'];
        } elseif (\array_key_exists('is_custom_image', $data)) {
            $object->isCustomImage = null;
        }
        if (\array_key_exists('is_restricted', $data) && null !== $data['is_restricted']) {
            $value_13 = $data['is_restricted'];
            if (\is_bool($data['is_restricted'])) {
                $value_13 = $data['is_restricted'];
            }
            $object->isRestricted = $value_13;
        } elseif (\array_key_exists('is_restricted', $data)) {
            $object->isRestricted = null;
        }
        if (\array_key_exists('is_ultra_restricted', $data) && null !== $data['is_ultra_restricted']) {
            $value_14 = $data['is_ultra_restricted'];
            if (\is_bool($data['is_ultra_restricted'])) {
                $value_14 = $data['is_ultra_restricted'];
            }
            $object->isUltraRestricted = $value_14;
        } elseif (\array_key_exists('is_ultra_restricted', $data)) {
            $object->isUltraRestricted = null;
        }
        if (\array_key_exists('last_avatar_image_hash', $data) && null !== $data['last_avatar_image_hash']) {
            $object->lastAvatarImageHash = $data['last_avatar_image_hash'];
        } elseif (\array_key_exists('last_avatar_image_hash', $data)) {
            $object->lastAvatarImageHash = null;
        }
        if (\array_key_exists('last_name', $data) && null !== $data['last_name']) {
            $value_15 = $data['last_name'];
            if (\is_string($data['last_name'])) {
                $value_15 = $data['last_name'];
            }
            $object->lastName = $value_15;
        } elseif (\array_key_exists('last_name', $data)) {
            $object->lastName = null;
        }
        if (\array_key_exists('memberships_count', $data) && null !== $data['memberships_count']) {
            $object->membershipsCount = $data['memberships_count'];
        } elseif (\array_key_exists('memberships_count', $data)) {
            $object->membershipsCount = null;
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $value_16 = $data['name'];
            if (\is_string($data['name'])) {
                $value_16 = $data['name'];
            }
            $object->name = $value_16;
        } elseif (\array_key_exists('name', $data)) {
            $object->name = null;
        }
        if (\array_key_exists('phone', $data) && null !== $data['phone']) {
            $object->phone = $data['phone'];
        } elseif (\array_key_exists('phone', $data)) {
            $object->phone = null;
        }
        if (\array_key_exists('pronouns', $data) && null !== $data['pronouns']) {
            $object->pronouns = $data['pronouns'];
        } elseif (\array_key_exists('pronouns', $data)) {
            $object->pronouns = null;
        }
        if (\array_key_exists('real_name', $data) && null !== $data['real_name']) {
            $object->realName = $data['real_name'];
        } elseif (\array_key_exists('real_name', $data)) {
            $object->realName = null;
        }
        if (\array_key_exists('real_name_normalized', $data) && null !== $data['real_name_normalized']) {
            $object->realNameNormalized = $data['real_name_normalized'];
        } elseif (\array_key_exists('real_name_normalized', $data)) {
            $object->realNameNormalized = null;
        }
        if (\array_key_exists('skype', $data) && null !== $data['skype']) {
            $object->skype = $data['skype'];
        } elseif (\array_key_exists('skype', $data)) {
            $object->skype = null;
        }
        if (\array_key_exists('status_default_emoji', $data) && null !== $data['status_default_emoji']) {
            $object->statusDefaultEmoji = $data['status_default_emoji'];
        } elseif (\array_key_exists('status_default_emoji', $data)) {
            $object->statusDefaultEmoji = null;
        }
        if (\array_key_exists('status_default_text', $data) && null !== $data['status_default_text']) {
            $object->statusDefaultText = $data['status_default_text'];
        } elseif (\array_key_exists('status_default_text', $data)) {
            $object->statusDefaultText = null;
        }
        if (\array_key_exists('status_default_text_canonical', $data) && null !== $data['status_default_text_canonical']) {
            $value_17 = $data['status_default_text_canonical'];
            if (\is_string($data['status_default_text_canonical'])) {
                $value_17 = $data['status_default_text_canonical'];
            }
            $object->statusDefaultTextCanonical = $value_17;
        } elseif (\array_key_exists('status_default_text_canonical', $data)) {
            $object->statusDefaultTextCanonical = null;
        }
        if (\array_key_exists('status_emoji', $data) && null !== $data['status_emoji']) {
            $object->statusEmoji = $data['status_emoji'];
        } elseif (\array_key_exists('status_emoji', $data)) {
            $object->statusEmoji = null;
        }
        if (\array_key_exists('status_expiration', $data) && null !== $data['status_expiration']) {
            $object->statusExpiration = $data['status_expiration'];
        } elseif (\array_key_exists('status_expiration', $data)) {
            $object->statusExpiration = null;
        }
        if (\array_key_exists('status_text', $data) && null !== $data['status_text']) {
            $object->statusText = $data['status_text'];
        } elseif (\array_key_exists('status_text', $data)) {
            $object->statusText = null;
        }
        if (\array_key_exists('status_text_canonical', $data) && null !== $data['status_text_canonical']) {
            $value_18 = $data['status_text_canonical'];
            if (\is_string($data['status_text_canonical'])) {
                $value_18 = $data['status_text_canonical'];
            }
            $object->statusTextCanonical = $value_18;
        } elseif (\array_key_exists('status_text_canonical', $data)) {
            $object->statusTextCanonical = null;
        }
        if (\array_key_exists('team', $data) && null !== $data['team']) {
            $object->team = $data['team'];
        } elseif (\array_key_exists('team', $data)) {
            $object->team = null;
        }
        if (\array_key_exists('title', $data) && null !== $data['title']) {
            $object->title = $data['title'];
        } elseif (\array_key_exists('title', $data)) {
            $object->title = null;
        }
        if (\array_key_exists('updated', $data) && null !== $data['updated']) {
            $object->updated = $data['updated'];
        } elseif (\array_key_exists('updated', $data)) {
            $object->updated = null;
        }
        if (\array_key_exists('user_id', $data) && null !== $data['user_id']) {
            $object->userId = $data['user_id'];
        } elseif (\array_key_exists('user_id', $data)) {
            $object->userId = null;
        }
        if (\array_key_exists('username', $data) && null !== $data['username']) {
            $value_19 = $data['username'];
            if (\is_string($data['username'])) {
                $value_19 = $data['username'];
            }
            $object->username = $value_19;
        } elseif (\array_key_exists('username', $data)) {
            $object->username = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('alwaysActive', get_object_vars($data)) && null !== ($data->alwaysActive ?? null)) {
            $dataArray['always_active'] = $data->alwaysActive;
        }
        if (\array_key_exists('apiAppId', get_object_vars($data)) && null !== ($data->apiAppId ?? null)) {
            $dataArray['api_app_id'] = $data->apiAppId;
        }
        $dataArray['avatar_hash'] = $data->avatarHash;
        if (\array_key_exists('botId', get_object_vars($data)) && null !== ($data->botId ?? null)) {
            $dataArray['bot_id'] = $data->botId;
        }
        $dataArray['display_name'] = $data->displayName;
        $dataArray['display_name_normalized'] = $data->displayNameNormalized;
        if (\array_key_exists('email', get_object_vars($data)) && null !== ($data->email ?? null)) {
            $value = $data->email;
            if (\is_string($data->email)) {
                $value = $data->email;
            }
            $dataArray['email'] = $value;
        }
        $values = [];
        foreach ($data->fields as $value_1) {
            $values[] = $value_1;
        }
        $dataArray['fields'] = $values;
        if (\array_key_exists('firstName', get_object_vars($data)) && null !== ($data->firstName ?? null)) {
            $value_2 = $data->firstName;
            if (\is_string($data->firstName)) {
                $value_2 = $data->firstName;
            }
            $dataArray['first_name'] = $value_2;
        }
        if (\array_key_exists('guestExpirationTs', get_object_vars($data)) && null !== ($data->guestExpirationTs ?? null)) {
            $value_3 = $data->guestExpirationTs;
            if (\is_int($data->guestExpirationTs)) {
                $value_3 = $data->guestExpirationTs;
            }
            $dataArray['guest_expiration_ts'] = $value_3;
        }
        if (\array_key_exists('guestInvitedBy', get_object_vars($data)) && null !== ($data->guestInvitedBy ?? null)) {
            $value_4 = $data->guestInvitedBy;
            if (\is_string($data->guestInvitedBy)) {
                $value_4 = $data->guestInvitedBy;
            }
            $dataArray['guest_invited_by'] = $value_4;
        }
        if (\array_key_exists('image1024', get_object_vars($data)) && null !== ($data->image1024 ?? null)) {
            $value_5 = $data->image1024;
            if (\is_string($data->image1024)) {
                $value_5 = $data->image1024;
            }
            $dataArray['image_1024'] = $value_5;
        }
        if (\array_key_exists('image192', get_object_vars($data)) && null !== ($data->image192 ?? null)) {
            $value_6 = $data->image192;
            if (\is_string($data->image192)) {
                $value_6 = $data->image192;
            }
            $dataArray['image_192'] = $value_6;
        }
        if (\array_key_exists('image24', get_object_vars($data)) && null !== ($data->image24 ?? null)) {
            $value_7 = $data->image24;
            if (\is_string($data->image24)) {
                $value_7 = $data->image24;
            }
            $dataArray['image_24'] = $value_7;
        }
        if (\array_key_exists('image32', get_object_vars($data)) && null !== ($data->image32 ?? null)) {
            $value_8 = $data->image32;
            if (\is_string($data->image32)) {
                $value_8 = $data->image32;
            }
            $dataArray['image_32'] = $value_8;
        }
        if (\array_key_exists('image48', get_object_vars($data)) && null !== ($data->image48 ?? null)) {
            $value_9 = $data->image48;
            if (\is_string($data->image48)) {
                $value_9 = $data->image48;
            }
            $dataArray['image_48'] = $value_9;
        }
        if (\array_key_exists('image512', get_object_vars($data)) && null !== ($data->image512 ?? null)) {
            $value_10 = $data->image512;
            if (\is_string($data->image512)) {
                $value_10 = $data->image512;
            }
            $dataArray['image_512'] = $value_10;
        }
        if (\array_key_exists('image72', get_object_vars($data)) && null !== ($data->image72 ?? null)) {
            $value_11 = $data->image72;
            if (\is_string($data->image72)) {
                $value_11 = $data->image72;
            }
            $dataArray['image_72'] = $value_11;
        }
        if (\array_key_exists('imageOriginal', get_object_vars($data)) && null !== ($data->imageOriginal ?? null)) {
            $value_12 = $data->imageOriginal;
            if (\is_string($data->imageOriginal)) {
                $value_12 = $data->imageOriginal;
            }
            $dataArray['image_original'] = $value_12;
        }
        if (\array_key_exists('isAppUser', get_object_vars($data)) && null !== ($data->isAppUser ?? null)) {
            $dataArray['is_app_user'] = $data->isAppUser;
        }
        if (\array_key_exists('isCustomImage', get_object_vars($data)) && null !== ($data->isCustomImage ?? null)) {
            $dataArray['is_custom_image'] = $data->isCustomImage;
        }
        if (\array_key_exists('isRestricted', get_object_vars($data)) && null !== ($data->isRestricted ?? null)) {
            $value_13 = $data->isRestricted;
            if (\is_bool($data->isRestricted)) {
                $value_13 = $data->isRestricted;
            }
            $dataArray['is_restricted'] = $value_13;
        }
        if (\array_key_exists('isUltraRestricted', get_object_vars($data)) && null !== ($data->isUltraRestricted ?? null)) {
            $value_14 = $data->isUltraRestricted;
            if (\is_bool($data->isUltraRestricted)) {
                $value_14 = $data->isUltraRestricted;
            }
            $dataArray['is_ultra_restricted'] = $value_14;
        }
        if (\array_key_exists('lastAvatarImageHash', get_object_vars($data)) && null !== ($data->lastAvatarImageHash ?? null)) {
            $dataArray['last_avatar_image_hash'] = $data->lastAvatarImageHash;
        }
        if (\array_key_exists('lastName', get_object_vars($data)) && null !== ($data->lastName ?? null)) {
            $value_15 = $data->lastName;
            if (\is_string($data->lastName)) {
                $value_15 = $data->lastName;
            }
            $dataArray['last_name'] = $value_15;
        }
        if (\array_key_exists('membershipsCount', get_object_vars($data)) && null !== ($data->membershipsCount ?? null)) {
            $dataArray['memberships_count'] = $data->membershipsCount;
        }
        if (\array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $value_16 = $data->name;
            if (\is_string($data->name)) {
                $value_16 = $data->name;
            }
            $dataArray['name'] = $value_16;
        }
        $dataArray['phone'] = $data->phone;
        if (\array_key_exists('pronouns', get_object_vars($data)) && null !== ($data->pronouns ?? null)) {
            $dataArray['pronouns'] = $data->pronouns;
        }
        $dataArray['real_name'] = $data->realName;
        $dataArray['real_name_normalized'] = $data->realNameNormalized;
        $dataArray['skype'] = $data->skype;
        if (\array_key_exists('statusDefaultEmoji', get_object_vars($data)) && null !== ($data->statusDefaultEmoji ?? null)) {
            $dataArray['status_default_emoji'] = $data->statusDefaultEmoji;
        }
        if (\array_key_exists('statusDefaultText', get_object_vars($data)) && null !== ($data->statusDefaultText ?? null)) {
            $dataArray['status_default_text'] = $data->statusDefaultText;
        }
        if (\array_key_exists('statusDefaultTextCanonical', get_object_vars($data)) && null !== ($data->statusDefaultTextCanonical ?? null)) {
            $value_17 = $data->statusDefaultTextCanonical;
            if (\is_string($data->statusDefaultTextCanonical)) {
                $value_17 = $data->statusDefaultTextCanonical;
            }
            $dataArray['status_default_text_canonical'] = $value_17;
        }
        $dataArray['status_emoji'] = $data->statusEmoji;
        if (\array_key_exists('statusExpiration', get_object_vars($data)) && null !== ($data->statusExpiration ?? null)) {
            $dataArray['status_expiration'] = $data->statusExpiration;
        }
        $dataArray['status_text'] = $data->statusText;
        if (\array_key_exists('statusTextCanonical', get_object_vars($data)) && null !== ($data->statusTextCanonical ?? null)) {
            $value_18 = $data->statusTextCanonical;
            if (\is_string($data->statusTextCanonical)) {
                $value_18 = $data->statusTextCanonical;
            }
            $dataArray['status_text_canonical'] = $value_18;
        }
        if (\array_key_exists('team', get_object_vars($data)) && null !== ($data->team ?? null)) {
            $dataArray['team'] = $data->team;
        }
        $dataArray['title'] = $data->title;
        if (\array_key_exists('updated', get_object_vars($data)) && null !== ($data->updated ?? null)) {
            $dataArray['updated'] = $data->updated;
        }
        if (\array_key_exists('userId', get_object_vars($data)) && null !== ($data->userId ?? null)) {
            $dataArray['user_id'] = $data->userId;
        }
        if (\array_key_exists('username', get_object_vars($data)) && null !== ($data->username ?? null)) {
            $value_19 = $data->username;
            if (\is_string($data->username)) {
                $value_19 = $data->username;
            }
            $dataArray['username'] = $value_19;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\ObjsUserProfile::class => false];
    }
}
