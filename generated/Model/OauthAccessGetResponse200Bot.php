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

class OauthAccessGetResponse200Bot extends \ArrayObject
{
    /**
     * @var string|null
     */
    protected $botUserId;
    /**
     * @var string|null
     */
    protected $botAccessToken;

    public function getBotUserId(): ?string
    {
        return $this->botUserId;
    }

    public function setBotUserId(?string $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    public function getBotAccessToken(): ?string
    {
        return $this->botAccessToken;
    }

    public function setBotAccessToken(?string $botAccessToken): self
    {
        $this->botAccessToken = $botAccessToken;

        return $this;
    }
}
