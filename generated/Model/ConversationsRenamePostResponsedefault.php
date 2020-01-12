<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class ConversationsRenamePostResponsedefault
{
    /**
     * @var string
     */
    protected $error;
    /**
     * @var string
     */
    protected $needed;
    /**
     * @var bool
     */
    protected $ok;
    /**
     * @var string
     */
    protected $provided;

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
