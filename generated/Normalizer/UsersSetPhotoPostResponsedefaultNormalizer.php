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

class UsersSetPhotoPostResponsedefaultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\UsersSetPhotoPostResponsedefault::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\UsersSetPhotoPostResponsedefault::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \JoliCode\Slack\Api\Model\UsersSetPhotoPostResponsedefault();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('ok', $data) && \is_int($data['ok'])) {
            $data['ok'] = (bool) $data['ok'];
        }
        if (\array_key_exists('callstack', $data) && null !== $data['callstack']) {
            $object->callstack = $data['callstack'];
        } elseif (\array_key_exists('callstack', $data)) {
            $object->callstack = null;
        }
        if (\array_key_exists('debug_step', $data) && null !== $data['debug_step']) {
            $object->debugStep = $data['debug_step'];
        } elseif (\array_key_exists('debug_step', $data)) {
            $object->debugStep = null;
        }
        if (\array_key_exists('dims', $data) && null !== $data['dims']) {
            $object->dims = $data['dims'];
        } elseif (\array_key_exists('dims', $data)) {
            $object->dims = null;
        }
        if (\array_key_exists('error', $data) && null !== $data['error']) {
            $object->error = $data['error'];
        } elseif (\array_key_exists('error', $data)) {
            $object->error = null;
        }
        if (\array_key_exists('ok', $data) && null !== $data['ok']) {
            $object->ok = $data['ok'];
        } elseif (\array_key_exists('ok', $data)) {
            $object->ok = null;
        }
        if (\array_key_exists('time_ident', $data) && null !== $data['time_ident']) {
            $object->timeIdent = $data['time_ident'];
        } elseif (\array_key_exists('time_ident', $data)) {
            $object->timeIdent = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('callstack', get_object_vars($data)) && null !== ($data->callstack ?? null)) {
            $dataArray['callstack'] = $data->callstack;
        }
        if (\array_key_exists('debugStep', get_object_vars($data)) && null !== ($data->debugStep ?? null)) {
            $dataArray['debug_step'] = $data->debugStep;
        }
        if (\array_key_exists('dims', get_object_vars($data)) && null !== ($data->dims ?? null)) {
            $dataArray['dims'] = $data->dims;
        }
        $dataArray['error'] = $data->error;
        $dataArray['ok'] = $data->ok;
        if (\array_key_exists('timeIdent', get_object_vars($data)) && null !== ($data->timeIdent ?? null)) {
            $dataArray['time_ident'] = $data->timeIdent;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\UsersSetPhotoPostResponsedefault::class => false];
    }
}
