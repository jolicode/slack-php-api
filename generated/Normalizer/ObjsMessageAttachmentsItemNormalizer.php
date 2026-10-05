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
        $object = new \JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('actions', $data) && null !== $data['actions']) {
            $values = [];
            foreach ($data['actions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItemActionsItem::class, 'json', $context);
            }
            $object->actions = $values;
            unset($data['actions']);
        } elseif (\array_key_exists('actions', $data)) {
            $object->actions = null;
            unset($data['actions']);
        }
        if (\array_key_exists('author_icon', $data) && null !== $data['author_icon']) {
            $object->authorIcon = $data['author_icon'];
            unset($data['author_icon']);
        } elseif (\array_key_exists('author_icon', $data)) {
            $object->authorIcon = null;
            unset($data['author_icon']);
        }
        if (\array_key_exists('author_link', $data) && null !== $data['author_link']) {
            $object->authorLink = $data['author_link'];
            unset($data['author_link']);
        } elseif (\array_key_exists('author_link', $data)) {
            $object->authorLink = null;
            unset($data['author_link']);
        }
        if (\array_key_exists('author_name', $data) && null !== $data['author_name']) {
            $object->authorName = $data['author_name'];
            unset($data['author_name']);
        } elseif (\array_key_exists('author_name', $data)) {
            $object->authorName = null;
            unset($data['author_name']);
        }
        if (\array_key_exists('callback_id', $data) && null !== $data['callback_id']) {
            $object->callbackId = $data['callback_id'];
            unset($data['callback_id']);
        } elseif (\array_key_exists('callback_id', $data)) {
            $object->callbackId = null;
            unset($data['callback_id']);
        }
        if (\array_key_exists('color', $data) && null !== $data['color']) {
            $object->color = $data['color'];
            unset($data['color']);
        } elseif (\array_key_exists('color', $data)) {
            $object->color = null;
            unset($data['color']);
        }
        if (\array_key_exists('fallback', $data) && null !== $data['fallback']) {
            $object->fallback = $data['fallback'];
            unset($data['fallback']);
        } elseif (\array_key_exists('fallback', $data)) {
            $object->fallback = null;
            unset($data['fallback']);
        }
        if (\array_key_exists('fields', $data) && null !== $data['fields']) {
            $values_1 = [];
            foreach ($data['fields'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItemFieldsItem::class, 'json', $context);
            }
            $object->fields = $values_1;
            unset($data['fields']);
        } elseif (\array_key_exists('fields', $data)) {
            $object->fields = null;
            unset($data['fields']);
        }
        if (\array_key_exists('footer', $data) && null !== $data['footer']) {
            $object->footer = $data['footer'];
            unset($data['footer']);
        } elseif (\array_key_exists('footer', $data)) {
            $object->footer = null;
            unset($data['footer']);
        }
        if (\array_key_exists('footer_icon', $data) && null !== $data['footer_icon']) {
            $object->footerIcon = $data['footer_icon'];
            unset($data['footer_icon']);
        } elseif (\array_key_exists('footer_icon', $data)) {
            $object->footerIcon = null;
            unset($data['footer_icon']);
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->id = $data['id'];
            unset($data['id']);
        } elseif (\array_key_exists('id', $data)) {
            $object->id = null;
            unset($data['id']);
        }
        if (\array_key_exists('image_bytes', $data) && null !== $data['image_bytes']) {
            $object->imageBytes = $data['image_bytes'];
            unset($data['image_bytes']);
        } elseif (\array_key_exists('image_bytes', $data)) {
            $object->imageBytes = null;
            unset($data['image_bytes']);
        }
        if (\array_key_exists('image_height', $data) && null !== $data['image_height']) {
            $object->imageHeight = $data['image_height'];
            unset($data['image_height']);
        } elseif (\array_key_exists('image_height', $data)) {
            $object->imageHeight = null;
            unset($data['image_height']);
        }
        if (\array_key_exists('image_url', $data) && null !== $data['image_url']) {
            $object->imageUrl = $data['image_url'];
            unset($data['image_url']);
        } elseif (\array_key_exists('image_url', $data)) {
            $object->imageUrl = null;
            unset($data['image_url']);
        }
        if (\array_key_exists('image_width', $data) && null !== $data['image_width']) {
            $object->imageWidth = $data['image_width'];
            unset($data['image_width']);
        } elseif (\array_key_exists('image_width', $data)) {
            $object->imageWidth = null;
            unset($data['image_width']);
        }
        if (\array_key_exists('pretext', $data) && null !== $data['pretext']) {
            $object->pretext = $data['pretext'];
            unset($data['pretext']);
        } elseif (\array_key_exists('pretext', $data)) {
            $object->pretext = null;
            unset($data['pretext']);
        }
        if (\array_key_exists('text', $data) && null !== $data['text']) {
            $object->text = $data['text'];
            unset($data['text']);
        } elseif (\array_key_exists('text', $data)) {
            $object->text = null;
            unset($data['text']);
        }
        if (\array_key_exists('thumb_url', $data) && null !== $data['thumb_url']) {
            $object->thumbUrl = $data['thumb_url'];
            unset($data['thumb_url']);
        } elseif (\array_key_exists('thumb_url', $data)) {
            $object->thumbUrl = null;
            unset($data['thumb_url']);
        }
        if (\array_key_exists('title', $data) && null !== $data['title']) {
            $object->title = $data['title'];
            unset($data['title']);
        } elseif (\array_key_exists('title', $data)) {
            $object->title = null;
            unset($data['title']);
        }
        if (\array_key_exists('title_link', $data) && null !== $data['title_link']) {
            $object->titleLink = $data['title_link'];
            unset($data['title_link']);
        } elseif (\array_key_exists('title_link', $data)) {
            $object->titleLink = null;
            unset($data['title_link']);
        }
        if (\array_key_exists('ts', $data) && null !== $data['ts']) {
            $value_2 = $data['ts'];
            if (\is_float($data['ts'])) {
                $value_2 = $data['ts'];
            } elseif (\is_string($data['ts'])) {
                $value_2 = $data['ts'];
            }
            $object->ts = $value_2;
            unset($data['ts']);
        } elseif (\array_key_exists('ts', $data)) {
            $object->ts = null;
            unset($data['ts']);
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
        if (\array_key_exists('actions', get_object_vars($data)) && null !== ($data->actions ?? null)) {
            $values = [];
            foreach ($data->actions as $value) {
                $normalized = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = is_iterable($normalized) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['actions'] = $values;
        }
        if (\array_key_exists('authorIcon', get_object_vars($data)) && null !== ($data->authorIcon ?? null)) {
            $dataArray['author_icon'] = $data->authorIcon;
        }
        if (\array_key_exists('authorLink', get_object_vars($data)) && null !== ($data->authorLink ?? null)) {
            $dataArray['author_link'] = $data->authorLink;
        }
        if (\array_key_exists('authorName', get_object_vars($data)) && null !== ($data->authorName ?? null)) {
            $dataArray['author_name'] = $data->authorName;
        }
        if (\array_key_exists('callbackId', get_object_vars($data)) && null !== ($data->callbackId ?? null)) {
            $dataArray['callback_id'] = $data->callbackId;
        }
        if (\array_key_exists('color', get_object_vars($data)) && null !== ($data->color ?? null)) {
            $dataArray['color'] = $data->color;
        }
        if (\array_key_exists('fallback', get_object_vars($data)) && null !== ($data->fallback ?? null)) {
            $dataArray['fallback'] = $data->fallback;
        }
        if (\array_key_exists('fields', get_object_vars($data)) && null !== ($data->fields ?? null)) {
            $values_1 = [];
            foreach ($data->fields as $value_1) {
                $normalized_1 = null === $value_1 ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = is_iterable($normalized_1) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['fields'] = $values_1;
        }
        if (\array_key_exists('footer', get_object_vars($data)) && null !== ($data->footer ?? null)) {
            $dataArray['footer'] = $data->footer;
        }
        if (\array_key_exists('footerIcon', get_object_vars($data)) && null !== ($data->footerIcon ?? null)) {
            $dataArray['footer_icon'] = $data->footerIcon;
        }
        $dataArray['id'] = $data->id;
        if (\array_key_exists('imageBytes', get_object_vars($data)) && null !== ($data->imageBytes ?? null)) {
            $dataArray['image_bytes'] = $data->imageBytes;
        }
        if (\array_key_exists('imageHeight', get_object_vars($data)) && null !== ($data->imageHeight ?? null)) {
            $dataArray['image_height'] = $data->imageHeight;
        }
        if (\array_key_exists('imageUrl', get_object_vars($data)) && null !== ($data->imageUrl ?? null)) {
            $dataArray['image_url'] = $data->imageUrl;
        }
        if (\array_key_exists('imageWidth', get_object_vars($data)) && null !== ($data->imageWidth ?? null)) {
            $dataArray['image_width'] = $data->imageWidth;
        }
        if (\array_key_exists('pretext', get_object_vars($data)) && null !== ($data->pretext ?? null)) {
            $dataArray['pretext'] = $data->pretext;
        }
        if (\array_key_exists('text', get_object_vars($data)) && null !== ($data->text ?? null)) {
            $dataArray['text'] = $data->text;
        }
        if (\array_key_exists('thumbUrl', get_object_vars($data)) && null !== ($data->thumbUrl ?? null)) {
            $dataArray['thumb_url'] = $data->thumbUrl;
        }
        if (\array_key_exists('title', get_object_vars($data)) && null !== ($data->title ?? null)) {
            $dataArray['title'] = $data->title;
        }
        if (\array_key_exists('titleLink', get_object_vars($data)) && null !== ($data->titleLink ?? null)) {
            $dataArray['title_link'] = $data->titleLink;
        }
        if (\array_key_exists('ts', get_object_vars($data)) && null !== ($data->ts ?? null)) {
            $value_2 = $data->ts;
            if (\is_float($data->ts)) {
                $value_2 = $data->ts;
            } elseif (\is_string($data->ts)) {
                $value_2 = $data->ts;
            }
            $dataArray['ts'] = $value_2;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_3) {
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
