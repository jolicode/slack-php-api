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
     * @param array $formParameters {
     *
     *     @var string $channels comma-separated list of channel names or IDs where the file will be shared
     *     @var string $content File contents via a POST variable. If omitting this parameter, you must provide a `file`.
     *     @var string|resource|\Psr\Http\Message\StreamInterface $file File contents via `multipart/form-data`. If omitting this parameter, you must submit `content`.
     *     @var string $filename filename of file
     *     @var string $filetype a [file type](/types/file#file_types) identifier
     *     @var string $initial_comment the message text introducing the file in specified `channels`
     *     @var string $thread_ts Provide another message's `ts` value to upload this file as a reply. Never use a reply's `ts` value; use its parent instead.
     *     @var string $title title of file
     *     @var string $token Authentication token. Requires scope: `files:write:user`
     * }
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

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getMultipartBody($streamFactory);
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
        $optionsResolver->setDefined(['channels', 'content', 'file', 'filename', 'filetype', 'initial_comment', 'thread_ts', 'title', 'token']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('channels', ['string']);
        $optionsResolver->setAllowedTypes('content', ['string']);
        $optionsResolver->setAllowedTypes('file', ['string', 'resource', '\\Psr\\Http\\Message\\StreamInterface']);
        $optionsResolver->setAllowedTypes('filename', ['string']);
        $optionsResolver->setAllowedTypes('filetype', ['string']);
        $optionsResolver->setAllowedTypes('initial_comment', ['string']);
        $optionsResolver->setAllowedTypes('thread_ts', ['string']);
        $optionsResolver->setAllowedTypes('title', ['string']);
        $optionsResolver->setAllowedTypes('token', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \JoliCode\Slack\Api\Model\FilesUploadPostResponse200|\JoliCode\Slack\Api\Model\FilesUploadPostResponsedefault|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\FilesUploadPostResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\FilesUploadPostResponsedefault', 'json');
    }
}
