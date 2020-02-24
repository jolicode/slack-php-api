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

class ObjsReminder
{
    /**
     * @var int|null
     */
    protected $completeTs;
    /**
     * @var string|null
     */
    protected $creator;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var bool|null
     */
    protected $recurring;
    /**
     * @var string|null
     */
    protected $text;
    /**
     * @var int|null
     */
    protected $time;
    /**
     * @var string|null
     */
    protected $user;

    public function getCompleteTs(): ?int
    {
        return $this->completeTs;
    }

    public function setCompleteTs(?int $completeTs): self
    {
        $this->completeTs = $completeTs;

        return $this;
    }

    public function getCreator(): ?string
    {
        return $this->creator;
    }

    public function setCreator(?string $creator): self
    {
        $this->creator = $creator;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getRecurring(): ?bool
    {
        return $this->recurring;
    }

    public function setRecurring(?bool $recurring): self
    {
        $this->recurring = $recurring;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getTime(): ?int
    {
        return $this->time;
    }

    public function setTime(?int $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(?string $user): self
    {
        $this->user = $user;

        return $this;
    }
}
