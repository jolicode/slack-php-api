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

class ConversationsHistoryGetResponse200
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
     * @var ObjsMessage[]|null
     */
    protected $messages;
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var int|null
     */
    protected $pinCount;
    /**
     * @var ConversationsHistoryGetResponse200ResponseMetadata|null
     */
    protected $responseMetadata;

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

    public function getPinCount(): ?int
    {
        return $this->pinCount;
    }

    public function setPinCount(?int $pinCount): self
    {
        $this->pinCount = $pinCount;

        return $this;
    }

    public function getResponseMetadata(): ?ConversationsHistoryGetResponse200ResponseMetadata
    {
        return $this->responseMetadata;
    }

    public function setResponseMetadata(?ConversationsHistoryGetResponse200ResponseMetadata $responseMetadata): self
    {
        $this->responseMetadata = $responseMetadata;

        return $this;
    }
}
