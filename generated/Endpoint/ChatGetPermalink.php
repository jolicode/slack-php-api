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

namespace JoliCode\Slack\Api\Endpoint;

class ChatGetPermalink extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    use \JoliCode\Slack\Api\Runtime\Client\EndpointTrait;

    /**
     * Retrieve a permalink URL for a specific extant message.
     *
     * @param array{
     *    "channel": string, //The ID of the conversation or channel containing the message
     *    "message_ts": string, //A message's `ts` value, uniquely identifying it within a channel
     *    "token"?: string, //Authentication token. Requires scope: `none`
     * } $queryParameters
     */
    public function __construct(array $queryParameters)
    {
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/chat.getPermalink';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    public function getAuthenticationScopes(): array
    {
        return ['slackAuth'];
    }

    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Preload->value;
    }

    public function getTargetClass(): ?string
    {
        return null;
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['channel', 'message_ts', 'token']);
        $optionsResolver->setRequired(['channel', 'message_ts']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('channel', ['string']);
        $optionsResolver->addAllowedTypes('message_ts', ['string']);
        $optionsResolver->addAllowedTypes('token', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \JoliCode\Slack\Api\Model\ChatGetPermalinkGetResponse200|\JoliCode\Slack\Api\Model\ChatGetPermalinkGetResponsedefault
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\ChatGetPermalinkGetResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\ChatGetPermalinkGetResponsedefault', 'json');
    }
}
