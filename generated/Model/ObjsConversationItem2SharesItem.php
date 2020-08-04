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

class ObjsConversationItem2SharesItem
{
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

    public function getDateCreate(): ?int
    {
        return $this->dateCreate;
    }

    public function setDateCreate(?int $dateCreate): self
    {
        $this->dateCreate = $dateCreate;

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

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;

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

    public function getTeam(): ?ObjsTeam
    {
        return $this->team;
    }

    public function setTeam(?ObjsTeam $team): self
    {
        $this->team = $team;

        return $this;
    }
}
