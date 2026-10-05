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

class ObjsEnterpriseUser
{
    public ?string $enterpriseId;
    public ?string $enterpriseName;
    public ?string $id;
    public ?bool $isAdmin;
    public ?bool $isOwner;
    /**
     * @var list<string>|null
     */
    public ?array $teams;
}
