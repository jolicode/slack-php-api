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

class AdminConversationsGetConversationPrefsGetResponse200PrefsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\AdminConversationsGetConversationPrefsGetResponse200Prefs' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\AdminConversationsGetConversationPrefsGetResponse200Prefs' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\AdminConversationsGetConversationPrefsGetResponse200Prefs();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('can_thread', $data) && null !== $data['can_thread']) {
            $object->setCanThread($this->denormalizer->denormalize($data['can_thread'], 'JoliCode\\Slack\\Api\\Model\\AdminConversationsGetConversationPrefsGetResponse200PrefsCanThread', 'json', $context));
        } elseif (\array_key_exists('can_thread', $data) && null === $data['can_thread']) {
            $object->setCanThread(null);
        }
        if (\array_key_exists('who_can_post', $data) && null !== $data['who_can_post']) {
            $object->setWhoCanPost($this->denormalizer->denormalize($data['who_can_post'], 'JoliCode\\Slack\\Api\\Model\\AdminConversationsGetConversationPrefsGetResponse200PrefsWhoCanPost', 'json', $context));
        } elseif (\array_key_exists('who_can_post', $data) && null === $data['who_can_post']) {
            $object->setWhoCanPost(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getCanThread()) {
            $data['can_thread'] = $this->normalizer->normalize($object->getCanThread(), 'json', $context);
        }
        if (null !== $object->getWhoCanPost()) {
            $data['who_can_post'] = $this->normalizer->normalize($object->getWhoCanPost(), 'json', $context);
        }

        return $data;
    }
}
