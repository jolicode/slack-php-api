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

class CallsAdd extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    use \JoliCode\Slack\Api\Runtime\Client\EndpointTrait;

    /**
     * Registers a new Call.
     *
     * @param array{
     *    "created_by"?: string, //The valid Slack user ID of the user who created this Call. When this method is called with a user token, the `created_by` field is optional and defaults to the authed user of the token. Otherwise, the field is required.
     *    "date_start"?: int, //Call start time in UTC UNIX timestamp format
     *    "desktop_app_join_url"?: string, //When supplied, available Slack clients will attempt to directly launch the 3rd-party Call with this URL.
     *    "external_display_id"?: string, //An optional, human-readable ID supplied by the 3rd-party Call provider. If supplied, this ID will be displayed in the Call object.
     *    "external_unique_id": string, //An ID supplied by the 3rd-party Call provider. It must be unique across all Calls from that service.
     *    "join_url": string, //The URL required for a client to join the Call.
     *    "title"?: string, //The name of the Call.
     *    "users"?: string, //The list of users to register as participants in the Call. [Read more on how to specify users here](/apis/calls#users).
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `calls:write`
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
        return '/calls.add';
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
        $optionsResolver->setDefined(['created_by', 'date_start', 'desktop_app_join_url', 'external_display_id', 'external_unique_id', 'join_url', 'title', 'users']);
        $optionsResolver->setRequired(['external_unique_id', 'join_url']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('created_by', ['string']);
        $optionsResolver->addAllowedTypes('date_start', ['int']);
        $optionsResolver->addAllowedTypes('desktop_app_join_url', ['string']);
        $optionsResolver->addAllowedTypes('external_display_id', ['string']);
        $optionsResolver->addAllowedTypes('external_unique_id', ['string']);
        $optionsResolver->addAllowedTypes('join_url', ['string']);
        $optionsResolver->addAllowedTypes('title', ['string']);
        $optionsResolver->addAllowedTypes('users', ['string']);

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
     * @return \JoliCode\Slack\Api\Model\CallsAddPostResponse200|\JoliCode\Slack\Api\Model\CallsAddPostResponsedefault
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\CallsAddPostResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\CallsAddPostResponsedefault', 'json');
    }
}
