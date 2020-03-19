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

class ImOpenPostResponse200ChannelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ImOpenPostResponse200Channel' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ImOpenPostResponse200Channel' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ImOpenPostResponse200Channel();
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
            $object->setLatest($this->denormalizer->denormalize($data['latest'], 'JoliCode\\Slack\\Api\\Model\\ObjsMessage', 'json', $context));
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

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getCreated()) {
            $data['created'] = $object->getCreated();
        } else {
            $data['created'] = null;
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        } else {
            $data['id'] = null;
        }
        if (null !== $object->getIsIm()) {
            $data['is_im'] = $object->getIsIm();
        } else {
            $data['is_im'] = null;
        }
        if (null !== $object->getIsOpen()) {
            $data['is_open'] = $object->getIsOpen();
        } else {
            $data['is_open'] = null;
        }
        if (null !== $object->getLastRead()) {
            $data['last_read'] = $object->getLastRead();
        } else {
            $data['last_read'] = null;
        }
        if (null !== $object->getLatest()) {
            $data['latest'] = $this->normalizer->normalize($object->getLatest(), 'json', $context);
        } else {
            $data['latest'] = null;
        }
        if (null !== $object->getUnreadCount()) {
            $data['unread_count'] = $object->getUnreadCount();
        } else {
            $data['unread_count'] = null;
        }
        if (null !== $object->getUnreadCountDisplay()) {
            $data['unread_count_display'] = $object->getUnreadCountDisplay();
        } else {
            $data['unread_count_display'] = null;
        }
        if (null !== $object->getUser()) {
            $data['user'] = $object->getUser();
        } else {
            $data['user'] = null;
        }

        return $data;
    }
}
