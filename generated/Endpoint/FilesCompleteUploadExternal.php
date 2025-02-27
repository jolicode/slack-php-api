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

class FilesCompleteUploadExternal extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    use \JoliCode\Slack\Api\Runtime\Client\EndpointTrait;

    /**
     * Finishes an upload started with files.getUploadURLExternal.
     *
     * @param array $queryParameters {
     *
     * @var string $channel_id Channel ID where the file will be shared. If not specified the file will be private.
     * @var string $channels comma-separated string of channel IDs where the file will be shared
     * @var array  $files array of file ids and their corresponding (optional) titles
     * @var string $initial_comment the message text introducing the file in specified channels
     * @var string $thread_ts Provide another message's ts value to upload this file as a reply. Never use a reply's ts value; use its parent instead. Also make sure to provide only one channel when using 'thread_ts'
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $token Authentication token. Requires scope: `files:write:user`
     *             }
     */
    public function __construct(array $queryParameters = [], array $headerParameters = [])
    {
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/files.completeUploadExternal';
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
        $optionsResolver->setDefined(['channel_id', 'channels', 'files', 'initial_comment', 'thread_ts']);
        $optionsResolver->setRequired(['files']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('channel_id', ['string']);
        $optionsResolver->addAllowedTypes('channels', ['string']);
        $optionsResolver->addAllowedTypes('files', ['array']);
        $optionsResolver->addAllowedTypes('initial_comment', ['string']);
        $optionsResolver->addAllowedTypes('thread_ts', ['string']);

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
     * @return \JoliCode\Slack\Api\Model\FilesCompleteUploadExternalPostResponse200|\JoliCode\Slack\Api\Model\FilesCompleteUploadExternalPostResponsedefault|null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\FilesCompleteUploadExternalPostResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\FilesCompleteUploadExternalPostResponsedefault', 'json');
    }
}
