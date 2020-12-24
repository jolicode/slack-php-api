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

class UsersSetPhoto extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    use \JoliCode\Slack\Api\Runtime\Client\EndpointTrait;

    /**
     * Set the user profile photo.
     *
     * @param array $formParameters {
     *
     *     @var string $crop_w Width/height of crop box (always square)
     *     @var string $crop_x X coordinate of top-left corner of crop box
     *     @var string $crop_y Y coordinate of top-left corner of crop box
     *     @var string $image file contents via `multipart/form-data`
     *     @var string $token Authentication token. Requires scope: `users.profile:write`
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
        return '/users.setPhoto';
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
        $optionsResolver->setDefined(['crop_w', 'crop_x', 'crop_y', 'image', 'token']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('crop_w', ['string']);
        $optionsResolver->setAllowedTypes('crop_x', ['string']);
        $optionsResolver->setAllowedTypes('crop_y', ['string']);
        $optionsResolver->setAllowedTypes('image', ['string']);
        $optionsResolver->setAllowedTypes('token', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \JoliCode\Slack\Api\Model\UsersSetPhotoPostResponse200|\JoliCode\Slack\Api\Model\UsersSetPhotoPostResponsedefault|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\UsersSetPhotoPostResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\UsersSetPhotoPostResponsedefault', 'json');
    }
}
