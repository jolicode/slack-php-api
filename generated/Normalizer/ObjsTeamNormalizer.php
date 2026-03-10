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

class ObjsTeamNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\ObjsTeam::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\ObjsTeam::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsTeam();
        if (\array_key_exists('archived', $data) && \is_int($data['archived'])) {
            $data['archived'] = (bool) $data['archived'];
        }
        if (\array_key_exists('deleted', $data) && \is_int($data['deleted'])) {
            $data['deleted'] = (bool) $data['deleted'];
        }
        if (\array_key_exists('has_compliance_export', $data) && \is_int($data['has_compliance_export'])) {
            $data['has_compliance_export'] = (bool) $data['has_compliance_export'];
        }
        if (\array_key_exists('is_assigned', $data) && \is_int($data['is_assigned'])) {
            $data['is_assigned'] = (bool) $data['is_assigned'];
        }
        if (\array_key_exists('is_over_storage_limit', $data) && \is_int($data['is_over_storage_limit'])) {
            $data['is_over_storage_limit'] = (bool) $data['is_over_storage_limit'];
        }
        if (\array_key_exists('over_integrations_limit', $data) && \is_int($data['over_integrations_limit'])) {
            $data['over_integrations_limit'] = (bool) $data['over_integrations_limit'];
        }
        if (\array_key_exists('over_storage_limit', $data) && \is_int($data['over_storage_limit'])) {
            $data['over_storage_limit'] = (bool) $data['over_storage_limit'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('archived', $data) && null !== $data['archived']) {
            $object->setArchived($data['archived']);
        } elseif (\array_key_exists('archived', $data) && null === $data['archived']) {
            $object->setArchived(null);
        }
        if (\array_key_exists('avatar_base_url', $data) && null !== $data['avatar_base_url']) {
            $object->setAvatarBaseUrl($data['avatar_base_url']);
        } elseif (\array_key_exists('avatar_base_url', $data) && null === $data['avatar_base_url']) {
            $object->setAvatarBaseUrl(null);
        }
        if (\array_key_exists('created', $data) && null !== $data['created']) {
            $object->setCreated($data['created']);
        } elseif (\array_key_exists('created', $data) && null === $data['created']) {
            $object->setCreated(null);
        }
        if (\array_key_exists('date_create', $data) && null !== $data['date_create']) {
            $object->setDateCreate($data['date_create']);
        } elseif (\array_key_exists('date_create', $data) && null === $data['date_create']) {
            $object->setDateCreate(null);
        }
        if (\array_key_exists('deleted', $data) && null !== $data['deleted']) {
            $object->setDeleted($data['deleted']);
        } elseif (\array_key_exists('deleted', $data) && null === $data['deleted']) {
            $object->setDeleted(null);
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $value = $data['description'];
            if (\is_string($data['description'])) {
                $value = $data['description'];
            }
            $object->setDescription($value);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
        }
        if (\array_key_exists('discoverable', $data) && null !== $data['discoverable']) {
            $object->setDiscoverable($data['discoverable']);
        } elseif (\array_key_exists('discoverable', $data) && null === $data['discoverable']) {
            $object->setDiscoverable(null);
        }
        if (\array_key_exists('domain', $data) && null !== $data['domain']) {
            $object->setDomain($data['domain']);
        } elseif (\array_key_exists('domain', $data) && null === $data['domain']) {
            $object->setDomain(null);
        }
        if (\array_key_exists('email_domain', $data) && null !== $data['email_domain']) {
            $object->setEmailDomain($data['email_domain']);
        } elseif (\array_key_exists('email_domain', $data) && null === $data['email_domain']) {
            $object->setEmailDomain(null);
        }
        if (\array_key_exists('enterprise_id', $data) && null !== $data['enterprise_id']) {
            $object->setEnterpriseId($data['enterprise_id']);
        } elseif (\array_key_exists('enterprise_id', $data) && null === $data['enterprise_id']) {
            $object->setEnterpriseId(null);
        }
        if (\array_key_exists('enterprise_name', $data) && null !== $data['enterprise_name']) {
            $object->setEnterpriseName($data['enterprise_name']);
        } elseif (\array_key_exists('enterprise_name', $data) && null === $data['enterprise_name']) {
            $object->setEnterpriseName(null);
        }
        if (\array_key_exists('external_org_migrations', $data) && null !== $data['external_org_migrations']) {
            $object->setExternalOrgMigrations($this->denormalizer->denormalize($data['external_org_migrations'], \JoliCode\Slack\Api\Model\ObjsExternalOrgMigrations::class, 'json', $context));
        } elseif (\array_key_exists('external_org_migrations', $data) && null === $data['external_org_migrations']) {
            $object->setExternalOrgMigrations(null);
        }
        if (\array_key_exists('has_compliance_export', $data) && null !== $data['has_compliance_export']) {
            $object->setHasComplianceExport($data['has_compliance_export']);
        } elseif (\array_key_exists('has_compliance_export', $data) && null === $data['has_compliance_export']) {
            $object->setHasComplianceExport(null);
        }
        if (\array_key_exists('icon', $data) && null !== $data['icon']) {
            $object->setIcon($this->denormalizer->denormalize($data['icon'], \JoliCode\Slack\Api\Model\ObjsIcon::class, 'json', $context));
        } elseif (\array_key_exists('icon', $data) && null === $data['icon']) {
            $object->setIcon(null);
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('is_assigned', $data) && null !== $data['is_assigned']) {
            $object->setIsAssigned($data['is_assigned']);
        } elseif (\array_key_exists('is_assigned', $data) && null === $data['is_assigned']) {
            $object->setIsAssigned(null);
        }
        if (\array_key_exists('is_enterprise', $data) && null !== $data['is_enterprise']) {
            $object->setIsEnterprise($data['is_enterprise']);
        } elseif (\array_key_exists('is_enterprise', $data) && null === $data['is_enterprise']) {
            $object->setIsEnterprise(null);
        }
        if (\array_key_exists('is_over_storage_limit', $data) && null !== $data['is_over_storage_limit']) {
            $object->setIsOverStorageLimit($data['is_over_storage_limit']);
        } elseif (\array_key_exists('is_over_storage_limit', $data) && null === $data['is_over_storage_limit']) {
            $object->setIsOverStorageLimit(null);
        }
        if (\array_key_exists('limit_ts', $data) && null !== $data['limit_ts']) {
            $object->setLimitTs($data['limit_ts']);
        } elseif (\array_key_exists('limit_ts', $data) && null === $data['limit_ts']) {
            $object->setLimitTs(null);
        }
        if (\array_key_exists('locale', $data) && null !== $data['locale']) {
            $object->setLocale($data['locale']);
        } elseif (\array_key_exists('locale', $data) && null === $data['locale']) {
            $object->setLocale(null);
        }
        if (\array_key_exists('messages_count', $data) && null !== $data['messages_count']) {
            $object->setMessagesCount($data['messages_count']);
        } elseif (\array_key_exists('messages_count', $data) && null === $data['messages_count']) {
            $object->setMessagesCount(null);
        }
        if (\array_key_exists('msg_edit_window_mins', $data) && null !== $data['msg_edit_window_mins']) {
            $object->setMsgEditWindowMins($data['msg_edit_window_mins']);
        } elseif (\array_key_exists('msg_edit_window_mins', $data) && null === $data['msg_edit_window_mins']) {
            $object->setMsgEditWindowMins(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('over_integrations_limit', $data) && null !== $data['over_integrations_limit']) {
            $object->setOverIntegrationsLimit($data['over_integrations_limit']);
        } elseif (\array_key_exists('over_integrations_limit', $data) && null === $data['over_integrations_limit']) {
            $object->setOverIntegrationsLimit(null);
        }
        if (\array_key_exists('over_storage_limit', $data) && null !== $data['over_storage_limit']) {
            $object->setOverStorageLimit($data['over_storage_limit']);
        } elseif (\array_key_exists('over_storage_limit', $data) && null === $data['over_storage_limit']) {
            $object->setOverStorageLimit(null);
        }
        if (\array_key_exists('pay_prod_cur', $data) && null !== $data['pay_prod_cur']) {
            $object->setPayProdCur($data['pay_prod_cur']);
        } elseif (\array_key_exists('pay_prod_cur', $data) && null === $data['pay_prod_cur']) {
            $object->setPayProdCur(null);
        }
        if (\array_key_exists('plan', $data) && null !== $data['plan']) {
            $object->setPlan($data['plan']);
        } elseif (\array_key_exists('plan', $data) && null === $data['plan']) {
            $object->setPlan(null);
        }
        if (\array_key_exists('primary_owner', $data) && null !== $data['primary_owner']) {
            $object->setPrimaryOwner($this->denormalizer->denormalize($data['primary_owner'], \JoliCode\Slack\Api\Model\ObjsPrimaryOwner::class, 'json', $context));
        } elseif (\array_key_exists('primary_owner', $data) && null === $data['primary_owner']) {
            $object->setPrimaryOwner(null);
        }
        if (\array_key_exists('sso_provider', $data) && null !== $data['sso_provider']) {
            $object->setSsoProvider($this->denormalizer->denormalize($data['sso_provider'], \JoliCode\Slack\Api\Model\ObjsTeamSsoProvider::class, 'json', $context));
        } elseif (\array_key_exists('sso_provider', $data) && null === $data['sso_provider']) {
            $object->setSsoProvider(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('archived') && null !== $data->getArchived()) {
            $dataArray['archived'] = $data->getArchived();
        }
        if ($data->isInitialized('avatarBaseUrl') && null !== $data->getAvatarBaseUrl()) {
            $dataArray['avatar_base_url'] = $data->getAvatarBaseUrl();
        }
        if ($data->isInitialized('created') && null !== $data->getCreated()) {
            $dataArray['created'] = $data->getCreated();
        }
        if ($data->isInitialized('dateCreate') && null !== $data->getDateCreate()) {
            $dataArray['date_create'] = $data->getDateCreate();
        }
        if ($data->isInitialized('deleted') && null !== $data->getDeleted()) {
            $dataArray['deleted'] = $data->getDeleted();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $value = $data->getDescription();
            if (\is_string($data->getDescription())) {
                $value = $data->getDescription();
            }
            $dataArray['description'] = $value;
        }
        if ($data->isInitialized('discoverable') && null !== $data->getDiscoverable()) {
            $dataArray['discoverable'] = $data->getDiscoverable();
        }
        $dataArray['domain'] = $data->getDomain();
        $dataArray['email_domain'] = $data->getEmailDomain();
        if ($data->isInitialized('enterpriseId') && null !== $data->getEnterpriseId()) {
            $dataArray['enterprise_id'] = $data->getEnterpriseId();
        }
        if ($data->isInitialized('enterpriseName') && null !== $data->getEnterpriseName()) {
            $dataArray['enterprise_name'] = $data->getEnterpriseName();
        }
        if ($data->isInitialized('externalOrgMigrations') && null !== $data->getExternalOrgMigrations()) {
            $dataArray['external_org_migrations'] = $this->normalizer->normalize($data->getExternalOrgMigrations(), 'json', $context);
        }
        if ($data->isInitialized('hasComplianceExport') && null !== $data->getHasComplianceExport()) {
            $dataArray['has_compliance_export'] = $data->getHasComplianceExport();
        }
        $dataArray['icon'] = $this->normalizer->normalize($data->getIcon(), 'json', $context);
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('isAssigned') && null !== $data->getIsAssigned()) {
            $dataArray['is_assigned'] = $data->getIsAssigned();
        }
        if ($data->isInitialized('isEnterprise') && null !== $data->getIsEnterprise()) {
            $dataArray['is_enterprise'] = $data->getIsEnterprise();
        }
        if ($data->isInitialized('isOverStorageLimit') && null !== $data->getIsOverStorageLimit()) {
            $dataArray['is_over_storage_limit'] = $data->getIsOverStorageLimit();
        }
        if ($data->isInitialized('limitTs') && null !== $data->getLimitTs()) {
            $dataArray['limit_ts'] = $data->getLimitTs();
        }
        if ($data->isInitialized('locale') && null !== $data->getLocale()) {
            $dataArray['locale'] = $data->getLocale();
        }
        if ($data->isInitialized('messagesCount') && null !== $data->getMessagesCount()) {
            $dataArray['messages_count'] = $data->getMessagesCount();
        }
        if ($data->isInitialized('msgEditWindowMins') && null !== $data->getMsgEditWindowMins()) {
            $dataArray['msg_edit_window_mins'] = $data->getMsgEditWindowMins();
        }
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('overIntegrationsLimit') && null !== $data->getOverIntegrationsLimit()) {
            $dataArray['over_integrations_limit'] = $data->getOverIntegrationsLimit();
        }
        if ($data->isInitialized('overStorageLimit') && null !== $data->getOverStorageLimit()) {
            $dataArray['over_storage_limit'] = $data->getOverStorageLimit();
        }
        if ($data->isInitialized('payProdCur') && null !== $data->getPayProdCur()) {
            $dataArray['pay_prod_cur'] = $data->getPayProdCur();
        }
        if ($data->isInitialized('plan') && null !== $data->getPlan()) {
            $dataArray['plan'] = $data->getPlan();
        }
        if ($data->isInitialized('primaryOwner') && null !== $data->getPrimaryOwner()) {
            $dataArray['primary_owner'] = $this->normalizer->normalize($data->getPrimaryOwner(), 'json', $context);
        }
        if ($data->isInitialized('ssoProvider') && null !== $data->getSsoProvider()) {
            $dataArray['sso_provider'] = $this->normalizer->normalize($data->getSsoProvider(), 'json', $context);
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\ObjsTeam::class => false];
    }
}
