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

use JoliCode\Slack\Api\Runtime\AdditionalAndPatternProperties;
use JoliCode\Slack\Api\Runtime\AdditionalPropertiesInterface;

class UsersGetPresenceGetResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    public ?bool $autoAway;
    public ?int $connectionCount;
    public ?int $lastActivity;
    public ?bool $manualAway;
    public ?bool $ok;
    public ?bool $online;
    public ?string $presence;

    public function definedProperties(): array
    {
        return ['autoAway' => 'auto_away', 'connectionCount' => 'connection_count', 'lastActivity' => 'last_activity', 'manualAway' => 'manual_away', 'ok' => 'ok', 'online' => 'online', 'presence' => 'presence'];
    }
}
