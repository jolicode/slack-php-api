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

class StarsListGetResponse200ItemsItemItem5
{
    /**
     * @var string|null
     */
    protected $channel;
    /**
     * @var int|null
     */
    protected $dateCreate;
    /**
     * @var string|null
     */
    protected $type;

    public function getChannel(): ?string
    {
        return $this->channel;
    }

    public function setChannel(?string $channel): self
    {
        $this->channel = $channel;

        return $this;
    }

    public function getDateCreate(): ?int
    {
        return $this->dateCreate;
    }

    public function setDateCreate(?int $dateCreate): self
    {
        $this->dateCreate = $dateCreate;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
