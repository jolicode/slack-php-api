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
    /**
     * @var bool|null
     */
    protected $alwaysActive;
    /**
     * @var string|null
     */
    protected $apiAppId;
    /**
     * @var string|null
     */
    protected $avatarHash;
    /**
     * @var string|null
     */
    protected $botId;
    /**
     * @var string|null
     */
    protected $displayName;
    /**
     * @var string|null
     */
    protected $displayNameNormalized;
    /**
     * @var string|null
     */
    protected $email;
    /**
     * @var mixed|mixed[]|null
     */
    protected $fields;
    /**
     * @var string|null
     */
    protected $firstName;
    /**
     * @var string|null
     */
    protected $guestChannels;
    /**
     * @var int|null
     */
    protected $guestExpirationTs;
    /**
     * @var string|null
     */
    protected $guestInvitedBy;
    /**
     * @var string|null
     */
    protected $image1024;
    /**
     * @var string|null
     */
    protected $image192;
    /**
     * @var string|null
     */
    protected $image24;
    /**
     * @var string|null
     */
    protected $image32;
    /**
     * @var string|null
     */
    protected $image48;
    /**
     * @var string|null
     */
    protected $image512;
    /**
     * @var string|null
     */
    protected $image72;
    /**
     * @var string|null
     */
    protected $imageOriginal;
    /**
     * @var bool|null
     */
    protected $isCustomImage;
    /**
     * @var string|null
     */
    protected $lastName;
    /**
     * @var string|null
     */
    protected $phone;
    /**
     * @var string|null
     */
    protected $realName;
    /**
     * @var string|null
     */
    protected $realNameNormalized;
    /**
     * @var string|null
     */
    protected $skype;
    /**
     * @var string|null
     */
    protected $statusEmoji;
    /**
     * @var int|null
     */
    protected $statusExpiration;
    /**
     * @var string|null
     */
    protected $statusText;
    /**
     * @var string|null
     */
    protected $statusTextCanonical;
    /**
     * @var string|null
     */
    protected $team;
    /**
     * @var string|null
     */
    protected $teams;
    /**
     * @var string|null
     */
    protected $title;

    public function getAlwaysActive(): ?bool
    {
        return $this->alwaysActive;
    }

    public function setAlwaysActive(?bool $alwaysActive): self
    {
        $this->alwaysActive = $alwaysActive;

        return $this;
    }

    public function getApiAppId(): ?string
    {
        return $this->apiAppId;
    }

    public function setApiAppId(?string $apiAppId): self
    {
        $this->apiAppId = $apiAppId;

        return $this;
    }

    public function getAvatarHash(): ?string
    {
        return $this->avatarHash;
    }

    public function setAvatarHash(?string $avatarHash): self
    {
        $this->avatarHash = $avatarHash;

        return $this;
    }

    public function getBotId(): ?string
    {
        return $this->botId;
    }

    public function setBotId(?string $botId): self
    {
        $this->botId = $botId;

        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;

        return $this;
    }

    public function getDisplayNameNormalized(): ?string
    {
        return $this->displayNameNormalized;
    }

    public function setDisplayNameNormalized(?string $displayNameNormalized): self
    {
        $this->displayNameNormalized = $displayNameNormalized;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return mixed|mixed[]|null
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param mixed|mixed[]|null $fields
     */
    public function setFields($fields): self
    {
        $this->fields = $fields;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getGuestChannels(): ?string
    {
        return $this->guestChannels;
    }

    public function setGuestChannels(?string $guestChannels): self
    {
        $this->guestChannels = $guestChannels;

        return $this;
    }

    public function getGuestExpirationTs(): ?int
    {
        return $this->guestExpirationTs;
    }

    public function setGuestExpirationTs(?int $guestExpirationTs): self
    {
        $this->guestExpirationTs = $guestExpirationTs;

        return $this;
    }

    public function getGuestInvitedBy(): ?string
    {
        return $this->guestInvitedBy;
    }

    public function setGuestInvitedBy(?string $guestInvitedBy): self
    {
        $this->guestInvitedBy = $guestInvitedBy;

        return $this;
    }

    public function getImage1024(): ?string
    {
        return $this->image1024;
    }

    public function setImage1024(?string $image1024): self
    {
        $this->image1024 = $image1024;

        return $this;
    }

    public function getImage192(): ?string
    {
        return $this->image192;
    }

    public function setImage192(?string $image192): self
    {
        $this->image192 = $image192;

        return $this;
    }

    public function getImage24(): ?string
    {
        return $this->image24;
    }

    public function setImage24(?string $image24): self
    {
        $this->image24 = $image24;

        return $this;
    }

    public function getImage32(): ?string
    {
        return $this->image32;
    }

    public function setImage32(?string $image32): self
    {
        $this->image32 = $image32;

        return $this;
    }

    public function getImage48(): ?string
    {
        return $this->image48;
    }

    public function setImage48(?string $image48): self
    {
        $this->image48 = $image48;

        return $this;
    }

    public function getImage512(): ?string
    {
        return $this->image512;
    }

    public function setImage512(?string $image512): self
    {
        $this->image512 = $image512;

        return $this;
    }

    public function getImage72(): ?string
    {
        return $this->image72;
    }

    public function setImage72(?string $image72): self
    {
        $this->image72 = $image72;

        return $this;
    }

    public function getImageOriginal(): ?string
    {
        return $this->imageOriginal;
    }

    public function setImageOriginal(?string $imageOriginal): self
    {
        $this->imageOriginal = $imageOriginal;

        return $this;
    }

    public function getIsCustomImage(): ?bool
    {
        return $this->isCustomImage;
    }

    public function setIsCustomImage(?bool $isCustomImage): self
    {
        $this->isCustomImage = $isCustomImage;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getRealName(): ?string
    {
        return $this->realName;
    }

    public function setRealName(?string $realName): self
    {
        $this->realName = $realName;

        return $this;
    }

    public function getRealNameNormalized(): ?string
    {
        return $this->realNameNormalized;
    }

    public function setRealNameNormalized(?string $realNameNormalized): self
    {
        $this->realNameNormalized = $realNameNormalized;

        return $this;
    }

    public function getSkype(): ?string
    {
        return $this->skype;
    }

    public function setSkype(?string $skype): self
    {
        $this->skype = $skype;

        return $this;
    }

    public function getStatusEmoji(): ?string
    {
        return $this->statusEmoji;
    }

    public function setStatusEmoji(?string $statusEmoji): self
    {
        $this->statusEmoji = $statusEmoji;

        return $this;
    }

    public function getStatusExpiration(): ?int
    {
        return $this->statusExpiration;
    }

    public function setStatusExpiration(?int $statusExpiration): self
    {
        $this->statusExpiration = $statusExpiration;

        return $this;
    }

    public function getStatusText(): ?string
    {
        return $this->statusText;
    }

    public function setStatusText(?string $statusText): self
    {
        $this->statusText = $statusText;

        return $this;
    }

    public function getStatusTextCanonical(): ?string
    {
        return $this->statusTextCanonical;
    }

    public function setStatusTextCanonical(?string $statusTextCanonical): self
    {
        $this->statusTextCanonical = $statusTextCanonical;

        return $this;
    }

    public function getTeam(): ?string
    {
        return $this->team;
    }

    public function setTeam(?string $team): self
    {
        $this->team = $team;

        return $this;
    }

    public function getTeams(): ?string
    {
        return $this->teams;
    }

    public function setTeams(?string $teams): self
    {
        $this->teams = $teams;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
