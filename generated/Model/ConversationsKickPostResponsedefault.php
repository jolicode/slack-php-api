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

class ConversationsKickPostResponsedefault
{
    /**
     * Note: PHP callstack is only visible in dev/qa.
     *
     * @var string|null
     */
    protected $callstack;
    /**
     * @var string|null
     */
    protected $error;
    /**
     * @var string|null
     */
    protected $needed;
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var string|null
     */
    protected $provided;

    /**
     * Note: PHP callstack is only visible in dev/qa.
     */
    public function getCallstack(): ?string
    {
        return $this->callstack;
    }

    /**
     * Note: PHP callstack is only visible in dev/qa.
     */
    public function setCallstack(?string $callstack): self
    {
        $this->callstack = $callstack;

        return $this;
    }

    public function getError(): ?string
    {
        return $this->error;
    }

    public function setError(?string $error): self
    {
        $this->error = $error;

        return $this;
    }

    public function getNeeded(): ?string
    {
        return $this->needed;
    }

    public function setNeeded(?string $needed): self
    {
        $this->needed = $needed;

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

    public function getProvided(): ?string
    {
        return $this->provided;
    }

    public function setProvided(?string $provided): self
    {
        $this->provided = $provided;

        return $this;
    }
}
