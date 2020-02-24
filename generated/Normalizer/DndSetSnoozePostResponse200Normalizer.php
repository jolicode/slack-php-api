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

class DndSetSnoozePostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\DndSetSnoozePostResponse200' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\DndSetSnoozePostResponse200' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\DndSetSnoozePostResponse200();
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
