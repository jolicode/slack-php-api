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

use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ObjsUserProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

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
            $object->setEmail($data['email']);
        } elseif (\array_key_exists('email', $data) && null === $data['email']) {
            $object->setEmail(null);
        }
        if (\array_key_exists('fields', $data) && null !== $data['fields']) {
            $value = $data['fields'];
            if (\is_array($data['fields']) && $this->isOnlyNumericKeys($data['fields'])) {
                $values = [];
                foreach ($data['fields'] as $value_1) {
                    $values[] = $value_1;
                }
                $value = $values;
            } elseif (isset($data['fields'])) {
                $value = $data['fields'];
            }
            $object->setFields($value);
        } elseif (\array_key_exists('fields', $data) && null === $data['fields']) {
            $object->setFields(null);
        }
        if (\array_key_exists('first_name', $data) && null !== $data['first_name']) {
            $object->setFirstName($data['first_name']);
        } elseif (\array_key_exists('first_name', $data) && null === $data['first_name']) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('guest_expiration_ts', $data) && null !== $data['guest_expiration_ts']) {
            $object->setGuestExpirationTs($data['guest_expiration_ts']);
        } elseif (\array_key_exists('guest_expiration_ts', $data) && null === $data['guest_expiration_ts']) {
            $object->setGuestExpirationTs(null);
        }
        if (\array_key_exists('guest_invited_by', $data) && null !== $data['guest_invited_by']) {
            $object->setGuestInvitedBy($data['guest_invited_by']);
        } elseif (\array_key_exists('guest_invited_by', $data) && null === $data['guest_invited_by']) {
            $object->setGuestInvitedBy(null);
        }
        if (\array_key_exists('image_1024', $data) && null !== $data['image_1024']) {
            $object->setImage1024($data['image_1024']);
        } elseif (\array_key_exists('image_1024', $data) && null === $data['image_1024']) {
            $object->setImage1024(null);
        }
        if (\array_key_exists('image_192', $data) && null !== $data['image_192']) {
            $object->setImage192($data['image_192']);
        } elseif (\array_key_exists('image_192', $data) && null === $data['image_192']) {
            $object->setImage192(null);
        }
        if (\array_key_exists('image_24', $data) && null !== $data['image_24']) {
            $object->setImage24($data['image_24']);
        } elseif (\array_key_exists('image_24', $data) && null === $data['image_24']) {
            $object->setImage24(null);
        }
        if (\array_key_exists('image_32', $data) && null !== $data['image_32']) {
            $object->setImage32($data['image_32']);
        } elseif (\array_key_exists('image_32', $data) && null === $data['image_32']) {
            $object->setImage32(null);
        }
        if (\array_key_exists('image_48', $data) && null !== $data['image_48']) {
            $object->setImage48($data['image_48']);
        } elseif (\array_key_exists('image_48', $data) && null === $data['image_48']) {
            $object->setImage48(null);
        }
        if (\array_key_exists('image_512', $data) && null !== $data['image_512']) {
            $object->setImage512($data['image_512']);
        } elseif (\array_key_exists('image_512', $data) && null === $data['image_512']) {
            $object->setImage512(null);
        }
        if (\array_key_exists('image_72', $data) && null !== $data['image_72']) {
            $object->setImage72($data['image_72']);
        } elseif (\array_key_exists('image_72', $data) && null === $data['image_72']) {
            $object->setImage72(null);
        }
        if (\array_key_exists('image_original', $data) && null !== $data['image_original']) {
            $object->setImageOriginal($data['image_original']);
        } elseif (\array_key_exists('image_original', $data) && null === $data['image_original']) {
            $object->setImageOriginal(null);
        }
        if (\array_key_exists('is_custom_image', $data) && null !== $data['is_custom_image']) {
            $object->setIsCustomImage($data['is_custom_image']);
        } elseif (\array_key_exists('is_custom_image', $data) && null === $data['is_custom_image']) {
            $object->setIsCustomImage(null);
        }
        if (\array_key_exists('last_name', $data) && null !== $data['last_name']) {
            $object->setLastName($data['last_name']);
        } elseif (\array_key_exists('last_name', $data) && null === $data['last_name']) {
            $object->setLastName(null);
        }
        if (\array_key_exists('phone', $data) && null !== $data['phone']) {
            $object->setPhone($data['phone']);
        } elseif (\array_key_exists('phone', $data) && null === $data['phone']) {
            $object->setPhone(null);
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
            $object->setStatusTextCanonical($data['status_text_canonical']);
        } elseif (\array_key_exists('status_text_canonical', $data) && null === $data['status_text_canonical']) {
            $object->setStatusTextCanonical(null);
        }
        if (\array_key_exists('team', $data) && null !== $data['team']) {
            $object->setTeam($data['team']);
        } elseif (\array_key_exists('team', $data) && null === $data['team']) {
            $object->setTeam(null);
        }
        if (\array_key_exists('teams', $data) && null !== $data['teams']) {
            $object->setTeams($data['teams']);
        } elseif (\array_key_exists('teams', $data) && null === $data['teams']) {
            $object->setTeams(null);
        }
        if (\array_key_exists('title', $data) && null !== $data['title']) {
            $object->setTitle($data['title']);
        } elseif (\array_key_exists('title', $data) && null === $data['title']) {
            $object->setTitle(null);
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
        if (null !== $object->getAvatarHash()) {
            $data['avatar_hash'] = $object->getAvatarHash();
        }
        if (null !== $object->getBotId()) {
            $data['bot_id'] = $object->getBotId();
        }
        if (null !== $object->getDisplayName()) {
            $data['display_name'] = $object->getDisplayName();
        }
        if (null !== $object->getDisplayNameNormalized()) {
            $data['display_name_normalized'] = $object->getDisplayNameNormalized();
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getFields()) {
            $value = $object->getFields();
            if (\is_array($object->getFields())) {
                $values = [];
                foreach ($object->getFields() as $value_1) {
                    $values[] = $value_1;
                }
                $value = $values;
            } elseif (null !== $object->getFields()) {
                $value = $object->getFields();
            }
            $data['fields'] = $value;
        }
        if (null !== $object->getFirstName()) {
            $data['first_name'] = $object->getFirstName();
        }
        if (null !== $object->getGuestExpirationTs()) {
            $data['guest_expiration_ts'] = $object->getGuestExpirationTs();
        }
        if (null !== $object->getGuestInvitedBy()) {
            $data['guest_invited_by'] = $object->getGuestInvitedBy();
        }
        if (null !== $object->getImage1024()) {
            $data['image_1024'] = $object->getImage1024();
        }
        if (null !== $object->getImage192()) {
            $data['image_192'] = $object->getImage192();
        }
        if (null !== $object->getImage24()) {
            $data['image_24'] = $object->getImage24();
        }
        if (null !== $object->getImage32()) {
            $data['image_32'] = $object->getImage32();
        }
        if (null !== $object->getImage48()) {
            $data['image_48'] = $object->getImage48();
        }
        if (null !== $object->getImage512()) {
            $data['image_512'] = $object->getImage512();
        }
        if (null !== $object->getImage72()) {
            $data['image_72'] = $object->getImage72();
        }
        if (null !== $object->getImageOriginal()) {
            $data['image_original'] = $object->getImageOriginal();
        }
        if (null !== $object->getIsCustomImage()) {
            $data['is_custom_image'] = $object->getIsCustomImage();
        }
        if (null !== $object->getLastName()) {
            $data['last_name'] = $object->getLastName();
        }
        if (null !== $object->getPhone()) {
            $data['phone'] = $object->getPhone();
        }
        if (null !== $object->getRealName()) {
            $data['real_name'] = $object->getRealName();
        }
        if (null !== $object->getRealNameNormalized()) {
            $data['real_name_normalized'] = $object->getRealNameNormalized();
        }
        if (null !== $object->getSkype()) {
            $data['skype'] = $object->getSkype();
        }
        if (null !== $object->getStatusEmoji()) {
            $data['status_emoji'] = $object->getStatusEmoji();
        }
        if (null !== $object->getStatusExpiration()) {
            $data['status_expiration'] = $object->getStatusExpiration();
        }
        if (null !== $object->getStatusText()) {
            $data['status_text'] = $object->getStatusText();
        }
        if (null !== $object->getStatusTextCanonical()) {
            $data['status_text_canonical'] = $object->getStatusTextCanonical();
        }
        if (null !== $object->getTeam()) {
            $data['team'] = $object->getTeam();
        }
        if (null !== $object->getTeams()) {
            $data['teams'] = $object->getTeams();
        }
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }

        return $data;
    }
}
