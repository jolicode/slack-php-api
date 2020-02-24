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

class AppsPermissionsScopesListGetResponse200ScopesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsScopesListGetResponse200Scopes' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsScopesListGetResponse200Scopes' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\AppsPermissionsScopesListGetResponse200Scopes();
        $data = clone $data;
        if (property_exists($data, 'app_home') && null !== $data->{'app_home'}) {
            $values = [];
            foreach ($data->{'app_home'} as $value) {
                $values[] = $value;
            }
            $object->setAppHome($values);
            unset($data->{'app_home'});
        } elseif (property_exists($data, 'app_home') && null === $data->{'app_home'}) {
            $object->setAppHome(null);
        }
        if (property_exists($data, 'channel') && null !== $data->{'channel'}) {
            $values_1 = [];
            foreach ($data->{'channel'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setChannel($values_1);
            unset($data->{'channel'});
        } elseif (property_exists($data, 'channel') && null === $data->{'channel'}) {
            $object->setChannel(null);
        }
        if (property_exists($data, 'group') && null !== $data->{'group'}) {
            $values_2 = [];
            foreach ($data->{'group'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setGroup($values_2);
            unset($data->{'group'});
        } elseif (property_exists($data, 'group') && null === $data->{'group'}) {
            $object->setGroup(null);
        }
        if (property_exists($data, 'im') && null !== $data->{'im'}) {
            $values_3 = [];
            foreach ($data->{'im'} as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setIm($values_3);
            unset($data->{'im'});
        } elseif (property_exists($data, 'im') && null === $data->{'im'}) {
            $object->setIm(null);
        }
        if (property_exists($data, 'mpim') && null !== $data->{'mpim'}) {
            $values_4 = [];
            foreach ($data->{'mpim'} as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setMpim($values_4);
            unset($data->{'mpim'});
        } elseif (property_exists($data, 'mpim') && null === $data->{'mpim'}) {
            $object->setMpim(null);
        }
        if (property_exists($data, 'team') && null !== $data->{'team'}) {
            $values_5 = [];
            foreach ($data->{'team'} as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setTeam($values_5);
            unset($data->{'team'});
        } elseif (property_exists($data, 'team') && null === $data->{'team'}) {
            $object->setTeam(null);
        }
        if (property_exists($data, 'user') && null !== $data->{'user'}) {
            $values_6 = [];
            foreach ($data->{'user'} as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setUser($values_6);
            unset($data->{'user'});
        } elseif (property_exists($data, 'user') && null === $data->{'user'}) {
            $object->setUser(null);
        }
        foreach ($data as $key => $value_7) {
            if (preg_match('/.*/', $key)) {
                $object[$key] = $value_7;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAppHome()) {
            $values = [];
            foreach ($object->getAppHome() as $value) {
                $values[] = $value;
            }
            $data->{'app_home'} = $values;
        } else {
            $data->{'app_home'} = null;
        }
        if (null !== $object->getChannel()) {
            $values_1 = [];
            foreach ($object->getChannel() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'channel'} = $values_1;
        } else {
            $data->{'channel'} = null;
        }
        if (null !== $object->getGroup()) {
            $values_2 = [];
            foreach ($object->getGroup() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'group'} = $values_2;
        } else {
            $data->{'group'} = null;
        }
        if (null !== $object->getIm()) {
            $values_3 = [];
            foreach ($object->getIm() as $value_3) {
                $values_3[] = $value_3;
            }
            $data->{'im'} = $values_3;
        } else {
            $data->{'im'} = null;
        }
        if (null !== $object->getMpim()) {
            $values_4 = [];
            foreach ($object->getMpim() as $value_4) {
                $values_4[] = $value_4;
            }
            $data->{'mpim'} = $values_4;
        } else {
            $data->{'mpim'} = null;
        }
        if (null !== $object->getTeam()) {
            $values_5 = [];
            foreach ($object->getTeam() as $value_5) {
                $values_5[] = $value_5;
            }
            $data->{'team'} = $values_5;
        } else {
            $data->{'team'} = null;
        }
        if (null !== $object->getUser()) {
            $values_6 = [];
            foreach ($object->getUser() as $value_6) {
                $values_6[] = $value_6;
            }
            $data->{'user'} = $values_6;
        } else {
            $data->{'user'} = null;
        }
        foreach ($object as $key => $value_7) {
            if (preg_match('/.*/', $key)) {
                $data->{$key} = $value_7;
            }
        }

        return $data;
    }
}
