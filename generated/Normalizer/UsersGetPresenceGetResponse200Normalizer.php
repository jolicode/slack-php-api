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

use Jane\Component\JsonSchemaRuntime\Reference;
use JoliCode\Slack\Api\Runtime\Normalizer\CheckArray;
use JoliCode\Slack\Api\Runtime\Normalizer\ValidatorTrait;
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
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\UsersGetPresenceGetResponse200::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\UsersGetPresenceGetResponse200::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \JoliCode\Slack\Api\Model\UsersGetPresenceGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('auto_away', $data) && \is_int($data['auto_away'])) {
            $data['auto_away'] = (bool) $data['auto_away'];
        }
        if (\array_key_exists('manual_away', $data) && \is_int($data['manual_away'])) {
            $data['manual_away'] = (bool) $data['manual_away'];
        }
        if (\array_key_exists('ok', $data) && \is_int($data['ok'])) {
            $data['ok'] = (bool) $data['ok'];
        }
        if (\array_key_exists('online', $data) && \is_int($data['online'])) {
            $data['online'] = (bool) $data['online'];
        }
        if (\array_key_exists('auto_away', $data) && null !== $data['auto_away']) {
            $object->autoAway = $data['auto_away'];
            unset($data['auto_away']);
        } elseif (\array_key_exists('auto_away', $data)) {
            $object->autoAway = null;
            unset($data['auto_away']);
        }
        if (\array_key_exists('connection_count', $data) && null !== $data['connection_count']) {
            $object->connectionCount = $data['connection_count'];
            unset($data['connection_count']);
        } elseif (\array_key_exists('connection_count', $data)) {
            $object->connectionCount = null;
            unset($data['connection_count']);
        }
        if (\array_key_exists('last_activity', $data) && null !== $data['last_activity']) {
            $object->lastActivity = $data['last_activity'];
            unset($data['last_activity']);
        } elseif (\array_key_exists('last_activity', $data)) {
            $object->lastActivity = null;
            unset($data['last_activity']);
        }
        if (\array_key_exists('manual_away', $data) && null !== $data['manual_away']) {
            $object->manualAway = $data['manual_away'];
            unset($data['manual_away']);
        } elseif (\array_key_exists('manual_away', $data)) {
            $object->manualAway = null;
            unset($data['manual_away']);
        }
        if (\array_key_exists('ok', $data) && null !== $data['ok']) {
            $object->ok = $data['ok'];
            unset($data['ok']);
        } elseif (\array_key_exists('ok', $data)) {
            $object->ok = null;
            unset($data['ok']);
        }
        if (\array_key_exists('online', $data) && null !== $data['online']) {
            $object->online = $data['online'];
            unset($data['online']);
        } elseif (\array_key_exists('online', $data)) {
            $object->online = null;
            unset($data['online']);
        }
        if (\array_key_exists('presence', $data) && null !== $data['presence']) {
            $object->presence = $data['presence'];
            unset($data['presence']);
        } elseif (\array_key_exists('presence', $data)) {
            $object->presence = null;
            unset($data['presence']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('autoAway', get_object_vars($data)) && null !== ($data->autoAway ?? null)) {
            $dataArray['auto_away'] = $data->autoAway;
        }
        if (\array_key_exists('connectionCount', get_object_vars($data)) && null !== ($data->connectionCount ?? null)) {
            $dataArray['connection_count'] = $data->connectionCount;
        }
        if (\array_key_exists('lastActivity', get_object_vars($data)) && null !== ($data->lastActivity ?? null)) {
            $dataArray['last_activity'] = $data->lastActivity;
        }
        if (\array_key_exists('manualAway', get_object_vars($data)) && null !== ($data->manualAway ?? null)) {
            $dataArray['manual_away'] = $data->manualAway;
        }
        $dataArray['ok'] = $data->ok;
        if (\array_key_exists('online', get_object_vars($data)) && null !== ($data->online ?? null)) {
            $dataArray['online'] = $data->online;
        }
        $dataArray['presence'] = $data->presence;
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\UsersGetPresenceGetResponse200::class => false];
    }
}
