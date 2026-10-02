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

class ObjsReminder
{
    public ?int $completeTs;
    public ?string $creator;
    public ?string $id;
    public ?bool $recurring;
    public ?string $text;
    public ?int $time;
    public ?string $user;
}
