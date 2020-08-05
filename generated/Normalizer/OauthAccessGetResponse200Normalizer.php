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

class OauthAccessGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

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
        if (!\is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\OauthAccessGetResponse200();
        $data = clone $data;
        if (property_exists($data, 'access_token') && null !== $data->{'access_token'}) {
            $object->setAccessToken($data->{'access_token'});
            unset($data->{'access_token'});
        } elseif (property_exists($data, 'access_token') && null === $data->{'access_token'}) {
            $object->setAccessToken(null);
        }
        if (property_exists($data, 'bot') && null !== $data->{'bot'}) {
            $object->setBot($this->denormalizer->denormalize($data->{'bot'}, 'JoliCode\\Slack\\Api\\Model\\OauthAccessGetResponse200Bot', 'json', $context));
            unset($data->{'bot'});
        } elseif (property_exists($data, 'bot') && null === $data->{'bot'}) {
            $object->setBot(null);
        }
        if (property_exists($data, 'enterprise_id') && null !== $data->{'enterprise_id'}) {
            $object->setEnterpriseId($data->{'enterprise_id'});
            unset($data->{'enterprise_id'});
        } elseif (property_exists($data, 'enterprise_id') && null === $data->{'enterprise_id'}) {
            $object->setEnterpriseId(null);
        }
        if (property_exists($data, 'incoming_webhook') && null !== $data->{'incoming_webhook'}) {
            $object->setIncomingWebhook($this->denormalizer->denormalize($data->{'incoming_webhook'}, 'JoliCode\\Slack\\Api\\Model\\OauthAccessGetResponse200IncomingWebhook', 'json', $context));
            unset($data->{'incoming_webhook'});
        } elseif (property_exists($data, 'incoming_webhook') && null === $data->{'incoming_webhook'}) {
            $object->setIncomingWebhook(null);
        }
        if (property_exists($data, 'ok') && null !== $data->{'ok'}) {
            $object->setOk($data->{'ok'});
            unset($data->{'ok'});
        } elseif (property_exists($data, 'ok') && null === $data->{'ok'}) {
            $object->setOk(null);
        }
        if (property_exists($data, 'scope') && null !== $data->{'scope'}) {
            $object->setScope($data->{'scope'});
            unset($data->{'scope'});
        } elseif (property_exists($data, 'scope') && null === $data->{'scope'}) {
            $object->setScope(null);
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
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', $key)) {
                $object[$key] = $value;
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
        if (null !== $object->getBot()) {
            $data->{'bot'} = $this->normalizer->normalize($object->getBot(), 'json', $context);
        } else {
            $data->{'bot'} = null;
        }
        if (null !== $object->getEnterpriseId()) {
            $data->{'enterprise_id'} = $object->getEnterpriseId();
        } else {
            $data->{'enterprise_id'} = null;
        }
        if (null !== $object->getIncomingWebhook()) {
            $data->{'incoming_webhook'} = $this->normalizer->normalize($object->getIncomingWebhook(), 'json', $context);
        } else {
            $data->{'incoming_webhook'} = null;
        }
        if (null !== $object->getOk()) {
            $data->{'ok'} = $object->getOk();
        } else {
            $data->{'ok'} = null;
        }
        if (null !== $object->getScope()) {
            $data->{'scope'} = $object->getScope();
        } else {
            $data->{'scope'} = null;
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
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', $key)) {
                $data->{$key} = $value;
            }
        }

        return $data;
    }
}
