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

class ChatScheduleMessagePostResponse200Message
{
    /**
     * @var string|null
     */
    protected $botId;
    /**
     * @var string|null
     */
    protected $text;
    /**
     * @var string|null
     */
    protected $type;
    /**
     * @var string|null
     */
    protected $user;
    /**
     * @var string|null
     */
    protected $username;

    public function getBotId(): ?string
    {
        return $this->botId;
    }

    public function setBotId(?string $botId): self
    {
        $this->botId = $botId;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(?string $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): self
    {
        $this->username = $username;

        return $this;
    }
}
