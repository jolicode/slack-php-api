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

class AdminConversationsGetTeamsGetResponse200
{
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var AdminConversationsGetTeamsGetResponse200ResponseMetadata|null
     */
    protected $responseMetadata;
    /**
     * @var string[]|null
     */
    protected $teamIds;

    public function getOk(): ?bool
    {
        return $this->ok;
    }

    public function setOk(?bool $ok): self
    {
        $this->ok = $ok;

        return $this;
    }

    public function getResponseMetadata(): ?AdminConversationsGetTeamsGetResponse200ResponseMetadata
    {
        return $this->responseMetadata;
    }

    public function setResponseMetadata(?AdminConversationsGetTeamsGetResponse200ResponseMetadata $responseMetadata): self
    {
        $this->responseMetadata = $responseMetadata;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getTeamIds(): ?array
    {
        return $this->teamIds;
    }

    /**
     * @param string[]|null $teamIds
     */
    public function setTeamIds(?array $teamIds): self
    {
        $this->teamIds = $teamIds;

        return $this;
    }
}
