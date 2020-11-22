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

class UsersProfileSetPostResponse200
{
    /**
     * @var string|null
     */
    protected $emailPending;
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var ObjsUserProfile|null
     */
    protected $profile;
    /**
     * @var string|null
     */
    protected $username;

    public function getEmailPending(): ?string
    {
        return $this->emailPending;
    }

    public function setEmailPending(?string $emailPending): self
    {
        $this->emailPending = $emailPending;

        return $this;
    }

    public function getOk(): ?bool
    {
        return $this->ok;
    }

    public function setOk(?bool $ok): self
    {
        $this->ok = $ok;

        return $this;
    }

    public function getProfile(): ?ObjsUserProfile
    {
        return $this->profile;
    }

    public function setProfile(?ObjsUserProfile $profile): self
    {
        $this->profile = $profile;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): self
    {
        $this->username = $username;

        return $this;
    }
}
