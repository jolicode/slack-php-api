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

use JoliCode\Slack\Api\Model\ApiTestGetResponse200;
use JoliCode\Slack\ClientFactory;
use JoliCode\Slack\Exception\SlackErrorResponse;
use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{
    public function testItWorksOnTestSuccess()
    {
        $client = ClientFactory::create('');
        $response = $client->apiTest();

        self::assertInstanceOf(ApiTestGetResponse200::class, $response);
        self::assertTrue($response->getOk());
    }

    public function testItThrowsExceptionOnTestError()
    {
        $client = ClientFactory::create('');

        self::expectException(SlackErrorResponse::class);
        self::expectExceptionMessage('Slack returned error code "yolo"');

        $client->apiTest([
            'error' => 'yolo',
        ]);
    }
}
