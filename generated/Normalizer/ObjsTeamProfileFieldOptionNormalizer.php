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

class ObjsTeamProfileFieldOptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\ObjsTeamProfileFieldOption::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\ObjsTeamProfileFieldOption::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \JoliCode\Slack\Api\Model\ObjsTeamProfileFieldOption();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('is_custom', $data) && null !== $data['is_custom']) {
            $value = $data['is_custom'];
            if (\is_bool($data['is_custom'])) {
                $value = $data['is_custom'];
            }
            $object->isCustom = $value;
        } elseif (\array_key_exists('is_custom', $data)) {
            $object->isCustom = null;
        }
        if (\array_key_exists('is_multiple_entry', $data) && null !== $data['is_multiple_entry']) {
            $value_1 = $data['is_multiple_entry'];
            if (\is_bool($data['is_multiple_entry'])) {
                $value_1 = $data['is_multiple_entry'];
            }
            $object->isMultipleEntry = $value_1;
        } elseif (\array_key_exists('is_multiple_entry', $data)) {
            $object->isMultipleEntry = null;
        }
        if (\array_key_exists('is_protected', $data) && null !== $data['is_protected']) {
            $value_2 = $data['is_protected'];
            if (\is_bool($data['is_protected'])) {
                $value_2 = $data['is_protected'];
            }
            $object->isProtected = $value_2;
        } elseif (\array_key_exists('is_protected', $data)) {
            $object->isProtected = null;
        }
        if (\array_key_exists('is_scim', $data) && null !== $data['is_scim']) {
            $value_3 = $data['is_scim'];
            if (\is_bool($data['is_scim'])) {
                $value_3 = $data['is_scim'];
            }
            $object->isScim = $value_3;
        } elseif (\array_key_exists('is_scim', $data)) {
            $object->isScim = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('isCustom', get_object_vars($data)) && null !== ($data->isCustom ?? null)) {
            $value = $data->isCustom;
            if (\is_bool($data->isCustom)) {
                $value = $data->isCustom;
            }
            $dataArray['is_custom'] = $value;
        }
        if (\array_key_exists('isMultipleEntry', get_object_vars($data)) && null !== ($data->isMultipleEntry ?? null)) {
            $value_1 = $data->isMultipleEntry;
            if (\is_bool($data->isMultipleEntry)) {
                $value_1 = $data->isMultipleEntry;
            }
            $dataArray['is_multiple_entry'] = $value_1;
        }
        if (\array_key_exists('isProtected', get_object_vars($data)) && null !== ($data->isProtected ?? null)) {
            $value_2 = $data->isProtected;
            if (\is_bool($data->isProtected)) {
                $value_2 = $data->isProtected;
            }
            $dataArray['is_protected'] = $value_2;
        }
        if (\array_key_exists('isScim', get_object_vars($data)) && null !== ($data->isScim ?? null)) {
            $value_3 = $data->isScim;
            if (\is_bool($data->isScim)) {
                $value_3 = $data->isScim;
            }
            $dataArray['is_scim'] = $value_3;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\ObjsTeamProfileFieldOption::class => false];
    }
}
