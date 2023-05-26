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

class ObjsComment
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $comment;
    /**
     * @var int|null
     */
    protected $created;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var bool|null
     */
    protected $isIntro;
    /**
     * @var bool|null
     */
    protected $isStarred;
    /**
     * @var int|null
     */
    protected $numStars;
    /**
     * @var mixed|null
     */
    protected $pinnedInfo;
    /**
     * @var string[]|null
     */
    protected $pinnedTo;
    /**
     * @var ObjsReaction[]|null
     */
    protected $reactions;
    /**
     * @var int|string|null
     */
    protected $timestamp;
    /**
     * @var string|null
     */
    protected $user;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;

        return $this;
    }

    public function getCreated(): ?int
    {
        return $this->created;
    }

    public function setCreated(?int $created): self
    {
        $this->initialized['created'] = true;
        $this->created = $created;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getIsIntro(): ?bool
    {
        return $this->isIntro;
    }

    public function setIsIntro(?bool $isIntro): self
    {
        $this->initialized['isIntro'] = true;
        $this->isIntro = $isIntro;

        return $this;
    }

    public function getIsStarred(): ?bool
    {
        return $this->isStarred;
    }

    public function setIsStarred(?bool $isStarred): self
    {
        $this->initialized['isStarred'] = true;
        $this->isStarred = $isStarred;

        return $this;
    }

    public function getNumStars(): ?int
    {
        return $this->numStars;
    }

    public function setNumStars(?int $numStars): self
    {
        $this->initialized['numStars'] = true;
        $this->numStars = $numStars;

        return $this;
    }

    public function getPinnedInfo()
    {
        return $this->pinnedInfo;
    }

    public function setPinnedInfo($pinnedInfo): self
    {
        $this->initialized['pinnedInfo'] = true;
        $this->pinnedInfo = $pinnedInfo;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getPinnedTo(): ?array
    {
        return $this->pinnedTo;
    }

    /**
     * @param string[]|null $pinnedTo
     */
    public function setPinnedTo(?array $pinnedTo): self
    {
        $this->initialized['pinnedTo'] = true;
        $this->pinnedTo = $pinnedTo;

        return $this;
    }

    /**
     * @return ObjsReaction[]|null
     */
    public function getReactions(): ?array
    {
        return $this->reactions;
    }

    /**
     * @param ObjsReaction[]|null $reactions
     */
    public function setReactions(?array $reactions): self
    {
        $this->initialized['reactions'] = true;
        $this->reactions = $reactions;

        return $this;
    }

    /**
     * @return int|string|null
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param int|string|null $timestamp
     */
    public function setTimestamp($timestamp): self
    {
        $this->initialized['timestamp'] = true;
        $this->timestamp = $timestamp;

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
}
