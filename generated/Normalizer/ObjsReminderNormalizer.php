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

class ObjsReminderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ObjsReminder' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsReminder' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\ObjsReminder();
        if (property_exists($data, 'complete_ts') && null !== $data->{'complete_ts'}) {
            $object->setCompleteTs($data->{'complete_ts'});
        } elseif (property_exists($data, 'complete_ts') && null === $data->{'complete_ts'}) {
            $object->setCompleteTs(null);
        }
        if (property_exists($data, 'creator') && null !== $data->{'creator'}) {
            $object->setCreator($data->{'creator'});
        } elseif (property_exists($data, 'creator') && null === $data->{'creator'}) {
            $object->setCreator(null);
        }
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        } elseif (property_exists($data, 'id') && null === $data->{'id'}) {
            $object->setId(null);
        }
        if (property_exists($data, 'recurring') && null !== $data->{'recurring'}) {
            $object->setRecurring($data->{'recurring'});
        } elseif (property_exists($data, 'recurring') && null === $data->{'recurring'}) {
            $object->setRecurring(null);
        }
        if (property_exists($data, 'text') && null !== $data->{'text'}) {
            $object->setText($data->{'text'});
        } elseif (property_exists($data, 'text') && null === $data->{'text'}) {
            $object->setText(null);
        }
        if (property_exists($data, 'time') && null !== $data->{'time'}) {
            $object->setTime($data->{'time'});
        } elseif (property_exists($data, 'time') && null === $data->{'time'}) {
            $object->setTime(null);
        }
        if (property_exists($data, 'user') && null !== $data->{'user'}) {
            $object->setUser($data->{'user'});
        } elseif (property_exists($data, 'user') && null === $data->{'user'}) {
            $object->setUser(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCompleteTs()) {
            $data->{'complete_ts'} = $object->getCompleteTs();
        } else {
            $data->{'complete_ts'} = null;
        }
        if (null !== $object->getCreator()) {
            $data->{'creator'} = $object->getCreator();
        } else {
            $data->{'creator'} = null;
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        } else {
            $data->{'id'} = null;
        }
        if (null !== $object->getRecurring()) {
            $data->{'recurring'} = $object->getRecurring();
        } else {
            $data->{'recurring'} = null;
        }
        if (null !== $object->getText()) {
            $data->{'text'} = $object->getText();
        } else {
            $data->{'text'} = null;
        }
        if (null !== $object->getTime()) {
            $data->{'time'} = $object->getTime();
        } else {
            $data->{'time'} = null;
        }
        if (null !== $object->getUser()) {
            $data->{'user'} = $object->getUser();
        } else {
            $data->{'user'} = null;
        }

        return $data;
    }
}
