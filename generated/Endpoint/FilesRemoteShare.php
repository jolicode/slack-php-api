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

class FilesRemoteShare extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    use \JoliCode\Slack\Api\Runtime\Client\EndpointTrait;

    /**
     * Share a remote file into a channel.
     *
     * @param array{
     *    "channels"?: string, //Comma-separated list of channel IDs where the file will be shared.
     *    "external_id"?: string, //The globally unique identifier (GUID) for the file, as set by the app registering the file with Slack.  Either this field or `file` or both are required.
     *    "file"?: string, //Specify a file registered with Slack by providing its ID. Either this field or `external_id` or both are required.
     *    "token"?: string, //Authentication token. Requires scope: `remote_files:share`
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
        return '/files.remote.share';
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
        $optionsResolver->setDefined(['channels', 'external_id', 'file', 'token']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('channels', ['string']);
        $optionsResolver->addAllowedTypes('external_id', ['string']);
        $optionsResolver->addAllowedTypes('file', ['string']);
        $optionsResolver->addAllowedTypes('token', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \JoliCode\Slack\Api\Model\FilesRemoteShareGetResponse200|\JoliCode\Slack\Api\Model\FilesRemoteShareGetResponsedefault
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\FilesRemoteShareGetResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\FilesRemoteShareGetResponsedefault', 'json');
    }
}
