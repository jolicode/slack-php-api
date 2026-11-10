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

class AppsPermissionsRequest extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    use \JoliCode\Slack\Api\Runtime\Client\EndpointTrait;

    /**
     * Allows an app to request additional scopes.
     *
     * @param array{
     *    "scopes": string, //A comma separated list of scopes to request for
     *    "token"?: string, //Authentication token. Requires scope: `none`
     *    "trigger_id": string, //Token used to trigger the permissions API
     * } $queryParameters
     */
    public function __construct(array $queryParameters)
    {
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/apps.permissions.request';
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
        $optionsResolver->setDefined(['scopes', 'token', 'trigger_id']);
        $optionsResolver->setRequired(['scopes', 'trigger_id']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('scopes', ['string']);
        $optionsResolver->addAllowedTypes('token', ['string']);
        $optionsResolver->addAllowedTypes('trigger_id', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \JoliCode\Slack\Api\Model\AppsPermissionsRequestGetResponse200|\JoliCode\Slack\Api\Model\AppsPermissionsRequestGetResponsedefault
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\AppsPermissionsRequestGetResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\AppsPermissionsRequestGetResponsedefault', 'json');
    }
}
