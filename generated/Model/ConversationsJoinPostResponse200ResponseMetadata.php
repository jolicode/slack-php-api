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

class ConversationsJoinPostResponse200ResponseMetadata
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<string>|null
     */
    protected $warnings;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<string>|null
     */
    public function getWarnings(): ?array
    {
        return $this->warnings;
    }

    /**
     * @param list<string>|null $warnings
     */
    public function setWarnings(?array $warnings): self
    {
        $this->initialized['warnings'] = true;
        $this->warnings = $warnings;

        return $this;
    }
}
