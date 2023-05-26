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

class UsergroupsCreatePostResponse200
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
     * @var ObjsSubteam|null
     */
    protected $usergroup;

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

    public function getUsergroup(): ?ObjsSubteam
    {
        return $this->usergroup;
    }

    public function setUsergroup(?ObjsSubteam $usergroup): self
    {
        $this->initialized['usergroup'] = true;
        $this->usergroup = $usergroup;

        return $this;
    }
}
