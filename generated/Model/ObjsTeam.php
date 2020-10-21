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

namespace JoliCode\Slack\Api\Model;

class ObjsTeam
{
    /**
     * @var bool|null
     */
    protected $archived;
    /**
     * @var string|null
     */
    protected $avatarBaseUrl;
    /**
     * @var int|null
     */
    protected $created;
    /**
     * @var int|null
     */
    protected $dateCreate;
    /**
     * @var bool|null
     */
    protected $deleted;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var string|null
     */
    protected $discoverable;
    /**
     * @var string|null
     */
    protected $domain;
    /**
     * @var string|null
     */
    protected $emailDomain;
    /**
     * @var string|null
     */
    protected $enterpriseId;
    /**
     * @var string|null
     */
    protected $enterpriseName;
    /**
     * @var ObjsExternalOrgMigrations|null
     */
    protected $externalOrgMigrations;
    /**
     * @var bool|null
     */
    protected $hasComplianceExport;
    /**
     * @var ObjsIcon|null
     */
    protected $icon;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var bool|null
     */
    protected $isAssigned;
    /**
     * @var int|null
     */
    protected $isEnterprise;
    /**
     * @var bool|null
     */
    protected $isOverStorageLimit;
    /**
     * @var int|null
     */
    protected $limitTs;
    /**
     * @var string|null
     */
    protected $locale;
    /**
     * @var int|null
     */
    protected $messagesCount;
    /**
     * @var int|null
     */
    protected $msgEditWindowMins;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var bool|null
     */
    protected $overIntegrationsLimit;
    /**
     * @var bool|null
     */
    protected $overStorageLimit;
    /**
     * @var string|null
     */
    protected $payProdCur;
    /**
     * @var string|null
     */
    protected $plan;
    /**
     * @var ObjsPrimaryOwner|null
     */
    protected $primaryOwner;
    /**
     * @var ObjsTeamSsoProvider|null
     */
    protected $ssoProvider;

    public function getArchived(): ?bool
    {
        return $this->archived;
    }

    public function setArchived(?bool $archived): self
    {
        $this->archived = $archived;

        return $this;
    }

    public function getAvatarBaseUrl(): ?string
    {
        return $this->avatarBaseUrl;
    }

    public function setAvatarBaseUrl(?string $avatarBaseUrl): self
    {
        $this->avatarBaseUrl = $avatarBaseUrl;

        return $this;
    }

    public function getCreated(): ?int
    {
        return $this->created;
    }

    public function setCreated(?int $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getDateCreate(): ?int
    {
        return $this->dateCreate;
    }

    public function setDateCreate(?int $dateCreate): self
    {
        $this->dateCreate = $dateCreate;

        return $this;
    }

    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }

    public function setDeleted(?bool $deleted): self
    {
        $this->deleted = $deleted;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDiscoverable(): ?string
    {
        return $this->discoverable;
    }

    public function setDiscoverable(?string $discoverable): self
    {
        $this->discoverable = $discoverable;

        return $this;
    }

    public function getDomain(): ?string
    {
        return $this->domain;
    }

    public function setDomain(?string $domain): self
    {
        $this->domain = $domain;

        return $this;
    }

    public function getEmailDomain(): ?string
    {
        return $this->emailDomain;
    }

    public function setEmailDomain(?string $emailDomain): self
    {
        $this->emailDomain = $emailDomain;

        return $this;
    }

    public function getEnterpriseId(): ?string
    {
        return $this->enterpriseId;
    }

    public function setEnterpriseId(?string $enterpriseId): self
    {
        $this->enterpriseId = $enterpriseId;

        return $this;
    }

    public function getEnterpriseName(): ?string
    {
        return $this->enterpriseName;
    }

    public function setEnterpriseName(?string $enterpriseName): self
    {
        $this->enterpriseName = $enterpriseName;

        return $this;
    }

    public function getExternalOrgMigrations(): ?ObjsExternalOrgMigrations
    {
        return $this->externalOrgMigrations;
    }

    public function setExternalOrgMigrations(?ObjsExternalOrgMigrations $externalOrgMigrations): self
    {
        $this->externalOrgMigrations = $externalOrgMigrations;

        return $this;
    }

    public function getHasComplianceExport(): ?bool
    {
        return $this->hasComplianceExport;
    }

    public function setHasComplianceExport(?bool $hasComplianceExport): self
    {
        $this->hasComplianceExport = $hasComplianceExport;

        return $this;
    }

    public function getIcon(): ?ObjsIcon
    {
        return $this->icon;
    }

    public function setIcon(?ObjsIcon $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getIsAssigned(): ?bool
    {
        return $this->isAssigned;
    }

    public function setIsAssigned(?bool $isAssigned): self
    {
        $this->isAssigned = $isAssigned;

        return $this;
    }

    public function getIsEnterprise(): ?int
    {
        return $this->isEnterprise;
    }

    public function setIsEnterprise(?int $isEnterprise): self
    {
        $this->isEnterprise = $isEnterprise;

        return $this;
    }

    public function getIsOverStorageLimit(): ?bool
    {
        return $this->isOverStorageLimit;
    }

    public function setIsOverStorageLimit(?bool $isOverStorageLimit): self
    {
        $this->isOverStorageLimit = $isOverStorageLimit;

        return $this;
    }

    public function getLimitTs(): ?int
    {
        return $this->limitTs;
    }

    public function setLimitTs(?int $limitTs): self
    {
        $this->limitTs = $limitTs;

        return $this;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(?string $locale): self
    {
        $this->locale = $locale;

        return $this;
    }

    public function getMessagesCount(): ?int
    {
        return $this->messagesCount;
    }

    public function setMessagesCount(?int $messagesCount): self
    {
        $this->messagesCount = $messagesCount;

        return $this;
    }

    public function getMsgEditWindowMins(): ?int
    {
        return $this->msgEditWindowMins;
    }

    public function setMsgEditWindowMins(?int $msgEditWindowMins): self
    {
        $this->msgEditWindowMins = $msgEditWindowMins;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getOverIntegrationsLimit(): ?bool
    {
        return $this->overIntegrationsLimit;
    }

    public function setOverIntegrationsLimit(?bool $overIntegrationsLimit): self
    {
        $this->overIntegrationsLimit = $overIntegrationsLimit;

        return $this;
    }

    public function getOverStorageLimit(): ?bool
    {
        return $this->overStorageLimit;
    }

    public function setOverStorageLimit(?bool $overStorageLimit): self
    {
        $this->overStorageLimit = $overStorageLimit;

        return $this;
    }

    public function getPayProdCur(): ?string
    {
        return $this->payProdCur;
    }

    public function setPayProdCur(?string $payProdCur): self
    {
        $this->payProdCur = $payProdCur;

        return $this;
    }

    public function getPlan(): ?string
    {
        return $this->plan;
    }

    public function setPlan(?string $plan): self
    {
        $this->plan = $plan;

        return $this;
    }

    public function getPrimaryOwner(): ?ObjsPrimaryOwner
    {
        return $this->primaryOwner;
    }

    public function setPrimaryOwner(?ObjsPrimaryOwner $primaryOwner): self
    {
        $this->primaryOwner = $primaryOwner;

        return $this;
    }

    public function getSsoProvider(): ?ObjsTeamSsoProvider
    {
        return $this->ssoProvider;
    }

    public function setSsoProvider(?ObjsTeamSsoProvider $ssoProvider): self
    {
        $this->ssoProvider = $ssoProvider;

        return $this;
    }
}
