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

class OpenidConnectUserInfoGetResponse200
{
    /**
     * @var int|null
     */
    protected $cacheTs;
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var ObjsResponseMetadata|null
     */
    protected $responseMetadata;

    public function getCacheTs(): ?int
    {
        return $this->cacheTs;
    }

    public function setCacheTs(?int $cacheTs): self
    {
        $this->cacheTs = $cacheTs;

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
