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
    class ChatUpdatePostResponse200MessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\ChatUpdatePostResponse200Message' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ChatUpdatePostResponse200Message' === \get_class($data);
        }

        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ChatUpdatePostResponse200Message();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('attachments', $data) && null !== $data['attachments']) {
                $values = [];
                foreach ($data['attachments'] as $value) {
                    $values[] = $value;
                }
                $object->setAttachments($values);
            } elseif (\array_key_exists('attachments', $data) && null === $data['attachments']) {
                $object->setAttachments(null);
            }
            if (\array_key_exists('blocks', $data) && null !== $data['blocks']) {
                $object->setBlocks($data['blocks']);
            } elseif (\array_key_exists('blocks', $data) && null === $data['blocks']) {
                $object->setBlocks(null);
            }
            if (\array_key_exists('text', $data) && null !== $data['text']) {
                $object->setText($data['text']);
            } elseif (\array_key_exists('text', $data) && null === $data['text']) {
                $object->setText(null);
            }

            return $object;
        }

        public function normalize(mixed $object, string $format = null, array $context = []): null|array|\ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('attachments') && null !== $object->getAttachments()) {
                $values = [];
                foreach ($object->getAttachments() as $value) {
                    $values[] = $value;
                }
                $data['attachments'] = $values;
            }
            if ($object->isInitialized('blocks') && null !== $object->getBlocks()) {
                $data['blocks'] = $object->getBlocks();
            }
            $data['text'] = $object->getText();

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\ChatUpdatePostResponse200Message' => false];
        }
    }
} else {
    class ChatUpdatePostResponse200MessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\ChatUpdatePostResponse200Message' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ChatUpdatePostResponse200Message' === \get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ChatUpdatePostResponse200Message();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('attachments', $data) && null !== $data['attachments']) {
                $values = [];
                foreach ($data['attachments'] as $value) {
                    $values[] = $value;
                }
                $object->setAttachments($values);
            } elseif (\array_key_exists('attachments', $data) && null === $data['attachments']) {
                $object->setAttachments(null);
            }
            if (\array_key_exists('blocks', $data) && null !== $data['blocks']) {
                $object->setBlocks($data['blocks']);
            } elseif (\array_key_exists('blocks', $data) && null === $data['blocks']) {
                $object->setBlocks(null);
            }
            if (\array_key_exists('text', $data) && null !== $data['text']) {
                $object->setText($data['text']);
            } elseif (\array_key_exists('text', $data) && null === $data['text']) {
                $object->setText(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('attachments') && null !== $object->getAttachments()) {
                $values = [];
                foreach ($object->getAttachments() as $value) {
                    $values[] = $value;
                }
                $data['attachments'] = $values;
            }
            if ($object->isInitialized('blocks') && null !== $object->getBlocks()) {
                $data['blocks'] = $object->getBlocks();
            }
            $data['text'] = $object->getText();

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\ChatUpdatePostResponse200Message' => false];
        }
    }
}
