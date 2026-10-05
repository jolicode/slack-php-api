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

class ObjsReminderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\ObjsReminder::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\ObjsReminder::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \JoliCode\Slack\Api\Model\ObjsReminder();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('recurring', $data) && \is_int($data['recurring'])) {
            $data['recurring'] = (bool) $data['recurring'];
        }
        if (\array_key_exists('complete_ts', $data) && null !== $data['complete_ts']) {
            $object->completeTs = $data['complete_ts'];
        } elseif (\array_key_exists('complete_ts', $data)) {
            $object->completeTs = null;
        }
        if (\array_key_exists('creator', $data) && null !== $data['creator']) {
            $object->creator = $data['creator'];
        } elseif (\array_key_exists('creator', $data)) {
            $object->creator = null;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->id = $data['id'];
        } elseif (\array_key_exists('id', $data)) {
            $object->id = null;
        }
        if (\array_key_exists('recurring', $data) && null !== $data['recurring']) {
            $object->recurring = $data['recurring'];
        } elseif (\array_key_exists('recurring', $data)) {
            $object->recurring = null;
        }
        if (\array_key_exists('text', $data) && null !== $data['text']) {
            $object->text = $data['text'];
        } elseif (\array_key_exists('text', $data)) {
            $object->text = null;
        }
        if (\array_key_exists('time', $data) && null !== $data['time']) {
            $object->time = $data['time'];
        } elseif (\array_key_exists('time', $data)) {
            $object->time = null;
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
        if (\array_key_exists('completeTs', get_object_vars($data)) && null !== ($data->completeTs ?? null)) {
            $dataArray['complete_ts'] = $data->completeTs;
        }
        $dataArray['creator'] = $data->creator;
        $dataArray['id'] = $data->id;
        $dataArray['recurring'] = $data->recurring;
        $dataArray['text'] = $data->text;
        if (\array_key_exists('time', get_object_vars($data)) && null !== ($data->time ?? null)) {
            $dataArray['time'] = $data->time;
        }
        $dataArray['user'] = $data->user;

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\ObjsReminder::class => false];
    }
}
