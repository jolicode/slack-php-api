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

class UsersIdentityGetResponse200Item3TeamNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item3Team::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item3Team::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item3Team();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('image_default', $data) && \is_int($data['image_default'])) {
            $data['image_default'] = (bool) $data['image_default'];
        }
        if (\array_key_exists('domain', $data) && null !== $data['domain']) {
            $object->domain = $data['domain'];
        } elseif (\array_key_exists('domain', $data)) {
            $object->domain = null;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->id = $data['id'];
        } elseif (\array_key_exists('id', $data)) {
            $object->id = null;
        }
        if (\array_key_exists('image_102', $data) && null !== $data['image_102']) {
            $object->image102 = $data['image_102'];
        } elseif (\array_key_exists('image_102', $data)) {
            $object->image102 = null;
        }
        if (\array_key_exists('image_132', $data) && null !== $data['image_132']) {
            $object->image132 = $data['image_132'];
        } elseif (\array_key_exists('image_132', $data)) {
            $object->image132 = null;
        }
        if (\array_key_exists('image_230', $data) && null !== $data['image_230']) {
            $object->image230 = $data['image_230'];
        } elseif (\array_key_exists('image_230', $data)) {
            $object->image230 = null;
        }
        if (\array_key_exists('image_34', $data) && null !== $data['image_34']) {
            $object->image34 = $data['image_34'];
        } elseif (\array_key_exists('image_34', $data)) {
            $object->image34 = null;
        }
        if (\array_key_exists('image_44', $data) && null !== $data['image_44']) {
            $object->image44 = $data['image_44'];
        } elseif (\array_key_exists('image_44', $data)) {
            $object->image44 = null;
        }
        if (\array_key_exists('image_68', $data) && null !== $data['image_68']) {
            $object->image68 = $data['image_68'];
        } elseif (\array_key_exists('image_68', $data)) {
            $object->image68 = null;
        }
        if (\array_key_exists('image_88', $data) && null !== $data['image_88']) {
            $object->image88 = $data['image_88'];
        } elseif (\array_key_exists('image_88', $data)) {
            $object->image88 = null;
        }
        if (\array_key_exists('image_default', $data) && null !== $data['image_default']) {
            $object->imageDefault = $data['image_default'];
        } elseif (\array_key_exists('image_default', $data)) {
            $object->imageDefault = null;
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->name = $data['name'];
        } elseif (\array_key_exists('name', $data)) {
            $object->name = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['domain'] = $data->domain;
        $dataArray['id'] = $data->id;
        $dataArray['image_102'] = $data->image102;
        $dataArray['image_132'] = $data->image132;
        $dataArray['image_230'] = $data->image230;
        $dataArray['image_34'] = $data->image34;
        $dataArray['image_44'] = $data->image44;
        $dataArray['image_68'] = $data->image68;
        $dataArray['image_88'] = $data->image88;
        $dataArray['image_default'] = $data->imageDefault;
        $dataArray['name'] = $data->name;

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item3Team::class => false];
    }
}
