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

class RtmConnectGetResponse200
{
    public ?bool $ok;
    public ?RtmConnectGetResponse200Self $self;
    public ?RtmConnectGetResponse200Team $team;
    public ?string $url;
}
