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
     * @var array
     */
    protected $initialized = [];
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
     * @var list<ObjsMessage>|null
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

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getChannelActionsCount(): ?int
    {
        return $this->channelActionsCount;
    }

    public function setChannelActionsCount(?int $channelActionsCount): self
    {
        $this->initialized['channelActionsCount'] = true;
        $this->channelActionsCount = $channelActionsCount;

        return $this;
    }

    public function getChannelActionsTs()
    {
        return $this->channelActionsTs;
    }

    public function setChannelActionsTs($channelActionsTs): self
    {
        $this->initialized['channelActionsTs'] = true;
        $this->channelActionsTs = $channelActionsTs;

        return $this;
    }

    public function getHasMore(): ?bool
    {
        return $this->hasMore;
    }

    public function setHasMore(?bool $hasMore): self
    {
        $this->initialized['hasMore'] = true;
        $this->hasMore = $hasMore;

        return $this;
    }

    /**
     * @return list<ObjsMessage>|null
     */
    public function getMessages(): ?array
    {
        return $this->messages;
    }

    /**
     * @param list<ObjsMessage>|null $messages
     */
    public function setMessages(?array $messages): self
    {
        $this->initialized['messages'] = true;
        $this->messages = $messages;

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

    public function getPinCount(): ?int
    {
        return $this->pinCount;
    }

    public function setPinCount(?int $pinCount): self
    {
        $this->initialized['pinCount'] = true;
        $this->pinCount = $pinCount;

        return $this;
    }

    public function getResponseMetadata(): ?ConversationsHistoryGetResponse200ResponseMetadata
    {
        return $this->responseMetadata;
    }

    public function setResponseMetadata(?ConversationsHistoryGetResponse200ResponseMetadata $responseMetadata): self
    {
        $this->initialized['responseMetadata'] = true;
        $this->responseMetadata = $responseMetadata;

        return $this;
    }
}
