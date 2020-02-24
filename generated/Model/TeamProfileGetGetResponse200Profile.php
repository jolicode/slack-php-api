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

class TeamProfileGetGetResponse200Profile
{
    /**
     * @var ObjsTeamProfileField[]|null
     */
    protected $fields;

    /**
     * @return ObjsTeamProfileField[]|null
     */
    public function getFields(): ?array
    {
        return $this->fields;
    }

    /**
     * @param ObjsTeamProfileField[]|null $fields
     */
    public function setFields(?array $fields): self
    {
        $this->fields = $fields;

        return $this;
    }
}
