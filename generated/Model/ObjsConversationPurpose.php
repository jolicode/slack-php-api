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

class ObjsConversationPurpose
{
    /**
     * @var string|null
     */
    protected $creator;
    /**
     * @var int|null
     */
    protected $lastSet;
    /**
     * @var string|null
     */
    protected $value;

    public function getCreator(): ?string
    {
        return $this->creator;
    }

    public function setCreator(?string $creator): self
    {
        $this->creator = $creator;

        return $this;
    }

    public function getLastSet(): ?int
    {
        return $this->lastSet;
    }

    public function setLastSet(?int $lastSet): self
    {
        $this->lastSet = $lastSet;

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
