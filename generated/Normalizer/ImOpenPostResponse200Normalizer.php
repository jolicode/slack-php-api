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

use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ImOpenPostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ImOpenPostResponse200' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ImOpenPostResponse200' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ImOpenPostResponse200();
        if (\array_key_exists('already_open', $data) && null !== $data['already_open']) {
            $object->setAlreadyOpen($data['already_open']);
        } elseif (\array_key_exists('already_open', $data) && null === $data['already_open']) {
            $object->setAlreadyOpen(null);
        }
        if (\array_key_exists('channel', $data) && null !== $data['channel']) {
            $object->setChannel($this->denormalizer->denormalize($data['channel'], 'JoliCode\\Slack\\Api\\Model\\ImOpenPostResponse200Channel', 'json', $context));
        } elseif (\array_key_exists('channel', $data) && null === $data['channel']) {
            $object->setChannel(null);
        }
        if (\array_key_exists('no_op', $data) && null !== $data['no_op']) {
            $object->setNoOp($data['no_op']);
        } elseif (\array_key_exists('no_op', $data) && null === $data['no_op']) {
            $object->setNoOp(null);
        }
        if (\array_key_exists('ok', $data) && null !== $data['ok']) {
            $object->setOk($data['ok']);
        } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
            $object->setOk(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getAlreadyOpen()) {
            $data['already_open'] = $object->getAlreadyOpen();
        } else {
            $data['already_open'] = null;
        }
        if (null !== $object->getChannel()) {
            $data['channel'] = $this->normalizer->normalize($object->getChannel(), 'json', $context);
        } else {
            $data['channel'] = null;
        }
        if (null !== $object->getNoOp()) {
            $data['no_op'] = $object->getNoOp();
        } else {
            $data['no_op'] = null;
        }
        if (null !== $object->getOk()) {
            $data['ok'] = $object->getOk();
        } else {
            $data['ok'] = null;
        }

        return $data;
    }
}
