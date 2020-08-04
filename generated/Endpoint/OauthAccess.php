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

class OauthAccess extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    /**
     * Exchanges a temporary OAuth verifier code for an access token.
     *
     * @param array $queryParameters {
     *
     *     @var string $code the `code` param returned via the OAuth callback
     *     @var string $token Authentication token. Requires scope: `none`
     *     @var string $redirect_uri this must match the originally submitted URI (if one was sent)
     *     @var bool $single_channel Request the user to add your app only to a single channel. Only valid with a [legacy workspace app](https://api.slack.com/legacy-workspace-apps).
     *     @var string $client_id issued when you created your application
     *     @var string $client_secret Issued when you created your application.
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/oauth.access';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['code', 'token', 'redirect_uri', 'single_channel', 'client_id', 'client_secret']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('code', ['string']);
        $optionsResolver->setAllowedTypes('token', ['string']);
        $optionsResolver->setAllowedTypes('redirect_uri', ['string']);
        $optionsResolver->setAllowedTypes('single_channel', ['bool']);
        $optionsResolver->setAllowedTypes('client_id', ['string']);
        $optionsResolver->setAllowedTypes('client_secret', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \JoliCode\Slack\Api\Model\OauthAccessGetResponse200|\JoliCode\Slack\Api\Model\OauthAccessGetResponsedefault|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\OauthAccessGetResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\OauthAccessGetResponsedefault', 'json');
    }
}
