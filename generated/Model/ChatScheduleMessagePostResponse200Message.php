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

class ChatScheduleMessagePostResponse200Message
{
    /**
     * @var list<ChatScheduleMessagePostResponse200MessageAttachmentsItem>|null
     */
    public ?array $attachments;
    public ?string $botId;
    public ?ObjsBotProfile $botProfile;
    public ?string $subtype;
    public ?string $team;
    public ?string $text;
    public ?string $type;
    public ?string $user;
    public ?string $username;
}
