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

class ObjsIcon
{
    /**
     * @var string|null
     */
    protected $image102;
    /**
     * @var string|null
     */
    protected $image132;
    /**
     * @var string|null
     */
    protected $image230;
    /**
     * @var string|null
     */
    protected $image34;
    /**
     * @var string|null
     */
    protected $image44;
    /**
     * @var string|null
     */
    protected $image68;
    /**
     * @var string|null
     */
    protected $image88;
    /**
     * @var bool|null
     */
    protected $imageDefault;

    public function getImage102(): ?string
    {
        return $this->image102;
    }

    public function setImage102(?string $image102): self
    {
        $this->image102 = $image102;

        return $this;
    }

    public function getImage132(): ?string
    {
        return $this->image132;
    }

    public function setImage132(?string $image132): self
    {
        $this->image132 = $image132;

        return $this;
    }

    public function getImage230(): ?string
    {
        return $this->image230;
    }

    public function setImage230(?string $image230): self
    {
        $this->image230 = $image230;

        return $this;
    }

    public function getImage34(): ?string
    {
        return $this->image34;
    }

    public function setImage34(?string $image34): self
    {
        $this->image34 = $image34;

        return $this;
    }

    public function getImage44(): ?string
    {
        return $this->image44;
    }

    public function setImage44(?string $image44): self
    {
        $this->image44 = $image44;

        return $this;
    }

    public function getImage68(): ?string
    {
        return $this->image68;
    }

    public function setImage68(?string $image68): self
    {
        $this->image68 = $image68;

        return $this;
    }

    public function getImage88(): ?string
    {
        return $this->image88;
    }

    public function setImage88(?string $image88): self
    {
        $this->image88 = $image88;

        return $this;
    }

    public function getImageDefault(): ?bool
    {
        return $this->imageDefault;
    }

    public function setImageDefault(?bool $imageDefault): self
    {
        $this->imageDefault = $imageDefault;

        return $this;
    }
}
