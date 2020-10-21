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

class AdminConversationsGetConversationPrefsGetResponse200
{
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var AdminConversationsGetConversationPrefsGetResponse200Prefs|null
     */
    protected $prefs;

    public function getOk(): ?bool
    {
        return $this->ok;
    }

    public function setOk(?bool $ok): self
    {
        $this->ok = $ok;

        return $this;
    }

    public function getPrefs(): ?AdminConversationsGetConversationPrefsGetResponse200Prefs
    {
        return $this->prefs;
    }

    public function setPrefs(?AdminConversationsGetConversationPrefsGetResponse200Prefs $prefs): self
    {
        $this->prefs = $prefs;

        return $this;
    }
}
