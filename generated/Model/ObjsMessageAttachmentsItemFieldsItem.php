<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class ObjsMessageAttachmentsItemFieldsItem
{
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $value;
    /**
     * @var bool
     */
    protected $short;

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getShort(): ?bool
    {
        return $this->short;
    }

    public function setShort(?bool $short): self
    {
        $this->short = $short;

        return $this;
    }
}
