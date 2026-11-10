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
     * @param array{
     *    "channel"?: string, //Filter files appearing in a specific channel, indicated by its ID.
     *    "count"?: string,
     *    "page"?: string,
     *    "show_files_hidden_by_limit"?: bool, //Show truncated file info for files hidden due to being too old, and the team who owns the file being over the file limit.
     *    "token"?: string, //Authentication token. Requires scope: `files:read`
     *    "ts_from"?: string, //Filter files created after this timestamp (inclusive).
     *    "ts_to"?: string, //Filter files created before this timestamp (inclusive).
     *    "types"?: string, //Filter files by type ([see below](#file_types)). You can pass multiple values in the types argument, like `types=spaces,snippets`.The default value is `all`, which does not filter the list.
     *    "user"?: string, //Filter files created by a single user.
     * } $queryParameters
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

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
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

    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Preload->value;
    }

    public function getTargetClass(): ?string
    {
        return null;
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['channel', 'count', 'page', 'show_files_hidden_by_limit', 'token', 'ts_from', 'ts_to', 'types', 'user']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('channel', ['string']);
        $optionsResolver->addAllowedTypes('count', ['string']);
        $optionsResolver->addAllowedTypes('page', ['string']);
        $optionsResolver->addAllowedTypes('show_files_hidden_by_limit', ['bool']);
        $optionsResolver->addAllowedTypes('token', ['string']);
        $optionsResolver->addAllowedTypes('ts_from', ['string']);
        $optionsResolver->addAllowedTypes('ts_to', ['string']);
        $optionsResolver->addAllowedTypes('types', ['string']);
        $optionsResolver->addAllowedTypes('user', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \JoliCode\Slack\Api\Model\FilesListGetResponse200|\JoliCode\Slack\Api\Model\FilesListGetResponsedefault
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\FilesListGetResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\FilesListGetResponsedefault', 'json');
    }
}
