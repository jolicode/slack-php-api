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

class ChatUpdatePostResponse200
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $channel;
    /**
     * @var ChatUpdatePostResponse200Message|null
     */
    protected $message;
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var string|null
     */
    protected $text;
    /**
     * @var string|null
     */
    protected $ts;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getChannel(): ?string
    {
        return $this->channel;
    }

    public function setChannel(?string $channel): self
    {
        $this->initialized['channel'] = true;
        $this->channel = $channel;

        return $this;
    }

    public function getMessage(): ?ChatUpdatePostResponse200Message
    {
        return $this->message;
    }

    public function setMessage(?ChatUpdatePostResponse200Message $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

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

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->initialized['text'] = true;
        $this->text = $text;

        return $this;
    }

    public function getTs(): ?string
    {
        return $this->ts;
    }

    public function setTs(?string $ts): self
    {
        $this->initialized['ts'] = true;
        $this->ts = $ts;

        return $this;
    }
}
