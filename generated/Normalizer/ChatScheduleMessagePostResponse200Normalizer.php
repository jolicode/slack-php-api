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

class ChatScheduleMessagePostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ChatScheduleMessagePostResponse200' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ChatScheduleMessagePostResponse200' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200();
        if (property_exists($data, 'channel') && null !== $data->{'channel'}) {
            $object->setChannel($data->{'channel'});
        } elseif (property_exists($data, 'channel') && null === $data->{'channel'}) {
            $object->setChannel(null);
        }
        if (property_exists($data, 'message') && null !== $data->{'message'}) {
            $object->setMessage($this->denormalizer->denormalize($data->{'message'}, 'JoliCode\\Slack\\Api\\Model\\ChatScheduleMessagePostResponse200Message', 'json', $context));
        } elseif (property_exists($data, 'message') && null === $data->{'message'}) {
            $object->setMessage(null);
        }
        if (property_exists($data, 'ok') && null !== $data->{'ok'}) {
            $object->setOk($data->{'ok'});
        } elseif (property_exists($data, 'ok') && null === $data->{'ok'}) {
            $object->setOk(null);
        }
        if (property_exists($data, 'post_at') && null !== $data->{'post_at'}) {
            $object->setPostAt($data->{'post_at'});
        } elseif (property_exists($data, 'post_at') && null === $data->{'post_at'}) {
            $object->setPostAt(null);
        }
        if (property_exists($data, 'scheduled_message_id') && null !== $data->{'scheduled_message_id'}) {
            $object->setScheduledMessageId($data->{'scheduled_message_id'});
        } elseif (property_exists($data, 'scheduled_message_id') && null === $data->{'scheduled_message_id'}) {
            $object->setScheduledMessageId(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getChannel()) {
            $data->{'channel'} = $object->getChannel();
        } else {
            $data->{'channel'} = null;
        }
        if (null !== $object->getMessage()) {
            $data->{'message'} = $this->normalizer->normalize($object->getMessage(), 'json', $context);
        } else {
            $data->{'message'} = null;
        }
        if (null !== $object->getOk()) {
            $data->{'ok'} = $object->getOk();
        } else {
            $data->{'ok'} = null;
        }
        if (null !== $object->getPostAt()) {
            $data->{'post_at'} = $object->getPostAt();
        } else {
            $data->{'post_at'} = null;
        }
        if (null !== $object->getScheduledMessageId()) {
            $data->{'scheduled_message_id'} = $object->getScheduledMessageId();
        } else {
            $data->{'scheduled_message_id'} = null;
        }

        return $data;
    }
}
