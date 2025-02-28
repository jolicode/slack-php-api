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

use JoliCode\Slack\Api\Model\ChatPostMessagePostResponse200;
use JoliCode\Slack\Api\Model\FilesGetUploadURLExternalGetResponse200;
use JoliCode\Slack\Api\Model\FilesUploadPostResponse200;
use JoliCode\Slack\CustomRoutes\Model\FilesUploadToURLExternalPostResponse200;
use Nyholm\Psr7\Stream;

class WritingTest extends SlackTokenDependentTest
{
    public function testItCanPostAttachment(): void
    {
        $client = $this->createClient();

        $response = $client->chatPostMessage([
            'username' => 'User A',
            'channel' => $_SERVER['SLACK_TEST_CHANNEL'],
            'text' => 'Message with attachment',
            'attachments' => json_encode([[
                'fallback' => 'JoliCode',
                'image_url' => 'https://jolicode.com/images/valeurs_huma.png',
            ]]),
        ]);

        self::assertInstanceOf(ChatPostMessagePostResponse200::class, $response);

        if (method_exists($this, 'assertStringContainsString')) {
            self::assertStringContainsString($response->getMessage()->getAttachments()[0]->getImageUrl(), 'https://jolicode.com/images/valeurs_huma.png');
        } else {
            self::assertContains($response->getMessage()->getAttachments()[0]->getImageUrl(), 'https://jolicode.com/images/valeurs_huma.png');
        }
    }

    public function testItCanPostMessageWithBlock(): void
    {
        $client = $this->createClient();

        $response = $client->chatPostMessage([
            'username' => 'User C',
            'channel' => $_SERVER['SLACK_TEST_CHANNEL'],
            'text' => 'Message with blocks',
            'blocks' => json_encode([
                [
                    'type' => 'section',
                    'text' => [
                        'type' => 'mrkdwn',
                        'text' => ':tada: Blocks are working!',
                    ],
                ],
                [
                    'type' => 'divider',
                ],
                [
                    'type' => 'context',
                    'elements' => [
                        [
                            'type' => 'mrkdwn',
                            'text' => ':woman-running: Best test ever',
                        ],
                    ],
                ],
            ]),
        ]);

        self::assertInstanceOf(ChatPostMessagePostResponse200::class, $response);
        self::assertNotEmpty($response->getMessage()->getBlocks());
    }

    public function testItCanPostAMessageAndThenAThreadResponse(): void
    {
        $client = $this->createClient();

        /** @var ChatPostMessagePostResponse200 $response */
        $response = $client->chatPostMessage([
            'username' => 'User A',
            'channel' => $_SERVER['SLACK_TEST_CHANNEL'],
            'text' => 'First message',
        ]);

        if ($_SERVER['CI'] ?? false) {
            sleep(10); // @see https://github.com/jolicode/slack-php-api/issues/163
        }

        $response2 = $client->chatPostMessage([
            'username' => 'User B',
            'channel' => $_SERVER['SLACK_TEST_CHANNEL'],
            'text' => 'First response in a Thread',
            'thread_ts' => $response->getMessage()->getTs(),
        ]);

        $this->assertTrue($response2->getOk());
    }

    public function testItCanUploadFile(): void
    {
        $client = $this->createClient();

        /** @var FilesUploadPostResponse200 $response */
        $response = $client->filesUpload([
            'channels' => $_SERVER['SLACK_TEST_CHANNEL'],
            'title' => 'Uploaded image',
            'filename' => 'test-image.png',
            'initial_comment' => 'This is a initial_comment in a filesUpload',
            'filetype' => 'png',
            'file' => Stream::create(fopen(__DIR__ . '/resources/test-image.png', 'r')),
        ]);

        $this->assertTrue($response->getOk());

        // On new messages it's an integer
        if (method_exists($this, 'assertIsInt')) {
            $this->assertIsInt($response->getFile()->getTimestamp());
        } else {
            $this->assertInternalType('int', $response->getFile()->getTimestamp());
        }
    }

    public function testGetUploadURLExternal(): void
    {
        $client = $this->createClient();

        /** @var FilesGetUploadURLExternalGetResponse200 $response */
        $response = $client->filesGetUploadURLExternal([
            'filename' => 'test-image.png',
            'length' => filesize(__DIR__ . '/resources/test-image.png'),
        ]);

        $this->assertTrue($response->getOk());

        $this->assertNotEmpty($response->getUploadUrl());
        $this->assertNotEmpty($response->getFileId());
    }

    public function testCompleteUploadExternal(): void
    {
        /* Step 1: Get the upload url */
        $client = $this->createClient();

        $filename = 'test-image.png';

        /** @var FilesGetUploadURLExternalGetResponse200 $response */
        $response = $client->filesGetUploadURLExternal([
            'filename' => $filename,
            'length' => filesize(__DIR__ . '/resources/test-image.png'),
        ]);

        $this->assertTrue($response->getOk());

        $this->assertNotEmpty($response->getUploadUrl());
        $this->assertNotEmpty($response->getFileId());

        // Save values for confirming upload
        $fileId = $response->getFileId();
        $uploadUrl = $response->getUploadUrl();

        /* Step 2: Send file to slack with post method */

        /** @var FilesUploadToURLExternalPostResponse200 $response */
        $response = $client->FileUploadToURLExternal($uploadUrl, [
            'filename' => $filename,
            'content' => file_get_contents(__DIR__ . '/resources/test-image.png'), // , 'r'),
        ]);

        //        /** @var FilesUploadToURLExternalPostResponse200 $response */ 07221997
        //        $response = $client->FileUploadToURLExternal($uploadUrl, [
        //            'filename' => $filename,
        //            'content' => fopen(__DIR__ . '/resources/test-image.png', 'r'),
        //        ]);

        $this->assertTrue($response->getOk());

        /* Step 3: confirm upload */
        $filesArr = [
            [
                'id' => $fileId,
                'title' => $filename,
            ],
        ];

        $response = $client->filesCompleteUploadExternal([
            'channel_id' => $_SERVER['SLACK_TEST_CHANNEL'],
            'files' => json_encode($filesArr),
        ]);

        $this->assertTrue($response->getOk());

        $expected = [
            'id' => $fileId,
            'title' => $filename,
        ];

        $this->assertSame($expected, $response['files']);
    }

    public function testScheduleMessage(): void
    {
        $client = $this->createClient();
        $futureTs = (new \DateTime('+1 hour'))->getTimestamp();

        $response = $client->chatScheduleMessage([
            'channel' => $_SERVER['SLACK_TEST_CHANNEL'],
            'text' => 'Hey, This is a scheduled message :tada:',
            'post_at' => $futureTs,
        ]);

        $this->assertTrue($response->getOk());
    }

    public function testItCanMarkConversation(): void
    {
        $client = $this->createClient();

        $response = $client->chatPostMessage([
            'username' => 'User A',
            'channel' => $_SERVER['SLACK_TEST_CHANNEL'],
            'text' => 'Message to be mark as read',
        ]);

        self::assertInstanceOf(ChatPostMessagePostResponse200::class, $response);

        $ts = $response->getTs();

        if ($_SERVER['CI'] ?? false) {
            sleep(10); // @see https://github.com/jolicode/slack-php-api/issues/163
        }

        $markResponse = $client->conversationsMark([
            'channel' => $_SERVER['SLACK_TEST_CHANNEL'],
            'ts' => $ts,
        ]);

        self::assertTrue($markResponse->getOk());
    }
}
