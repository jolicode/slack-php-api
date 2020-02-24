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

class AppsPermissionsInfoGetResponse200InfoTeamNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsInfoGetResponse200InfoTeam' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsInfoGetResponse200InfoTeam' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoTeam();
        if (property_exists($data, 'resources') && null !== $data->{'resources'}) {
            $object->setResources($this->denormalizer->denormalize($data->{'resources'}, 'JoliCode\\Slack\\Api\\Model\\ObjsResources', 'json', $context));
        } elseif (property_exists($data, 'resources') && null === $data->{'resources'}) {
            $object->setResources(null);
        }
        if (property_exists($data, 'scopes') && null !== $data->{'scopes'}) {
            $values = [];
            foreach ($data->{'scopes'} as $value) {
                $values[] = $value;
            }
            $object->setScopes($values);
        } elseif (property_exists($data, 'scopes') && null === $data->{'scopes'}) {
            $object->setScopes(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getResources()) {
            $data->{'resources'} = $this->normalizer->normalize($object->getResources(), 'json', $context);
        } else {
            $data->{'resources'} = null;
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

        return $data;
    }
}
