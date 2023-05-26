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
     * @var array
     */
    protected $initialized = [];
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
        $this->initialized['connectedTeamIds'] = true;
        $this->connectedTeamIds = $connectedTeamIds;

        return $this;
    }

    public function getConversationHostId(): ?string
    {
        return $this->conversationHostId;
    }

    public function setConversationHostId(?string $conversationHostId): self
    {
        $this->initialized['conversationHostId'] = true;
        $this->conversationHostId = $conversationHostId;

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

    public function getDisplayCounts(): ?ObjsConversationDisplayCounts
    {
        return $this->displayCounts;
    }

    public function setDisplayCounts(?ObjsConversationDisplayCounts $displayCounts): self
    {
        $this->initialized['displayCounts'] = true;
        $this->displayCounts = $displayCounts;

        return $this;
    }

    public function getEnterpriseId(): ?string
    {
        return $this->enterpriseId;
    }

    public function setEnterpriseId(?string $enterpriseId): self
    {
        $this->initialized['enterpriseId'] = true;
        $this->enterpriseId = $enterpriseId;

        return $this;
    }

    public function getHasPins(): ?bool
    {
        return $this->hasPins;
    }

    public function setHasPins(?bool $hasPins): self
    {
        $this->initialized['hasPins'] = true;
        $this->hasPins = $hasPins;

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
        $this->initialized['internalTeamIds'] = true;
        $this->internalTeamIds = $internalTeamIds;

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

    public function getIsExtShared(): ?bool
    {
        return $this->isExtShared;
    }

    public function setIsExtShared(?bool $isExtShared): self
    {
        $this->initialized['isExtShared'] = true;
        $this->isExtShared = $isExtShared;

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

    public function getIsGlobalShared(): ?bool
    {
        return $this->isGlobalShared;
    }

    public function setIsGlobalShared(?bool $isGlobalShared): self
    {
        $this->initialized['isGlobalShared'] = true;
        $this->isGlobalShared = $isGlobalShared;

        return $this;
    }

    public function getIsGroup(): ?bool
    {
        return $this->isGroup;
    }

    public function setIsGroup(?bool $isGroup): self
    {
        $this->initialized['isGroup'] = true;
        $this->isGroup = $isGroup;

        return $this;
    }

    public function getIsIm(): ?bool
    {
        return $this->isIm;
    }

    public function setIsIm(?bool $isIm): self
    {
        $this->initialized['isIm'] = true;
        $this->isIm = $isIm;

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

    public function getIsOpen(): ?bool
    {
        return $this->isOpen;
    }

    public function setIsOpen(?bool $isOpen): self
    {
        $this->initialized['isOpen'] = true;
        $this->isOpen = $isOpen;

        return $this;
    }

    public function getIsOrgDefault(): ?bool
    {
        return $this->isOrgDefault;
    }

    public function setIsOrgDefault(?bool $isOrgDefault): self
    {
        $this->initialized['isOrgDefault'] = true;
        $this->isOrgDefault = $isOrgDefault;

        return $this;
    }

    public function getIsOrgMandatory(): ?bool
    {
        return $this->isOrgMandatory;
    }

    public function setIsOrgMandatory(?bool $isOrgMandatory): self
    {
        $this->initialized['isOrgMandatory'] = true;
        $this->isOrgMandatory = $isOrgMandatory;

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

    public function getIsStarred(): ?bool
    {
        return $this->isStarred;
    }

    public function setIsStarred(?bool $isStarred): self
    {
        $this->initialized['isStarred'] = true;
        $this->isStarred = $isStarred;

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

    public function getIsUserDeleted(): ?bool
    {
        return $this->isUserDeleted;
    }

    public function setIsUserDeleted(?bool $isUserDeleted): self
    {
        $this->initialized['isUserDeleted'] = true;
        $this->isUserDeleted = $isUserDeleted;

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

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(?string $locale): self
    {
        $this->initialized['locale'] = true;
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

    public function getParentConversation()
    {
        return $this->parentConversation;
    }

    public function setParentConversation($parentConversation): self
    {
        $this->initialized['parentConversation'] = true;
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
        $this->initialized['pendingConnectedTeamIds'] = true;
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
        $this->initialized['pendingShared'] = true;
        $this->pendingShared = $pendingShared;

        return $this;
    }

    public function getPinCount(): ?int
    {
        return $this->pinCount;
    }

    public function setPinCount(?int $pinCount): self
    {
        $this->initialized['pinCount'] = true;
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

    public function getPurpose(): ?ObjsConversationPurpose
    {
        return $this->purpose;
    }

    public function setPurpose(?ObjsConversationPurpose $purpose): self
    {
        $this->initialized['purpose'] = true;
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
        $this->initialized['sharedTeamIds'] = true;
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
        $this->initialized['shares'] = true;
        $this->shares = $shares;

        return $this;
    }

    public function getTimezoneCount(): ?int
    {
        return $this->timezoneCount;
    }

    public function setTimezoneCount(?int $timezoneCount): self
    {
        $this->initialized['timezoneCount'] = true;
        $this->timezoneCount = $timezoneCount;

        return $this;
    }

    public function getTopic(): ?ObjsConversationTopic
    {
        return $this->topic;
    }

    public function setTopic(?ObjsConversationTopic $topic): self
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

    public function getUseCase(): ?string
    {
        return $this->useCase;
    }

    public function setUseCase(?string $useCase): self
    {
        $this->initialized['useCase'] = true;
        $this->useCase = $useCase;

        return $this;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(?string $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;

        return $this;
    }

    public function getVersion(): ?int
    {
        return $this->version;
    }

    public function setVersion(?int $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }
}
