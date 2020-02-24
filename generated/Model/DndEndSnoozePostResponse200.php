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

class DndEndSnoozePostResponse200
{
    /**
     * @var bool|null
     */
    protected $dndEnabled;
    /**
     * @var int|null
     */
    protected $nextDndEndTs;
    /**
     * @var int|null
     */
    protected $nextDndStartTs;
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var bool|null
     */
    protected $snoozeEnabled;

    public function getDndEnabled(): ?bool
    {
        return $this->dndEnabled;
    }

    public function setDndEnabled(?bool $dndEnabled): self
    {
        $this->dndEnabled = $dndEnabled;

        return $this;
    }

    public function getNextDndEndTs(): ?int
    {
        return $this->nextDndEndTs;
    }

    public function setNextDndEndTs(?int $nextDndEndTs): self
    {
        $this->nextDndEndTs = $nextDndEndTs;

        return $this;
    }

    public function getNextDndStartTs(): ?int
    {
        return $this->nextDndStartTs;
    }

    public function setNextDndStartTs(?int $nextDndStartTs): self
    {
        $this->nextDndStartTs = $nextDndStartTs;

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

    public function getSnoozeEnabled(): ?bool
    {
        return $this->snoozeEnabled;
    }

    public function setSnoozeEnabled(?bool $snoozeEnabled): self
    {
        $this->snoozeEnabled = $snoozeEnabled;

        return $this;
    }
}
