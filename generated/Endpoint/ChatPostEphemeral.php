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

class ChatPostEphemeral extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    use \JoliCode\Slack\Api\Runtime\Client\EndpointTrait;

    /**
     * Sends an ephemeral message to a user in a channel.
     *
     * @param array{
     *    "as_user"?: bool, //Pass true to post the message as the authed user. Defaults to true if the chat:write:bot scope is not included. Otherwise, defaults to false.
     *    "attachments"?: string, //A JSON-based array of structured attachments, presented as a URL-encoded string.
     *    "blocks"?: string, //A JSON-based array of structured blocks, presented as a URL-encoded string.
     *    "channel": string, //Channel, private group, or IM channel to send message to. Can be an encoded ID, or a name.
     *    "icon_emoji"?: string, //Emoji to use as the icon for this message. Overrides `icon_url`. Must be used in conjunction with `as_user` set to `false`, otherwise ignored. See [authorship](#authorship) below.
     *    "icon_url"?: string, //URL to an image to use as the icon for this message. Must be used in conjunction with `as_user` set to false, otherwise ignored. See [authorship](#authorship) below.
     *    "link_names"?: bool, //Find and link channel names and usernames.
     *    "parse"?: string, //Change how messages are treated. Defaults to `none`. See [below](#formatting).
     *    "text"?: string, //How this field works and whether it is required depends on other fields you use in your API call. [See below](#text_usage) for more detail.
     *    "thread_ts"?: string, //Provide another message's `ts` value to post this message in a thread. Avoid using a reply's `ts` value; use its parent's value instead. Ephemeral messages in threads are only shown if there is already an active thread.
     *    "user": string, //`id` of the user who will receive the ephemeral message. The user should be in the channel specified by the `channel` argument.
     *    "username"?: string, //Set your bot's user name. Must be used in conjunction with `as_user` set to false, otherwise ignored. See [authorship](#authorship) below.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `chat:write`
     * } $headerParameters
     */
    public function __construct(array $formParameters, array $headerParameters = [])
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
        return '/chat.postEphemeral';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
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

    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }

    public function getTargetClass(): ?string
    {
        return null;
    }

    protected function getFormOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getFormOptionsResolver();
        $optionsResolver->setDefined(['as_user', 'attachments', 'blocks', 'channel', 'icon_emoji', 'icon_url', 'link_names', 'parse', 'text', 'thread_ts', 'user', 'username']);
        $optionsResolver->setRequired(['channel', 'user']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('as_user', ['bool']);
        $optionsResolver->addAllowedTypes('attachments', ['string']);
        $optionsResolver->addAllowedTypes('blocks', ['string']);
        $optionsResolver->addAllowedTypes('channel', ['string']);
        $optionsResolver->addAllowedTypes('icon_emoji', ['string']);
        $optionsResolver->addAllowedTypes('icon_url', ['string']);
        $optionsResolver->addAllowedTypes('link_names', ['bool']);
        $optionsResolver->addAllowedTypes('parse', ['string']);
        $optionsResolver->addAllowedTypes('text', ['string']);
        $optionsResolver->addAllowedTypes('thread_ts', ['string']);
        $optionsResolver->addAllowedTypes('user', ['string']);
        $optionsResolver->addAllowedTypes('username', ['string']);

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
     * @return \JoliCode\Slack\Api\Model\ChatPostEphemeralPostResponse200|\JoliCode\Slack\Api\Model\ChatPostEphemeralPostResponsedefault
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\ChatPostEphemeralPostResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\ChatPostEphemeralPostResponsedefault', 'json');
    }
}
