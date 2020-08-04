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

class ObjsUserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ObjsUser' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsUser' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\ObjsUser();
        if (property_exists($data, 'color') && null !== $data->{'color'}) {
            $object->setColor($data->{'color'});
        } elseif (property_exists($data, 'color') && null === $data->{'color'}) {
            $object->setColor(null);
        }
        if (property_exists($data, 'deleted') && null !== $data->{'deleted'}) {
            $object->setDeleted($data->{'deleted'});
        } elseif (property_exists($data, 'deleted') && null === $data->{'deleted'}) {
            $object->setDeleted(null);
        }
        if (property_exists($data, 'enterprise_user') && null !== $data->{'enterprise_user'}) {
            $object->setEnterpriseUser($this->denormalizer->denormalize($data->{'enterprise_user'}, 'JoliCode\\Slack\\Api\\Model\\ObjsEnterpriseUser', 'json', $context));
        } elseif (property_exists($data, 'enterprise_user') && null === $data->{'enterprise_user'}) {
            $object->setEnterpriseUser(null);
        }
        if (property_exists($data, 'has_2fa') && null !== $data->{'has_2fa'}) {
            $object->setHas2fa($data->{'has_2fa'});
        } elseif (property_exists($data, 'has_2fa') && null === $data->{'has_2fa'}) {
            $object->setHas2fa(null);
        }
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        } elseif (property_exists($data, 'id') && null === $data->{'id'}) {
            $object->setId(null);
        }
        if (property_exists($data, 'is_admin') && null !== $data->{'is_admin'}) {
            $object->setIsAdmin($data->{'is_admin'});
        } elseif (property_exists($data, 'is_admin') && null === $data->{'is_admin'}) {
            $object->setIsAdmin(null);
        }
        if (property_exists($data, 'is_app_user') && null !== $data->{'is_app_user'}) {
            $object->setIsAppUser($data->{'is_app_user'});
        } elseif (property_exists($data, 'is_app_user') && null === $data->{'is_app_user'}) {
            $object->setIsAppUser(null);
        }
        if (property_exists($data, 'is_bot') && null !== $data->{'is_bot'}) {
            $object->setIsBot($data->{'is_bot'});
        } elseif (property_exists($data, 'is_bot') && null === $data->{'is_bot'}) {
            $object->setIsBot(null);
        }
        if (property_exists($data, 'is_invited_user') && null !== $data->{'is_invited_user'}) {
            $object->setIsInvitedUser($data->{'is_invited_user'});
        } elseif (property_exists($data, 'is_invited_user') && null === $data->{'is_invited_user'}) {
            $object->setIsInvitedUser(null);
        }
        if (property_exists($data, 'is_owner') && null !== $data->{'is_owner'}) {
            $object->setIsOwner($data->{'is_owner'});
        } elseif (property_exists($data, 'is_owner') && null === $data->{'is_owner'}) {
            $object->setIsOwner(null);
        }
        if (property_exists($data, 'is_primary_owner') && null !== $data->{'is_primary_owner'}) {
            $object->setIsPrimaryOwner($data->{'is_primary_owner'});
        } elseif (property_exists($data, 'is_primary_owner') && null === $data->{'is_primary_owner'}) {
            $object->setIsPrimaryOwner(null);
        }
        if (property_exists($data, 'is_restricted') && null !== $data->{'is_restricted'}) {
            $object->setIsRestricted($data->{'is_restricted'});
        } elseif (property_exists($data, 'is_restricted') && null === $data->{'is_restricted'}) {
            $object->setIsRestricted(null);
        }
        if (property_exists($data, 'is_ultra_restricted') && null !== $data->{'is_ultra_restricted'}) {
            $object->setIsUltraRestricted($data->{'is_ultra_restricted'});
        } elseif (property_exists($data, 'is_ultra_restricted') && null === $data->{'is_ultra_restricted'}) {
            $object->setIsUltraRestricted(null);
        }
        if (property_exists($data, 'locale') && null !== $data->{'locale'}) {
            $object->setLocale($data->{'locale'});
        } elseif (property_exists($data, 'locale') && null === $data->{'locale'}) {
            $object->setLocale(null);
        }
        if (property_exists($data, 'name') && null !== $data->{'name'}) {
            $object->setName($data->{'name'});
        } elseif (property_exists($data, 'name') && null === $data->{'name'}) {
            $object->setName(null);
        }
        if (property_exists($data, 'presence') && null !== $data->{'presence'}) {
            $object->setPresence($data->{'presence'});
        } elseif (property_exists($data, 'presence') && null === $data->{'presence'}) {
            $object->setPresence(null);
        }
        if (property_exists($data, 'profile') && null !== $data->{'profile'}) {
            $object->setProfile($this->denormalizer->denormalize($data->{'profile'}, 'JoliCode\\Slack\\Api\\Model\\ObjsUserProfile', 'json', $context));
        } elseif (property_exists($data, 'profile') && null === $data->{'profile'}) {
            $object->setProfile(null);
        }
        if (property_exists($data, 'real_name') && null !== $data->{'real_name'}) {
            $object->setRealName($data->{'real_name'});
        } elseif (property_exists($data, 'real_name') && null === $data->{'real_name'}) {
            $object->setRealName(null);
        }
        if (property_exists($data, 'team') && null !== $data->{'team'}) {
            $object->setTeam($data->{'team'});
        } elseif (property_exists($data, 'team') && null === $data->{'team'}) {
            $object->setTeam(null);
        }
        if (property_exists($data, 'team_id') && null !== $data->{'team_id'}) {
            $object->setTeamId($data->{'team_id'});
        } elseif (property_exists($data, 'team_id') && null === $data->{'team_id'}) {
            $object->setTeamId(null);
        }
        if (property_exists($data, 'team_profile') && null !== $data->{'team_profile'}) {
            $object->setTeamProfile($this->denormalizer->denormalize($data->{'team_profile'}, 'JoliCode\\Slack\\Api\\Model\\ObjsUserTeamProfile', 'json', $context));
        } elseif (property_exists($data, 'team_profile') && null === $data->{'team_profile'}) {
            $object->setTeamProfile(null);
        }
        if (property_exists($data, 'two_factor_type') && null !== $data->{'two_factor_type'}) {
            $object->setTwoFactorType($data->{'two_factor_type'});
        } elseif (property_exists($data, 'two_factor_type') && null === $data->{'two_factor_type'}) {
            $object->setTwoFactorType(null);
        }
        if (property_exists($data, 'tz') && null !== $data->{'tz'}) {
            $object->setTz($data->{'tz'});
        } elseif (property_exists($data, 'tz') && null === $data->{'tz'}) {
            $object->setTz(null);
        }
        if (property_exists($data, 'tz_label') && null !== $data->{'tz_label'}) {
            $object->setTzLabel($data->{'tz_label'});
        } elseif (property_exists($data, 'tz_label') && null === $data->{'tz_label'}) {
            $object->setTzLabel(null);
        }
        if (property_exists($data, 'tz_offset') && null !== $data->{'tz_offset'}) {
            $object->setTzOffset($data->{'tz_offset'});
        } elseif (property_exists($data, 'tz_offset') && null === $data->{'tz_offset'}) {
            $object->setTzOffset(null);
        }
        if (property_exists($data, 'updated') && null !== $data->{'updated'}) {
            $object->setUpdated($data->{'updated'});
        } elseif (property_exists($data, 'updated') && null === $data->{'updated'}) {
            $object->setUpdated(null);
        }
        if (property_exists($data, 'teams') && null !== $data->{'teams'}) {
            $values = [];
            foreach ($data->{'teams'} as $value) {
                $values[] = $value;
            }
            $object->setTeams($values);
        } elseif (property_exists($data, 'teams') && null === $data->{'teams'}) {
            $object->setTeams(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getColor()) {
            $data->{'color'} = $object->getColor();
        } else {
            $data->{'color'} = null;
        }
        if (null !== $object->getDeleted()) {
            $data->{'deleted'} = $object->getDeleted();
        } else {
            $data->{'deleted'} = null;
        }
        if (null !== $object->getEnterpriseUser()) {
            $data->{'enterprise_user'} = $this->normalizer->normalize($object->getEnterpriseUser(), 'json', $context);
        } else {
            $data->{'enterprise_user'} = null;
        }
        if (null !== $object->getHas2fa()) {
            $data->{'has_2fa'} = $object->getHas2fa();
        } else {
            $data->{'has_2fa'} = null;
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        } else {
            $data->{'id'} = null;
        }
        if (null !== $object->getIsAdmin()) {
            $data->{'is_admin'} = $object->getIsAdmin();
        } else {
            $data->{'is_admin'} = null;
        }
        if (null !== $object->getIsAppUser()) {
            $data->{'is_app_user'} = $object->getIsAppUser();
        } else {
            $data->{'is_app_user'} = null;
        }
        if (null !== $object->getIsBot()) {
            $data->{'is_bot'} = $object->getIsBot();
        } else {
            $data->{'is_bot'} = null;
        }
        if (null !== $object->getIsInvitedUser()) {
            $data->{'is_invited_user'} = $object->getIsInvitedUser();
        } else {
            $data->{'is_invited_user'} = null;
        }
        if (null !== $object->getIsOwner()) {
            $data->{'is_owner'} = $object->getIsOwner();
        } else {
            $data->{'is_owner'} = null;
        }
        if (null !== $object->getIsPrimaryOwner()) {
            $data->{'is_primary_owner'} = $object->getIsPrimaryOwner();
        } else {
            $data->{'is_primary_owner'} = null;
        }
        if (null !== $object->getIsRestricted()) {
            $data->{'is_restricted'} = $object->getIsRestricted();
        } else {
            $data->{'is_restricted'} = null;
        }
        if (null !== $object->getIsUltraRestricted()) {
            $data->{'is_ultra_restricted'} = $object->getIsUltraRestricted();
        } else {
            $data->{'is_ultra_restricted'} = null;
        }
        if (null !== $object->getLocale()) {
            $data->{'locale'} = $object->getLocale();
        } else {
            $data->{'locale'} = null;
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        } else {
            $data->{'name'} = null;
        }
        if (null !== $object->getPresence()) {
            $data->{'presence'} = $object->getPresence();
        } else {
            $data->{'presence'} = null;
        }
        if (null !== $object->getProfile()) {
            $data->{'profile'} = $this->normalizer->normalize($object->getProfile(), 'json', $context);
        } else {
            $data->{'profile'} = null;
        }
        if (null !== $object->getRealName()) {
            $data->{'real_name'} = $object->getRealName();
        } else {
            $data->{'real_name'} = null;
        }
        if (null !== $object->getTeam()) {
            $data->{'team'} = $object->getTeam();
        } else {
            $data->{'team'} = null;
        }
        if (null !== $object->getTeamId()) {
            $data->{'team_id'} = $object->getTeamId();
        } else {
            $data->{'team_id'} = null;
        }
        if (null !== $object->getTeamProfile()) {
            $data->{'team_profile'} = $this->normalizer->normalize($object->getTeamProfile(), 'json', $context);
        } else {
            $data->{'team_profile'} = null;
        }
        if (null !== $object->getTwoFactorType()) {
            $data->{'two_factor_type'} = $object->getTwoFactorType();
        } else {
            $data->{'two_factor_type'} = null;
        }
        if (null !== $object->getTz()) {
            $data->{'tz'} = $object->getTz();
        } else {
            $data->{'tz'} = null;
        }
        if (null !== $object->getTzLabel()) {
            $data->{'tz_label'} = $object->getTzLabel();
        } else {
            $data->{'tz_label'} = null;
        }
        if (null !== $object->getTzOffset()) {
            $data->{'tz_offset'} = $object->getTzOffset();
        } else {
            $data->{'tz_offset'} = null;
        }
        if (null !== $object->getUpdated()) {
            $data->{'updated'} = $object->getUpdated();
        } else {
            $data->{'updated'} = null;
        }
        if (null !== $object->getTeams()) {
            $values = [];
            foreach ($object->getTeams() as $value) {
                $values[] = $value;
            }
            $data->{'teams'} = $values;
        } else {
            $data->{'teams'} = null;
        }

        return $data;
    }
}
