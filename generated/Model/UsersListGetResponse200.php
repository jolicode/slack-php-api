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

class UsersListGetResponse200
{
    public ?int $cacheTs;
    /**
     * @var list<ObjsUser>|null
     */
    public ?array $members;
    public ?bool $ok;
    public ?ObjsResponseMetadata $responseMetadata;
}
