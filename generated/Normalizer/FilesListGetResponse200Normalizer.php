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

class FilesListGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\FilesListGetResponse200' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\FilesListGetResponse200' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\FilesListGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('files', $data) && null !== $data['files']) {
            $values = [];
            foreach ($data['files'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\ObjsFile', 'json', $context);
            }
            $object->setFiles($values);
        } elseif (\array_key_exists('files', $data) && null === $data['files']) {
            $object->setFiles(null);
        }
        if (\array_key_exists('ok', $data) && null !== $data['ok']) {
            $object->setOk($data['ok']);
        } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
            $object->setOk(null);
        }
        if (\array_key_exists('paging', $data) && null !== $data['paging']) {
            $object->setPaging($this->denormalizer->denormalize($data['paging'], 'JoliCode\\Slack\\Api\\Model\\ObjsPaging', 'json', $context));
        } elseif (\array_key_exists('paging', $data) && null === $data['paging']) {
            $object->setPaging(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $values = [];
        foreach ($object->getFiles() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['files'] = $values;
        $data['ok'] = $object->getOk();
        $data['paging'] = $this->normalizer->normalize($object->getPaging(), 'json', $context);

        return $data;
    }
}
