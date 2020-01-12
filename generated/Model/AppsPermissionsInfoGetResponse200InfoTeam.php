<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class AppsPermissionsInfoGetResponse200InfoTeam
{
    /**
     * @var ObjsResources
     */
    protected $resources;
    /**
     * @var string[]
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
