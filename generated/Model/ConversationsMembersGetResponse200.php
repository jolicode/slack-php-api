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

class ConversationsMembersGetResponse200
{
    /**
     * @var string[]|null
     */
    protected $members;
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var ConversationsMembersGetResponse200ResponseMetadata|null
     */
    protected $responseMetadata;

    /**
     * @return string[]|null
     */
    public function getMembers(): ?array
    {
        return $this->members;
    }

    /**
     * @param string[]|null $members
     */
    public function setMembers(?array $members): self
    {
        $this->members = $members;

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

    public function getResponseMetadata(): ?ConversationsMembersGetResponse200ResponseMetadata
    {
        return $this->responseMetadata;
    }

    public function setResponseMetadata(?ConversationsMembersGetResponse200ResponseMetadata $responseMetadata): self
    {
        $this->responseMetadata = $responseMetadata;

        return $this;
    }
}
