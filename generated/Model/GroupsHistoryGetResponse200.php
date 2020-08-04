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

class GroupsHistoryGetResponse200
{
    /**
     * @var int|null
     */
    protected $channelActionsCount;
    /**
     * @var mixed|null
     */
    protected $channelActionsTs;
    /**
     * @var bool|null
     */
    protected $hasMore;
    /**
     * @var string|null
     */
    protected $latest;
    /**
     * @var ObjsMessage[]|null
     */
    protected $messages;
    /**
     * @var bool|null
     */
    protected $ok;

    public function getChannelActionsCount(): ?int
    {
        return $this->channelActionsCount;
    }

    public function setChannelActionsCount(?int $channelActionsCount): self
    {
        $this->channelActionsCount = $channelActionsCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getChannelActionsTs()
    {
        return $this->channelActionsTs;
    }

    /**
     * @param mixed $channelActionsTs
     */
    public function setChannelActionsTs($channelActionsTs): self
    {
        $this->channelActionsTs = $channelActionsTs;

        return $this;
    }

    public function getHasMore(): ?bool
    {
        return $this->hasMore;
    }

    public function setHasMore(?bool $hasMore): self
    {
        $this->hasMore = $hasMore;

        return $this;
    }

    public function getLatest(): ?string
    {
        return $this->latest;
    }

    public function setLatest(?string $latest): self
    {
        $this->latest = $latest;

        return $this;
    }

    /**
     * @return ObjsMessage[]|null
     */
    public function getMessages(): ?array
    {
        return $this->messages;
    }

    /**
     * @param ObjsMessage[]|null $messages
     */
    public function setMessages(?array $messages): self
    {
        $this->messages = $messages;

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
}
