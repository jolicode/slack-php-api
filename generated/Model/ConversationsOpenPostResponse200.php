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

class ConversationsOpenPostResponse200
{
    /**
     * @var bool|null
     */
    protected $alreadyOpen;
    /**
     * @var mixed|null
     */
    protected $channel;
    /**
     * @var bool|null
     */
    protected $noOp;
    /**
     * @var bool|null
     */
    protected $ok;

    public function getAlreadyOpen(): ?bool
    {
        return $this->alreadyOpen;
    }

    public function setAlreadyOpen(?bool $alreadyOpen): self
    {
        $this->alreadyOpen = $alreadyOpen;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @param mixed $channel
     */
    public function setChannel($channel): self
    {
        $this->channel = $channel;

        return $this;
    }

    public function getNoOp(): ?bool
    {
        return $this->noOp;
    }

    public function setNoOp(?bool $noOp): self
    {
        $this->noOp = $noOp;

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
