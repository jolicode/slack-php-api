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

class ObjsGroup
{
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
    protected $isDeleted;
    /**
     * @var bool|null
     */
    protected $isGroup;
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
    protected $isOpen;
    /**
     * @var bool|null
     */
    protected $isPendingExtShared;
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
     * @var float|null
     */
    protected $priority;
    /**
     * @var ObjsGroupPurpose|null
     */
    protected $purpose;
    /**
     * @var ObjsGroupTopic|null
     */
    protected $topic;
    /**
     * @var int|null
     */
    protected $unreadCount;
    /**
     * @var int|null
     */
    protected $unreadCountDisplay;

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

    public function getIsDeleted(): ?bool
    {
        return $this->isDeleted;
    }

    public function setIsDeleted(?bool $isDeleted): self
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }

    public function getIsGroup(): ?bool
    {
        return $this->isGroup;
    }

    public function setIsGroup(?bool $isGroup): self
    {
        $this->isGroup = $isGroup;

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

    public function getIsOpen(): ?bool
    {
        return $this->isOpen;
    }

    public function setIsOpen(?bool $isOpen): self
    {
        $this->isOpen = $isOpen;

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

    public function getPriority(): ?float
    {
        return $this->priority;
    }

    public function setPriority(?float $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    public function getPurpose(): ?ObjsGroupPurpose
    {
        return $this->purpose;
    }

    public function setPurpose(?ObjsGroupPurpose $purpose): self
    {
        $this->purpose = $purpose;

        return $this;
    }

    public function getTopic(): ?ObjsGroupTopic
    {
        return $this->topic;
    }

    public function setTopic(?ObjsGroupTopic $topic): self
    {
        $this->topic = $topic;

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
