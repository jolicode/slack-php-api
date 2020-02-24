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

class TeamAccessLogsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\TeamAccessLogsGetResponse200' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\TeamAccessLogsGetResponse200' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\TeamAccessLogsGetResponse200();
        if (property_exists($data, 'logins') && null !== $data->{'logins'}) {
            $values = [];
            foreach ($data->{'logins'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\TeamAccessLogsGetResponse200LoginsItem', 'json', $context);
            }
            $object->setLogins($values);
        } elseif (property_exists($data, 'logins') && null === $data->{'logins'}) {
            $object->setLogins(null);
        }
        if (property_exists($data, 'ok') && null !== $data->{'ok'}) {
            $object->setOk($data->{'ok'});
        } elseif (property_exists($data, 'ok') && null === $data->{'ok'}) {
            $object->setOk(null);
        }
        if (property_exists($data, 'paging') && null !== $data->{'paging'}) {
            $object->setPaging($this->denormalizer->denormalize($data->{'paging'}, 'JoliCode\\Slack\\Api\\Model\\ObjsPaging', 'json', $context));
        } elseif (property_exists($data, 'paging') && null === $data->{'paging'}) {
            $object->setPaging(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getLogins()) {
            $values = [];
            foreach ($object->getLogins() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'logins'} = $values;
        } else {
            $data->{'logins'} = null;
        }
        if (null !== $object->getOk()) {
            $data->{'ok'} = $object->getOk();
        } else {
            $data->{'ok'} = null;
        }
        if (null !== $object->getPaging()) {
            $data->{'paging'} = $this->normalizer->normalize($object->getPaging(), 'json', $context);
        } else {
            $data->{'paging'} = null;
        }

        return $data;
    }
}
