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

namespace JoliCode\Slack\Api\Runtime\Client;

use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

interface Endpoint
{
    /**
     * Get body for an endpoint.
     *
     * Return value consist of an array where the first item will be a list of headers to add on the request (like the Content Type)
     * And the second value consist of the body object.
     *
     * @param mixed|null $streamFactory
     */
    public function getBody(SerializerInterface $serializer, $streamFactory = null): array;

    /**
     * Get the query string of an endpoint without the starting ? (like foo=foo&bar=bar).
     */
    public function getQueryString(): string;

    /**
     * Get the URI of an endpoint (like /foo-uri).
     */
    public function getUri(): string;

    /**
     * Get the HTTP method of an endpoint (like GET, POST, ...).
     */
    public function getMethod(): string;

    /**
     * Get the headers of an endpoint.
     */
    public function getHeaders(array $baseHeaders = []): array;

    /**
     * Get security scopes of an endpoint.
     */
    public function getAuthenticationScopes(): array;

    /**
     * Parse and transform a PSR7 Response into a different object.
     *
     * Implementations may vary depending the status code of the response and the fetch mode used.
     */
    public function parseResponse(ResponseInterface $response, SerializerInterface $serializer, string $fetchMode = Client::FETCH_OBJECT);
}
