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

class ConversationsRepliesGetResponse200
{
    public ?bool $hasMore;
    /**
     * @var list<mixed>|null
     */
    public ?array $messages;
    public ?bool $ok;
    public ?ConversationsRepliesGetResponse200ResponseMetadata $responseMetadata;
}
