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

namespace JoliCode\Slack\Http;

use Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin;

/**
 * Adds the "Authorization: Bearer <token>" header expected by the Slack Web
 * API. The Slack OpenAPI specification declares the "slackAuth" security
 * scheme on every operation, so the generated endpoints hand this plugin
 * their scopes through Jane's AuthenticationRegistry.
 */
final class SlackAuthentication implements AuthenticationPlugin
{
    public function __construct(
        private readonly string $token,
    ) {
    }

    public function decorate(string $method, string $url, array &$options): void
    {
        $options['headers']['Authorization'] = 'Bearer ' . $this->token;
    }

    public function getScope(): string
    {
        return 'slackAuth';
    }
}
