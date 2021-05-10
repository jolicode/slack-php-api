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

namespace JoliCode\Slack;

use JoliCode\Slack\Api\Client as ApiClient;

class Client extends ApiClient
{
    public const CURSOR_PAGINATION = [
        'channelsList' => 'channels',
        'conversationsHistory' => 'messages',
        'conversationsList' => 'channels',
        'conversationsMembers' => 'members',
        'conversationsReplies' => 'messages',
        'filesInfo' => 'comments',
        'groupsList' => 'groups',
        'imList' => 'ims',
        'mpimList' => 'groups',
        'reactionsList' => 'items',
        'starsList' => 'items',
        'usersList' => 'members',
    ];

    public function __call(string $name, $arguments)
    {
        $method = lcfirst(str_replace('iterate', '', $name));

        if (isset(self::CURSOR_PAGINATION[$method])) {
            return $this->iterate($method, $arguments);
        }

        throw new \BadMethodCallException(sprintf('Unknown method %s::%s()', self::class, $name));
    }

    public function iterate(string $method, array $arguments): iterable
    {
        $getter = 'get'.self::CURSOR_PAGINATION[$method];

        $arguments[0] = $arguments[0] ?? [];
        $arguments[0]['limit'] = $arguments[0]['limit'] ?? 1000;

        $cursor = '';

        do {
            $arguments[0]['cursor'] = $cursor;

            $response = $this->{$method}(...$arguments);

            foreach ($response->{$getter}() as $item) {
                yield $item;
            }

            $cursor = $response->getResponseMetadata() ? $response->getResponseMetadata()->getNextCursor() : '';
        } while (!empty($cursor));
    }
}
