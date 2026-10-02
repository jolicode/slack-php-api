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

class AppsPermissionsScopesListGetResponse200Scopes implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<string>|null
     */
    public ?array $appHome;
    /**
     * @var list<string>|null
     */
    public ?array $channel;
    /**
     * @var list<string>|null
     */
    public ?array $group;
    /**
     * @var list<string>|null
     */
    public ?array $im;
    /**
     * @var list<string>|null
     */
    public ?array $mpim;
    /**
     * @var list<string>|null
     */
    public ?array $team;
    /**
     * @var list<string>|null
     */
    public ?array $user;

    public function definedProperties(): array
    {
        return ['appHome' => 'app_home', 'channel' => 'channel', 'group' => 'group', 'im' => 'im', 'mpim' => 'mpim', 'team' => 'team', 'user' => 'user'];
    }
}
