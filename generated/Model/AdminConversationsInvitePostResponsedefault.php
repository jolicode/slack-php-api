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

class AdminConversationsInvitePostResponsedefault implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    public ?string $error;
    public ?bool $ok;

    public function definedProperties(): array
    {
        return ['error' => 'error', 'ok' => 'ok'];
    }
}
