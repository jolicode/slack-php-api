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

class ObjsConversationItem2Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ObjsConversationItem2' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsConversationItem2' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\ObjsConversationItem2();
        if (property_exists($data, 'created') && null !== $data->{'created'}) {
            $object->setCreated($data->{'created'});
        } elseif (property_exists($data, 'created') && null === $data->{'created'}) {
            $object->setCreated(null);
        }
        if (property_exists($data, 'has_pins') && null !== $data->{'has_pins'}) {
            $object->setHasPins($data->{'has_pins'});
        } elseif (property_exists($data, 'has_pins') && null === $data->{'has_pins'}) {
            $object->setHasPins(null);
        }
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        } elseif (property_exists($data, 'id') && null === $data->{'id'}) {
            $object->setId(null);
        }
        if (property_exists($data, 'is_archived') && null !== $data->{'is_archived'}) {
            $object->setIsArchived($data->{'is_archived'});
        } elseif (property_exists($data, 'is_archived') && null === $data->{'is_archived'}) {
            $object->setIsArchived(null);
        }
        if (property_exists($data, 'is_ext_shared') && null !== $data->{'is_ext_shared'}) {
            $object->setIsExtShared($data->{'is_ext_shared'});
        } elseif (property_exists($data, 'is_ext_shared') && null === $data->{'is_ext_shared'}) {
            $object->setIsExtShared(null);
        }
        if (property_exists($data, 'is_frozen') && null !== $data->{'is_frozen'}) {
            $object->setIsFrozen($data->{'is_frozen'});
        } elseif (property_exists($data, 'is_frozen') && null === $data->{'is_frozen'}) {
            $object->setIsFrozen(null);
        }
        if (property_exists($data, 'is_im') && null !== $data->{'is_im'}) {
            $object->setIsIm($data->{'is_im'});
        } elseif (property_exists($data, 'is_im') && null === $data->{'is_im'}) {
            $object->setIsIm(null);
        }
        if (property_exists($data, 'is_open') && null !== $data->{'is_open'}) {
            $object->setIsOpen($data->{'is_open'});
        } elseif (property_exists($data, 'is_open') && null === $data->{'is_open'}) {
            $object->setIsOpen(null);
        }
        if (property_exists($data, 'is_org_shared') && null !== $data->{'is_org_shared'}) {
            $object->setIsOrgShared($data->{'is_org_shared'});
        } elseif (property_exists($data, 'is_org_shared') && null === $data->{'is_org_shared'}) {
            $object->setIsOrgShared(null);
        }
        if (property_exists($data, 'is_shared') && null !== $data->{'is_shared'}) {
            $object->setIsShared($data->{'is_shared'});
        } elseif (property_exists($data, 'is_shared') && null === $data->{'is_shared'}) {
            $object->setIsShared(null);
        }
        if (property_exists($data, 'is_starred') && null !== $data->{'is_starred'}) {
            $object->setIsStarred($data->{'is_starred'});
        } elseif (property_exists($data, 'is_starred') && null === $data->{'is_starred'}) {
            $object->setIsStarred(null);
        }
        if (property_exists($data, 'is_user_deleted') && null !== $data->{'is_user_deleted'}) {
            $object->setIsUserDeleted($data->{'is_user_deleted'});
        } elseif (property_exists($data, 'is_user_deleted') && null === $data->{'is_user_deleted'}) {
            $object->setIsUserDeleted(null);
        }
        if (property_exists($data, 'last_read') && null !== $data->{'last_read'}) {
            $object->setLastRead($data->{'last_read'});
        } elseif (property_exists($data, 'last_read') && null === $data->{'last_read'}) {
            $object->setLastRead(null);
        }
        if (property_exists($data, 'latest') && null !== $data->{'latest'}) {
            $object->setLatest($data->{'latest'});
        } elseif (property_exists($data, 'latest') && null === $data->{'latest'}) {
            $object->setLatest(null);
        }
        if (property_exists($data, 'parent_conversation') && null !== $data->{'parent_conversation'}) {
            $object->setParentConversation($data->{'parent_conversation'});
        } elseif (property_exists($data, 'parent_conversation') && null === $data->{'parent_conversation'}) {
            $object->setParentConversation(null);
        }
        if (property_exists($data, 'pin_count') && null !== $data->{'pin_count'}) {
            $object->setPinCount($data->{'pin_count'});
        } elseif (property_exists($data, 'pin_count') && null === $data->{'pin_count'}) {
            $object->setPinCount(null);
        }
        if (property_exists($data, 'priority') && null !== $data->{'priority'}) {
            $object->setPriority($data->{'priority'});
        } elseif (property_exists($data, 'priority') && null === $data->{'priority'}) {
            $object->setPriority(null);
        }
        if (property_exists($data, 'shares') && null !== $data->{'shares'}) {
            $values = [];
            foreach ($data->{'shares'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\ObjsConversationItem2SharesItem', 'json', $context);
            }
            $object->setShares($values);
        } elseif (property_exists($data, 'shares') && null === $data->{'shares'}) {
            $object->setShares(null);
        }
        if (property_exists($data, 'unread_count') && null !== $data->{'unread_count'}) {
            $object->setUnreadCount($data->{'unread_count'});
        } elseif (property_exists($data, 'unread_count') && null === $data->{'unread_count'}) {
            $object->setUnreadCount(null);
        }
        if (property_exists($data, 'unread_count_display') && null !== $data->{'unread_count_display'}) {
            $object->setUnreadCountDisplay($data->{'unread_count_display'});
        } elseif (property_exists($data, 'unread_count_display') && null === $data->{'unread_count_display'}) {
            $object->setUnreadCountDisplay(null);
        }
        if (property_exists($data, 'user') && null !== $data->{'user'}) {
            $object->setUser($data->{'user'});
        } elseif (property_exists($data, 'user') && null === $data->{'user'}) {
            $object->setUser(null);
        }
        if (property_exists($data, 'version') && null !== $data->{'version'}) {
            $object->setVersion($data->{'version'});
        } elseif (property_exists($data, 'version') && null === $data->{'version'}) {
            $object->setVersion(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCreated()) {
            $data->{'created'} = $object->getCreated();
        } else {
            $data->{'created'} = null;
        }
        if (null !== $object->getHasPins()) {
            $data->{'has_pins'} = $object->getHasPins();
        } else {
            $data->{'has_pins'} = null;
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        } else {
            $data->{'id'} = null;
        }
        if (null !== $object->getIsArchived()) {
            $data->{'is_archived'} = $object->getIsArchived();
        } else {
            $data->{'is_archived'} = null;
        }
        if (null !== $object->getIsExtShared()) {
            $data->{'is_ext_shared'} = $object->getIsExtShared();
        } else {
            $data->{'is_ext_shared'} = null;
        }
        if (null !== $object->getIsFrozen()) {
            $data->{'is_frozen'} = $object->getIsFrozen();
        } else {
            $data->{'is_frozen'} = null;
        }
        if (null !== $object->getIsIm()) {
            $data->{'is_im'} = $object->getIsIm();
        } else {
            $data->{'is_im'} = null;
        }
        if (null !== $object->getIsOpen()) {
            $data->{'is_open'} = $object->getIsOpen();
        } else {
            $data->{'is_open'} = null;
        }
        if (null !== $object->getIsOrgShared()) {
            $data->{'is_org_shared'} = $object->getIsOrgShared();
        } else {
            $data->{'is_org_shared'} = null;
        }
        if (null !== $object->getIsShared()) {
            $data->{'is_shared'} = $object->getIsShared();
        } else {
            $data->{'is_shared'} = null;
        }
        if (null !== $object->getIsStarred()) {
            $data->{'is_starred'} = $object->getIsStarred();
        } else {
            $data->{'is_starred'} = null;
        }
        if (null !== $object->getIsUserDeleted()) {
            $data->{'is_user_deleted'} = $object->getIsUserDeleted();
        } else {
            $data->{'is_user_deleted'} = null;
        }
        if (null !== $object->getLastRead()) {
            $data->{'last_read'} = $object->getLastRead();
        } else {
            $data->{'last_read'} = null;
        }
        if (null !== $object->getLatest()) {
            $data->{'latest'} = $object->getLatest();
        } else {
            $data->{'latest'} = null;
        }
        if (null !== $object->getParentConversation()) {
            $data->{'parent_conversation'} = $object->getParentConversation();
        } else {
            $data->{'parent_conversation'} = null;
        }
        if (null !== $object->getPinCount()) {
            $data->{'pin_count'} = $object->getPinCount();
        } else {
            $data->{'pin_count'} = null;
        }
        if (null !== $object->getPriority()) {
            $data->{'priority'} = $object->getPriority();
        } else {
            $data->{'priority'} = null;
        }
        if (null !== $object->getShares()) {
            $values = [];
            foreach ($object->getShares() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'shares'} = $values;
        } else {
            $data->{'shares'} = null;
        }
        if (null !== $object->getUnreadCount()) {
            $data->{'unread_count'} = $object->getUnreadCount();
        } else {
            $data->{'unread_count'} = null;
        }
        if (null !== $object->getUnreadCountDisplay()) {
            $data->{'unread_count_display'} = $object->getUnreadCountDisplay();
        } else {
            $data->{'unread_count_display'} = null;
        }
        if (null !== $object->getUser()) {
            $data->{'user'} = $object->getUser();
        } else {
            $data->{'user'} = null;
        }
        if (null !== $object->getVersion()) {
            $data->{'version'} = $object->getVersion();
        } else {
            $data->{'version'} = null;
        }

        return $data;
    }
}
