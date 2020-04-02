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

class OauthAccessGetResponse200IncomingWebhook extends \ArrayObject
{
    /**
     * @var string|null
     */
    protected $url;
    /**
     * @var string|null
     */
    protected $channel;
    /**
     * @var string|null
     */
    protected $configurationUrl;

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getChannel(): ?string
    {
        return $this->channel;
    }

    public function setChannel(?string $channel): self
    {
        $this->channel = $channel;

        return $this;
    }

    public function getConfigurationUrl(): ?string
    {
        return $this->configurationUrl;
    }

    public function setConfigurationUrl(?string $configurationUrl): self
    {
        $this->configurationUrl = $configurationUrl;

        return $this;
    }
}
