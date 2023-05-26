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

class ObjsResources
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var mixed[]|null
     */
    protected $excludedIds;
    /**
     * @var mixed[]|null
     */
    protected $ids;
    /**
     * @var bool|null
     */
    protected $wildcard;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return mixed[]|null
     */
    public function getExcludedIds(): ?array
    {
        return $this->excludedIds;
    }

    /**
     * @param mixed[]|null $excludedIds
     */
    public function setExcludedIds(?array $excludedIds): self
    {
        $this->initialized['excludedIds'] = true;
        $this->excludedIds = $excludedIds;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getIds(): ?array
    {
        return $this->ids;
    }

    /**
     * @param mixed[]|null $ids
     */
    public function setIds(?array $ids): self
    {
        $this->initialized['ids'] = true;
        $this->ids = $ids;

        return $this;
    }

    public function getWildcard(): ?bool
    {
        return $this->wildcard;
    }

    public function setWildcard(?bool $wildcard): self
    {
        $this->initialized['wildcard'] = true;
        $this->wildcard = $wildcard;

        return $this;
    }
}
