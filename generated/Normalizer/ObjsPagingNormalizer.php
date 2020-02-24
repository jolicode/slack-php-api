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

class ObjsPagingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
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
        if (!\is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsPaging();
        if (property_exists($data, 'count') && null !== $data->{'count'}) {
            $object->setCount($data->{'count'});
        } elseif (property_exists($data, 'count') && null === $data->{'count'}) {
            $object->setCount(null);
        }
        if (property_exists($data, 'page') && null !== $data->{'page'}) {
            $object->setPage($data->{'page'});
        } elseif (property_exists($data, 'page') && null === $data->{'page'}) {
            $object->setPage(null);
        }
        if (property_exists($data, 'pages') && null !== $data->{'pages'}) {
            $object->setPages($data->{'pages'});
        } elseif (property_exists($data, 'pages') && null === $data->{'pages'}) {
            $object->setPages(null);
        }
        if (property_exists($data, 'per_page') && null !== $data->{'per_page'}) {
            $object->setPerPage($data->{'per_page'});
        } elseif (property_exists($data, 'per_page') && null === $data->{'per_page'}) {
            $object->setPerPage(null);
        }
        if (property_exists($data, 'spill') && null !== $data->{'spill'}) {
            $object->setSpill($data->{'spill'});
        } elseif (property_exists($data, 'spill') && null === $data->{'spill'}) {
            $object->setSpill(null);
        }
        if (property_exists($data, 'total') && null !== $data->{'total'}) {
            $object->setTotal($data->{'total'});
        } elseif (property_exists($data, 'total') && null === $data->{'total'}) {
            $object->setTotal(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCount()) {
            $data->{'count'} = $object->getCount();
        } else {
            $data->{'count'} = null;
        }
        if (null !== $object->getPage()) {
            $data->{'page'} = $object->getPage();
        } else {
            $data->{'page'} = null;
        }
        if (null !== $object->getPages()) {
            $data->{'pages'} = $object->getPages();
        } else {
            $data->{'pages'} = null;
        }
        if (null !== $object->getPerPage()) {
            $data->{'per_page'} = $object->getPerPage();
        } else {
            $data->{'per_page'} = null;
        }
        if (null !== $object->getSpill()) {
            $data->{'spill'} = $object->getSpill();
        } else {
            $data->{'spill'} = null;
        }
        if (null !== $object->getTotal()) {
            $data->{'total'} = $object->getTotal();
        } else {
            $data->{'total'} = null;
        }

        return $data;
    }
}
