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

class ObjsMessageAttachmentsItemActionsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItemActionsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItemActionsItem::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItemActionsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->id = $data['id'];
        } elseif (\array_key_exists('id', $data)) {
            $object->id = null;
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->name = $data['name'];
        } elseif (\array_key_exists('name', $data)) {
            $object->name = null;
        }
        if (\array_key_exists('style', $data) && null !== $data['style']) {
            $object->style = $data['style'];
        } elseif (\array_key_exists('style', $data)) {
            $object->style = null;
        }
        if (\array_key_exists('text', $data) && null !== $data['text']) {
            $object->text = $data['text'];
        } elseif (\array_key_exists('text', $data)) {
            $object->text = null;
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->type = $data['type'];
        } elseif (\array_key_exists('type', $data)) {
            $object->type = null;
        }
        if (\array_key_exists('value', $data) && null !== $data['value']) {
            $object->value = $data['value'];
        } elseif (\array_key_exists('value', $data)) {
            $object->value = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id;
        }
        if (\array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name;
        }
        if (\array_key_exists('style', get_object_vars($data)) && null !== ($data->style ?? null)) {
            $dataArray['style'] = $data->style;
        }
        if (\array_key_exists('text', get_object_vars($data)) && null !== ($data->text ?? null)) {
            $dataArray['text'] = $data->text;
        }
        if (\array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['type'] = $data->type;
        }
        if (\array_key_exists('value', get_object_vars($data)) && null !== ($data->value ?? null)) {
            $dataArray['value'] = $data->value;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItemActionsItem::class => false];
    }
}
