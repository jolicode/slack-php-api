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

class ChatPostMessage extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    use \JoliCode\Slack\Api\Runtime\Client\EndpointTrait;

    /**
     * Sends a message to a channel.
     *
     * @param array{
     *    "as_user"?: bool, //Pass true to post the message as the authed user, instead of as a bot. Defaults to false. See [authorship](#authorship) below.
     *    "attachments"?: string, //A JSON-based array of structured attachments, presented as a URL-encoded string.
     *    "blocks"?: string, //A JSON-based array of structured blocks, presented as a URL-encoded string.
     *    "channel": string, //Channel, private group, or IM channel to send message to. Can be an encoded ID, or a name. See [below](#channels) for more details.
     *    "icon_emoji"?: string, //Emoji to use as the icon for this message. Overrides `icon_url`. Must be used in conjunction with `as_user` set to `false`, otherwise ignored. See [authorship](#authorship) below.
     *    "icon_url"?: string, //URL to an image to use as the icon for this message. Must be used in conjunction with `as_user` set to false, otherwise ignored. See [authorship](#authorship) below.
     *    "link_names"?: bool, //Find and link channel names and usernames.
     *    "metadata"?: string, //JSON object with event_type and event_payload fields, presented as a URL-encoded string. Metadata you post to Slack is accessible to any app or user who is a member of that workspace.
     *    "mrkdwn"?: bool, //Disable Slack markup parsing by setting to `false`. Enabled by default.
     *    "parse"?: string, //Change how messages are treated. Defaults to `none`. See [below](#formatting).
     *    "reply_broadcast"?: bool, //Used in conjunction with `thread_ts` and indicates whether reply should be made visible to everyone in the channel or conversation. Defaults to `false`.
     *    "text"?: string, //How this field works and whether it is required depends on other fields you use in your API call. [See below](#text_usage) for more detail.
     *    "thread_ts"?: string, //Provide another message's `ts` value to make this message a reply. Avoid using a reply's `ts` value; use its parent instead.
     *    "unfurl_links"?: bool, //Pass true to enable unfurling of primarily text-based content.
     *    "unfurl_media"?: bool, //Pass false to disable unfurling of media content.
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
        return '/chat.postMessage';
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
        $optionsResolver->setDefined(['as_user', 'attachments', 'blocks', 'channel', 'icon_emoji', 'icon_url', 'link_names', 'metadata', 'mrkdwn', 'parse', 'reply_broadcast', 'text', 'thread_ts', 'unfurl_links', 'unfurl_media', 'username']);
        $optionsResolver->setRequired(['channel']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('as_user', ['bool']);
        $optionsResolver->addAllowedTypes('attachments', ['string']);
        $optionsResolver->addAllowedTypes('blocks', ['string']);
        $optionsResolver->addAllowedTypes('channel', ['string']);
        $optionsResolver->addAllowedTypes('icon_emoji', ['string']);
        $optionsResolver->addAllowedTypes('icon_url', ['string']);
        $optionsResolver->addAllowedTypes('link_names', ['bool']);
        $optionsResolver->addAllowedTypes('metadata', ['string']);
        $optionsResolver->addAllowedTypes('mrkdwn', ['bool']);
        $optionsResolver->addAllowedTypes('parse', ['string']);
        $optionsResolver->addAllowedTypes('reply_broadcast', ['bool']);
        $optionsResolver->addAllowedTypes('text', ['string']);
        $optionsResolver->addAllowedTypes('thread_ts', ['string']);
        $optionsResolver->addAllowedTypes('unfurl_links', ['bool']);
        $optionsResolver->addAllowedTypes('unfurl_media', ['bool']);
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
     * @return \JoliCode\Slack\Api\Model\ChatPostMessagePostResponse200|\JoliCode\Slack\Api\Model\ChatPostMessagePostResponsedefault
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\ChatPostMessagePostResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\ChatPostMessagePostResponsedefault', 'json');
    }
}
