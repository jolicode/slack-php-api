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
     * @var array
     */
    protected $initialized = [];
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
     * @var list<string>|null
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
     * @var list<string>|null
     */
    protected $pendingShared;
    /**
     * @var list<string>|null
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

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getAcceptedUser(): ?string
    {
        return $this->acceptedUser;
    }

    public function setAcceptedUser(?string $acceptedUser): self
    {
        $this->initialized['acceptedUser'] = true;
        $this->acceptedUser = $acceptedUser;

        return $this;
    }

    public function getCreated(): ?int
    {
        return $this->created;
    }

    public function setCreated(?int $created): self
    {
        $this->initialized['created'] = true;
        $this->created = $created;

        return $this;
    }

    public function getCreator(): ?string
    {
        return $this->creator;
    }

    public function setCreator(?string $creator): self
    {
        $this->initialized['creator'] = true;
        $this->creator = $creator;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getIsArchived(): ?bool
    {
        return $this->isArchived;
    }

    public function setIsArchived(?bool $isArchived): self
    {
        $this->initialized['isArchived'] = true;
        $this->isArchived = $isArchived;

        return $this;
    }

    public function getIsChannel(): ?bool
    {
        return $this->isChannel;
    }

    public function setIsChannel(?bool $isChannel): self
    {
        $this->initialized['isChannel'] = true;
        $this->isChannel = $isChannel;

        return $this;
    }

    public function getIsFrozen(): ?bool
    {
        return $this->isFrozen;
    }

    public function setIsFrozen(?bool $isFrozen): self
    {
        $this->initialized['isFrozen'] = true;
        $this->isFrozen = $isFrozen;

        return $this;
    }

    public function getIsGeneral(): ?bool
    {
        return $this->isGeneral;
    }

    public function setIsGeneral(?bool $isGeneral): self
    {
        $this->initialized['isGeneral'] = true;
        $this->isGeneral = $isGeneral;

        return $this;
    }

    public function getIsMember(): ?bool
    {
        return $this->isMember;
    }

    public function setIsMember(?bool $isMember): self
    {
        $this->initialized['isMember'] = true;
        $this->isMember = $isMember;

        return $this;
    }

    public function getIsMoved(): ?int
    {
        return $this->isMoved;
    }

    public function setIsMoved(?int $isMoved): self
    {
        $this->initialized['isMoved'] = true;
        $this->isMoved = $isMoved;

        return $this;
    }

    public function getIsMpim(): ?bool
    {
        return $this->isMpim;
    }

    public function setIsMpim(?bool $isMpim): self
    {
        $this->initialized['isMpim'] = true;
        $this->isMpim = $isMpim;

        return $this;
    }

    public function getIsNonThreadable(): ?bool
    {
        return $this->isNonThreadable;
    }

    public function setIsNonThreadable(?bool $isNonThreadable): self
    {
        $this->initialized['isNonThreadable'] = true;
        $this->isNonThreadable = $isNonThreadable;

        return $this;
    }

    public function getIsOrgShared(): ?bool
    {
        return $this->isOrgShared;
    }

    public function setIsOrgShared(?bool $isOrgShared): self
    {
        $this->initialized['isOrgShared'] = true;
        $this->isOrgShared = $isOrgShared;

        return $this;
    }

    public function getIsPendingExtShared(): ?bool
    {
        return $this->isPendingExtShared;
    }

    public function setIsPendingExtShared(?bool $isPendingExtShared): self
    {
        $this->initialized['isPendingExtShared'] = true;
        $this->isPendingExtShared = $isPendingExtShared;

        return $this;
    }

    public function getIsPrivate(): ?bool
    {
        return $this->isPrivate;
    }

    public function setIsPrivate(?bool $isPrivate): self
    {
        $this->initialized['isPrivate'] = true;
        $this->isPrivate = $isPrivate;

        return $this;
    }

    public function getIsReadOnly(): ?bool
    {
        return $this->isReadOnly;
    }

    public function setIsReadOnly(?bool $isReadOnly): self
    {
        $this->initialized['isReadOnly'] = true;
        $this->isReadOnly = $isReadOnly;

        return $this;
    }

    public function getIsShared(): ?bool
    {
        return $this->isShared;
    }

    public function setIsShared(?bool $isShared): self
    {
        $this->initialized['isShared'] = true;
        $this->isShared = $isShared;

        return $this;
    }

    public function getIsThreadOnly(): ?bool
    {
        return $this->isThreadOnly;
    }

    public function setIsThreadOnly(?bool $isThreadOnly): self
    {
        $this->initialized['isThreadOnly'] = true;
        $this->isThreadOnly = $isThreadOnly;

        return $this;
    }

    public function getLastRead(): ?string
    {
        return $this->lastRead;
    }

    public function setLastRead(?string $lastRead): self
    {
        $this->initialized['lastRead'] = true;
        $this->lastRead = $lastRead;

        return $this;
    }

    public function getLatest()
    {
        return $this->latest;
    }

    public function setLatest($latest): self
    {
        $this->initialized['latest'] = true;
        $this->latest = $latest;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getMembers(): ?array
    {
        return $this->members;
    }

    /**
     * @param list<string>|null $members
     */
    public function setMembers(?array $members): self
    {
        $this->initialized['members'] = true;
        $this->members = $members;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getNameNormalized(): ?string
    {
        return $this->nameNormalized;
    }

    public function setNameNormalized(?string $nameNormalized): self
    {
        $this->initialized['nameNormalized'] = true;
        $this->nameNormalized = $nameNormalized;

        return $this;
    }

    public function getNumMembers(): ?int
    {
        return $this->numMembers;
    }

    public function setNumMembers(?int $numMembers): self
    {
        $this->initialized['numMembers'] = true;
        $this->numMembers = $numMembers;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getPendingShared(): ?array
    {
        return $this->pendingShared;
    }

    /**
     * @param list<string>|null $pendingShared
     */
    public function setPendingShared(?array $pendingShared): self
    {
        $this->initialized['pendingShared'] = true;
        $this->pendingShared = $pendingShared;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getPreviousNames(): ?array
    {
        return $this->previousNames;
    }

    /**
     * @param list<string>|null $previousNames
     */
    public function setPreviousNames(?array $previousNames): self
    {
        $this->initialized['previousNames'] = true;
        $this->previousNames = $previousNames;

        return $this;
    }

    public function getPriority(): ?float
    {
        return $this->priority;
    }

    public function setPriority(?float $priority): self
    {
        $this->initialized['priority'] = true;
        $this->priority = $priority;

        return $this;
    }

    public function getPurpose(): ?ObjsChannelPurpose
    {
        return $this->purpose;
    }

    public function setPurpose(?ObjsChannelPurpose $purpose): self
    {
        $this->initialized['purpose'] = true;
        $this->purpose = $purpose;

        return $this;
    }

    public function getTopic(): ?ObjsChannelTopic
    {
        return $this->topic;
    }

    public function setTopic(?ObjsChannelTopic $topic): self
    {
        $this->initialized['topic'] = true;
        $this->topic = $topic;

        return $this;
    }

    public function getUnlinked(): ?int
    {
        return $this->unlinked;
    }

    public function setUnlinked(?int $unlinked): self
    {
        $this->initialized['unlinked'] = true;
        $this->unlinked = $unlinked;

        return $this;
    }

    public function getUnreadCount(): ?int
    {
        return $this->unreadCount;
    }

    public function setUnreadCount(?int $unreadCount): self
    {
        $this->initialized['unreadCount'] = true;
        $this->unreadCount = $unreadCount;

        return $this;
    }

    public function getUnreadCountDisplay(): ?int
    {
        return $this->unreadCountDisplay;
    }

    public function setUnreadCountDisplay(?int $unreadCountDisplay): self
    {
        $this->initialized['unreadCountDisplay'] = true;
        $this->unreadCountDisplay = $unreadCountDisplay;

        return $this;
    }
}
