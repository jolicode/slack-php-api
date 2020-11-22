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

class ObjsExternalOrgMigrations
{
    /**
     * @var ObjsExternalOrgMigrationsCurrentItem[]|null
     */
    protected $current;
    /**
     * @var int|null
     */
    protected $dateUpdated;

    /**
     * @return ObjsExternalOrgMigrationsCurrentItem[]|null
     */
    public function getCurrent(): ?array
    {
        return $this->current;
    }

    /**
     * @param ObjsExternalOrgMigrationsCurrentItem[]|null $current
     */
    public function setCurrent(?array $current): self
    {
        $this->current = $current;

        return $this;
    }

    public function getDateUpdated(): ?int
    {
        return $this->dateUpdated;
    }

    public function setDateUpdated(?int $dateUpdated): self
    {
        $this->dateUpdated = $dateUpdated;

        return $this;
    }
}
