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

class FilesUpload extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    use \JoliCode\Slack\Api\Runtime\Client\EndpointTrait;

    /**
     * Uploads or creates a file.
     *
     * @param array{
     *    "channels"?: string, //Comma-separated list of channel names or IDs where the file will be shared.
     *    "content"?: string, //File contents via a POST variable. If omitting this parameter, you must provide a `file`.
     *    "file"?: string|resource, //File contents via `multipart/form-data`. If omitting this parameter, you must submit `content`.
     *    "filename"?: string, //Filename of file.
     *    "filetype"?: string, //A [file type](/types/file#file_types) identifier.
     *    "initial_comment"?: string, //The message text introducing the file in specified `channels`.
     *    "thread_ts"?: string, //Provide another message's `ts` value to upload this file as a reply. Never use a reply's `ts` value; use its parent instead.
     *    "title"?: string, //Title of file.
     *    "token"?: string, //Authentication token. Requires scope: `files:write:user`
     * } $formParameters
     */
    public function __construct(array $formParameters = [])
    {
        $this->formParameters = $formParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/files.upload';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return $this->getMultipartBody();
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
        $optionsResolver->setDefined(['channels', 'content', 'file', 'filename', 'filetype', 'initial_comment', 'thread_ts', 'title', 'token']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('channels', ['string']);
        $optionsResolver->addAllowedTypes('content', ['string']);
        $optionsResolver->addAllowedTypes('file', ['string', 'resource']);
        $optionsResolver->addAllowedTypes('filename', ['string']);
        $optionsResolver->addAllowedTypes('filetype', ['string']);
        $optionsResolver->addAllowedTypes('initial_comment', ['string']);
        $optionsResolver->addAllowedTypes('thread_ts', ['string']);
        $optionsResolver->addAllowedTypes('title', ['string']);
        $optionsResolver->addAllowedTypes('token', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \JoliCode\Slack\Api\Model\FilesUploadPostResponse200|\JoliCode\Slack\Api\Model\FilesUploadPostResponsedefault
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\FilesUploadPostResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\FilesUploadPostResponsedefault', 'json');
    }
}
