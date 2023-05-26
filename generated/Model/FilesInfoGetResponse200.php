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

class FilesInfoGetResponse200
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var mixed[]|null
     */
    protected $comments;
    /**
     * @var mixed|null
     */
    protected $contentHtml;
    /**
     * @var string|null
     */
    protected $editor;
    /**
     * @var ObjsFile|null
     */
    protected $file;
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var ObjsPaging|null
     */
    protected $paging;
    /**
     * @var ObjsResponseMetadata|null
     */
    protected $responseMetadata;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return mixed[]|null
     */
    public function getComments(): ?array
    {
        return $this->comments;
    }

    /**
     * @param mixed[]|null $comments
     */
    public function setComments(?array $comments): self
    {
        $this->initialized['comments'] = true;
        $this->comments = $comments;

        return $this;
    }

    public function getContentHtml()
    {
        return $this->contentHtml;
    }

    public function setContentHtml($contentHtml): self
    {
        $this->initialized['contentHtml'] = true;
        $this->contentHtml = $contentHtml;

        return $this;
    }

    public function getEditor(): ?string
    {
        return $this->editor;
    }

    public function setEditor(?string $editor): self
    {
        $this->initialized['editor'] = true;
        $this->editor = $editor;

        return $this;
    }

    public function getFile(): ?ObjsFile
    {
        return $this->file;
    }

    public function setFile(?ObjsFile $file): self
    {
        $this->initialized['file'] = true;
        $this->file = $file;

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

    public function getResponseMetadata(): ?ObjsResponseMetadata
    {
        return $this->responseMetadata;
    }

    public function setResponseMetadata(?ObjsResponseMetadata $responseMetadata): self
    {
        $this->initialized['responseMetadata'] = true;
        $this->responseMetadata = $responseMetadata;

        return $this;
    }
}
