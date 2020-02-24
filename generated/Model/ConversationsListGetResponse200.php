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

class ConversationsListGetResponse200
{
    /**
     * @var ObjsConversation[]|null
     */
    protected $channels;
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var ConversationsListGetResponse200ResponseMetadata|null
     */
    protected $responseMetadata;

    /**
     * @return ObjsConversation[]|null
     */
    public function getChannels(): ?array
    {
        return $this->channels;
    }

    /**
     * @param ObjsConversation[]|null $channels
     */
    public function setChannels(?array $channels): self
    {
        $this->channels = $channels;

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

    public function getResponseMetadata(): ?ConversationsListGetResponse200ResponseMetadata
    {
        return $this->responseMetadata;
    }

    public function setResponseMetadata(?ConversationsListGetResponse200ResponseMetadata $responseMetadata): self
    {
        $this->responseMetadata = $responseMetadata;

        return $this;
    }
}
