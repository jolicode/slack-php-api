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

class UsersGetPresenceGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\UsersGetPresenceGetResponse200' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\UsersGetPresenceGetResponse200' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\UsersGetPresenceGetResponse200();
        $data = clone $data;
        if (property_exists($data, 'auto_away') && null !== $data->{'auto_away'}) {
            $object->setAutoAway($data->{'auto_away'});
            unset($data->{'auto_away'});
        } elseif (property_exists($data, 'auto_away') && null === $data->{'auto_away'}) {
            $object->setAutoAway(null);
        }
        if (property_exists($data, 'connection_count') && null !== $data->{'connection_count'}) {
            $object->setConnectionCount($data->{'connection_count'});
            unset($data->{'connection_count'});
        } elseif (property_exists($data, 'connection_count') && null === $data->{'connection_count'}) {
            $object->setConnectionCount(null);
        }
        if (property_exists($data, 'last_activity') && null !== $data->{'last_activity'}) {
            $object->setLastActivity($data->{'last_activity'});
            unset($data->{'last_activity'});
        } elseif (property_exists($data, 'last_activity') && null === $data->{'last_activity'}) {
            $object->setLastActivity(null);
        }
        if (property_exists($data, 'manual_away') && null !== $data->{'manual_away'}) {
            $object->setManualAway($data->{'manual_away'});
            unset($data->{'manual_away'});
        } elseif (property_exists($data, 'manual_away') && null === $data->{'manual_away'}) {
            $object->setManualAway(null);
        }
        if (property_exists($data, 'ok') && null !== $data->{'ok'}) {
            $object->setOk($data->{'ok'});
            unset($data->{'ok'});
        } elseif (property_exists($data, 'ok') && null === $data->{'ok'}) {
            $object->setOk(null);
        }
        if (property_exists($data, 'online') && null !== $data->{'online'}) {
            $object->setOnline($data->{'online'});
            unset($data->{'online'});
        } elseif (property_exists($data, 'online') && null === $data->{'online'}) {
            $object->setOnline(null);
        }
        if (property_exists($data, 'presence') && null !== $data->{'presence'}) {
            $object->setPresence($data->{'presence'});
            unset($data->{'presence'});
        } elseif (property_exists($data, 'presence') && null === $data->{'presence'}) {
            $object->setPresence(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAutoAway()) {
            $data->{'auto_away'} = $object->getAutoAway();
        } else {
            $data->{'auto_away'} = null;
        }
        if (null !== $object->getConnectionCount()) {
            $data->{'connection_count'} = $object->getConnectionCount();
        } else {
            $data->{'connection_count'} = null;
        }
        if (null !== $object->getLastActivity()) {
            $data->{'last_activity'} = $object->getLastActivity();
        } else {
            $data->{'last_activity'} = null;
        }
        if (null !== $object->getManualAway()) {
            $data->{'manual_away'} = $object->getManualAway();
        } else {
            $data->{'manual_away'} = null;
        }
        if (null !== $object->getOk()) {
            $data->{'ok'} = $object->getOk();
        } else {
            $data->{'ok'} = null;
        }
        if (null !== $object->getOnline()) {
            $data->{'online'} = $object->getOnline();
        } else {
            $data->{'online'} = null;
        }
        if (null !== $object->getPresence()) {
            $data->{'presence'} = $object->getPresence();
        } else {
            $data->{'presence'} = null;
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', $key)) {
                $data->{$key} = $value;
            }
        }

        return $data;
    }
}
