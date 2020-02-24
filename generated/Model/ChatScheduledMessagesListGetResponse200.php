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
     * @var bool|null
     */
    protected $ok;
    /**
     * @var ChatScheduledMessagesListGetResponse200ResponseMetadata|null
     */
    protected $responseMetadata;
    /**
     * @var ChatScheduledMessagesListGetResponse200ScheduledMessagesItem[]|null
     */
    protected $scheduledMessages;

    public function getOk(): ?bool
    {
        return $this->ok;
    }

    public function setOk(?bool $ok): self
    {
        $this->ok = $ok;

        return $this;
    }

    public function getResponseMetadata(): ?ChatScheduledMessagesListGetResponse200ResponseMetadata
    {
        return $this->responseMetadata;
    }

    public function setResponseMetadata(?ChatScheduledMessagesListGetResponse200ResponseMetadata $responseMetadata): self
    {
        $this->responseMetadata = $responseMetadata;

        return $this;
    }

    /**
     * @return ChatScheduledMessagesListGetResponse200ScheduledMessagesItem[]|null
     */
    public function getScheduledMessages(): ?array
    {
        return $this->scheduledMessages;
    }

    /**
     * @param ChatScheduledMessagesListGetResponse200ScheduledMessagesItem[]|null $scheduledMessages
     */
    public function setScheduledMessages(?array $scheduledMessages): self
    {
        $this->scheduledMessages = $scheduledMessages;

        return $this;
    }
}
