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

class ChannelsListGetResponse200
{
    /**
     * @var ObjsChannel[]|null
     */
    protected $channels;
    /**
     * @var bool|null
     */
    protected $ok;

    /**
     * @return ObjsChannel[]|null
     */
    public function getChannels(): ?array
    {
        return $this->channels;
    }

    /**
     * @param ObjsChannel[]|null $channels
     */
    public function setChannels(?array $channels): self
    {
        $this->channels = $channels;

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
