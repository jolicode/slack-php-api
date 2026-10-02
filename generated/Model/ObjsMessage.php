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

class ObjsMessage
{
    /**
     * @var list<ObjsMessageAttachmentsItem>|null
     */
    public ?array $attachments;
    /**
     * This is a very loose definition, in the future, we'll populate this with deeper schema in this definition namespace.
     *
     * @var list<BlocksItem>|null
     */
    public ?array $blocks;
    /**
     * @var mixed|null
     */
    public $botId;
    public ?ObjsBotProfile $botProfile;
    public ?string $clientMsgId;
    public ?ObjsComment $comment;
    public ?bool $displayAsBot;
    public ?ObjsFile $file;
    /**
     * @var list<ObjsFile>|null
     */
    public ?array $files;
    public ?ObjsMessageIcons $icons;
    public ?string $inviter;
    public ?bool $isDelayedMessage;
    public ?bool $isIntro;
    public ?bool $isStarred;
    public ?string $lastRead;
    public ?string $latestReply;
    public ?ObjsMetadata $metadata;
    public ?string $name;
    public ?string $oldName;
    public ?string $parentUserId;
    public ?string $permalink;
    /**
     * @var list<string>|null
     */
    public ?array $pinnedTo;
    public ?string $purpose;
    /**
     * @var list<ObjsReaction>|null
     */
    public ?array $reactions;
    public ?int $replyCount;
    /**
     * @var list<string>|null
     */
    public ?array $replyUsers;
    public ?int $replyUsersCount;
    public ?string $sourceTeam;
    public ?bool $subscribed;
    public ?string $subtype;
    public ?string $team;
    public ?string $text;
    public ?string $threadTs;
    public ?string $topic;
    public ?string $ts;
    public ?string $type;
    public ?int $unreadCount;
    public ?bool $upload;
    public ?string $user;
    public ?ObjsUserProfileShort $userProfile;
    public ?string $userTeam;
    public ?string $username;
}
