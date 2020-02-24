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

class AppsPermissionsInfoGetResponse200InfoIm
{
    /**
     * @var ObjsResources|null
     */
    protected $resources;
    /**
     * @var string[]|null
     */
    protected $scopes;

    public function getResources(): ?ObjsResources
    {
        return $this->resources;
    }

    public function setResources(?ObjsResources $resources): self
    {
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
        $this->scopes = $scopes;

        return $this;
    }
}
