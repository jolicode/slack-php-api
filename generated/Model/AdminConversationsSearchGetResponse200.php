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

class AdminConversationsSearchGetResponse200
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<ObjsChannel>|null
     */
    protected $channels;
    /**
     * @var string|null
     */
    protected $nextCursor;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<ObjsChannel>|null
     */
    public function getChannels(): ?array
    {
        return $this->channels;
    }

    /**
     * @param list<ObjsChannel>|null $channels
     */
    public function setChannels(?array $channels): self
    {
        $this->initialized['channels'] = true;
        $this->channels = $channels;

        return $this;
    }

    public function getNextCursor(): ?string
    {
        return $this->nextCursor;
    }

    public function setNextCursor(?string $nextCursor): self
    {
        $this->initialized['nextCursor'] = true;
        $this->nextCursor = $nextCursor;

        return $this;
    }
}
