<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class GroupsCreatePostResponse200
{
    /**
     * @var ObjsGroup
     */
    protected $group;
    /**
     * @var bool
     */
    protected $ok;

    public function getGroup(): ?ObjsGroup
    {
        return $this->group;
    }

    public function setGroup(?ObjsGroup $group): self
    {
        $this->group = $group;

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
}
