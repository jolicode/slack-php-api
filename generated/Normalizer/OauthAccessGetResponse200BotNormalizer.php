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

class OauthAccessGetResponse200BotNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\OauthAccessGetResponse200Bot' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\OauthAccessGetResponse200Bot' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\OauthAccessGetResponse200Bot();
        $data = clone $data;
        if (property_exists($data, 'bot_access_token') && null !== $data->{'bot_access_token'}) {
            $object->setBotAccessToken($data->{'bot_access_token'});
            unset($data->{'bot_access_token'});
        } elseif (property_exists($data, 'bot_access_token') && null === $data->{'bot_access_token'}) {
            $object->setBotAccessToken(null);
        }
        if (property_exists($data, 'bot_user_id') && null !== $data->{'bot_user_id'}) {
            $object->setBotUserId($data->{'bot_user_id'});
            unset($data->{'bot_user_id'});
        } elseif (property_exists($data, 'bot_user_id') && null === $data->{'bot_user_id'}) {
            $object->setBotUserId(null);
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
        if (null !== $object->getBotAccessToken()) {
            $data->{'bot_access_token'} = $object->getBotAccessToken();
        } else {
            $data->{'bot_access_token'} = null;
        }
        if (null !== $object->getBotUserId()) {
            $data->{'bot_user_id'} = $object->getBotUserId();
        } else {
            $data->{'bot_user_id'} = null;
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', $key)) {
                $data->{$key} = $value;
            }
        }

        return $data;
    }
}
