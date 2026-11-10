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

class UsersSetPhotoPostResponse200ProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\UsersSetPhotoPostResponse200Profile::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\UsersSetPhotoPostResponse200Profile::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \JoliCode\Slack\Api\Model\UsersSetPhotoPostResponse200Profile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('avatar_hash', $data) && null !== $data['avatar_hash']) {
            $object->avatarHash = $data['avatar_hash'];
        } elseif (\array_key_exists('avatar_hash', $data)) {
            $object->avatarHash = null;
        }
        if (\array_key_exists('image_1024', $data) && null !== $data['image_1024']) {
            $object->image1024 = $data['image_1024'];
        } elseif (\array_key_exists('image_1024', $data)) {
            $object->image1024 = null;
        }
        if (\array_key_exists('image_192', $data) && null !== $data['image_192']) {
            $object->image192 = $data['image_192'];
        } elseif (\array_key_exists('image_192', $data)) {
            $object->image192 = null;
        }
        if (\array_key_exists('image_24', $data) && null !== $data['image_24']) {
            $object->image24 = $data['image_24'];
        } elseif (\array_key_exists('image_24', $data)) {
            $object->image24 = null;
        }
        if (\array_key_exists('image_32', $data) && null !== $data['image_32']) {
            $object->image32 = $data['image_32'];
        } elseif (\array_key_exists('image_32', $data)) {
            $object->image32 = null;
        }
        if (\array_key_exists('image_48', $data) && null !== $data['image_48']) {
            $object->image48 = $data['image_48'];
        } elseif (\array_key_exists('image_48', $data)) {
            $object->image48 = null;
        }
        if (\array_key_exists('image_512', $data) && null !== $data['image_512']) {
            $object->image512 = $data['image_512'];
        } elseif (\array_key_exists('image_512', $data)) {
            $object->image512 = null;
        }
        if (\array_key_exists('image_72', $data) && null !== $data['image_72']) {
            $object->image72 = $data['image_72'];
        } elseif (\array_key_exists('image_72', $data)) {
            $object->image72 = null;
        }
        if (\array_key_exists('image_original', $data) && null !== $data['image_original']) {
            $object->imageOriginal = $data['image_original'];
        } elseif (\array_key_exists('image_original', $data)) {
            $object->imageOriginal = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['avatar_hash'] = $data->avatarHash;
        $dataArray['image_1024'] = $data->image1024;
        $dataArray['image_192'] = $data->image192;
        $dataArray['image_24'] = $data->image24;
        $dataArray['image_32'] = $data->image32;
        $dataArray['image_48'] = $data->image48;
        $dataArray['image_512'] = $data->image512;
        $dataArray['image_72'] = $data->image72;
        $dataArray['image_original'] = $data->imageOriginal;

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\UsersSetPhotoPostResponse200Profile::class => false];
    }
}
