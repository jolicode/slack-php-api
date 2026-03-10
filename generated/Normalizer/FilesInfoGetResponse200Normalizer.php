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

class FilesInfoGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\FilesInfoGetResponse200::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\FilesInfoGetResponse200::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\FilesInfoGetResponse200();
        if (\array_key_exists('ok', $data) && \is_int($data['ok'])) {
            $data['ok'] = (bool) $data['ok'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('comments', $data) && null !== $data['comments']) {
            $values = [];
            foreach ($data['comments'] as $value) {
                $values[] = $value;
            }
            $object->setComments($values);
        } elseif (\array_key_exists('comments', $data) && null === $data['comments']) {
            $object->setComments(null);
        }
        if (\array_key_exists('content_html', $data) && null !== $data['content_html']) {
            $object->setContentHtml($data['content_html']);
        } elseif (\array_key_exists('content_html', $data) && null === $data['content_html']) {
            $object->setContentHtml(null);
        }
        if (\array_key_exists('editor', $data) && null !== $data['editor']) {
            $object->setEditor($data['editor']);
        } elseif (\array_key_exists('editor', $data) && null === $data['editor']) {
            $object->setEditor(null);
        }
        if (\array_key_exists('file', $data) && null !== $data['file']) {
            $object->setFile($this->denormalizer->denormalize($data['file'], \JoliCode\Slack\Api\Model\ObjsFile::class, 'json', $context));
        } elseif (\array_key_exists('file', $data) && null === $data['file']) {
            $object->setFile(null);
        }
        if (\array_key_exists('ok', $data) && null !== $data['ok']) {
            $object->setOk($data['ok']);
        } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
            $object->setOk(null);
        }
        if (\array_key_exists('paging', $data) && null !== $data['paging']) {
            $object->setPaging($this->denormalizer->denormalize($data['paging'], \JoliCode\Slack\Api\Model\ObjsPaging::class, 'json', $context));
        } elseif (\array_key_exists('paging', $data) && null === $data['paging']) {
            $object->setPaging(null);
        }
        if (\array_key_exists('response_metadata', $data) && null !== $data['response_metadata']) {
            $object->setResponseMetadata($this->denormalizer->denormalize($data['response_metadata'], \JoliCode\Slack\Api\Model\ObjsResponseMetadata::class, 'json', $context));
        } elseif (\array_key_exists('response_metadata', $data) && null === $data['response_metadata']) {
            $object->setResponseMetadata(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $values = [];
        foreach ($data->getComments() as $value) {
            $values[] = $value;
        }
        $dataArray['comments'] = $values;
        if ($data->isInitialized('contentHtml') && null !== $data->getContentHtml()) {
            $dataArray['content_html'] = $data->getContentHtml();
        }
        if ($data->isInitialized('editor') && null !== $data->getEditor()) {
            $dataArray['editor'] = $data->getEditor();
        }
        $dataArray['file'] = $this->normalizer->normalize($data->getFile(), 'json', $context);
        $dataArray['ok'] = $data->getOk();
        if ($data->isInitialized('paging') && null !== $data->getPaging()) {
            $dataArray['paging'] = $this->normalizer->normalize($data->getPaging(), 'json', $context);
        }
        if ($data->isInitialized('responseMetadata') && null !== $data->getResponseMetadata()) {
            $dataArray['response_metadata'] = $this->normalizer->normalize($data->getResponseMetadata(), 'json', $context);
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\FilesInfoGetResponse200::class => false];
    }
}
