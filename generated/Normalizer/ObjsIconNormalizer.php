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

class ObjsIconNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\ObjsIcon::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\ObjsIcon::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsIcon();
        if (\array_key_exists('image_default', $data) && \is_int($data['image_default'])) {
            $data['image_default'] = (bool) $data['image_default'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('image_102', $data) && null !== $data['image_102']) {
            $object->setImage102($data['image_102']);
        } elseif (\array_key_exists('image_102', $data) && null === $data['image_102']) {
            $object->setImage102(null);
        }
        if (\array_key_exists('image_132', $data) && null !== $data['image_132']) {
            $object->setImage132($data['image_132']);
        } elseif (\array_key_exists('image_132', $data) && null === $data['image_132']) {
            $object->setImage132(null);
        }
        if (\array_key_exists('image_230', $data) && null !== $data['image_230']) {
            $object->setImage230($data['image_230']);
        } elseif (\array_key_exists('image_230', $data) && null === $data['image_230']) {
            $object->setImage230(null);
        }
        if (\array_key_exists('image_34', $data) && null !== $data['image_34']) {
            $object->setImage34($data['image_34']);
        } elseif (\array_key_exists('image_34', $data) && null === $data['image_34']) {
            $object->setImage34(null);
        }
        if (\array_key_exists('image_44', $data) && null !== $data['image_44']) {
            $object->setImage44($data['image_44']);
        } elseif (\array_key_exists('image_44', $data) && null === $data['image_44']) {
            $object->setImage44(null);
        }
        if (\array_key_exists('image_68', $data) && null !== $data['image_68']) {
            $object->setImage68($data['image_68']);
        } elseif (\array_key_exists('image_68', $data) && null === $data['image_68']) {
            $object->setImage68(null);
        }
        if (\array_key_exists('image_88', $data) && null !== $data['image_88']) {
            $object->setImage88($data['image_88']);
        } elseif (\array_key_exists('image_88', $data) && null === $data['image_88']) {
            $object->setImage88(null);
        }
        if (\array_key_exists('image_default', $data) && null !== $data['image_default']) {
            $object->setImageDefault($data['image_default']);
        } elseif (\array_key_exists('image_default', $data) && null === $data['image_default']) {
            $object->setImageDefault(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('image102') && null !== $data->getImage102()) {
            $dataArray['image_102'] = $data->getImage102();
        }
        if ($data->isInitialized('image132') && null !== $data->getImage132()) {
            $dataArray['image_132'] = $data->getImage132();
        }
        if ($data->isInitialized('image230') && null !== $data->getImage230()) {
            $dataArray['image_230'] = $data->getImage230();
        }
        if ($data->isInitialized('image34') && null !== $data->getImage34()) {
            $dataArray['image_34'] = $data->getImage34();
        }
        if ($data->isInitialized('image44') && null !== $data->getImage44()) {
            $dataArray['image_44'] = $data->getImage44();
        }
        if ($data->isInitialized('image68') && null !== $data->getImage68()) {
            $dataArray['image_68'] = $data->getImage68();
        }
        if ($data->isInitialized('image88') && null !== $data->getImage88()) {
            $dataArray['image_88'] = $data->getImage88();
        }
        if ($data->isInitialized('imageDefault') && null !== $data->getImageDefault()) {
            $dataArray['image_default'] = $data->getImageDefault();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\ObjsIcon::class => false];
    }
}
