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

class OauthAccessGetResponse200
{
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var string|null
     */
    protected $accessToken;
    /**
     * @var string|null
     */
    protected $scope;
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
    protected $enterpriseId;
    /**
     * @var OauthAccessGetResponse200IncomingWebhook|null
     */
    protected $incomingWebhook;
    /**
     * @var OauthAccessGetResponse200Bot|null
     */
    protected $bot;

    public function getOk(): ?bool
    {
        return $this->ok;
    }

    public function setOk(?bool $ok): self
    {
        $this->ok = $ok;

        return $this;
    }

    public function getAccessToken(): ?string
    {
        return $this->accessToken;
    }

    public function setAccessToken(?string $accessToken): self
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    public function getScope(): ?string
    {
        return $this->scope;
    }

    public function setScope(?string $scope): self
    {
        $this->scope = $scope;

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

    public function getEnterpriseId(): ?string
    {
        return $this->enterpriseId;
    }

    public function setEnterpriseId(?string $enterpriseId): self
    {
        $this->enterpriseId = $enterpriseId;

        return $this;
    }

    public function getIncomingWebhook(): ?OauthAccessGetResponse200IncomingWebhook
    {
        return $this->incomingWebhook;
    }

    public function setIncomingWebhook(?OauthAccessGetResponse200IncomingWebhook $incomingWebhook): self
    {
        $this->incomingWebhook = $incomingWebhook;

        return $this;
    }

    public function getBot(): ?OauthAccessGetResponse200Bot
    {
        return $this->bot;
    }

    public function setBot(?OauthAccessGetResponse200Bot $bot): self
    {
        $this->bot = $bot;

        return $this;
    }
}
