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

class GroupsListGetResponse200
{
    /**
     * @var ObjsGroup[]|null
     */
    protected $groups;
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var ObjsResponseMetadata|null
     */
    protected $responseMetadata;

    /**
     * @return ObjsGroup[]|null
     */
    public function getGroups(): ?array
    {
        return $this->groups;
    }

    /**
     * @param ObjsGroup[]|null $groups
     */
    public function setGroups(?array $groups): self
    {
        $this->groups = $groups;

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

    public function getResponseMetadata(): ?ObjsResponseMetadata
    {
        return $this->responseMetadata;
    }

    public function setResponseMetadata(?ObjsResponseMetadata $responseMetadata): self
    {
        $this->responseMetadata = $responseMetadata;

        return $this;
    }
}
