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
        $object = new \JoliCode\Slack\Api\Model\ObjsTeam();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
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
        if (\array_key_exists('archived', $data) && null !== $data['archived']) {
            $object->archived = $data['archived'];
        } elseif (\array_key_exists('archived', $data)) {
            $object->archived = null;
        }
        if (\array_key_exists('avatar_base_url', $data) && null !== $data['avatar_base_url']) {
            $object->avatarBaseUrl = $data['avatar_base_url'];
        } elseif (\array_key_exists('avatar_base_url', $data)) {
            $object->avatarBaseUrl = null;
        }
        if (\array_key_exists('created', $data) && null !== $data['created']) {
            $object->created = $data['created'];
        } elseif (\array_key_exists('created', $data)) {
            $object->created = null;
        }
        if (\array_key_exists('date_create', $data) && null !== $data['date_create']) {
            $object->dateCreate = $data['date_create'];
        } elseif (\array_key_exists('date_create', $data)) {
            $object->dateCreate = null;
        }
        if (\array_key_exists('deleted', $data) && null !== $data['deleted']) {
            $object->deleted = $data['deleted'];
        } elseif (\array_key_exists('deleted', $data)) {
            $object->deleted = null;
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $value = $data['description'];
            if (\is_string($data['description'])) {
                $value = $data['description'];
            }
            $object->description = $value;
        } elseif (\array_key_exists('description', $data)) {
            $object->description = null;
        }
        if (\array_key_exists('discoverable', $data) && null !== $data['discoverable']) {
            $object->discoverable = $data['discoverable'];
        } elseif (\array_key_exists('discoverable', $data)) {
            $object->discoverable = null;
        }
        if (\array_key_exists('domain', $data) && null !== $data['domain']) {
            $object->domain = $data['domain'];
        } elseif (\array_key_exists('domain', $data)) {
            $object->domain = null;
        }
        if (\array_key_exists('email_domain', $data) && null !== $data['email_domain']) {
            $object->emailDomain = $data['email_domain'];
        } elseif (\array_key_exists('email_domain', $data)) {
            $object->emailDomain = null;
        }
        if (\array_key_exists('enterprise_id', $data) && null !== $data['enterprise_id']) {
            $object->enterpriseId = $data['enterprise_id'];
        } elseif (\array_key_exists('enterprise_id', $data)) {
            $object->enterpriseId = null;
        }
        if (\array_key_exists('enterprise_name', $data) && null !== $data['enterprise_name']) {
            $object->enterpriseName = $data['enterprise_name'];
        } elseif (\array_key_exists('enterprise_name', $data)) {
            $object->enterpriseName = null;
        }
        if (\array_key_exists('external_org_migrations', $data) && null !== $data['external_org_migrations']) {
            $object->externalOrgMigrations = $this->denormalizer->denormalize($data['external_org_migrations'], \JoliCode\Slack\Api\Model\ObjsExternalOrgMigrations::class, 'json', $context);
        } elseif (\array_key_exists('external_org_migrations', $data)) {
            $object->externalOrgMigrations = null;
        }
        if (\array_key_exists('has_compliance_export', $data) && null !== $data['has_compliance_export']) {
            $object->hasComplianceExport = $data['has_compliance_export'];
        } elseif (\array_key_exists('has_compliance_export', $data)) {
            $object->hasComplianceExport = null;
        }
        if (\array_key_exists('icon', $data) && null !== $data['icon']) {
            $object->icon = $this->denormalizer->denormalize($data['icon'], \JoliCode\Slack\Api\Model\ObjsIcon::class, 'json', $context);
        } elseif (\array_key_exists('icon', $data)) {
            $object->icon = null;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->id = $data['id'];
        } elseif (\array_key_exists('id', $data)) {
            $object->id = null;
        }
        if (\array_key_exists('is_assigned', $data) && null !== $data['is_assigned']) {
            $object->isAssigned = $data['is_assigned'];
        } elseif (\array_key_exists('is_assigned', $data)) {
            $object->isAssigned = null;
        }
        if (\array_key_exists('is_enterprise', $data) && null !== $data['is_enterprise']) {
            $object->isEnterprise = $data['is_enterprise'];
        } elseif (\array_key_exists('is_enterprise', $data)) {
            $object->isEnterprise = null;
        }
        if (\array_key_exists('is_over_storage_limit', $data) && null !== $data['is_over_storage_limit']) {
            $object->isOverStorageLimit = $data['is_over_storage_limit'];
        } elseif (\array_key_exists('is_over_storage_limit', $data)) {
            $object->isOverStorageLimit = null;
        }
        if (\array_key_exists('limit_ts', $data) && null !== $data['limit_ts']) {
            $object->limitTs = $data['limit_ts'];
        } elseif (\array_key_exists('limit_ts', $data)) {
            $object->limitTs = null;
        }
        if (\array_key_exists('locale', $data) && null !== $data['locale']) {
            $object->locale = $data['locale'];
        } elseif (\array_key_exists('locale', $data)) {
            $object->locale = null;
        }
        if (\array_key_exists('messages_count', $data) && null !== $data['messages_count']) {
            $object->messagesCount = $data['messages_count'];
        } elseif (\array_key_exists('messages_count', $data)) {
            $object->messagesCount = null;
        }
        if (\array_key_exists('msg_edit_window_mins', $data) && null !== $data['msg_edit_window_mins']) {
            $object->msgEditWindowMins = $data['msg_edit_window_mins'];
        } elseif (\array_key_exists('msg_edit_window_mins', $data)) {
            $object->msgEditWindowMins = null;
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->name = $data['name'];
        } elseif (\array_key_exists('name', $data)) {
            $object->name = null;
        }
        if (\array_key_exists('over_integrations_limit', $data) && null !== $data['over_integrations_limit']) {
            $object->overIntegrationsLimit = $data['over_integrations_limit'];
        } elseif (\array_key_exists('over_integrations_limit', $data)) {
            $object->overIntegrationsLimit = null;
        }
        if (\array_key_exists('over_storage_limit', $data) && null !== $data['over_storage_limit']) {
            $object->overStorageLimit = $data['over_storage_limit'];
        } elseif (\array_key_exists('over_storage_limit', $data)) {
            $object->overStorageLimit = null;
        }
        if (\array_key_exists('pay_prod_cur', $data) && null !== $data['pay_prod_cur']) {
            $object->payProdCur = $data['pay_prod_cur'];
        } elseif (\array_key_exists('pay_prod_cur', $data)) {
            $object->payProdCur = null;
        }
        if (\array_key_exists('plan', $data) && null !== $data['plan']) {
            $object->plan = $data['plan'];
        } elseif (\array_key_exists('plan', $data)) {
            $object->plan = null;
        }
        if (\array_key_exists('primary_owner', $data) && null !== $data['primary_owner']) {
            $object->primaryOwner = $this->denormalizer->denormalize($data['primary_owner'], \JoliCode\Slack\Api\Model\ObjsPrimaryOwner::class, 'json', $context);
        } elseif (\array_key_exists('primary_owner', $data)) {
            $object->primaryOwner = null;
        }
        if (\array_key_exists('sso_provider', $data) && null !== $data['sso_provider']) {
            $object->ssoProvider = $this->denormalizer->denormalize($data['sso_provider'], \JoliCode\Slack\Api\Model\ObjsTeamSsoProvider::class, 'json', $context);
        } elseif (\array_key_exists('sso_provider', $data)) {
            $object->ssoProvider = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('archived', get_object_vars($data)) && null !== ($data->archived ?? null)) {
            $dataArray['archived'] = $data->archived;
        }
        if (\array_key_exists('avatarBaseUrl', get_object_vars($data)) && null !== ($data->avatarBaseUrl ?? null)) {
            $dataArray['avatar_base_url'] = $data->avatarBaseUrl;
        }
        if (\array_key_exists('created', get_object_vars($data)) && null !== ($data->created ?? null)) {
            $dataArray['created'] = $data->created;
        }
        if (\array_key_exists('dateCreate', get_object_vars($data)) && null !== ($data->dateCreate ?? null)) {
            $dataArray['date_create'] = $data->dateCreate;
        }
        if (\array_key_exists('deleted', get_object_vars($data)) && null !== ($data->deleted ?? null)) {
            $dataArray['deleted'] = $data->deleted;
        }
        if (\array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $value = $data->description;
            if (\is_string($data->description)) {
                $value = $data->description;
            }
            $dataArray['description'] = $value;
        }
        if (\array_key_exists('discoverable', get_object_vars($data)) && null !== ($data->discoverable ?? null)) {
            $dataArray['discoverable'] = $data->discoverable;
        }
        $dataArray['domain'] = $data->domain;
        $dataArray['email_domain'] = $data->emailDomain;
        if (\array_key_exists('enterpriseId', get_object_vars($data)) && null !== ($data->enterpriseId ?? null)) {
            $dataArray['enterprise_id'] = $data->enterpriseId;
        }
        if (\array_key_exists('enterpriseName', get_object_vars($data)) && null !== ($data->enterpriseName ?? null)) {
            $dataArray['enterprise_name'] = $data->enterpriseName;
        }
        if (\array_key_exists('externalOrgMigrations', get_object_vars($data)) && null !== ($data->externalOrgMigrations ?? null)) {
            $normalized = $this->normalizer->normalize($data->externalOrgMigrations, 'json', $context);
            $dataArray['external_org_migrations'] = is_iterable($normalized) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized) : $normalized;
        }
        if (\array_key_exists('hasComplianceExport', get_object_vars($data)) && null !== ($data->hasComplianceExport ?? null)) {
            $dataArray['has_compliance_export'] = $data->hasComplianceExport;
        }
        $normalized_1 = null === $data->icon ? null : $this->normalizer->normalize($data->icon, 'json', $context);
        $dataArray['icon'] = is_iterable($normalized_1) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
        $dataArray['id'] = $data->id;
        if (\array_key_exists('isAssigned', get_object_vars($data)) && null !== ($data->isAssigned ?? null)) {
            $dataArray['is_assigned'] = $data->isAssigned;
        }
        if (\array_key_exists('isEnterprise', get_object_vars($data)) && null !== ($data->isEnterprise ?? null)) {
            $dataArray['is_enterprise'] = $data->isEnterprise;
        }
        if (\array_key_exists('isOverStorageLimit', get_object_vars($data)) && null !== ($data->isOverStorageLimit ?? null)) {
            $dataArray['is_over_storage_limit'] = $data->isOverStorageLimit;
        }
        if (\array_key_exists('limitTs', get_object_vars($data)) && null !== ($data->limitTs ?? null)) {
            $dataArray['limit_ts'] = $data->limitTs;
        }
        if (\array_key_exists('locale', get_object_vars($data)) && null !== ($data->locale ?? null)) {
            $dataArray['locale'] = $data->locale;
        }
        if (\array_key_exists('messagesCount', get_object_vars($data)) && null !== ($data->messagesCount ?? null)) {
            $dataArray['messages_count'] = $data->messagesCount;
        }
        if (\array_key_exists('msgEditWindowMins', get_object_vars($data)) && null !== ($data->msgEditWindowMins ?? null)) {
            $dataArray['msg_edit_window_mins'] = $data->msgEditWindowMins;
        }
        $dataArray['name'] = $data->name;
        if (\array_key_exists('overIntegrationsLimit', get_object_vars($data)) && null !== ($data->overIntegrationsLimit ?? null)) {
            $dataArray['over_integrations_limit'] = $data->overIntegrationsLimit;
        }
        if (\array_key_exists('overStorageLimit', get_object_vars($data)) && null !== ($data->overStorageLimit ?? null)) {
            $dataArray['over_storage_limit'] = $data->overStorageLimit;
        }
        if (\array_key_exists('payProdCur', get_object_vars($data)) && null !== ($data->payProdCur ?? null)) {
            $dataArray['pay_prod_cur'] = $data->payProdCur;
        }
        if (\array_key_exists('plan', get_object_vars($data)) && null !== ($data->plan ?? null)) {
            $dataArray['plan'] = $data->plan;
        }
        if (\array_key_exists('primaryOwner', get_object_vars($data)) && null !== ($data->primaryOwner ?? null)) {
            $normalized_2 = $this->normalizer->normalize($data->primaryOwner, 'json', $context);
            $dataArray['primary_owner'] = is_iterable($normalized_2) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (\array_key_exists('ssoProvider', get_object_vars($data)) && null !== ($data->ssoProvider ?? null)) {
            $normalized_3 = $this->normalizer->normalize($data->ssoProvider, 'json', $context);
            $dataArray['sso_provider'] = is_iterable($normalized_3) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized_3) : $normalized_3;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\ObjsTeam::class => false];
    }
}
