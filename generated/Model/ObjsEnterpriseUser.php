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

class ObjsEnterpriseUser
{
    /**
     * @var string|null
     */
    protected $enterpriseId;
    /**
     * @var string|null
     */
    protected $enterpriseName;
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
    protected $isOwner;
    /**
     * @var string[]|null
     */
    protected $teams;

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

    public function getIsOwner(): ?bool
    {
        return $this->isOwner;
    }

    public function setIsOwner(?bool $isOwner): self
    {
        $this->isOwner = $isOwner;

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
}
