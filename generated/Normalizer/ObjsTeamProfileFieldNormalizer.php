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
    class ObjsTeamProfileFieldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\ObjsTeamProfileField' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsTeamProfileField' === \get_class($data);
        }

        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ObjsTeamProfileField();
            if (\array_key_exists('ordering', $data) && \is_int($data['ordering'])) {
                $data['ordering'] = (float) $data['ordering'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('field_name', $data) && null !== $data['field_name']) {
                $value = $data['field_name'];
                if (\is_string($data['field_name'])) {
                    $value = $data['field_name'];
                }
                $object->setFieldName($value);
            } elseif (\array_key_exists('field_name', $data) && null === $data['field_name']) {
                $object->setFieldName(null);
            }
            if (\array_key_exists('hint', $data) && null !== $data['hint']) {
                $object->setHint($data['hint']);
            } elseif (\array_key_exists('hint', $data) && null === $data['hint']) {
                $object->setHint(null);
            }
            if (\array_key_exists('id', $data) && null !== $data['id']) {
                $object->setId($data['id']);
            } elseif (\array_key_exists('id', $data) && null === $data['id']) {
                $object->setId(null);
            }
            if (\array_key_exists('is_hidden', $data) && null !== $data['is_hidden']) {
                $object->setIsHidden($data['is_hidden']);
            } elseif (\array_key_exists('is_hidden', $data) && null === $data['is_hidden']) {
                $object->setIsHidden(null);
            }
            if (\array_key_exists('label', $data) && null !== $data['label']) {
                $object->setLabel($data['label']);
            } elseif (\array_key_exists('label', $data) && null === $data['label']) {
                $object->setLabel(null);
            }
            if (\array_key_exists('options', $data) && null !== $data['options']) {
                $object->setOptions($this->denormalizer->denormalize($data['options'], 'JoliCode\\Slack\\Api\\Model\\ObjsTeamProfileFieldOption', 'json', $context));
            } elseif (\array_key_exists('options', $data) && null === $data['options']) {
                $object->setOptions(null);
            }
            if (\array_key_exists('ordering', $data) && null !== $data['ordering']) {
                $object->setOrdering($data['ordering']);
            } elseif (\array_key_exists('ordering', $data) && null === $data['ordering']) {
                $object->setOrdering(null);
            }
            if (\array_key_exists('possible_values', $data) && null !== $data['possible_values']) {
                $value_1 = $data['possible_values'];
                if (\is_array($data['possible_values']) && $this->isOnlyNumericKeys($data['possible_values'])) {
                    $values = [];
                    foreach ($data['possible_values'] as $value_2) {
                        $values[] = $value_2;
                    }
                    $value_1 = $values;
                }
                $object->setPossibleValues($value_1);
            } elseif (\array_key_exists('possible_values', $data) && null === $data['possible_values']) {
                $object->setPossibleValues(null);
            }
            if (\array_key_exists('type', $data) && null !== $data['type']) {
                $object->setType($data['type']);
            } elseif (\array_key_exists('type', $data) && null === $data['type']) {
                $object->setType(null);
            }

            return $object;
        }

        public function normalize(mixed $object, string $format = null, array $context = []): null|array|\ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('fieldName') && null !== $object->getFieldName()) {
                $value = $object->getFieldName();
                if (\is_string($object->getFieldName())) {
                    $value = $object->getFieldName();
                }
                $data['field_name'] = $value;
            }
            $data['hint'] = $object->getHint();
            $data['id'] = $object->getId();
            if ($object->isInitialized('isHidden') && null !== $object->getIsHidden()) {
                $data['is_hidden'] = $object->getIsHidden();
            }
            $data['label'] = $object->getLabel();
            if ($object->isInitialized('options') && null !== $object->getOptions()) {
                $data['options'] = $this->normalizer->normalize($object->getOptions(), 'json', $context);
            }
            $data['ordering'] = $object->getOrdering();
            if ($object->isInitialized('possibleValues') && null !== $object->getPossibleValues()) {
                $value_1 = $object->getPossibleValues();
                if (\is_array($object->getPossibleValues())) {
                    $values = [];
                    foreach ($object->getPossibleValues() as $value_2) {
                        $values[] = $value_2;
                    }
                    $value_1 = $values;
                }
                $data['possible_values'] = $value_1;
            }
            $data['type'] = $object->getType();

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\ObjsTeamProfileField' => false];
        }
    }
} else {
    class ObjsTeamProfileFieldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\ObjsTeamProfileField' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsTeamProfileField' === \get_class($data);
        }

        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ObjsTeamProfileField();
            if (\array_key_exists('ordering', $data) && \is_int($data['ordering'])) {
                $data['ordering'] = (float) $data['ordering'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('field_name', $data) && null !== $data['field_name']) {
                $value = $data['field_name'];
                if (\is_string($data['field_name'])) {
                    $value = $data['field_name'];
                }
                $object->setFieldName($value);
            } elseif (\array_key_exists('field_name', $data) && null === $data['field_name']) {
                $object->setFieldName(null);
            }
            if (\array_key_exists('hint', $data) && null !== $data['hint']) {
                $object->setHint($data['hint']);
            } elseif (\array_key_exists('hint', $data) && null === $data['hint']) {
                $object->setHint(null);
            }
            if (\array_key_exists('id', $data) && null !== $data['id']) {
                $object->setId($data['id']);
            } elseif (\array_key_exists('id', $data) && null === $data['id']) {
                $object->setId(null);
            }
            if (\array_key_exists('is_hidden', $data) && null !== $data['is_hidden']) {
                $object->setIsHidden($data['is_hidden']);
            } elseif (\array_key_exists('is_hidden', $data) && null === $data['is_hidden']) {
                $object->setIsHidden(null);
            }
            if (\array_key_exists('label', $data) && null !== $data['label']) {
                $object->setLabel($data['label']);
            } elseif (\array_key_exists('label', $data) && null === $data['label']) {
                $object->setLabel(null);
            }
            if (\array_key_exists('options', $data) && null !== $data['options']) {
                $object->setOptions($this->denormalizer->denormalize($data['options'], 'JoliCode\\Slack\\Api\\Model\\ObjsTeamProfileFieldOption', 'json', $context));
            } elseif (\array_key_exists('options', $data) && null === $data['options']) {
                $object->setOptions(null);
            }
            if (\array_key_exists('ordering', $data) && null !== $data['ordering']) {
                $object->setOrdering($data['ordering']);
            } elseif (\array_key_exists('ordering', $data) && null === $data['ordering']) {
                $object->setOrdering(null);
            }
            if (\array_key_exists('possible_values', $data) && null !== $data['possible_values']) {
                $value_1 = $data['possible_values'];
                if (\is_array($data['possible_values']) && $this->isOnlyNumericKeys($data['possible_values'])) {
                    $values = [];
                    foreach ($data['possible_values'] as $value_2) {
                        $values[] = $value_2;
                    }
                    $value_1 = $values;
                }
                $object->setPossibleValues($value_1);
            } elseif (\array_key_exists('possible_values', $data) && null === $data['possible_values']) {
                $object->setPossibleValues(null);
            }
            if (\array_key_exists('type', $data) && null !== $data['type']) {
                $object->setType($data['type']);
            } elseif (\array_key_exists('type', $data) && null === $data['type']) {
                $object->setType(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('fieldName') && null !== $object->getFieldName()) {
                $value = $object->getFieldName();
                if (\is_string($object->getFieldName())) {
                    $value = $object->getFieldName();
                }
                $data['field_name'] = $value;
            }
            $data['hint'] = $object->getHint();
            $data['id'] = $object->getId();
            if ($object->isInitialized('isHidden') && null !== $object->getIsHidden()) {
                $data['is_hidden'] = $object->getIsHidden();
            }
            $data['label'] = $object->getLabel();
            if ($object->isInitialized('options') && null !== $object->getOptions()) {
                $data['options'] = $this->normalizer->normalize($object->getOptions(), 'json', $context);
            }
            $data['ordering'] = $object->getOrdering();
            if ($object->isInitialized('possibleValues') && null !== $object->getPossibleValues()) {
                $value_1 = $object->getPossibleValues();
                if (\is_array($object->getPossibleValues())) {
                    $values = [];
                    foreach ($object->getPossibleValues() as $value_2) {
                        $values[] = $value_2;
                    }
                    $value_1 = $values;
                }
                $data['possible_values'] = $value_1;
            }
            $data['type'] = $object->getType();

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\ObjsTeamProfileField' => false];
        }
    }
}
