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

class ObjsFile
{
    /**
     * @var string[]|null
     */
    protected $channels;
    /**
     * @var int|null
     */
    protected $commentsCount;
    /**
     * @var int|null
     */
    protected $created;
    /**
     * @var int|null
     */
    protected $dateDelete;
    /**
     * @var string|null
     */
    protected $deanimateGif;
    /**
     * @var bool|null
     */
    protected $displayAsBot;
    /**
     * @var bool|null
     */
    protected $editable;
    /**
     * @var string|null
     */
    protected $editor;
    /**
     * @var string|null
     */
    protected $externalId;
    /**
     * @var string|null
     */
    protected $externalType;
    /**
     * @var string|null
     */
    protected $externalUrl;
    /**
     * @var string|null
     */
    protected $filetype;
    /**
     * @var string[]|null
     */
    protected $groups;
    /**
     * @var bool|null
     */
    protected $hasRichPreview;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var int|null
     */
    protected $imageExifRotation;
    /**
     * @var string[]|null
     */
    protected $ims;
    /**
     * @var bool|null
     */
    protected $isExternal;
    /**
     * @var bool|null
     */
    protected $isPublic;
    /**
     * @var bool|null
     */
    protected $isStarred;
    /**
     * @var bool|null
     */
    protected $isTombstoned;
    /**
     * @var string|null
     */
    protected $lastEditor;
    /**
     * @var string|null
     */
    protected $mimetype;
    /**
     * @var string|null
     */
    protected $mode;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var bool|null
     */
    protected $nonOwnerEditable;
    /**
     * @var int|null
     */
    protected $numStars;
    /**
     * @var int|null
     */
    protected $originalH;
    /**
     * @var int|null
     */
    protected $originalW;
    /**
     * @var string|null
     */
    protected $permalink;
    /**
     * @var string|null
     */
    protected $permalinkPublic;
    /**
     * @var mixed|null
     */
    protected $pinnedInfo;
    /**
     * @var string[]|null
     */
    protected $pinnedTo;
    /**
     * @var string|null
     */
    protected $pjpeg;
    /**
     * @var string|null
     */
    protected $prettyType;
    /**
     * @var string|null
     */
    protected $preview;
    /**
     * @var bool|null
     */
    protected $publicUrlShared;
    /**
     * @var ObjsReaction[]|null
     */
    protected $reactions;
    /**
     * @var ObjsFileShares|null
     */
    protected $shares;
    /**
     * @var int|null
     */
    protected $size;
    /**
     * @var string|null
     */
    protected $sourceTeam;
    /**
     * @var string|null
     */
    protected $state;
    /**
     * @var string|null
     */
    protected $thumb1024;
    /**
     * @var int|null
     */
    protected $thumb1024H;
    /**
     * @var int|null
     */
    protected $thumb1024W;
    /**
     * @var string|null
     */
    protected $thumb160;
    /**
     * @var string|null
     */
    protected $thumb360;
    /**
     * @var string|null
     */
    protected $thumb360Gif;
    /**
     * @var int|null
     */
    protected $thumb360H;
    /**
     * @var int|null
     */
    protected $thumb360W;
    /**
     * @var string|null
     */
    protected $thumb480;
    /**
     * @var int|null
     */
    protected $thumb480H;
    /**
     * @var int|null
     */
    protected $thumb480W;
    /**
     * @var string|null
     */
    protected $thumb64;
    /**
     * @var string|null
     */
    protected $thumb720;
    /**
     * @var int|null
     */
    protected $thumb720H;
    /**
     * @var int|null
     */
    protected $thumb720W;
    /**
     * @var string|null
     */
    protected $thumb80;
    /**
     * @var string|null
     */
    protected $thumb800;
    /**
     * @var int|null
     */
    protected $thumb800H;
    /**
     * @var int|null
     */
    protected $thumb800W;
    /**
     * @var string|null
     */
    protected $thumb960;
    /**
     * @var int|null
     */
    protected $thumb960H;
    /**
     * @var int|null
     */
    protected $thumb960W;
    /**
     * @var string|null
     */
    protected $thumbTiny;
    /**
     * @var int|string|null
     */
    protected $timestamp;
    /**
     * @var string|null
     */
    protected $title;
    /**
     * @var int|null
     */
    protected $updated;
    /**
     * @var string|null
     */
    protected $urlPrivate;
    /**
     * @var string|null
     */
    protected $urlPrivateDownload;
    /**
     * @var string|null
     */
    protected $user;
    /**
     * @var string|null
     */
    protected $userTeam;
    /**
     * @var string|null
     */
    protected $username;

