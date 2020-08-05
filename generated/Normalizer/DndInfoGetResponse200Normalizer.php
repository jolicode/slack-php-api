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

class DndInfoGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\DndInfoGetResponse200' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\DndInfoGetResponse200' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\DndInfoGetResponse200();
        if (\array_key_exists('dnd_enabled', $data) && null !== $data['dnd_enabled']) {
            $object->setDndEnabled($data['dnd_enabled']);
        } elseif (\array_key_exists('dnd_enabled', $data) && null === $data['dnd_enabled']) {
            $object->setDndEnabled(null);
        }
        if (\array_key_exists('next_dnd_end_ts', $data) && null !== $data['next_dnd_end_ts']) {
            $object->setNextDndEndTs($data['next_dnd_end_ts']);
        } elseif (\array_key_exists('next_dnd_end_ts', $data) && null === $data['next_dnd_end_ts']) {
            $object->setNextDndEndTs(null);
        }
        if (\array_key_exists('next_dnd_start_ts', $data) && null !== $data['next_dnd_start_ts']) {
            $object->setNextDndStartTs($data['next_dnd_start_ts']);
        } elseif (\array_key_exists('next_dnd_start_ts', $data) && null === $data['next_dnd_start_ts']) {
            $object->setNextDndStartTs(null);
        }
        if (\array_key_exists('ok', $data) && null !== $data['ok']) {
            $object->setOk($data['ok']);
        } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
            $object->setOk(null);
        }
        if (\array_key_exists('snooze_enabled', $data) && null !== $data['snooze_enabled']) {
            $object->setSnoozeEnabled($data['snooze_enabled']);
        } elseif (\array_key_exists('snooze_enabled', $data) && null === $data['snooze_enabled']) {
            $object->setSnoozeEnabled(null);
        }
        if (\array_key_exists('snooze_endtime', $data) && null !== $data['snooze_endtime']) {
            $object->setSnoozeEndtime($data['snooze_endtime']);
        } elseif (\array_key_exists('snooze_endtime', $data) && null === $data['snooze_endtime']) {
            $object->setSnoozeEndtime(null);
        }
        if (\array_key_exists('snooze_remaining', $data) && null !== $data['snooze_remaining']) {
            $object->setSnoozeRemaining($data['snooze_remaining']);
        } elseif (\array_key_exists('snooze_remaining', $data) && null === $data['snooze_remaining']) {
            $object->setSnoozeRemaining(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getDndEnabled()) {
            $data['dnd_enabled'] = $object->getDndEnabled();
        }
        if (null !== $object->getNextDndEndTs()) {
            $data['next_dnd_end_ts'] = $object->getNextDndEndTs();
        }
        if (null !== $object->getNextDndStartTs()) {
            $data['next_dnd_start_ts'] = $object->getNextDndStartTs();
        }
        if (null !== $object->getOk()) {
            $data['ok'] = $object->getOk();
        }
        if (null !== $object->getSnoozeEnabled()) {
            $data['snooze_enabled'] = $object->getSnoozeEnabled();
        }
        if (null !== $object->getSnoozeEndtime()) {
            $data['snooze_endtime'] = $object->getSnoozeEndtime();
        }
        if (null !== $object->getSnoozeRemaining()) {
            $data['snooze_remaining'] = $object->getSnoozeRemaining();
        }

        return $data;
    }
}
