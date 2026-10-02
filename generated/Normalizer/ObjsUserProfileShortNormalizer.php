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

class ObjsUserProfileShortNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\ObjsUserProfileShort::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\ObjsUserProfileShort::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \JoliCode\Slack\Api\Model\ObjsUserProfileShort();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('is_restricted', $data) && \is_int($data['is_restricted'])) {
            $data['is_restricted'] = (bool) $data['is_restricted'];
        }
        if (\array_key_exists('is_ultra_restricted', $data) && \is_int($data['is_ultra_restricted'])) {
            $data['is_ultra_restricted'] = (bool) $data['is_ultra_restricted'];
        }
        if (\array_key_exists('avatar_hash', $data) && null !== $data['avatar_hash']) {
            $object->avatarHash = $data['avatar_hash'];
        } elseif (\array_key_exists('avatar_hash', $data)) {
            $object->avatarHash = null;
        }
        if (\array_key_exists('display_name', $data) && null !== $data['display_name']) {
            $object->displayName = $data['display_name'];
        } elseif (\array_key_exists('display_name', $data)) {
            $object->displayName = null;
        }
        if (\array_key_exists('display_name_normalized', $data) && null !== $data['display_name_normalized']) {
            $object->displayNameNormalized = $data['display_name_normalized'];
        } elseif (\array_key_exists('display_name_normalized', $data)) {
            $object->displayNameNormalized = null;
        }
        if (\array_key_exists('first_name', $data) && null !== $data['first_name']) {
            $value = $data['first_name'];
            if (\is_string($data['first_name'])) {
                $value = $data['first_name'];
            }
            $object->firstName = $value;
        } elseif (\array_key_exists('first_name', $data)) {
            $object->firstName = null;
        }
        if (\array_key_exists('image_72', $data) && null !== $data['image_72']) {
            $object->image72 = $data['image_72'];
        } elseif (\array_key_exists('image_72', $data)) {
            $object->image72 = null;
        }
        if (\array_key_exists('is_restricted', $data) && null !== $data['is_restricted']) {
            $object->isRestricted = $data['is_restricted'];
        } elseif (\array_key_exists('is_restricted', $data)) {
            $object->isRestricted = null;
        }
        if (\array_key_exists('is_ultra_restricted', $data) && null !== $data['is_ultra_restricted']) {
            $object->isUltraRestricted = $data['is_ultra_restricted'];
        } elseif (\array_key_exists('is_ultra_restricted', $data)) {
            $object->isUltraRestricted = null;
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->name = $data['name'];
        } elseif (\array_key_exists('name', $data)) {
            $object->name = null;
        }
        if (\array_key_exists('real_name', $data) && null !== $data['real_name']) {
            $object->realName = $data['real_name'];
        } elseif (\array_key_exists('real_name', $data)) {
            $object->realName = null;
        }
        if (\array_key_exists('real_name_normalized', $data) && null !== $data['real_name_normalized']) {
            $object->realNameNormalized = $data['real_name_normalized'];
        } elseif (\array_key_exists('real_name_normalized', $data)) {
            $object->realNameNormalized = null;
        }
        if (\array_key_exists('team', $data) && null !== $data['team']) {
            $object->team = $data['team'];
        } elseif (\array_key_exists('team', $data)) {
            $object->team = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['avatar_hash'] = $data->avatarHash;
        $dataArray['display_name'] = $data->displayName;
        if (\array_key_exists('displayNameNormalized', get_object_vars($data)) && null !== ($data->displayNameNormalized ?? null)) {
            $dataArray['display_name_normalized'] = $data->displayNameNormalized;
        }
        $value = $data->firstName;
        if (\is_string($data->firstName)) {
            $value = $data->firstName;
        }
        $dataArray['first_name'] = $value;
        $dataArray['image_72'] = $data->image72;
        $dataArray['is_restricted'] = $data->isRestricted;
        $dataArray['is_ultra_restricted'] = $data->isUltraRestricted;
        $dataArray['name'] = $data->name;
        $dataArray['real_name'] = $data->realName;
        if (\array_key_exists('realNameNormalized', get_object_vars($data)) && null !== ($data->realNameNormalized ?? null)) {
            $dataArray['real_name_normalized'] = $data->realNameNormalized;
        }
        $dataArray['team'] = $data->team;

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\ObjsUserProfileShort::class => false];
    }
}
