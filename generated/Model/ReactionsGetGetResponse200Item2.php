<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class ReactionsGetGetResponse200Item2
{
    /**
     * @var ObjsComment
     */
    protected $comment;
    /**
     * @var ObjsFile
     */
    protected $file;
    /**
     * @var bool
     */
    protected $ok;
    /**
     * @var string
     */
    protected $type;

    /**
     * @return ObjsComment|null
     */
    public function getComment(): ?ObjsComment
    {
        return $this->comment;
    }

    /**
     * @param ObjsComment|null $comment
     *
     * @return self
     */
    public function setComment(?ObjsComment $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @return ObjsFile|null
     */
    public function getFile(): ?ObjsFile
    {
        return $this->file;
    }

    /**
     * @param ObjsFile|null $file
     *
     * @return self
     */
    public function setFile(?ObjsFile $file): self
    {
        $this->file = $file;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getOk(): ?bool
    {
        return $this->ok;
    }

    /**
     * @param bool|null $ok
     *
     * @return self
     */
    public function setOk(?bool $ok): self
    {
        $this->ok = $ok;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
