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

class UsersConversationsGetResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<ObjsConversation>|null
     */
    public ?array $channels;
    public ?bool $ok;
    public ?UsersConversationsGetResponse200ResponseMetadata $responseMetadata;

    public function definedProperties(): array
    {
        return ['channels' => 'channels', 'ok' => 'ok', 'responseMetadata' => 'response_metadata'];
    }
}
