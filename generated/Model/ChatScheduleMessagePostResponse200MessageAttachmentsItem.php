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

class ChatScheduleMessagePostResponse200MessageAttachmentsItem
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
     * @var string|null
     */
    protected $text;

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

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }
}
