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

class ConversationsRepliesGetResponse200MessagesItemItem0
{
    public ?string $lastRead;
    public ?string $latestReply;
    public ?int $replyCount;
    /**
     * @var list<string>|null
     */
    public ?array $replyUsers;
    public ?int $replyUsersCount;
    public ?string $sourceTeam;
    public ?bool $subscribed;
    public ?string $team;
    public ?string $text;
    public ?string $threadTs;
    public ?string $ts;
    public ?string $type;
    public ?int $unreadCount;
    public ?string $user;
    public ?ObjsUserProfileShort $userProfile;
    public ?string $userTeam;
}
