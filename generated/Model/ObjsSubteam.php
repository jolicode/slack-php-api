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

class ObjsSubteam
{
    public ?bool $autoProvision;
    /**
     * @var mixed|null
     */
    public $autoType;
    public ?int $channelCount;
    public ?string $createdBy;
    public ?int $dateCreate;
    public ?int $dateDelete;
    public ?int $dateUpdate;
    /**
     * @var mixed|null
     */
    public $deletedBy;
    public ?string $description;
    public ?string $enterpriseSubteamId;
    public ?string $handle;
    public ?string $id;
    public ?bool $isExternal;
    public ?bool $isSubteam;
    public ?bool $isUsergroup;
    public ?string $name;
    public ?ObjsSubteamPrefs $prefs;
    public ?string $teamId;
    public ?string $updatedBy;
    public ?int $userCount;
    /**
     * @var list<string>|null
     */
    public ?array $users;
}
