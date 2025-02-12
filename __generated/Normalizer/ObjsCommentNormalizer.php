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

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['comment'] = $object->getComment();
            $data['created'] = $object->getCreated();
            $data['id'] = $object->getId();
            $data['is_intro'] = $object->getIsIntro();
            if ($object->isInitialized('isStarred') && null !== $object->getIsStarred()) {
                $data['is_starred'] = $object->getIsStarred();
            }
            if ($object->isInitialized('numStars') && null !== $object->getNumStars()) {
                $data['num_stars'] = $object->getNumStars();
            }
            if ($object->isInitialized('pinnedInfo') && null !== $object->getPinnedInfo()) {
                $data['pinned_info'] = $object->getPinnedInfo();
            }
            if ($object->isInitialized('pinnedTo') && null !== $object->getPinnedTo()) {
                $values = [];
                foreach ($object->getPinnedTo() as $value) {
                    $values[] = $value;
                }
                $data['pinned_to'] = $values;
            }
            if ($object->isInitialized('reactions') && null !== $object->getReactions()) {
                $values_1 = [];
                foreach ($object->getReactions() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['reactions'] = $values_1;
            }
            $value_2 = $object->getTimestamp();
            if (\is_int($object->getTimestamp())) {
                $value_2 = $object->getTimestamp();
            } elseif (\is_string($object->getTimestamp())) {
                $value_2 = $object->getTimestamp();
            }
            $data['timestamp'] = $value_2;
            $data['user'] = $object->getUser();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\JoliCode\Slack\Api\Model\ObjsComment::class => false];
        }
    }
} else {
    class ObjsCommentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \JoliCode\Slack\Api\Model\ObjsComment::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && \JoliCode\Slack\Api\Model\ObjsComment::class === \get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ObjsComment();
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

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['comment'] = $object->getComment();
            $data['created'] = $object->getCreated();
            $data['id'] = $object->getId();
            $data['is_intro'] = $object->getIsIntro();
            if ($object->isInitialized('isStarred') && null !== $object->getIsStarred()) {
                $data['is_starred'] = $object->getIsStarred();
            }
            if ($object->isInitialized('numStars') && null !== $object->getNumStars()) {
                $data['num_stars'] = $object->getNumStars();
            }
            if ($object->isInitialized('pinnedInfo') && null !== $object->getPinnedInfo()) {
                $data['pinned_info'] = $object->getPinnedInfo();
            }
            if ($object->isInitialized('pinnedTo') && null !== $object->getPinnedTo()) {
                $values = [];
                foreach ($object->getPinnedTo() as $value) {
                    $values[] = $value;
                }
                $data['pinned_to'] = $values;
            }
            if ($object->isInitialized('reactions') && null !== $object->getReactions()) {
                $values_1 = [];
                foreach ($object->getReactions() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['reactions'] = $values_1;
            }
            $value_2 = $object->getTimestamp();
            if (\is_int($object->getTimestamp())) {
                $value_2 = $object->getTimestamp();
            } elseif (\is_string($object->getTimestamp())) {
                $value_2 = $object->getTimestamp();
            }
            $data['timestamp'] = $value_2;
            $data['user'] = $object->getUser();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\JoliCode\Slack\Api\Model\ObjsComment::class => false];
        }
    }
}
