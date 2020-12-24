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
use JoliCode\Slack\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class StarsListGetResponse200ItemsItemItem2Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\StarsListGetResponse200ItemsItemItem2' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\StarsListGetResponse200ItemsItemItem2' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\StarsListGetResponse200ItemsItemItem2();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('comment', $data) && null !== $data['comment']) {
            $object->setComment($this->denormalizer->denormalize($data['comment'], 'JoliCode\\Slack\\Api\\Model\\ObjsComment', 'json', $context));
        } elseif (\array_key_exists('comment', $data) && null === $data['comment']) {
            $object->setComment(null);
        }
        if (\array_key_exists('date_create', $data) && null !== $data['date_create']) {
            $object->setDateCreate($data['date_create']);
        } elseif (\array_key_exists('date_create', $data) && null === $data['date_create']) {
            $object->setDateCreate(null);
        }
        if (\array_key_exists('file', $data) && null !== $data['file']) {
            $object->setFile($this->denormalizer->denormalize($data['file'], 'JoliCode\\Slack\\Api\\Model\\ObjsFile', 'json', $context));
        } elseif (\array_key_exists('file', $data) && null === $data['file']) {
            $object->setFile(null);
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['comment'] = $this->normalizer->normalize($object->getComment(), 'json', $context);
        $data['date_create'] = $object->getDateCreate();
        $data['file'] = $this->normalizer->normalize($object->getFile(), 'json', $context);
        $data['type'] = $object->getType();

        return $data;
    }
}
