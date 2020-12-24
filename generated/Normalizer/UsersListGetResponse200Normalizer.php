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

class UsersListGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\UsersListGetResponse200' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\UsersListGetResponse200' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\UsersListGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cache_ts', $data) && null !== $data['cache_ts']) {
            $object->setCacheTs($data['cache_ts']);
        } elseif (\array_key_exists('cache_ts', $data) && null === $data['cache_ts']) {
            $object->setCacheTs(null);
        }
        if (\array_key_exists('members', $data) && null !== $data['members']) {
            $values = [];
            foreach ($data['members'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\ObjsUser', 'json', $context);
            }
            $object->setMembers($values);
        } elseif (\array_key_exists('members', $data) && null === $data['members']) {
            $object->setMembers(null);
        }
        if (\array_key_exists('ok', $data) && null !== $data['ok']) {
            $object->setOk($data['ok']);
        } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
            $object->setOk(null);
        }
        if (\array_key_exists('response_metadata', $data) && null !== $data['response_metadata']) {
            $object->setResponseMetadata($this->denormalizer->denormalize($data['response_metadata'], 'JoliCode\\Slack\\Api\\Model\\ObjsResponseMetadata', 'json', $context));
        } elseif (\array_key_exists('response_metadata', $data) && null === $data['response_metadata']) {
            $object->setResponseMetadata(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['cache_ts'] = $object->getCacheTs();
        $values = [];
        foreach ($object->getMembers() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['members'] = $values;
        $data['ok'] = $object->getOk();
        if (null !== $object->getResponseMetadata()) {
            $data['response_metadata'] = $this->normalizer->normalize($object->getResponseMetadata(), 'json', $context);
        }

        return $data;
    }
}
