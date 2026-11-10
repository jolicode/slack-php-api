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

class ObjsUserProfile
{
    public ?bool $alwaysActive;
    public ?string $apiAppId;
    public ?string $avatarHash;
    public ?string $botId;
    public ?string $displayName;
    public ?string $displayNameNormalized;
    public ?string $email;
    /**
     * @var list<mixed>|null
     */
    public ?array $fields;
    public ?string $firstName;
    public ?int $guestExpirationTs;
    public ?string $guestInvitedBy;
    public ?string $image1024;
    public ?string $image192;
    public ?string $image24;
    public ?string $image32;
    public ?string $image48;
    public ?string $image512;
    public ?string $image72;
    public ?string $imageOriginal;
    public ?bool $isAppUser;
    public ?bool $isCustomImage;
    public ?bool $isRestricted;
    public ?bool $isUltraRestricted;
    public ?string $lastAvatarImageHash;
    public ?string $lastName;
    public ?int $membershipsCount;
    public ?string $name;
    public ?string $phone;
    public ?string $pronouns;
    public ?string $realName;
    public ?string $realNameNormalized;
    public ?string $skype;
    public ?string $statusDefaultEmoji;
    public ?string $statusDefaultText;
    public ?string $statusDefaultTextCanonical;
    public ?string $statusEmoji;
    public ?int $statusExpiration;
    public ?string $statusText;
    public ?string $statusTextCanonical;
    public ?string $team;
    public ?string $title;
    public ?int $updated;
    public ?string $userId;
    public ?string $username;
}
