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

class ObjsMessageAttachmentsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ObjsMessageAttachmentsItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsMessageAttachmentsItem' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItem();
        $data = clone $data;
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
            unset($data->{'id'});
        } elseif (property_exists($data, 'id') && null === $data->{'id'}) {
            $object->setId(null);
        }
        if (property_exists($data, 'callback_id') && null !== $data->{'callback_id'}) {
            $object->setCallbackId($data->{'callback_id'});
            unset($data->{'callback_id'});
        } elseif (property_exists($data, 'callback_id') && null === $data->{'callback_id'}) {
            $object->setCallbackId(null);
        }
        if (property_exists($data, 'fallback') && null !== $data->{'fallback'}) {
            $object->setFallback($data->{'fallback'});
            unset($data->{'fallback'});
        } elseif (property_exists($data, 'fallback') && null === $data->{'fallback'}) {
            $object->setFallback(null);
        }
        if (property_exists($data, 'color') && null !== $data->{'color'}) {
            $object->setColor($data->{'color'});
            unset($data->{'color'});
        } elseif (property_exists($data, 'color') && null === $data->{'color'}) {
            $object->setColor(null);
        }
        if (property_exists($data, 'pretext') && null !== $data->{'pretext'}) {
            $object->setPretext($data->{'pretext'});
            unset($data->{'pretext'});
        } elseif (property_exists($data, 'pretext') && null === $data->{'pretext'}) {
            $object->setPretext(null);
        }
        if (property_exists($data, 'author_name') && null !== $data->{'author_name'}) {
            $object->setAuthorName($data->{'author_name'});
            unset($data->{'author_name'});
        } elseif (property_exists($data, 'author_name') && null === $data->{'author_name'}) {
            $object->setAuthorName(null);
        }
        if (property_exists($data, 'author_link') && null !== $data->{'author_link'}) {
            $object->setAuthorLink($data->{'author_link'});
            unset($data->{'author_link'});
        } elseif (property_exists($data, 'author_link') && null === $data->{'author_link'}) {
            $object->setAuthorLink(null);
        }
        if (property_exists($data, 'author_icon') && null !== $data->{'author_icon'}) {
            $object->setAuthorIcon($data->{'author_icon'});
            unset($data->{'author_icon'});
        } elseif (property_exists($data, 'author_icon') && null === $data->{'author_icon'}) {
            $object->setAuthorIcon(null);
        }
        if (property_exists($data, 'title') && null !== $data->{'title'}) {
            $object->setTitle($data->{'title'});
            unset($data->{'title'});
        } elseif (property_exists($data, 'title') && null === $data->{'title'}) {
            $object->setTitle(null);
        }
        if (property_exists($data, 'title_link') && null !== $data->{'title_link'}) {
            $object->setTitleLink($data->{'title_link'});
            unset($data->{'title_link'});
        } elseif (property_exists($data, 'title_link') && null === $data->{'title_link'}) {
            $object->setTitleLink(null);
        }
        if (property_exists($data, 'text') && null !== $data->{'text'}) {
            $object->setText($data->{'text'});
            unset($data->{'text'});
        } elseif (property_exists($data, 'text') && null === $data->{'text'}) {
            $object->setText(null);
        }
        if (property_exists($data, 'fields') && null !== $data->{'fields'}) {
            $values = [];
            foreach ($data->{'fields'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\ObjsMessageAttachmentsItemFieldsItem', 'json', $context);
            }
            $object->setFields($values);
            unset($data->{'fields'});
        } elseif (property_exists($data, 'fields') && null === $data->{'fields'}) {
            $object->setFields(null);
        }
        if (property_exists($data, 'actions') && null !== $data->{'actions'}) {
            $values_1 = [];
            foreach ($data->{'actions'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'JoliCode\\Slack\\Api\\Model\\ObjsMessageAttachmentsItemActionsItem', 'json', $context);
            }
            $object->setActions($values_1);
            unset($data->{'actions'});
        } elseif (property_exists($data, 'actions') && null === $data->{'actions'}) {
            $object->setActions(null);
        }
        if (property_exists($data, 'image_url') && null !== $data->{'image_url'}) {
            $object->setImageUrl($data->{'image_url'});
            unset($data->{'image_url'});
        } elseif (property_exists($data, 'image_url') && null === $data->{'image_url'}) {
            $object->setImageUrl(null);
        }
        if (property_exists($data, 'thumb_url') && null !== $data->{'thumb_url'}) {
            $object->setThumbUrl($data->{'thumb_url'});
            unset($data->{'thumb_url'});
        } elseif (property_exists($data, 'thumb_url') && null === $data->{'thumb_url'}) {
            $object->setThumbUrl(null);
        }
        if (property_exists($data, 'footer') && null !== $data->{'footer'}) {
            $object->setFooter($data->{'footer'});
            unset($data->{'footer'});
        } elseif (property_exists($data, 'footer') && null === $data->{'footer'}) {
            $object->setFooter(null);
        }
        if (property_exists($data, 'footer_icon') && null !== $data->{'footer_icon'}) {
            $object->setFooterIcon($data->{'footer_icon'});
            unset($data->{'footer_icon'});
        } elseif (property_exists($data, 'footer_icon') && null === $data->{'footer_icon'}) {
            $object->setFooterIcon(null);
        }
        if (property_exists($data, 'ts') && null !== $data->{'ts'}) {
            $value_2 = $data->{'ts'};
            if (\is_float($data->{'ts'})) {
                $value_2 = $data->{'ts'};
            } elseif (\is_string($data->{'ts'})) {
                $value_2 = $data->{'ts'};
            }
            $object->setTs($value_2);
            unset($data->{'ts'});
        } elseif (property_exists($data, 'ts') && null === $data->{'ts'}) {
            $object->setTs(null);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', $key)) {
                $object[$key] = $value_3;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        } else {
            $data->{'id'} = null;
        }
        if (null !== $object->getCallbackId()) {
            $data->{'callback_id'} = $object->getCallbackId();
        } else {
            $data->{'callback_id'} = null;
        }
        if (null !== $object->getFallback()) {
            $data->{'fallback'} = $object->getFallback();
        } else {
            $data->{'fallback'} = null;
        }
        if (null !== $object->getColor()) {
            $data->{'color'} = $object->getColor();
        } else {
            $data->{'color'} = null;
        }
        if (null !== $object->getPretext()) {
            $data->{'pretext'} = $object->getPretext();
        } else {
            $data->{'pretext'} = null;
        }
        if (null !== $object->getAuthorName()) {
            $data->{'author_name'} = $object->getAuthorName();
        } else {
            $data->{'author_name'} = null;
        }
        if (null !== $object->getAuthorLink()) {
            $data->{'author_link'} = $object->getAuthorLink();
        } else {
            $data->{'author_link'} = null;
        }
        if (null !== $object->getAuthorIcon()) {
            $data->{'author_icon'} = $object->getAuthorIcon();
        } else {
            $data->{'author_icon'} = null;
        }
        if (null !== $object->getTitle()) {
            $data->{'title'} = $object->getTitle();
        } else {
            $data->{'title'} = null;
        }
        if (null !== $object->getTitleLink()) {
            $data->{'title_link'} = $object->getTitleLink();
        } else {
            $data->{'title_link'} = null;
        }
        if (null !== $object->getText()) {
            $data->{'text'} = $object->getText();
        } else {
            $data->{'text'} = null;
        }
        if (null !== $object->getFields()) {
            $values = [];
            foreach ($object->getFields() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'fields'} = $values;
        } else {
            $data->{'fields'} = null;
        }
        if (null !== $object->getActions()) {
            $values_1 = [];
            foreach ($object->getActions() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'actions'} = $values_1;
        } else {
            $data->{'actions'} = null;
        }
        if (null !== $object->getImageUrl()) {
            $data->{'image_url'} = $object->getImageUrl();
        } else {
            $data->{'image_url'} = null;
        }
        if (null !== $object->getThumbUrl()) {
            $data->{'thumb_url'} = $object->getThumbUrl();
        } else {
            $data->{'thumb_url'} = null;
        }
        if (null !== $object->getFooter()) {
            $data->{'footer'} = $object->getFooter();
        } else {
            $data->{'footer'} = null;
        }
        if (null !== $object->getFooterIcon()) {
            $data->{'footer_icon'} = $object->getFooterIcon();
        } else {
            $data->{'footer_icon'} = null;
        }
        if (null !== $object->getTs()) {
            $value_2 = $object->getTs();
            if (\is_float($object->getTs())) {
                $value_2 = $object->getTs();
            } elseif (\is_string($object->getTs())) {
                $value_2 = $object->getTs();
            }
            $data->{'ts'} = $value_2;
        } else {
            $data->{'ts'} = null;
        }
        foreach ($object as $key => $value_3) {
            if (preg_match('/.*/', $key)) {
                $data->{$key} = $value_3;
            }
        }

        return $data;
    }
}
