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

class AdminConversationsGetConversationPrefsGetResponse200PrefsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\AdminConversationsGetConversationPrefsGetResponse200Prefs::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\AdminConversationsGetConversationPrefsGetResponse200Prefs::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \JoliCode\Slack\Api\Model\AdminConversationsGetConversationPrefsGetResponse200Prefs();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('can_thread', $data) && null !== $data['can_thread']) {
            $object->canThread = $this->denormalizer->denormalize($data['can_thread'], \JoliCode\Slack\Api\Model\AdminConversationsGetConversationPrefsGetResponse200PrefsCanThread::class, 'json', $context);
        } elseif (\array_key_exists('can_thread', $data)) {
            $object->canThread = null;
        }
        if (\array_key_exists('who_can_post', $data) && null !== $data['who_can_post']) {
            $object->whoCanPost = $this->denormalizer->denormalize($data['who_can_post'], \JoliCode\Slack\Api\Model\AdminConversationsGetConversationPrefsGetResponse200PrefsWhoCanPost::class, 'json', $context);
        } elseif (\array_key_exists('who_can_post', $data)) {
            $object->whoCanPost = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('canThread', get_object_vars($data)) && null !== ($data->canThread ?? null)) {
            $normalized = $this->normalizer->normalize($data->canThread, 'json', $context);
            $dataArray['can_thread'] = is_iterable($normalized) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized) : $normalized;
        }
        if (\array_key_exists('whoCanPost', get_object_vars($data)) && null !== ($data->whoCanPost ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->whoCanPost, 'json', $context);
            $dataArray['who_can_post'] = is_iterable($normalized_1) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\AdminConversationsGetConversationPrefsGetResponse200Prefs::class => false];
    }
}
