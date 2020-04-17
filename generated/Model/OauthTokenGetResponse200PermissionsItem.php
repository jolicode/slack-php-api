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

class OauthTokenGetResponse200PermissionsItem extends \ArrayObject
{
    /**
     * @var string|null
     */
    protected $resourceId;
    /**
     * @var string|null
     */
    protected $resourceType;
    /**
     * @var string[]|null
     */
    protected $scopes;

    public function getResourceId(): ?string
    {
        return $this->resourceId;
    }

    public function setResourceId(?string $resourceId): self
    {
        $this->resourceId = $resourceId;

        return $this;
    }

    public function getResourceType(): ?string
    {
        return $this->resourceType;
    }

    public function setResourceType(?string $resourceType): self
    {
        $this->resourceType = $resourceType;

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
