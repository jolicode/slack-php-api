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
     * @param array $formParameters {
     *
     *     @var string $created_by The valid Slack user ID of the user who created this Call. When this method is called with a user token, the `created_by` field is optional and defaults to the authed user of the token. Otherwise, the field is required.
     *     @var int $date_start Call start time in UTC UNIX timestamp format
     *     @var string $desktop_app_join_url when supplied, available Slack clients will attempt to directly launch the 3rd-party Call with this URL
     *     @var string $external_display_id An optional, human-readable ID supplied by the 3rd-party Call provider. If supplied, this ID will be displayed in the Call object.
     *     @var string $external_unique_id An ID supplied by the 3rd-party Call provider. It must be unique across all Calls from that service.
     *     @var string $join_url the URL required for a client to join the Call
     *     @var string $title the name of the Call
     *     @var string $users The list of users to register as participants in the Call. [Read more on how to specify users here](/apis/calls#users).
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `calls:write`
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
        return '/calls.add';
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
        $optionsResolver->setDefined(['created_by', 'date_start', 'desktop_app_join_url', 'external_display_id', 'external_unique_id', 'join_url', 'title', 'users']);
        $optionsResolver->setRequired(['external_unique_id', 'join_url']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('created_by', ['string']);
        $optionsResolver->setAllowedTypes('date_start', ['int']);
        $optionsResolver->setAllowedTypes('desktop_app_join_url', ['string']);
        $optionsResolver->setAllowedTypes('external_display_id', ['string']);
        $optionsResolver->setAllowedTypes('external_unique_id', ['string']);
        $optionsResolver->setAllowedTypes('join_url', ['string']);
        $optionsResolver->setAllowedTypes('title', ['string']);
        $optionsResolver->setAllowedTypes('users', ['string']);

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
     * @return \JoliCode\Slack\Api\Model\CallsAddPostResponse200|\JoliCode\Slack\Api\Model\CallsAddPostResponsedefault|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\CallsAddPostResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\CallsAddPostResponsedefault', 'json');
    }
}
