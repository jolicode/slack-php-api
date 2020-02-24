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

class DefsPinnedInfoItem
{
    /**
     * @var string|null
     */
    protected $pinnedBy;
    /**
     * @var int|null
     */
    protected $pinnedTs;

    public function getPinnedBy(): ?string
    {
        return $this->pinnedBy;
    }

    public function setPinnedBy(?string $pinnedBy): self
    {
        $this->pinnedBy = $pinnedBy;

        return $this;
    }

    public function getPinnedTs(): ?int
    {
        return $this->pinnedTs;
    }

    public function setPinnedTs(?int $pinnedTs): self
    {
        $this->pinnedTs = $pinnedTs;

        return $this;
    }
}
