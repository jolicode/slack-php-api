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

class ConversationsOpenPostResponse200ChannelItem1Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\ConversationsOpenPostResponse200ChannelItem1::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\ConversationsOpenPostResponse200ChannelItem1::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \JoliCode\Slack\Api\Model\ConversationsOpenPostResponse200ChannelItem1();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('unread_count', $data) && \is_int($data['unread_count'])) {
            $data['unread_count'] = (float) $data['unread_count'];
        }
        if (\array_key_exists('unread_count_display', $data) && \is_int($data['unread_count_display'])) {
            $data['unread_count_display'] = (float) $data['unread_count_display'];
        }
        if (\array_key_exists('is_im', $data) && \is_int($data['is_im'])) {
            $data['is_im'] = (bool) $data['is_im'];
        }
        if (\array_key_exists('is_open', $data) && \is_int($data['is_open'])) {
            $data['is_open'] = (bool) $data['is_open'];
        }
        if (\array_key_exists('created', $data) && null !== $data['created']) {
            $object->created = $data['created'];
        } elseif (\array_key_exists('created', $data)) {
            $object->created = null;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->id = $data['id'];
        } elseif (\array_key_exists('id', $data)) {
            $object->id = null;
        }
        if (\array_key_exists('is_im', $data) && null !== $data['is_im']) {
            $object->isIm = $data['is_im'];
        } elseif (\array_key_exists('is_im', $data)) {
            $object->isIm = null;
        }
        if (\array_key_exists('is_open', $data) && null !== $data['is_open']) {
            $object->isOpen = $data['is_open'];
        } elseif (\array_key_exists('is_open', $data)) {
            $object->isOpen = null;
        }
        if (\array_key_exists('last_read', $data) && null !== $data['last_read']) {
            $object->lastRead = $data['last_read'];
        } elseif (\array_key_exists('last_read', $data)) {
            $object->lastRead = null;
        }
        if (\array_key_exists('latest', $data) && null !== $data['latest']) {
            $object->latest = $this->denormalizer->denormalize($data['latest'], \JoliCode\Slack\Api\Model\ObjsMessage::class, 'json', $context);
        } elseif (\array_key_exists('latest', $data)) {
            $object->latest = null;
        }
        if (\array_key_exists('unread_count', $data) && null !== $data['unread_count']) {
            $object->unreadCount = $data['unread_count'];
        } elseif (\array_key_exists('unread_count', $data)) {
            $object->unreadCount = null;
        }
        if (\array_key_exists('unread_count_display', $data) && null !== $data['unread_count_display']) {
            $object->unreadCountDisplay = $data['unread_count_display'];
        } elseif (\array_key_exists('unread_count_display', $data)) {
            $object->unreadCountDisplay = null;
        }
        if (\array_key_exists('user', $data) && null !== $data['user']) {
            $object->user = $data['user'];
        } elseif (\array_key_exists('user', $data)) {
            $object->user = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('created', get_object_vars($data)) && null !== ($data->created ?? null)) {
            $dataArray['created'] = $data->created;
        }
        $dataArray['id'] = $data->id;
        if (\array_key_exists('isIm', get_object_vars($data)) && null !== ($data->isIm ?? null)) {
            $dataArray['is_im'] = $data->isIm;
        }
        if (\array_key_exists('isOpen', get_object_vars($data)) && null !== ($data->isOpen ?? null)) {
            $dataArray['is_open'] = $data->isOpen;
        }
        if (\array_key_exists('lastRead', get_object_vars($data)) && null !== ($data->lastRead ?? null)) {
            $dataArray['last_read'] = $data->lastRead;
        }
        if (\array_key_exists('latest', get_object_vars($data)) && null !== ($data->latest ?? null)) {
            $normalized = $this->normalizer->normalize($data->latest, 'json', $context);
            $dataArray['latest'] = is_iterable($normalized) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized) : $normalized;
        }
        if (\array_key_exists('unreadCount', get_object_vars($data)) && null !== ($data->unreadCount ?? null)) {
            $dataArray['unread_count'] = $data->unreadCount;
        }
        if (\array_key_exists('unreadCountDisplay', get_object_vars($data)) && null !== ($data->unreadCountDisplay ?? null)) {
            $dataArray['unread_count_display'] = $data->unreadCountDisplay;
        }
        if (\array_key_exists('user', get_object_vars($data)) && null !== ($data->user ?? null)) {
            $dataArray['user'] = $data->user;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\ConversationsOpenPostResponse200ChannelItem1::class => false];
    }
}
