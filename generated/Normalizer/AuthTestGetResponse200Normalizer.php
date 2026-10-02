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

class AuthTestGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\AuthTestGetResponse200::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\AuthTestGetResponse200::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \JoliCode\Slack\Api\Model\AuthTestGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('is_enterprise_install', $data) && \is_int($data['is_enterprise_install'])) {
            $data['is_enterprise_install'] = (bool) $data['is_enterprise_install'];
        }
        if (\array_key_exists('ok', $data) && \is_int($data['ok'])) {
            $data['ok'] = (bool) $data['ok'];
        }
        if (\array_key_exists('bot_id', $data) && null !== $data['bot_id']) {
            $object->botId = $data['bot_id'];
        } elseif (\array_key_exists('bot_id', $data)) {
            $object->botId = null;
        }
        if (\array_key_exists('is_enterprise_install', $data) && null !== $data['is_enterprise_install']) {
            $object->isEnterpriseInstall = $data['is_enterprise_install'];
        } elseif (\array_key_exists('is_enterprise_install', $data)) {
            $object->isEnterpriseInstall = null;
        }
        if (\array_key_exists('ok', $data) && null !== $data['ok']) {
            $object->ok = $data['ok'];
        } elseif (\array_key_exists('ok', $data)) {
            $object->ok = null;
        }
        if (\array_key_exists('team', $data) && null !== $data['team']) {
            $object->team = $data['team'];
        } elseif (\array_key_exists('team', $data)) {
            $object->team = null;
        }
        if (\array_key_exists('team_id', $data) && null !== $data['team_id']) {
            $object->teamId = $data['team_id'];
        } elseif (\array_key_exists('team_id', $data)) {
            $object->teamId = null;
        }
        if (\array_key_exists('url', $data) && null !== $data['url']) {
            $object->url = $data['url'];
        } elseif (\array_key_exists('url', $data)) {
            $object->url = null;
        }
        if (\array_key_exists('user', $data) && null !== $data['user']) {
            $object->user = $data['user'];
        } elseif (\array_key_exists('user', $data)) {
            $object->user = null;
        }
        if (\array_key_exists('user_id', $data) && null !== $data['user_id']) {
            $object->userId = $data['user_id'];
        } elseif (\array_key_exists('user_id', $data)) {
            $object->userId = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('botId', get_object_vars($data)) && null !== ($data->botId ?? null)) {
            $dataArray['bot_id'] = $data->botId;
        }
        if (\array_key_exists('isEnterpriseInstall', get_object_vars($data)) && null !== ($data->isEnterpriseInstall ?? null)) {
            $dataArray['is_enterprise_install'] = $data->isEnterpriseInstall;
        }
        $dataArray['ok'] = $data->ok;
        $dataArray['team'] = $data->team;
        $dataArray['team_id'] = $data->teamId;
        $dataArray['url'] = $data->url;
        $dataArray['user'] = $data->user;
        $dataArray['user_id'] = $data->userId;

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\AuthTestGetResponse200::class => false];
    }
}
