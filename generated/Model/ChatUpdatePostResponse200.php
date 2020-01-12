<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class ChatUpdatePostResponse200
{
    /**
     * @var string
     */
    protected $channel;
    /**
     * @var ChatUpdatePostResponse200Message
     */
    protected $message;
    /**
     * @var bool
     */
    protected $ok;
    /**
     * @var string
     */
    protected $text;
    /**
     * @var string
     */
    protected $ts;

    public function getChannel(): ?string
    {
        return $this->channel;
    }

    public function setChannel(?string $channel): self
    {
        $this->channel = $channel;

        return $this;
    }

    public function getMessage(): ?ChatUpdatePostResponse200Message
    {
        return $this->message;
    }

    public function setMessage(?ChatUpdatePostResponse200Message $message): self
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

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getTs(): ?string
    {
        return $this->ts;
    }

    public function setTs(?string $ts): self
    {
        $this->ts = $ts;

        return $this;
    }
}
