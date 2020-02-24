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

class GroupsRepliesGetResponse200
{
    /**
     * @var bool|null
     */
    protected $hasMore;
    /**
     * @var ObjsMessage[]|null
     */
    protected $messages;
    /**
     * @var bool|null
     */
    protected $ok;

    public function getHasMore(): ?bool
    {
        return $this->hasMore;
    }

    public function setHasMore(?bool $hasMore): self
    {
        $this->hasMore = $hasMore;

        return $this;
    }

    /**
     * @return ObjsMessage[]|null
     */
    public function getMessages(): ?array
    {
        return $this->messages;
    }

    /**
     * @param ObjsMessage[]|null $messages
     */
    public function setMessages(?array $messages): self
    {
        $this->messages = $messages;

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
