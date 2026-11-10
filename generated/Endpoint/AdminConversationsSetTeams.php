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
     * @param array{
     *    "channel_id": string, //The encoded `channel_id` to add or remove to workspaces.
     *    "org_channel"?: bool, //True if channel has to be converted to an org channel
     *    "target_team_ids"?: string, //A comma-separated list of workspaces to which the channel should be shared. Not required if the channel is being shared org-wide.
     *    "team_id"?: string, //The workspace to which the channel belongs. Omit this argument if the channel is a cross-workspace shared channel.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.conversations:write`
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
        return '/admin.conversations.setTeams';
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
        $optionsResolver->setDefined(['channel_id', 'org_channel', 'target_team_ids', 'team_id']);
        $optionsResolver->setRequired(['channel_id']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('channel_id', ['string']);
        $optionsResolver->addAllowedTypes('org_channel', ['bool']);
        $optionsResolver->addAllowedTypes('target_team_ids', ['string']);
        $optionsResolver->addAllowedTypes('team_id', ['string']);

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
     * @return \JoliCode\Slack\Api\Model\AdminConversationsSetTeamsPostResponse200|\JoliCode\Slack\Api\Model\AdminConversationsSetTeamsPostResponsedefault
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\AdminConversationsSetTeamsPostResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\AdminConversationsSetTeamsPostResponsedefault', 'json');
    }
}
