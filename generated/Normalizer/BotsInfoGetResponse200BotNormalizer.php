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
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class BotsInfoGetResponse200BotNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\BotsInfoGetResponse200Bot' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\BotsInfoGetResponse200Bot' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!\is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\BotsInfoGetResponse200Bot();
        if (property_exists($data, 'app_id') && null !== $data->{'app_id'}) {
            $object->setAppId($data->{'app_id'});
        } elseif (property_exists($data, 'app_id') && null === $data->{'app_id'}) {
            $object->setAppId(null);
        }
        if (property_exists($data, 'deleted') && null !== $data->{'deleted'}) {
            $object->setDeleted($data->{'deleted'});
        } elseif (property_exists($data, 'deleted') && null === $data->{'deleted'}) {
            $object->setDeleted(null);
        }
        if (property_exists($data, 'icons') && null !== $data->{'icons'}) {
            $object->setIcons($this->denormalizer->denormalize($data->{'icons'}, 'JoliCode\\Slack\\Api\\Model\\BotsInfoGetResponse200BotIcons', 'json', $context));
        } elseif (property_exists($data, 'icons') && null === $data->{'icons'}) {
            $object->setIcons(null);
        }
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        } elseif (property_exists($data, 'id') && null === $data->{'id'}) {
            $object->setId(null);
        }
        if (property_exists($data, 'name') && null !== $data->{'name'}) {
            $object->setName($data->{'name'});
        } elseif (property_exists($data, 'name') && null === $data->{'name'}) {
            $object->setName(null);
        }
        if (property_exists($data, 'updated') && null !== $data->{'updated'}) {
            $object->setUpdated($data->{'updated'});
        } elseif (property_exists($data, 'updated') && null === $data->{'updated'}) {
            $object->setUpdated(null);
        }
        if (property_exists($data, 'user_id') && null !== $data->{'user_id'}) {
            $object->setUserId($data->{'user_id'});
        } elseif (property_exists($data, 'user_id') && null === $data->{'user_id'}) {
            $object->setUserId(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAppId()) {
            $data->{'app_id'} = $object->getAppId();
        } else {
            $data->{'app_id'} = null;
        }
        if (null !== $object->getDeleted()) {
            $data->{'deleted'} = $object->getDeleted();
        } else {
            $data->{'deleted'} = null;
        }
        if (null !== $object->getIcons()) {
            $data->{'icons'} = $this->normalizer->normalize($object->getIcons(), 'json', $context);
        } else {
            $data->{'icons'} = null;
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        } else {
            $data->{'id'} = null;
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        } else {
            $data->{'name'} = null;
        }
        if (null !== $object->getUpdated()) {
            $data->{'updated'} = $object->getUpdated();
        } else {
            $data->{'updated'} = null;
        }
        if (null !== $object->getUserId()) {
            $data->{'user_id'} = $object->getUserId();
        } else {
            $data->{'user_id'} = null;
        }

        return $data;
    }
}
