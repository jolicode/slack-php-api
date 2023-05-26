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

class ChatScheduledMessagesListGetResponse200ScheduledMessagesItem
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $channelId;
    /**
     * @var int|null
     */
    protected $dateCreated;
    /**
     * @var int|null
     */
    protected $id;
    /**
     * @var int|string|null
     */
    protected $postAt;
    /**
     * @var string|null
     */
    protected $text;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getChannelId(): ?string
    {
        return $this->channelId;
    }

    public function setChannelId(?string $channelId): self
    {
        $this->initialized['channelId'] = true;
        $this->channelId = $channelId;

        return $this;
    }

    public function getDateCreated(): ?int
    {
        return $this->dateCreated;
    }

    public function setDateCreated(?int $dateCreated): self
    {
        $this->initialized['dateCreated'] = true;
        $this->dateCreated = $dateCreated;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

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
        $this->initialized['postAt'] = true;
        $this->postAt = $postAt;

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
}
