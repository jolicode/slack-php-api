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

class OauthTokenGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

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
        if (!\is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\OauthTokenGetResponse200();
        $data = clone $data;
        if (property_exists($data, 'access_token') && null !== $data->{'access_token'}) {
            $object->setAccessToken($data->{'access_token'});
            unset($data->{'access_token'});
        } elseif (property_exists($data, 'access_token') && null === $data->{'access_token'}) {
            $object->setAccessToken(null);
        }
        if (property_exists($data, 'app_id') && null !== $data->{'app_id'}) {
            $object->setAppId($data->{'app_id'});
            unset($data->{'app_id'});
        } elseif (property_exists($data, 'app_id') && null === $data->{'app_id'}) {
            $object->setAppId(null);
        }
        if (property_exists($data, 'app_user_id') && null !== $data->{'app_user_id'}) {
            $object->setAppUserId($data->{'app_user_id'});
            unset($data->{'app_user_id'});
        } elseif (property_exists($data, 'app_user_id') && null === $data->{'app_user_id'}) {
            $object->setAppUserId(null);
        }
        if (property_exists($data, 'authorizing_user_id') && null !== $data->{'authorizing_user_id'}) {
            $object->setAuthorizingUserId($data->{'authorizing_user_id'});
            unset($data->{'authorizing_user_id'});
        } elseif (property_exists($data, 'authorizing_user_id') && null === $data->{'authorizing_user_id'}) {
            $object->setAuthorizingUserId(null);
        }
        if (property_exists($data, 'installer_user_id') && null !== $data->{'installer_user_id'}) {
            $object->setInstallerUserId($data->{'installer_user_id'});
            unset($data->{'installer_user_id'});
        } elseif (property_exists($data, 'installer_user_id') && null === $data->{'installer_user_id'}) {
            $object->setInstallerUserId(null);
        }
        if (property_exists($data, 'ok') && null !== $data->{'ok'}) {
            $object->setOk($data->{'ok'});
            unset($data->{'ok'});
        } elseif (property_exists($data, 'ok') && null === $data->{'ok'}) {
            $object->setOk(null);
        }
        if (property_exists($data, 'permissions') && null !== $data->{'permissions'}) {
            $values = [];
            foreach ($data->{'permissions'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\OauthTokenGetResponse200PermissionsItem', 'json', $context);
            }
            $object->setPermissions($values);
            unset($data->{'permissions'});
        } elseif (property_exists($data, 'permissions') && null === $data->{'permissions'}) {
            $object->setPermissions(null);
        }
        if (property_exists($data, 'single_channel_id') && null !== $data->{'single_channel_id'}) {
            $object->setSingleChannelId($data->{'single_channel_id'});
            unset($data->{'single_channel_id'});
        } elseif (property_exists($data, 'single_channel_id') && null === $data->{'single_channel_id'}) {
            $object->setSingleChannelId(null);
        }
        if (property_exists($data, 'team_id') && null !== $data->{'team_id'}) {
            $object->setTeamId($data->{'team_id'});
            unset($data->{'team_id'});
        } elseif (property_exists($data, 'team_id') && null === $data->{'team_id'}) {
            $object->setTeamId(null);
        }
        if (property_exists($data, 'team_name') && null !== $data->{'team_name'}) {
            $object->setTeamName($data->{'team_name'});
            unset($data->{'team_name'});
        } elseif (property_exists($data, 'team_name') && null === $data->{'team_name'}) {
            $object->setTeamName(null);
        }
        if (property_exists($data, 'token_type') && null !== $data->{'token_type'}) {
            $object->setTokenType($data->{'token_type'});
            unset($data->{'token_type'});
        } elseif (property_exists($data, 'token_type') && null === $data->{'token_type'}) {
            $object->setTokenType(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAccessToken()) {
            $data->{'access_token'} = $object->getAccessToken();
        } else {
            $data->{'access_token'} = null;
        }
        if (null !== $object->getAppId()) {
            $data->{'app_id'} = $object->getAppId();
        } else {
            $data->{'app_id'} = null;
        }
        if (null !== $object->getAppUserId()) {
            $data->{'app_user_id'} = $object->getAppUserId();
        } else {
            $data->{'app_user_id'} = null;
        }
        if (null !== $object->getAuthorizingUserId()) {
            $data->{'authorizing_user_id'} = $object->getAuthorizingUserId();
        } else {
            $data->{'authorizing_user_id'} = null;
        }
        if (null !== $object->getInstallerUserId()) {
            $data->{'installer_user_id'} = $object->getInstallerUserId();
        } else {
            $data->{'installer_user_id'} = null;
        }
        if (null !== $object->getOk()) {
            $data->{'ok'} = $object->getOk();
        } else {
            $data->{'ok'} = null;
        }
        if (null !== $object->getPermissions()) {
            $values = [];
            foreach ($object->getPermissions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'permissions'} = $values;
        } else {
            $data->{'permissions'} = null;
        }
        if (null !== $object->getSingleChannelId()) {
            $data->{'single_channel_id'} = $object->getSingleChannelId();
        } else {
            $data->{'single_channel_id'} = null;
        }
        if (null !== $object->getTeamId()) {
            $data->{'team_id'} = $object->getTeamId();
        } else {
            $data->{'team_id'} = null;
        }
        if (null !== $object->getTeamName()) {
            $data->{'team_name'} = $object->getTeamName();
        } else {
            $data->{'team_name'} = null;
        }
        if (null !== $object->getTokenType()) {
            $data->{'token_type'} = $object->getTokenType();
        } else {
            $data->{'token_type'} = null;
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', $key)) {
                $data->{$key} = $value_1;
            }
        }

        return $data;
    }
}
