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
     * @param array{
     *    "external_id"?: string, //Creator defined GUID for the file.
     *    "external_url"?: string, //URL of the remote file.
     *    "file"?: string, //Specify a file by providing its ID.
     *    "filetype"?: string, //type of file
     *    "indexable_file_contents"?: string, //File containing contents that can be used to improve searchability for the remote file.
     *    "preview_image"?: string, //Preview of the document via `multipart/form-data`.
     *    "title"?: string, //Title of the file being shared.
     *    "token"?: string, //Authentication token. Requires scope: `remote_files:write`
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
        return '/files.remote.update';
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

    protected function getFormOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getFormOptionsResolver();
        $optionsResolver->setDefined(['external_id', 'external_url', 'file', 'filetype', 'indexable_file_contents', 'preview_image', 'title', 'token']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('external_id', ['string']);
        $optionsResolver->addAllowedTypes('external_url', ['string']);
        $optionsResolver->addAllowedTypes('file', ['string']);
        $optionsResolver->addAllowedTypes('filetype', ['string']);
        $optionsResolver->addAllowedTypes('indexable_file_contents', ['string']);
        $optionsResolver->addAllowedTypes('preview_image', ['string']);
        $optionsResolver->addAllowedTypes('title', ['string']);
        $optionsResolver->addAllowedTypes('token', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \JoliCode\Slack\Api\Model\FilesRemoteUpdatePostResponse200|\JoliCode\Slack\Api\Model\FilesRemoteUpdatePostResponsedefault
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\FilesRemoteUpdatePostResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\FilesRemoteUpdatePostResponsedefault', 'json');
    }
}
