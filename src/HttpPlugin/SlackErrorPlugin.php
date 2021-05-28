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

namespace JoliCode\Slack\HttpPlugin;

use Http\Client\Common\Plugin;
use Http\Promise\Promise;
use JoliCode\Slack\Exception\SlackErrorResponse;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class SlackErrorPlugin implements Plugin
{
    public function handleRequest(RequestInterface $request, callable $next, callable $first): Promise
    {
        $promise = $next($request);

        return $promise->then(function (ResponseInterface $response) {
            $body = $response->getBody()->getContents();
            $data = json_decode($body, true);

            if (empty($data) || (isset($data['ok']) && $data['ok'] && empty($data['error']))) {
                return $response;
            }

            $responseMetadata = null;
            if (isset($data['response_metadata'])) {
                $responseMetadata = $data['response_metadata'];
            }

            throw new SlackErrorResponse($data['error'], $responseMetadata);
        });
    }
}
