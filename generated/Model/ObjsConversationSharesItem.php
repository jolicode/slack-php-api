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
     * @var string|null
     */
    protected $acceptedUser;
    /**
     * @var bool|null
     */
    protected $isActive;
    /**
     * @var ObjsTeam|null
     */
    protected $team;
    /**
     * @var string|null
     */
    protected $user;

    public function getAcceptedUser(): ?string
    {
        return $this->acceptedUser;
    }

    public function setAcceptedUser(?string $acceptedUser): self
    {
        $this->acceptedUser = $acceptedUser;

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

    public function getTeam(): ?ObjsTeam
    {
        return $this->team;
    }

    public function setTeam(?ObjsTeam $team): self
    {
        $this->team = $team;

        return $this;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(?string $user): self
    {
        $this->user = $user;

        return $this;
    }
}
