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

class ObjsSubteamPrefs
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string[]|null
     */
    protected $channels;
    /**
     * @var string[]|null
     */
    protected $groups;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return string[]|null
     */
    public function getChannels(): ?array
    {
        return $this->channels;
    }

    /**
     * @param string[]|null $channels
     */
    public function setChannels(?array $channels): self
    {
        $this->initialized['channels'] = true;
        $this->channels = $channels;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getGroups(): ?array
    {
        return $this->groups;
    }

    /**
     * @param string[]|null $groups
     */
    public function setGroups(?array $groups): self
    {
        $this->initialized['groups'] = true;
        $this->groups = $groups;

        return $this;
    }
}
