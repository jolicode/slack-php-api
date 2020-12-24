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

class ViewsPublish extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    use \JoliCode\Slack\Api\Runtime\Client\EndpointTrait;

    /**
     * Publish a static view for a User.
     *
     * @param array $queryParameters {
     *
     *     @var string $hash a string that represents view state to protect against possible race conditions
     *     @var string $user_id `id` of the user you want publish a view to
     *     @var string $view A [view payload](/reference/surfaces/views). This must be a JSON-encoded string.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `none`
     * }
     */
    public function __construct(array $queryParameters = [], array $headerParameters = [])
    {
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/views.publish';
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
        $optionsResolver->setDefined(['hash', 'user_id', 'view']);
        $optionsResolver->setRequired(['user_id', 'view']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('hash', ['string']);
        $optionsResolver->setAllowedTypes('user_id', ['string']);
        $optionsResolver->setAllowedTypes('view', ['string']);

        return $optionsResolver;
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['token']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('token', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \JoliCode\Slack\Api\Model\ViewsPublishGetResponse200|\JoliCode\Slack\Api\Model\ViewsPublishGetResponsedefault|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\ViewsPublishGetResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\ViewsPublishGetResponsedefault', 'json');
    }
}
