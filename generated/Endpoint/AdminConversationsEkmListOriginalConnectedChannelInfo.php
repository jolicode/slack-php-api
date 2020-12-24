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

class AdminConversationsEkmListOriginalConnectedChannelInfo extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    use \JoliCode\Slack\Api\Runtime\Client\EndpointTrait;

    /**
     * List all disconnected channels—i.e., channels that were once connected to other workspaces and then disconnected—and the corresponding original channel IDs for key revocation with EKM.
     *
     * @param array $queryParameters {
     *
     *     @var string $channel_ids a comma-separated list of channels to filter to
     *     @var string $cursor set `cursor` to `next_cursor` returned by the previous call to list items in the next page
     *     @var int $limit The maximum number of items to return. Must be between 1 - 1000 both inclusive.
     *     @var string $team_ids a comma-separated list of the workspaces to which the channels you would like returned belong
     *     @var string $token Authentication token. Requires scope: `admin.conversations:read`
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/admin.conversations.ekm.listOriginalConnectedChannelInfo';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
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

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['channel_ids', 'cursor', 'limit', 'team_ids', 'token']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('channel_ids', ['string']);
        $optionsResolver->setAllowedTypes('cursor', ['string']);
        $optionsResolver->setAllowedTypes('limit', ['int']);
        $optionsResolver->setAllowedTypes('team_ids', ['string']);
        $optionsResolver->setAllowedTypes('token', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \JoliCode\Slack\Api\Model\AdminConversationsEkmListOriginalConnectedChannelInfoGetResponse200|\JoliCode\Slack\Api\Model\AdminConversationsEkmListOriginalConnectedChannelInfoGetResponsedefault|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AdminConversationsEkmListOriginalConnectedChannelInfoGetResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AdminConversationsEkmListOriginalConnectedChannelInfoGetResponsedefault', 'json');
    }
}
