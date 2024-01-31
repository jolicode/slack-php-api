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

if (!class_exists(Kernel::class) || (Kernel::MAJOR_VERSION >= 7 || Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4)) {
    class ObjsUserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\ObjsUser' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsUser' === \get_class($data);
        }

        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ObjsUser();
            if (\array_key_exists('tz_offset', $data) && \is_int($data['tz_offset'])) {
                $data['tz_offset'] = (float) $data['tz_offset'];
            }
            if (\array_key_exists('updated', $data) && \is_int($data['updated'])) {
                $data['updated'] = (float) $data['updated'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('color', $data) && null !== $data['color']) {
                $object->setColor($data['color']);
            } elseif (\array_key_exists('color', $data) && null === $data['color']) {
                $object->setColor(null);
            }
            if (\array_key_exists('deleted', $data) && null !== $data['deleted']) {
                $object->setDeleted($data['deleted']);
            } elseif (\array_key_exists('deleted', $data) && null === $data['deleted']) {
                $object->setDeleted(null);
            }
            if (\array_key_exists('enterprise_user', $data) && null !== $data['enterprise_user']) {
                $object->setEnterpriseUser($this->denormalizer->denormalize($data['enterprise_user'], 'JoliCode\\Slack\\Api\\Model\\ObjsEnterpriseUser', 'json', $context));
            } elseif (\array_key_exists('enterprise_user', $data) && null === $data['enterprise_user']) {
                $object->setEnterpriseUser(null);
            }
            if (\array_key_exists('has_2fa', $data) && null !== $data['has_2fa']) {
                $object->setHas2fa($data['has_2fa']);
            } elseif (\array_key_exists('has_2fa', $data) && null === $data['has_2fa']) {
                $object->setHas2fa(null);
            }
            if (\array_key_exists('id', $data) && null !== $data['id']) {
                $object->setId($data['id']);
            } elseif (\array_key_exists('id', $data) && null === $data['id']) {
                $object->setId(null);
            }
            if (\array_key_exists('is_admin', $data) && null !== $data['is_admin']) {
                $object->setIsAdmin($data['is_admin']);
            } elseif (\array_key_exists('is_admin', $data) && null === $data['is_admin']) {
                $object->setIsAdmin(null);
            }
            if (\array_key_exists('is_app_user', $data) && null !== $data['is_app_user']) {
                $object->setIsAppUser($data['is_app_user']);
            } elseif (\array_key_exists('is_app_user', $data) && null === $data['is_app_user']) {
                $object->setIsAppUser(null);
            }
            if (\array_key_exists('is_bot', $data) && null !== $data['is_bot']) {
                $object->setIsBot($data['is_bot']);
            } elseif (\array_key_exists('is_bot', $data) && null === $data['is_bot']) {
                $object->setIsBot(null);
            }
            if (\array_key_exists('is_external', $data) && null !== $data['is_external']) {
                $object->setIsExternal($data['is_external']);
            } elseif (\array_key_exists('is_external', $data) && null === $data['is_external']) {
                $object->setIsExternal(null);
            }
            if (\array_key_exists('is_forgotten', $data) && null !== $data['is_forgotten']) {
                $object->setIsForgotten($data['is_forgotten']);
            } elseif (\array_key_exists('is_forgotten', $data) && null === $data['is_forgotten']) {
                $object->setIsForgotten(null);
            }
            if (\array_key_exists('is_invited_user', $data) && null !== $data['is_invited_user']) {
                $object->setIsInvitedUser($data['is_invited_user']);
            } elseif (\array_key_exists('is_invited_user', $data) && null === $data['is_invited_user']) {
                $object->setIsInvitedUser(null);
            }
            if (\array_key_exists('is_owner', $data) && null !== $data['is_owner']) {
                $object->setIsOwner($data['is_owner']);
            } elseif (\array_key_exists('is_owner', $data) && null === $data['is_owner']) {
                $object->setIsOwner(null);
            }
            if (\array_key_exists('is_primary_owner', $data) && null !== $data['is_primary_owner']) {
                $object->setIsPrimaryOwner($data['is_primary_owner']);
            } elseif (\array_key_exists('is_primary_owner', $data) && null === $data['is_primary_owner']) {
                $object->setIsPrimaryOwner(null);
            }
            if (\array_key_exists('is_restricted', $data) && null !== $data['is_restricted']) {
                $object->setIsRestricted($data['is_restricted']);
            } elseif (\array_key_exists('is_restricted', $data) && null === $data['is_restricted']) {
                $object->setIsRestricted(null);
            }
            if (\array_key_exists('is_stranger', $data) && null !== $data['is_stranger']) {
                $object->setIsStranger($data['is_stranger']);
            } elseif (\array_key_exists('is_stranger', $data) && null === $data['is_stranger']) {
                $object->setIsStranger(null);
            }
            if (\array_key_exists('is_ultra_restricted', $data) && null !== $data['is_ultra_restricted']) {
                $object->setIsUltraRestricted($data['is_ultra_restricted']);
            } elseif (\array_key_exists('is_ultra_restricted', $data) && null === $data['is_ultra_restricted']) {
                $object->setIsUltraRestricted(null);
            }
            if (\array_key_exists('locale', $data) && null !== $data['locale']) {
                $object->setLocale($data['locale']);
            } elseif (\array_key_exists('locale', $data) && null === $data['locale']) {
                $object->setLocale(null);
            }
            if (\array_key_exists('name', $data) && null !== $data['name']) {
                $object->setName($data['name']);
            } elseif (\array_key_exists('name', $data) && null === $data['name']) {
                $object->setName(null);
            }
            if (\array_key_exists('presence', $data) && null !== $data['presence']) {
                $object->setPresence($data['presence']);
            } elseif (\array_key_exists('presence', $data) && null === $data['presence']) {
                $object->setPresence(null);
            }
            if (\array_key_exists('profile', $data) && null !== $data['profile']) {
                $object->setProfile($this->denormalizer->denormalize($data['profile'], 'JoliCode\\Slack\\Api\\Model\\ObjsUserProfile', 'json', $context));
            } elseif (\array_key_exists('profile', $data) && null === $data['profile']) {
                $object->setProfile(null);
            }
            if (\array_key_exists('real_name', $data) && null !== $data['real_name']) {
                $object->setRealName($data['real_name']);
            } elseif (\array_key_exists('real_name', $data) && null === $data['real_name']) {
                $object->setRealName(null);
            }
            if (\array_key_exists('team', $data) && null !== $data['team']) {
                $object->setTeam($data['team']);
            } elseif (\array_key_exists('team', $data) && null === $data['team']) {
                $object->setTeam(null);
            }
            if (\array_key_exists('team_id', $data) && null !== $data['team_id']) {
                $object->setTeamId($data['team_id']);
            } elseif (\array_key_exists('team_id', $data) && null === $data['team_id']) {
                $object->setTeamId(null);
            }
            if (\array_key_exists('team_profile', $data) && null !== $data['team_profile']) {
                $object->setTeamProfile($this->denormalizer->denormalize($data['team_profile'], 'JoliCode\\Slack\\Api\\Model\\ObjsUserTeamProfile', 'json', $context));
            } elseif (\array_key_exists('team_profile', $data) && null === $data['team_profile']) {
                $object->setTeamProfile(null);
            }
            if (\array_key_exists('teams', $data) && null !== $data['teams']) {
                $values = [];
                foreach ($data['teams'] as $value) {
                    $values[] = $value;
                }
                $object->setTeams($values);
            } elseif (\array_key_exists('teams', $data) && null === $data['teams']) {
                $object->setTeams(null);
            }
            if (\array_key_exists('two_factor_type', $data) && null !== $data['two_factor_type']) {
                $object->setTwoFactorType($data['two_factor_type']);
            } elseif (\array_key_exists('two_factor_type', $data) && null === $data['two_factor_type']) {
                $object->setTwoFactorType(null);
            }
            if (\array_key_exists('tz', $data) && null !== $data['tz']) {
                $object->setTz($data['tz']);
            } elseif (\array_key_exists('tz', $data) && null === $data['tz']) {
                $object->setTz(null);
            }
            if (\array_key_exists('tz_label', $data) && null !== $data['tz_label']) {
                $object->setTzLabel($data['tz_label']);
            } elseif (\array_key_exists('tz_label', $data) && null === $data['tz_label']) {
                $object->setTzLabel(null);
            }
            if (\array_key_exists('tz_offset', $data) && null !== $data['tz_offset']) {
                $object->setTzOffset($data['tz_offset']);
            } elseif (\array_key_exists('tz_offset', $data) && null === $data['tz_offset']) {
                $object->setTzOffset(null);
            }
            if (\array_key_exists('updated', $data) && null !== $data['updated']) {
                $object->setUpdated($data['updated']);
            } elseif (\array_key_exists('updated', $data) && null === $data['updated']) {
                $object->setUpdated(null);
            }

            return $object;
        }

        public function normalize(mixed $object, string $format = null, array $context = []): null|array|\ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('color') && null !== $object->getColor()) {
                $data['color'] = $object->getColor();
            }
            if ($object->isInitialized('deleted') && null !== $object->getDeleted()) {
                $data['deleted'] = $object->getDeleted();
            }
            if ($object->isInitialized('enterpriseUser') && null !== $object->getEnterpriseUser()) {
                $data['enterprise_user'] = $this->normalizer->normalize($object->getEnterpriseUser(), 'json', $context);
            }
            if ($object->isInitialized('has2fa') && null !== $object->getHas2fa()) {
                $data['has_2fa'] = $object->getHas2fa();
            }
            $data['id'] = $object->getId();
            if ($object->isInitialized('isAdmin') && null !== $object->getIsAdmin()) {
                $data['is_admin'] = $object->getIsAdmin();
            }
            $data['is_app_user'] = $object->getIsAppUser();
            $data['is_bot'] = $object->getIsBot();
            if ($object->isInitialized('isExternal') && null !== $object->getIsExternal()) {
                $data['is_external'] = $object->getIsExternal();
            }
            if ($object->isInitialized('isForgotten') && null !== $object->getIsForgotten()) {
                $data['is_forgotten'] = $object->getIsForgotten();
            }
            if ($object->isInitialized('isInvitedUser') && null !== $object->getIsInvitedUser()) {
                $data['is_invited_user'] = $object->getIsInvitedUser();
            }
            if ($object->isInitialized('isOwner') && null !== $object->getIsOwner()) {
                $data['is_owner'] = $object->getIsOwner();
            }
            if ($object->isInitialized('isPrimaryOwner') && null !== $object->getIsPrimaryOwner()) {
                $data['is_primary_owner'] = $object->getIsPrimaryOwner();
            }
            if ($object->isInitialized('isRestricted') && null !== $object->getIsRestricted()) {
                $data['is_restricted'] = $object->getIsRestricted();
            }
            if ($object->isInitialized('isStranger') && null !== $object->getIsStranger()) {
                $data['is_stranger'] = $object->getIsStranger();
            }
            if ($object->isInitialized('isUltraRestricted') && null !== $object->getIsUltraRestricted()) {
                $data['is_ultra_restricted'] = $object->getIsUltraRestricted();
            }
            if ($object->isInitialized('locale') && null !== $object->getLocale()) {
                $data['locale'] = $object->getLocale();
            }
            $data['name'] = $object->getName();
            if ($object->isInitialized('presence') && null !== $object->getPresence()) {
                $data['presence'] = $object->getPresence();
            }
            $data['profile'] = $this->normalizer->normalize($object->getProfile(), 'json', $context);
            if ($object->isInitialized('realName') && null !== $object->getRealName()) {
                $data['real_name'] = $object->getRealName();
            }
            if ($object->isInitialized('team') && null !== $object->getTeam()) {
                $data['team'] = $object->getTeam();
            }
            if ($object->isInitialized('teamId') && null !== $object->getTeamId()) {
                $data['team_id'] = $object->getTeamId();
            }
            if ($object->isInitialized('teamProfile') && null !== $object->getTeamProfile()) {
                $data['team_profile'] = $this->normalizer->normalize($object->getTeamProfile(), 'json', $context);
            }
            if ($object->isInitialized('teams') && null !== $object->getTeams()) {
                $values = [];
                foreach ($object->getTeams() as $value) {
                    $values[] = $value;
                }
                $data['teams'] = $values;
            }
            if ($object->isInitialized('twoFactorType') && null !== $object->getTwoFactorType()) {
                $data['two_factor_type'] = $object->getTwoFactorType();
            }
            if ($object->isInitialized('tz') && null !== $object->getTz()) {
                $data['tz'] = $object->getTz();
            }
            if ($object->isInitialized('tzLabel') && null !== $object->getTzLabel()) {
                $data['tz_label'] = $object->getTzLabel();
            }
            if ($object->isInitialized('tzOffset') && null !== $object->getTzOffset()) {
                $data['tz_offset'] = $object->getTzOffset();
            }
            $data['updated'] = $object->getUpdated();

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\ObjsUser' => false];
        }
    }
} else {
    class ObjsUserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\ObjsUser' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsUser' === \get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ObjsUser();
            if (\array_key_exists('tz_offset', $data) && \is_int($data['tz_offset'])) {
                $data['tz_offset'] = (float) $data['tz_offset'];
            }
            if (\array_key_exists('updated', $data) && \is_int($data['updated'])) {
                $data['updated'] = (float) $data['updated'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('color', $data) && null !== $data['color']) {
                $object->setColor($data['color']);
            } elseif (\array_key_exists('color', $data) && null === $data['color']) {
                $object->setColor(null);
            }
            if (\array_key_exists('deleted', $data) && null !== $data['deleted']) {
                $object->setDeleted($data['deleted']);
            } elseif (\array_key_exists('deleted', $data) && null === $data['deleted']) {
                $object->setDeleted(null);
            }
            if (\array_key_exists('enterprise_user', $data) && null !== $data['enterprise_user']) {
                $object->setEnterpriseUser($this->denormalizer->denormalize($data['enterprise_user'], 'JoliCode\\Slack\\Api\\Model\\ObjsEnterpriseUser', 'json', $context));
            } elseif (\array_key_exists('enterprise_user', $data) && null === $data['enterprise_user']) {
                $object->setEnterpriseUser(null);
            }
            if (\array_key_exists('has_2fa', $data) && null !== $data['has_2fa']) {
                $object->setHas2fa($data['has_2fa']);
            } elseif (\array_key_exists('has_2fa', $data) && null === $data['has_2fa']) {
                $object->setHas2fa(null);
            }
            if (\array_key_exists('id', $data) && null !== $data['id']) {
                $object->setId($data['id']);
            } elseif (\array_key_exists('id', $data) && null === $data['id']) {
                $object->setId(null);
            }
            if (\array_key_exists('is_admin', $data) && null !== $data['is_admin']) {
                $object->setIsAdmin($data['is_admin']);
            } elseif (\array_key_exists('is_admin', $data) && null === $data['is_admin']) {
                $object->setIsAdmin(null);
            }
            if (\array_key_exists('is_app_user', $data) && null !== $data['is_app_user']) {
                $object->setIsAppUser($data['is_app_user']);
            } elseif (\array_key_exists('is_app_user', $data) && null === $data['is_app_user']) {
                $object->setIsAppUser(null);
            }
            if (\array_key_exists('is_bot', $data) && null !== $data['is_bot']) {
                $object->setIsBot($data['is_bot']);
            } elseif (\array_key_exists('is_bot', $data) && null === $data['is_bot']) {
                $object->setIsBot(null);
            }
            if (\array_key_exists('is_external', $data) && null !== $data['is_external']) {
                $object->setIsExternal($data['is_external']);
            } elseif (\array_key_exists('is_external', $data) && null === $data['is_external']) {
                $object->setIsExternal(null);
            }
            if (\array_key_exists('is_forgotten', $data) && null !== $data['is_forgotten']) {
                $object->setIsForgotten($data['is_forgotten']);
            } elseif (\array_key_exists('is_forgotten', $data) && null === $data['is_forgotten']) {
                $object->setIsForgotten(null);
            }
            if (\array_key_exists('is_invited_user', $data) && null !== $data['is_invited_user']) {
                $object->setIsInvitedUser($data['is_invited_user']);
            } elseif (\array_key_exists('is_invited_user', $data) && null === $data['is_invited_user']) {
                $object->setIsInvitedUser(null);
            }
            if (\array_key_exists('is_owner', $data) && null !== $data['is_owner']) {
                $object->setIsOwner($data['is_owner']);
            } elseif (\array_key_exists('is_owner', $data) && null === $data['is_owner']) {
                $object->setIsOwner(null);
            }
            if (\array_key_exists('is_primary_owner', $data) && null !== $data['is_primary_owner']) {
                $object->setIsPrimaryOwner($data['is_primary_owner']);
            } elseif (\array_key_exists('is_primary_owner', $data) && null === $data['is_primary_owner']) {
                $object->setIsPrimaryOwner(null);
            }
            if (\array_key_exists('is_restricted', $data) && null !== $data['is_restricted']) {
                $object->setIsRestricted($data['is_restricted']);
            } elseif (\array_key_exists('is_restricted', $data) && null === $data['is_restricted']) {
                $object->setIsRestricted(null);
            }
            if (\array_key_exists('is_stranger', $data) && null !== $data['is_stranger']) {
                $object->setIsStranger($data['is_stranger']);
            } elseif (\array_key_exists('is_stranger', $data) && null === $data['is_stranger']) {
                $object->setIsStranger(null);
            }
            if (\array_key_exists('is_ultra_restricted', $data) && null !== $data['is_ultra_restricted']) {
                $object->setIsUltraRestricted($data['is_ultra_restricted']);
            } elseif (\array_key_exists('is_ultra_restricted', $data) && null === $data['is_ultra_restricted']) {
                $object->setIsUltraRestricted(null);
            }
            if (\array_key_exists('locale', $data) && null !== $data['locale']) {
                $object->setLocale($data['locale']);
            } elseif (\array_key_exists('locale', $data) && null === $data['locale']) {
                $object->setLocale(null);
            }
            if (\array_key_exists('name', $data) && null !== $data['name']) {
                $object->setName($data['name']);
            } elseif (\array_key_exists('name', $data) && null === $data['name']) {
                $object->setName(null);
            }
            if (\array_key_exists('presence', $data) && null !== $data['presence']) {
                $object->setPresence($data['presence']);
            } elseif (\array_key_exists('presence', $data) && null === $data['presence']) {
                $object->setPresence(null);
            }
            if (\array_key_exists('profile', $data) && null !== $data['profile']) {
                $object->setProfile($this->denormalizer->denormalize($data['profile'], 'JoliCode\\Slack\\Api\\Model\\ObjsUserProfile', 'json', $context));
            } elseif (\array_key_exists('profile', $data) && null === $data['profile']) {
                $object->setProfile(null);
            }
            if (\array_key_exists('real_name', $data) && null !== $data['real_name']) {
                $object->setRealName($data['real_name']);
            } elseif (\array_key_exists('real_name', $data) && null === $data['real_name']) {
                $object->setRealName(null);
            }
            if (\array_key_exists('team', $data) && null !== $data['team']) {
                $object->setTeam($data['team']);
            } elseif (\array_key_exists('team', $data) && null === $data['team']) {
                $object->setTeam(null);
            }
            if (\array_key_exists('team_id', $data) && null !== $data['team_id']) {
                $object->setTeamId($data['team_id']);
            } elseif (\array_key_exists('team_id', $data) && null === $data['team_id']) {
                $object->setTeamId(null);
            }
            if (\array_key_exists('team_profile', $data) && null !== $data['team_profile']) {
                $object->setTeamProfile($this->denormalizer->denormalize($data['team_profile'], 'JoliCode\\Slack\\Api\\Model\\ObjsUserTeamProfile', 'json', $context));
            } elseif (\array_key_exists('team_profile', $data) && null === $data['team_profile']) {
                $object->setTeamProfile(null);
            }
            if (\array_key_exists('teams', $data) && null !== $data['teams']) {
                $values = [];
                foreach ($data['teams'] as $value) {
                    $values[] = $value;
                }
                $object->setTeams($values);
            } elseif (\array_key_exists('teams', $data) && null === $data['teams']) {
                $object->setTeams(null);
            }
            if (\array_key_exists('two_factor_type', $data) && null !== $data['two_factor_type']) {
                $object->setTwoFactorType($data['two_factor_type']);
            } elseif (\array_key_exists('two_factor_type', $data) && null === $data['two_factor_type']) {
                $object->setTwoFactorType(null);
            }
            if (\array_key_exists('tz', $data) && null !== $data['tz']) {
                $object->setTz($data['tz']);
            } elseif (\array_key_exists('tz', $data) && null === $data['tz']) {
                $object->setTz(null);
            }
            if (\array_key_exists('tz_label', $data) && null !== $data['tz_label']) {
                $object->setTzLabel($data['tz_label']);
            } elseif (\array_key_exists('tz_label', $data) && null === $data['tz_label']) {
                $object->setTzLabel(null);
            }
            if (\array_key_exists('tz_offset', $data) && null !== $data['tz_offset']) {
                $object->setTzOffset($data['tz_offset']);
            } elseif (\array_key_exists('tz_offset', $data) && null === $data['tz_offset']) {
                $object->setTzOffset(null);
            }
            if (\array_key_exists('updated', $data) && null !== $data['updated']) {
                $object->setUpdated($data['updated']);
            } elseif (\array_key_exists('updated', $data) && null === $data['updated']) {
                $object->setUpdated(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('color') && null !== $object->getColor()) {
                $data['color'] = $object->getColor();
            }
            if ($object->isInitialized('deleted') && null !== $object->getDeleted()) {
                $data['deleted'] = $object->getDeleted();
            }
            if ($object->isInitialized('enterpriseUser') && null !== $object->getEnterpriseUser()) {
                $data['enterprise_user'] = $this->normalizer->normalize($object->getEnterpriseUser(), 'json', $context);
            }
            if ($object->isInitialized('has2fa') && null !== $object->getHas2fa()) {
                $data['has_2fa'] = $object->getHas2fa();
            }
            $data['id'] = $object->getId();
            if ($object->isInitialized('isAdmin') && null !== $object->getIsAdmin()) {
                $data['is_admin'] = $object->getIsAdmin();
            }
            $data['is_app_user'] = $object->getIsAppUser();
            $data['is_bot'] = $object->getIsBot();
            if ($object->isInitialized('isExternal') && null !== $object->getIsExternal()) {
                $data['is_external'] = $object->getIsExternal();
            }
            if ($object->isInitialized('isForgotten') && null !== $object->getIsForgotten()) {
                $data['is_forgotten'] = $object->getIsForgotten();
            }
            if ($object->isInitialized('isInvitedUser') && null !== $object->getIsInvitedUser()) {
                $data['is_invited_user'] = $object->getIsInvitedUser();
            }
            if ($object->isInitialized('isOwner') && null !== $object->getIsOwner()) {
                $data['is_owner'] = $object->getIsOwner();
            }
            if ($object->isInitialized('isPrimaryOwner') && null !== $object->getIsPrimaryOwner()) {
                $data['is_primary_owner'] = $object->getIsPrimaryOwner();
            }
            if ($object->isInitialized('isRestricted') && null !== $object->getIsRestricted()) {
                $data['is_restricted'] = $object->getIsRestricted();
            }
            if ($object->isInitialized('isStranger') && null !== $object->getIsStranger()) {
                $data['is_stranger'] = $object->getIsStranger();
            }
            if ($object->isInitialized('isUltraRestricted') && null !== $object->getIsUltraRestricted()) {
                $data['is_ultra_restricted'] = $object->getIsUltraRestricted();
            }
            if ($object->isInitialized('locale') && null !== $object->getLocale()) {
                $data['locale'] = $object->getLocale();
            }
            $data['name'] = $object->getName();
            if ($object->isInitialized('presence') && null !== $object->getPresence()) {
                $data['presence'] = $object->getPresence();
            }
            $data['profile'] = $this->normalizer->normalize($object->getProfile(), 'json', $context);
            if ($object->isInitialized('realName') && null !== $object->getRealName()) {
                $data['real_name'] = $object->getRealName();
            }
            if ($object->isInitialized('team') && null !== $object->getTeam()) {
                $data['team'] = $object->getTeam();
            }
            if ($object->isInitialized('teamId') && null !== $object->getTeamId()) {
                $data['team_id'] = $object->getTeamId();
            }
            if ($object->isInitialized('teamProfile') && null !== $object->getTeamProfile()) {
                $data['team_profile'] = $this->normalizer->normalize($object->getTeamProfile(), 'json', $context);
            }
            if ($object->isInitialized('teams') && null !== $object->getTeams()) {
                $values = [];
                foreach ($object->getTeams() as $value) {
                    $values[] = $value;
                }
                $data['teams'] = $values;
            }
            if ($object->isInitialized('twoFactorType') && null !== $object->getTwoFactorType()) {
                $data['two_factor_type'] = $object->getTwoFactorType();
            }
            if ($object->isInitialized('tz') && null !== $object->getTz()) {
                $data['tz'] = $object->getTz();
            }
            if ($object->isInitialized('tzLabel') && null !== $object->getTzLabel()) {
                $data['tz_label'] = $object->getTzLabel();
            }
            if ($object->isInitialized('tzOffset') && null !== $object->getTzOffset()) {
                $data['tz_offset'] = $object->getTzOffset();
            }
            $data['updated'] = $object->getUpdated();

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\ObjsUser' => false];
        }
    }
}
