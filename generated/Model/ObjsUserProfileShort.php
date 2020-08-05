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
    /**
     * @var string|null
     */
    protected $avatarHash;
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
    protected $firstName;
    /**
     * @var string|null
     */
    protected $image72;
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
    protected $name;
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
    protected $team;

    public function getAvatarHash(): ?string
    {
        return $this->avatarHash;
    }

    public function setAvatarHash(?string $avatarHash): self
    {
        $this->avatarHash = $avatarHash;

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

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

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

    public function getIsRestricted(): ?bool
    {
        return $this->isRestricted;
    }

    public function setIsRestricted(?bool $isRestricted): self
    {
        $this->isRestricted = $isRestricted;

        return $this;
    }

    public function getIsUltraRestricted(): ?bool
    {
        return $this->isUltraRestricted;
    }

    public function setIsUltraRestricted(?bool $isUltraRestricted): self
    {
        $this->isUltraRestricted = $isUltraRestricted;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

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

    public function getTeam(): ?string
    {
        return $this->team;
    }

    public function setTeam(?string $team): self
    {
        $this->team = $team;

        return $this;
    }
}
