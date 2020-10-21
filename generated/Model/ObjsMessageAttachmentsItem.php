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

class ObjsMessageAttachmentsItem extends \ArrayObject
{
    /**
     * @var ObjsMessageAttachmentsItemActionsItem[]|null
     */
    protected $actions;
    /**
     * @var string|null
     */
    protected $authorIcon;
    /**
     * @var string|null
     */
    protected $authorLink;
    /**
     * @var string|null
     */
    protected $authorName;
    /**
     * @var string|null
     */
    protected $callbackId;
    /**
     * @var string|null
     */
    protected $color;
    /**
     * @var string|null
     */
    protected $fallback;
    /**
     * @var ObjsMessageAttachmentsItemFieldsItem[]|null
     */
    protected $fields;
    /**
     * @var string|null
     */
    protected $footer;
    /**
     * @var string|null
     */
    protected $footerIcon;
    /**
     * @var int|null
     */
    protected $id;
    /**
     * @var int|null
     */
    protected $imageBytes;
    /**
     * @var int|null
     */
    protected $imageHeight;
    /**
     * @var string|null
     */
    protected $imageUrl;
    /**
     * @var int|null
     */
    protected $imageWidth;
    /**
     * @var string|null
     */
    protected $pretext;
    /**
     * @var string|null
     */
    protected $text;
    /**
     * @var string|null
     */
    protected $thumbUrl;
    /**
     * @var string|null
     */
    protected $title;
    /**
     * @var string|null
     */
    protected $titleLink;
    /**
     * @var float|string|null
     */
    protected $ts;

    /**
     * @return ObjsMessageAttachmentsItemActionsItem[]|null
     */
    public function getActions(): ?array
    {
        return $this->actions;
    }

    /**
     * @param ObjsMessageAttachmentsItemActionsItem[]|null $actions
     */
    public function setActions(?array $actions): self
    {
        $this->actions = $actions;

        return $this;
    }

    public function getAuthorIcon(): ?string
    {
        return $this->authorIcon;
    }

    public function setAuthorIcon(?string $authorIcon): self
    {
        $this->authorIcon = $authorIcon;

        return $this;
    }

    public function getAuthorLink(): ?string
    {
        return $this->authorLink;
    }

    public function setAuthorLink(?string $authorLink): self
    {
        $this->authorLink = $authorLink;

        return $this;
    }

    public function getAuthorName(): ?string
    {
        return $this->authorName;
    }

    public function setAuthorName(?string $authorName): self
    {
        $this->authorName = $authorName;

        return $this;
    }

    public function getCallbackId(): ?string
    {
        return $this->callbackId;
    }

    public function setCallbackId(?string $callbackId): self
    {
        $this->callbackId = $callbackId;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getFallback(): ?string
    {
        return $this->fallback;
    }

    public function setFallback(?string $fallback): self
    {
        $this->fallback = $fallback;

        return $this;
    }

    /**
     * @return ObjsMessageAttachmentsItemFieldsItem[]|null
     */
    public function getFields(): ?array
    {
        return $this->fields;
    }

    /**
     * @param ObjsMessageAttachmentsItemFieldsItem[]|null $fields
     */
    public function setFields(?array $fields): self
    {
        $this->fields = $fields;

        return $this;
    }

    public function getFooter(): ?string
    {
        return $this->footer;
    }

    public function setFooter(?string $footer): self
    {
        $this->footer = $footer;

        return $this;
    }

    public function getFooterIcon(): ?string
    {
        return $this->footerIcon;
    }

    public function setFooterIcon(?string $footerIcon): self
    {
        $this->footerIcon = $footerIcon;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getImageBytes(): ?int
    {
        return $this->imageBytes;
    }

    public function setImageBytes(?int $imageBytes): self
    {
        $this->imageBytes = $imageBytes;

        return $this;
    }

    public function getImageHeight(): ?int
    {
        return $this->imageHeight;
    }

    public function setImageHeight(?int $imageHeight): self
    {
        $this->imageHeight = $imageHeight;

        return $this;
    }

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(?string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    public function getImageWidth(): ?int
    {
        return $this->imageWidth;
    }

    public function setImageWidth(?int $imageWidth): self
    {
        $this->imageWidth = $imageWidth;

        return $this;
    }

    public function getPretext(): ?string
    {
        return $this->pretext;
    }

    public function setPretext(?string $pretext): self
    {
        $this->pretext = $pretext;

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

    public function getThumbUrl(): ?string
    {
        return $this->thumbUrl;
    }

    public function setThumbUrl(?string $thumbUrl): self
    {
        $this->thumbUrl = $thumbUrl;

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

    public function getTitleLink(): ?string
    {
        return $this->titleLink;
    }

    public function setTitleLink(?string $titleLink): self
    {
        $this->titleLink = $titleLink;

        return $this;
    }

    /**
     * @return float|string|null
     */
    public function getTs()
    {
        return $this->ts;
    }

    /**
     * @param float|string|null $ts
     */
    public function setTs($ts): self
    {
        $this->ts = $ts;

        return $this;
    }
}
