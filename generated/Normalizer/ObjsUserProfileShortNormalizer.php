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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsUserProfileShort();
        if (\array_key_exists('is_restricted', $data) && \is_int($data['is_restricted'])) {
            $data['is_restricted'] = (bool) $data['is_restricted'];
        }
        if (\array_key_exists('is_ultra_restricted', $data) && \is_int($data['is_ultra_restricted'])) {
            $data['is_ultra_restricted'] = (bool) $data['is_ultra_restricted'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('avatar_hash', $data) && null !== $data['avatar_hash']) {
            $object->setAvatarHash($data['avatar_hash']);
        } elseif (\array_key_exists('avatar_hash', $data) && null === $data['avatar_hash']) {
            $object->setAvatarHash(null);
        }
        if (\array_key_exists('display_name', $data) && null !== $data['display_name']) {
            $object->setDisplayName($data['display_name']);
        } elseif (\array_key_exists('display_name', $data) && null === $data['display_name']) {
            $object->setDisplayName(null);
        }
        if (\array_key_exists('display_name_normalized', $data) && null !== $data['display_name_normalized']) {
            $object->setDisplayNameNormalized($data['display_name_normalized']);
        } elseif (\array_key_exists('display_name_normalized', $data) && null === $data['display_name_normalized']) {
            $object->setDisplayNameNormalized(null);
        }
        if (\array_key_exists('first_name', $data) && null !== $data['first_name']) {
            $value = $data['first_name'];
            if (\is_string($data['first_name'])) {
                $value = $data['first_name'];
            }
            $object->setFirstName($value);
        } elseif (\array_key_exists('first_name', $data) && null === $data['first_name']) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('image_72', $data) && null !== $data['image_72']) {
            $object->setImage72($data['image_72']);
        } elseif (\array_key_exists('image_72', $data) && null === $data['image_72']) {
            $object->setImage72(null);
        }
        if (\array_key_exists('is_restricted', $data) && null !== $data['is_restricted']) {
            $object->setIsRestricted($data['is_restricted']);
        } elseif (\array_key_exists('is_restricted', $data) && null === $data['is_restricted']) {
            $object->setIsRestricted(null);
        }
        if (\array_key_exists('is_ultra_restricted', $data) && null !== $data['is_ultra_restricted']) {
            $object->setIsUltraRestricted($data['is_ultra_restricted']);
        } elseif (\array_key_exists('is_ultra_restricted', $data) && null === $data['is_ultra_restricted']) {
            $object->setIsUltraRestricted(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('real_name', $data) && null !== $data['real_name']) {
            $object->setRealName($data['real_name']);
        } elseif (\array_key_exists('real_name', $data) && null === $data['real_name']) {
            $object->setRealName(null);
        }
        if (\array_key_exists('real_name_normalized', $data) && null !== $data['real_name_normalized']) {
            $object->setRealNameNormalized($data['real_name_normalized']);
        } elseif (\array_key_exists('real_name_normalized', $data) && null === $data['real_name_normalized']) {
            $object->setRealNameNormalized(null);
        }
        if (\array_key_exists('team', $data) && null !== $data['team']) {
            $object->setTeam($data['team']);
        } elseif (\array_key_exists('team', $data) && null === $data['team']) {
            $object->setTeam(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['avatar_hash'] = $data->getAvatarHash();
        $dataArray['display_name'] = $data->getDisplayName();
        if ($data->isInitialized('displayNameNormalized') && null !== $data->getDisplayNameNormalized()) {
            $dataArray['display_name_normalized'] = $data->getDisplayNameNormalized();
        }
        $value = $data->getFirstName();
        if (\is_string($data->getFirstName())) {
            $value = $data->getFirstName();
        }
        $dataArray['first_name'] = $value;
        $dataArray['image_72'] = $data->getImage72();
        $dataArray['is_restricted'] = $data->getIsRestricted();
        $dataArray['is_ultra_restricted'] = $data->getIsUltraRestricted();
        $dataArray['name'] = $data->getName();
        $dataArray['real_name'] = $data->getRealName();
        if ($data->isInitialized('realNameNormalized') && null !== $data->getRealNameNormalized()) {
            $dataArray['real_name_normalized'] = $data->getRealNameNormalized();
        }
        $dataArray['team'] = $data->getTeam();

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\ObjsUserProfileShort::class => false];
    }
}
