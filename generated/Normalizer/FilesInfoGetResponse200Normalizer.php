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
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) || (Kernel::MAJOR_VERSION >= 7 || Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4)) {
    class FilesInfoGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\FilesInfoGetResponse200' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\FilesInfoGetResponse200' === \get_class($data);
        }

        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\FilesInfoGetResponse200();
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
                $object->setFile($this->denormalizer->denormalize($data['file'], 'JoliCode\\Slack\\Api\\Model\\ObjsFile', 'json', $context));
            } elseif (\array_key_exists('file', $data) && null === $data['file']) {
                $object->setFile(null);
            }
            if (\array_key_exists('ok', $data) && null !== $data['ok']) {
                $object->setOk($data['ok']);
            } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
                $object->setOk(null);
            }
            if (\array_key_exists('paging', $data) && null !== $data['paging']) {
                $object->setPaging($this->denormalizer->denormalize($data['paging'], 'JoliCode\\Slack\\Api\\Model\\ObjsPaging', 'json', $context));
            } elseif (\array_key_exists('paging', $data) && null === $data['paging']) {
                $object->setPaging(null);
            }
            if (\array_key_exists('response_metadata', $data) && null !== $data['response_metadata']) {
                $object->setResponseMetadata($this->denormalizer->denormalize($data['response_metadata'], 'JoliCode\\Slack\\Api\\Model\\ObjsResponseMetadata', 'json', $context));
            } elseif (\array_key_exists('response_metadata', $data) && null === $data['response_metadata']) {
                $object->setResponseMetadata(null);
            }

            return $object;
        }

        public function normalize(mixed $object, string $format = null, array $context = []): null|array|\ArrayObject|bool|float|int|string
        {
            $data = [];
            $values = [];
            foreach ($object->getComments() as $value) {
                $values[] = $value;
            }
            $data['comments'] = $values;
            if ($object->isInitialized('contentHtml') && null !== $object->getContentHtml()) {
                $data['content_html'] = $object->getContentHtml();
            }
            if ($object->isInitialized('editor') && null !== $object->getEditor()) {
                $data['editor'] = $object->getEditor();
            }
            $data['file'] = $this->normalizer->normalize($object->getFile(), 'json', $context);
            $data['ok'] = $object->getOk();
            if ($object->isInitialized('paging') && null !== $object->getPaging()) {
                $data['paging'] = $this->normalizer->normalize($object->getPaging(), 'json', $context);
            }
            if ($object->isInitialized('responseMetadata') && null !== $object->getResponseMetadata()) {
                $data['response_metadata'] = $this->normalizer->normalize($object->getResponseMetadata(), 'json', $context);
            }

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\FilesInfoGetResponse200' => false];
        }
    }
} else {
    class FilesInfoGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\FilesInfoGetResponse200' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\FilesInfoGetResponse200' === \get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\FilesInfoGetResponse200();
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
                $object->setFile($this->denormalizer->denormalize($data['file'], 'JoliCode\\Slack\\Api\\Model\\ObjsFile', 'json', $context));
            } elseif (\array_key_exists('file', $data) && null === $data['file']) {
                $object->setFile(null);
            }
            if (\array_key_exists('ok', $data) && null !== $data['ok']) {
                $object->setOk($data['ok']);
            } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
                $object->setOk(null);
            }
            if (\array_key_exists('paging', $data) && null !== $data['paging']) {
                $object->setPaging($this->denormalizer->denormalize($data['paging'], 'JoliCode\\Slack\\Api\\Model\\ObjsPaging', 'json', $context));
            } elseif (\array_key_exists('paging', $data) && null === $data['paging']) {
                $object->setPaging(null);
            }
            if (\array_key_exists('response_metadata', $data) && null !== $data['response_metadata']) {
                $object->setResponseMetadata($this->denormalizer->denormalize($data['response_metadata'], 'JoliCode\\Slack\\Api\\Model\\ObjsResponseMetadata', 'json', $context));
            } elseif (\array_key_exists('response_metadata', $data) && null === $data['response_metadata']) {
                $object->setResponseMetadata(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $values = [];
            foreach ($object->getComments() as $value) {
                $values[] = $value;
            }
            $data['comments'] = $values;
            if ($object->isInitialized('contentHtml') && null !== $object->getContentHtml()) {
                $data['content_html'] = $object->getContentHtml();
            }
            if ($object->isInitialized('editor') && null !== $object->getEditor()) {
                $data['editor'] = $object->getEditor();
            }
            $data['file'] = $this->normalizer->normalize($object->getFile(), 'json', $context);
            $data['ok'] = $object->getOk();
            if ($object->isInitialized('paging') && null !== $object->getPaging()) {
                $data['paging'] = $this->normalizer->normalize($object->getPaging(), 'json', $context);
            }
            if ($object->isInitialized('responseMetadata') && null !== $object->getResponseMetadata()) {
                $data['response_metadata'] = $this->normalizer->normalize($object->getResponseMetadata(), 'json', $context);
            }

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\FilesInfoGetResponse200' => false];
        }
    }
}
