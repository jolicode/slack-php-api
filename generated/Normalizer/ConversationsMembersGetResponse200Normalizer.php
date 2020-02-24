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

class ConversationsMembersGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ConversationsMembersGetResponse200' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ConversationsMembersGetResponse200' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\ConversationsMembersGetResponse200();
        if (property_exists($data, 'members') && null !== $data->{'members'}) {
            $values = [];
            foreach ($data->{'members'} as $value) {
                $values[] = $value;
            }
            $object->setMembers($values);
        } elseif (property_exists($data, 'members') && null === $data->{'members'}) {
            $object->setMembers(null);
        }
        if (property_exists($data, 'ok') && null !== $data->{'ok'}) {
            $object->setOk($data->{'ok'});
        } elseif (property_exists($data, 'ok') && null === $data->{'ok'}) {
            $object->setOk(null);
        }
        if (property_exists($data, 'response_metadata') && null !== $data->{'response_metadata'}) {
            $object->setResponseMetadata($this->denormalizer->denormalize($data->{'response_metadata'}, 'JoliCode\\Slack\\Api\\Model\\ConversationsMembersGetResponse200ResponseMetadata', 'json', $context));
        } elseif (property_exists($data, 'response_metadata') && null === $data->{'response_metadata'}) {
            $object->setResponseMetadata(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getMembers()) {
            $values = [];
            foreach ($object->getMembers() as $value) {
                $values[] = $value;
            }
            $data->{'members'} = $values;
        } else {
            $data->{'members'} = null;
        }
        if (null !== $object->getOk()) {
            $data->{'ok'} = $object->getOk();
        } else {
            $data->{'ok'} = null;
        }
        if (null !== $object->getResponseMetadata()) {
            $data->{'response_metadata'} = $this->normalizer->normalize($object->getResponseMetadata(), 'json', $context);
        } else {
            $data->{'response_metadata'} = null;
        }

        return $data;
    }
}
