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

class BotsInfoGetResponse200
{
    /**
     * @var BotsInfoGetResponse200Bot|null
     */
    protected $bot;
    /**
     * @var bool|null
     */
    protected $ok;

    public function getBot(): ?BotsInfoGetResponse200Bot
    {
        return $this->bot;
    }

    public function setBot(?BotsInfoGetResponse200Bot $bot): self
    {
        $this->bot = $bot;

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
