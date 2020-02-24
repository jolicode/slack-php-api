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

class ObjsIm
{
    /**
     * @var int|null
     */
    protected $created;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var bool|null
     */
    protected $isAppHome;
    /**
     * @var bool|null
     */
    protected $isExtShared;
    /**
     * @var bool|null
     */
    protected $isIm;
    /**
     * @var bool|null
     */
    protected $isOrgShared;
    /**
     * @var bool|null
     */
    protected $isShared;
    /**
     * @var bool|null
     */
    protected $isUserDeleted;
    /**
     * @var float|null
     */
    protected $priority;
    /**
     * @var string|null
     */
    protected $user;

    public function getCreated(): ?int
    {
        return $this->created;
    }

    public function setCreated(?int $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getIsAppHome(): ?bool
    {
        return $this->isAppHome;
    }

    public function setIsAppHome(?bool $isAppHome): self
    {
        $this->isAppHome = $isAppHome;

        return $this;
    }

    public function getIsExtShared(): ?bool
    {
        return $this->isExtShared;
    }

    public function setIsExtShared(?bool $isExtShared): self
    {
        $this->isExtShared = $isExtShared;

        return $this;
    }

    public function getIsIm(): ?bool
    {
        return $this->isIm;
    }

    public function setIsIm(?bool $isIm): self
    {
        $this->isIm = $isIm;

        return $this;
    }

    public function getIsOrgShared(): ?bool
    {
        return $this->isOrgShared;
    }

    public function setIsOrgShared(?bool $isOrgShared): self
    {
        $this->isOrgShared = $isOrgShared;

        return $this;
    }

    public function getIsShared(): ?bool
    {
        return $this->isShared;
    }

    public function setIsShared(?bool $isShared): self
    {
        $this->isShared = $isShared;

        return $this;
    }

    public function getIsUserDeleted(): ?bool
    {
        return $this->isUserDeleted;
    }

    public function setIsUserDeleted(?bool $isUserDeleted): self
    {
        $this->isUserDeleted = $isUserDeleted;

        return $this;
    }

    public function getPriority(): ?float
    {
        return $this->priority;
    }

    public function setPriority(?float $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(?string $user): self
    {
        $this->user = $user;

        return $this;
    }
}
