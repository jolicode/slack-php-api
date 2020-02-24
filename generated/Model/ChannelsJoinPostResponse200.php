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

class ChannelsJoinPostResponse200
{
    /**
     * @var bool|null
     */
    protected $alreadyInChannel;
    /**
     * @var ObjsChannel|null
     */
    protected $channel;
    /**
     * @var bool|null
     */
    protected $ok;

    public function getAlreadyInChannel(): ?bool
    {
        return $this->alreadyInChannel;
    }

    public function setAlreadyInChannel(?bool $alreadyInChannel): self
    {
        $this->alreadyInChannel = $alreadyInChannel;

        return $this;
    }

    public function getChannel(): ?ObjsChannel
    {
        return $this->channel;
    }

    public function setChannel(?ObjsChannel $channel): self
    {
        $this->channel = $channel;

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
