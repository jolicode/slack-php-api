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
     * @var array
     */
    protected $initialized = [];
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

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getLastRead(): ?string
    {
        return $this->lastRead;
    }

    public function setLastRead(?string $lastRead): self
    {
        $this->initialized['lastRead'] = true;
        $this->lastRead = $lastRead;

        return $this;
    }

    public function getLatestReply(): ?string
    {
        return $this->latestReply;
    }

    public function setLatestReply(?string $latestReply): self
    {
        $this->initialized['latestReply'] = true;
        $this->latestReply = $latestReply;

        return $this;
    }

    public function getReplyCount(): ?int
    {
        return $this->replyCount;
    }

    public function setReplyCount(?int $replyCount): self
    {
        $this->initialized['replyCount'] = true;
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
        $this->initialized['replyUsers'] = true;
        $this->replyUsers = $replyUsers;

        return $this;
    }

    public function getReplyUsersCount(): ?int
    {
        return $this->replyUsersCount;
    }

    public function setReplyUsersCount(?int $replyUsersCount): self
    {
        $this->initialized['replyUsersCount'] = true;
        $this->replyUsersCount = $replyUsersCount;

        return $this;
    }

    public function getSourceTeam(): ?string
    {
        return $this->sourceTeam;
    }

    public function setSourceTeam(?string $sourceTeam): self
    {
        $this->initialized['sourceTeam'] = true;
        $this->sourceTeam = $sourceTeam;

        return $this;
    }

    public function getSubscribed(): ?bool
    {
        return $this->subscribed;
    }

    public function setSubscribed(?bool $subscribed): self
    {
        $this->initialized['subscribed'] = true;
        $this->subscribed = $subscribed;

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

    public function getThreadTs(): ?string
    {
        return $this->threadTs;
    }

    public function setThreadTs(?string $threadTs): self
    {
        $this->initialized['threadTs'] = true;
        $this->threadTs = $threadTs;

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

    public function getUnreadCount(): ?int
    {
        return $this->unreadCount;
    }

    public function setUnreadCount(?int $unreadCount): self
    {
        $this->initialized['unreadCount'] = true;
        $this->unreadCount = $unreadCount;

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

    public function getUserProfile(): ?ObjsUserProfileShort
    {
        return $this->userProfile;
    }

    public function setUserProfile(?ObjsUserProfileShort $userProfile): self
    {
        $this->initialized['userProfile'] = true;
        $this->userProfile = $userProfile;

        return $this;
    }

    public function getUserTeam(): ?string
    {
        return $this->userTeam;
    }

    public function setUserTeam(?string $userTeam): self
    {
        $this->initialized['userTeam'] = true;
        $this->userTeam = $userTeam;

        return $this;
    }
}
