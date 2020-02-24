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
        if (!\is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsUserProfile();
        if (property_exists($data, 'always_active') && null !== $data->{'always_active'}) {
            $object->setAlwaysActive($data->{'always_active'});
        } elseif (property_exists($data, 'always_active') && null === $data->{'always_active'}) {
            $object->setAlwaysActive(null);
        }
        if (property_exists($data, 'api_app_id') && null !== $data->{'api_app_id'}) {
            $object->setApiAppId($data->{'api_app_id'});
        } elseif (property_exists($data, 'api_app_id') && null === $data->{'api_app_id'}) {
            $object->setApiAppId(null);
        }
        if (property_exists($data, 'avatar_hash') && null !== $data->{'avatar_hash'}) {
            $object->setAvatarHash($data->{'avatar_hash'});
        } elseif (property_exists($data, 'avatar_hash') && null === $data->{'avatar_hash'}) {
            $object->setAvatarHash(null);
        }
        if (property_exists($data, 'bot_id') && null !== $data->{'bot_id'}) {
            $object->setBotId($data->{'bot_id'});
        } elseif (property_exists($data, 'bot_id') && null === $data->{'bot_id'}) {
            $object->setBotId(null);
        }
        if (property_exists($data, 'display_name') && null !== $data->{'display_name'}) {
            $object->setDisplayName($data->{'display_name'});
        } elseif (property_exists($data, 'display_name') && null === $data->{'display_name'}) {
            $object->setDisplayName(null);
        }
        if (property_exists($data, 'display_name_normalized') && null !== $data->{'display_name_normalized'}) {
            $object->setDisplayNameNormalized($data->{'display_name_normalized'});
        } elseif (property_exists($data, 'display_name_normalized') && null === $data->{'display_name_normalized'}) {
            $object->setDisplayNameNormalized(null);
        }
        if (property_exists($data, 'email') && null !== $data->{'email'}) {
            $object->setEmail($data->{'email'});
        } elseif (property_exists($data, 'email') && null === $data->{'email'}) {
            $object->setEmail(null);
        }
        if (property_exists($data, 'fields') && null !== $data->{'fields'}) {
            $value = $data->{'fields'};
            if (\is_array($data->{'fields'})) {
                $values = [];
                foreach ($data->{'fields'} as $value_1) {
                    $values[] = $value_1;
                }
                $value = $values;
            } elseif (null === $data->{'fields'}) {
                $value = $data->{'fields'};
            } elseif (isset($data->{'fields'})) {
                $value = $data->{'fields'};
            }
            $object->setFields($value);
        } elseif (property_exists($data, 'fields') && null === $data->{'fields'}) {
            $object->setFields(null);
        }
        if (property_exists($data, 'first_name') && null !== $data->{'first_name'}) {
            $object->setFirstName($data->{'first_name'});
        } elseif (property_exists($data, 'first_name') && null === $data->{'first_name'}) {
            $object->setFirstName(null);
        }
        if (property_exists($data, 'guest_channels') && null !== $data->{'guest_channels'}) {
            $object->setGuestChannels($data->{'guest_channels'});
        } elseif (property_exists($data, 'guest_channels') && null === $data->{'guest_channels'}) {
            $object->setGuestChannels(null);
        }
        if (property_exists($data, 'guest_expiration_ts') && null !== $data->{'guest_expiration_ts'}) {
            $object->setGuestExpirationTs($data->{'guest_expiration_ts'});
        } elseif (property_exists($data, 'guest_expiration_ts') && null === $data->{'guest_expiration_ts'}) {
            $object->setGuestExpirationTs(null);
        }
        if (property_exists($data, 'guest_invited_by') && null !== $data->{'guest_invited_by'}) {
            $object->setGuestInvitedBy($data->{'guest_invited_by'});
        } elseif (property_exists($data, 'guest_invited_by') && null === $data->{'guest_invited_by'}) {
            $object->setGuestInvitedBy(null);
        }
        if (property_exists($data, 'image_1024') && null !== $data->{'image_1024'}) {
            $object->setImage1024($data->{'image_1024'});
        } elseif (property_exists($data, 'image_1024') && null === $data->{'image_1024'}) {
            $object->setImage1024(null);
        }
        if (property_exists($data, 'image_192') && null !== $data->{'image_192'}) {
            $object->setImage192($data->{'image_192'});
        } elseif (property_exists($data, 'image_192') && null === $data->{'image_192'}) {
            $object->setImage192(null);
        }
        if (property_exists($data, 'image_24') && null !== $data->{'image_24'}) {
            $object->setImage24($data->{'image_24'});
        } elseif (property_exists($data, 'image_24') && null === $data->{'image_24'}) {
            $object->setImage24(null);
        }
        if (property_exists($data, 'image_32') && null !== $data->{'image_32'}) {
            $object->setImage32($data->{'image_32'});
        } elseif (property_exists($data, 'image_32') && null === $data->{'image_32'}) {
            $object->setImage32(null);
        }
        if (property_exists($data, 'image_48') && null !== $data->{'image_48'}) {
            $object->setImage48($data->{'image_48'});
        } elseif (property_exists($data, 'image_48') && null === $data->{'image_48'}) {
            $object->setImage48(null);
        }
        if (property_exists($data, 'image_512') && null !== $data->{'image_512'}) {
            $object->setImage512($data->{'image_512'});
        } elseif (property_exists($data, 'image_512') && null === $data->{'image_512'}) {
            $object->setImage512(null);
        }
        if (property_exists($data, 'image_72') && null !== $data->{'image_72'}) {
            $object->setImage72($data->{'image_72'});
        } elseif (property_exists($data, 'image_72') && null === $data->{'image_72'}) {
            $object->setImage72(null);
        }
        if (property_exists($data, 'image_original') && null !== $data->{'image_original'}) {
            $object->setImageOriginal($data->{'image_original'});
        } elseif (property_exists($data, 'image_original') && null === $data->{'image_original'}) {
            $object->setImageOriginal(null);
        }
        if (property_exists($data, 'is_custom_image') && null !== $data->{'is_custom_image'}) {
            $object->setIsCustomImage($data->{'is_custom_image'});
        } elseif (property_exists($data, 'is_custom_image') && null === $data->{'is_custom_image'}) {
            $object->setIsCustomImage(null);
        }
        if (property_exists($data, 'last_name') && null !== $data->{'last_name'}) {
            $object->setLastName($data->{'last_name'});
        } elseif (property_exists($data, 'last_name') && null === $data->{'last_name'}) {
            $object->setLastName(null);
        }
        if (property_exists($data, 'phone') && null !== $data->{'phone'}) {
            $object->setPhone($data->{'phone'});
        } elseif (property_exists($data, 'phone') && null === $data->{'phone'}) {
            $object->setPhone(null);
        }
        if (property_exists($data, 'real_name') && null !== $data->{'real_name'}) {
            $object->setRealName($data->{'real_name'});
        } elseif (property_exists($data, 'real_name') && null === $data->{'real_name'}) {
            $object->setRealName(null);
        }
        if (property_exists($data, 'real_name_normalized') && null !== $data->{'real_name_normalized'}) {
            $object->setRealNameNormalized($data->{'real_name_normalized'});
        } elseif (property_exists($data, 'real_name_normalized') && null === $data->{'real_name_normalized'}) {
            $object->setRealNameNormalized(null);
        }
        if (property_exists($data, 'skype') && null !== $data->{'skype'}) {
            $object->setSkype($data->{'skype'});
        } elseif (property_exists($data, 'skype') && null === $data->{'skype'}) {
            $object->setSkype(null);
        }
        if (property_exists($data, 'status_emoji') && null !== $data->{'status_emoji'}) {
            $object->setStatusEmoji($data->{'status_emoji'});
        } elseif (property_exists($data, 'status_emoji') && null === $data->{'status_emoji'}) {
            $object->setStatusEmoji(null);
        }
        if (property_exists($data, 'status_expiration') && null !== $data->{'status_expiration'}) {
            $object->setStatusExpiration($data->{'status_expiration'});
        } elseif (property_exists($data, 'status_expiration') && null === $data->{'status_expiration'}) {
            $object->setStatusExpiration(null);
        }
        if (property_exists($data, 'status_text') && null !== $data->{'status_text'}) {
            $object->setStatusText($data->{'status_text'});
        } elseif (property_exists($data, 'status_text') && null === $data->{'status_text'}) {
            $object->setStatusText(null);
        }
        if (property_exists($data, 'status_text_canonical') && null !== $data->{'status_text_canonical'}) {
            $object->setStatusTextCanonical($data->{'status_text_canonical'});
        } elseif (property_exists($data, 'status_text_canonical') && null === $data->{'status_text_canonical'}) {
            $object->setStatusTextCanonical(null);
        }
        if (property_exists($data, 'team') && null !== $data->{'team'}) {
            $object->setTeam($data->{'team'});
        } elseif (property_exists($data, 'team') && null === $data->{'team'}) {
            $object->setTeam(null);
        }
        if (property_exists($data, 'teams') && null !== $data->{'teams'}) {
            $object->setTeams($data->{'teams'});
        } elseif (property_exists($data, 'teams') && null === $data->{'teams'}) {
            $object->setTeams(null);
        }
        if (property_exists($data, 'title') && null !== $data->{'title'}) {
            $object->setTitle($data->{'title'});
        } elseif (property_exists($data, 'title') && null === $data->{'title'}) {
            $object->setTitle(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAlwaysActive()) {
            $data->{'always_active'} = $object->getAlwaysActive();
        } else {
            $data->{'always_active'} = null;
        }
        if (null !== $object->getApiAppId()) {
            $data->{'api_app_id'} = $object->getApiAppId();
        } else {
            $data->{'api_app_id'} = null;
        }
        if (null !== $object->getAvatarHash()) {
            $data->{'avatar_hash'} = $object->getAvatarHash();
        } else {
            $data->{'avatar_hash'} = null;
        }
        if (null !== $object->getBotId()) {
            $data->{'bot_id'} = $object->getBotId();
        } else {
            $data->{'bot_id'} = null;
        }
        if (null !== $object->getDisplayName()) {
            $data->{'display_name'} = $object->getDisplayName();
        } else {
            $data->{'display_name'} = null;
        }
        if (null !== $object->getDisplayNameNormalized()) {
            $data->{'display_name_normalized'} = $object->getDisplayNameNormalized();
        } else {
            $data->{'display_name_normalized'} = null;
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        } else {
            $data->{'email'} = null;
        }
        if (null !== $object->getFields()) {
            $value = $object->getFields();
            if (\is_array($object->getFields())) {
                $values = [];
                foreach ($object->getFields() as $value_1) {
                    $values[] = $value_1;
                }
                $value = $values;
            } elseif (null === $object->getFields()) {
                $value = $object->getFields();
            } elseif (null !== $object->getFields()) {
                $value = $object->getFields();
            }
            $data->{'fields'} = $value;
        } else {
            $data->{'fields'} = null;
        }
        if (null !== $object->getFirstName()) {
            $data->{'first_name'} = $object->getFirstName();
        } else {
            $data->{'first_name'} = null;
        }
        if (null !== $object->getGuestChannels()) {
            $data->{'guest_channels'} = $object->getGuestChannels();
        } else {
            $data->{'guest_channels'} = null;
        }
        if (null !== $object->getGuestExpirationTs()) {
            $data->{'guest_expiration_ts'} = $object->getGuestExpirationTs();
        } else {
            $data->{'guest_expiration_ts'} = null;
        }
        if (null !== $object->getGuestInvitedBy()) {
            $data->{'guest_invited_by'} = $object->getGuestInvitedBy();
        } else {
            $data->{'guest_invited_by'} = null;
        }
        if (null !== $object->getImage1024()) {
            $data->{'image_1024'} = $object->getImage1024();
        } else {
            $data->{'image_1024'} = null;
        }
        if (null !== $object->getImage192()) {
            $data->{'image_192'} = $object->getImage192();
        } else {
            $data->{'image_192'} = null;
        }
        if (null !== $object->getImage24()) {
            $data->{'image_24'} = $object->getImage24();
        } else {
            $data->{'image_24'} = null;
        }
        if (null !== $object->getImage32()) {
            $data->{'image_32'} = $object->getImage32();
        } else {
            $data->{'image_32'} = null;
        }
        if (null !== $object->getImage48()) {
            $data->{'image_48'} = $object->getImage48();
        } else {
            $data->{'image_48'} = null;
        }
        if (null !== $object->getImage512()) {
            $data->{'image_512'} = $object->getImage512();
        } else {
            $data->{'image_512'} = null;
        }
        if (null !== $object->getImage72()) {
            $data->{'image_72'} = $object->getImage72();
        } else {
            $data->{'image_72'} = null;
        }
        if (null !== $object->getImageOriginal()) {
            $data->{'image_original'} = $object->getImageOriginal();
        } else {
            $data->{'image_original'} = null;
        }
        if (null !== $object->getIsCustomImage()) {
            $data->{'is_custom_image'} = $object->getIsCustomImage();
        } else {
            $data->{'is_custom_image'} = null;
        }
        if (null !== $object->getLastName()) {
            $data->{'last_name'} = $object->getLastName();
        } else {
            $data->{'last_name'} = null;
        }
        if (null !== $object->getPhone()) {
            $data->{'phone'} = $object->getPhone();
        } else {
            $data->{'phone'} = null;
        }
        if (null !== $object->getRealName()) {
            $data->{'real_name'} = $object->getRealName();
        } else {
            $data->{'real_name'} = null;
        }
        if (null !== $object->getRealNameNormalized()) {
            $data->{'real_name_normalized'} = $object->getRealNameNormalized();
        } else {
            $data->{'real_name_normalized'} = null;
        }
        if (null !== $object->getSkype()) {
            $data->{'skype'} = $object->getSkype();
        } else {
            $data->{'skype'} = null;
        }
        if (null !== $object->getStatusEmoji()) {
            $data->{'status_emoji'} = $object->getStatusEmoji();
        } else {
            $data->{'status_emoji'} = null;
        }
        if (null !== $object->getStatusExpiration()) {
            $data->{'status_expiration'} = $object->getStatusExpiration();
        } else {
            $data->{'status_expiration'} = null;
        }
        if (null !== $object->getStatusText()) {
            $data->{'status_text'} = $object->getStatusText();
        } else {
            $data->{'status_text'} = null;
        }
        if (null !== $object->getStatusTextCanonical()) {
            $data->{'status_text_canonical'} = $object->getStatusTextCanonical();
        } else {
            $data->{'status_text_canonical'} = null;
        }
        if (null !== $object->getTeam()) {
            $data->{'team'} = $object->getTeam();
        } else {
            $data->{'team'} = null;
        }
        if (null !== $object->getTeams()) {
            $data->{'teams'} = $object->getTeams();
        } else {
            $data->{'teams'} = null;
        }
        if (null !== $object->getTitle()) {
            $data->{'title'} = $object->getTitle();
        } else {
            $data->{'title'} = null;
        }

        return $data;
    }
}
