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

class AuthTestGetResponse200
{
    public ?string $botId;
    public ?bool $isEnterpriseInstall;
    public ?bool $ok;
    public ?string $team;
    public ?string $teamId;
    public ?string $url;
    public ?string $user;
    public ?string $userId;
}
