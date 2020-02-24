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

namespace JoliCode\Slack\Tests;

use JoliCode\Slack\Api\Model\UsersListGetResponse200;
use JoliCode\Slack\ClientFactory;
use PHPUnit\Framework\TestCase;

class UserInfoTest extends TestCase
{
    public function testItCanFetchUserInfo()
    {
        $client = ClientFactory::create($_SERVER['SLACK_TOKEN']);

        $response = $client->usersList(['limit' => 2]);

        /* @var UsersListGetResponse200 $response */
        $this->assertInstanceOf(UsersListGetResponse200::class, $response);
        $this->assertTrue($response->getOk());
        $this->assertNotEmpty($response->getMembers());

        foreach ($response->getMembers() as $member) {
            $this->assertNotInstanceOf(\stdClass::class, $member);
        }
    }
}
