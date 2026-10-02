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

class ObjsUserProfileShort
{
    public ?string $avatarHash;
    public ?string $displayName;
    public ?string $displayNameNormalized;
    public ?string $firstName;
    public ?string $image72;
    public ?bool $isRestricted;
    public ?bool $isUltraRestricted;
    public ?string $name;
    public ?string $realName;
    public ?string $realNameNormalized;
    public ?string $team;
}
