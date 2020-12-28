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

class FilesRemoteUpdate extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    use \JoliCode\Slack\Api\Runtime\Client\EndpointTrait;

    /**
     * Updates an existing remote file.
     *
     * @param array $formParameters {
     *
     *     @var string $external_id creator defined GUID for the file
     *     @var string $external_url URL of the remote file
     *     @var string $file specify a file by providing its ID
     *     @var string $filetype type of file
     *     @var string $indexable_file_contents file containing contents that can be used to improve searchability for the remote file
     *     @var string $preview_image preview of the document via `multipart/form-data`
     *     @var string $title title of the file being shared
     *     @var string $token Authentication token. Requires scope: `remote_files:write`
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
        return '/files.remote.update';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
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

    protected function getFormOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getFormOptionsResolver();
        $optionsResolver->setDefined(['external_id', 'external_url', 'file', 'filetype', 'indexable_file_contents', 'preview_image', 'title', 'token']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('external_id', ['string']);
        $optionsResolver->setAllowedTypes('external_url', ['string']);
        $optionsResolver->setAllowedTypes('file', ['string']);
        $optionsResolver->setAllowedTypes('filetype', ['string']);
        $optionsResolver->setAllowedTypes('indexable_file_contents', ['string']);
        $optionsResolver->setAllowedTypes('preview_image', ['string']);
        $optionsResolver->setAllowedTypes('title', ['string']);
        $optionsResolver->setAllowedTypes('token', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \JoliCode\Slack\Api\Model\FilesRemoteUpdatePostResponse200|\JoliCode\Slack\Api\Model\FilesRemoteUpdatePostResponsedefault|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\FilesRemoteUpdatePostResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\FilesRemoteUpdatePostResponsedefault', 'json');
    }
}
