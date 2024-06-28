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

class ChatScheduledMessagesListGetResponse200
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var ChatScheduledMessagesListGetResponse200ResponseMetadata|null
     */
    protected $responseMetadata;
    /**
     * @var list<ChatScheduledMessagesListGetResponse200ScheduledMessagesItem>|null
     */
    protected $scheduledMessages;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
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

    public function getResponseMetadata(): ?ChatScheduledMessagesListGetResponse200ResponseMetadata
    {
        return $this->responseMetadata;
    }

    public function setResponseMetadata(?ChatScheduledMessagesListGetResponse200ResponseMetadata $responseMetadata): self
    {
        $this->initialized['responseMetadata'] = true;
        $this->responseMetadata = $responseMetadata;

        return $this;
    }

    /**
     * @return list<ChatScheduledMessagesListGetResponse200ScheduledMessagesItem>|null
     */
    public function getScheduledMessages(): ?array
    {
        return $this->scheduledMessages;
    }

    /**
     * @param list<ChatScheduledMessagesListGetResponse200ScheduledMessagesItem>|null $scheduledMessages
     */
    public function setScheduledMessages(?array $scheduledMessages): self
    {
        $this->initialized['scheduledMessages'] = true;
        $this->scheduledMessages = $scheduledMessages;

        return $this;
    }
}
