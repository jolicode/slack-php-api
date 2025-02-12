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

class UsersLookupByEmailGetResponse200 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * Merged user object for non enterprise type and enterprise user.
     *
     * @var ObjsUser|null
     */
    protected $user;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
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
     * Merged user object for non enterprise type and enterprise user.
     */
    public function getUser(): ?ObjsUser
    {
        return $this->user;
    }

    /**
     * Merged user object for non enterprise type and enterprise user.
     */
    public function setUser(?ObjsUser $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;

        return $this;
    }
}
