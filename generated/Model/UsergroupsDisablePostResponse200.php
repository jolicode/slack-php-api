<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class UsergroupsDisablePostResponse200
{
    /**
     * @var bool
     */
    protected $ok;
    /**
     * @var ObjsSubteam
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
