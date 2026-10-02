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
     * @param array{
     *    "blocks"?: string, //A JSON-based array of structured rich text blocks, presented as a URL-encoded string. If the `initial_comment` field is provided, the `blocks` field is ignored.
     *    "channel_id"?: string, //Channel ID where the file will be shared. If not specified, the file will remain private.
     *    "channels"?: string, //Comma-separated list of channel IDs where the file will be shared.
     *    "files": string, //An array of file objects, each containing the `id` of the file to be completed.
     *    "initial_comment"?: string, //The message text introducing the file in specified channels.
     *    "thread_ts"?: string, //Provide another message's `ts` value to upload this file as a reply. Never use a reply's `ts` value; use its parent instead. Also, make sure to provide only one channel when using `thread_ts`.
     * } $queryParameters
     * @param array{
     *    "token"?: string, //Authentication token bearing required scopes. Tokens should be passed as an HTTP Authorization header or alternatively, as a POST parameter.
     * } $formParameters
     */
    public function __construct(array $queryParameters, array $formParameters = [])
    {
        $this->queryParameters = $queryParameters;
        $this->formParameters = $formParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/files.completeUploadExternal';
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

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['blocks', 'channel_id', 'channels', 'files', 'initial_comment', 'thread_ts']);
        $optionsResolver->setRequired(['files']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('blocks', ['string']);
        $optionsResolver->addAllowedTypes('channel_id', ['string']);
        $optionsResolver->addAllowedTypes('channels', ['string']);
        $optionsResolver->addAllowedTypes('files', ['string']);
        $optionsResolver->addAllowedTypes('initial_comment', ['string']);
        $optionsResolver->addAllowedTypes('thread_ts', ['string']);

        return $optionsResolver;
    }

    protected function getFormOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getFormOptionsResolver();
        $optionsResolver->setDefined(['token']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('token', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \JoliCode\Slack\Api\Model\FilesCompleteUploadExternalPostResponse200|\JoliCode\Slack\Api\Model\FilesCompleteUploadExternalPostResponsedefault
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\FilesCompleteUploadExternalPostResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\FilesCompleteUploadExternalPostResponsedefault', 'json');
    }
}
