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

if (!class_exists(Kernel::class) || (Kernel::MAJOR_VERSION >= 7 || (Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4 && version_compare(PHP_VERSION, '8.0.0', '>=')))) {
    class ObjsMessageAttachmentsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\ObjsMessageAttachmentsItem' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsMessageAttachmentsItem' === \get_class($data);
        }

        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('actions', $data) && null !== $data['actions']) {
                $values = [];
                foreach ($data['actions'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\ObjsMessageAttachmentsItemActionsItem', 'json', $context);
                }
                $object->setActions($values);
                unset($data['actions']);
            } elseif (\array_key_exists('actions', $data) && null === $data['actions']) {
                $object->setActions(null);
            }
            if (\array_key_exists('author_icon', $data) && null !== $data['author_icon']) {
                $object->setAuthorIcon($data['author_icon']);
                unset($data['author_icon']);
            } elseif (\array_key_exists('author_icon', $data) && null === $data['author_icon']) {
                $object->setAuthorIcon(null);
            }
            if (\array_key_exists('author_link', $data) && null !== $data['author_link']) {
                $object->setAuthorLink($data['author_link']);
                unset($data['author_link']);
            } elseif (\array_key_exists('author_link', $data) && null === $data['author_link']) {
                $object->setAuthorLink(null);
            }
            if (\array_key_exists('author_name', $data) && null !== $data['author_name']) {
                $object->setAuthorName($data['author_name']);
                unset($data['author_name']);
            } elseif (\array_key_exists('author_name', $data) && null === $data['author_name']) {
                $object->setAuthorName(null);
            }
            if (\array_key_exists('callback_id', $data) && null !== $data['callback_id']) {
                $object->setCallbackId($data['callback_id']);
                unset($data['callback_id']);
            } elseif (\array_key_exists('callback_id', $data) && null === $data['callback_id']) {
                $object->setCallbackId(null);
            }
            if (\array_key_exists('color', $data) && null !== $data['color']) {
                $object->setColor($data['color']);
                unset($data['color']);
            } elseif (\array_key_exists('color', $data) && null === $data['color']) {
                $object->setColor(null);
            }
            if (\array_key_exists('fallback', $data) && null !== $data['fallback']) {
                $object->setFallback($data['fallback']);
                unset($data['fallback']);
            } elseif (\array_key_exists('fallback', $data) && null === $data['fallback']) {
                $object->setFallback(null);
            }
            if (\array_key_exists('fields', $data) && null !== $data['fields']) {
                $values_1 = [];
                foreach ($data['fields'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'JoliCode\\Slack\\Api\\Model\\ObjsMessageAttachmentsItemFieldsItem', 'json', $context);
                }
                $object->setFields($values_1);
                unset($data['fields']);
            } elseif (\array_key_exists('fields', $data) && null === $data['fields']) {
                $object->setFields(null);
            }
            if (\array_key_exists('footer', $data) && null !== $data['footer']) {
                $object->setFooter($data['footer']);
                unset($data['footer']);
            } elseif (\array_key_exists('footer', $data) && null === $data['footer']) {
                $object->setFooter(null);
            }
            if (\array_key_exists('footer_icon', $data) && null !== $data['footer_icon']) {
                $object->setFooterIcon($data['footer_icon']);
                unset($data['footer_icon']);
            } elseif (\array_key_exists('footer_icon', $data) && null === $data['footer_icon']) {
                $object->setFooterIcon(null);
            }
            if (\array_key_exists('id', $data) && null !== $data['id']) {
                $object->setId($data['id']);
                unset($data['id']);
            } elseif (\array_key_exists('id', $data) && null === $data['id']) {
                $object->setId(null);
            }
            if (\array_key_exists('image_bytes', $data) && null !== $data['image_bytes']) {
                $object->setImageBytes($data['image_bytes']);
                unset($data['image_bytes']);
            } elseif (\array_key_exists('image_bytes', $data) && null === $data['image_bytes']) {
                $object->setImageBytes(null);
            }
            if (\array_key_exists('image_height', $data) && null !== $data['image_height']) {
                $object->setImageHeight($data['image_height']);
                unset($data['image_height']);
            } elseif (\array_key_exists('image_height', $data) && null === $data['image_height']) {
                $object->setImageHeight(null);
            }
            if (\array_key_exists('image_url', $data) && null !== $data['image_url']) {
                $object->setImageUrl($data['image_url']);
                unset($data['image_url']);
            } elseif (\array_key_exists('image_url', $data) && null === $data['image_url']) {
                $object->setImageUrl(null);
            }
            if (\array_key_exists('image_width', $data) && null !== $data['image_width']) {
                $object->setImageWidth($data['image_width']);
                unset($data['image_width']);
            } elseif (\array_key_exists('image_width', $data) && null === $data['image_width']) {
                $object->setImageWidth(null);
            }
            if (\array_key_exists('pretext', $data) && null !== $data['pretext']) {
                $object->setPretext($data['pretext']);
                unset($data['pretext']);
            } elseif (\array_key_exists('pretext', $data) && null === $data['pretext']) {
                $object->setPretext(null);
            }
            if (\array_key_exists('text', $data) && null !== $data['text']) {
                $object->setText($data['text']);
                unset($data['text']);
            } elseif (\array_key_exists('text', $data) && null === $data['text']) {
                $object->setText(null);
            }
            if (\array_key_exists('thumb_url', $data) && null !== $data['thumb_url']) {
                $object->setThumbUrl($data['thumb_url']);
                unset($data['thumb_url']);
            } elseif (\array_key_exists('thumb_url', $data) && null === $data['thumb_url']) {
                $object->setThumbUrl(null);
            }
            if (\array_key_exists('title', $data) && null !== $data['title']) {
                $object->setTitle($data['title']);
                unset($data['title']);
            } elseif (\array_key_exists('title', $data) && null === $data['title']) {
                $object->setTitle(null);
            }
            if (\array_key_exists('title_link', $data) && null !== $data['title_link']) {
                $object->setTitleLink($data['title_link']);
                unset($data['title_link']);
            } elseif (\array_key_exists('title_link', $data) && null === $data['title_link']) {
                $object->setTitleLink(null);
            }
            if (\array_key_exists('ts', $data) && null !== $data['ts']) {
                $value_2 = $data['ts'];
                if (\is_float($data['ts'])) {
                    $value_2 = $data['ts'];
                } elseif (\is_string($data['ts'])) {
                    $value_2 = $data['ts'];
                }
                $object->setTs($value_2);
                unset($data['ts']);
            } elseif (\array_key_exists('ts', $data) && null === $data['ts']) {
                $object->setTs(null);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, string $format = null, array $context = []): null|array|\ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('actions') && null !== $object->getActions()) {
                $values = [];
                foreach ($object->getActions() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['actions'] = $values;
            }
            if ($object->isInitialized('authorIcon') && null !== $object->getAuthorIcon()) {
                $data['author_icon'] = $object->getAuthorIcon();
            }
            if ($object->isInitialized('authorLink') && null !== $object->getAuthorLink()) {
                $data['author_link'] = $object->getAuthorLink();
            }
            if ($object->isInitialized('authorName') && null !== $object->getAuthorName()) {
                $data['author_name'] = $object->getAuthorName();
            }
            if ($object->isInitialized('callbackId') && null !== $object->getCallbackId()) {
                $data['callback_id'] = $object->getCallbackId();
            }
            if ($object->isInitialized('color') && null !== $object->getColor()) {
                $data['color'] = $object->getColor();
            }
            if ($object->isInitialized('fallback') && null !== $object->getFallback()) {
                $data['fallback'] = $object->getFallback();
            }
            if ($object->isInitialized('fields') && null !== $object->getFields()) {
                $values_1 = [];
                foreach ($object->getFields() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['fields'] = $values_1;
            }
            if ($object->isInitialized('footer') && null !== $object->getFooter()) {
                $data['footer'] = $object->getFooter();
            }
            if ($object->isInitialized('footerIcon') && null !== $object->getFooterIcon()) {
                $data['footer_icon'] = $object->getFooterIcon();
            }
            $data['id'] = $object->getId();
            if ($object->isInitialized('imageBytes') && null !== $object->getImageBytes()) {
                $data['image_bytes'] = $object->getImageBytes();
            }
            if ($object->isInitialized('imageHeight') && null !== $object->getImageHeight()) {
                $data['image_height'] = $object->getImageHeight();
            }
            if ($object->isInitialized('imageUrl') && null !== $object->getImageUrl()) {
                $data['image_url'] = $object->getImageUrl();
            }
            if ($object->isInitialized('imageWidth') && null !== $object->getImageWidth()) {
                $data['image_width'] = $object->getImageWidth();
            }
            if ($object->isInitialized('pretext') && null !== $object->getPretext()) {
                $data['pretext'] = $object->getPretext();
            }
            if ($object->isInitialized('text') && null !== $object->getText()) {
                $data['text'] = $object->getText();
            }
            if ($object->isInitialized('thumbUrl') && null !== $object->getThumbUrl()) {
                $data['thumb_url'] = $object->getThumbUrl();
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            if ($object->isInitialized('titleLink') && null !== $object->getTitleLink()) {
                $data['title_link'] = $object->getTitleLink();
            }
            if ($object->isInitialized('ts') && null !== $object->getTs()) {
                $value_2 = $object->getTs();
                if (\is_float($object->getTs())) {
                    $value_2 = $object->getTs();
                } elseif (\is_string($object->getTs())) {
                    $value_2 = $object->getTs();
                }
                $data['ts'] = $value_2;
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\ObjsMessageAttachmentsItem' => false];
        }
    }
} else {
    class ObjsMessageAttachmentsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\ObjsMessageAttachmentsItem' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsMessageAttachmentsItem' === \get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('actions', $data) && null !== $data['actions']) {
                $values = [];
                foreach ($data['actions'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\ObjsMessageAttachmentsItemActionsItem', 'json', $context);
                }
                $object->setActions($values);
                unset($data['actions']);
            } elseif (\array_key_exists('actions', $data) && null === $data['actions']) {
                $object->setActions(null);
            }
            if (\array_key_exists('author_icon', $data) && null !== $data['author_icon']) {
                $object->setAuthorIcon($data['author_icon']);
                unset($data['author_icon']);
            } elseif (\array_key_exists('author_icon', $data) && null === $data['author_icon']) {
                $object->setAuthorIcon(null);
            }
            if (\array_key_exists('author_link', $data) && null !== $data['author_link']) {
                $object->setAuthorLink($data['author_link']);
                unset($data['author_link']);
            } elseif (\array_key_exists('author_link', $data) && null === $data['author_link']) {
                $object->setAuthorLink(null);
            }
            if (\array_key_exists('author_name', $data) && null !== $data['author_name']) {
                $object->setAuthorName($data['author_name']);
                unset($data['author_name']);
            } elseif (\array_key_exists('author_name', $data) && null === $data['author_name']) {
                $object->setAuthorName(null);
            }
            if (\array_key_exists('callback_id', $data) && null !== $data['callback_id']) {
                $object->setCallbackId($data['callback_id']);
                unset($data['callback_id']);
            } elseif (\array_key_exists('callback_id', $data) && null === $data['callback_id']) {
                $object->setCallbackId(null);
            }
            if (\array_key_exists('color', $data) && null !== $data['color']) {
                $object->setColor($data['color']);
                unset($data['color']);
            } elseif (\array_key_exists('color', $data) && null === $data['color']) {
                $object->setColor(null);
            }
            if (\array_key_exists('fallback', $data) && null !== $data['fallback']) {
                $object->setFallback($data['fallback']);
                unset($data['fallback']);
            } elseif (\array_key_exists('fallback', $data) && null === $data['fallback']) {
                $object->setFallback(null);
            }
            if (\array_key_exists('fields', $data) && null !== $data['fields']) {
                $values_1 = [];
                foreach ($data['fields'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'JoliCode\\Slack\\Api\\Model\\ObjsMessageAttachmentsItemFieldsItem', 'json', $context);
                }
                $object->setFields($values_1);
                unset($data['fields']);
            } elseif (\array_key_exists('fields', $data) && null === $data['fields']) {
                $object->setFields(null);
            }
            if (\array_key_exists('footer', $data) && null !== $data['footer']) {
                $object->setFooter($data['footer']);
                unset($data['footer']);
            } elseif (\array_key_exists('footer', $data) && null === $data['footer']) {
                $object->setFooter(null);
            }
            if (\array_key_exists('footer_icon', $data) && null !== $data['footer_icon']) {
                $object->setFooterIcon($data['footer_icon']);
                unset($data['footer_icon']);
            } elseif (\array_key_exists('footer_icon', $data) && null === $data['footer_icon']) {
                $object->setFooterIcon(null);
            }
            if (\array_key_exists('id', $data) && null !== $data['id']) {
                $object->setId($data['id']);
                unset($data['id']);
            } elseif (\array_key_exists('id', $data) && null === $data['id']) {
                $object->setId(null);
            }
            if (\array_key_exists('image_bytes', $data) && null !== $data['image_bytes']) {
                $object->setImageBytes($data['image_bytes']);
                unset($data['image_bytes']);
            } elseif (\array_key_exists('image_bytes', $data) && null === $data['image_bytes']) {
                $object->setImageBytes(null);
            }
            if (\array_key_exists('image_height', $data) && null !== $data['image_height']) {
                $object->setImageHeight($data['image_height']);
                unset($data['image_height']);
            } elseif (\array_key_exists('image_height', $data) && null === $data['image_height']) {
                $object->setImageHeight(null);
            }
            if (\array_key_exists('image_url', $data) && null !== $data['image_url']) {
                $object->setImageUrl($data['image_url']);
                unset($data['image_url']);
            } elseif (\array_key_exists('image_url', $data) && null === $data['image_url']) {
                $object->setImageUrl(null);
            }
            if (\array_key_exists('image_width', $data) && null !== $data['image_width']) {
                $object->setImageWidth($data['image_width']);
                unset($data['image_width']);
            } elseif (\array_key_exists('image_width', $data) && null === $data['image_width']) {
                $object->setImageWidth(null);
            }
            if (\array_key_exists('pretext', $data) && null !== $data['pretext']) {
                $object->setPretext($data['pretext']);
                unset($data['pretext']);
            } elseif (\array_key_exists('pretext', $data) && null === $data['pretext']) {
                $object->setPretext(null);
            }
            if (\array_key_exists('text', $data) && null !== $data['text']) {
                $object->setText($data['text']);
                unset($data['text']);
            } elseif (\array_key_exists('text', $data) && null === $data['text']) {
                $object->setText(null);
            }
            if (\array_key_exists('thumb_url', $data) && null !== $data['thumb_url']) {
                $object->setThumbUrl($data['thumb_url']);
                unset($data['thumb_url']);
            } elseif (\array_key_exists('thumb_url', $data) && null === $data['thumb_url']) {
                $object->setThumbUrl(null);
            }
            if (\array_key_exists('title', $data) && null !== $data['title']) {
                $object->setTitle($data['title']);
                unset($data['title']);
            } elseif (\array_key_exists('title', $data) && null === $data['title']) {
                $object->setTitle(null);
            }
            if (\array_key_exists('title_link', $data) && null !== $data['title_link']) {
                $object->setTitleLink($data['title_link']);
                unset($data['title_link']);
            } elseif (\array_key_exists('title_link', $data) && null === $data['title_link']) {
                $object->setTitleLink(null);
            }
            if (\array_key_exists('ts', $data) && null !== $data['ts']) {
                $value_2 = $data['ts'];
                if (\is_float($data['ts'])) {
                    $value_2 = $data['ts'];
                } elseif (\is_string($data['ts'])) {
                    $value_2 = $data['ts'];
                }
                $object->setTs($value_2);
                unset($data['ts']);
            } elseif (\array_key_exists('ts', $data) && null === $data['ts']) {
                $object->setTs(null);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('actions') && null !== $object->getActions()) {
                $values = [];
                foreach ($object->getActions() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['actions'] = $values;
            }
            if ($object->isInitialized('authorIcon') && null !== $object->getAuthorIcon()) {
                $data['author_icon'] = $object->getAuthorIcon();
            }
            if ($object->isInitialized('authorLink') && null !== $object->getAuthorLink()) {
                $data['author_link'] = $object->getAuthorLink();
            }
            if ($object->isInitialized('authorName') && null !== $object->getAuthorName()) {
                $data['author_name'] = $object->getAuthorName();
            }
            if ($object->isInitialized('callbackId') && null !== $object->getCallbackId()) {
                $data['callback_id'] = $object->getCallbackId();
            }
            if ($object->isInitialized('color') && null !== $object->getColor()) {
                $data['color'] = $object->getColor();
            }
            if ($object->isInitialized('fallback') && null !== $object->getFallback()) {
                $data['fallback'] = $object->getFallback();
            }
            if ($object->isInitialized('fields') && null !== $object->getFields()) {
                $values_1 = [];
                foreach ($object->getFields() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['fields'] = $values_1;
            }
            if ($object->isInitialized('footer') && null !== $object->getFooter()) {
                $data['footer'] = $object->getFooter();
            }
            if ($object->isInitialized('footerIcon') && null !== $object->getFooterIcon()) {
                $data['footer_icon'] = $object->getFooterIcon();
            }
            $data['id'] = $object->getId();
            if ($object->isInitialized('imageBytes') && null !== $object->getImageBytes()) {
                $data['image_bytes'] = $object->getImageBytes();
            }
            if ($object->isInitialized('imageHeight') && null !== $object->getImageHeight()) {
                $data['image_height'] = $object->getImageHeight();
            }
            if ($object->isInitialized('imageUrl') && null !== $object->getImageUrl()) {
                $data['image_url'] = $object->getImageUrl();
            }
            if ($object->isInitialized('imageWidth') && null !== $object->getImageWidth()) {
                $data['image_width'] = $object->getImageWidth();
            }
            if ($object->isInitialized('pretext') && null !== $object->getPretext()) {
                $data['pretext'] = $object->getPretext();
            }
            if ($object->isInitialized('text') && null !== $object->getText()) {
                $data['text'] = $object->getText();
            }
            if ($object->isInitialized('thumbUrl') && null !== $object->getThumbUrl()) {
                $data['thumb_url'] = $object->getThumbUrl();
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            if ($object->isInitialized('titleLink') && null !== $object->getTitleLink()) {
                $data['title_link'] = $object->getTitleLink();
            }
            if ($object->isInitialized('ts') && null !== $object->getTs()) {
                $value_2 = $object->getTs();
                if (\is_float($object->getTs())) {
                    $value_2 = $object->getTs();
                } elseif (\is_string($object->getTs())) {
                    $value_2 = $object->getTs();
                }
                $data['ts'] = $value_2;
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\ObjsMessageAttachmentsItem' => false];
        }
    }
}
