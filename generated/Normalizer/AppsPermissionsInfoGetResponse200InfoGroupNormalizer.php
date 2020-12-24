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

class AppsPermissionsInfoGetResponse200InfoGroupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsInfoGetResponse200InfoGroup' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsInfoGetResponse200InfoGroup' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoGroup();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('resources', $data) && null !== $data['resources']) {
            $object->setResources($this->denormalizer->denormalize($data['resources'], 'JoliCode\\Slack\\Api\\Model\\ObjsResources', 'json', $context));
        } elseif (\array_key_exists('resources', $data) && null === $data['resources']) {
            $object->setResources(null);
        }
        if (\array_key_exists('scopes', $data) && null !== $data['scopes']) {
            $values = [];
            foreach ($data['scopes'] as $value) {
                $values[] = $value;
            }
            $object->setScopes($values);
        } elseif (\array_key_exists('scopes', $data) && null === $data['scopes']) {
            $object->setScopes(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getResources()) {
            $data['resources'] = $this->normalizer->normalize($object->getResources(), 'json', $context);
        }
        if (null !== $object->getScopes()) {
            $values = [];
            foreach ($object->getScopes() as $value) {
                $values[] = $value;
            }
            $data['scopes'] = $values;
        }

        return $data;
    }
}
