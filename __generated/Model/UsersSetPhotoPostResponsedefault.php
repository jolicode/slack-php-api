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

class UsersSetPhotoPostResponsedefault
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Note: PHP callstack is only visible in dev/qa.
     *
     * @var string|null
     */
    protected $callstack;
    /**
     * possibly DEV/QA only.
     *
     * @var string|null
     */
    protected $debugStep;
    /**
     * possibly DEV/QA only.
     *
     * @var string|null
     */
    protected $dims;
    /**
     * @var string|null
     */
    protected $error;
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * possibly DEV/QA only.
     *
     * @var int|null
     */
    protected $timeIdent;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

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
        $this->initialized['callstack'] = true;
        $this->callstack = $callstack;

        return $this;
    }

    /**
     * possibly DEV/QA only.
     */
    public function getDebugStep(): ?string
    {
        return $this->debugStep;
    }

    /**
     * possibly DEV/QA only.
     */
    public function setDebugStep(?string $debugStep): self
    {
        $this->initialized['debugStep'] = true;
        $this->debugStep = $debugStep;

        return $this;
    }

    /**
     * possibly DEV/QA only.
     */
    public function getDims(): ?string
    {
        return $this->dims;
    }

    /**
     * possibly DEV/QA only.
     */
    public function setDims(?string $dims): self
    {
        $this->initialized['dims'] = true;
        $this->dims = $dims;

        return $this;
    }

    public function getError(): ?string
    {
        return $this->error;
    }

    public function setError(?string $error): self
    {
        $this->initialized['error'] = true;
        $this->error = $error;

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

    /**
     * possibly DEV/QA only.
     */
    public function getTimeIdent(): ?int
    {
        return $this->timeIdent;
    }

    /**
     * possibly DEV/QA only.
     */
    public function setTimeIdent(?int $timeIdent): self
    {
        $this->initialized['timeIdent'] = true;
        $this->timeIdent = $timeIdent;

        return $this;
    }
}
