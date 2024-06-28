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

class ChatUpdate extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    use \JoliCode\Slack\Api\Runtime\Client\EndpointTrait;

    /**
     * Updates a message.
     *
     * @param array $formParameters {
     *
     * @var bool   $as_user Pass true to update the message as the authed user. [Bot users](/bot-users) in this context are considered authed users.
     * @var string $attachments A JSON-based array of structured attachments, presented as a URL-encoded string. This field is required when not presenting `text`. If you don't include this field, the message's previous `attachments` will be retained. To remove previous `attachments`, include an empty array for this field.
     * @var string $blocks A JSON-based array of [structured blocks](/block-kit/building), presented as a URL-encoded string. If you don't include this field, the message's previous `blocks` will be retained. To remove previous `blocks`, include an empty array for this field.
     * @var string $channel channel containing the message to be updated
     * @var string $link_names Find and link channel names and usernames. Defaults to `none`. If you do not specify a value for this field, the original value set for the message will be overwritten with the default, `none`.
     * @var string $parse Change how messages are treated. Defaults to `client`, unlike `chat.postMessage`. Accepts either `none` or `full`. If you do not specify a value for this field, the original value set for the message will be overwritten with the default, `client`.
     * @var string $text New text for the message, using the [default formatting rules](/reference/surfaces/formatting). It's not required when presenting `blocks` or `attachments`.
     * @var string $ts Timestamp of the message to be updated.
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $token Authentication token. Requires scope: `chat:write`
     *             }
     */
    public function __construct(array $formParameters = [], array $headerParameters = [])
    {
        $this->formParameters = $formParameters;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/chat.update';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getFormBody();
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    public function getAuthenticationScopes(): array
    {
        return ['slackAuth'];
    }

    protected function getFormOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getFormOptionsResolver();
        $optionsResolver->setDefined(['as_user', 'attachments', 'blocks', 'channel', 'link_names', 'parse', 'text', 'ts']);
        $optionsResolver->setRequired(['channel', 'ts']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('as_user', ['bool']);
        $optionsResolver->addAllowedTypes('attachments', ['string']);
        $optionsResolver->addAllowedTypes('blocks', ['string']);
        $optionsResolver->addAllowedTypes('channel', ['string']);
        $optionsResolver->addAllowedTypes('link_names', ['string']);
        $optionsResolver->addAllowedTypes('parse', ['string']);
        $optionsResolver->addAllowedTypes('text', ['string']);
        $optionsResolver->addAllowedTypes('ts', ['string']);

        return $optionsResolver;
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['token']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('token', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \JoliCode\Slack\Api\Model\ChatUpdatePostResponse200|\JoliCode\Slack\Api\Model\ChatUpdatePostResponsedefault|null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\ChatUpdatePostResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\ChatUpdatePostResponsedefault', 'json');
    }
}
