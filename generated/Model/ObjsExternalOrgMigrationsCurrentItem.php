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
     * @var int|null
     */
    protected $dateStarted;
    /**
     * @var string|null
     */
    protected $teamId;

    public function getDateStarted(): ?int
    {
        return $this->dateStarted;
    }

    public function setDateStarted(?int $dateStarted): self
    {
        $this->dateStarted = $dateStarted;

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
}
