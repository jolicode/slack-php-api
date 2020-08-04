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

class AdminAppsRequestsList extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    /**
     * List app requests for a team/workspace.
     *
     * @param array $queryParameters {
     *
     *     @var string $cursor Set `cursor` to `next_cursor` returned by the previous call to list items in the next page
     *     @var string $token Authentication token. Requires scope: `admin.apps:read`
     *     @var int $limit The maximum number of items to return. Must be between 1 - 1000 both inclusive.
     *     @var string $team_id
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
        return '/admin.apps.requests.list';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['cursor', 'token', 'limit', 'team_id']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('cursor', ['string']);
        $optionsResolver->setAllowedTypes('token', ['string']);
        $optionsResolver->setAllowedTypes('limit', ['int']);
        $optionsResolver->setAllowedTypes('team_id', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \JoliCode\Slack\Api\Model\AdminAppsRequestsListGetResponse200|\JoliCode\Slack\Api\Model\AdminAppsRequestsListGetResponsedefault|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AdminAppsRequestsListGetResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AdminAppsRequestsListGetResponsedefault', 'json');
    }
}
