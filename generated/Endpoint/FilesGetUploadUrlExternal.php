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

class FilesGetUploadUrlExternal extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    use \JoliCode\Slack\Api\Runtime\Client\EndpointTrait;

    /**
     * Gets a URL for an edge external file upload.
     *
     * @param array $queryParameters {
     *
     * @var string $alt_txt description of image for screen-reader
     * @var string $filename name of the file being uploaded
     * @var int    $length size in bytes of the file being uploaded
     * @var string $snippet_type Syntax type of the snippet being uploaded.
     *             }
     *
     * @param array $formParameters {
     *
     * @var string $token Authentication token. Requires scope: `files:write`
     *             }
     */
    public function __construct(array $queryParameters = [], array $formParameters = [])
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
        return '/files.getUploadURLExternal';
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

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['alt_txt', 'filename', 'length', 'snippet_type']);
        $optionsResolver->setRequired(['filename', 'length']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('alt_txt', ['string']);
        $optionsResolver->addAllowedTypes('filename', ['string']);
        $optionsResolver->addAllowedTypes('length', ['int']);
        $optionsResolver->addAllowedTypes('snippet_type', ['string']);

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
     * @return \JoliCode\Slack\Api\Model\FilesGetUploadURLExternalPostResponse200|\JoliCode\Slack\Api\Model\FilesGetUploadURLExternalPostResponsedefault|null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\FilesGetUploadURLExternalPostResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\FilesGetUploadURLExternalPostResponsedefault', 'json');
    }
}
