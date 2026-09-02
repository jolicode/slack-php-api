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

use JoliCode\Slack\Api\Runtime\AdditionalAndPatternProperties;
use JoliCode\Slack\Api\Runtime\AdditionalPropertiesInterface;

class AppsPermissionsScopesListGetResponse200Scopes implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<string>|null
     */
    protected $appHome;
    /**
     * @var list<string>|null
     */
    protected $channel;
    /**
     * @var list<string>|null
     */
    protected $group;
    /**
     * @var list<string>|null
     */
    protected $im;
    /**
     * @var list<string>|null
     */
    protected $mpim;
    /**
     * @var list<string>|null
     */
    protected $team;
    /**
     * @var list<string>|null
     */
    protected $user;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<string>|null
     */
    public function getAppHome(): ?array
    {
        return $this->appHome;
    }

    /**
     * @param list<string>|null $appHome
     */
    public function setAppHome(?array $appHome): self
    {
        $this->initialized['appHome'] = true;
        $this->appHome = $appHome;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getChannel(): ?array
    {
        return $this->channel;
    }

    /**
     * @param list<string>|null $channel
     */
    public function setChannel(?array $channel): self
    {
        $this->initialized['channel'] = true;
        $this->channel = $channel;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getGroup(): ?array
    {
        return $this->group;
    }

    /**
     * @param list<string>|null $group
     */
    public function setGroup(?array $group): self
    {
        $this->initialized['group'] = true;
        $this->group = $group;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getIm(): ?array
    {
        return $this->im;
    }

    /**
     * @param list<string>|null $im
     */
    public function setIm(?array $im): self
    {
        $this->initialized['im'] = true;
        $this->im = $im;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getMpim(): ?array
    {
        return $this->mpim;
    }

    /**
     * @param list<string>|null $mpim
     */
    public function setMpim(?array $mpim): self
    {
        $this->initialized['mpim'] = true;
        $this->mpim = $mpim;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getTeam(): ?array
    {
        return $this->team;
    }

    /**
     * @param list<string>|null $team
     */
    public function setTeam(?array $team): self
    {
        $this->initialized['team'] = true;
        $this->team = $team;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getUser(): ?array
    {
        return $this->user;
    }

    /**
     * @param list<string>|null $user
     */
    public function setUser(?array $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['appHome' => ['app_home', 'getAppHome', 'setAppHome'], 'channel' => ['channel', 'getChannel', 'setChannel'], 'group' => ['group', 'getGroup', 'setGroup'], 'im' => ['im', 'getIm', 'setIm'], 'mpim' => ['mpim', 'getMpim', 'setMpim'], 'team' => ['team', 'getTeam', 'setTeam'], 'user' => ['user', 'getUser', 'setUser']];
    }
}
