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

class ObjsConversation
{
    /**
     * @var string|null
     */
    protected $acceptedUser;
    /**
     * @var string[]|null
     */
    protected $connectedTeamIds;
    /**
     * @var string|null
     */
    protected $conversationHostId;
    /**
     * @var int|null
     */
    protected $created;
    /**
     * @var string|null
     */
    protected $creator;
    /**
     * @var ObjsConversationDisplayCounts|null
     */
    protected $displayCounts;
    /**
     * @var string|null
     */
    protected $enterpriseId;
    /**
     * @var bool|null
     */
    protected $hasPins;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string[]|null
     */
    protected $internalTeamIds;
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
    protected $isExtShared;
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
    protected $isGlobalShared;
    /**
     * @var bool|null
     */
    protected $isGroup;
    /**
     * @var bool|null
     */
    protected $isIm;
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
    protected $isOpen;
    /**
     * @var bool|null
     */
    protected $isOrgDefault;
    /**
     * @var bool|null
     */
    protected $isOrgMandatory;
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
    protected $isStarred;
    /**
     * @var bool|null
     */
    protected $isThreadOnly;
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
     * @var string|null
     */
    protected $locale;
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
     * @var mixed|null
     */
    protected $parentConversation;
    /**
     * @var string[]|null
     */
    protected $pendingConnectedTeamIds;
    /**
     * @var string[]|null
     */
    protected $pendingShared;
    /**
     * @var int|null
     */
    protected $pinCount;
    /**
     * @var string[]|null
     */
    protected $previousNames;
    /**
     * @var float|null
     */
    protected $priority;
    /**
     * @var ObjsConversationPurpose|null
     */
    protected $purpose;
    /**
     * @var string[]|null
     */
    protected $sharedTeamIds;
    /**
     * @var ObjsConversationSharesItem[]|null
     */
    protected $shares;
    /**
     * @var int|null
     */
    protected $timezoneCount;
    /**
     * @var ObjsConversationTopic|null
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
    /**
     * @var string|null
     */
    protected $useCase;
    /**
     * @var string|null
     */
    protected $user;
    /**
     * @var int|null
     */
    protected $version;

    public function getAcceptedUser(): ?string
    {
        return $this->acceptedUser;
    }

    public function setAcceptedUser(?string $acceptedUser): self
    {
        $this->acceptedUser = $acceptedUser;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getConnectedTeamIds(): ?array
    {
        return $this->connectedTeamIds;
    }

    /**
     * @param string[]|null $connectedTeamIds
     */
    public function setConnectedTeamIds(?array $connectedTeamIds): self
    {
        $this->connectedTeamIds = $connectedTeamIds;

        return $this;
    }

    public function getConversationHostId(): ?string
    {
        return $this->conversationHostId;
    }

    public function setConversationHostId(?string $conversationHostId): self
    {
        $this->conversationHostId = $conversationHostId;

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

    public function getDisplayCounts(): ?ObjsConversationDisplayCounts
    {
        return $this->displayCounts;
    }

    public function setDisplayCounts(?ObjsConversationDisplayCounts $displayCounts): self
    {
        $this->displayCounts = $displayCounts;

        return $this;
    }

    public function getEnterpriseId(): ?string
    {
        return $this->enterpriseId;
    }

    public function setEnterpriseId(?string $enterpriseId): self
    {
        $this->enterpriseId = $enterpriseId;

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

    /**
     * @return string[]|null
     */
    public function getInternalTeamIds(): ?array
    {
        return $this->internalTeamIds;
    }

    /**
     * @param string[]|null $internalTeamIds
     */
    public function setInternalTeamIds(?array $internalTeamIds): self
    {
        $this->internalTeamIds = $internalTeamIds;

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

    public function getIsGeneral(): ?bool
    {
        return $this->isGeneral;
    }

    public function setIsGeneral(?bool $isGeneral): self
    {
        $this->isGeneral = $isGeneral;

        return $this;
    }

    public function getIsGlobalShared(): ?bool
    {
        return $this->isGlobalShared;
    }

    public function setIsGlobalShared(?bool $isGlobalShared): self
    {
        $this->isGlobalShared = $isGlobalShared;

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

    public function getIsIm(): ?bool
    {
        return $this->isIm;
    }

    public function setIsIm(?bool $isIm): self
    {
        $this->isIm = $isIm;

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

    public function getIsOpen(): ?bool
    {
        return $this->isOpen;
    }

    public function setIsOpen(?bool $isOpen): self
    {
        $this->isOpen = $isOpen;

        return $this;
    }

    public function getIsOrgDefault(): ?bool
    {
        return $this->isOrgDefault;
    }

    public function setIsOrgDefault(?bool $isOrgDefault): self
    {
        $this->isOrgDefault = $isOrgDefault;

        return $this;
    }

    public function getIsOrgMandatory(): ?bool
    {
        return $this->isOrgMandatory;
    }

    public function setIsOrgMandatory(?bool $isOrgMandatory): self
    {
        $this->isOrgMandatory = $isOrgMandatory;

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

    public function getIsStarred(): ?bool
    {
        return $this->isStarred;
    }

    public function setIsStarred(?bool $isStarred): self
    {
        $this->isStarred = $isStarred;

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

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(?string $locale): self
    {
        $this->locale = $locale;

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

    /**
     * @return string[]|null
     */
    public function getPendingConnectedTeamIds(): ?array
    {
        return $this->pendingConnectedTeamIds;
    }

    /**
     * @param string[]|null $pendingConnectedTeamIds
     */
    public function setPendingConnectedTeamIds(?array $pendingConnectedTeamIds): self
    {
        $this->pendingConnectedTeamIds = $pendingConnectedTeamIds;

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

    public function getPinCount(): ?int
    {
        return $this->pinCount;
    }

    public function setPinCount(?int $pinCount): self
    {
        $this->pinCount = $pinCount;

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

    public function getPurpose(): ?ObjsConversationPurpose
    {
        return $this->purpose;
    }

    public function setPurpose(?ObjsConversationPurpose $purpose): self
    {
        $this->purpose = $purpose;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getSharedTeamIds(): ?array
    {
        return $this->sharedTeamIds;
    }

    /**
     * @param string[]|null $sharedTeamIds
     */
    public function setSharedTeamIds(?array $sharedTeamIds): self
    {
        $this->sharedTeamIds = $sharedTeamIds;

        return $this;
    }

    /**
     * @return ObjsConversationSharesItem[]|null
     */
    public function getShares(): ?array
    {
        return $this->shares;
    }

    /**
     * @param ObjsConversationSharesItem[]|null $shares
     */
    public function setShares(?array $shares): self
    {
        $this->shares = $shares;

        return $this;
    }

    public function getTimezoneCount(): ?int
    {
        return $this->timezoneCount;
    }

    public function setTimezoneCount(?int $timezoneCount): self
    {
        $this->timezoneCount = $timezoneCount;

        return $this;
    }

    public function getTopic(): ?ObjsConversationTopic
    {
        return $this->topic;
    }

    public function setTopic(?ObjsConversationTopic $topic): self
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

    public function getUseCase(): ?string
    {
        return $this->useCase;
    }

    public function setUseCase(?string $useCase): self
    {
        $this->useCase = $useCase;

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
