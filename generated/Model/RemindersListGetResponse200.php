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

class RemindersListGetResponse200
{
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var ObjsReminder[]|null
     */
    protected $reminders;

    public function getOk(): ?bool
    {
        return $this->ok;
    }

    public function setOk(?bool $ok): self
    {
        $this->ok = $ok;

        return $this;
    }

    /**
     * @return ObjsReminder[]|null
     */
    public function getReminders(): ?array
    {
        return $this->reminders;
    }

    /**
     * @param ObjsReminder[]|null $reminders
     */
    public function setReminders(?array $reminders): self
    {
        $this->reminders = $reminders;

        return $this;
    }
}
