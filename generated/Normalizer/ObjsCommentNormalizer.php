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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsComment();
        if (\array_key_exists('is_intro', $data) && \is_int($data['is_intro'])) {
            $data['is_intro'] = (bool) $data['is_intro'];
        }
        if (\array_key_exists('is_starred', $data) && \is_int($data['is_starred'])) {
            $data['is_starred'] = (bool) $data['is_starred'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('comment', $data) && null !== $data['comment']) {
            $object->setComment($data['comment']);
        } elseif (\array_key_exists('comment', $data) && null === $data['comment']) {
            $object->setComment(null);
        }
        if (\array_key_exists('created', $data) && null !== $data['created']) {
            $object->setCreated($data['created']);
        } elseif (\array_key_exists('created', $data) && null === $data['created']) {
            $object->setCreated(null);
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('is_intro', $data) && null !== $data['is_intro']) {
            $object->setIsIntro($data['is_intro']);
        } elseif (\array_key_exists('is_intro', $data) && null === $data['is_intro']) {
            $object->setIsIntro(null);
        }
        if (\array_key_exists('is_starred', $data) && null !== $data['is_starred']) {
            $object->setIsStarred($data['is_starred']);
        } elseif (\array_key_exists('is_starred', $data) && null === $data['is_starred']) {
            $object->setIsStarred(null);
        }
        if (\array_key_exists('num_stars', $data) && null !== $data['num_stars']) {
            $object->setNumStars($data['num_stars']);
        } elseif (\array_key_exists('num_stars', $data) && null === $data['num_stars']) {
            $object->setNumStars(null);
        }
        if (\array_key_exists('pinned_info', $data) && null !== $data['pinned_info']) {
            $object->setPinnedInfo($data['pinned_info']);
        } elseif (\array_key_exists('pinned_info', $data) && null === $data['pinned_info']) {
            $object->setPinnedInfo(null);
        }
        if (\array_key_exists('pinned_to', $data) && null !== $data['pinned_to']) {
            $values = [];
            foreach ($data['pinned_to'] as $value) {
                $values[] = $value;
            }
            $object->setPinnedTo($values);
        } elseif (\array_key_exists('pinned_to', $data) && null === $data['pinned_to']) {
            $object->setPinnedTo(null);
        }
        if (\array_key_exists('reactions', $data) && null !== $data['reactions']) {
            $values_1 = [];
            foreach ($data['reactions'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \JoliCode\Slack\Api\Model\ObjsReaction::class, 'json', $context);
            }
            $object->setReactions($values_1);
        } elseif (\array_key_exists('reactions', $data) && null === $data['reactions']) {
            $object->setReactions(null);
        }
        if (\array_key_exists('timestamp', $data) && null !== $data['timestamp']) {
            $value_2 = $data['timestamp'];
            if (\is_int($data['timestamp'])) {
                $value_2 = $data['timestamp'];
            } elseif (\is_string($data['timestamp'])) {
                $value_2 = $data['timestamp'];
            }
            $object->setTimestamp($value_2);
        } elseif (\array_key_exists('timestamp', $data) && null === $data['timestamp']) {
            $object->setTimestamp(null);
        }
        if (\array_key_exists('user', $data) && null !== $data['user']) {
            $object->setUser($data['user']);
        } elseif (\array_key_exists('user', $data) && null === $data['user']) {
            $object->setUser(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['comment'] = $data->getComment();
        $dataArray['created'] = $data->getCreated();
        $dataArray['id'] = $data->getId();
        $dataArray['is_intro'] = $data->getIsIntro();
        if ($data->isInitialized('isStarred') && null !== $data->getIsStarred()) {
            $dataArray['is_starred'] = $data->getIsStarred();
        }
        if ($data->isInitialized('numStars') && null !== $data->getNumStars()) {
            $dataArray['num_stars'] = $data->getNumStars();
        }
        if ($data->isInitialized('pinnedInfo') && null !== $data->getPinnedInfo()) {
            $dataArray['pinned_info'] = $data->getPinnedInfo();
        }
        if ($data->isInitialized('pinnedTo') && null !== $data->getPinnedTo()) {
            $values = [];
            foreach ($data->getPinnedTo() as $value) {
                $values[] = $value;
            }
            $dataArray['pinned_to'] = $values;
        }
        if ($data->isInitialized('reactions') && null !== $data->getReactions()) {
            $values_1 = [];
            foreach ($data->getReactions() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['reactions'] = $values_1;
        }
        $value_2 = $data->getTimestamp();
        if (\is_int($data->getTimestamp())) {
            $value_2 = $data->getTimestamp();
        } elseif (\is_string($data->getTimestamp())) {
            $value_2 = $data->getTimestamp();
        }
        $dataArray['timestamp'] = $value_2;
        $dataArray['user'] = $data->getUser();

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\ObjsComment::class => false];
    }
}
