<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class BotsInfoGetResponse200BotIconsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\BotsInfoGetResponse200BotIcons';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'JoliCode\\Slack\\Api\\Model\\BotsInfoGetResponse200BotIcons';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\BotsInfoGetResponse200BotIcons();
        if (property_exists($data, 'image_36') && $data->{'image_36'} !== null) {
            $object->setImage36($data->{'image_36'});
        }
        if (property_exists($data, 'image_48') && $data->{'image_48'} !== null) {
            $object->setImage48($data->{'image_48'});
        }
        if (property_exists($data, 'image_72') && $data->{'image_72'} !== null) {
            $object->setImage72($data->{'image_72'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getImage36()) {
            $data->{'image_36'} = $object->getImage36();
        }
        if (null !== $object->getImage48()) {
            $data->{'image_48'} = $object->getImage48();
        }
        if (null !== $object->getImage72()) {
            $data->{'image_72'} = $object->getImage72();
        }

        return $data;
    }
}
