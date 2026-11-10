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

class ChatScheduleMessagePostResponse200MessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200Message::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200Message::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200Message();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('attachments', $data) && null !== $data['attachments']) {
            $values = [];
            foreach ($data['attachments'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200MessageAttachmentsItem::class, 'json', $context);
            }
            $object->attachments = $values;
        } elseif (\array_key_exists('attachments', $data)) {
            $object->attachments = null;
        }
        if (\array_key_exists('bot_id', $data) && null !== $data['bot_id']) {
            $object->botId = $data['bot_id'];
        } elseif (\array_key_exists('bot_id', $data)) {
            $object->botId = null;
        }
        if (\array_key_exists('bot_profile', $data) && null !== $data['bot_profile']) {
            $object->botProfile = $this->denormalizer->denormalize($data['bot_profile'], \JoliCode\Slack\Api\Model\ObjsBotProfile::class, 'json', $context);
        } elseif (\array_key_exists('bot_profile', $data)) {
            $object->botProfile = null;
        }
        if (\array_key_exists('subtype', $data) && null !== $data['subtype']) {
            $object->subtype = $data['subtype'];
        } elseif (\array_key_exists('subtype', $data)) {
            $object->subtype = null;
        }
        if (\array_key_exists('team', $data) && null !== $data['team']) {
            $object->team = $data['team'];
        } elseif (\array_key_exists('team', $data)) {
            $object->team = null;
        }
        if (\array_key_exists('text', $data) && null !== $data['text']) {
            $object->text = $data['text'];
        } elseif (\array_key_exists('text', $data)) {
            $object->text = null;
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->type = $data['type'];
        } elseif (\array_key_exists('type', $data)) {
            $object->type = null;
        }
        if (\array_key_exists('user', $data) && null !== $data['user']) {
            $object->user = $data['user'];
        } elseif (\array_key_exists('user', $data)) {
            $object->user = null;
        }
        if (\array_key_exists('username', $data) && null !== $data['username']) {
            $object->username = $data['username'];
        } elseif (\array_key_exists('username', $data)) {
            $object->username = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('attachments', get_object_vars($data)) && null !== ($data->attachments ?? null)) {
            $values = [];
            foreach ($data->attachments as $value) {
                $normalized = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = is_iterable($normalized) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['attachments'] = $values;
        }
        $dataArray['bot_id'] = $data->botId;
        if (\array_key_exists('botProfile', get_object_vars($data)) && null !== ($data->botProfile ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->botProfile, 'json', $context);
            $dataArray['bot_profile'] = is_iterable($normalized_1) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (\array_key_exists('subtype', get_object_vars($data)) && null !== ($data->subtype ?? null)) {
            $dataArray['subtype'] = $data->subtype;
        }
        $dataArray['team'] = $data->team;
        $dataArray['text'] = $data->text;
        $dataArray['type'] = $data->type;
        $dataArray['user'] = $data->user;
        if (\array_key_exists('username', get_object_vars($data)) && null !== ($data->username ?? null)) {
            $dataArray['username'] = $data->username;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200Message::class => false];
    }
}
