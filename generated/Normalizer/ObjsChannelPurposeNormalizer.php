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

class ObjsChannelPurposeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ObjsChannelPurpose' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsChannelPurpose' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\ObjsChannelPurpose();
        if (property_exists($data, 'creator') && null !== $data->{'creator'}) {
            $object->setCreator($data->{'creator'});
        } elseif (property_exists($data, 'creator') && null === $data->{'creator'}) {
            $object->setCreator(null);
        }
        if (property_exists($data, 'last_set') && null !== $data->{'last_set'}) {
            $object->setLastSet($data->{'last_set'});
        } elseif (property_exists($data, 'last_set') && null === $data->{'last_set'}) {
            $object->setLastSet(null);
        }
        if (property_exists($data, 'value') && null !== $data->{'value'}) {
            $object->setValue($data->{'value'});
        } elseif (property_exists($data, 'value') && null === $data->{'value'}) {
            $object->setValue(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCreator()) {
            $data->{'creator'} = $object->getCreator();
        } else {
            $data->{'creator'} = null;
        }
        if (null !== $object->getLastSet()) {
            $data->{'last_set'} = $object->getLastSet();
        } else {
            $data->{'last_set'} = null;
        }
        if (null !== $object->getValue()) {
            $data->{'value'} = $object->getValue();
        } else {
            $data->{'value'} = null;
        }

        return $data;
    }
}
