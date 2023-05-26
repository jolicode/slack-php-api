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

class AppsPermissionsInfoGetResponse200InfoMpim
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var ObjsResources|null
     */
    protected $resources;
    /**
     * @var string[]|null
     */
    protected $scopes;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getResources(): ?ObjsResources
    {
        return $this->resources;
    }

    public function setResources(?ObjsResources $resources): self
    {
        $this->initialized['resources'] = true;
        $this->resources = $resources;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getScopes(): ?array
    {
        return $this->scopes;
    }

    /**
     * @param string[]|null $scopes
     */
    public function setScopes(?array $scopes): self
    {
        $this->initialized['scopes'] = true;
        $this->scopes = $scopes;

        return $this;
    }
}
