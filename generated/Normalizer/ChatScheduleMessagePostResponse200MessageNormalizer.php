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

class ChatScheduleMessagePostResponse200MessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ChatScheduleMessagePostResponse200Message' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ChatScheduleMessagePostResponse200Message' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200Message();
        if (\array_key_exists('bot_id', $data) && null !== $data['bot_id']) {
            $object->setBotId($data['bot_id']);
        } elseif (\array_key_exists('bot_id', $data) && null === $data['bot_id']) {
            $object->setBotId(null);
        }
        if (\array_key_exists('text', $data) && null !== $data['text']) {
            $object->setText($data['text']);
        } elseif (\array_key_exists('text', $data) && null === $data['text']) {
            $object->setText(null);
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }
        if (\array_key_exists('user', $data) && null !== $data['user']) {
            $object->setUser($data['user']);
        } elseif (\array_key_exists('user', $data) && null === $data['user']) {
            $object->setUser(null);
        }
        if (\array_key_exists('username', $data) && null !== $data['username']) {
            $object->setUsername($data['username']);
        } elseif (\array_key_exists('username', $data) && null === $data['username']) {
            $object->setUsername(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getBotId()) {
            $data['bot_id'] = $object->getBotId();
        } else {
            $data['bot_id'] = null;
        }
        if (null !== $object->getText()) {
            $data['text'] = $object->getText();
        } else {
            $data['text'] = null;
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        } else {
            $data['type'] = null;
        }
        if (null !== $object->getUser()) {
            $data['user'] = $object->getUser();
        } else {
            $data['user'] = null;
        }
        if (null !== $object->getUsername()) {
            $data['username'] = $object->getUsername();
        } else {
            $data['username'] = null;
        }

        return $data;
    }
}
