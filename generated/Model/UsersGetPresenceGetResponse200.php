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

class UsersGetPresenceGetResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var bool|null
     */
    protected $autoAway;
    /**
     * @var int|null
     */
    protected $connectionCount;
    /**
     * @var int|null
     */
    protected $lastActivity;
    /**
     * @var bool|null
     */
    protected $manualAway;
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var bool|null
     */
    protected $online;
    /**
     * @var string|null
     */
    protected $presence;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getAutoAway(): ?bool
    {
        return $this->autoAway;
    }

    public function setAutoAway(?bool $autoAway): self
    {
        $this->initialized['autoAway'] = true;
        $this->autoAway = $autoAway;

        return $this;
    }

    public function getConnectionCount(): ?int
    {
        return $this->connectionCount;
    }

    public function setConnectionCount(?int $connectionCount): self
    {
        $this->initialized['connectionCount'] = true;
        $this->connectionCount = $connectionCount;

        return $this;
    }

    public function getLastActivity(): ?int
    {
        return $this->lastActivity;
    }

    public function setLastActivity(?int $lastActivity): self
    {
        $this->initialized['lastActivity'] = true;
        $this->lastActivity = $lastActivity;

        return $this;
    }

    public function getManualAway(): ?bool
    {
        return $this->manualAway;
    }

    public function setManualAway(?bool $manualAway): self
    {
        $this->initialized['manualAway'] = true;
        $this->manualAway = $manualAway;

        return $this;
    }

    public function getOk(): ?bool
    {
        return $this->ok;
    }

    public function setOk(?bool $ok): self
    {
        $this->initialized['ok'] = true;
        $this->ok = $ok;

        return $this;
    }

    public function getOnline(): ?bool
    {
        return $this->online;
    }

    public function setOnline(?bool $online): self
    {
        $this->initialized['online'] = true;
        $this->online = $online;

        return $this;
    }

    public function getPresence(): ?string
    {
        return $this->presence;
    }

    public function setPresence(?string $presence): self
    {
        $this->initialized['presence'] = true;
        $this->presence = $presence;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['autoAway' => ['auto_away', 'getAutoAway', 'setAutoAway'], 'connectionCount' => ['connection_count', 'getConnectionCount', 'setConnectionCount'], 'lastActivity' => ['last_activity', 'getLastActivity', 'setLastActivity'], 'manualAway' => ['manual_away', 'getManualAway', 'setManualAway'], 'ok' => ['ok', 'getOk', 'setOk'], 'online' => ['online', 'getOnline', 'setOnline'], 'presence' => ['presence', 'getPresence', 'setPresence']];
    }
}
