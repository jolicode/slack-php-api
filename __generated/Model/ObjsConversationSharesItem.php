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

class ObjsConversationSharesItem
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $acceptedUser;
    /**
     * @var int|null
     */
    protected $dateCreate;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var bool|null
     */
    protected $isActive;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var ObjsTeam|null
     */
    protected $team;
    /**
     * @var string|null
     */
    protected $user;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getAcceptedUser(): ?string
    {
        return $this->acceptedUser;
    }

    public function setAcceptedUser(?string $acceptedUser): self
    {
        $this->initialized['acceptedUser'] = true;
        $this->acceptedUser = $acceptedUser;

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

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(?bool $isActive): self
    {
        $this->initialized['isActive'] = true;
        $this->isActive = $isActive;

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

    public function getTeam(): ?ObjsTeam
    {
        return $this->team;
    }

    public function setTeam(?ObjsTeam $team): self
    {
        $this->initialized['team'] = true;
        $this->team = $team;

        return $this;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(?string $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;

        return $this;
    }
}
