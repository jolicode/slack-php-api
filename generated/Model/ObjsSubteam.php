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

class ObjsSubteam
{
    /**
     * @var bool|null
     */
    protected $autoProvision;
    /**
     * @var mixed|null
     */
    protected $autoType;
    /**
     * @var int|null
     */
    protected $channelCount;
    /**
     * @var string|null
     */
    protected $createdBy;
    /**
     * @var int|null
     */
    protected $dateCreate;
    /**
     * @var int|null
     */
    protected $dateDelete;
    /**
     * @var int|null
     */
    protected $dateUpdate;
    /**
     * @var mixed|null
     */
    protected $deletedBy;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var string|null
     */
    protected $enterpriseSubteamId;
    /**
     * @var string|null
     */
    protected $handle;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var bool|null
     */
    protected $isExternal;
    /**
     * @var bool|null
     */
    protected $isSubteam;
    /**
     * @var bool|null
     */
    protected $isUsergroup;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var ObjsSubteamPrefs|null
     */
    protected $prefs;
    /**
     * @var string|null
     */
    protected $teamId;
    /**
     * @var string|null
     */
    protected $updatedBy;
    /**
     * @var int|null
     */
    protected $userCount;
    /**
     * @var string[]|null
     */
    protected $users;

    public function getAutoProvision(): ?bool
    {
        return $this->autoProvision;
    }

    public function setAutoProvision(?bool $autoProvision): self
    {
        $this->autoProvision = $autoProvision;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAutoType()
    {
        return $this->autoType;
    }

    /**
     * @param mixed $autoType
     */
    public function setAutoType($autoType): self
    {
        $this->autoType = $autoType;

        return $this;
    }

    public function getChannelCount(): ?int
    {
        return $this->channelCount;
    }

    public function setChannelCount(?int $channelCount): self
    {
        $this->channelCount = $channelCount;

        return $this;
    }

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;

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

    public function getDateDelete(): ?int
    {
        return $this->dateDelete;
    }

    public function setDateDelete(?int $dateDelete): self
    {
        $this->dateDelete = $dateDelete;

        return $this;
    }

    public function getDateUpdate(): ?int
    {
        return $this->dateUpdate;
    }

    public function setDateUpdate(?int $dateUpdate): self
    {
        $this->dateUpdate = $dateUpdate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeletedBy()
    {
        return $this->deletedBy;
    }

    /**
     * @param mixed $deletedBy
     */
    public function setDeletedBy($deletedBy): self
    {
        $this->deletedBy = $deletedBy;

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

    public function getEnterpriseSubteamId(): ?string
    {
        return $this->enterpriseSubteamId;
    }

    public function setEnterpriseSubteamId(?string $enterpriseSubteamId): self
    {
        $this->enterpriseSubteamId = $enterpriseSubteamId;

        return $this;
    }

    public function getHandle(): ?string
    {
        return $this->handle;
    }

    public function setHandle(?string $handle): self
    {
        $this->handle = $handle;

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

    public function getIsExternal(): ?bool
    {
        return $this->isExternal;
    }

    public function setIsExternal(?bool $isExternal): self
    {
        $this->isExternal = $isExternal;

        return $this;
    }

    public function getIsSubteam(): ?bool
    {
        return $this->isSubteam;
    }

    public function setIsSubteam(?bool $isSubteam): self
    {
        $this->isSubteam = $isSubteam;

        return $this;
    }

    public function getIsUsergroup(): ?bool
    {
        return $this->isUsergroup;
    }

    public function setIsUsergroup(?bool $isUsergroup): self
    {
        $this->isUsergroup = $isUsergroup;

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

    public function getPrefs(): ?ObjsSubteamPrefs
    {
        return $this->prefs;
    }

    public function setPrefs(?ObjsSubteamPrefs $prefs): self
    {
        $this->prefs = $prefs;

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

    public function getUpdatedBy(): ?string
    {
        return $this->updatedBy;
    }

    public function setUpdatedBy(?string $updatedBy): self
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    public function getUserCount(): ?int
    {
        return $this->userCount;
    }

    public function setUserCount(?int $userCount): self
    {
        $this->userCount = $userCount;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getUsers(): ?array
    {
        return $this->users;
    }

    /**
     * @param string[]|null $users
     */
    public function setUsers(?array $users): self
    {
        $this->users = $users;

        return $this;
    }
}
