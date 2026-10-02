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

class ConversationsRepliesGetResponse200MessagesItemItem1
{
    public ?bool $isStarred;
    public ?string $parentUserId;
    public ?string $sourceTeam;
    public ?string $team;
    public ?string $text;
    public ?string $threadTs;
    public ?string $ts;
    public ?string $type;
    public ?string $user;
    public ?ObjsUserProfileShort $userProfile;
    public ?string $userTeam;
}
