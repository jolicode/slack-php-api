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

class ChatUpdatePostResponse200Message
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var mixed[]|null
     */
    protected $attachments;
    /**
     * @var mixed|null
     */
    protected $blocks;
    /**
     * @var string|null
     */
    protected $text;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return mixed[]|null
     */
    public function getAttachments(): ?array
    {
        return $this->attachments;
    }

    /**
     * @param mixed[]|null $attachments
     */
    public function setAttachments(?array $attachments): self
    {
        $this->initialized['attachments'] = true;
        $this->attachments = $attachments;

        return $this;
    }

    public function getBlocks()
    {
        return $this->blocks;
    }

    public function setBlocks($blocks): self
    {
        $this->initialized['blocks'] = true;
        $this->blocks = $blocks;

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
}
