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

class OauthTokenGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\OauthTokenGetResponse200' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\OauthTokenGetResponse200' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\OauthTokenGetResponse200();
        if (\array_key_exists('access_token', $data) && null !== $data['access_token']) {
            $object->setAccessToken($data['access_token']);
            unset($data['access_token']);
        } elseif (\array_key_exists('access_token', $data) && null === $data['access_token']) {
            $object->setAccessToken(null);
        }
        if (\array_key_exists('app_id', $data) && null !== $data['app_id']) {
            $object->setAppId($data['app_id']);
            unset($data['app_id']);
        } elseif (\array_key_exists('app_id', $data) && null === $data['app_id']) {
            $object->setAppId(null);
        }
        if (\array_key_exists('app_user_id', $data) && null !== $data['app_user_id']) {
            $object->setAppUserId($data['app_user_id']);
            unset($data['app_user_id']);
        } elseif (\array_key_exists('app_user_id', $data) && null === $data['app_user_id']) {
            $object->setAppUserId(null);
        }
        if (\array_key_exists('authorizing_user_id', $data) && null !== $data['authorizing_user_id']) {
            $object->setAuthorizingUserId($data['authorizing_user_id']);
            unset($data['authorizing_user_id']);
        } elseif (\array_key_exists('authorizing_user_id', $data) && null === $data['authorizing_user_id']) {
            $object->setAuthorizingUserId(null);
        }
        if (\array_key_exists('installer_user_id', $data) && null !== $data['installer_user_id']) {
            $object->setInstallerUserId($data['installer_user_id']);
            unset($data['installer_user_id']);
        } elseif (\array_key_exists('installer_user_id', $data) && null === $data['installer_user_id']) {
            $object->setInstallerUserId(null);
        }
        if (\array_key_exists('ok', $data) && null !== $data['ok']) {
            $object->setOk($data['ok']);
            unset($data['ok']);
        } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
            $object->setOk(null);
        }
        if (\array_key_exists('permissions', $data) && null !== $data['permissions']) {
            $values = [];
            foreach ($data['permissions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\OauthTokenGetResponse200PermissionsItem', 'json', $context);
            }
            $object->setPermissions($values);
            unset($data['permissions']);
        } elseif (\array_key_exists('permissions', $data) && null === $data['permissions']) {
            $object->setPermissions(null);
        }
        if (\array_key_exists('single_channel_id', $data) && null !== $data['single_channel_id']) {
            $object->setSingleChannelId($data['single_channel_id']);
            unset($data['single_channel_id']);
        } elseif (\array_key_exists('single_channel_id', $data) && null === $data['single_channel_id']) {
            $object->setSingleChannelId(null);
        }
        if (\array_key_exists('team_id', $data) && null !== $data['team_id']) {
            $object->setTeamId($data['team_id']);
            unset($data['team_id']);
        } elseif (\array_key_exists('team_id', $data) && null === $data['team_id']) {
            $object->setTeamId(null);
        }
        if (\array_key_exists('team_name', $data) && null !== $data['team_name']) {
            $object->setTeamName($data['team_name']);
            unset($data['team_name']);
        } elseif (\array_key_exists('team_name', $data) && null === $data['team_name']) {
            $object->setTeamName(null);
        }
        if (\array_key_exists('token_type', $data) && null !== $data['token_type']) {
            $object->setTokenType($data['token_type']);
            unset($data['token_type']);
        } elseif (\array_key_exists('token_type', $data) && null === $data['token_type']) {
            $object->setTokenType(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getAccessToken()) {
            $data['access_token'] = $object->getAccessToken();
        }
        if (null !== $object->getAppId()) {
            $data['app_id'] = $object->getAppId();
        }
        if (null !== $object->getAppUserId()) {
            $data['app_user_id'] = $object->getAppUserId();
        }
        if (null !== $object->getAuthorizingUserId()) {
            $data['authorizing_user_id'] = $object->getAuthorizingUserId();
        }
        if (null !== $object->getInstallerUserId()) {
            $data['installer_user_id'] = $object->getInstallerUserId();
        }
        if (null !== $object->getOk()) {
            $data['ok'] = $object->getOk();
        }
        if (null !== $object->getPermissions()) {
            $values = [];
            foreach ($object->getPermissions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['permissions'] = $values;
        }
        if (null !== $object->getSingleChannelId()) {
            $data['single_channel_id'] = $object->getSingleChannelId();
        }
        if (null !== $object->getTeamId()) {
            $data['team_id'] = $object->getTeamId();
        }
        if (null !== $object->getTeamName()) {
            $data['team_name'] = $object->getTeamName();
        }
        if (null !== $object->getTokenType()) {
            $data['token_type'] = $object->getTokenType();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }

        return $data;
    }
}
