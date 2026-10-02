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

class ChatScheduleMessagePostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('ok', $data) && \is_int($data['ok'])) {
            $data['ok'] = (bool) $data['ok'];
        }
        if (\array_key_exists('channel', $data) && null !== $data['channel']) {
            $object->channel = $data['channel'];
        } elseif (\array_key_exists('channel', $data)) {
            $object->channel = null;
        }
        if (\array_key_exists('message', $data) && null !== $data['message']) {
            $object->message = $this->denormalizer->denormalize($data['message'], \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200Message::class, 'json', $context);
        } elseif (\array_key_exists('message', $data)) {
            $object->message = null;
        }
        if (\array_key_exists('ok', $data) && null !== $data['ok']) {
            $object->ok = $data['ok'];
        } elseif (\array_key_exists('ok', $data)) {
            $object->ok = null;
        }
        if (\array_key_exists('post_at', $data) && null !== $data['post_at']) {
            $value = $data['post_at'];
            if (\is_int($data['post_at'])) {
                $value = $data['post_at'];
            } elseif (\is_string($data['post_at'])) {
                $value = $data['post_at'];
            }
            $object->postAt = $value;
        } elseif (\array_key_exists('post_at', $data)) {
            $object->postAt = null;
        }
        if (\array_key_exists('scheduled_message_id', $data) && null !== $data['scheduled_message_id']) {
            $object->scheduledMessageId = $data['scheduled_message_id'];
        } elseif (\array_key_exists('scheduled_message_id', $data)) {
            $object->scheduledMessageId = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['channel'] = $data->channel;
        $normalized = null === $data->message ? null : $this->normalizer->normalize($data->message, 'json', $context);
        $dataArray['message'] = is_iterable($normalized) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized) : $normalized;
        $dataArray['ok'] = $data->ok;
        $value = $data->postAt;
        if (\is_int($data->postAt)) {
            $value = $data->postAt;
        } elseif (\is_string($data->postAt)) {
            $value = $data->postAt;
        }
        $dataArray['post_at'] = $value;
        $dataArray['scheduled_message_id'] = $data->scheduledMessageId;

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200::class => false];
    }
}
