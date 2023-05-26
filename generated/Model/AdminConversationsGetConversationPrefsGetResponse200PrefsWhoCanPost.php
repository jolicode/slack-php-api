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

class AdminConversationsGetConversationPrefsGetResponse200PrefsWhoCanPost
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string[]|null
     */
    protected $type;
    /**
     * @var string[]|null
     */
    protected $user;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return string[]|null
     */
    public function getType(): ?array
    {
        return $this->type;
    }

    /**
     * @param string[]|null $type
     */
    public function setType(?array $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getUser(): ?array
    {
        return $this->user;
    }

    /**
     * @param string[]|null $user
     */
    public function setUser(?array $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;

        return $this;
    }
}
