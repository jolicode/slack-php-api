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

class ObjsMessageAttachmentsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItem::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
                $values[] = $this->denormalizer->denormalize($value, \JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItemActionsItem::class, 'json', $context);
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
                $values_1[] = $this->denormalizer->denormalize($value_1, \JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItemFieldsItem::class, 'json', $context);
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

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('actions') && null !== $data->getActions()) {
            $values = [];
            foreach ($data->getActions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['actions'] = $values;
        }
        if ($data->isInitialized('authorIcon') && null !== $data->getAuthorIcon()) {
            $dataArray['author_icon'] = $data->getAuthorIcon();
        }
        if ($data->isInitialized('authorLink') && null !== $data->getAuthorLink()) {
            $dataArray['author_link'] = $data->getAuthorLink();
        }
        if ($data->isInitialized('authorName') && null !== $data->getAuthorName()) {
            $dataArray['author_name'] = $data->getAuthorName();
        }
        if ($data->isInitialized('callbackId') && null !== $data->getCallbackId()) {
            $dataArray['callback_id'] = $data->getCallbackId();
        }
        if ($data->isInitialized('color') && null !== $data->getColor()) {
            $dataArray['color'] = $data->getColor();
        }
        if ($data->isInitialized('fallback') && null !== $data->getFallback()) {
            $dataArray['fallback'] = $data->getFallback();
        }
        if ($data->isInitialized('fields') && null !== $data->getFields()) {
            $values_1 = [];
            foreach ($data->getFields() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['fields'] = $values_1;
        }
        if ($data->isInitialized('footer') && null !== $data->getFooter()) {
            $dataArray['footer'] = $data->getFooter();
        }
        if ($data->isInitialized('footerIcon') && null !== $data->getFooterIcon()) {
            $dataArray['footer_icon'] = $data->getFooterIcon();
        }
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('imageBytes') && null !== $data->getImageBytes()) {
            $dataArray['image_bytes'] = $data->getImageBytes();
        }
        if ($data->isInitialized('imageHeight') && null !== $data->getImageHeight()) {
            $dataArray['image_height'] = $data->getImageHeight();
        }
        if ($data->isInitialized('imageUrl') && null !== $data->getImageUrl()) {
            $dataArray['image_url'] = $data->getImageUrl();
        }
        if ($data->isInitialized('imageWidth') && null !== $data->getImageWidth()) {
            $dataArray['image_width'] = $data->getImageWidth();
        }
        if ($data->isInitialized('pretext') && null !== $data->getPretext()) {
            $dataArray['pretext'] = $data->getPretext();
        }
        if ($data->isInitialized('text') && null !== $data->getText()) {
            $dataArray['text'] = $data->getText();
        }
        if ($data->isInitialized('thumbUrl') && null !== $data->getThumbUrl()) {
            $dataArray['thumb_url'] = $data->getThumbUrl();
        }
        if ($data->isInitialized('title') && null !== $data->getTitle()) {
            $dataArray['title'] = $data->getTitle();
        }
        if ($data->isInitialized('titleLink') && null !== $data->getTitleLink()) {
            $dataArray['title_link'] = $data->getTitleLink();
        }
        if ($data->isInitialized('ts') && null !== $data->getTs()) {
            $value_2 = $data->getTs();
            if (\is_float($data->getTs())) {
                $value_2 = $data->getTs();
            } elseif (\is_string($data->getTs())) {
                $value_2 = $data->getTs();
            }
            $dataArray['ts'] = $value_2;
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItem::class => false];
    }
}
