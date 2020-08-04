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

class ConversationsOpenPostResponse200ChannelItem1
{
    /**
     * @var string|null
     */
    protected $created;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var bool|null
     */
    protected $isIm;
    /**
     * @var bool|null
     */
    protected $isOpen;
    /**
     * @var string|null
     */
    protected $lastRead;
    /**
     * @var ObjsMessage|null
     */
    protected $latest;
    /**
     * @var float|null
     */
    protected $unreadCount;
    /**
     * @var float|null
     */
    protected $unreadCountDisplay;
    /**
     * @var string|null
     */
    protected $user;

    public function getCreated(): ?string
    {
        return $this->created;
    }

    public function setCreated(?string $created): self
    {
        $this->created = $created;

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

    public function getIsIm(): ?bool
    {
        return $this->isIm;
    }

    public function setIsIm(?bool $isIm): self
    {
        $this->isIm = $isIm;

        return $this;
    }

    public function getIsOpen(): ?bool
    {
        return $this->isOpen;
    }

    public function setIsOpen(?bool $isOpen): self
    {
        $this->isOpen = $isOpen;

        return $this;
    }

    public function getLastRead(): ?string
    {
        return $this->lastRead;
    }

    public function setLastRead(?string $lastRead): self
    {
        $this->lastRead = $lastRead;

        return $this;
    }

    public function getLatest(): ?ObjsMessage
    {
        return $this->latest;
    }

    public function setLatest(?ObjsMessage $latest): self
    {
        $this->latest = $latest;

        return $this;
    }

    public function getUnreadCount(): ?float
    {
        return $this->unreadCount;
    }

    public function setUnreadCount(?float $unreadCount): self
    {
        $this->unreadCount = $unreadCount;

        return $this;
    }

    public function getUnreadCountDisplay(): ?float
    {
        return $this->unreadCountDisplay;
    }

    public function setUnreadCountDisplay(?float $unreadCountDisplay): self
    {
        $this->unreadCountDisplay = $unreadCountDisplay;

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
