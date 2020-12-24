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

class UsersGetPresenceGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\UsersGetPresenceGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('auto_away', $data) && null !== $data['auto_away']) {
            $object->setAutoAway($data['auto_away']);
            unset($data['auto_away']);
        } elseif (\array_key_exists('auto_away', $data) && null === $data['auto_away']) {
            $object->setAutoAway(null);
        }
        if (\array_key_exists('connection_count', $data) && null !== $data['connection_count']) {
            $object->setConnectionCount($data['connection_count']);
            unset($data['connection_count']);
        } elseif (\array_key_exists('connection_count', $data) && null === $data['connection_count']) {
            $object->setConnectionCount(null);
        }
        if (\array_key_exists('last_activity', $data) && null !== $data['last_activity']) {
            $object->setLastActivity($data['last_activity']);
            unset($data['last_activity']);
        } elseif (\array_key_exists('last_activity', $data) && null === $data['last_activity']) {
            $object->setLastActivity(null);
        }
        if (\array_key_exists('manual_away', $data) && null !== $data['manual_away']) {
            $object->setManualAway($data['manual_away']);
            unset($data['manual_away']);
        } elseif (\array_key_exists('manual_away', $data) && null === $data['manual_away']) {
            $object->setManualAway(null);
        }
        if (\array_key_exists('ok', $data) && null !== $data['ok']) {
            $object->setOk($data['ok']);
            unset($data['ok']);
        } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
            $object->setOk(null);
        }
        if (\array_key_exists('online', $data) && null !== $data['online']) {
            $object->setOnline($data['online']);
            unset($data['online']);
        } elseif (\array_key_exists('online', $data) && null === $data['online']) {
            $object->setOnline(null);
        }
        if (\array_key_exists('presence', $data) && null !== $data['presence']) {
            $object->setPresence($data['presence']);
            unset($data['presence']);
        } elseif (\array_key_exists('presence', $data) && null === $data['presence']) {
            $object->setPresence(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getAutoAway()) {
            $data['auto_away'] = $object->getAutoAway();
        }
        if (null !== $object->getConnectionCount()) {
            $data['connection_count'] = $object->getConnectionCount();
        }
        if (null !== $object->getLastActivity()) {
            $data['last_activity'] = $object->getLastActivity();
        }
        if (null !== $object->getManualAway()) {
            $data['manual_away'] = $object->getManualAway();
        }
        $data['ok'] = $object->getOk();
        if (null !== $object->getOnline()) {
            $data['online'] = $object->getOnline();
        }
        $data['presence'] = $object->getPresence();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
