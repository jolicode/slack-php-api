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

class AdminEmojiAddAlias extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    use \JoliCode\Slack\Api\Runtime\Client\EndpointTrait;

    /**
     * Add an emoji alias.
     *
     * @param array $formParameters {
     *
     *     @var string $alias_for the alias of the emoji
     *     @var string $name The name of the emoji to be aliased. Colons (`:myemoji:`) around the value are not required, although they may be included.
     *     @var string $token Authentication token. Requires scope: `admin.teams:write`
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
        return '/admin.emoji.addAlias';
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
        $optionsResolver->setDefined(['alias_for', 'name', 'token']);
        $optionsResolver->setRequired(['alias_for', 'name']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('alias_for', ['string']);
        $optionsResolver->setAllowedTypes('name', ['string']);
        $optionsResolver->setAllowedTypes('token', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \JoliCode\Slack\Api\Model\AdminEmojiAddAliasPostResponse200|\JoliCode\Slack\Api\Model\AdminEmojiAddAliasPostResponsedefault|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AdminEmojiAddAliasPostResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AdminEmojiAddAliasPostResponsedefault', 'json');
    }
}
