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

class AppsPermissionsUsersRequest extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    use \JoliCode\Slack\Api\Runtime\Client\EndpointTrait;

    /**
     * Enables an app to trigger a permissions modal to grant an app access to a user access scope.
     *
     * @param array $queryParameters {
     *
     *     @var string $scopes A comma separated list of user scopes to request for
     *     @var string $token Authentication token. Requires scope: `none`
     *     @var string $trigger_id Token used to trigger the request
     *     @var string $user The user this scope is being requested for
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
        return '/apps.permissions.users.request';
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
        $optionsResolver->setDefined(['scopes', 'token', 'trigger_id', 'user']);
        $optionsResolver->setRequired(['scopes', 'trigger_id', 'user']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('scopes', ['string']);
        $optionsResolver->setAllowedTypes('token', ['string']);
        $optionsResolver->setAllowedTypes('trigger_id', ['string']);
        $optionsResolver->setAllowedTypes('user', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \JoliCode\Slack\Api\Model\AppsPermissionsUsersRequestGetResponse200|\JoliCode\Slack\Api\Model\AppsPermissionsUsersRequestGetResponsedefault|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsUsersRequestGetResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AppsPermissionsUsersRequestGetResponsedefault', 'json');
    }
}
