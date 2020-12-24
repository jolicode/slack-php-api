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

class FilesList extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    use \JoliCode\Slack\Api\Runtime\Client\EndpointTrait;

    /**
     * List for a team, in a channel, or from a user with applied filters.
     *
     * @param array $queryParameters {
     *
     *     @var string $channel filter files appearing in a specific channel, indicated by its ID
     *     @var string $count
     *     @var string $page
     *     @var bool $show_files_hidden_by_limit show truncated file info for files hidden due to being too old, and the team who owns the file being over the file limit
     *     @var string $token Authentication token. Requires scope: `files:read`
     *     @var string $ts_from filter files created after this timestamp (inclusive)
     *     @var string $ts_to filter files created before this timestamp (inclusive)
     *     @var string $types Filter files by type ([see below](#file_types)). You can pass multiple values in the types argument, like `types=spaces,snippets`.The default value is `all`, which does not filter the list.
     *     @var string $user Filter files created by a single user.
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
        return '/files.list';
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
        $optionsResolver->setDefined(['channel', 'count', 'page', 'show_files_hidden_by_limit', 'token', 'ts_from', 'ts_to', 'types', 'user']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('channel', ['string']);
        $optionsResolver->setAllowedTypes('count', ['string']);
        $optionsResolver->setAllowedTypes('page', ['string']);
        $optionsResolver->setAllowedTypes('show_files_hidden_by_limit', ['bool']);
        $optionsResolver->setAllowedTypes('token', ['string']);
        $optionsResolver->setAllowedTypes('ts_from', ['string']);
        $optionsResolver->setAllowedTypes('ts_to', ['string']);
        $optionsResolver->setAllowedTypes('types', ['string']);
        $optionsResolver->setAllowedTypes('user', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \JoliCode\Slack\Api\Model\FilesListGetResponse200|\JoliCode\Slack\Api\Model\FilesListGetResponsedefault|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\FilesListGetResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\FilesListGetResponsedefault', 'json');
    }
}
