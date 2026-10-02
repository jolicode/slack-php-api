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

class DndInfoGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\DndInfoGetResponse200::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\DndInfoGetResponse200::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \JoliCode\Slack\Api\Model\DndInfoGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('dnd_enabled', $data) && \is_int($data['dnd_enabled'])) {
            $data['dnd_enabled'] = (bool) $data['dnd_enabled'];
        }
        if (\array_key_exists('ok', $data) && \is_int($data['ok'])) {
            $data['ok'] = (bool) $data['ok'];
        }
        if (\array_key_exists('snooze_enabled', $data) && \is_int($data['snooze_enabled'])) {
            $data['snooze_enabled'] = (bool) $data['snooze_enabled'];
        }
        if (\array_key_exists('dnd_enabled', $data) && null !== $data['dnd_enabled']) {
            $object->dndEnabled = $data['dnd_enabled'];
        } elseif (\array_key_exists('dnd_enabled', $data)) {
            $object->dndEnabled = null;
        }
        if (\array_key_exists('next_dnd_end_ts', $data) && null !== $data['next_dnd_end_ts']) {
            $object->nextDndEndTs = $data['next_dnd_end_ts'];
        } elseif (\array_key_exists('next_dnd_end_ts', $data)) {
            $object->nextDndEndTs = null;
        }
        if (\array_key_exists('next_dnd_start_ts', $data) && null !== $data['next_dnd_start_ts']) {
            $object->nextDndStartTs = $data['next_dnd_start_ts'];
        } elseif (\array_key_exists('next_dnd_start_ts', $data)) {
            $object->nextDndStartTs = null;
        }
        if (\array_key_exists('ok', $data) && null !== $data['ok']) {
            $object->ok = $data['ok'];
        } elseif (\array_key_exists('ok', $data)) {
            $object->ok = null;
        }
        if (\array_key_exists('snooze_enabled', $data) && null !== $data['snooze_enabled']) {
            $object->snoozeEnabled = $data['snooze_enabled'];
        } elseif (\array_key_exists('snooze_enabled', $data)) {
            $object->snoozeEnabled = null;
        }
        if (\array_key_exists('snooze_endtime', $data) && null !== $data['snooze_endtime']) {
            $object->snoozeEndtime = $data['snooze_endtime'];
        } elseif (\array_key_exists('snooze_endtime', $data)) {
            $object->snoozeEndtime = null;
        }
        if (\array_key_exists('snooze_remaining', $data) && null !== $data['snooze_remaining']) {
            $object->snoozeRemaining = $data['snooze_remaining'];
        } elseif (\array_key_exists('snooze_remaining', $data)) {
            $object->snoozeRemaining = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['dnd_enabled'] = $data->dndEnabled;
        $dataArray['next_dnd_end_ts'] = $data->nextDndEndTs;
        $dataArray['next_dnd_start_ts'] = $data->nextDndStartTs;
        $dataArray['ok'] = $data->ok;
        if (\array_key_exists('snoozeEnabled', get_object_vars($data)) && null !== ($data->snoozeEnabled ?? null)) {
            $dataArray['snooze_enabled'] = $data->snoozeEnabled;
        }
        if (\array_key_exists('snoozeEndtime', get_object_vars($data)) && null !== ($data->snoozeEndtime ?? null)) {
            $dataArray['snooze_endtime'] = $data->snoozeEndtime;
        }
        if (\array_key_exists('snoozeRemaining', get_object_vars($data)) && null !== ($data->snoozeRemaining ?? null)) {
            $dataArray['snooze_remaining'] = $data->snoozeRemaining;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\DndInfoGetResponse200::class => false];
    }
}
