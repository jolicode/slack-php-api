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

class AdminConversationsCreate extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    use \JoliCode\Slack\Api\Runtime\Client\EndpointTrait;

    /**
     * Create a public or private channel-based conversation.
     *
     * @param array $formParameters {
     *
     *     @var string $description description of the public or private channel to create
     *     @var bool $is_private When `true`, creates a private channel instead of a public channel
     *     @var string $name name of the public or private channel to create
     *     @var bool $org_wide When `true`, the channel will be available org-wide. Note: if the channel is not `org_wide=true`, you must specify a `team_id` for this channel
     *     @var string $team_id The workspace to create the channel in. Note: this argument is required unless you set `org_wide=true`.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.conversations:write`
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
        return '/admin.conversations.create';
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
        $optionsResolver->setDefined(['description', 'is_private', 'name', 'org_wide', 'team_id']);
        $optionsResolver->setRequired(['is_private', 'name']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('description', ['string']);
        $optionsResolver->setAllowedTypes('is_private', ['bool']);
        $optionsResolver->setAllowedTypes('name', ['string']);
        $optionsResolver->setAllowedTypes('org_wide', ['bool']);
        $optionsResolver->setAllowedTypes('team_id', ['string']);

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
     * @return \JoliCode\Slack\Api\Model\AdminConversationsCreatePostResponse200|\JoliCode\Slack\Api\Model\AdminConversationsCreatePostResponsedefault|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AdminConversationsCreatePostResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AdminConversationsCreatePostResponsedefault', 'json');
    }
}
