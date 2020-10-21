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

class ObjsExternalOrgMigrationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ObjsExternalOrgMigrations' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsExternalOrgMigrations' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsExternalOrgMigrations();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('current', $data) && null !== $data['current']) {
            $values = [];
            foreach ($data['current'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\ObjsExternalOrgMigrationsCurrentItem', 'json', $context);
            }
            $object->setCurrent($values);
        } elseif (\array_key_exists('current', $data) && null === $data['current']) {
            $object->setCurrent(null);
        }
        if (\array_key_exists('date_updated', $data) && null !== $data['date_updated']) {
            $object->setDateUpdated($data['date_updated']);
        } elseif (\array_key_exists('date_updated', $data) && null === $data['date_updated']) {
            $object->setDateUpdated(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $values = [];
        foreach ($object->getCurrent() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['current'] = $values;
        $data['date_updated'] = $object->getDateUpdated();

        return $data;
    }
}