    /**
     * @return string[]|null
     */
    public function getChannels(): ?array
    {
        return $this->channels;
    }

    /**
     * @param string[]|null $channels
     */
    public function setChannels(?array $channels): self
    {
        $this->channels = $channels;

        return $this;
    }

    public function getCommentsCount(): ?int
    {
        return $this->commentsCount;
    }

    public function setCommentsCount(?int $commentsCount): self
    {
        $this->commentsCount = $commentsCount;

        return $this;
    }

    public function getCreated(): ?int
    {
        return $this->created;
    }

    public function setCreated(?int $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getDateDelete(): ?int
    {
        return $this->dateDelete;
    }

    public function setDateDelete(?int $dateDelete): self
    {
        $this->dateDelete = $dateDelete;

        return $this;
    }

    public function getDeanimateGif(): ?string
    {
        return $this->deanimateGif;
    }

    public function setDeanimateGif(?string $deanimateGif): self
    {
        $this->deanimateGif = $deanimateGif;

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

    public function getEditable(): ?bool
    {
        return $this->editable;
    }

    public function setEditable(?bool $editable): self
    {
        $this->editable = $editable;

        return $this;
    }

    public function getEditor(): ?string
    {
        return $this->editor;
    }

    public function setEditor(?string $editor): self
    {
        $this->editor = $editor;

        return $this;
    }

    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    public function setExternalId(?string $externalId): self
    {
        $this->externalId = $externalId;

        return $this;
    }

    public function getExternalType(): ?string
    {
        return $this->externalType;
    }

    public function setExternalType(?string $externalType): self
    {
        $this->externalType = $externalType;

        return $this;
    }

    public function getExternalUrl(): ?string
    {
        return $this->externalUrl;
    }

    public function setExternalUrl(?string $externalUrl): self
    {
        $this->externalUrl = $externalUrl;

        return $this;
    }

    public function getFiletype(): ?string
    {
        return $this->filetype;
    }

    public function setFiletype(?string $filetype): self
    {
        $this->filetype = $filetype;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getGroups(): ?array
    {
        return $this->groups;
    }

    /**
     * @param string[]|null $groups
     */
    public function setGroups(?array $groups): self
    {
        $this->groups = $groups;

        return $this;
    }

    public function getHasRichPreview(): ?bool
    {
        return $this->hasRichPreview;
    }

    public function setHasRichPreview(?bool $hasRichPreview): self
    {
        $this->hasRichPreview = $hasRichPreview;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getImageExifRotation(): ?int
    {
        return $this->imageExifRotation;
    }

    public function setImageExifRotation(?int $imageExifRotation): self
    {
        $this->imageExifRotation = $imageExifRotation;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getIms(): ?array
    {
        return $this->ims;
    }

    /**
     * @param string[]|null $ims
     */
    public function setIms(?array $ims): self
    {
        $this->ims = $ims;

        return $this;
    }

    public function getIsExternal(): ?bool
    {
        return $this->isExternal;
    }

    public function setIsExternal(?bool $isExternal): self
    {
        $this->isExternal = $isExternal;

        return $this;
    }

    public function getIsPublic(): ?bool
    {
        return $this->isPublic;
    }

    public function setIsPublic(?bool $isPublic): self
    {
        $this->isPublic = $isPublic;

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

    public function getIsTombstoned(): ?bool
    {
        return $this->isTombstoned;
    }

    public function setIsTombstoned(?bool $isTombstoned): self
    {
        $this->isTombstoned = $isTombstoned;

        return $this;
    }

    public function getLastEditor(): ?string
    {
        return $this->lastEditor;
    }

    public function setLastEditor(?string $lastEditor): self
    {
        $this->lastEditor = $lastEditor;

        return $this;
    }

    public function getMimetype(): ?string
    {
        return $this->mimetype;
    }

    public function setMimetype(?string $mimetype): self
    {
        $this->mimetype = $mimetype;

        return $this;
    }

    public function getMode(): ?string
    {
        return $this->mode;
    }

    public function setMode(?string $mode): self
    {
        $this->mode = $mode;

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

    public function getNonOwnerEditable(): ?bool
    {
        return $this->nonOwnerEditable;
    }

    public function setNonOwnerEditable(?bool $nonOwnerEditable): self
    {
        $this->nonOwnerEditable = $nonOwnerEditable;

        return $this;
    }

    public function getNumStars(): ?int
    {
        return $this->numStars;
    }

    public function setNumStars(?int $numStars): self
    {
        $this->numStars = $numStars;

        return $this;
    }

    public function getOriginalH(): ?int
    {
        return $this->originalH;
    }

    public function setOriginalH(?int $originalH): self
    {
        $this->originalH = $originalH;

        return $this;
    }

    public function getOriginalW(): ?int
    {
        return $this->originalW;
    }

    public function setOriginalW(?int $originalW): self
    {
        $this->originalW = $originalW;

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

    public function getPermalinkPublic(): ?string
    {
        return $this->permalinkPublic;
    }

    public function setPermalinkPublic(?string $permalinkPublic): self
    {
        $this->permalinkPublic = $permalinkPublic;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPinnedInfo()
    {
        return $this->pinnedInfo;
    }

    /**
     * @param mixed $pinnedInfo
     */
    public function setPinnedInfo($pinnedInfo): self
    {
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
        $this->pinnedTo = $pinnedTo;

        return $this;
    }

    public function getPjpeg(): ?string
    {
        return $this->pjpeg;
    }

    public function setPjpeg(?string $pjpeg): self
    {
        $this->pjpeg = $pjpeg;

        return $this;
    }

    public function getPrettyType(): ?string
    {
        return $this->prettyType;
    }

    public function setPrettyType(?string $prettyType): self
    {
        $this->prettyType = $prettyType;

        return $this;
    }

    public function getPreview(): ?string
    {
        return $this->preview;
    }

    public function setPreview(?string $preview): self
    {
        $this->preview = $preview;

        return $this;
    }

    public function getPublicUrlShared(): ?bool
    {
        return $this->publicUrlShared;
    }

    public function setPublicUrlShared(?bool $publicUrlShared): self
    {
        $this->publicUrlShared = $publicUrlShared;

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

    public function getShares(): ?ObjsFileShares
    {
        return $this->shares;
    }

    public function setShares(?ObjsFileShares $shares): self
    {
        $this->shares = $shares;

        return $this;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSize(?int $size): self
    {
        $this->size = $size;

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

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getThumb1024(): ?string
    {
        return $this->thumb1024;
    }

    public function setThumb1024(?string $thumb1024): self
    {
        $this->thumb1024 = $thumb1024;

        return $this;
    }

    public function getThumb1024H(): ?int
    {
        return $this->thumb1024H;
    }

    public function setThumb1024H(?int $thumb1024H): self
    {
        $this->thumb1024H = $thumb1024H;

        return $this;
    }

    public function getThumb1024W(): ?int
    {
        return $this->thumb1024W;
    }

    public function setThumb1024W(?int $thumb1024W): self
    {
        $this->thumb1024W = $thumb1024W;

        return $this;
    }

    public function getThumb160(): ?string
    {
        return $this->thumb160;
    }

    public function setThumb160(?string $thumb160): self
    {
        $this->thumb160 = $thumb160;

        return $this;
    }

    public function getThumb360(): ?string
    {
        return $this->thumb360;
    }

    public function setThumb360(?string $thumb360): self
    {
        $this->thumb360 = $thumb360;

        return $this;
    }

    public function getThumb360Gif(): ?string
    {
        return $this->thumb360Gif;
    }

    public function setThumb360Gif(?string $thumb360Gif): self
    {
        $this->thumb360Gif = $thumb360Gif;

        return $this;
    }

    public function getThumb360H(): ?int
    {
        return $this->thumb360H;
    }

    public function setThumb360H(?int $thumb360H): self
    {
        $this->thumb360H = $thumb360H;

        return $this;
    }

    public function getThumb360W(): ?int
    {
        return $this->thumb360W;
    }

    public function setThumb360W(?int $thumb360W): self
    {
        $this->thumb360W = $thumb360W;

        return $this;
    }

    public function getThumb480(): ?string
    {
        return $this->thumb480;
    }

    public function setThumb480(?string $thumb480): self
    {
        $this->thumb480 = $thumb480;

        return $this;
    }

    public function getThumb480H(): ?int
    {
        return $this->thumb480H;
    }

    public function setThumb480H(?int $thumb480H): self
    {
        $this->thumb480H = $thumb480H;

        return $this;
    }

    public function getThumb480W(): ?int
    {
        return $this->thumb480W;
    }

    public function setThumb480W(?int $thumb480W): self
    {
        $this->thumb480W = $thumb480W;

        return $this;
    }

    public function getThumb64(): ?string
    {
        return $this->thumb64;
    }

    public function setThumb64(?string $thumb64): self
    {
        $this->thumb64 = $thumb64;

        return $this;
    }

    public function getThumb720(): ?string
    {
        return $this->thumb720;
    }

    public function setThumb720(?string $thumb720): self
    {
        $this->thumb720 = $thumb720;

        return $this;
    }

    public function getThumb720H(): ?int
    {
        return $this->thumb720H;
    }

    public function setThumb720H(?int $thumb720H): self
    {
        $this->thumb720H = $thumb720H;

        return $this;
    }

    public function getThumb720W(): ?int
    {
        return $this->thumb720W;
    }

    public function setThumb720W(?int $thumb720W): self
    {
        $this->thumb720W = $thumb720W;

        return $this;
    }

    public function getThumb80(): ?string
    {
        return $this->thumb80;
    }

    public function setThumb80(?string $thumb80): self
    {
        $this->thumb80 = $thumb80;

        return $this;
    }

    public function getThumb800(): ?string
    {
        return $this->thumb800;
    }

    public function setThumb800(?string $thumb800): self
    {
        $this->thumb800 = $thumb800;

        return $this;
    }

    public function getThumb800H(): ?int
    {
        return $this->thumb800H;
    }

    public function setThumb800H(?int $thumb800H): self
    {
        $this->thumb800H = $thumb800H;

        return $this;
    }

    public function getThumb800W(): ?int
    {
        return $this->thumb800W;
    }

    public function setThumb800W(?int $thumb800W): self
    {
        $this->thumb800W = $thumb800W;

        return $this;
    }

    public function getThumb960(): ?string
    {
        return $this->thumb960;
    }

    public function setThumb960(?string $thumb960): self
    {
        $this->thumb960 = $thumb960;

        return $this;
    }

    public function getThumb960H(): ?int
    {
        return $this->thumb960H;
    }

    public function setThumb960H(?int $thumb960H): self
    {
        $this->thumb960H = $thumb960H;

        return $this;
    }

    public function getThumb960W(): ?int
    {
        return $this->thumb960W;
    }

    public function setThumb960W(?int $thumb960W): self
    {
        $this->thumb960W = $thumb960W;

        return $this;
    }

    public function getThumbTiny(): ?string
    {
        return $this->thumbTiny;
    }

    public function setThumbTiny(?string $thumbTiny): self
    {
        $this->thumbTiny = $thumbTiny;

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
        $this->timestamp = $timestamp;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getUpdated(): ?int
    {
        return $this->updated;
    }

    public function setUpdated(?int $updated): self
    {
        $this->updated = $updated;

        return $this;
    }

    public function getUrlPrivate(): ?string
    {
        return $this->urlPrivate;
    }

    public function setUrlPrivate(?string $urlPrivate): self
    {
        $this->urlPrivate = $urlPrivate;

        return $this;
    }

    public function getUrlPrivateDownload(): ?string
    {
        return $this->urlPrivateDownload;
    }

    public function setUrlPrivateDownload(?string $urlPrivateDownload): self
    {
        $this->urlPrivateDownload = $urlPrivateDownload;

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
