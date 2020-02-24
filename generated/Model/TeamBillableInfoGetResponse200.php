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

class TeamBillableInfoGetResponse200
{
    /**
     * @var mixed|null
     */
    protected $billableInfo;
    /**
     * @var bool|null
     */
    protected $ok;

    /**
     * @return mixed
     */
    public function getBillableInfo()
    {
        return $this->billableInfo;
    }

    /**
     * @param mixed $billableInfo
     */
    public function setBillableInfo($billableInfo): self
    {
        $this->billableInfo = $billableInfo;

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
