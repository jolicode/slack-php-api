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

class AdminConversationsSetTeams extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    use \JoliCode\Slack\Api\Runtime\Client\EndpointTrait;

    /**
     * Set the workspaces in an Enterprise grid org that connect to a public or private channel.
     *
     * @param array $formParameters {
     *
     *     @var string $channel_id the encoded `channel_id` to add or remove to workspaces
     *     @var bool $org_channel True if channel has to be converted to an org channel
     *     @var string $target_team_ids A comma-separated list of workspaces to which the channel should be shared. Not required if the channel is being shared org-wide.
     *     @var string $team_id The workspace to which the channel belongs. Omit this argument if the channel is a cross-workspace shared channel.
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
        return '/admin.conversations.setTeams';
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
        $optionsResolver->setDefined(['channel_id', 'org_channel', 'target_team_ids', 'team_id']);
        $optionsResolver->setRequired(['channel_id']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('channel_id', ['string']);
        $optionsResolver->setAllowedTypes('org_channel', ['bool']);
        $optionsResolver->setAllowedTypes('target_team_ids', ['string']);
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
     * @return \JoliCode\Slack\Api\Model\AdminConversationsSetTeamsPostResponse200|\JoliCode\Slack\Api\Model\AdminConversationsSetTeamsPostResponsedefault|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AdminConversationsSetTeamsPostResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AdminConversationsSetTeamsPostResponsedefault', 'json');
    }
}
