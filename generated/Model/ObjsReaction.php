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

class ObjsReaction extends \ArrayObject
{
    /**
     * @var int|null
     */
    protected $count;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string[]|null
     */
    protected $users;

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(?int $count): self
    {
        $this->count = $count;

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

    /**
     * @return string[]|null
     */
    public function getUsers(): ?array
    {
        return $this->users;
    }

    /**
     * @param string[]|null $users
     */
    public function setUsers(?array $users): self
    {
        $this->users = $users;

        return $this;
    }
}
