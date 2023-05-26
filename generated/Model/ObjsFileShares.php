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

class ObjsFileShares
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var mixed|null
     */
    protected $private;
    /**
     * @var mixed|null
     */
    protected $public;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getPrivate()
    {
        return $this->private;
    }

    public function setPrivate($private): self
    {
        $this->initialized['private'] = true;
        $this->private = $private;

        return $this;
    }

    public function getPublic()
    {
        return $this->public;
    }

    public function setPublic($public): self
    {
        $this->initialized['public'] = true;
        $this->public = $public;

        return $this;
    }
}
