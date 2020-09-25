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

class ChatScheduleMessagePostResponse200
{
    /**
     * @var string|null
     */
    protected $channel;
    /**
     * @var ChatScheduleMessagePostResponse200Message|null
     */
    protected $message;
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var int|string|null
     */
    protected $postAt;
    /**
     * @var string|null
     */
    protected $scheduledMessageId;

    public function getChannel(): ?string
    {
        return $this->channel;
    }

    public function setChannel(?string $channel): self
    {
        $this->channel = $channel;

        return $this;
    }

    public function getMessage(): ?ChatScheduleMessagePostResponse200Message
    {
        return $this->message;
    }

    public function setMessage(?ChatScheduleMessagePostResponse200Message $message): self
    {
        $this->message = $message;

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

    /**
     * @return int|string|null
     */
    public function getPostAt()
    {
        return $this->postAt;
    }

    /**
     * @param int|string|null $postAt
     */
    public function setPostAt($postAt): self
    {
        $this->postAt = $postAt;

        return $this;
    }

    public function getScheduledMessageId(): ?string
    {
        return $this->scheduledMessageId;
    }

    public function setScheduledMessageId(?string $scheduledMessageId): self
    {
        $this->scheduledMessageId = $scheduledMessageId;

        return $this;
    }
}
