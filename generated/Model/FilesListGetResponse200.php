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

class FilesListGetResponse200
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var ObjsFile[]|null
     */
    protected $files;
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var ObjsPaging|null
     */
    protected $paging;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return ObjsFile[]|null
     */
    public function getFiles(): ?array
    {
        return $this->files;
    }

    /**
     * @param ObjsFile[]|null $files
     */
    public function setFiles(?array $files): self
    {
        $this->initialized['files'] = true;
        $this->files = $files;

        return $this;
    }

    public function getOk(): ?bool
    {
        return $this->ok;
    }

    public function setOk(?bool $ok): self
    {
        $this->initialized['ok'] = true;
        $this->ok = $ok;

        return $this;
    }

    public function getPaging(): ?ObjsPaging
    {
        return $this->paging;
    }

    public function setPaging(?ObjsPaging $paging): self
    {
        $this->initialized['paging'] = true;
        $this->paging = $paging;

        return $this;
    }
}
