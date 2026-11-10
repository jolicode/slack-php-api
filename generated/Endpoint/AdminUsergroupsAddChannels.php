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

class AdminUsergroupsAddChannels extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    use \JoliCode\Slack\Api\Runtime\Client\EndpointTrait;

    /**
     * Add one or more default channels to an IDP group.
     *
     * @param array{
     *    "channel_ids": string, //Comma separated string of channel IDs.
     *    "team_id"?: string, //The workspace to add default channels in.
     *    "usergroup_id": string, //ID of the IDP group to add default channels for.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.usergroups:write`
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
        return '/admin.usergroups.addChannels';
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
        $optionsResolver->setDefined(['channel_ids', 'team_id', 'usergroup_id']);
        $optionsResolver->setRequired(['channel_ids', 'usergroup_id']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('channel_ids', ['string']);
        $optionsResolver->addAllowedTypes('team_id', ['string']);
        $optionsResolver->addAllowedTypes('usergroup_id', ['string']);

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
     * @return \JoliCode\Slack\Api\Model\AdminUsergroupsAddChannelsPostResponse200|\JoliCode\Slack\Api\Model\AdminUsergroupsAddChannelsPostResponsedefault
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\AdminUsergroupsAddChannelsPostResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\AdminUsergroupsAddChannelsPostResponsedefault', 'json');
    }
}
