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
use JoliCode\Slack\Api\Model\FilesUploadPostResponse200;
use JoliCode\Slack\ClientFactory;
use Nyholm\Psr7\Stream;
use PHPUnit\Framework\TestCase;

class WritingTest extends TestCase
{
    public function testItCanPostAttachment()
    {
        $client = ClientFactory::create($_SERVER['SLACK_TOKEN']);

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
        self::assertContains($response->getMessage()->getAttachments()[0]->getImageUrl(), 'https://jolicode.com/images/valeurs_huma.png');
    }

    public function testItCanPostMessageWithBlock()
    {
        $client = ClientFactory::create($_SERVER['SLACK_TOKEN']);

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

    public function testItCanPostAMessageAndThenAThreadResponse()
    {
        $client = ClientFactory::create($_SERVER['SLACK_TOKEN']);

        /** @var ChatPostMessagePostResponse200 $response */
        $response = $client->chatPostMessage([
            'username' => 'User A',
            'channel' => $_SERVER['SLACK_TEST_CHANNEL'],
            'text' => 'First message',
        ]);

        $response2 = $client->chatPostMessage([
            'username' => 'User B',
            'channel' => $_SERVER['SLACK_TEST_CHANNEL'],
            'text' => 'First response in a Thread',
            'thread_ts' => $response->getMessage()->getTs(),
        ]);

        $this->assertTrue($response2->getOk());
    }

    public function testItCanUploadFile()
    {
        $client = ClientFactory::create($_SERVER['SLACK_TOKEN']);

        /** @var FilesUploadPostResponse200 $response */
        $response = $client->filesUpload([
            'channels' => $_SERVER['SLACK_TEST_CHANNEL'],
            'title' => 'Uploaded image',
            'filename' => 'test-image.png',
            'filetype' => 'png',
            'file' => Stream::create(fopen(__DIR__.'/resources/test-image.png', 'r')),
        ]);

        $this->assertTrue($response->getOk());
    }
}
