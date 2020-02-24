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

class TeamAccessLogsGetResponse200LoginsItem
{
    /**
     * @var int|null
     */
    protected $count;
    /**
     * @var string|null
     */
    protected $country;
    /**
     * @var int|null
     */
    protected $dateFirst;
    /**
     * @var int|null
     */
    protected $dateLast;
    /**
     * @var string|null
     */
    protected $ip;
    /**
     * @var string|null
     */
    protected $isp;
    /**
     * @var string|null
     */
    protected $region;
    /**
     * @var string|null
     */
    protected $userAgent;
    /**
     * @var string|null
     */
    protected $userId;
    /**
     * @var string|null
     */
    protected $username;

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(?int $count): self
    {
        $this->count = $count;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getDateFirst(): ?int
    {
        return $this->dateFirst;
    }

    public function setDateFirst(?int $dateFirst): self
    {
        $this->dateFirst = $dateFirst;

        return $this;
    }

    public function getDateLast(): ?int
    {
        return $this->dateLast;
    }

    public function setDateLast(?int $dateLast): self
    {
        $this->dateLast = $dateLast;

        return $this;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(?string $ip): self
    {
        $this->ip = $ip;

        return $this;
    }

    public function getIsp(): ?string
    {
        return $this->isp;
    }

    public function setIsp(?string $isp): self
    {
        $this->isp = $isp;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(?string $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }

    public function setUserAgent(?string $userAgent): self
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(?string $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): self
    {
        $this->username = $username;

        return $this;
    }
}
