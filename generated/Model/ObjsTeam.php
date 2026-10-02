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

class ObjsTeam
{
    public ?bool $archived;
    public ?string $avatarBaseUrl;
    public ?int $created;
    public ?int $dateCreate;
    public ?bool $deleted;
    public ?string $description;
    public ?string $discoverable;
    public ?string $domain;
    public ?string $emailDomain;
    public ?string $enterpriseId;
    public ?string $enterpriseName;
    public ?ObjsExternalOrgMigrations $externalOrgMigrations;
    public ?bool $hasComplianceExport;
    public ?ObjsIcon $icon;
    public ?string $id;
    public ?bool $isAssigned;
    public ?int $isEnterprise;
    public ?bool $isOverStorageLimit;
    public ?int $limitTs;
    public ?string $locale;
    public ?int $messagesCount;
    public ?int $msgEditWindowMins;
    public ?string $name;
    public ?bool $overIntegrationsLimit;
    public ?bool $overStorageLimit;
    public ?string $payProdCur;
    public ?string $plan;
    public ?ObjsPrimaryOwner $primaryOwner;
    public ?ObjsTeamSsoProvider $ssoProvider;
}
