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
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<ChatScheduleMessagePostResponse200MessageAttachmentsItem>|null
     */
    protected $attachments;
    /**
     * @var string|null
     */
    protected $botId;
    /**
     * @var ObjsBotProfile|null
     */
    protected $botProfile;
    /**
     * @var string|null
     */
    protected $subtype;
    /**
     * @var string|null
     */
    protected $team;
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

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<ChatScheduleMessagePostResponse200MessageAttachmentsItem>|null
     */
    public function getAttachments(): ?array
    {
        return $this->attachments;
    }

    /**
     * @param list<ChatScheduleMessagePostResponse200MessageAttachmentsItem>|null $attachments
     */
    public function setAttachments(?array $attachments): self
    {
        $this->initialized['attachments'] = true;
        $this->attachments = $attachments;

        return $this;
    }

    public function getBotId(): ?string
    {
        return $this->botId;
    }

    public function setBotId(?string $botId): self
    {
        $this->initialized['botId'] = true;
        $this->botId = $botId;

        return $this;
    }

    public function getBotProfile(): ?ObjsBotProfile
    {
        return $this->botProfile;
    }

    public function setBotProfile(?ObjsBotProfile $botProfile): self
    {
        $this->initialized['botProfile'] = true;
        $this->botProfile = $botProfile;

        return $this;
    }

    public function getSubtype(): ?string
    {
        return $this->subtype;
    }

    public function setSubtype(?string $subtype): self
    {
        $this->initialized['subtype'] = true;
        $this->subtype = $subtype;

        return $this;
    }

    public function getTeam(): ?string
    {
        return $this->team;
    }

    public function setTeam(?string $team): self
    {
        $this->initialized['team'] = true;
        $this->team = $team;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(?string $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): self
    {
        $this->initialized['username'] = true;
        $this->username = $username;

        return $this;
    }
}
