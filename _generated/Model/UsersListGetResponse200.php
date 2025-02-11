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

class UsersListGetResponse200
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var int|null
     */
    protected $cacheTs;
    /**
     * @var list<ObjsUser>|null
     */
    protected $members;
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var ObjsResponseMetadata|null
     */
    protected $responseMetadata;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getCacheTs(): ?int
    {
        return $this->cacheTs;
    }

    public function setCacheTs(?int $cacheTs): self
    {
        $this->initialized['cacheTs'] = true;
        $this->cacheTs = $cacheTs;

        return $this;
    }

    /**
     * @return list<ObjsUser>|null
     */
    public function getMembers(): ?array
    {
        return $this->members;
    }

    /**
     * @param list<ObjsUser>|null $members
     */
    public function setMembers(?array $members): self
    {
        $this->initialized['members'] = true;
        $this->members = $members;

        return $this;
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

    public function getResponseMetadata(): ?ObjsResponseMetadata
    {
        return $this->responseMetadata;
    }

    public function setResponseMetadata(?ObjsResponseMetadata $responseMetadata): self
    {
        $this->initialized['responseMetadata'] = true;
        $this->responseMetadata = $responseMetadata;

        return $this;
    }
}
