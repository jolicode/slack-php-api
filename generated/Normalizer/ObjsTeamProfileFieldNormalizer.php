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

class ObjsTeamProfileFieldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ObjsTeamProfileField' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsTeamProfileField' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!\is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsTeamProfileField();
        if (property_exists($data, 'field_name') && null !== $data->{'field_name'}) {
            $object->setFieldName($data->{'field_name'});
        } elseif (property_exists($data, 'field_name') && null === $data->{'field_name'}) {
            $object->setFieldName(null);
        }
        if (property_exists($data, 'hint') && null !== $data->{'hint'}) {
            $object->setHint($data->{'hint'});
        } elseif (property_exists($data, 'hint') && null === $data->{'hint'}) {
            $object->setHint(null);
        }
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        } elseif (property_exists($data, 'id') && null === $data->{'id'}) {
            $object->setId(null);
        }
        if (property_exists($data, 'is_hidden') && null !== $data->{'is_hidden'}) {
            $object->setIsHidden($data->{'is_hidden'});
        } elseif (property_exists($data, 'is_hidden') && null === $data->{'is_hidden'}) {
            $object->setIsHidden(null);
        }
        if (property_exists($data, 'label') && null !== $data->{'label'}) {
            $object->setLabel($data->{'label'});
        } elseif (property_exists($data, 'label') && null === $data->{'label'}) {
            $object->setLabel(null);
        }
        if (property_exists($data, 'options') && null !== $data->{'options'}) {
            $values = [];
            foreach ($data->{'options'} as $value) {
                $values[] = $value;
            }
            $object->setOptions($values);
        } elseif (property_exists($data, 'options') && null === $data->{'options'}) {
            $object->setOptions(null);
        }
        if (property_exists($data, 'ordering') && null !== $data->{'ordering'}) {
            $object->setOrdering($data->{'ordering'});
        } elseif (property_exists($data, 'ordering') && null === $data->{'ordering'}) {
            $object->setOrdering(null);
        }
        if (property_exists($data, 'possible_values') && null !== $data->{'possible_values'}) {
            $values_1 = [];
            foreach ($data->{'possible_values'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setPossibleValues($values_1);
        } elseif (property_exists($data, 'possible_values') && null === $data->{'possible_values'}) {
            $object->setPossibleValues(null);
        }
        if (property_exists($data, 'type') && null !== $data->{'type'}) {
            $object->setType($data->{'type'});
        } elseif (property_exists($data, 'type') && null === $data->{'type'}) {
            $object->setType(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getFieldName()) {
            $data->{'field_name'} = $object->getFieldName();
        } else {
            $data->{'field_name'} = null;
        }
        if (null !== $object->getHint()) {
            $data->{'hint'} = $object->getHint();
        } else {
            $data->{'hint'} = null;
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        } else {
            $data->{'id'} = null;
        }
        if (null !== $object->getIsHidden()) {
            $data->{'is_hidden'} = $object->getIsHidden();
        } else {
            $data->{'is_hidden'} = null;
        }
        if (null !== $object->getLabel()) {
            $data->{'label'} = $object->getLabel();
        } else {
            $data->{'label'} = null;
        }
        if (null !== $object->getOptions()) {
            $values = [];
            foreach ($object->getOptions() as $value) {
                $values[] = $value;
            }
            $data->{'options'} = $values;
        } else {
            $data->{'options'} = null;
        }
        if (null !== $object->getOrdering()) {
            $data->{'ordering'} = $object->getOrdering();
        } else {
            $data->{'ordering'} = null;
        }
        if (null !== $object->getPossibleValues()) {
            $values_1 = [];
            foreach ($object->getPossibleValues() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'possible_values'} = $values_1;
        } else {
            $data->{'possible_values'} = null;
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        } else {
            $data->{'type'} = null;
        }

        return $data;
    }
}
