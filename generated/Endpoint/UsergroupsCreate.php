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

class UsergroupsCreate extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    use \JoliCode\Slack\Api\Runtime\Client\EndpointTrait;

    /**
     * Create a User Group.
     *
     * @param array{
     *    "channels"?: string, //A comma separated string of encoded channel IDs for which the User Group uses as a default.
     *    "description"?: string, //A short description of the User Group.
     *    "handle"?: string, //A mention handle. Must be unique among channels, users and User Groups.
     *    "include_count"?: bool, //Include the number of users in each User Group.
     *    "name": string, //A name for the User Group. Must be unique among User Groups.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `usergroups:write`
     * } $headerParameters
     */
    public function __construct(array $formParameters, array $headerParameters = [])
    {
        $this->formParameters = $formParameters;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/usergroups.create';
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
        $optionsResolver->setDefined(['channels', 'description', 'handle', 'include_count', 'name']);
        $optionsResolver->setRequired(['name']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('channels', ['string']);
        $optionsResolver->addAllowedTypes('description', ['string']);
        $optionsResolver->addAllowedTypes('handle', ['string']);
        $optionsResolver->addAllowedTypes('include_count', ['bool']);
        $optionsResolver->addAllowedTypes('name', ['string']);

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
     * @return \JoliCode\Slack\Api\Model\UsergroupsCreatePostResponse200|\JoliCode\Slack\Api\Model\UsergroupsCreatePostResponsedefault
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\UsergroupsCreatePostResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\Slack\Api\Model\UsergroupsCreatePostResponsedefault', 'json');
    }
}
