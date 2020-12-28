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

class ObjsSubteamNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ObjsSubteam' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsSubteam' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsSubteam();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('auto_provision', $data) && null !== $data['auto_provision']) {
            $object->setAutoProvision($data['auto_provision']);
        } elseif (\array_key_exists('auto_provision', $data) && null === $data['auto_provision']) {
            $object->setAutoProvision(null);
        }
        if (\array_key_exists('auto_type', $data) && null !== $data['auto_type']) {
            $object->setAutoType($data['auto_type']);
        } elseif (\array_key_exists('auto_type', $data) && null === $data['auto_type']) {
            $object->setAutoType(null);
        }
        if (\array_key_exists('channel_count', $data) && null !== $data['channel_count']) {
            $object->setChannelCount($data['channel_count']);
        } elseif (\array_key_exists('channel_count', $data) && null === $data['channel_count']) {
            $object->setChannelCount(null);
        }
        if (\array_key_exists('created_by', $data) && null !== $data['created_by']) {
            $object->setCreatedBy($data['created_by']);
        } elseif (\array_key_exists('created_by', $data) && null === $data['created_by']) {
            $object->setCreatedBy(null);
        }
        if (\array_key_exists('date_create', $data) && null !== $data['date_create']) {
            $object->setDateCreate($data['date_create']);
        } elseif (\array_key_exists('date_create', $data) && null === $data['date_create']) {
            $object->setDateCreate(null);
        }
        if (\array_key_exists('date_delete', $data) && null !== $data['date_delete']) {
            $object->setDateDelete($data['date_delete']);
        } elseif (\array_key_exists('date_delete', $data) && null === $data['date_delete']) {
            $object->setDateDelete(null);
        }
        if (\array_key_exists('date_update', $data) && null !== $data['date_update']) {
            $object->setDateUpdate($data['date_update']);
        } elseif (\array_key_exists('date_update', $data) && null === $data['date_update']) {
            $object->setDateUpdate(null);
        }
        if (\array_key_exists('deleted_by', $data) && null !== $data['deleted_by']) {
            $object->setDeletedBy($data['deleted_by']);
        } elseif (\array_key_exists('deleted_by', $data) && null === $data['deleted_by']) {
            $object->setDeletedBy(null);
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
        }
        if (\array_key_exists('enterprise_subteam_id', $data) && null !== $data['enterprise_subteam_id']) {
            $object->setEnterpriseSubteamId($data['enterprise_subteam_id']);
        } elseif (\array_key_exists('enterprise_subteam_id', $data) && null === $data['enterprise_subteam_id']) {
            $object->setEnterpriseSubteamId(null);
        }
        if (\array_key_exists('handle', $data) && null !== $data['handle']) {
            $object->setHandle($data['handle']);
        } elseif (\array_key_exists('handle', $data) && null === $data['handle']) {
            $object->setHandle(null);
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('is_external', $data) && null !== $data['is_external']) {
            $object->setIsExternal($data['is_external']);
        } elseif (\array_key_exists('is_external', $data) && null === $data['is_external']) {
            $object->setIsExternal(null);
        }
        if (\array_key_exists('is_subteam', $data) && null !== $data['is_subteam']) {
            $object->setIsSubteam($data['is_subteam']);
        } elseif (\array_key_exists('is_subteam', $data) && null === $data['is_subteam']) {
            $object->setIsSubteam(null);
        }
        if (\array_key_exists('is_usergroup', $data) && null !== $data['is_usergroup']) {
            $object->setIsUsergroup($data['is_usergroup']);
        } elseif (\array_key_exists('is_usergroup', $data) && null === $data['is_usergroup']) {
            $object->setIsUsergroup(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('prefs', $data) && null !== $data['prefs']) {
            $object->setPrefs($this->denormalizer->denormalize($data['prefs'], 'JoliCode\\Slack\\Api\\Model\\ObjsSubteamPrefs', 'json', $context));
        } elseif (\array_key_exists('prefs', $data) && null === $data['prefs']) {
            $object->setPrefs(null);
        }
        if (\array_key_exists('team_id', $data) && null !== $data['team_id']) {
            $object->setTeamId($data['team_id']);
        } elseif (\array_key_exists('team_id', $data) && null === $data['team_id']) {
            $object->setTeamId(null);
        }
        if (\array_key_exists('updated_by', $data) && null !== $data['updated_by']) {
            $object->setUpdatedBy($data['updated_by']);
        } elseif (\array_key_exists('updated_by', $data) && null === $data['updated_by']) {
            $object->setUpdatedBy(null);
        }
        if (\array_key_exists('user_count', $data) && null !== $data['user_count']) {
            $object->setUserCount($data['user_count']);
        } elseif (\array_key_exists('user_count', $data) && null === $data['user_count']) {
            $object->setUserCount(null);
        }
        if (\array_key_exists('users', $data) && null !== $data['users']) {
            $values = [];
            foreach ($data['users'] as $value) {
                $values[] = $value;
            }
            $object->setUsers($values);
        } elseif (\array_key_exists('users', $data) && null === $data['users']) {
            $object->setUsers(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['auto_provision'] = $object->getAutoProvision();
        $data['auto_type'] = $object->getAutoType();
        if (null !== $object->getChannelCount()) {
            $data['channel_count'] = $object->getChannelCount();
        }
        $data['created_by'] = $object->getCreatedBy();
        $data['date_create'] = $object->getDateCreate();
        $data['date_delete'] = $object->getDateDelete();
        $data['date_update'] = $object->getDateUpdate();
        $data['deleted_by'] = $object->getDeletedBy();
        $data['description'] = $object->getDescription();
        $data['enterprise_subteam_id'] = $object->getEnterpriseSubteamId();
        $data['handle'] = $object->getHandle();
        $data['id'] = $object->getId();
        $data['is_external'] = $object->getIsExternal();
        $data['is_subteam'] = $object->getIsSubteam();
        $data['is_usergroup'] = $object->getIsUsergroup();
        $data['name'] = $object->getName();
        $data['prefs'] = $this->normalizer->normalize($object->getPrefs(), 'json', $context);
        $data['team_id'] = $object->getTeamId();
        $data['updated_by'] = $object->getUpdatedBy();
        if (null !== $object->getUserCount()) {
            $data['user_count'] = $object->getUserCount();
        }
        if (null !== $object->getUsers()) {
            $values = [];
            foreach ($object->getUsers() as $value) {
                $values[] = $value;
            }
            $data['users'] = $values;
        }

        return $data;
    }
}
