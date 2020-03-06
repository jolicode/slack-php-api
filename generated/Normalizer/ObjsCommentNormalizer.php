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

class ObjsCommentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ObjsComment' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsComment' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsComment();
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
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['pinned_info'] as $key => $value) {
                $values[$key] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\DefsPinnedInfoItem', 'json', $context);
            }
            $object->setPinnedInfo($values);
        } elseif (\array_key_exists('pinned_info', $data) && null === $data['pinned_info']) {
            $object->setPinnedInfo(null);
        }
        if (\array_key_exists('pinned_to', $data) && null !== $data['pinned_to']) {
            $values_1 = [];
            foreach ($data['pinned_to'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setPinnedTo($values_1);
        } elseif (\array_key_exists('pinned_to', $data) && null === $data['pinned_to']) {
            $object->setPinnedTo(null);
        }
        if (\array_key_exists('reactions', $data) && null !== $data['reactions']) {
            $values_2 = [];
            foreach ($data['reactions'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'JoliCode\\Slack\\Api\\Model\\ObjsReaction', 'json', $context);
            }
            $object->setReactions($values_2);
        } elseif (\array_key_exists('reactions', $data) && null === $data['reactions']) {
            $object->setReactions(null);
        }
        if (\array_key_exists('timestamp', $data) && null !== $data['timestamp']) {
            $object->setTimestamp($data['timestamp']);
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

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getComment()) {
            $data['comment'] = $object->getComment();
        } else {
            $data['comment'] = null;
        }
        if (null !== $object->getCreated()) {
            $data['created'] = $object->getCreated();
        } else {
            $data['created'] = null;
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        } else {
            $data['id'] = null;
        }
        if (null !== $object->getIsIntro()) {
            $data['is_intro'] = $object->getIsIntro();
        } else {
            $data['is_intro'] = null;
        }
        if (null !== $object->getIsStarred()) {
            $data['is_starred'] = $object->getIsStarred();
        } else {
            $data['is_starred'] = null;
        }
        if (null !== $object->getNumStars()) {
            $data['num_stars'] = $object->getNumStars();
        } else {
            $data['num_stars'] = null;
        }
        if (null !== $object->getPinnedInfo()) {
            $values = [];
            foreach ($object->getPinnedInfo() as $key => $value) {
                $values[$key] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['pinned_info'] = $values;
        } else {
            $data['pinned_info'] = null;
        }
        if (null !== $object->getPinnedTo()) {
            $values_1 = [];
            foreach ($object->getPinnedTo() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['pinned_to'] = $values_1;
        } else {
            $data['pinned_to'] = null;
        }
        if (null !== $object->getReactions()) {
            $values_2 = [];
            foreach ($object->getReactions() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['reactions'] = $values_2;
        } else {
            $data['reactions'] = null;
        }
        if (null !== $object->getTimestamp()) {
            $data['timestamp'] = $object->getTimestamp();
        } else {
            $data['timestamp'] = null;
        }
        if (null !== $object->getUser()) {
            $data['user'] = $object->getUser();
        } else {
            $data['user'] = null;
        }

        return $data;
    }
}
