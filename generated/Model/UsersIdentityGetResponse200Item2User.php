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

class UsersIdentityGetResponse200Item2User
{
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $image192;
    /**
     * @var string|null
     */
    protected $image24;
    /**
     * @var string|null
     */
    protected $image32;
    /**
     * @var string|null
     */
    protected $image48;
    /**
     * @var string|null
     */
    protected $image512;
    /**
     * @var string|null
     */
    protected $image72;
    /**
     * @var string|null
     */
    protected $name;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getImage192(): ?string
    {
        return $this->image192;
    }

    public function setImage192(?string $image192): self
    {
        $this->image192 = $image192;

        return $this;
    }

    public function getImage24(): ?string
    {
        return $this->image24;
    }

    public function setImage24(?string $image24): self
    {
        $this->image24 = $image24;

        return $this;
    }

    public function getImage32(): ?string
    {
        return $this->image32;
    }

    public function setImage32(?string $image32): self
    {
        $this->image32 = $image32;

        return $this;
    }

    public function getImage48(): ?string
    {
        return $this->image48;
    }

    public function setImage48(?string $image48): self
    {
        $this->image48 = $image48;

        return $this;
    }

    public function getImage512(): ?string
    {
        return $this->image512;
    }

    public function setImage512(?string $image512): self
    {
        $this->image512 = $image512;

        return $this;
    }

    public function getImage72(): ?string
    {
        return $this->image72;
    }

    public function setImage72(?string $image72): self
    {
        $this->image72 = $image72;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
