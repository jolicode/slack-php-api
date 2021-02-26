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
use JoliCode\Slack\Api\Model\ConversationsHistoryGetResponse200;
use JoliCode\Slack\Api\Model\ConversationsListGetResponse200;
use JoliCode\Slack\Api\Model\ObjsFile;
use JoliCode\Slack\Api\Model\SearchMessagesGetResponse200;
use JoliCode\Slack\Api\Model\UsersListGetResponse200;
use JoliCode\Slack\ClientFactory;
use JoliCode\Slack\Exception\SlackErrorResponse;
use PHPUnit\Framework\TestCase;

class ReadingTest extends TestCase
{
    protected function setUp(): void
    {
        if (!\array_key_exists('SLACK_TOKEN', $_SERVER)) {
            $this->markTestSkipped('SLACK_TOKEN env var not present, skip the test.');
        }
    }

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

    public function testItWorksOnUserListWithCorrectToken()
    {
        $client = ClientFactory::create($_SERVER['SLACK_TOKEN']);

        $response = $client->usersList();

        self::assertInstanceOf(UsersListGetResponse200::class, $response);
        self::assertTrue($response->getOk());

        self::assertGreaterThan(2, \count($response->getMembers()));
    }

    public function testItThrowsExceptionOnUserListWithoutToken()
    {
        $client = ClientFactory::create('');

        self::expectException(SlackErrorResponse::class);
        self::expectExceptionMessage('Slack returned error code "not_authed"');

        $client->usersList();
    }

    public function testItCanReadAConversationHistory()
    {
        $client = ClientFactory::create($_SERVER['SLACK_TOKEN']);

        $results = $client->conversationsHistory([
            'channel' => $_SERVER['SLACK_TEST_CHANNEL'],
            'oldest' => (string) strtotime('10 September 2000'), // test #105
        ]);

        self::assertInstanceOf(ConversationsHistoryGetResponse200::class, $results);

        $hadAFileMessage = false;
        foreach ($results->getMessages() as $message) {
            if ($message->getFiles()) {
                $hadAFileMessage = true;
                self::assertInstanceOf(ObjsFile::class, $message->getFiles()[0]);

                if (method_exists($this, 'assertIsString')) {
                    self::assertIsString($message->getTs());
                } else {
                    self::assertInternalType('string', $message->getTs());
                }
            }
        }

        $this->assertTrue($hadAFileMessage, 'We expect a message in File in the history, cf \JoliCode\Slack\Tests\WritingTest::testItCanUploadFile');
    }

    public function testItCanGetTheImList()
    {
        $client = ClientFactory::create($_SERVER['SLACK_TOKEN']);

        $results = $client->conversationsList(['types' => 'im']);

        self::assertInstanceOf(ConversationsListGetResponse200::class, $results);
        self::assertNotEmpty($results->getChannels());
    }

    public function testItCanReadConversationsAndHydrateThem()
    {
        $client = ClientFactory::create($_SERVER['SLACK_TOKEN']);

        /** @var ConversationsListGetResponse200 $response */
        $response = $client->conversationsList([
            'limit' => 2,
        ]);

        $this->assertTrue($response->getOk());
        $this->assertInstanceOf(ConversationsListGetResponse200::class, $response);
        $this->assertNotEmpty($response->getChannels());

        foreach ($response->getChannels() as $channel) {
            $this->assertNotInstanceOf(\stdClass::class, $channel);
        }
    }

    public function testItCanSearchMessages()
    {
        $client = ClientFactory::create($_SERVER['SLACK_TOKEN']);

        /** @var SearchMessagesGetResponse200 $results */
        $results = $client->searchMessages([
            'query' => 'Message with attachment',
            'count' => 1,
        ]);

        self::assertInstanceOf(SearchMessagesGetResponse200::class, $results);
        self::assertTrue($results->getOk());
    }
}
