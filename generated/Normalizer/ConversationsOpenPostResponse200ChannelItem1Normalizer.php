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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ConversationsOpenPostResponse200ChannelItem1();
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
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('created', $data) && null !== $data['created']) {
            $object->setCreated($data['created']);
        } elseif (\array_key_exists('created', $data) && null === $data['created']) {
            $object->setCreated(null);
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('is_im', $data) && null !== $data['is_im']) {
            $object->setIsIm($data['is_im']);
        } elseif (\array_key_exists('is_im', $data) && null === $data['is_im']) {
            $object->setIsIm(null);
        }
        if (\array_key_exists('is_open', $data) && null !== $data['is_open']) {
            $object->setIsOpen($data['is_open']);
        } elseif (\array_key_exists('is_open', $data) && null === $data['is_open']) {
            $object->setIsOpen(null);
        }
        if (\array_key_exists('last_read', $data) && null !== $data['last_read']) {
            $object->setLastRead($data['last_read']);
        } elseif (\array_key_exists('last_read', $data) && null === $data['last_read']) {
            $object->setLastRead(null);
        }
        if (\array_key_exists('latest', $data) && null !== $data['latest']) {
            $object->setLatest($this->denormalizer->denormalize($data['latest'], \JoliCode\Slack\Api\Model\ObjsMessage::class, 'json', $context));
        } elseif (\array_key_exists('latest', $data) && null === $data['latest']) {
            $object->setLatest(null);
        }
        if (\array_key_exists('unread_count', $data) && null !== $data['unread_count']) {
            $object->setUnreadCount($data['unread_count']);
        } elseif (\array_key_exists('unread_count', $data) && null === $data['unread_count']) {
            $object->setUnreadCount(null);
        }
        if (\array_key_exists('unread_count_display', $data) && null !== $data['unread_count_display']) {
            $object->setUnreadCountDisplay($data['unread_count_display']);
        } elseif (\array_key_exists('unread_count_display', $data) && null === $data['unread_count_display']) {
            $object->setUnreadCountDisplay(null);
        }
        if (\array_key_exists('user', $data) && null !== $data['user']) {
            $object->setUser($data['user']);
        } elseif (\array_key_exists('user', $data) && null === $data['user']) {
            $object->setUser(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('created') && null !== $data->getCreated()) {
            $dataArray['created'] = $data->getCreated();
        }
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('isIm') && null !== $data->getIsIm()) {
            $dataArray['is_im'] = $data->getIsIm();
        }
        if ($data->isInitialized('isOpen') && null !== $data->getIsOpen()) {
            $dataArray['is_open'] = $data->getIsOpen();
        }
        if ($data->isInitialized('lastRead') && null !== $data->getLastRead()) {
            $dataArray['last_read'] = $data->getLastRead();
        }
        if ($data->isInitialized('latest') && null !== $data->getLatest()) {
            $dataArray['latest'] = $this->normalizer->normalize($data->getLatest(), 'json', $context);
        }
        if ($data->isInitialized('unreadCount') && null !== $data->getUnreadCount()) {
            $dataArray['unread_count'] = $data->getUnreadCount();
        }
        if ($data->isInitialized('unreadCountDisplay') && null !== $data->getUnreadCountDisplay()) {
            $dataArray['unread_count_display'] = $data->getUnreadCountDisplay();
        }
        if ($data->isInitialized('user') && null !== $data->getUser()) {
            $dataArray['user'] = $data->getUser();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\ConversationsOpenPostResponse200ChannelItem1::class => false];
    }
}
