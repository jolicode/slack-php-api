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

class ObjsUser
{
    /**
     * refercing to bug: https://jira.tinyspeck.com/browse/EVALUE-1559.
     *
     * @var string|null
     */
    protected $color;
    /**
     * @var bool|null
     */
    protected $deleted;
    /**
     * @var ObjsEnterpriseUser|null
     */
    protected $enterpriseUser;
    /**
     * @var bool|null
     */
    protected $has2fa;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var bool|null
     */
    protected $isAdmin;
    /**
     * @var bool|null
     */
    protected $isAppUser;
    /**
     * @var bool|null
     */
    protected $isBot;
    /**
     * @var bool|null
     */
    protected $isExternal;
    /**
     * @var bool|null
     */
    protected $isForgotten;
    /**
     * @var bool|null
     */
    protected $isInvitedUser;
    /**
     * @var bool|null
     */
    protected $isOwner;
    /**
     * @var bool|null
     */
    protected $isPrimaryOwner;
    /**
     * @var bool|null
     */
    protected $isRestricted;
    /**
     * @var bool|null
     */
    protected $isStranger;
    /**
     * @var bool|null
     */
    protected $isUltraRestricted;
    /**
     * @var string|null
     */
    protected $locale;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $presence;
    /**
     * @var ObjsUserProfile|null
     */
    protected $profile;
    /**
     * @var string|null
     */
    protected $realName;
    /**
     * @var string|null
     */
    protected $team;
    /**
     * @var string|null
     */
    protected $teamId;
    /**
     * @var ObjsUserTeamProfile|null
     */
    protected $teamProfile;
    /**
     * @var string[]|null
     */
    protected $teams;
    /**
     * @var string|null
     */
    protected $twoFactorType;
    /**
     * @var mixed|null
     */
    protected $tz;
    /**
     * @var string|null
     */
    protected $tzLabel;
    /**
     * @var float|null
     */
    protected $tzOffset;
    /**
     * @var float|null
     */
    protected $updated;

    /**
     * refercing to bug: https://jira.tinyspeck.com/browse/EVALUE-1559.
     */
    public function getColor(): ?string
    {
        return $this->color;
    }

    /**
     * refercing to bug: https://jira.tinyspeck.com/browse/EVALUE-1559.
     */
    public function setColor(?string $color): self
    {
        $this->color = $color;

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

    public function getEnterpriseUser(): ?ObjsEnterpriseUser
    {
        return $this->enterpriseUser;
    }

    public function setEnterpriseUser(?ObjsEnterpriseUser $enterpriseUser): self
    {
        $this->enterpriseUser = $enterpriseUser;

        return $this;
    }

    public function getHas2fa(): ?bool
    {
        return $this->has2fa;
    }

    public function setHas2fa(?bool $has2fa): self
    {
        $this->has2fa = $has2fa;

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

    public function getIsAdmin(): ?bool
    {
        return $this->isAdmin;
    }

    public function setIsAdmin(?bool $isAdmin): self
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    public function getIsAppUser(): ?bool
    {
        return $this->isAppUser;
    }

    public function setIsAppUser(?bool $isAppUser): self
    {
        $this->isAppUser = $isAppUser;

        return $this;
    }

    public function getIsBot(): ?bool
    {
        return $this->isBot;
    }

    public function setIsBot(?bool $isBot): self
    {
        $this->isBot = $isBot;

        return $this;
    }

    public function getIsExternal(): ?bool
    {
        return $this->isExternal;
    }

    public function setIsExternal(?bool $isExternal): self
    {
        $this->isExternal = $isExternal;

        return $this;
    }

    public function getIsForgotten(): ?bool
    {
        return $this->isForgotten;
    }

    public function setIsForgotten(?bool $isForgotten): self
    {
        $this->isForgotten = $isForgotten;

        return $this;
    }

    public function getIsInvitedUser(): ?bool
    {
        return $this->isInvitedUser;
    }

    public function setIsInvitedUser(?bool $isInvitedUser): self
    {
        $this->isInvitedUser = $isInvitedUser;

        return $this;
    }

    public function getIsOwner(): ?bool
    {
        return $this->isOwner;
    }

    public function setIsOwner(?bool $isOwner): self
    {
        $this->isOwner = $isOwner;

        return $this;
    }

    public function getIsPrimaryOwner(): ?bool
    {
        return $this->isPrimaryOwner;
    }

    public function setIsPrimaryOwner(?bool $isPrimaryOwner): self
    {
        $this->isPrimaryOwner = $isPrimaryOwner;

        return $this;
    }

    public function getIsRestricted(): ?bool
    {
        return $this->isRestricted;
    }

    public function setIsRestricted(?bool $isRestricted): self
    {
        $this->isRestricted = $isRestricted;

        return $this;
    }

    public function getIsStranger(): ?bool
    {
        return $this->isStranger;
    }

    public function setIsStranger(?bool $isStranger): self
    {
        $this->isStranger = $isStranger;

        return $this;
    }

    public function getIsUltraRestricted(): ?bool
    {
        return $this->isUltraRestricted;
    }

    public function setIsUltraRestricted(?bool $isUltraRestricted): self
    {
        $this->isUltraRestricted = $isUltraRestricted;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPresence(): ?string
    {
        return $this->presence;
    }

    public function setPresence(?string $presence): self
    {
        $this->presence = $presence;

        return $this;
    }

    public function getProfile(): ?ObjsUserProfile
    {
        return $this->profile;
    }

    public function setProfile(?ObjsUserProfile $profile): self
    {
        $this->profile = $profile;

        return $this;
    }

    public function getRealName(): ?string
    {
        return $this->realName;
    }

    public function setRealName(?string $realName): self
    {
        $this->realName = $realName;

        return $this;
    }

    public function getTeam(): ?string
    {
        return $this->team;
    }

    public function setTeam(?string $team): self
    {
        $this->team = $team;

        return $this;
    }

    public function getTeamId(): ?string
    {
        return $this->teamId;
    }

    public function setTeamId(?string $teamId): self
    {
        $this->teamId = $teamId;

        return $this;
    }

    public function getTeamProfile(): ?ObjsUserTeamProfile
    {
        return $this->teamProfile;
    }

    public function setTeamProfile(?ObjsUserTeamProfile $teamProfile): self
    {
        $this->teamProfile = $teamProfile;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getTeams(): ?array
    {
        return $this->teams;
    }

    /**
     * @param string[]|null $teams
     */
    public function setTeams(?array $teams): self
    {
        $this->teams = $teams;

        return $this;
    }

    public function getTwoFactorType(): ?string
    {
        return $this->twoFactorType;
    }

    public function setTwoFactorType(?string $twoFactorType): self
    {
        $this->twoFactorType = $twoFactorType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTz()
    {
        return $this->tz;
    }

    /**
     * @param mixed $tz
     */
    public function setTz($tz): self
    {
        $this->tz = $tz;

        return $this;
    }

    public function getTzLabel(): ?string
    {
        return $this->tzLabel;
    }

    public function setTzLabel(?string $tzLabel): self
    {
        $this->tzLabel = $tzLabel;

        return $this;
    }

    public function getTzOffset(): ?float
    {
        return $this->tzOffset;
    }

    public function setTzOffset(?float $tzOffset): self
    {
        $this->tzOffset = $tzOffset;

        return $this;
    }

    public function getUpdated(): ?float
    {
        return $this->updated;
    }

    public function setUpdated(?float $updated): self
    {
        $this->updated = $updated;

        return $this;
    }
}
