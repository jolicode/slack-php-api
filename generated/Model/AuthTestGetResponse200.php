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

class AuthTestGetResponse200
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $botId;
    /**
     * @var bool|null
     */
    protected $isEnterpriseInstall;
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var string|null
     */
    protected $team;
    /**
     * @var string|null
     */
    protected $teamId;
    /**
     * @var string|null
     */
    protected $url;
    /**
     * @var string|null
     */
    protected $user;
    /**
     * @var string|null
     */
    protected $userId;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getBotId(): ?string
    {
        return $this->botId;
    }

    public function setBotId(?string $botId): self
    {
        $this->initialized['botId'] = true;
        $this->botId = $botId;

        return $this;
    }

    public function getIsEnterpriseInstall(): ?bool
    {
        return $this->isEnterpriseInstall;
    }

    public function setIsEnterpriseInstall(?bool $isEnterpriseInstall): self
    {
        $this->initialized['isEnterpriseInstall'] = true;
        $this->isEnterpriseInstall = $isEnterpriseInstall;

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

    public function getTeam(): ?string
    {
        return $this->team;
    }

    public function setTeam(?string $team): self
    {
        $this->initialized['team'] = true;
        $this->team = $team;

        return $this;
    }

    public function getTeamId(): ?string
    {
        return $this->teamId;
    }

    public function setTeamId(?string $teamId): self
    {
        $this->initialized['teamId'] = true;
        $this->teamId = $teamId;

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

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(?string $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;

        return $this;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(?string $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;

        return $this;
    }
}
