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

class ConversationsInvitePostResponsedefault
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
     * @var string|null
     */
    protected $error;
    /**
     * @var list<ConversationsInvitePostResponsedefaultErrorsItem>|null
     */
    protected $errors;
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

    /**
     * @return list<ConversationsInvitePostResponsedefaultErrorsItem>|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * @param list<ConversationsInvitePostResponsedefaultErrorsItem>|null $errors
     */
    public function setErrors(?array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;

        return $this;
    }

    public function getNeeded(): ?string
    {
        return $this->needed;
    }

    public function setNeeded(?string $needed): self
    {
        $this->initialized['needed'] = true;
        $this->needed = $needed;

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

    public function getProvided(): ?string
    {
        return $this->provided;
    }

    public function setProvided(?string $provided): self
    {
        $this->initialized['provided'] = true;
        $this->provided = $provided;

        return $this;
    }
}
