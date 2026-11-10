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
    public ?string $acceptedUser;
    /**
     * @var list<string>|null
     */
    public ?array $connectedTeamIds;
    public ?string $conversationHostId;
    public ?int $created;
    public ?string $creator;
    public ?ObjsConversationDisplayCounts $displayCounts;
    public ?string $enterpriseId;
    public ?bool $hasPins;
    public ?string $id;
    /**
     * @var list<string>|null
     */
    public ?array $internalTeamIds;
    public ?bool $isArchived;
    public ?bool $isChannel;
    public ?bool $isExtShared;
    public ?bool $isFrozen;
    public ?bool $isGeneral;
    public ?bool $isGlobalShared;
    public ?bool $isGroup;
    public ?bool $isIm;
    public ?bool $isMember;
    public ?int $isMoved;
    public ?bool $isMpim;
    public ?bool $isNonThreadable;
    public ?bool $isOpen;
    public ?bool $isOrgDefault;
    public ?bool $isOrgMandatory;
    public ?bool $isOrgShared;
    public ?bool $isPendingExtShared;
    public ?bool $isPrivate;
    public ?bool $isReadOnly;
    public ?bool $isShared;
    public ?bool $isStarred;
    public ?bool $isThreadOnly;
    public ?bool $isUserDeleted;
    public ?string $lastRead;
    /**
     * @var mixed|null
     */
    public $latest;
    public ?string $locale;
    /**
     * @var list<string>|null
     */
    public ?array $members;
    public ?string $name;
    public ?string $nameNormalized;
    public ?int $numMembers;
    /**
     * @var mixed|null
     */
    public $parentConversation;
    /**
     * @var list<string>|null
     */
    public ?array $pendingConnectedTeamIds;
    /**
     * @var list<string>|null
     */
    public ?array $pendingShared;
    public ?int $pinCount;
    /**
     * @var list<string>|null
     */
    public ?array $previousNames;
    public ?float $priority;
    public ?ObjsConversationPurpose $purpose;
    /**
     * @var list<string>|null
     */
    public ?array $sharedTeamIds;
    /**
     * @var list<ObjsConversationSharesItem>|null
     */
    public ?array $shares;
    public ?int $timezoneCount;
    public ?ObjsConversationTopic $topic;
    public ?int $unlinked;
    public ?int $unreadCount;
    public ?int $unreadCountDisplay;
    public ?string $useCase;
    public ?string $user;
    public ?int $version;
}
