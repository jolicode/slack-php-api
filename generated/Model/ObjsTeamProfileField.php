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

class ObjsTeamProfileField
{
    /**
     * @var string|null
     */
    protected $fieldName;
    /**
     * @var string|null
     */
    protected $hint;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var bool|null
     */
    protected $isHidden;
    /**
     * @var string|null
     */
    protected $label;
    /**
     * @var ObjsTeamProfileFieldOption|null
     */
    protected $options;
    /**
     * @var float|null
     */
    protected $ordering;
    /**
     * @var string[]|null
     */
    protected $possibleValues;
    /**
     * @var string|null
     */
    protected $type;

    public function getFieldName(): ?string
    {
        return $this->fieldName;
    }

    public function setFieldName(?string $fieldName): self
    {
        $this->fieldName = $fieldName;

        return $this;
    }

    public function getHint(): ?string
    {
        return $this->hint;
    }

    public function setHint(?string $hint): self
    {
        $this->hint = $hint;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getIsHidden(): ?bool
    {
        return $this->isHidden;
    }

    public function setIsHidden(?bool $isHidden): self
    {
        $this->isHidden = $isHidden;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getOptions(): ?ObjsTeamProfileFieldOption
    {
        return $this->options;
    }

    public function setOptions(?ObjsTeamProfileFieldOption $options): self
    {
        $this->options = $options;

        return $this;
    }

    public function getOrdering(): ?float
    {
        return $this->ordering;
    }

    public function setOrdering(?float $ordering): self
    {
        $this->ordering = $ordering;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getPossibleValues(): ?array
    {
        return $this->possibleValues;
    }

    /**
     * @param string[]|null $possibleValues
     */
    public function setPossibleValues(?array $possibleValues): self
    {
        $this->possibleValues = $possibleValues;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
