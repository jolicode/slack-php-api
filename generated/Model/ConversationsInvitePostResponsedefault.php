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

class ConversationsInvitePostResponsedefault
{
    /**
     * Note: PHP callstack is only visible in dev/qa.
     */
    public ?string $callstack;
    public ?string $error;
    /**
     * @var list<ConversationsInvitePostResponsedefaultErrorsItem>|null
     */
    public ?array $errors;
    public ?string $needed;
    public ?bool $ok;
    public ?string $provided;
}
