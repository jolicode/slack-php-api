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

class ObjsTeamProfileFieldOption
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var bool|null
     */
    protected $isCustom;
    /**
     * @var bool|null
     */
    protected $isMultipleEntry;
    /**
     * @var bool|null
     */
    protected $isProtected;
    /**
     * @var bool|null
     */
    protected $isScim;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getIsCustom(): ?bool
    {
        return $this->isCustom;
    }

    public function setIsCustom(?bool $isCustom): self
    {
        $this->initialized['isCustom'] = true;
        $this->isCustom = $isCustom;

        return $this;
    }

    public function getIsMultipleEntry(): ?bool
    {
        return $this->isMultipleEntry;
    }

    public function setIsMultipleEntry(?bool $isMultipleEntry): self
    {
        $this->initialized['isMultipleEntry'] = true;
        $this->isMultipleEntry = $isMultipleEntry;

        return $this;
    }

    public function getIsProtected(): ?bool
    {
        return $this->isProtected;
    }

    public function setIsProtected(?bool $isProtected): self
    {
        $this->initialized['isProtected'] = true;
        $this->isProtected = $isProtected;

        return $this;
    }

    public function getIsScim(): ?bool
    {
        return $this->isScim;
    }

    public function setIsScim(?bool $isScim): self
    {
        $this->initialized['isScim'] = true;
        $this->isScim = $isScim;

        return $this;
    }
}
