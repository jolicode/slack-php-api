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

class AppsPermissionsInfoGetResponse200Info
{
    /**
     * @var AppsPermissionsInfoGetResponse200InfoAppHome|null
     */
    protected $appHome;
    /**
     * @var AppsPermissionsInfoGetResponse200InfoChannel|null
     */
    protected $channel;
    /**
     * @var AppsPermissionsInfoGetResponse200InfoGroup|null
     */
    protected $group;
    /**
     * @var AppsPermissionsInfoGetResponse200InfoIm|null
     */
    protected $im;
    /**
     * @var AppsPermissionsInfoGetResponse200InfoMpim|null
     */
    protected $mpim;
    /**
     * @var AppsPermissionsInfoGetResponse200InfoTeam|null
     */
    protected $team;

    public function getAppHome(): ?AppsPermissionsInfoGetResponse200InfoAppHome
    {
        return $this->appHome;
    }

    public function setAppHome(?AppsPermissionsInfoGetResponse200InfoAppHome $appHome): self
    {
        $this->appHome = $appHome;

        return $this;
    }

    public function getChannel(): ?AppsPermissionsInfoGetResponse200InfoChannel
    {
        return $this->channel;
    }

    public function setChannel(?AppsPermissionsInfoGetResponse200InfoChannel $channel): self
    {
        $this->channel = $channel;

        return $this;
    }

    public function getGroup(): ?AppsPermissionsInfoGetResponse200InfoGroup
    {
        return $this->group;
    }

    public function setGroup(?AppsPermissionsInfoGetResponse200InfoGroup $group): self
    {
        $this->group = $group;

        return $this;
    }

    public function getIm(): ?AppsPermissionsInfoGetResponse200InfoIm
    {
        return $this->im;
    }

    public function setIm(?AppsPermissionsInfoGetResponse200InfoIm $im): self
    {
        $this->im = $im;

        return $this;
    }

    public function getMpim(): ?AppsPermissionsInfoGetResponse200InfoMpim
    {
        return $this->mpim;
    }

    public function setMpim(?AppsPermissionsInfoGetResponse200InfoMpim $mpim): self
    {
        $this->mpim = $mpim;

        return $this;
    }

    public function getTeam(): ?AppsPermissionsInfoGetResponse200InfoTeam
    {
        return $this->team;
    }

    public function setTeam(?AppsPermissionsInfoGetResponse200InfoTeam $team): self
    {
        $this->team = $team;

        return $this;
    }
}
