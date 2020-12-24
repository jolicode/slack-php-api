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

class ObjsPagingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ObjsPaging' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsPaging' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsPaging();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('count', $data) && null !== $data['count']) {
            $object->setCount($data['count']);
        } elseif (\array_key_exists('count', $data) && null === $data['count']) {
            $object->setCount(null);
        }
        if (\array_key_exists('page', $data) && null !== $data['page']) {
            $object->setPage($data['page']);
        } elseif (\array_key_exists('page', $data) && null === $data['page']) {
            $object->setPage(null);
        }
        if (\array_key_exists('pages', $data) && null !== $data['pages']) {
            $object->setPages($data['pages']);
        } elseif (\array_key_exists('pages', $data) && null === $data['pages']) {
            $object->setPages(null);
        }
        if (\array_key_exists('per_page', $data) && null !== $data['per_page']) {
            $object->setPerPage($data['per_page']);
        } elseif (\array_key_exists('per_page', $data) && null === $data['per_page']) {
            $object->setPerPage(null);
        }
        if (\array_key_exists('spill', $data) && null !== $data['spill']) {
            $object->setSpill($data['spill']);
        } elseif (\array_key_exists('spill', $data) && null === $data['spill']) {
            $object->setSpill(null);
        }
        if (\array_key_exists('total', $data) && null !== $data['total']) {
            $object->setTotal($data['total']);
        } elseif (\array_key_exists('total', $data) && null === $data['total']) {
            $object->setTotal(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getCount()) {
            $data['count'] = $object->getCount();
        }
        $data['page'] = $object->getPage();
        if (null !== $object->getPages()) {
            $data['pages'] = $object->getPages();
        }
        if (null !== $object->getPerPage()) {
            $data['per_page'] = $object->getPerPage();
        }
        if (null !== $object->getSpill()) {
            $data['spill'] = $object->getSpill();
        }
        $data['total'] = $object->getTotal();

        return $data;
    }
}
