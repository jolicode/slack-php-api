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

class OauthTokenGetResponse200 extends \ArrayObject
{
    /**
     * @var string|null
     */
    protected $accessToken;
    /**
     * @var string|null
     */
    protected $appId;
    /**
     * @var string|null
     */
    protected $appUserId;
    /**
     * @var string|null
     */
    protected $authorizingUserId;
    /**
     * @var string|null
     */
    protected $installerUserId;
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var OauthTokenGetResponse200PermissionsItem[]|null
     */
    protected $permissions;
    /**
     * @var string|null
     */
    protected $singleChannelId;
    /**
     * @var string|null
     */
    protected $teamId;
    /**
     * @var string|null
     */
    protected $teamName;
    /**
     * @var string|null
     */
    protected $tokenType;

    public function getAccessToken(): ?string
    {
        return $this->accessToken;
    }

    public function setAccessToken(?string $accessToken): self
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    public function getAppId(): ?string
    {
        return $this->appId;
    }

    public function setAppId(?string $appId): self
    {
        $this->appId = $appId;

        return $this;
    }

    public function getAppUserId(): ?string
    {
        return $this->appUserId;
    }

    public function setAppUserId(?string $appUserId): self
    {
        $this->appUserId = $appUserId;

        return $this;
    }

    public function getAuthorizingUserId(): ?string
    {
        return $this->authorizingUserId;
    }

    public function setAuthorizingUserId(?string $authorizingUserId): self
    {
        $this->authorizingUserId = $authorizingUserId;

        return $this;
    }

    public function getInstallerUserId(): ?string
    {
        return $this->installerUserId;
    }

    public function setInstallerUserId(?string $installerUserId): self
    {
        $this->installerUserId = $installerUserId;

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

    /**
     * @return OauthTokenGetResponse200PermissionsItem[]|null
     */
    public function getPermissions(): ?array
    {
        return $this->permissions;
    }

    /**
     * @param OauthTokenGetResponse200PermissionsItem[]|null $permissions
     */
    public function setPermissions(?array $permissions): self
    {
        $this->permissions = $permissions;

        return $this;
    }

    public function getSingleChannelId(): ?string
    {
        return $this->singleChannelId;
    }

    public function setSingleChannelId(?string $singleChannelId): self
    {
        $this->singleChannelId = $singleChannelId;

        return $this;
    }

    public function getTeamId(): ?string
    {
        return $this->teamId;
    }

    public function setTeamId(?string $teamId): self
    {
        $this->teamId = $teamId;

        return $this;
    }

    public function getTeamName(): ?string
    {
        return $this->teamName;
    }

    public function setTeamName(?string $teamName): self
    {
        $this->teamName = $teamName;

        return $this;
    }

    public function getTokenType(): ?string
    {
        return $this->tokenType;
    }

    public function setTokenType(?string $tokenType): self
    {
        $this->tokenType = $tokenType;

        return $this;
    }
}
