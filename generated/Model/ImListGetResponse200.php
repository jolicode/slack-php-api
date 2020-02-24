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

class ImListGetResponse200
{
    /**
     * @var ObjsIm[]|null
     */
    protected $ims;
    /**
     * @var bool|null
     */
    protected $ok;

    /**
     * @return ObjsIm[]|null
     */
    public function getIms(): ?array
    {
        return $this->ims;
    }

    /**
     * @param ObjsIm[]|null $ims
     */
    public function setIms(?array $ims): self
    {
        $this->ims = $ims;

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
