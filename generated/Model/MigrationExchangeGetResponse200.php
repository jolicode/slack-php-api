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
     * @var string|null
     */
    protected $enterpriseId;
    /**
     * @var string[]|null
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
     * @var mixed[]|null
     */
    protected $userIdMap;

    public function getEnterpriseId(): ?string
    {
        return $this->enterpriseId;
    }

    public function setEnterpriseId(?string $enterpriseId): self
    {
        $this->enterpriseId = $enterpriseId;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getInvalidUserIds(): ?array
    {
        return $this->invalidUserIds;
    }

    /**
     * @param string[]|null $invalidUserIds
     */
    public function setInvalidUserIds(?array $invalidUserIds): self
    {
        $this->invalidUserIds = $invalidUserIds;

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

    public function getTeamId(): ?string
    {
        return $this->teamId;
    }

    public function setTeamId(?string $teamId): self
    {
        $this->teamId = $teamId;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getUserIdMap(): ?iterable
    {
        return $this->userIdMap;
    }

    /**
     * @param mixed[]|null $userIdMap
     */
    public function setUserIdMap(?iterable $userIdMap): self
    {
        $this->userIdMap = $userIdMap;

        return $this;
    }
}
