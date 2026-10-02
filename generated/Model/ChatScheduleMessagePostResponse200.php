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

class ChatScheduleMessagePostResponse200
{
    public ?string $channel;
    public ?ChatScheduleMessagePostResponse200Message $message;
    public ?bool $ok;
    /**
     * @var int|string|null
     */
    public $postAt;
    public ?string $scheduledMessageId;
}
