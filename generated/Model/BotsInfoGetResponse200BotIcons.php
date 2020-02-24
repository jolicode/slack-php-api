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

class BotsInfoGetResponse200BotIcons
{
    /**
     * @var string|null
     */
    protected $image36;
    /**
     * @var string|null
     */
    protected $image48;
    /**
     * @var string|null
     */
    protected $image72;

    public function getImage36(): ?string
    {
        return $this->image36;
    }

    public function setImage36(?string $image36): self
    {
        $this->image36 = $image36;

        return $this;
    }

    public function getImage48(): ?string
    {
        return $this->image48;
    }

    public function setImage48(?string $image48): self
    {
        $this->image48 = $image48;

        return $this;
    }

    public function getImage72(): ?string
    {
        return $this->image72;
    }

    public function setImage72(?string $image72): self
    {
        $this->image72 = $image72;

        return $this;
    }
}
