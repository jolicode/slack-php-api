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

use JoliCode\Slack\Client;
use JoliCode\Slack\ClientFactory;
use PHPUnit\Framework\TestCase;

abstract class SlackTokenDependentTest extends TestCase
{
    protected function setUp(): void
    {
        if (!($_SERVER['SLACK_TOKEN'] ?? null)) {
            $this->markTestSkipped('SLACK_TOKEN env var not present, skip the test.');
        }
    }

    protected function createClient(string $token = null): Client
    {
        // On GitHub Action, we get rate limit issues with Slack API calls because tests are run in parallel
        // This "sleep" method tries to share the load.
        if ($_SERVER['CI'] ?? false) {
            sleep(rand(1, 10));
        }

        return ClientFactory::create(null === $token ? $_SERVER['SLACK_TOKEN'] : $token);
    }
}
