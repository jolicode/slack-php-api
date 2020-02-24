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

class PinsListGetResponse200Item0Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\PinsListGetResponse200Item0' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\PinsListGetResponse200Item0' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\PinsListGetResponse200Item0();
        if (property_exists($data, 'items') && null !== $data->{'items'}) {
            $value = $data->{'items'};
            if (\is_array($data->{'items'})) {
                $values = [];
                foreach ($data->{'items'} as $value_1) {
                    $values[] = $this->denormalizer->denormalize($value_1, 'JoliCode\\Slack\\Api\\Model\\PinsListGetResponse200Item0ItemsItem0', 'json', $context);
                }
                $value = $values;
            } elseif (\is_array($data->{'items'})) {
                $values_1 = [];
                foreach ($data->{'items'} as $value_2) {
                    $values_1[] = $this->denormalizer->denormalize($value_2, 'JoliCode\\Slack\\Api\\Model\\PinsListGetResponse200Item0ItemsItem1', 'json', $context);
                }
                $value = $values_1;
            } elseif (\is_array($data->{'items'})) {
                $values_2 = [];
                foreach ($data->{'items'} as $value_3) {
                    $values_2[] = $this->denormalizer->denormalize($value_3, 'JoliCode\\Slack\\Api\\Model\\PinsListGetResponse200Item0ItemsItem2', 'json', $context);
                }
                $value = $values_2;
            }
            $object->setItems($value);
        } elseif (property_exists($data, 'items') && null === $data->{'items'}) {
            $object->setItems(null);
        }
        if (property_exists($data, 'ok') && null !== $data->{'ok'}) {
            $object->setOk($data->{'ok'});
        } elseif (property_exists($data, 'ok') && null === $data->{'ok'}) {
            $object->setOk(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getItems()) {
            $value = $object->getItems();
            if (\is_array($object->getItems())) {
                $values = [];
                foreach ($object->getItems() as $value_1) {
                    $values[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $value = $values;
            } elseif (\is_array($object->getItems())) {
                $values_1 = [];
                foreach ($object->getItems() as $value_2) {
                    $values_1[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $value = $values_1;
            } elseif (\is_array($object->getItems())) {
                $values_2 = [];
                foreach ($object->getItems() as $value_3) {
                    $values_2[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $value = $values_2;
            }
            $data->{'items'} = $value;
        } else {
            $data->{'items'} = null;
        }
        if (null !== $object->getOk()) {
            $data->{'ok'} = $object->getOk();
        } else {
            $data->{'ok'} = null;
        }

        return $data;
    }
}
