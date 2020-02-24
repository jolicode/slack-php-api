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
        $this->ids = $ids;

        return $this;
    }

    public function getWildcard(): ?bool
    {
        return $this->wildcard;
    }

    public function setWildcard(?bool $wildcard): self
    {
        $this->wildcard = $wildcard;

        return $this;
    }
}
