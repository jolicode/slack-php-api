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
    public ?string $comment;
    public ?int $created;
    public ?string $id;
    public ?bool $isIntro;
    public ?bool $isStarred;
    public ?int $numStars;
    /**
     * @var mixed|null
     */
    public $pinnedInfo;
    /**
     * @var list<string>|null
     */
    public ?array $pinnedTo;
    /**
     * @var list<ObjsReaction>|null
     */
    public ?array $reactions;
    /**
     * @var int|string|null
     */
    public $timestamp;
    public ?string $user;
}
