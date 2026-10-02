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

use JoliCode\Slack\Exception\SlackErrorResponse;
use Symfony\Contracts\HttpClient\ResponseInterface;

/**
 * Response decorator checking the Slack "ok" payload on first content read.
 *
 * @see SlackErrorHttpClient for the rationale: Slack reports most of its
 * errors with a 2xx status and a JSON body such as {"ok": false, "error": ...}.
 */
final class SlackErrorAwareResponse implements ResponseInterface
{
    public function __construct(
        private readonly ResponseInterface $response,
    ) {
    }

    public function getStatusCode(): int
    {
        return $this->response->getStatusCode();
    }

    public function getHeaders(bool $throw = true): array
    {
        return $this->response->getHeaders($throw);
    }

    public function getContent(bool $throw = true): string
    {
        return $this->assertNoSlackError($this->response->getContent($throw));
    }

    public function toArray(bool $throw = true): array
    {
        $data = $this->response->toArray($throw);

        $this->throwOnSlackPayload($data);

        return $data;
    }

    public function cancel(): void
    {
        $this->response->cancel();
    }

    public function getInfo(?string $type = null): mixed
    {
        return $this->response->getInfo($type);
    }

    private function assertNoSlackError(string $content): string
    {
        $data = json_decode($content, true);

        if (\is_array($data) && [] !== $data) {
            $this->throwOnSlackPayload($data);
        }

        return $content;
    }

    /**
     * Reproduces the check of the historical HTTPlug SlackErrorPlugin: a
     * non-empty payload is an error unless "ok" is true without any "error"
     * key. Otherwise the response content is forwarded untouched.
     *
     * @param array<string, mixed> $data
     */
    private function throwOnSlackPayload(array $data): void
    {
        if (isset($data['ok']) && $data['ok'] && empty($data['error'])) {
            return;
        }

        $responseMetadata = $data['response_metadata'] ?? null;
        $error = $data['error'] ?? '';

        throw new SlackErrorResponse(\is_string($error) ? $error : '', \is_array($responseMetadata) ? $responseMetadata : null);
    }
}
