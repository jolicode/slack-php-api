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
use JoliCode\Slack\Client;

class ClientTest extends SlackTokenDependentTest
{
    public function testItCanIterate(): void
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

    public function testItThrowsExceptionOnUnknownIterate(): void
    {
        $client = $this->createClient();

        self::expectException(\BadMethodCallException::class);
        self::expectExceptionMessage('Unknown method JoliCode\Slack\Client::iterateFooBar()');

        $client->iterateFooBar();
    }

    public function testItThrowsExceptionOnUnknownMethod(): void
    {
        $client = $this->createClient();

        self::expectException(\BadMethodCallException::class);
        self::expectExceptionMessage('Unknown method JoliCode\Slack\Client::foobar()');

        $client->foobar();
    }

    public function testAllCursorPaginationMethodExists()
    {
        $client = $this->createClient();

        foreach (Client::CURSOR_PAGINATION as $methodName => $getterMethod) {
            $getterMethod = 'get' . $getterMethod;
            $method = lcfirst(str_replace('iterate', '', $methodName));

            $responseFromMethod = $client->{$method}($this->argumentsForCursorPaginationRequest($method, $client));

            self::assertTrue(
                method_exists($responseFromMethod, $getterMethod),
                \sprintf('Expected that response from %s would contain method %s', $method, $getterMethod)
            );
        }
    }

    private function argumentsForCursorPaginationRequest(string $method, Client $client): array
    {
        if (\in_array($method, ['conversationsMembers', 'conversationsHistory'])) {
            return ['channel' => $_SERVER['SLACK_TEST_CHANNEL']];
        }

        if ('conversationsReplies' === $method) {
            return [
                'channel' => $_SERVER['SLACK_TEST_CHANNEL'],
                'ts' => $this->findLastThreadTsInChannel($client),
            ];
        }

        if ('filesInfo' === $method) {
            return ['file' => $this->findLastFileIdInChannel($client)];
        }

        return [];
    }

    private function findLastThreadTsInChannel(Client $client): string
    {
        $messages = $client->conversationsHistory([
            'channel' => $_SERVER['SLACK_TEST_CHANNEL'],
            'limit' => 100,
        ])->getMessages();

        foreach ($messages as $message) {
            if (\is_string($message->getThreadTs()) && $message->getThreadTs() === $message->getTs()) {
                return $message->getThreadTs();
            }
        }

        throw new \RuntimeException('Unable to find thread in your test channel');
    }

    private function findLastFileIdInChannel(Client $client): string
    {
        return $client->filesList(['channel' => $_SERVER['SLACK_TEST_CHANNEL']])
            ->getFiles()[0]
            ?->getId() ?? throw new \RuntimeException('Unable to find file in your test channel')
        ;
    }
}
