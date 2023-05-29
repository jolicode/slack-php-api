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

class ObjsMetadata
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var mixed|null
     */
    protected $eventPayload;
    /**
     * @var string|null
     */
    protected $eventType;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getEventPayload()
    {
        return $this->eventPayload;
    }

    public function setEventPayload($eventPayload): self
    {
        $this->initialized['eventPayload'] = true;
        $this->eventPayload = $eventPayload;

        return $this;
    }

    public function getEventType(): ?string
    {
        return $this->eventType;
    }

    public function setEventType(?string $eventType): self
    {
        $this->initialized['eventType'] = true;
        $this->eventType = $eventType;

        return $this;
    }
}
