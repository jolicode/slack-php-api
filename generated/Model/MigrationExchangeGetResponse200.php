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

class MigrationExchangeGetResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    public ?string $enterpriseId;
    /**
     * @var list<string>|null
     */
    public ?array $invalidUserIds;
    public ?bool $ok;
    public ?string $teamId;
    /**
     * @var iterable<string, mixed>|null
     */
    public ?iterable $userIdMap;

    public function definedProperties(): array
    {
        return ['enterpriseId' => 'enterprise_id', 'invalidUserIds' => 'invalid_user_ids', 'ok' => 'ok', 'teamId' => 'team_id', 'userIdMap' => 'user_id_map'];
    }
}
