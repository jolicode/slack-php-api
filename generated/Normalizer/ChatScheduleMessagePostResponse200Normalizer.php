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

class ChatScheduleMessagePostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ChatScheduleMessagePostResponse200' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ChatScheduleMessagePostResponse200' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('channel', $data) && null !== $data['channel']) {
            $object->setChannel($data['channel']);
        } elseif (\array_key_exists('channel', $data) && null === $data['channel']) {
            $object->setChannel(null);
        }
        if (\array_key_exists('message', $data) && null !== $data['message']) {
            $object->setMessage($this->denormalizer->denormalize($data['message'], 'JoliCode\\Slack\\Api\\Model\\ChatScheduleMessagePostResponse200Message', 'json', $context));
        } elseif (\array_key_exists('message', $data) && null === $data['message']) {
            $object->setMessage(null);
        }
        if (\array_key_exists('ok', $data) && null !== $data['ok']) {
            $object->setOk($data['ok']);
        } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
            $object->setOk(null);
        }
        if (\array_key_exists('post_at', $data) && null !== $data['post_at']) {
            $value = $data['post_at'];
            if (\is_int($data['post_at'])) {
                $value = $data['post_at'];
            } elseif (\is_string($data['post_at'])) {
                $value = $data['post_at'];
            }
            $object->setPostAt($value);
        } elseif (\array_key_exists('post_at', $data) && null === $data['post_at']) {
            $object->setPostAt(null);
        }
        if (\array_key_exists('scheduled_message_id', $data) && null !== $data['scheduled_message_id']) {
            $object->setScheduledMessageId($data['scheduled_message_id']);
        } elseif (\array_key_exists('scheduled_message_id', $data) && null === $data['scheduled_message_id']) {
            $object->setScheduledMessageId(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['channel'] = $object->getChannel();
        $data['message'] = $this->normalizer->normalize($object->getMessage(), 'json', $context);
        $data['ok'] = $object->getOk();
        $value = $object->getPostAt();
        if (\is_int($object->getPostAt())) {
            $value = $object->getPostAt();
        } elseif (\is_string($object->getPostAt())) {
            $value = $object->getPostAt();
        }
        $data['post_at'] = $value;
        $data['scheduled_message_id'] = $object->getScheduledMessageId();

        return $data;
    }
}
