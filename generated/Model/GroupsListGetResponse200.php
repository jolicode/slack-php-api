<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class GroupsListGetResponse200
{
    /**
     * @var ObjsGroup[]
     */
    protected $groups;
    /**
     * @var bool
     */
    protected $ok;

    /**
     * @return ObjsGroup[]|null
     */
    public function getGroups(): ?array
    {
        return $this->groups;
    }

    /**
     * @param ObjsGroup[]|null $groups
     *
     * @return self
     */
    public function setGroups(?array $groups): self
    {
        $this->groups = $groups;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getOk(): ?bool
    {
        return $this->ok;
    }

    /**
     * @param bool|null $ok
     *
     * @return self
     */
    public function setOk(?bool $ok): self
    {
        $this->ok = $ok;

        return $this;
    }
}
