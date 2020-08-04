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

class ObjsConversationItem2
{
    /**
     * @var int|null
     */
    protected $created;
    /**
     * @var bool|null
     */
    protected $hasPins;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var bool|null
     */
    protected $isArchived;
    /**
     * @var bool|null
     */
    protected $isExtShared;
    /**
     * @var bool|null
     */
    protected $isFrozen;
    /**
     * @var bool|null
     */
    protected $isIm;
    /**
     * @var bool|null
     */
    protected $isOpen;
    /**
     * @var bool|null
     */
    protected $isOrgShared;
    /**
     * @var bool|null
     */
    protected $isShared;
    /**
     * @var bool|null
     */
    protected $isStarred;
    /**
     * @var bool|null
     */
    protected $isUserDeleted;
    /**
     * @var string|null
     */
    protected $lastRead;
    /**
     * @var mixed|null
     */
    protected $latest;
    /**
     * @var mixed|null
     */
    protected $parentConversation;
    /**
     * @var int|null
     */
    protected $pinCount;
    /**
     * @var float|null
     */
    protected $priority;
    /**
     * @var ObjsConversationItem2SharesItem[]|null
     */
    protected $shares;
    /**
     * @var int|null
     */
    protected $unreadCount;
    /**
     * @var int|null
     */
    protected $unreadCountDisplay;
    /**
     * @var string|null
     */
    protected $user;
    /**
     * @var int|null
     */
    protected $version;

    public function getCreated(): ?int
    {
        return $this->created;
    }

    public function setCreated(?int $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getHasPins(): ?bool
    {
        return $this->hasPins;
    }

    public function setHasPins(?bool $hasPins): self
    {
        $this->hasPins = $hasPins;

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

    public function getIsArchived(): ?bool
    {
        return $this->isArchived;
    }

    public function setIsArchived(?bool $isArchived): self
    {
        $this->isArchived = $isArchived;

        return $this;
    }

    public function getIsExtShared(): ?bool
    {
        return $this->isExtShared;
    }

    public function setIsExtShared(?bool $isExtShared): self
    {
        $this->isExtShared = $isExtShared;

        return $this;
    }

    public function getIsFrozen(): ?bool
    {
        return $this->isFrozen;
    }

    public function setIsFrozen(?bool $isFrozen): self
    {
        $this->isFrozen = $isFrozen;

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

    public function getIsOrgShared(): ?bool
    {
        return $this->isOrgShared;
    }

    public function setIsOrgShared(?bool $isOrgShared): self
    {
        $this->isOrgShared = $isOrgShared;

        return $this;
    }

    public function getIsShared(): ?bool
    {
        return $this->isShared;
    }

    public function setIsShared(?bool $isShared): self
    {
        $this->isShared = $isShared;

        return $this;
    }

    public function getIsStarred(): ?bool
    {
        return $this->isStarred;
    }

    public function setIsStarred(?bool $isStarred): self
    {
        $this->isStarred = $isStarred;

        return $this;
    }

    public function getIsUserDeleted(): ?bool
    {
        return $this->isUserDeleted;
    }

    public function setIsUserDeleted(?bool $isUserDeleted): self
    {
        $this->isUserDeleted = $isUserDeleted;

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

    /**
     * @return mixed
     */
    public function getLatest()
    {
        return $this->latest;
    }

    /**
     * @param mixed $latest
     */
    public function setLatest($latest): self
    {
        $this->latest = $latest;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getParentConversation()
    {
        return $this->parentConversation;
    }

    /**
     * @param mixed $parentConversation
     */
    public function setParentConversation($parentConversation): self
    {
        $this->parentConversation = $parentConversation;

        return $this;
    }

    public function getPinCount(): ?int
    {
        return $this->pinCount;
    }

    public function setPinCount(?int $pinCount): self
    {
        $this->pinCount = $pinCount;

        return $this;
    }

    public function getPriority(): ?float
    {
        return $this->priority;
    }

    public function setPriority(?float $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * @return ObjsConversationItem2SharesItem[]|null
     */
    public function getShares(): ?array
    {
        return $this->shares;
    }

    /**
     * @param ObjsConversationItem2SharesItem[]|null $shares
     */
    public function setShares(?array $shares): self
    {
        $this->shares = $shares;

        return $this;
    }

    public function getUnreadCount(): ?int
    {
        return $this->unreadCount;
    }

    public function setUnreadCount(?int $unreadCount): self
    {
        $this->unreadCount = $unreadCount;

        return $this;
    }

    public function getUnreadCountDisplay(): ?int
    {
        return $this->unreadCountDisplay;
    }

    public function setUnreadCountDisplay(?int $unreadCountDisplay): self
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

    public function getVersion(): ?int
    {
        return $this->version;
    }

    public function setVersion(?int $version): self
    {
        $this->version = $version;

        return $this;
    }
}
