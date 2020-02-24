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

class UsergroupsUsersUpdatePostResponse200
{
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var ObjsSubteam|null
     */
    protected $usergroup;

    public function getOk(): ?bool
    {
        return $this->ok;
    }

    public function setOk(?bool $ok): self
    {
        $this->ok = $ok;

        return $this;
    }

    public function getUsergroup(): ?ObjsSubteam
    {
        return $this->usergroup;
    }

    public function setUsergroup(?ObjsSubteam $usergroup): self
    {
        $this->usergroup = $usergroup;

        return $this;
    }
}
