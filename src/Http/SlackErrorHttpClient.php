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

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;
use Symfony\Contracts\HttpClient\ResponseStreamInterface;

/**
 * Decorator turning the "ok" payload errors returned by the Slack Web API
 * (a 2xx response with a body like {"ok": false, "error": "..."}) into a
 * {@see SlackErrorResponse} exception.
 *
 * The body is inspected lazily, when the response is first read: this
 * keeps the deferred fetch modes (lazy / preload) working.
 */
final class SlackErrorHttpClient implements HttpClientInterface
{
    public function __construct(
        private readonly ?HttpClientInterface $httpClient = null,
    ) {
    }

    /**
     * Decorator factory: apply this decorator on top of an HttpClientInterface.
     */
    public function __invoke(HttpClientInterface $httpClient): self
    {
        return new self($httpClient);
    }

    public function request(string $method, string $url, array $options = []): ResponseInterface
    {
        return new SlackErrorAwareResponse($this->inner()->request($method, $url, $options));
    }

    public function stream(ResponseInterface|iterable $responses, ?float $timeout = null): ResponseStreamInterface
    {
        return $this->inner()->stream($responses, $timeout);
    }

    public function withOptions(array $options): static
    {
        return new self($this->inner()->withOptions($options));
    }

    private function inner(): HttpClientInterface
    {
        return $this->httpClient ?? throw new \LogicException(\sprintf('The "%s" decorator must be applied to a "%s" (via its __invoke method) before use.', self::class, HttpClientInterface::class));
    }
}
