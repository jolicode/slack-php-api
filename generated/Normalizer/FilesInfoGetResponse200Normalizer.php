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

class FilesInfoGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\FilesInfoGetResponse200' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\FilesInfoGetResponse200' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\FilesInfoGetResponse200();
        if (property_exists($data, 'comments') && null !== $data->{'comments'}) {
            $values = [];
            foreach ($data->{'comments'} as $value) {
                $values[] = $value;
            }
            $object->setComments($values);
        } elseif (property_exists($data, 'comments') && null === $data->{'comments'}) {
            $object->setComments(null);
        }
        if (property_exists($data, 'content_html') && null !== $data->{'content_html'}) {
            $object->setContentHtml($data->{'content_html'});
        } elseif (property_exists($data, 'content_html') && null === $data->{'content_html'}) {
            $object->setContentHtml(null);
        }
        if (property_exists($data, 'editor') && null !== $data->{'editor'}) {
            $object->setEditor($data->{'editor'});
        } elseif (property_exists($data, 'editor') && null === $data->{'editor'}) {
            $object->setEditor(null);
        }
        if (property_exists($data, 'file') && null !== $data->{'file'}) {
            $object->setFile($this->denormalizer->denormalize($data->{'file'}, 'JoliCode\\Slack\\Api\\Model\\ObjsFile', 'json', $context));
        } elseif (property_exists($data, 'file') && null === $data->{'file'}) {
            $object->setFile(null);
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
        if (property_exists($data, 'response_metadata') && null !== $data->{'response_metadata'}) {
            $object->setResponseMetadata($this->denormalizer->denormalize($data->{'response_metadata'}, 'JoliCode\\Slack\\Api\\Model\\ObjsResponseMetadata', 'json', $context));
        } elseif (property_exists($data, 'response_metadata') && null === $data->{'response_metadata'}) {
            $object->setResponseMetadata(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getComments()) {
            $values = [];
            foreach ($object->getComments() as $value) {
                $values[] = $value;
            }
            $data->{'comments'} = $values;
        } else {
            $data->{'comments'} = null;
        }
        if (null !== $object->getContentHtml()) {
            $data->{'content_html'} = $object->getContentHtml();
        } else {
            $data->{'content_html'} = null;
        }
        if (null !== $object->getEditor()) {
            $data->{'editor'} = $object->getEditor();
        } else {
            $data->{'editor'} = null;
        }
        if (null !== $object->getFile()) {
            $data->{'file'} = $this->normalizer->normalize($object->getFile(), 'json', $context);
        } else {
            $data->{'file'} = null;
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
        if (null !== $object->getResponseMetadata()) {
            $data->{'response_metadata'} = $this->normalizer->normalize($object->getResponseMetadata(), 'json', $context);
        } else {
            $data->{'response_metadata'} = null;
        }

        return $data;
    }
}
