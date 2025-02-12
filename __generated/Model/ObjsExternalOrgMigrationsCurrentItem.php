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

class ObjsExternalOrgMigrationsCurrentItem
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var int|null
     */
    protected $dateStarted;
    /**
     * @var string|null
     */
    protected $teamId;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getDateStarted(): ?int
    {
        return $this->dateStarted;
    }

    public function setDateStarted(?int $dateStarted): self
    {
        $this->initialized['dateStarted'] = true;
        $this->dateStarted = $dateStarted;

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
}
