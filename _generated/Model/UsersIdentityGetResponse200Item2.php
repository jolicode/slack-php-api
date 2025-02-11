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

class UsersIdentityGetResponse200Item2
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var UsersIdentityGetResponse200Item2Team|null
     */
    protected $team;
    /**
     * @var UsersIdentityGetResponse200Item2User|null
     */
    protected $user;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getOk(): ?bool
    {
        return $this->ok;
    }

    public function setOk(?bool $ok): self
    {
        $this->initialized['ok'] = true;
        $this->ok = $ok;

        return $this;
    }

    public function getTeam(): ?UsersIdentityGetResponse200Item2Team
    {
        return $this->team;
    }

    public function setTeam(?UsersIdentityGetResponse200Item2Team $team): self
    {
        $this->initialized['team'] = true;
        $this->team = $team;

        return $this;
    }

    public function getUser(): ?UsersIdentityGetResponse200Item2User
    {
        return $this->user;
    }

    public function setUser(?UsersIdentityGetResponse200Item2User $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;

        return $this;
    }
}
