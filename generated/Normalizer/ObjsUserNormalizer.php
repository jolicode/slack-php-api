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
        $object = new \JoliCode\Slack\Api\Model\ObjsUser();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
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
        if (\array_key_exists('color', $data) && null !== $data['color']) {
            $object->color = $data['color'];
        } elseif (\array_key_exists('color', $data)) {
            $object->color = null;
        }
        if (\array_key_exists('deleted', $data) && null !== $data['deleted']) {
            $object->deleted = $data['deleted'];
        } elseif (\array_key_exists('deleted', $data)) {
            $object->deleted = null;
        }
        if (\array_key_exists('enterprise_user', $data) && null !== $data['enterprise_user']) {
            $object->enterpriseUser = $this->denormalizer->denormalize($data['enterprise_user'], \JoliCode\Slack\Api\Model\ObjsEnterpriseUser::class, 'json', $context);
        } elseif (\array_key_exists('enterprise_user', $data)) {
            $object->enterpriseUser = null;
        }
        if (\array_key_exists('has_2fa', $data) && null !== $data['has_2fa']) {
            $object->has2fa = $data['has_2fa'];
        } elseif (\array_key_exists('has_2fa', $data)) {
            $object->has2fa = null;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->id = $data['id'];
        } elseif (\array_key_exists('id', $data)) {
            $object->id = null;
        }
        if (\array_key_exists('is_admin', $data) && null !== $data['is_admin']) {
            $object->isAdmin = $data['is_admin'];
        } elseif (\array_key_exists('is_admin', $data)) {
            $object->isAdmin = null;
        }
        if (\array_key_exists('is_app_user', $data) && null !== $data['is_app_user']) {
            $object->isAppUser = $data['is_app_user'];
        } elseif (\array_key_exists('is_app_user', $data)) {
            $object->isAppUser = null;
        }
        if (\array_key_exists('is_bot', $data) && null !== $data['is_bot']) {
            $object->isBot = $data['is_bot'];
        } elseif (\array_key_exists('is_bot', $data)) {
            $object->isBot = null;
        }
        if (\array_key_exists('is_external', $data) && null !== $data['is_external']) {
            $object->isExternal = $data['is_external'];
        } elseif (\array_key_exists('is_external', $data)) {
            $object->isExternal = null;
        }
        if (\array_key_exists('is_forgotten', $data) && null !== $data['is_forgotten']) {
            $object->isForgotten = $data['is_forgotten'];
        } elseif (\array_key_exists('is_forgotten', $data)) {
            $object->isForgotten = null;
        }
        if (\array_key_exists('is_invited_user', $data) && null !== $data['is_invited_user']) {
            $object->isInvitedUser = $data['is_invited_user'];
        } elseif (\array_key_exists('is_invited_user', $data)) {
            $object->isInvitedUser = null;
        }
        if (\array_key_exists('is_owner', $data) && null !== $data['is_owner']) {
            $object->isOwner = $data['is_owner'];
        } elseif (\array_key_exists('is_owner', $data)) {
            $object->isOwner = null;
        }
        if (\array_key_exists('is_primary_owner', $data) && null !== $data['is_primary_owner']) {
            $object->isPrimaryOwner = $data['is_primary_owner'];
        } elseif (\array_key_exists('is_primary_owner', $data)) {
            $object->isPrimaryOwner = null;
        }
        if (\array_key_exists('is_restricted', $data) && null !== $data['is_restricted']) {
            $object->isRestricted = $data['is_restricted'];
        } elseif (\array_key_exists('is_restricted', $data)) {
            $object->isRestricted = null;
        }
        if (\array_key_exists('is_stranger', $data) && null !== $data['is_stranger']) {
            $object->isStranger = $data['is_stranger'];
        } elseif (\array_key_exists('is_stranger', $data)) {
            $object->isStranger = null;
        }
        if (\array_key_exists('is_ultra_restricted', $data) && null !== $data['is_ultra_restricted']) {
            $object->isUltraRestricted = $data['is_ultra_restricted'];
        } elseif (\array_key_exists('is_ultra_restricted', $data)) {
            $object->isUltraRestricted = null;
        }
        if (\array_key_exists('locale', $data) && null !== $data['locale']) {
            $object->locale = $data['locale'];
        } elseif (\array_key_exists('locale', $data)) {
            $object->locale = null;
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->name = $data['name'];
        } elseif (\array_key_exists('name', $data)) {
            $object->name = null;
        }
        if (\array_key_exists('presence', $data) && null !== $data['presence']) {
            $object->presence = $data['presence'];
        } elseif (\array_key_exists('presence', $data)) {
            $object->presence = null;
        }
        if (\array_key_exists('profile', $data) && null !== $data['profile']) {
            $object->profile = $this->denormalizer->denormalize($data['profile'], \JoliCode\Slack\Api\Model\ObjsUserProfile::class, 'json', $context);
        } elseif (\array_key_exists('profile', $data)) {
            $object->profile = null;
        }
        if (\array_key_exists('real_name', $data) && null !== $data['real_name']) {
            $object->realName = $data['real_name'];
        } elseif (\array_key_exists('real_name', $data)) {
            $object->realName = null;
        }
        if (\array_key_exists('team', $data) && null !== $data['team']) {
            $object->team = $data['team'];
        } elseif (\array_key_exists('team', $data)) {
            $object->team = null;
        }
        if (\array_key_exists('team_id', $data) && null !== $data['team_id']) {
            $object->teamId = $data['team_id'];
        } elseif (\array_key_exists('team_id', $data)) {
            $object->teamId = null;
        }
        if (\array_key_exists('team_profile', $data) && null !== $data['team_profile']) {
            $object->teamProfile = $this->denormalizer->denormalize($data['team_profile'], \JoliCode\Slack\Api\Model\ObjsUserTeamProfile::class, 'json', $context);
        } elseif (\array_key_exists('team_profile', $data)) {
            $object->teamProfile = null;
        }
        if (\array_key_exists('teams', $data) && null !== $data['teams']) {
            $values = [];
            foreach ($data['teams'] as $value) {
                $values[] = $value;
            }
            $object->teams = $values;
        } elseif (\array_key_exists('teams', $data)) {
            $object->teams = null;
        }
        if (\array_key_exists('two_factor_type', $data) && null !== $data['two_factor_type']) {
            $object->twoFactorType = $data['two_factor_type'];
        } elseif (\array_key_exists('two_factor_type', $data)) {
            $object->twoFactorType = null;
        }
        if (\array_key_exists('tz', $data) && null !== $data['tz']) {
            $object->tz = $data['tz'];
        } elseif (\array_key_exists('tz', $data)) {
            $object->tz = null;
        }
        if (\array_key_exists('tz_label', $data) && null !== $data['tz_label']) {
            $object->tzLabel = $data['tz_label'];
        } elseif (\array_key_exists('tz_label', $data)) {
            $object->tzLabel = null;
        }
        if (\array_key_exists('tz_offset', $data) && null !== $data['tz_offset']) {
            $object->tzOffset = $data['tz_offset'];
        } elseif (\array_key_exists('tz_offset', $data)) {
            $object->tzOffset = null;
        }
        if (\array_key_exists('updated', $data) && null !== $data['updated']) {
            $object->updated = $data['updated'];
        } elseif (\array_key_exists('updated', $data)) {
            $object->updated = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('color', get_object_vars($data)) && null !== ($data->color ?? null)) {
            $dataArray['color'] = $data->color;
        }
        if (\array_key_exists('deleted', get_object_vars($data)) && null !== ($data->deleted ?? null)) {
            $dataArray['deleted'] = $data->deleted;
        }
        if (\array_key_exists('enterpriseUser', get_object_vars($data)) && null !== ($data->enterpriseUser ?? null)) {
            $normalized = $this->normalizer->normalize($data->enterpriseUser, 'json', $context);
            $dataArray['enterprise_user'] = is_iterable($normalized) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized) : $normalized;
        }
        if (\array_key_exists('has2fa', get_object_vars($data)) && null !== ($data->has2fa ?? null)) {
            $dataArray['has_2fa'] = $data->has2fa;
        }
        $dataArray['id'] = $data->id;
        if (\array_key_exists('isAdmin', get_object_vars($data)) && null !== ($data->isAdmin ?? null)) {
            $dataArray['is_admin'] = $data->isAdmin;
        }
        $dataArray['is_app_user'] = $data->isAppUser;
        $dataArray['is_bot'] = $data->isBot;
        if (\array_key_exists('isExternal', get_object_vars($data)) && null !== ($data->isExternal ?? null)) {
            $dataArray['is_external'] = $data->isExternal;
        }
        if (\array_key_exists('isForgotten', get_object_vars($data)) && null !== ($data->isForgotten ?? null)) {
            $dataArray['is_forgotten'] = $data->isForgotten;
        }
        if (\array_key_exists('isInvitedUser', get_object_vars($data)) && null !== ($data->isInvitedUser ?? null)) {
            $dataArray['is_invited_user'] = $data->isInvitedUser;
        }
        if (\array_key_exists('isOwner', get_object_vars($data)) && null !== ($data->isOwner ?? null)) {
            $dataArray['is_owner'] = $data->isOwner;
        }
        if (\array_key_exists('isPrimaryOwner', get_object_vars($data)) && null !== ($data->isPrimaryOwner ?? null)) {
            $dataArray['is_primary_owner'] = $data->isPrimaryOwner;
        }
        if (\array_key_exists('isRestricted', get_object_vars($data)) && null !== ($data->isRestricted ?? null)) {
            $dataArray['is_restricted'] = $data->isRestricted;
        }
        if (\array_key_exists('isStranger', get_object_vars($data)) && null !== ($data->isStranger ?? null)) {
            $dataArray['is_stranger'] = $data->isStranger;
        }
        if (\array_key_exists('isUltraRestricted', get_object_vars($data)) && null !== ($data->isUltraRestricted ?? null)) {
            $dataArray['is_ultra_restricted'] = $data->isUltraRestricted;
        }
        if (\array_key_exists('locale', get_object_vars($data)) && null !== ($data->locale ?? null)) {
            $dataArray['locale'] = $data->locale;
        }
        $dataArray['name'] = $data->name;
        if (\array_key_exists('presence', get_object_vars($data)) && null !== ($data->presence ?? null)) {
            $dataArray['presence'] = $data->presence;
        }
        $normalized_1 = null === $data->profile ? null : $this->normalizer->normalize($data->profile, 'json', $context);
        $dataArray['profile'] = is_iterable($normalized_1) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
        if (\array_key_exists('realName', get_object_vars($data)) && null !== ($data->realName ?? null)) {
            $dataArray['real_name'] = $data->realName;
        }
        if (\array_key_exists('team', get_object_vars($data)) && null !== ($data->team ?? null)) {
            $dataArray['team'] = $data->team;
        }
        if (\array_key_exists('teamId', get_object_vars($data)) && null !== ($data->teamId ?? null)) {
            $dataArray['team_id'] = $data->teamId;
        }
        if (\array_key_exists('teamProfile', get_object_vars($data)) && null !== ($data->teamProfile ?? null)) {
            $normalized_2 = $this->normalizer->normalize($data->teamProfile, 'json', $context);
            $dataArray['team_profile'] = is_iterable($normalized_2) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (\array_key_exists('teams', get_object_vars($data)) && null !== ($data->teams ?? null)) {
            $values = [];
            foreach ($data->teams as $value) {
                $values[] = $value;
            }
            $dataArray['teams'] = $values;
        }
        if (\array_key_exists('twoFactorType', get_object_vars($data)) && null !== ($data->twoFactorType ?? null)) {
            $dataArray['two_factor_type'] = $data->twoFactorType;
        }
        if (\array_key_exists('tz', get_object_vars($data)) && null !== ($data->tz ?? null)) {
            $dataArray['tz'] = $data->tz;
        }
        if (\array_key_exists('tzLabel', get_object_vars($data)) && null !== ($data->tzLabel ?? null)) {
            $dataArray['tz_label'] = $data->tzLabel;
        }
        if (\array_key_exists('tzOffset', get_object_vars($data)) && null !== ($data->tzOffset ?? null)) {
            $dataArray['tz_offset'] = $data->tzOffset;
        }
        $dataArray['updated'] = $data->updated;

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\ObjsUser::class => false];
    }
}
