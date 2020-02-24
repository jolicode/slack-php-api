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

class ObjsTeamNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ObjsTeam' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsTeam' === \get_class($data);
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
        $object = new \JoliCode\Slack\Api\Model\ObjsTeam();
        if (property_exists($data, 'archived') && null !== $data->{'archived'}) {
            $object->setArchived($data->{'archived'});
        } elseif (property_exists($data, 'archived') && null === $data->{'archived'}) {
            $object->setArchived(null);
        }
        if (property_exists($data, 'avatar_base_url') && null !== $data->{'avatar_base_url'}) {
            $object->setAvatarBaseUrl($data->{'avatar_base_url'});
        } elseif (property_exists($data, 'avatar_base_url') && null === $data->{'avatar_base_url'}) {
            $object->setAvatarBaseUrl(null);
        }
        if (property_exists($data, 'created') && null !== $data->{'created'}) {
            $object->setCreated($data->{'created'});
        } elseif (property_exists($data, 'created') && null === $data->{'created'}) {
            $object->setCreated(null);
        }
        if (property_exists($data, 'date_create') && null !== $data->{'date_create'}) {
            $object->setDateCreate($data->{'date_create'});
        } elseif (property_exists($data, 'date_create') && null === $data->{'date_create'}) {
            $object->setDateCreate(null);
        }
        if (property_exists($data, 'deleted') && null !== $data->{'deleted'}) {
            $object->setDeleted($data->{'deleted'});
        } elseif (property_exists($data, 'deleted') && null === $data->{'deleted'}) {
            $object->setDeleted(null);
        }
        if (property_exists($data, 'description') && null !== $data->{'description'}) {
            $object->setDescription($data->{'description'});
        } elseif (property_exists($data, 'description') && null === $data->{'description'}) {
            $object->setDescription(null);
        }
        if (property_exists($data, 'discoverable') && null !== $data->{'discoverable'}) {
            $object->setDiscoverable($data->{'discoverable'});
        } elseif (property_exists($data, 'discoverable') && null === $data->{'discoverable'}) {
            $object->setDiscoverable(null);
        }
        if (property_exists($data, 'domain') && null !== $data->{'domain'}) {
            $object->setDomain($data->{'domain'});
        } elseif (property_exists($data, 'domain') && null === $data->{'domain'}) {
            $object->setDomain(null);
        }
        if (property_exists($data, 'email_domain') && null !== $data->{'email_domain'}) {
            $object->setEmailDomain($data->{'email_domain'});
        } elseif (property_exists($data, 'email_domain') && null === $data->{'email_domain'}) {
            $object->setEmailDomain(null);
        }
        if (property_exists($data, 'enterprise_id') && null !== $data->{'enterprise_id'}) {
            $object->setEnterpriseId($data->{'enterprise_id'});
        } elseif (property_exists($data, 'enterprise_id') && null === $data->{'enterprise_id'}) {
            $object->setEnterpriseId(null);
        }
        if (property_exists($data, 'enterprise_name') && null !== $data->{'enterprise_name'}) {
            $object->setEnterpriseName($data->{'enterprise_name'});
        } elseif (property_exists($data, 'enterprise_name') && null === $data->{'enterprise_name'}) {
            $object->setEnterpriseName(null);
        }
        if (property_exists($data, 'has_compliance_export') && null !== $data->{'has_compliance_export'}) {
            $object->setHasComplianceExport($data->{'has_compliance_export'});
        } elseif (property_exists($data, 'has_compliance_export') && null === $data->{'has_compliance_export'}) {
            $object->setHasComplianceExport(null);
        }
        if (property_exists($data, 'icon') && null !== $data->{'icon'}) {
            $object->setIcon($this->denormalizer->denormalize($data->{'icon'}, 'JoliCode\\Slack\\Api\\Model\\ObjsIcon', 'json', $context));
        } elseif (property_exists($data, 'icon') && null === $data->{'icon'}) {
            $object->setIcon(null);
        }
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        } elseif (property_exists($data, 'id') && null === $data->{'id'}) {
            $object->setId(null);
        }
        if (property_exists($data, 'is_assigned') && null !== $data->{'is_assigned'}) {
            $object->setIsAssigned($data->{'is_assigned'});
        } elseif (property_exists($data, 'is_assigned') && null === $data->{'is_assigned'}) {
            $object->setIsAssigned(null);
        }
        if (property_exists($data, 'is_enterprise') && null !== $data->{'is_enterprise'}) {
            $object->setIsEnterprise($data->{'is_enterprise'});
        } elseif (property_exists($data, 'is_enterprise') && null === $data->{'is_enterprise'}) {
            $object->setIsEnterprise(null);
        }
        if (property_exists($data, 'limit_ts') && null !== $data->{'limit_ts'}) {
            $object->setLimitTs($data->{'limit_ts'});
        } elseif (property_exists($data, 'limit_ts') && null === $data->{'limit_ts'}) {
            $object->setLimitTs(null);
        }
        if (property_exists($data, 'messages_count') && null !== $data->{'messages_count'}) {
            $object->setMessagesCount($data->{'messages_count'});
        } elseif (property_exists($data, 'messages_count') && null === $data->{'messages_count'}) {
            $object->setMessagesCount(null);
        }
        if (property_exists($data, 'msg_edit_window_mins') && null !== $data->{'msg_edit_window_mins'}) {
            $object->setMsgEditWindowMins($data->{'msg_edit_window_mins'});
        } elseif (property_exists($data, 'msg_edit_window_mins') && null === $data->{'msg_edit_window_mins'}) {
            $object->setMsgEditWindowMins(null);
        }
        if (property_exists($data, 'name') && null !== $data->{'name'}) {
            $object->setName($data->{'name'});
        } elseif (property_exists($data, 'name') && null === $data->{'name'}) {
            $object->setName(null);
        }
        if (property_exists($data, 'over_integrations_limit') && null !== $data->{'over_integrations_limit'}) {
            $object->setOverIntegrationsLimit($data->{'over_integrations_limit'});
        } elseif (property_exists($data, 'over_integrations_limit') && null === $data->{'over_integrations_limit'}) {
            $object->setOverIntegrationsLimit(null);
        }
        if (property_exists($data, 'over_storage_limit') && null !== $data->{'over_storage_limit'}) {
            $object->setOverStorageLimit($data->{'over_storage_limit'});
        } elseif (property_exists($data, 'over_storage_limit') && null === $data->{'over_storage_limit'}) {
            $object->setOverStorageLimit(null);
        }
        if (property_exists($data, 'plan') && null !== $data->{'plan'}) {
            $object->setPlan($data->{'plan'});
        } elseif (property_exists($data, 'plan') && null === $data->{'plan'}) {
            $object->setPlan(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getArchived()) {
            $data->{'archived'} = $object->getArchived();
        } else {
            $data->{'archived'} = null;
        }
        if (null !== $object->getAvatarBaseUrl()) {
            $data->{'avatar_base_url'} = $object->getAvatarBaseUrl();
        } else {
            $data->{'avatar_base_url'} = null;
        }
        if (null !== $object->getCreated()) {
            $data->{'created'} = $object->getCreated();
        } else {
            $data->{'created'} = null;
        }
        if (null !== $object->getDateCreate()) {
            $data->{'date_create'} = $object->getDateCreate();
        } else {
            $data->{'date_create'} = null;
        }
        if (null !== $object->getDeleted()) {
            $data->{'deleted'} = $object->getDeleted();
        } else {
            $data->{'deleted'} = null;
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        } else {
            $data->{'description'} = null;
        }
        if (null !== $object->getDiscoverable()) {
            $data->{'discoverable'} = $object->getDiscoverable();
        } else {
            $data->{'discoverable'} = null;
        }
        if (null !== $object->getDomain()) {
            $data->{'domain'} = $object->getDomain();
        } else {
            $data->{'domain'} = null;
        }
        if (null !== $object->getEmailDomain()) {
            $data->{'email_domain'} = $object->getEmailDomain();
        } else {
            $data->{'email_domain'} = null;
        }
        if (null !== $object->getEnterpriseId()) {
            $data->{'enterprise_id'} = $object->getEnterpriseId();
        } else {
            $data->{'enterprise_id'} = null;
        }
        if (null !== $object->getEnterpriseName()) {
            $data->{'enterprise_name'} = $object->getEnterpriseName();
        } else {
            $data->{'enterprise_name'} = null;
        }
        if (null !== $object->getHasComplianceExport()) {
            $data->{'has_compliance_export'} = $object->getHasComplianceExport();
        } else {
            $data->{'has_compliance_export'} = null;
        }
        if (null !== $object->getIcon()) {
            $data->{'icon'} = $this->normalizer->normalize($object->getIcon(), 'json', $context);
        } else {
            $data->{'icon'} = null;
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        } else {
            $data->{'id'} = null;
        }
        if (null !== $object->getIsAssigned()) {
            $data->{'is_assigned'} = $object->getIsAssigned();
        } else {
            $data->{'is_assigned'} = null;
        }
        if (null !== $object->getIsEnterprise()) {
            $data->{'is_enterprise'} = $object->getIsEnterprise();
        } else {
            $data->{'is_enterprise'} = null;
        }
        if (null !== $object->getLimitTs()) {
            $data->{'limit_ts'} = $object->getLimitTs();
        } else {
            $data->{'limit_ts'} = null;
        }
        if (null !== $object->getMessagesCount()) {
            $data->{'messages_count'} = $object->getMessagesCount();
        } else {
            $data->{'messages_count'} = null;
        }
        if (null !== $object->getMsgEditWindowMins()) {
            $data->{'msg_edit_window_mins'} = $object->getMsgEditWindowMins();
        } else {
            $data->{'msg_edit_window_mins'} = null;
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        } else {
            $data->{'name'} = null;
        }
        if (null !== $object->getOverIntegrationsLimit()) {
            $data->{'over_integrations_limit'} = $object->getOverIntegrationsLimit();
        } else {
            $data->{'over_integrations_limit'} = null;
        }
        if (null !== $object->getOverStorageLimit()) {
            $data->{'over_storage_limit'} = $object->getOverStorageLimit();
        } else {
            $data->{'over_storage_limit'} = null;
        }
        if (null !== $object->getPlan()) {
            $data->{'plan'} = $object->getPlan();
        } else {
            $data->{'plan'} = null;
        }

        return $data;
    }
}
