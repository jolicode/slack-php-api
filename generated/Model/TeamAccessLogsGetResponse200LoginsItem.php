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

class TeamAccessLogsGetResponse200LoginsItem
{
    public ?int $count;
    public ?string $country;
    public ?int $dateFirst;
    public ?int $dateLast;
    public ?string $ip;
    public ?string $isp;
    public ?string $region;
    public ?string $userAgent;
    public ?string $userId;
    public ?string $username;
}
