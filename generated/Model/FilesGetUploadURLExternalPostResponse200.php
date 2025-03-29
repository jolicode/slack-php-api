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

class FilesGetUploadURLExternalPostResponse200
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $fileId;
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * URL where the file should be uploaded.
     *
     * @var string|null
     */
    protected $uploadUrl;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getFileId(): ?string
    {
        return $this->fileId;
    }

    public function setFileId(?string $fileId): self
    {
        $this->initialized['fileId'] = true;
        $this->fileId = $fileId;

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

    /**
     * URL where the file should be uploaded.
     */
    public function getUploadUrl(): ?string
    {
        return $this->uploadUrl;
    }

    /**
     * URL where the file should be uploaded.
     */
    public function setUploadUrl(?string $uploadUrl): self
    {
        $this->initialized['uploadUrl'] = true;
        $this->uploadUrl = $uploadUrl;

        return $this;
    }
}
