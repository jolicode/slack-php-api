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

class AppsPermissionsScopesListGetResponse200Scopes extends \ArrayObject
{
    /**
     * @var string[]|null
     */
    protected $appHome;
    /**
     * @var string[]|null
     */
    protected $channel;
    /**
     * @var string[]|null
     */
    protected $group;
    /**
     * @var string[]|null
     */
    protected $im;
    /**
     * @var string[]|null
     */
    protected $mpim;
    /**
     * @var string[]|null
     */
    protected $team;
    /**
     * @var string[]|null
     */
    protected $user;

    /**
     * @return string[]|null
     */
    public function getAppHome(): ?array
    {
        return $this->appHome;
    }

    /**
     * @param string[]|null $appHome
     */
    public function setAppHome(?array $appHome): self
    {
        $this->appHome = $appHome;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getChannel(): ?array
    {
        return $this->channel;
    }

    /**
     * @param string[]|null $channel
     */
    public function setChannel(?array $channel): self
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getGroup(): ?array
    {
        return $this->group;
    }

    /**
     * @param string[]|null $group
     */
    public function setGroup(?array $group): self
    {
        $this->group = $group;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getIm(): ?array
    {
        return $this->im;
    }

    /**
     * @param string[]|null $im
     */
    public function setIm(?array $im): self
    {
        $this->im = $im;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getMpim(): ?array
    {
        return $this->mpim;
    }

    /**
     * @param string[]|null $mpim
     */
    public function setMpim(?array $mpim): self
    {
        $this->mpim = $mpim;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getTeam(): ?array
    {
        return $this->team;
    }

    /**
     * @param string[]|null $team
     */
    public function setTeam(?array $team): self
    {
        $this->team = $team;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getUser(): ?array
    {
        return $this->user;
    }

    /**
     * @param string[]|null $user
     */
    public function setUser(?array $user): self
    {
        $this->user = $user;

        return $this;
    }
}
