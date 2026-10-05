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

use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use JoliCode\Slack\Http\SlackAuthentication;
use JoliCode\Slack\Http\SlackErrorHttpClient;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ClientFactory
{
    public static function create(string $token, ?HttpClientInterface $httpClient = null): Client
    {
        if (null === $httpClient) {
            $httpClient = HttpClient::create();
        }

        // The server URL (host + "/api" base path) is applied by the generated
        // Client itself through Jane's ServerUrlHttpClient decorator, so any
        // relative endpoint URI like "/api.test" is resolved to
        // "https://slack.com/api/api.test". Absolute URLs (e.g. file uploads on
        // "https://files.slack.com") are forwarded untouched.
        return Client::create($httpClient, [
            new AuthenticationRegistry([new SlackAuthentication($token)]),
            new SlackErrorHttpClient(),
        ]);
    }
}
