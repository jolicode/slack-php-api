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

class GroupsRenamePostResponse200
{
    /**
     * @var ObjsGroup|null
     */
    protected $channel;
    /**
     * @var bool|null
     */
    protected $ok;

    public function getChannel(): ?ObjsGroup
    {
        return $this->channel;
    }

    public function setChannel(?ObjsGroup $channel): self
    {
        $this->channel = $channel;

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
}
