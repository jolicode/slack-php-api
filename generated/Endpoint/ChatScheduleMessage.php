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

class ChatScheduleMessage extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    use \JoliCode\Slack\Api\Runtime\Client\EndpointTrait;

    /**
     * Schedules a message to be sent to a channel.
     *
     * @param array{
     *    "as_user"?: bool, //Pass true to post the message as the authed user, instead of as a bot. Defaults to false. See [chat.postMessage](chat.postMessage#authorship).
     *    "attachments"?: string, //A JSON-based array of structured attachments, presented as a URL-encoded string.
     *    "blocks"?: string, //A JSON-based array of structured blocks, presented as a URL-encoded string.
     *    "channel"?: string, //Channel, private group, or DM channel to send message to. Can be an encoded ID, or a name. See [below](#channels) for more details.
     *    "link_names"?: bool, //Find and link channel names and usernames.
     *    "parse"?: string, //Change how messages are treated. Defaults to `none`. See [chat.postMessage](chat.postMessage#formatting).
     *    "post_at"?: int, //Unix EPOCH timestamp of time in future to send the message.
     *    "reply_broadcast"?: bool, //Used in conjunction with `thread_ts` and indicates whether reply should be made visible to everyone in the channel or conversation. Defaults to `false`.
     *    "text"?: string, //How this field works and whether it is required depends on other fields you use in your API call. [See below](#text_usage) for more detail.
     *    "thread_ts"?: string, //Provide another message's `ts` value to make this message a reply. Avoid using a reply's `ts` value; use its parent instead.
     *    "unfurl_links"?: bool, //Pass true to enable unfurling of primarily text-based content.
     *    "unfurl_media"?: bool, //Pass false to disable unfurling of media content.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `chat:write`
     * } $headerParameters
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
        return '/chat.scheduleMessage';
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
        $optionsResolver->setDefined(['as_user', 'attachments', 'blocks', 'channel', 'link_names', 'parse', 'post_at', 'reply_broadcast', 'text', 'thread_ts', 'unfurl_links', 'unfurl_media']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('as_user', ['bool']);
        $optionsResolver->addAllowedTypes('attachments', ['string']);
        $optionsResolver->addAllowedTypes('blocks', ['string']);
        $optionsResolver->addAllowedTypes('channel', ['string']);
        $optionsResolver->addAllowedTypes('link_names', ['bool']);
        $optionsResolver->addAllowedTypes('parse', ['string']);
        $optionsResolver->addAllowedTypes('post_at', ['int']);
        $optionsResolver->addAllowedTypes('reply_broadcast', ['bool']);
        $optionsResolver->addAllowedTypes('text', ['string']);
        $optionsResolver->addAllowedTypes('thread_ts', ['string']);
        $optionsResolver->addAllowedTypes('unfurl_links', ['bool']);
        $optionsResolver->addAllowedTypes('unfurl_media', ['bool']);

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
     * @return \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200|\JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponsedefault
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponsedefault', 'json');
    }
}
