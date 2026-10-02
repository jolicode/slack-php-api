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
     * @var list<string>|null
     */
    public ?array $channels;
    public ?int $commentsCount;
    public ?int $created;
    public ?int $dateDelete;
    public ?string $deanimateGif;
    public ?bool $displayAsBot;
    public ?bool $editable;
    public ?string $editor;
    public ?string $externalId;
    public ?string $externalType;
    public ?string $externalUrl;
    public ?string $filetype;
    /**
     * @var list<string>|null
     */
    public ?array $groups;
    public ?bool $hasRichPreview;
    public ?string $id;
    public ?int $imageExifRotation;
    /**
     * @var list<string>|null
     */
    public ?array $ims;
    public ?bool $isExternal;
    public ?bool $isPublic;
    public ?bool $isStarred;
    public ?bool $isTombstoned;
    public ?string $lastEditor;
    public ?string $mimetype;
    public ?string $mode;
    public ?string $name;
    public ?bool $nonOwnerEditable;
    public ?int $numStars;
    public ?int $originalH;
    public ?int $originalW;
    public ?string $permalink;
    public ?string $permalinkPublic;
    /**
     * @var mixed|null
     */
    public $pinnedInfo;
    /**
     * @var list<string>|null
     */
    public ?array $pinnedTo;
    public ?string $pjpeg;
    public ?string $prettyType;
    public ?string $preview;
    public ?bool $publicUrlShared;
    /**
     * @var list<ObjsReaction>|null
     */
    public ?array $reactions;
    public ?ObjsFileShares $shares;
    public ?int $size;
    public ?string $sourceTeam;
    public ?string $state;
    public ?string $thumb1024;
    public ?int $thumb1024H;
    public ?int $thumb1024W;
    public ?string $thumb160;
    public ?string $thumb360;
    public ?string $thumb360Gif;
    public ?int $thumb360H;
    public ?int $thumb360W;
    public ?string $thumb480;
    public ?int $thumb480H;
    public ?int $thumb480W;
    public ?string $thumb64;
    public ?string $thumb720;
    public ?int $thumb720H;
    public ?int $thumb720W;
    public ?string $thumb80;
    public ?string $thumb800;
    public ?int $thumb800H;
    public ?int $thumb800W;
    public ?string $thumb960;
    public ?int $thumb960H;
    public ?int $thumb960W;
    public ?string $thumbTiny;
    /**
     * @var int|string|null
     */
    public $timestamp;
    public ?string $title;
    public ?int $updated;
    public ?string $urlPrivate;
    public ?string $urlPrivateDownload;
    public ?string $user;
    public ?string $userTeam;
    public ?string $username;
}
