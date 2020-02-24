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

class UsergroupsUsersListGetResponse200
{
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var string[]|null
     */
    protected $users;

    public function getOk(): ?bool
    {
        return $this->ok;
    }

    public function setOk(?bool $ok): self
    {
        $this->ok = $ok;

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
