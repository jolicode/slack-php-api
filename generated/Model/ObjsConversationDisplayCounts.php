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

class ObjsConversationDisplayCounts
{
    /**
     * @var int|null
     */
    protected $displayCounts;
    /**
     * @var int|null
     */
    protected $guestCounts;

    public function getDisplayCounts(): ?int
    {
        return $this->displayCounts;
    }

    public function setDisplayCounts(?int $displayCounts): self
    {
        $this->displayCounts = $displayCounts;

        return $this;
    }

    public function getGuestCounts(): ?int
    {
        return $this->guestCounts;
    }

    public function setGuestCounts(?int $guestCounts): self
    {
        $this->guestCounts = $guestCounts;

        return $this;
    }
}
