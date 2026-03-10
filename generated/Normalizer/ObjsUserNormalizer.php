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

class ObjsUserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\ObjsUser::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\ObjsUser::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
        if (\array_key_exists('deleted', $data) && \is_int($data['deleted'])) {
            $data['deleted'] = (bool) $data['deleted'];
        }
        if (\array_key_exists('has_2fa', $data) && \is_int($data['has_2fa'])) {
            $data['has_2fa'] = (bool) $data['has_2fa'];
        }
        if (\array_key_exists('is_admin', $data) && \is_int($data['is_admin'])) {
            $data['is_admin'] = (bool) $data['is_admin'];
        }
        if (\array_key_exists('is_app_user', $data) && \is_int($data['is_app_user'])) {
            $data['is_app_user'] = (bool) $data['is_app_user'];
        }
        if (\array_key_exists('is_bot', $data) && \is_int($data['is_bot'])) {
            $data['is_bot'] = (bool) $data['is_bot'];
        }
        if (\array_key_exists('is_external', $data) && \is_int($data['is_external'])) {
            $data['is_external'] = (bool) $data['is_external'];
        }
        if (\array_key_exists('is_forgotten', $data) && \is_int($data['is_forgotten'])) {
            $data['is_forgotten'] = (bool) $data['is_forgotten'];
        }
        if (\array_key_exists('is_invited_user', $data) && \is_int($data['is_invited_user'])) {
            $data['is_invited_user'] = (bool) $data['is_invited_user'];
        }
        if (\array_key_exists('is_owner', $data) && \is_int($data['is_owner'])) {
            $data['is_owner'] = (bool) $data['is_owner'];
        }
        if (\array_key_exists('is_primary_owner', $data) && \is_int($data['is_primary_owner'])) {
            $data['is_primary_owner'] = (bool) $data['is_primary_owner'];
        }
        if (\array_key_exists('is_restricted', $data) && \is_int($data['is_restricted'])) {
            $data['is_restricted'] = (bool) $data['is_restricted'];
        }
        if (\array_key_exists('is_stranger', $data) && \is_int($data['is_stranger'])) {
            $data['is_stranger'] = (bool) $data['is_stranger'];
        }
        if (\array_key_exists('is_ultra_restricted', $data) && \is_int($data['is_ultra_restricted'])) {
            $data['is_ultra_restricted'] = (bool) $data['is_ultra_restricted'];
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
            $object->setEnterpriseUser($this->denormalizer->denormalize($data['enterprise_user'], \JoliCode\Slack\Api\Model\ObjsEnterpriseUser::class, 'json', $context));
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
            $object->setProfile($this->denormalizer->denormalize($data['profile'], \JoliCode\Slack\Api\Model\ObjsUserProfile::class, 'json', $context));
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
            $object->setTeamProfile($this->denormalizer->denormalize($data['team_profile'], \JoliCode\Slack\Api\Model\ObjsUserTeamProfile::class, 'json', $context));
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

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('color') && null !== $data->getColor()) {
            $dataArray['color'] = $data->getColor();
        }
        if ($data->isInitialized('deleted') && null !== $data->getDeleted()) {
            $dataArray['deleted'] = $data->getDeleted();
        }
        if ($data->isInitialized('enterpriseUser') && null !== $data->getEnterpriseUser()) {
            $dataArray['enterprise_user'] = $this->normalizer->normalize($data->getEnterpriseUser(), 'json', $context);
        }
        if ($data->isInitialized('has2fa') && null !== $data->getHas2fa()) {
            $dataArray['has_2fa'] = $data->getHas2fa();
        }
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('isAdmin') && null !== $data->getIsAdmin()) {
            $dataArray['is_admin'] = $data->getIsAdmin();
        }
        $dataArray['is_app_user'] = $data->getIsAppUser();
        $dataArray['is_bot'] = $data->getIsBot();
        if ($data->isInitialized('isExternal') && null !== $data->getIsExternal()) {
            $dataArray['is_external'] = $data->getIsExternal();
        }
        if ($data->isInitialized('isForgotten') && null !== $data->getIsForgotten()) {
            $dataArray['is_forgotten'] = $data->getIsForgotten();
        }
        if ($data->isInitialized('isInvitedUser') && null !== $data->getIsInvitedUser()) {
            $dataArray['is_invited_user'] = $data->getIsInvitedUser();
        }
        if ($data->isInitialized('isOwner') && null !== $data->getIsOwner()) {
            $dataArray['is_owner'] = $data->getIsOwner();
        }
        if ($data->isInitialized('isPrimaryOwner') && null !== $data->getIsPrimaryOwner()) {
            $dataArray['is_primary_owner'] = $data->getIsPrimaryOwner();
        }
        if ($data->isInitialized('isRestricted') && null !== $data->getIsRestricted()) {
            $dataArray['is_restricted'] = $data->getIsRestricted();
        }
        if ($data->isInitialized('isStranger') && null !== $data->getIsStranger()) {
            $dataArray['is_stranger'] = $data->getIsStranger();
        }
        if ($data->isInitialized('isUltraRestricted') && null !== $data->getIsUltraRestricted()) {
            $dataArray['is_ultra_restricted'] = $data->getIsUltraRestricted();
        }
        if ($data->isInitialized('locale') && null !== $data->getLocale()) {
            $dataArray['locale'] = $data->getLocale();
        }
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('presence') && null !== $data->getPresence()) {
            $dataArray['presence'] = $data->getPresence();
        }
        $dataArray['profile'] = $this->normalizer->normalize($data->getProfile(), 'json', $context);
        if ($data->isInitialized('realName') && null !== $data->getRealName()) {
            $dataArray['real_name'] = $data->getRealName();
        }
        if ($data->isInitialized('team') && null !== $data->getTeam()) {
            $dataArray['team'] = $data->getTeam();
        }
        if ($data->isInitialized('teamId') && null !== $data->getTeamId()) {
            $dataArray['team_id'] = $data->getTeamId();
        }
        if ($data->isInitialized('teamProfile') && null !== $data->getTeamProfile()) {
            $dataArray['team_profile'] = $this->normalizer->normalize($data->getTeamProfile(), 'json', $context);
        }
        if ($data->isInitialized('teams') && null !== $data->getTeams()) {
            $values = [];
            foreach ($data->getTeams() as $value) {
                $values[] = $value;
            }
            $dataArray['teams'] = $values;
        }
        if ($data->isInitialized('twoFactorType') && null !== $data->getTwoFactorType()) {
            $dataArray['two_factor_type'] = $data->getTwoFactorType();
        }
        if ($data->isInitialized('tz') && null !== $data->getTz()) {
            $dataArray['tz'] = $data->getTz();
        }
        if ($data->isInitialized('tzLabel') && null !== $data->getTzLabel()) {
            $dataArray['tz_label'] = $data->getTzLabel();
        }
        if ($data->isInitialized('tzOffset') && null !== $data->getTzOffset()) {
            $dataArray['tz_offset'] = $data->getTzOffset();
        }
        $dataArray['updated'] = $data->getUpdated();

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\ObjsUser::class => false];
    }
}
