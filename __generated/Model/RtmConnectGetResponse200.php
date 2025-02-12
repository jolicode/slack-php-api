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

class RtmConnectGetResponse200
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var RtmConnectGetResponse200Self|null
     */
    protected $self;
    /**
     * @var RtmConnectGetResponse200Team|null
     */
    protected $team;
    /**
     * @var string|null
     */
    protected $url;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
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

    public function getSelf(): ?RtmConnectGetResponse200Self
    {
        return $this->self;
    }

    public function setSelf(?RtmConnectGetResponse200Self $self): self
    {
        $this->initialized['self'] = true;
        $this->self = $self;

        return $this;
    }

    public function getTeam(): ?RtmConnectGetResponse200Team
    {
        return $this->team;
    }

    public function setTeam(?RtmConnectGetResponse200Team $team): self
    {
        $this->initialized['team'] = true;
        $this->team = $team;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }
}
