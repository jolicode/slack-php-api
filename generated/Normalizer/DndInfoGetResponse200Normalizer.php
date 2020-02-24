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
        if (!\is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\DndInfoGetResponse200();
        if (property_exists($data, 'dnd_enabled') && null !== $data->{'dnd_enabled'}) {
            $object->setDndEnabled($data->{'dnd_enabled'});
        } elseif (property_exists($data, 'dnd_enabled') && null === $data->{'dnd_enabled'}) {
            $object->setDndEnabled(null);
        }
        if (property_exists($data, 'next_dnd_end_ts') && null !== $data->{'next_dnd_end_ts'}) {
            $object->setNextDndEndTs($data->{'next_dnd_end_ts'});
        } elseif (property_exists($data, 'next_dnd_end_ts') && null === $data->{'next_dnd_end_ts'}) {
            $object->setNextDndEndTs(null);
        }
        if (property_exists($data, 'next_dnd_start_ts') && null !== $data->{'next_dnd_start_ts'}) {
            $object->setNextDndStartTs($data->{'next_dnd_start_ts'});
        } elseif (property_exists($data, 'next_dnd_start_ts') && null === $data->{'next_dnd_start_ts'}) {
            $object->setNextDndStartTs(null);
        }
        if (property_exists($data, 'ok') && null !== $data->{'ok'}) {
            $object->setOk($data->{'ok'});
        } elseif (property_exists($data, 'ok') && null === $data->{'ok'}) {
            $object->setOk(null);
        }
        if (property_exists($data, 'snooze_enabled') && null !== $data->{'snooze_enabled'}) {
            $object->setSnoozeEnabled($data->{'snooze_enabled'});
        } elseif (property_exists($data, 'snooze_enabled') && null === $data->{'snooze_enabled'}) {
            $object->setSnoozeEnabled(null);
        }
        if (property_exists($data, 'snooze_endtime') && null !== $data->{'snooze_endtime'}) {
            $object->setSnoozeEndtime($data->{'snooze_endtime'});
        } elseif (property_exists($data, 'snooze_endtime') && null === $data->{'snooze_endtime'}) {
            $object->setSnoozeEndtime(null);
        }
        if (property_exists($data, 'snooze_remaining') && null !== $data->{'snooze_remaining'}) {
            $object->setSnoozeRemaining($data->{'snooze_remaining'});
        } elseif (property_exists($data, 'snooze_remaining') && null === $data->{'snooze_remaining'}) {
            $object->setSnoozeRemaining(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDndEnabled()) {
            $data->{'dnd_enabled'} = $object->getDndEnabled();
        } else {
            $data->{'dnd_enabled'} = null;
        }
        if (null !== $object->getNextDndEndTs()) {
            $data->{'next_dnd_end_ts'} = $object->getNextDndEndTs();
        } else {
            $data->{'next_dnd_end_ts'} = null;
        }
        if (null !== $object->getNextDndStartTs()) {
            $data->{'next_dnd_start_ts'} = $object->getNextDndStartTs();
        } else {
            $data->{'next_dnd_start_ts'} = null;
        }
        if (null !== $object->getOk()) {
            $data->{'ok'} = $object->getOk();
        } else {
            $data->{'ok'} = null;
        }
        if (null !== $object->getSnoozeEnabled()) {
            $data->{'snooze_enabled'} = $object->getSnoozeEnabled();
        } else {
            $data->{'snooze_enabled'} = null;
        }
        if (null !== $object->getSnoozeEndtime()) {
            $data->{'snooze_endtime'} = $object->getSnoozeEndtime();
        } else {
            $data->{'snooze_endtime'} = null;
        }
        if (null !== $object->getSnoozeRemaining()) {
            $data->{'snooze_remaining'} = $object->getSnoozeRemaining();
        } else {
            $data->{'snooze_remaining'} = null;
        }

        return $data;
    }
}
