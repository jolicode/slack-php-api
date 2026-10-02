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
    public ?string $fieldName;
    public ?string $hint;
    public ?string $id;
    public ?bool $isHidden;
    public ?string $label;
    public ?ObjsTeamProfileFieldOption $options;
    public ?float $ordering;
    /**
     * @var list<string>|null
     */
    public ?array $possibleValues;
    public ?string $type;
}
