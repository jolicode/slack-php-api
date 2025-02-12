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

class ConversationsClosePostResponse200
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var bool|null
     */
    protected $alreadyClosed;
    /**
     * @var bool|null
     */
    protected $noOp;
    /**
     * @var bool|null
     */
    protected $ok;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getAlreadyClosed(): ?bool
    {
        return $this->alreadyClosed;
    }

    public function setAlreadyClosed(?bool $alreadyClosed): self
    {
        $this->initialized['alreadyClosed'] = true;
        $this->alreadyClosed = $alreadyClosed;

        return $this;
    }

    public function getNoOp(): ?bool
    {
        return $this->noOp;
    }

    public function setNoOp(?bool $noOp): self
    {
        $this->initialized['noOp'] = true;
        $this->noOp = $noOp;

        return $this;
    }

    public function getOk(): ?bool
    {
        return $this->ok;
    }

    public function setOk(?bool $ok): self
    {
        $this->initialized['ok'] = true;
        $this->ok = $ok;

        return $this;
    }
}
