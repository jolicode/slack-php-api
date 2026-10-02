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

class ObjsSubteamNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\ObjsSubteam::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\ObjsSubteam::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \JoliCode\Slack\Api\Model\ObjsSubteam();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('auto_provision', $data) && \is_int($data['auto_provision'])) {
            $data['auto_provision'] = (bool) $data['auto_provision'];
        }
        if (\array_key_exists('is_external', $data) && \is_int($data['is_external'])) {
            $data['is_external'] = (bool) $data['is_external'];
        }
        if (\array_key_exists('is_subteam', $data) && \is_int($data['is_subteam'])) {
            $data['is_subteam'] = (bool) $data['is_subteam'];
        }
        if (\array_key_exists('is_usergroup', $data) && \is_int($data['is_usergroup'])) {
            $data['is_usergroup'] = (bool) $data['is_usergroup'];
        }
        if (\array_key_exists('auto_provision', $data) && null !== $data['auto_provision']) {
            $object->autoProvision = $data['auto_provision'];
        } elseif (\array_key_exists('auto_provision', $data)) {
            $object->autoProvision = null;
        }
        if (\array_key_exists('auto_type', $data) && null !== $data['auto_type']) {
            $object->autoType = $data['auto_type'];
        } elseif (\array_key_exists('auto_type', $data)) {
            $object->autoType = null;
        }
        if (\array_key_exists('channel_count', $data) && null !== $data['channel_count']) {
            $object->channelCount = $data['channel_count'];
        } elseif (\array_key_exists('channel_count', $data)) {
            $object->channelCount = null;
        }
        if (\array_key_exists('created_by', $data) && null !== $data['created_by']) {
            $object->createdBy = $data['created_by'];
        } elseif (\array_key_exists('created_by', $data)) {
            $object->createdBy = null;
        }
        if (\array_key_exists('date_create', $data) && null !== $data['date_create']) {
            $object->dateCreate = $data['date_create'];
        } elseif (\array_key_exists('date_create', $data)) {
            $object->dateCreate = null;
        }
        if (\array_key_exists('date_delete', $data) && null !== $data['date_delete']) {
            $object->dateDelete = $data['date_delete'];
        } elseif (\array_key_exists('date_delete', $data)) {
            $object->dateDelete = null;
        }
        if (\array_key_exists('date_update', $data) && null !== $data['date_update']) {
            $object->dateUpdate = $data['date_update'];
        } elseif (\array_key_exists('date_update', $data)) {
            $object->dateUpdate = null;
        }
        if (\array_key_exists('deleted_by', $data) && null !== $data['deleted_by']) {
            $object->deletedBy = $data['deleted_by'];
        } elseif (\array_key_exists('deleted_by', $data)) {
            $object->deletedBy = null;
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->description = $data['description'];
        } elseif (\array_key_exists('description', $data)) {
            $object->description = null;
        }
        if (\array_key_exists('enterprise_subteam_id', $data) && null !== $data['enterprise_subteam_id']) {
            $object->enterpriseSubteamId = $data['enterprise_subteam_id'];
        } elseif (\array_key_exists('enterprise_subteam_id', $data)) {
            $object->enterpriseSubteamId = null;
        }
        if (\array_key_exists('handle', $data) && null !== $data['handle']) {
            $object->handle = $data['handle'];
        } elseif (\array_key_exists('handle', $data)) {
            $object->handle = null;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->id = $data['id'];
        } elseif (\array_key_exists('id', $data)) {
            $object->id = null;
        }
        if (\array_key_exists('is_external', $data) && null !== $data['is_external']) {
            $object->isExternal = $data['is_external'];
        } elseif (\array_key_exists('is_external', $data)) {
            $object->isExternal = null;
        }
        if (\array_key_exists('is_subteam', $data) && null !== $data['is_subteam']) {
            $object->isSubteam = $data['is_subteam'];
        } elseif (\array_key_exists('is_subteam', $data)) {
            $object->isSubteam = null;
        }
        if (\array_key_exists('is_usergroup', $data) && null !== $data['is_usergroup']) {
            $object->isUsergroup = $data['is_usergroup'];
        } elseif (\array_key_exists('is_usergroup', $data)) {
            $object->isUsergroup = null;
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->name = $data['name'];
        } elseif (\array_key_exists('name', $data)) {
            $object->name = null;
        }
        if (\array_key_exists('prefs', $data) && null !== $data['prefs']) {
            $object->prefs = $this->denormalizer->denormalize($data['prefs'], \JoliCode\Slack\Api\Model\ObjsSubteamPrefs::class, 'json', $context);
        } elseif (\array_key_exists('prefs', $data)) {
            $object->prefs = null;
        }
        if (\array_key_exists('team_id', $data) && null !== $data['team_id']) {
            $object->teamId = $data['team_id'];
        } elseif (\array_key_exists('team_id', $data)) {
            $object->teamId = null;
        }
        if (\array_key_exists('updated_by', $data) && null !== $data['updated_by']) {
            $object->updatedBy = $data['updated_by'];
        } elseif (\array_key_exists('updated_by', $data)) {
            $object->updatedBy = null;
        }
        if (\array_key_exists('user_count', $data) && null !== $data['user_count']) {
            $object->userCount = $data['user_count'];
        } elseif (\array_key_exists('user_count', $data)) {
            $object->userCount = null;
        }
        if (\array_key_exists('users', $data) && null !== $data['users']) {
            $values = [];
            foreach ($data['users'] as $value) {
                $values[] = $value;
            }
            $object->users = $values;
        } elseif (\array_key_exists('users', $data)) {
            $object->users = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['auto_provision'] = $data->autoProvision;
        $dataArray['auto_type'] = $data->autoType;
        if (\array_key_exists('channelCount', get_object_vars($data)) && null !== ($data->channelCount ?? null)) {
            $dataArray['channel_count'] = $data->channelCount;
        }
        $dataArray['created_by'] = $data->createdBy;
        $dataArray['date_create'] = $data->dateCreate;
        $dataArray['date_delete'] = $data->dateDelete;
        $dataArray['date_update'] = $data->dateUpdate;
        $dataArray['deleted_by'] = $data->deletedBy;
        $dataArray['description'] = $data->description;
        $dataArray['enterprise_subteam_id'] = $data->enterpriseSubteamId;
        $dataArray['handle'] = $data->handle;
        $dataArray['id'] = $data->id;
        $dataArray['is_external'] = $data->isExternal;
        $dataArray['is_subteam'] = $data->isSubteam;
        $dataArray['is_usergroup'] = $data->isUsergroup;
        $dataArray['name'] = $data->name;
        $normalized = null === $data->prefs ? null : $this->normalizer->normalize($data->prefs, 'json', $context);
        $dataArray['prefs'] = is_iterable($normalized) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized) : $normalized;
        $dataArray['team_id'] = $data->teamId;
        $dataArray['updated_by'] = $data->updatedBy;
        if (\array_key_exists('userCount', get_object_vars($data)) && null !== ($data->userCount ?? null)) {
            $dataArray['user_count'] = $data->userCount;
        }
        if (\array_key_exists('users', get_object_vars($data)) && null !== ($data->users ?? null)) {
            $values = [];
            foreach ($data->users as $value) {
                $values[] = $value;
            }
            $dataArray['users'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\ObjsSubteam::class => false];
    }
}
