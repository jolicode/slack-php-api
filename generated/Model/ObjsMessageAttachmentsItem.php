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

use JoliCode\Slack\Api\Runtime\AdditionalAndPatternProperties;
use JoliCode\Slack\Api\Runtime\AdditionalPropertiesInterface;

class ObjsMessageAttachmentsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<ObjsMessageAttachmentsItemActionsItem>|null
     */
    public ?array $actions;
    public ?string $authorIcon;
    public ?string $authorLink;
    public ?string $authorName;
    public ?string $callbackId;
    public ?string $color;
    public ?string $fallback;
    /**
     * @var list<ObjsMessageAttachmentsItemFieldsItem>|null
     */
    public ?array $fields;
    public ?string $footer;
    public ?string $footerIcon;
    public ?int $id;
    public ?int $imageBytes;
    public ?int $imageHeight;
    public ?string $imageUrl;
    public ?int $imageWidth;
    public ?string $pretext;
    public ?string $text;
    public ?string $thumbUrl;
    public ?string $title;
    public ?string $titleLink;
    /**
     * @var float|string|null
     */
    public $ts;

    public function definedProperties(): array
    {
        return ['actions' => 'actions', 'authorIcon' => 'author_icon', 'authorLink' => 'author_link', 'authorName' => 'author_name', 'callbackId' => 'callback_id', 'color' => 'color', 'fallback' => 'fallback', 'fields' => 'fields', 'footer' => 'footer', 'footerIcon' => 'footer_icon', 'id' => 'id', 'imageBytes' => 'image_bytes', 'imageHeight' => 'image_height', 'imageUrl' => 'image_url', 'imageWidth' => 'image_width', 'pretext' => 'pretext', 'text' => 'text', 'thumbUrl' => 'thumb_url', 'title' => 'title', 'titleLink' => 'title_link', 'ts' => 'ts'];
    }
}
