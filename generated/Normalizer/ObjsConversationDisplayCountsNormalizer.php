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

class ObjsConversationDisplayCountsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ObjsConversationDisplayCounts' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsConversationDisplayCounts' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\ObjsConversationDisplayCounts();
        if (property_exists($data, 'display_counts') && null !== $data->{'display_counts'}) {
            $object->setDisplayCounts($data->{'display_counts'});
        } elseif (property_exists($data, 'display_counts') && null === $data->{'display_counts'}) {
            $object->setDisplayCounts(null);
        }
        if (property_exists($data, 'guest_counts') && null !== $data->{'guest_counts'}) {
            $object->setGuestCounts($data->{'guest_counts'});
        } elseif (property_exists($data, 'guest_counts') && null === $data->{'guest_counts'}) {
            $object->setGuestCounts(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDisplayCounts()) {
            $data->{'display_counts'} = $object->getDisplayCounts();
        } else {
            $data->{'display_counts'} = null;
        }
        if (null !== $object->getGuestCounts()) {
            $data->{'guest_counts'} = $object->getGuestCounts();
        } else {
            $data->{'guest_counts'} = null;
        }

        return $data;
    }
}
