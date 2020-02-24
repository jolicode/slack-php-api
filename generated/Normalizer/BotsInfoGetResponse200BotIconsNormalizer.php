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

class BotsInfoGetResponse200BotIconsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\BotsInfoGetResponse200BotIcons' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\BotsInfoGetResponse200BotIcons' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\BotsInfoGetResponse200BotIcons();
        if (property_exists($data, 'image_36') && null !== $data->{'image_36'}) {
            $object->setImage36($data->{'image_36'});
        } elseif (property_exists($data, 'image_36') && null === $data->{'image_36'}) {
            $object->setImage36(null);
        }
        if (property_exists($data, 'image_48') && null !== $data->{'image_48'}) {
            $object->setImage48($data->{'image_48'});
        } elseif (property_exists($data, 'image_48') && null === $data->{'image_48'}) {
            $object->setImage48(null);
        }
        if (property_exists($data, 'image_72') && null !== $data->{'image_72'}) {
            $object->setImage72($data->{'image_72'});
        } elseif (property_exists($data, 'image_72') && null === $data->{'image_72'}) {
            $object->setImage72(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getImage36()) {
            $data->{'image_36'} = $object->getImage36();
        } else {
            $data->{'image_36'} = null;
        }
        if (null !== $object->getImage48()) {
            $data->{'image_48'} = $object->getImage48();
        } else {
            $data->{'image_48'} = null;
        }
        if (null !== $object->getImage72()) {
            $data->{'image_72'} = $object->getImage72();
        } else {
            $data->{'image_72'} = null;
        }

        return $data;
    }
}
