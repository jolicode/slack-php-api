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

class UsersConversationsGetResponse200 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<ObjsConversation>|null
     */
    protected $channels;
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var UsersConversationsGetResponse200ResponseMetadata|null
     */
    protected $responseMetadata;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<ObjsConversation>|null
     */
    public function getChannels(): ?array
    {
        return $this->channels;
    }

    /**
     * @param list<ObjsConversation>|null $channels
     */
    public function setChannels(?array $channels): self
    {
        $this->initialized['channels'] = true;
        $this->channels = $channels;

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

    public function getResponseMetadata(): ?UsersConversationsGetResponse200ResponseMetadata
    {
        return $this->responseMetadata;
    }

    public function setResponseMetadata(?UsersConversationsGetResponse200ResponseMetadata $responseMetadata): self
    {
        $this->initialized['responseMetadata'] = true;
        $this->responseMetadata = $responseMetadata;

        return $this;
    }
}
