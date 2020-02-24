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

class DefsPinnedInfoItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\DefsPinnedInfoItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\DefsPinnedInfoItem' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\DefsPinnedInfoItem();
        if (property_exists($data, 'pinned_by') && null !== $data->{'pinned_by'}) {
            $object->setPinnedBy($data->{'pinned_by'});
        } elseif (property_exists($data, 'pinned_by') && null === $data->{'pinned_by'}) {
            $object->setPinnedBy(null);
        }
        if (property_exists($data, 'pinned_ts') && null !== $data->{'pinned_ts'}) {
            $object->setPinnedTs($data->{'pinned_ts'});
        } elseif (property_exists($data, 'pinned_ts') && null === $data->{'pinned_ts'}) {
            $object->setPinnedTs(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getPinnedBy()) {
            $data->{'pinned_by'} = $object->getPinnedBy();
        } else {
            $data->{'pinned_by'} = null;
        }
        if (null !== $object->getPinnedTs()) {
            $data->{'pinned_ts'} = $object->getPinnedTs();
        } else {
            $data->{'pinned_ts'} = null;
        }

        return $data;
    }
}
