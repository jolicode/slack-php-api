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

class PinsListGetResponse200Item0
{
    /**
     * @var PinsListGetResponse200Item0ItemsItem0[]|PinsListGetResponse200Item0ItemsItem1[]|null
     */
    protected $items;
    /**
     * @var bool|null
     */
    protected $ok;

    /**
     * @return PinsListGetResponse200Item0ItemsItem0[]|PinsListGetResponse200Item0ItemsItem1[]|null
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param PinsListGetResponse200Item0ItemsItem0[]|PinsListGetResponse200Item0ItemsItem1[]|null $items
     */
    public function setItems($items): self
    {
        $this->items = $items;

        return $this;
    }

    public function getOk(): ?bool
    {
        return $this->ok;
    }

    public function setOk(?bool $ok): self
    {
        $this->ok = $ok;

        return $this;
    }
}
