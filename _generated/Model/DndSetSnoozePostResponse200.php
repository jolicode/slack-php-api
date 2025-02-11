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

class DndSetSnoozePostResponse200
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var bool|null
     */
    protected $snoozeEnabled;
    /**
     * @var int|null
     */
    protected $snoozeEndtime;
    /**
     * @var int|null
     */
    protected $snoozeRemaining;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
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

    public function getSnoozeEnabled(): ?bool
    {
        return $this->snoozeEnabled;
    }

    public function setSnoozeEnabled(?bool $snoozeEnabled): self
    {
        $this->initialized['snoozeEnabled'] = true;
        $this->snoozeEnabled = $snoozeEnabled;

        return $this;
    }

    public function getSnoozeEndtime(): ?int
    {
        return $this->snoozeEndtime;
    }

    public function setSnoozeEndtime(?int $snoozeEndtime): self
    {
        $this->initialized['snoozeEndtime'] = true;
        $this->snoozeEndtime = $snoozeEndtime;

        return $this;
    }

    public function getSnoozeRemaining(): ?int
    {
        return $this->snoozeRemaining;
    }

    public function setSnoozeRemaining(?int $snoozeRemaining): self
    {
        $this->initialized['snoozeRemaining'] = true;
        $this->snoozeRemaining = $snoozeRemaining;

        return $this;
    }
}
