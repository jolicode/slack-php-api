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

class TeamIntegrationLogsGetResponse200LogsItem
{
    public ?string $adminAppId;
    public ?string $appId;
    public ?string $appType;
    public ?string $changeType;
    public ?string $channel;
    public ?string $date;
    public ?string $scope;
    public ?string $serviceId;
    public ?string $serviceType;
    public ?string $userId;
    public ?string $userName;
}
