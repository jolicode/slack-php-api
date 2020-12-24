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

class MigrationExchange extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    use \JoliCode\Slack\Api\Runtime\Client\EndpointTrait;

    /**
     * For Enterprise Grid workspaces, map local user IDs to global user IDs.
     *
     * @param array $queryParameters {
     *
     *     @var string $team_id Specify team_id starts with `T` in case of Org Token
     *     @var bool $to_old Specify `true` to convert `W` global user IDs to workspace-specific `U` IDs. Defaults to `false`.
     *     @var string $token Authentication token. Requires scope: `tokens.basic`
     *     @var string $users A comma-separated list of user ids, up to 400 per request
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
        return '/migration.exchange';
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
        $optionsResolver->setDefined(['team_id', 'to_old', 'token', 'users']);
        $optionsResolver->setRequired(['users']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('team_id', ['string']);
        $optionsResolver->setAllowedTypes('to_old', ['bool']);
        $optionsResolver->setAllowedTypes('token', ['string']);
        $optionsResolver->setAllowedTypes('users', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \JoliCode\Slack\Api\Model\MigrationExchangeGetResponse200|\JoliCode\Slack\Api\Model\MigrationExchangeGetResponsedefault|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\MigrationExchangeGetResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\MigrationExchangeGetResponsedefault', 'json');
    }
}
