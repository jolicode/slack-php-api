<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class UsersSetPhotoPostResponsedefault
{
    /**
     * possibly DEV/QA only.
     *
     * @var string
     */
    protected $debugStep;
    /**
     * possibly DEV/QA only.
     *
     * @var string
     */
    protected $dims;
    /**
     * @var string
     */
    protected $error;
    /**
     * @var bool
     */
    protected $ok;
    /**
     * possibly DEV/QA only.
     *
     * @var int
     */
    protected $timeIdent;

    /**
     * possibly DEV/QA only.
     *
     * @return string|null
     */
    public function getDebugStep(): ?string
    {
        return $this->debugStep;
    }

    /**
     * possibly DEV/QA only.
     *
     * @param string|null $debugStep
     *
     * @return self
     */
    public function setDebugStep(?string $debugStep): self
    {
        $this->debugStep = $debugStep;

        return $this;
    }

    /**
     * possibly DEV/QA only.
     *
     * @return string|null
     */
    public function getDims(): ?string
    {
        return $this->dims;
    }

    /**
     * possibly DEV/QA only.
     *
     * @param string|null $dims
     *
     * @return self
     */
    public function setDims(?string $dims): self
    {
        $this->dims = $dims;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * @param string|null $error
     *
     * @return self
     */
    public function setError(?string $error): self
    {
        $this->error = $error;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getOk(): ?bool
    {
        return $this->ok;
    }

    /**
     * @param bool|null $ok
     *
     * @return self
     */
    public function setOk(?bool $ok): self
    {
        $this->ok = $ok;

        return $this;
    }

    /**
     * possibly DEV/QA only.
     *
     * @return int|null
     */
    public function getTimeIdent(): ?int
    {
        return $this->timeIdent;
    }

    /**
     * possibly DEV/QA only.
     *
     * @param int|null $timeIdent
     *
     * @return self
     */
    public function setTimeIdent(?int $timeIdent): self
    {
        $this->timeIdent = $timeIdent;

        return $this;
    }
}
