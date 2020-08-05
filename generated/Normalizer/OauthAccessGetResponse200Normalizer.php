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

class OauthAccessGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\OauthAccessGetResponse200' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\OauthAccessGetResponse200' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\OauthAccessGetResponse200();
        if (\array_key_exists('access_token', $data) && null !== $data['access_token']) {
            $object->setAccessToken($data['access_token']);
            unset($data['access_token']);
        } elseif (\array_key_exists('access_token', $data) && null === $data['access_token']) {
            $object->setAccessToken(null);
        }
        if (\array_key_exists('bot', $data) && null !== $data['bot']) {
            $object->setBot($this->denormalizer->denormalize($data['bot'], 'JoliCode\\Slack\\Api\\Model\\OauthAccessGetResponse200Bot', 'json', $context));
            unset($data['bot']);
        } elseif (\array_key_exists('bot', $data) && null === $data['bot']) {
            $object->setBot(null);
        }
        if (\array_key_exists('enterprise_id', $data) && null !== $data['enterprise_id']) {
            $object->setEnterpriseId($data['enterprise_id']);
            unset($data['enterprise_id']);
        } elseif (\array_key_exists('enterprise_id', $data) && null === $data['enterprise_id']) {
            $object->setEnterpriseId(null);
        }
        if (\array_key_exists('incoming_webhook', $data) && null !== $data['incoming_webhook']) {
            $object->setIncomingWebhook($this->denormalizer->denormalize($data['incoming_webhook'], 'JoliCode\\Slack\\Api\\Model\\OauthAccessGetResponse200IncomingWebhook', 'json', $context));
            unset($data['incoming_webhook']);
        } elseif (\array_key_exists('incoming_webhook', $data) && null === $data['incoming_webhook']) {
            $object->setIncomingWebhook(null);
        }
        if (\array_key_exists('ok', $data) && null !== $data['ok']) {
            $object->setOk($data['ok']);
            unset($data['ok']);
        } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
            $object->setOk(null);
        }
        if (\array_key_exists('scope', $data) && null !== $data['scope']) {
            $object->setScope($data['scope']);
            unset($data['scope']);
        } elseif (\array_key_exists('scope', $data) && null === $data['scope']) {
            $object->setScope(null);
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
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
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
        if (null !== $object->getBot()) {
            $data['bot'] = $this->normalizer->normalize($object->getBot(), 'json', $context);
        }
        if (null !== $object->getEnterpriseId()) {
            $data['enterprise_id'] = $object->getEnterpriseId();
        }
        if (null !== $object->getIncomingWebhook()) {
            $data['incoming_webhook'] = $this->normalizer->normalize($object->getIncomingWebhook(), 'json', $context);
        }
        if (null !== $object->getOk()) {
            $data['ok'] = $object->getOk();
        }
        if (null !== $object->getScope()) {
            $data['scope'] = $object->getScope();
        }
        if (null !== $object->getTeamId()) {
            $data['team_id'] = $object->getTeamId();
        }
        if (null !== $object->getTeamName()) {
            $data['team_name'] = $object->getTeamName();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
