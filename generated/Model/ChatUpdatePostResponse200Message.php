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
     * @var mixed[]|null
     */
    protected $attachments;
    /**
     * This is a very loose definition, in the future, we'll populate this with deeper schema in this definition namespace.
     *
     * @var BlocksItem[]|null
     */
    protected $blocks;
    /**
     * @var string|null
     */
    protected $text;

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
