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

class ObjsChannel
{
    /**
     * @var string|null
     */
    protected $acceptedUser;
    /**
     * @var int|null
     */
    protected $created;
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
    protected $isArchived;
    /**
     * @var bool|null
     */
    protected $isChannel;
    /**
     * @var bool|null
     */
    protected $isFrozen;
    /**
     * @var bool|null
     */
    protected $isGeneral;
    /**
     * @var bool|null
     */
    protected $isMember;
    /**
     * @var int|null
     */
    protected $isMoved;
    /**
     * @var bool|null
     */
    protected $isMpim;
    /**
     * @var bool|null
     */
    protected $isNonThreadable;
    /**
     * @var bool|null
     */
    protected $isOrgShared;
    /**
     * @var bool|null
     */
    protected $isPendingExtShared;
    /**
     * @var bool|null
     */
    protected $isPrivate;
    /**
     * @var bool|null
     */
    protected $isReadOnly;
    /**
     * @var bool|null
     */
    protected $isShared;
    /**
     * @var bool|null
     */
    protected $isThreadOnly;
    /**
     * @var string|null
     */
    protected $lastRead;
    /**
     * @var mixed|null
     */
    protected $latest;
    /**
     * @var string[]|null
     */
    protected $members;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $nameNormalized;
    /**
     * @var int|null
     */
    protected $numMembers;
    /**
     * @var string[]|null
     */
    protected $pendingShared;
    /**
     * @var string[]|null
     */
    protected $previousNames;
    /**
     * @var float|null
     */
    protected $priority;
    /**
     * @var ObjsChannelPurpose|null
     */
    protected $purpose;
    /**
     * @var ObjsChannelTopic|null
     */
    protected $topic;
    /**
     * @var int|null
     */
    protected $unlinked;
    /**
     * @var int|null
     */
    protected $unreadCount;
    /**
     * @var int|null
     */
    protected $unreadCountDisplay;

    public function getAcceptedUser(): ?string
    {
        return $this->acceptedUser;
    }

    public function setAcceptedUser(?string $acceptedUser): self
    {
        $this->acceptedUser = $acceptedUser;

        return $this;
    }

    public function getCreated(): ?int
    {
        return $this->created;
    }

    public function setCreated(?int $created): self
    {
        $this->created = $created;

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

    public function getIsArchived(): ?bool
    {
        return $this->isArchived;
    }

    public function setIsArchived(?bool $isArchived): self
    {
        $this->isArchived = $isArchived;

        return $this;
    }

    public function getIsChannel(): ?bool
    {
        return $this->isChannel;
    }

    public function setIsChannel(?bool $isChannel): self
    {
        $this->isChannel = $isChannel;

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

    public function getIsGeneral(): ?bool
    {
        return $this->isGeneral;
    }

    public function setIsGeneral(?bool $isGeneral): self
    {
        $this->isGeneral = $isGeneral;

        return $this;
    }

    public function getIsMember(): ?bool
    {
        return $this->isMember;
    }

    public function setIsMember(?bool $isMember): self
    {
        $this->isMember = $isMember;

        return $this;
    }

    public function getIsMoved(): ?int
    {
        return $this->isMoved;
    }

    public function setIsMoved(?int $isMoved): self
    {
        $this->isMoved = $isMoved;

        return $this;
    }

    public function getIsMpim(): ?bool
    {
        return $this->isMpim;
    }

    public function setIsMpim(?bool $isMpim): self
    {
        $this->isMpim = $isMpim;

        return $this;
    }

    public function getIsNonThreadable(): ?bool
    {
        return $this->isNonThreadable;
    }

    public function setIsNonThreadable(?bool $isNonThreadable): self
    {
        $this->isNonThreadable = $isNonThreadable;

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

    public function getIsPendingExtShared(): ?bool
    {
        return $this->isPendingExtShared;
    }

    public function setIsPendingExtShared(?bool $isPendingExtShared): self
    {
        $this->isPendingExtShared = $isPendingExtShared;

        return $this;
    }

    public function getIsPrivate(): ?bool
    {
        return $this->isPrivate;
    }

    public function setIsPrivate(?bool $isPrivate): self
    {
        $this->isPrivate = $isPrivate;

        return $this;
    }

    public function getIsReadOnly(): ?bool
    {
        return $this->isReadOnly;
    }

    public function setIsReadOnly(?bool $isReadOnly): self
    {
        $this->isReadOnly = $isReadOnly;

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

    public function getIsThreadOnly(): ?bool
    {
        return $this->isThreadOnly;
    }

    public function setIsThreadOnly(?bool $isThreadOnly): self
    {
        $this->isThreadOnly = $isThreadOnly;

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
     * @return string[]|null
     */
    public function getMembers(): ?array
    {
        return $this->members;
    }

    /**
     * @param string[]|null $members
     */
    public function setMembers(?array $members): self
    {
        $this->members = $members;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getNameNormalized(): ?string
    {
        return $this->nameNormalized;
    }

    public function setNameNormalized(?string $nameNormalized): self
    {
        $this->nameNormalized = $nameNormalized;

        return $this;
    }

    public function getNumMembers(): ?int
    {
        return $this->numMembers;
    }

    public function setNumMembers(?int $numMembers): self
    {
        $this->numMembers = $numMembers;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getPendingShared(): ?array
    {
        return $this->pendingShared;
    }

    /**
     * @param string[]|null $pendingShared
     */
    public function setPendingShared(?array $pendingShared): self
    {
        $this->pendingShared = $pendingShared;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getPreviousNames(): ?array
    {
        return $this->previousNames;
    }

    /**
     * @param string[]|null $previousNames
     */
    public function setPreviousNames(?array $previousNames): self
    {
        $this->previousNames = $previousNames;

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

    public function getPurpose(): ?ObjsChannelPurpose
    {
        return $this->purpose;
    }

    public function setPurpose(?ObjsChannelPurpose $purpose): self
    {
        $this->purpose = $purpose;

        return $this;
    }

    public function getTopic(): ?ObjsChannelTopic
    {
        return $this->topic;
    }

    public function setTopic(?ObjsChannelTopic $topic): self
    {
        $this->topic = $topic;

        return $this;
    }

    public function getUnlinked(): ?int
    {
        return $this->unlinked;
    }

    public function setUnlinked(?int $unlinked): self
    {
        $this->unlinked = $unlinked;

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
}
