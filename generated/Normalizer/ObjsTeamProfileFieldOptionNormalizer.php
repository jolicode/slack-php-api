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

use Jane\JsonSchemaRuntime\Reference;
use JoliCode\Slack\Api\Runtime\Normalizer\CheckArray;
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

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ObjsTeamProfileFieldOption' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsTeamProfileFieldOption' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsTeamProfileFieldOption();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('is_custom', $data) && null !== $data['is_custom']) {
            $value = $data['is_custom'];
            if (\is_bool($data['is_custom'])) {
                $value = $data['is_custom'];
            }
            $object->setIsCustom($value);
        } elseif (\array_key_exists('is_custom', $data) && null === $data['is_custom']) {
            $object->setIsCustom(null);
        }
        if (\array_key_exists('is_multiple_entry', $data) && null !== $data['is_multiple_entry']) {
            $value_1 = $data['is_multiple_entry'];
            if (\is_bool($data['is_multiple_entry'])) {
                $value_1 = $data['is_multiple_entry'];
            }
            $object->setIsMultipleEntry($value_1);
        } elseif (\array_key_exists('is_multiple_entry', $data) && null === $data['is_multiple_entry']) {
            $object->setIsMultipleEntry(null);
        }
        if (\array_key_exists('is_protected', $data) && null !== $data['is_protected']) {
            $value_2 = $data['is_protected'];
            if (\is_bool($data['is_protected'])) {
                $value_2 = $data['is_protected'];
            }
            $object->setIsProtected($value_2);
        } elseif (\array_key_exists('is_protected', $data) && null === $data['is_protected']) {
            $object->setIsProtected(null);
        }
        if (\array_key_exists('is_scim', $data) && null !== $data['is_scim']) {
            $value_3 = $data['is_scim'];
            if (\is_bool($data['is_scim'])) {
                $value_3 = $data['is_scim'];
            }
            $object->setIsScim($value_3);
        } elseif (\array_key_exists('is_scim', $data) && null === $data['is_scim']) {
            $object->setIsScim(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getIsCustom()) {
            $value = $object->getIsCustom();
            if (\is_bool($object->getIsCustom())) {
                $value = $object->getIsCustom();
            }
            $data['is_custom'] = $value;
        }
        if (null !== $object->getIsMultipleEntry()) {
            $value_1 = $object->getIsMultipleEntry();
            if (\is_bool($object->getIsMultipleEntry())) {
                $value_1 = $object->getIsMultipleEntry();
            }
            $data['is_multiple_entry'] = $value_1;
        }
        if (null !== $object->getIsProtected()) {
            $value_2 = $object->getIsProtected();
            if (\is_bool($object->getIsProtected())) {
                $value_2 = $object->getIsProtected();
            }
            $data['is_protected'] = $value_2;
        }
        if (null !== $object->getIsScim()) {
            $value_3 = $object->getIsScim();
            if (\is_bool($object->getIsScim())) {
                $value_3 = $object->getIsScim();
            }
            $data['is_scim'] = $value_3;
        }

        return $data;
    }
}
