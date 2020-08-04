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

class ObjsMessageAttachmentsItem
{
    /**
     * @var string|null
     */
    protected $fallback;
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

    public function getFallback(): ?string
    {
        return $this->fallback;
    }

    public function setFallback(?string $fallback): self
    {
        $this->fallback = $fallback;

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
}
