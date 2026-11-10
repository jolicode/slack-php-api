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

class ObjsUser
{
    /**
     * refercing to bug: https://jira.tinyspeck.com/browse/EVALUE-1559.
     */
    public ?string $color;
    public ?bool $deleted;
    public ?ObjsEnterpriseUser $enterpriseUser;
    public ?bool $has2fa;
    public ?string $id;
    public ?bool $isAdmin;
    public ?bool $isAppUser;
    public ?bool $isBot;
    public ?bool $isExternal;
    public ?bool $isForgotten;
    public ?bool $isInvitedUser;
    public ?bool $isOwner;
    public ?bool $isPrimaryOwner;
    public ?bool $isRestricted;
    public ?bool $isStranger;
    public ?bool $isUltraRestricted;
    public ?string $locale;
    public ?string $name;
    public ?string $presence;
    public ?ObjsUserProfile $profile;
    public ?string $realName;
    public ?string $team;
    public ?string $teamId;
    public ?ObjsUserTeamProfile $teamProfile;
    /**
     * @var list<string>|null
     */
    public ?array $teams;
    public ?string $twoFactorType;
    /**
     * @var mixed|null
     */
    public $tz;
    public ?string $tzLabel;
    public ?float $tzOffset;
    public ?float $updated;
}
