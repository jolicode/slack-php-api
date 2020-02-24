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

class AppsPermissionsResourcesListGetResponse200 extends \ArrayObject
{
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var AppsPermissionsResourcesListGetResponse200ResourcesItem[]|null
     */
    protected $resources;
    /**
     * @var AppsPermissionsResourcesListGetResponse200ResponseMetadata|null
     */
    protected $responseMetadata;

    public function getOk(): ?bool
    {
        return $this->ok;
    }

    public function setOk(?bool $ok): self
    {
        $this->ok = $ok;

        return $this;
    }

    /**
     * @return AppsPermissionsResourcesListGetResponse200ResourcesItem[]|null
     */
    public function getResources(): ?array
    {
        return $this->resources;
    }

    /**
     * @param AppsPermissionsResourcesListGetResponse200ResourcesItem[]|null $resources
     */
    public function setResources(?array $resources): self
    {
        $this->resources = $resources;

        return $this;
    }

    public function getResponseMetadata(): ?AppsPermissionsResourcesListGetResponse200ResponseMetadata
    {
        return $this->responseMetadata;
    }

    public function setResponseMetadata(?AppsPermissionsResourcesListGetResponse200ResponseMetadata $responseMetadata): self
    {
        $this->responseMetadata = $responseMetadata;

        return $this;
    }
}
