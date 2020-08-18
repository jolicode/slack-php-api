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
        $this->comments = $comments;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getContentHtml()
    {
        return $this->contentHtml;
    }

    /**
     * @param mixed $contentHtml
     */
    public function setContentHtml($contentHtml): self
    {
        $this->contentHtml = $contentHtml;

        return $this;
    }

    public function getEditor(): ?string
    {
        return $this->editor;
    }

    public function setEditor(?string $editor): self
    {
        $this->editor = $editor;

        return $this;
    }

    public function getFile(): ?ObjsFile
    {
        return $this->file;
    }

    public function setFile(?ObjsFile $file): self
    {
        $this->file = $file;

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

    public function getResponseMetadata(): ?ObjsResponseMetadata
    {
        return $this->responseMetadata;
    }

    public function setResponseMetadata(?ObjsResponseMetadata $responseMetadata): self
    {
        $this->responseMetadata = $responseMetadata;

        return $this;
    }
}
