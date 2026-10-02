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

class ConversationsOpenPostResponse200ChannelItem1
{
    public ?string $created;
    public ?string $id;
    public ?bool $isIm;
    public ?bool $isOpen;
    public ?string $lastRead;
    public ?ObjsMessage $latest;
    public ?float $unreadCount;
    public ?float $unreadCountDisplay;
    public ?string $user;
}
