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

use JoliCode\Slack\Api\Model\ObjsUser;

class ClientTest extends SlackTokenDependentTest
{
    public function testItCanIterate()
    {
        $client = $this->createClient();

        $users = $client->iterateUsersList([
            'limit' => 1000,
        ]);

        self::assertIsIterable($users);

        $users = iterator_to_array($users);

        self::assertGreaterThan(1000, \count($users));
        self::assertInstanceOf(ObjsUser::class, $users[0]);
    }

    public function testItThrowsExceptionOnUnknownIterate()
    {
        $client = $this->createClient();

        self::expectException(\BadMethodCallException::class);
        self::expectExceptionMessage('Unknown method JoliCode\Slack\Client::iterateFooBar()');

        $client->iterateFooBar();
    }

    public function testItThrowsExceptionOnUnknownMethod()
    {
        $client = $this->createClient();

        self::expectException(\BadMethodCallException::class);
        self::expectExceptionMessage('Unknown method JoliCode\Slack\Client::foobar()');

        $client->foobar();
    }
}
