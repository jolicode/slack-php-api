<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class ObjsConversationDisplayCounts
{
    /**
     * @var int
     */
    protected $displayCounts;
    /**
     * @var int
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
