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

class ChatScheduleMessagePostResponse200MessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ChatScheduleMessagePostResponse200Message' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ChatScheduleMessagePostResponse200Message' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200Message();
        if (property_exists($data, 'attachments') && null !== $data->{'attachments'}) {
            $values = [];
            foreach ($data->{'attachments'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\ChatScheduleMessagePostResponse200MessageAttachmentsItem', 'json', $context);
            }
            $object->setAttachments($values);
        } elseif (property_exists($data, 'attachments') && null === $data->{'attachments'}) {
            $object->setAttachments(null);
        }
        if (property_exists($data, 'bot_id') && null !== $data->{'bot_id'}) {
            $object->setBotId($data->{'bot_id'});
        } elseif (property_exists($data, 'bot_id') && null === $data->{'bot_id'}) {
            $object->setBotId(null);
        }
        if (property_exists($data, 'bot_profile') && null !== $data->{'bot_profile'}) {
            $object->setBotProfile($this->denormalizer->denormalize($data->{'bot_profile'}, 'JoliCode\\Slack\\Api\\Model\\ObjsBotProfile', 'json', $context));
        } elseif (property_exists($data, 'bot_profile') && null === $data->{'bot_profile'}) {
            $object->setBotProfile(null);
        }
        if (property_exists($data, 'subtype') && null !== $data->{'subtype'}) {
            $object->setSubtype($data->{'subtype'});
        } elseif (property_exists($data, 'subtype') && null === $data->{'subtype'}) {
            $object->setSubtype(null);
        }
        if (property_exists($data, 'team') && null !== $data->{'team'}) {
            $object->setTeam($data->{'team'});
        } elseif (property_exists($data, 'team') && null === $data->{'team'}) {
            $object->setTeam(null);
        }
        if (property_exists($data, 'text') && null !== $data->{'text'}) {
            $object->setText($data->{'text'});
        } elseif (property_exists($data, 'text') && null === $data->{'text'}) {
            $object->setText(null);
        }
        if (property_exists($data, 'type') && null !== $data->{'type'}) {
            $object->setType($data->{'type'});
        } elseif (property_exists($data, 'type') && null === $data->{'type'}) {
            $object->setType(null);
        }
        if (property_exists($data, 'user') && null !== $data->{'user'}) {
            $object->setUser($data->{'user'});
        } elseif (property_exists($data, 'user') && null === $data->{'user'}) {
            $object->setUser(null);
        }
        if (property_exists($data, 'username') && null !== $data->{'username'}) {
            $object->setUsername($data->{'username'});
        } elseif (property_exists($data, 'username') && null === $data->{'username'}) {
            $object->setUsername(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAttachments()) {
            $values = [];
            foreach ($object->getAttachments() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'attachments'} = $values;
        } else {
            $data->{'attachments'} = null;
        }
        if (null !== $object->getBotId()) {
            $data->{'bot_id'} = $object->getBotId();
        } else {
            $data->{'bot_id'} = null;
        }
        if (null !== $object->getBotProfile()) {
            $data->{'bot_profile'} = $this->normalizer->normalize($object->getBotProfile(), 'json', $context);
        } else {
            $data->{'bot_profile'} = null;
        }
        if (null !== $object->getSubtype()) {
            $data->{'subtype'} = $object->getSubtype();
        } else {
            $data->{'subtype'} = null;
        }
        if (null !== $object->getTeam()) {
            $data->{'team'} = $object->getTeam();
        } else {
            $data->{'team'} = null;
        }
        if (null !== $object->getText()) {
            $data->{'text'} = $object->getText();
        } else {
            $data->{'text'} = null;
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        } else {
            $data->{'type'} = null;
        }
        if (null !== $object->getUser()) {
            $data->{'user'} = $object->getUser();
        } else {
            $data->{'user'} = null;
        }
        if (null !== $object->getUsername()) {
            $data->{'username'} = $object->getUsername();
        } else {
            $data->{'username'} = null;
        }

        return $data;
    }
}
