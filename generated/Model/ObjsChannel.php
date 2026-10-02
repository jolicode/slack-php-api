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
    public ?string $acceptedUser;
    public ?int $created;
    public ?string $creator;
    public ?string $id;
    public ?bool $isArchived;
    public ?bool $isChannel;
    public ?bool $isFrozen;
    public ?bool $isGeneral;
    public ?bool $isMember;
    public ?int $isMoved;
    public ?bool $isMpim;
    public ?bool $isNonThreadable;
    public ?bool $isOrgShared;
    public ?bool $isPendingExtShared;
    public ?bool $isPrivate;
    public ?bool $isReadOnly;
    public ?bool $isShared;
    public ?bool $isThreadOnly;
    public ?string $lastRead;
    /**
     * @var mixed|null
     */
    public $latest;
    /**
     * @var list<string>|null
     */
    public ?array $members;
    public ?string $name;
    public ?string $nameNormalized;
    public ?int $numMembers;
    /**
     * @var list<string>|null
     */
    public ?array $pendingShared;
    /**
     * @var list<string>|null
     */
    public ?array $previousNames;
    public ?float $priority;
    public ?ObjsChannelPurpose $purpose;
    public ?ObjsChannelTopic $topic;
    public ?int $unlinked;
    public ?int $unreadCount;
    public ?int $unreadCountDisplay;
}
