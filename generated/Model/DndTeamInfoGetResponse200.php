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

class DndTeamInfoGetResponse200
{
    /**
     * @var bool|null
     */
    protected $cached;
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var mixed|null
     */
    protected $users;

    public function getCached(): ?bool
    {
        return $this->cached;
    }

    public function setCached(?bool $cached): self
    {
        $this->cached = $cached;

        return $this;
    }

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
     * @return mixed
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param mixed $users
     */
    public function setUsers($users): self
    {
        $this->users = $users;

        return $this;
    }
}
