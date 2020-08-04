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

class ObjsMessage
{
    /**
     * @var ObjsMessageAttachmentsItem[]|null
     */
    protected $attachments;
    /**
     * This is a very loose definition, in the future, we'll populate this with deeper schema in this definition namespace.
     *
     * @var BlocksItem[]|null
     */
    protected $blocks;
    /**
     * @var mixed|null
     */
    protected $botId;
    /**
     * @var ObjsBotProfile|null
     */
    protected $botProfile;
    /**
     * @var string|null
     */
    protected $clientMsgId;
    /**
     * @var ObjsComment|null
     */
    protected $comment;
    /**
     * @var bool|null
     */
    protected $displayAsBot;
    /**
     * @var ObjsFile|null
     */
    protected $file;
    /**
     * @var ObjsFile[]|null
     */
    protected $files;
    /**
     * @var ObjsMessageIcons|null
     */
    protected $icons;
    /**
     * @var string|null
     */
    protected $inviter;
    /**
     * @var bool|null
     */
    protected $isDelayedMessage;
    /**
     * @var bool|null
     */
    protected $isIntro;
    /**
     * @var bool|null
     */
    protected $isStarred;
    /**
     * @var string|null
     */
    protected $lastRead;
    /**
     * @var string|null
     */
    protected $latestReply;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $oldName;
    /**
     * @var string|null
     */
    protected $parentUserId;
    /**
     * @var string|null
     */
    protected $permalink;
    /**
     * @var string[]|null
     */
    protected $pinnedTo;
    /**
     * @var string|null
     */
    protected $purpose;
    /**
     * @var ObjsReaction[]|null
     */
    protected $reactions;
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
    protected $threadTs;
    /**
     * @var string|null
     */
    protected $topic;
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
     * @var bool|null
     */
    protected $upload;
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
    /**
     * @var string|null
     */
    protected $username;

    /**
     * @return ObjsMessageAttachmentsItem[]|null
     */
    public function getAttachments(): ?array
    {
        return $this->attachments;
    }

    /**
     * @param ObjsMessageAttachmentsItem[]|null $attachments
     */
    public function setAttachments(?array $attachments): self
    {
        $this->attachments = $attachments;

        return $this;
    }

    /**
     * This is a very loose definition, in the future, we'll populate this with deeper schema in this definition namespace.
     *
     * @return BlocksItem[]|null
     */
    public function getBlocks(): ?array
    {
        return $this->blocks;
    }

    /**
     * This is a very loose definition, in the future, we'll populate this with deeper schema in this definition namespace.
     *
     * @param BlocksItem[]|null $blocks
     */
    public function setBlocks(?array $blocks): self
    {
        $this->blocks = $blocks;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBotId()
    {
        return $this->botId;
    }

    /**
     * @param mixed $botId
     */
    public function setBotId($botId): self
    {
        $this->botId = $botId;

        return $this;
    }

    public function getBotProfile(): ?ObjsBotProfile
    {
        return $this->botProfile;
    }

    public function setBotProfile(?ObjsBotProfile $botProfile): self
    {
        $this->botProfile = $botProfile;

        return $this;
    }

    public function getClientMsgId(): ?string
    {
        return $this->clientMsgId;
    }

    public function setClientMsgId(?string $clientMsgId): self
    {
        $this->clientMsgId = $clientMsgId;

        return $this;
    }

    public function getComment(): ?ObjsComment
    {
        return $this->comment;
    }

    public function setComment(?ObjsComment $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getDisplayAsBot(): ?bool
    {
        return $this->displayAsBot;
    }

    public function setDisplayAsBot(?bool $displayAsBot): self
    {
        $this->displayAsBot = $displayAsBot;

        return $this;
    }

    public function getFile(): ?ObjsFile
    {
        return $this->file;
    }

    public function setFile(?ObjsFile $file): self
    {
        $this->file = $file;

        return $this;
    }

    /**
     * @return ObjsFile[]|null
     */
    public function getFiles(): ?array
    {
        return $this->files;
    }

    /**
     * @param ObjsFile[]|null $files
     */
    public function setFiles(?array $files): self
    {
        $this->files = $files;

        return $this;
    }

    public function getIcons(): ?ObjsMessageIcons
    {
        return $this->icons;
    }

    public function setIcons(?ObjsMessageIcons $icons): self
    {
        $this->icons = $icons;

        return $this;
    }

    public function getInviter(): ?string
    {
        return $this->inviter;
    }

    public function setInviter(?string $inviter): self
    {
        $this->inviter = $inviter;

        return $this;
    }

    public function getIsDelayedMessage(): ?bool
    {
        return $this->isDelayedMessage;
    }

    public function setIsDelayedMessage(?bool $isDelayedMessage): self
    {
        $this->isDelayedMessage = $isDelayedMessage;

        return $this;
    }

    public function getIsIntro(): ?bool
    {
        return $this->isIntro;
    }

    public function setIsIntro(?bool $isIntro): self
    {
        $this->isIntro = $isIntro;

        return $this;
    }

    public function getIsStarred(): ?bool
    {
        return $this->isStarred;
    }

    public function setIsStarred(?bool $isStarred): self
    {
        $this->isStarred = $isStarred;

        return $this;
    }

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getOldName(): ?string
    {
        return $this->oldName;
    }

    public function setOldName(?string $oldName): self
    {
        $this->oldName = $oldName;

        return $this;
    }

    public function getParentUserId(): ?string
    {
        return $this->parentUserId;
    }

    public function setParentUserId(?string $parentUserId): self
    {
        $this->parentUserId = $parentUserId;

        return $this;
    }

    public function getPermalink(): ?string
    {
        return $this->permalink;
    }

    public function setPermalink(?string $permalink): self
    {
        $this->permalink = $permalink;

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
        $this->pinnedTo = $pinnedTo;

        return $this;
    }

    public function getPurpose(): ?string
    {
        return $this->purpose;
    }

    public function setPurpose(?string $purpose): self
    {
        $this->purpose = $purpose;

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
        $this->reactions = $reactions;

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

    public function getSubtype(): ?string
    {
        return $this->subtype;
    }

    public function setSubtype(?string $subtype): self
    {
        $this->subtype = $subtype;

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

    public function getTopic(): ?string
    {
        return $this->topic;
    }

    public function setTopic(?string $topic): self
    {
        $this->topic = $topic;

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

    public function getUpload(): ?bool
    {
        return $this->upload;
    }

    public function setUpload(?bool $upload): self
    {
        $this->upload = $upload;

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
