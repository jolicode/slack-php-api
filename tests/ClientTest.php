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
use JoliCode\Slack\ClientFactory;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    protected function setUp(): void
    {
        if (!\array_key_exists('SLACK_TOKEN', $_SERVER)) {
            $this->markTestSkipped('SLACK_TOKEN env var not present, skip the test.');
        }
    }

    public function testItCanIterate()
    {
        $client = ClientFactory::create($_SERVER['SLACK_TOKEN']);

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
        $client = ClientFactory::create($_SERVER['SLACK_TOKEN']);

        self::expectException(\BadMethodCallException::class);
        self::expectExceptionMessage('Unknown method JoliCode\Slack\Client::iterateFooBar()');

        $client->iterateFooBar();
    }

    public function testItThrowsExceptionOnUnknownMethod()
    {
        $client = ClientFactory::create($_SERVER['SLACK_TOKEN']);

        self::expectException(\BadMethodCallException::class);
        self::expectExceptionMessage('Unknown method JoliCode\Slack\Client::foobar()');

        $client->foobar();
    }
}
