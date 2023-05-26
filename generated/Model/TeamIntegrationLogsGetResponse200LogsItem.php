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

class TeamIntegrationLogsGetResponse200LogsItem
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $adminAppId;
    /**
     * @var string|null
     */
    protected $appId;
    /**
     * @var string|null
     */
    protected $appType;
    /**
     * @var string|null
     */
    protected $changeType;
    /**
     * @var string|null
     */
    protected $channel;
    /**
     * @var string|null
     */
    protected $date;
    /**
     * @var string|null
     */
    protected $scope;
    /**
     * @var string|null
     */
    protected $serviceId;
    /**
     * @var string|null
     */
    protected $serviceType;
    /**
     * @var string|null
     */
    protected $userId;
    /**
     * @var string|null
     */
    protected $userName;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getAdminAppId(): ?string
    {
        return $this->adminAppId;
    }

    public function setAdminAppId(?string $adminAppId): self
    {
        $this->initialized['adminAppId'] = true;
        $this->adminAppId = $adminAppId;

        return $this;
    }

    public function getAppId(): ?string
    {
        return $this->appId;
    }

    public function setAppId(?string $appId): self
    {
        $this->initialized['appId'] = true;
        $this->appId = $appId;

        return $this;
    }

    public function getAppType(): ?string
    {
        return $this->appType;
    }

    public function setAppType(?string $appType): self
    {
        $this->initialized['appType'] = true;
        $this->appType = $appType;

        return $this;
    }

    public function getChangeType(): ?string
    {
        return $this->changeType;
    }

    public function setChangeType(?string $changeType): self
    {
        $this->initialized['changeType'] = true;
        $this->changeType = $changeType;

        return $this;
    }

    public function getChannel(): ?string
    {
        return $this->channel;
    }

    public function setChannel(?string $channel): self
    {
        $this->initialized['channel'] = true;
        $this->channel = $channel;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(?string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }

    public function getScope(): ?string
    {
        return $this->scope;
    }

    public function setScope(?string $scope): self
    {
        $this->initialized['scope'] = true;
        $this->scope = $scope;

        return $this;
    }

    public function getServiceId(): ?string
    {
        return $this->serviceId;
    }

    public function setServiceId(?string $serviceId): self
    {
        $this->initialized['serviceId'] = true;
        $this->serviceId = $serviceId;

        return $this;
    }

    public function getServiceType(): ?string
    {
        return $this->serviceType;
    }

    public function setServiceType(?string $serviceType): self
    {
        $this->initialized['serviceType'] = true;
        $this->serviceType = $serviceType;

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

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(?string $userName): self
    {
        $this->initialized['userName'] = true;
        $this->userName = $userName;

        return $this;
    }
}
