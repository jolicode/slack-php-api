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

class ConversationsClosePostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\ConversationsClosePostResponse200::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\ConversationsClosePostResponse200::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \JoliCode\Slack\Api\Model\ConversationsClosePostResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('already_closed', $data) && \is_int($data['already_closed'])) {
            $data['already_closed'] = (bool) $data['already_closed'];
        }
        if (\array_key_exists('no_op', $data) && \is_int($data['no_op'])) {
            $data['no_op'] = (bool) $data['no_op'];
        }
        if (\array_key_exists('ok', $data) && \is_int($data['ok'])) {
            $data['ok'] = (bool) $data['ok'];
        }
        if (\array_key_exists('already_closed', $data) && null !== $data['already_closed']) {
            $object->alreadyClosed = $data['already_closed'];
        } elseif (\array_key_exists('already_closed', $data)) {
            $object->alreadyClosed = null;
        }
        if (\array_key_exists('no_op', $data) && null !== $data['no_op']) {
            $object->noOp = $data['no_op'];
        } elseif (\array_key_exists('no_op', $data)) {
            $object->noOp = null;
        }
        if (\array_key_exists('ok', $data) && null !== $data['ok']) {
            $object->ok = $data['ok'];
        } elseif (\array_key_exists('ok', $data)) {
            $object->ok = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('alreadyClosed', get_object_vars($data)) && null !== ($data->alreadyClosed ?? null)) {
            $dataArray['already_closed'] = $data->alreadyClosed;
        }
        if (\array_key_exists('noOp', get_object_vars($data)) && null !== ($data->noOp ?? null)) {
            $dataArray['no_op'] = $data->noOp;
        }
        $dataArray['ok'] = $data->ok;

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\ConversationsClosePostResponse200::class => false];
    }
}
