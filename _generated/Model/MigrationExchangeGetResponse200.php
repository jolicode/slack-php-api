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

class MigrationExchangeGetResponse200 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $enterpriseId;
    /**
     * @var list<string>|null
     */
    protected $invalidUserIds;
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var string|null
     */
    protected $teamId;
    /**
     * @var array<string, mixed>|null
     */
    protected $userIdMap;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getEnterpriseId(): ?string
    {
        return $this->enterpriseId;
    }

    public function setEnterpriseId(?string $enterpriseId): self
    {
        $this->initialized['enterpriseId'] = true;
        $this->enterpriseId = $enterpriseId;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getInvalidUserIds(): ?array
    {
        return $this->invalidUserIds;
    }

    /**
     * @param list<string>|null $invalidUserIds
     */
    public function setInvalidUserIds(?array $invalidUserIds): self
    {
        $this->initialized['invalidUserIds'] = true;
        $this->invalidUserIds = $invalidUserIds;

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

    /**
     * @return array<string, mixed>|null
     */
    public function getUserIdMap(): ?iterable
    {
        return $this->userIdMap;
    }

    /**
     * @param array<string, mixed>|null $userIdMap
     */
    public function setUserIdMap(?iterable $userIdMap): self
    {
        $this->initialized['userIdMap'] = true;
        $this->userIdMap = $userIdMap;

        return $this;
    }
}
