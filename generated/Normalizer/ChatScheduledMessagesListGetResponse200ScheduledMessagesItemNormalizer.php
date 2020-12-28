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

class ChatScheduledMessagesListGetResponse200ScheduledMessagesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ChatScheduledMessagesListGetResponse200ScheduledMessagesItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ChatScheduledMessagesListGetResponse200ScheduledMessagesItem' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ChatScheduledMessagesListGetResponse200ScheduledMessagesItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('channel_id', $data) && null !== $data['channel_id']) {
            $object->setChannelId($data['channel_id']);
        } elseif (\array_key_exists('channel_id', $data) && null === $data['channel_id']) {
            $object->setChannelId(null);
        }
        if (\array_key_exists('date_created', $data) && null !== $data['date_created']) {
            $object->setDateCreated($data['date_created']);
        } elseif (\array_key_exists('date_created', $data) && null === $data['date_created']) {
            $object->setDateCreated(null);
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
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
        if (\array_key_exists('text', $data) && null !== $data['text']) {
            $object->setText($data['text']);
        } elseif (\array_key_exists('text', $data) && null === $data['text']) {
            $object->setText(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['channel_id'] = $object->getChannelId();
        $data['date_created'] = $object->getDateCreated();
        $data['id'] = $object->getId();
        $value = $object->getPostAt();
        if (\is_int($object->getPostAt())) {
            $value = $object->getPostAt();
        } elseif (\is_string($object->getPostAt())) {
            $value = $object->getPostAt();
        }
        $data['post_at'] = $value;
        if (null !== $object->getText()) {
            $data['text'] = $object->getText();
        }

        return $data;
    }
}
