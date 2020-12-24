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
     * @param array $formParameters {
     *
     *     @var bool $as_user Pass true to post the message as the authed user, instead of as a bot. Defaults to false. See [chat.postMessage](chat.postMessage#authorship).
     *     @var string $attachments a JSON-based array of structured attachments, presented as a URL-encoded string
     *     @var string $blocks a JSON-based array of structured blocks, presented as a URL-encoded string
     *     @var string $channel Channel, private group, or DM channel to send message to. Can be an encoded ID, or a name. See [below](#channels) for more details.
     *     @var bool $link_names find and link channel names and usernames
     *     @var string $parse Change how messages are treated. Defaults to `none`. See [chat.postMessage](chat.postMessage#formatting).
     *     @var int $post_at unix EPOCH timestamp of time in future to send the message
     *     @var bool $reply_broadcast Used in conjunction with `thread_ts` and indicates whether reply should be made visible to everyone in the channel or conversation. Defaults to `false`.
     *     @var string $text How this field works and whether it is required depends on other fields you use in your API call. [See below](#text_usage) for more detail.
     *     @var string $thread_ts Provide another message's `ts` value to make this message a reply. Avoid using a reply's `ts` value; use its parent instead.
     *     @var bool $unfurl_links pass true to enable unfurling of primarily text-based content
     *     @var bool $unfurl_media Pass false to disable unfurling of media content.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `chat:write`
     * }
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
        $optionsResolver->setDefined(['as_user', 'attachments', 'blocks', 'channel', 'link_names', 'parse', 'post_at', 'reply_broadcast', 'text', 'thread_ts', 'unfurl_links', 'unfurl_media']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('as_user', ['bool']);
        $optionsResolver->setAllowedTypes('attachments', ['string']);
        $optionsResolver->setAllowedTypes('blocks', ['string']);
        $optionsResolver->setAllowedTypes('channel', ['string']);
        $optionsResolver->setAllowedTypes('link_names', ['bool']);
        $optionsResolver->setAllowedTypes('parse', ['string']);
        $optionsResolver->setAllowedTypes('post_at', ['int']);
        $optionsResolver->setAllowedTypes('reply_broadcast', ['bool']);
        $optionsResolver->setAllowedTypes('text', ['string']);
        $optionsResolver->setAllowedTypes('thread_ts', ['string']);
        $optionsResolver->setAllowedTypes('unfurl_links', ['bool']);
        $optionsResolver->setAllowedTypes('unfurl_media', ['bool']);

        return $optionsResolver;
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['token']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('token', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200|\JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponsedefault|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\ChatScheduleMessagePostResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\ChatScheduleMessagePostResponsedefault', 'json');
    }
}
