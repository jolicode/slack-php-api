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

class BotsInfoGetResponse200Bot
{
    public ?string $appId;
    public ?bool $deleted;
    public ?BotsInfoGetResponse200BotIcons $icons;
    public ?string $id;
    public ?string $name;
    public ?int $updated;
    public ?string $userId;
}
