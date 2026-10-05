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

use JoliCode\Slack\Api\Model\ConversationsHistoryGetResponse200;
use JoliCode\Slack\Api\Model\ConversationsListGetResponse200;
use JoliCode\Slack\Api\Model\ObjsConversation;
use JoliCode\Slack\Api\Model\ObjsFile;
use JoliCode\Slack\Api\Model\SearchMessagesGetResponse200;
use JoliCode\Slack\Api\Model\UsersListGetResponse200;
use JoliCode\Slack\Exception\SlackErrorResponse;

class ReadingTest extends SlackTokenDependentTest
{
    public function testItWorksOnUserListWithCorrectToken(): void
    {
        $client = $this->createClient();

        $response = $client->usersList();

        self::assertInstanceOf(UsersListGetResponse200::class, $response);
        self::assertTrue($response->ok);

        self::assertGreaterThan(2, \count($response->members));
    }

    public function testItThrowsExceptionOnUserListWithoutToken(): void
    {
        $client = $this->createClient('');

        self::expectException(SlackErrorResponse::class);
        self::expectExceptionMessage('Slack returned error code "not_authed"');

        $client->usersList();
    }

    public function testItCanReadAConversationHistory(): void
    {
        $client = $this->createClient();

        $results = $client->conversationsHistory([
            'channel' => $_SERVER['SLACK_TEST_CHANNEL'],
            'oldest' => (string) strtotime('10 September 2000'), // test #105
        ]);

        self::assertInstanceOf(ConversationsHistoryGetResponse200::class, $results);

        $hadAFileMessage = false;
        foreach ($results->messages ?? [] as $message) {
            if ($message->files ?? null) {
                $hadAFileMessage = true;
                self::assertInstanceOf(ObjsFile::class, $message->files[0]);

                if (method_exists($this, 'assertIsString')) {
                    self::assertIsString($message->ts);
                } else {
                    self::assertInternalType('string', $message->ts);
                }
            }
        }

        $this->assertTrue($hadAFileMessage, 'We expect a message in File in the history, cf \JoliCode\Slack\Tests\WritingTest::testItCanUploadFile');
    }

    public function testItCanGetTheImList(): void
    {
        $client = $this->createClient();

        $results = $client->conversationsList(['types' => 'im']);

        self::assertInstanceOf(ConversationsListGetResponse200::class, $results);
        self::assertNotEmpty($results->channels);
    }

    public function testItCanReadConversationsAndHydrateThem(): void
    {
        $client = $this->createClient();

        /** @var ConversationsListGetResponse200 $response */
        $response = $client->conversationsList([
            'limit' => 2,
        ]);

        $this->assertTrue($response->ok);
        $this->assertInstanceOf(ConversationsListGetResponse200::class, $response);
        $this->assertNotEmpty($response->channels);

        foreach ($response->channels as $channel) {
            $this->assertInstanceOf(ObjsConversation::class, $channel);
        }
    }

    public function testItCanGetConversationLocale(): void
    {
        $client = $this->createClient();

        $response = $client->conversationsInfo([
            'channel' => $_SERVER['SLACK_TEST_CHANNEL'],
            'include_locale' => true,
        ]);

        $this->assertTrue($response->ok);

        $channel = $response->channel;

        $this->assertInstanceOf(ObjsConversation::class, $channel);
        $this->assertNotNull($channel->locale);
    }

    public function testItCanSearchMessages(): void
    {
        $client = $this->createClient();

        /** @var SearchMessagesGetResponse200 $results */
        $results = $client->searchMessages([
            'query' => 'Message with attachment',
            'count' => 1,
        ]);

        self::assertInstanceOf(SearchMessagesGetResponse200::class, $results);
        self::assertTrue($results->ok);
    }
}
