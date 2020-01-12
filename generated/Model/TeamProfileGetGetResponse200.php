<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class TeamProfileGetGetResponse200
{
    /**
     * @var bool
     */
    protected $ok;
    /**
     * @var TeamProfileGetGetResponse200Profile
     */
    protected $profile;

    public function getOk(): ?bool
    {
        return $this->ok;
    }

    public function setOk(?bool $ok): self
    {
        $this->ok = $ok;

        return $this;
    }

    public function getProfile(): ?TeamProfileGetGetResponse200Profile
    {
        return $this->profile;
    }

    public function setProfile(?TeamProfileGetGetResponse200Profile $profile): self
    {
        $this->profile = $profile;

        return $this;
    }
}
