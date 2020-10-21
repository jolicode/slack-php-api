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
        $this->dims = $dims;

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

    public function getOk(): ?bool
    {
        return $this->ok;
    }

    public function setOk(?bool $ok): self
    {
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
        $this->timeIdent = $timeIdent;

        return $this;
    }
}
