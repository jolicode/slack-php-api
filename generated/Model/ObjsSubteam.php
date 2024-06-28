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
     * @var array
     */
    protected $initialized = [];
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
     * @var list<string>|null
     */
    protected $users;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getAutoProvision(): ?bool
    {
        return $this->autoProvision;
    }

    public function setAutoProvision(?bool $autoProvision): self
    {
        $this->initialized['autoProvision'] = true;
        $this->autoProvision = $autoProvision;

        return $this;
    }

    public function getAutoType()
    {
        return $this->autoType;
    }

    public function setAutoType($autoType): self
    {
        $this->initialized['autoType'] = true;
        $this->autoType = $autoType;

        return $this;
    }

    public function getChannelCount(): ?int
    {
        return $this->channelCount;
    }

    public function setChannelCount(?int $channelCount): self
    {
        $this->initialized['channelCount'] = true;
        $this->channelCount = $channelCount;

        return $this;
    }

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): self
    {
        $this->initialized['createdBy'] = true;
        $this->createdBy = $createdBy;

        return $this;
    }

    public function getDateCreate(): ?int
    {
        return $this->dateCreate;
    }

    public function setDateCreate(?int $dateCreate): self
    {
        $this->initialized['dateCreate'] = true;
        $this->dateCreate = $dateCreate;

        return $this;
    }

    public function getDateDelete(): ?int
    {
        return $this->dateDelete;
    }

    public function setDateDelete(?int $dateDelete): self
    {
        $this->initialized['dateDelete'] = true;
        $this->dateDelete = $dateDelete;

        return $this;
    }

    public function getDateUpdate(): ?int
    {
        return $this->dateUpdate;
    }

    public function setDateUpdate(?int $dateUpdate): self
    {
        $this->initialized['dateUpdate'] = true;
        $this->dateUpdate = $dateUpdate;

        return $this;
    }

    public function getDeletedBy()
    {
        return $this->deletedBy;
    }

    public function setDeletedBy($deletedBy): self
    {
        $this->initialized['deletedBy'] = true;
        $this->deletedBy = $deletedBy;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    public function getEnterpriseSubteamId(): ?string
    {
        return $this->enterpriseSubteamId;
    }

    public function setEnterpriseSubteamId(?string $enterpriseSubteamId): self
    {
        $this->initialized['enterpriseSubteamId'] = true;
        $this->enterpriseSubteamId = $enterpriseSubteamId;

        return $this;
    }

    public function getHandle(): ?string
    {
        return $this->handle;
    }

    public function setHandle(?string $handle): self
    {
        $this->initialized['handle'] = true;
        $this->handle = $handle;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getIsExternal(): ?bool
    {
        return $this->isExternal;
    }

    public function setIsExternal(?bool $isExternal): self
    {
        $this->initialized['isExternal'] = true;
        $this->isExternal = $isExternal;

        return $this;
    }

    public function getIsSubteam(): ?bool
    {
        return $this->isSubteam;
    }

    public function setIsSubteam(?bool $isSubteam): self
    {
        $this->initialized['isSubteam'] = true;
        $this->isSubteam = $isSubteam;

        return $this;
    }

    public function getIsUsergroup(): ?bool
    {
        return $this->isUsergroup;
    }

    public function setIsUsergroup(?bool $isUsergroup): self
    {
        $this->initialized['isUsergroup'] = true;
        $this->isUsergroup = $isUsergroup;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getPrefs(): ?ObjsSubteamPrefs
    {
        return $this->prefs;
    }

    public function setPrefs(?ObjsSubteamPrefs $prefs): self
    {
        $this->initialized['prefs'] = true;
        $this->prefs = $prefs;

        return $this;
    }

    public function getTeamId(): ?string
    {
        return $this->teamId;
    }

    public function setTeamId(?string $teamId): self
    {
        $this->initialized['teamId'] = true;
        $this->teamId = $teamId;

        return $this;
    }

    public function getUpdatedBy(): ?string
    {
        return $this->updatedBy;
    }

    public function setUpdatedBy(?string $updatedBy): self
    {
        $this->initialized['updatedBy'] = true;
        $this->updatedBy = $updatedBy;

        return $this;
    }

    public function getUserCount(): ?int
    {
        return $this->userCount;
    }

    public function setUserCount(?int $userCount): self
    {
        $this->initialized['userCount'] = true;
        $this->userCount = $userCount;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getUsers(): ?array
    {
        return $this->users;
    }

    /**
     * @param list<string>|null $users
     */
    public function setUsers(?array $users): self
    {
        $this->initialized['users'] = true;
        $this->users = $users;

        return $this;
    }
}
