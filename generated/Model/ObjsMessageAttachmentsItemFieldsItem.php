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

class ObjsMessageAttachmentsItemFieldsItem
{
    /**
     * @var bool|null
     */
    protected $short;
    /**
     * @var string|null
     */
    protected $title;
    /**
     * @var string|null
     */
    protected $value;

    public function getShort(): ?bool
    {
        return $this->short;
    }

    public function setShort(?bool $short): self
    {
        $this->short = $short;

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

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
