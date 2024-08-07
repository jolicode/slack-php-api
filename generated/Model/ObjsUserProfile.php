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
     * @var array
     */
    protected $initialized = [];
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
     * @var list<mixed>|mixed|null
     */
    protected $fields;
    /**
     * @var string|null
     */
    protected $firstName;
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
    protected $isAppUser;
    /**
     * @var bool|null
     */
    protected $isCustomImage;
    /**
     * @var bool|null
     */
    protected $isRestricted;
    /**
     * @var bool|null
     */
    protected $isUltraRestricted;
    /**
     * @var string|null
     */
    protected $lastAvatarImageHash;
    /**
     * @var string|null
     */
    protected $lastName;
    /**
     * @var int|null
     */
    protected $membershipsCount;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $phone;
    /**
     * @var string|null
     */
    protected $pronouns;
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
    protected $statusDefaultEmoji;
    /**
     * @var string|null
     */
    protected $statusDefaultText;
    /**
     * @var string|null
     */
    protected $statusDefaultTextCanonical;
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
    protected $title;
    /**
     * @var int|null
     */
    protected $updated;
    /**
     * @var string|null
     */
    protected $userId;
    /**
     * @var string|null
     */
    protected $username;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getAlwaysActive(): ?bool
    {
        return $this->alwaysActive;
    }

    public function setAlwaysActive(?bool $alwaysActive): self
    {
        $this->initialized['alwaysActive'] = true;
        $this->alwaysActive = $alwaysActive;

        return $this;
    }

    public function getApiAppId(): ?string
    {
        return $this->apiAppId;
    }

    public function setApiAppId(?string $apiAppId): self
    {
        $this->initialized['apiAppId'] = true;
        $this->apiAppId = $apiAppId;

        return $this;
    }

    public function getAvatarHash(): ?string
    {
        return $this->avatarHash;
    }

    public function setAvatarHash(?string $avatarHash): self
    {
        $this->initialized['avatarHash'] = true;
        $this->avatarHash = $avatarHash;

        return $this;
    }

    public function getBotId(): ?string
    {
        return $this->botId;
    }

    public function setBotId(?string $botId): self
    {
        $this->initialized['botId'] = true;
        $this->botId = $botId;

        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->initialized['displayName'] = true;
        $this->displayName = $displayName;

        return $this;
    }

    public function getDisplayNameNormalized(): ?string
    {
        return $this->displayNameNormalized;
    }

    public function setDisplayNameNormalized(?string $displayNameNormalized): self
    {
        $this->initialized['displayNameNormalized'] = true;
        $this->displayNameNormalized = $displayNameNormalized;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }

    /**
     * @return list<mixed>|mixed
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param list<mixed>|mixed $fields
     */
    public function setFields($fields): self
    {
        $this->initialized['fields'] = true;
        $this->fields = $fields;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;

        return $this;
    }

    public function getGuestExpirationTs(): ?int
    {
        return $this->guestExpirationTs;
    }

    public function setGuestExpirationTs(?int $guestExpirationTs): self
    {
        $this->initialized['guestExpirationTs'] = true;
        $this->guestExpirationTs = $guestExpirationTs;

        return $this;
    }

    public function getGuestInvitedBy(): ?string
    {
        return $this->guestInvitedBy;
    }

    public function setGuestInvitedBy(?string $guestInvitedBy): self
    {
        $this->initialized['guestInvitedBy'] = true;
        $this->guestInvitedBy = $guestInvitedBy;

        return $this;
    }

    public function getImage1024(): ?string
    {
        return $this->image1024;
    }

    public function setImage1024(?string $image1024): self
    {
        $this->initialized['image1024'] = true;
        $this->image1024 = $image1024;

        return $this;
    }

    public function getImage192(): ?string
    {
        return $this->image192;
    }

    public function setImage192(?string $image192): self
    {
        $this->initialized['image192'] = true;
        $this->image192 = $image192;

        return $this;
    }

    public function getImage24(): ?string
    {
        return $this->image24;
    }

    public function setImage24(?string $image24): self
    {
        $this->initialized['image24'] = true;
        $this->image24 = $image24;

        return $this;
    }

    public function getImage32(): ?string
    {
        return $this->image32;
    }

    public function setImage32(?string $image32): self
    {
        $this->initialized['image32'] = true;
        $this->image32 = $image32;

        return $this;
    }

    public function getImage48(): ?string
    {
        return $this->image48;
    }

    public function setImage48(?string $image48): self
    {
        $this->initialized['image48'] = true;
        $this->image48 = $image48;

        return $this;
    }

    public function getImage512(): ?string
    {
        return $this->image512;
    }

    public function setImage512(?string $image512): self
    {
        $this->initialized['image512'] = true;
        $this->image512 = $image512;

        return $this;
    }

    public function getImage72(): ?string
    {
        return $this->image72;
    }

    public function setImage72(?string $image72): self
    {
        $this->initialized['image72'] = true;
        $this->image72 = $image72;

        return $this;
    }

    public function getImageOriginal(): ?string
    {
        return $this->imageOriginal;
    }

    public function setImageOriginal(?string $imageOriginal): self
    {
        $this->initialized['imageOriginal'] = true;
        $this->imageOriginal = $imageOriginal;

        return $this;
    }

    public function getIsAppUser(): ?bool
    {
        return $this->isAppUser;
    }

    public function setIsAppUser(?bool $isAppUser): self
    {
        $this->initialized['isAppUser'] = true;
        $this->isAppUser = $isAppUser;

        return $this;
    }

    public function getIsCustomImage(): ?bool
    {
        return $this->isCustomImage;
    }

    public function setIsCustomImage(?bool $isCustomImage): self
    {
        $this->initialized['isCustomImage'] = true;
        $this->isCustomImage = $isCustomImage;

        return $this;
    }

    public function getIsRestricted(): ?bool
    {
        return $this->isRestricted;
    }

    public function setIsRestricted(?bool $isRestricted): self
    {
        $this->initialized['isRestricted'] = true;
        $this->isRestricted = $isRestricted;

        return $this;
    }

    public function getIsUltraRestricted(): ?bool
    {
        return $this->isUltraRestricted;
    }

    public function setIsUltraRestricted(?bool $isUltraRestricted): self
    {
        $this->initialized['isUltraRestricted'] = true;
        $this->isUltraRestricted = $isUltraRestricted;

        return $this;
    }

    public function getLastAvatarImageHash(): ?string
    {
        return $this->lastAvatarImageHash;
    }

    public function setLastAvatarImageHash(?string $lastAvatarImageHash): self
    {
        $this->initialized['lastAvatarImageHash'] = true;
        $this->lastAvatarImageHash = $lastAvatarImageHash;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;

        return $this;
    }

    public function getMembershipsCount(): ?int
    {
        return $this->membershipsCount;
    }

    public function setMembershipsCount(?int $membershipsCount): self
    {
        $this->initialized['membershipsCount'] = true;
        $this->membershipsCount = $membershipsCount;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;

        return $this;
    }

    public function getPronouns(): ?string
    {
        return $this->pronouns;
    }

    public function setPronouns(?string $pronouns): self
    {
        $this->initialized['pronouns'] = true;
        $this->pronouns = $pronouns;

        return $this;
    }

    public function getRealName(): ?string
    {
        return $this->realName;
    }

    public function setRealName(?string $realName): self
    {
        $this->initialized['realName'] = true;
        $this->realName = $realName;

        return $this;
    }

    public function getRealNameNormalized(): ?string
    {
        return $this->realNameNormalized;
    }

    public function setRealNameNormalized(?string $realNameNormalized): self
    {
        $this->initialized['realNameNormalized'] = true;
        $this->realNameNormalized = $realNameNormalized;

        return $this;
    }

    public function getSkype(): ?string
    {
        return $this->skype;
    }

    public function setSkype(?string $skype): self
    {
        $this->initialized['skype'] = true;
        $this->skype = $skype;

        return $this;
    }

    public function getStatusDefaultEmoji(): ?string
    {
        return $this->statusDefaultEmoji;
    }

    public function setStatusDefaultEmoji(?string $statusDefaultEmoji): self
    {
        $this->initialized['statusDefaultEmoji'] = true;
        $this->statusDefaultEmoji = $statusDefaultEmoji;

        return $this;
    }

    public function getStatusDefaultText(): ?string
    {
        return $this->statusDefaultText;
    }

    public function setStatusDefaultText(?string $statusDefaultText): self
    {
        $this->initialized['statusDefaultText'] = true;
        $this->statusDefaultText = $statusDefaultText;

        return $this;
    }

    public function getStatusDefaultTextCanonical(): ?string
    {
        return $this->statusDefaultTextCanonical;
    }

    public function setStatusDefaultTextCanonical(?string $statusDefaultTextCanonical): self
    {
        $this->initialized['statusDefaultTextCanonical'] = true;
        $this->statusDefaultTextCanonical = $statusDefaultTextCanonical;

        return $this;
    }

    public function getStatusEmoji(): ?string
    {
        return $this->statusEmoji;
    }

    public function setStatusEmoji(?string $statusEmoji): self
    {
        $this->initialized['statusEmoji'] = true;
        $this->statusEmoji = $statusEmoji;

        return $this;
    }

    public function getStatusExpiration(): ?int
    {
        return $this->statusExpiration;
    }

    public function setStatusExpiration(?int $statusExpiration): self
    {
        $this->initialized['statusExpiration'] = true;
        $this->statusExpiration = $statusExpiration;

        return $this;
    }

    public function getStatusText(): ?string
    {
        return $this->statusText;
    }

    public function setStatusText(?string $statusText): self
    {
        $this->initialized['statusText'] = true;
        $this->statusText = $statusText;

        return $this;
    }

    public function getStatusTextCanonical(): ?string
    {
        return $this->statusTextCanonical;
    }

    public function setStatusTextCanonical(?string $statusTextCanonical): self
    {
        $this->initialized['statusTextCanonical'] = true;
        $this->statusTextCanonical = $statusTextCanonical;

        return $this;
    }

    public function getTeam(): ?string
    {
        return $this->team;
    }

    public function setTeam(?string $team): self
    {
        $this->initialized['team'] = true;
        $this->team = $team;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }

    public function getUpdated(): ?int
    {
        return $this->updated;
    }

    public function setUpdated(?int $updated): self
    {
        $this->initialized['updated'] = true;
        $this->updated = $updated;

        return $this;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(?string $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): self
    {
        $this->initialized['username'] = true;
        $this->username = $username;

        return $this;
    }
}
