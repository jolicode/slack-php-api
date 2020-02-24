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

class TeamAccessLogsGetResponse200
{
    /**
     * @var TeamAccessLogsGetResponse200LoginsItem[]|null
     */
    protected $logins;
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var ObjsPaging|null
     */
    protected $paging;

    /**
     * @return TeamAccessLogsGetResponse200LoginsItem[]|null
     */
    public function getLogins(): ?array
    {
        return $this->logins;
    }

    /**
     * @param TeamAccessLogsGetResponse200LoginsItem[]|null $logins
     */
    public function setLogins(?array $logins): self
    {
        $this->logins = $logins;

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

    public function getPaging(): ?ObjsPaging
    {
        return $this->paging;
    }

    public function setPaging(?ObjsPaging $paging): self
    {
        $this->paging = $paging;

        return $this;
    }
}
