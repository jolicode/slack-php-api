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

class ObjsCommentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\ObjsComment::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\ObjsComment::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \JoliCode\Slack\Api\Model\ObjsComment();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('is_intro', $data) && \is_int($data['is_intro'])) {
            $data['is_intro'] = (bool) $data['is_intro'];
        }
        if (\array_key_exists('is_starred', $data) && \is_int($data['is_starred'])) {
            $data['is_starred'] = (bool) $data['is_starred'];
        }
        if (\array_key_exists('comment', $data) && null !== $data['comment']) {
            $object->comment = $data['comment'];
        } elseif (\array_key_exists('comment', $data)) {
            $object->comment = null;
        }
        if (\array_key_exists('created', $data) && null !== $data['created']) {
            $object->created = $data['created'];
        } elseif (\array_key_exists('created', $data)) {
            $object->created = null;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->id = $data['id'];
        } elseif (\array_key_exists('id', $data)) {
            $object->id = null;
        }
        if (\array_key_exists('is_intro', $data) && null !== $data['is_intro']) {
            $object->isIntro = $data['is_intro'];
        } elseif (\array_key_exists('is_intro', $data)) {
            $object->isIntro = null;
        }
        if (\array_key_exists('is_starred', $data) && null !== $data['is_starred']) {
            $object->isStarred = $data['is_starred'];
        } elseif (\array_key_exists('is_starred', $data)) {
            $object->isStarred = null;
        }
        if (\array_key_exists('num_stars', $data) && null !== $data['num_stars']) {
            $object->numStars = $data['num_stars'];
        } elseif (\array_key_exists('num_stars', $data)) {
            $object->numStars = null;
        }
        if (\array_key_exists('pinned_info', $data) && null !== $data['pinned_info']) {
            $object->pinnedInfo = $data['pinned_info'];
        } elseif (\array_key_exists('pinned_info', $data)) {
            $object->pinnedInfo = null;
        }
        if (\array_key_exists('pinned_to', $data) && null !== $data['pinned_to']) {
            $values = [];
            foreach ($data['pinned_to'] as $value) {
                $values[] = $value;
            }
            $object->pinnedTo = $values;
        } elseif (\array_key_exists('pinned_to', $data)) {
            $object->pinnedTo = null;
        }
        if (\array_key_exists('reactions', $data) && null !== $data['reactions']) {
            $values_1 = [];
            foreach ($data['reactions'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \JoliCode\Slack\Api\Model\ObjsReaction::class, 'json', $context);
            }
            $object->reactions = $values_1;
        } elseif (\array_key_exists('reactions', $data)) {
            $object->reactions = null;
        }
        if (\array_key_exists('timestamp', $data) && null !== $data['timestamp']) {
            $value_2 = $data['timestamp'];
            if (\is_int($data['timestamp'])) {
                $value_2 = $data['timestamp'];
            } elseif (\is_string($data['timestamp'])) {
                $value_2 = $data['timestamp'];
            }
            $object->timestamp = $value_2;
        } elseif (\array_key_exists('timestamp', $data)) {
            $object->timestamp = null;
        }
        if (\array_key_exists('user', $data) && null !== $data['user']) {
            $object->user = $data['user'];
        } elseif (\array_key_exists('user', $data)) {
            $object->user = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['comment'] = $data->comment;
        $dataArray['created'] = $data->created;
        $dataArray['id'] = $data->id;
        $dataArray['is_intro'] = $data->isIntro;
        if (\array_key_exists('isStarred', get_object_vars($data)) && null !== ($data->isStarred ?? null)) {
            $dataArray['is_starred'] = $data->isStarred;
        }
        if (\array_key_exists('numStars', get_object_vars($data)) && null !== ($data->numStars ?? null)) {
            $dataArray['num_stars'] = $data->numStars;
        }
        if (\array_key_exists('pinnedInfo', get_object_vars($data)) && null !== ($data->pinnedInfo ?? null)) {
            $dataArray['pinned_info'] = $data->pinnedInfo;
        }
        if (\array_key_exists('pinnedTo', get_object_vars($data)) && null !== ($data->pinnedTo ?? null)) {
            $values = [];
            foreach ($data->pinnedTo as $value) {
                $values[] = $value;
            }
            $dataArray['pinned_to'] = $values;
        }
        if (\array_key_exists('reactions', get_object_vars($data)) && null !== ($data->reactions ?? null)) {
            $values_1 = [];
            foreach ($data->reactions as $value_1) {
                $normalized = null === $value_1 ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = is_iterable($normalized) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['reactions'] = $values_1;
        }
        $value_2 = $data->timestamp;
        if (\is_int($data->timestamp)) {
            $value_2 = $data->timestamp;
        } elseif (\is_string($data->timestamp)) {
            $value_2 = $data->timestamp;
        }
        $dataArray['timestamp'] = $value_2;
        $dataArray['user'] = $data->user;

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\ObjsComment::class => false];
    }
}
