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

class OauthTokenGetResponse200PermissionsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\OauthTokenGetResponse200PermissionsItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\OauthTokenGetResponse200PermissionsItem' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\OauthTokenGetResponse200PermissionsItem();
        $data = clone $data;
        if (property_exists($data, 'resource_id') && null !== $data->{'resource_id'}) {
            $object->setResourceId($data->{'resource_id'});
            unset($data->{'resource_id'});
        } elseif (property_exists($data, 'resource_id') && null === $data->{'resource_id'}) {
            $object->setResourceId(null);
        }
        if (property_exists($data, 'resource_type') && null !== $data->{'resource_type'}) {
            $object->setResourceType($data->{'resource_type'});
            unset($data->{'resource_type'});
        } elseif (property_exists($data, 'resource_type') && null === $data->{'resource_type'}) {
            $object->setResourceType(null);
        }
        if (property_exists($data, 'scopes') && null !== $data->{'scopes'}) {
            $values = [];
            foreach ($data->{'scopes'} as $value) {
                $values[] = $value;
            }
            $object->setScopes($values);
            unset($data->{'scopes'});
        } elseif (property_exists($data, 'scopes') && null === $data->{'scopes'}) {
            $object->setScopes(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getResourceId()) {
            $data->{'resource_id'} = $object->getResourceId();
        } else {
            $data->{'resource_id'} = null;
        }
        if (null !== $object->getResourceType()) {
            $data->{'resource_type'} = $object->getResourceType();
        } else {
            $data->{'resource_type'} = null;
        }
        if (null !== $object->getScopes()) {
            $values = [];
            foreach ($object->getScopes() as $value) {
                $values[] = $value;
            }
            $data->{'scopes'} = $values;
        } else {
            $data->{'scopes'} = null;
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', $key)) {
                $data->{$key} = $value_1;
            }
        }

        return $data;
    }
}
