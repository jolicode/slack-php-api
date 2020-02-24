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

class UsersIdentityGetResponse200Item3
{
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var UsersIdentityGetResponse200Item3Team|null
     */
    protected $team;
    /**
     * @var UsersIdentityGetResponse200Item3User|null
     */
    protected $user;

    public function getOk(): ?bool
    {
        return $this->ok;
    }

    public function setOk(?bool $ok): self
    {
        $this->ok = $ok;

        return $this;
    }

    public function getTeam(): ?UsersIdentityGetResponse200Item3Team
    {
        return $this->team;
    }

    public function setTeam(?UsersIdentityGetResponse200Item3Team $team): self
    {
        $this->team = $team;

        return $this;
    }

    public function getUser(): ?UsersIdentityGetResponse200Item3User
    {
        return $this->user;
    }

    public function setUser(?UsersIdentityGetResponse200Item3User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
