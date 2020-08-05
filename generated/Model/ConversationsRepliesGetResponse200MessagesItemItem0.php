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

class ConversationsRepliesGetResponse200MessagesItemItem0
{
    /**
     * @var string|null
     */
    protected $lastRead;
    /**
     * @var string|null
     */
    protected $latestReply;
    /**
     * @var int|null
     */
    protected $replyCount;
    /**
     * @var string[]|null
     */
    protected $replyUsers;
    /**
     * @var int|null
     */
    protected $replyUsersCount;
    /**
     * @var string|null
     */
    protected $sourceTeam;
    /**
     * @var bool|null
     */
    protected $subscribed;
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
    protected $threadTs;
    /**
     * @var string|null
     */
    protected $ts;
    /**
     * @var string|null
     */
    protected $type;
    /**
     * @var int|null
     */
    protected $unreadCount;
    /**
     * @var string|null
     */
    protected $user;
    /**
     * @var ObjsUserProfileShort|null
     */
    protected $userProfile;
    /**
     * @var string|null
     */
    protected $userTeam;

    public function getLastRead(): ?string
    {
        return $this->lastRead;
    }

    public function setLastRead(?string $lastRead): self
    {
        $this->lastRead = $lastRead;

        return $this;
    }

    public function getLatestReply(): ?string
    {
        return $this->latestReply;
    }

    public function setLatestReply(?string $latestReply): self
    {
        $this->latestReply = $latestReply;

        return $this;
    }

    public function getReplyCount(): ?int
    {
        return $this->replyCount;
    }

    public function setReplyCount(?int $replyCount): self
    {
        $this->replyCount = $replyCount;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getReplyUsers(): ?array
    {
        return $this->replyUsers;
    }

    /**
     * @param string[]|null $replyUsers
     */
    public function setReplyUsers(?array $replyUsers): self
    {
        $this->replyUsers = $replyUsers;

        return $this;
    }

    public function getReplyUsersCount(): ?int
    {
        return $this->replyUsersCount;
    }

    public function setReplyUsersCount(?int $replyUsersCount): self
    {
        $this->replyUsersCount = $replyUsersCount;

        return $this;
    }

    public function getSourceTeam(): ?string
    {
        return $this->sourceTeam;
    }

    public function setSourceTeam(?string $sourceTeam): self
    {
        $this->sourceTeam = $sourceTeam;

        return $this;
    }

    public function getSubscribed(): ?bool
    {
        return $this->subscribed;
    }

    public function setSubscribed(?bool $subscribed): self
    {
        $this->subscribed = $subscribed;

        return $this;
    }

    public function getTeam(): ?string
    {
        return $this->team;
    }

    public function setTeam(?string $team): self
    {
        $this->team = $team;

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

    public function getThreadTs(): ?string
    {
        return $this->threadTs;
    }

    public function setThreadTs(?string $threadTs): self
    {
        $this->threadTs = $threadTs;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getUnreadCount(): ?int
    {
        return $this->unreadCount;
    }

    public function setUnreadCount(?int $unreadCount): self
    {
        $this->unreadCount = $unreadCount;

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

    public function getUserProfile(): ?ObjsUserProfileShort
    {
        return $this->userProfile;
    }

    public function setUserProfile(?ObjsUserProfileShort $userProfile): self
    {
        $this->userProfile = $userProfile;

        return $this;
    }

    public function getUserTeam(): ?string
    {
        return $this->userTeam;
    }

    public function setUserTeam(?string $userTeam): self
    {
        $this->userTeam = $userTeam;

        return $this;
    }
}
