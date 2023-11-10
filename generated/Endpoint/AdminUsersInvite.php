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

class AdminUsersInvite extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    use \JoliCode\Slack\Api\Runtime\Client\EndpointTrait;

    /**
     * Invite a user to a workspace.
     *
     * @param array $formParameters {
     *
     * @var string $channel_ids A comma-separated list of `channel_id`s for this user to join. At least one channel is required.
     * @var string $custom_message an optional message to send to the user in the invite email
     * @var string $email the email address of the person to invite
     * @var string $guest_expiration_ts Timestamp when guest account should be disabled. Only include this timestamp if you are inviting a guest user and you want their account to expire on a certain date.
     * @var bool   $is_restricted Is this user a multi-channel guest user? (default: false)
     * @var bool   $is_ultra_restricted Is this user a single channel guest user? (default: false)
     * @var string $real_name full name of the user
     * @var bool   $resend Allow this invite to be resent in the future if a user has not signed up yet. (default: false)
     * @var string $team_id The ID (`T1234`) of the workspace.
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $token Authentication token. Requires scope: `admin.users:write`
     *             }
     */
    public function __construct(array $formParameters = [], array $headerParameters = [])
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
        return '/admin.users.invite';
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
        $optionsResolver->setDefined(['channel_ids', 'custom_message', 'email', 'guest_expiration_ts', 'is_restricted', 'is_ultra_restricted', 'real_name', 'resend', 'team_id']);
        $optionsResolver->setRequired(['channel_ids', 'email', 'team_id']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('channel_ids', ['string']);
        $optionsResolver->addAllowedTypes('custom_message', ['string']);
        $optionsResolver->addAllowedTypes('email', ['string']);
        $optionsResolver->addAllowedTypes('guest_expiration_ts', ['string']);
        $optionsResolver->addAllowedTypes('is_restricted', ['bool']);
        $optionsResolver->addAllowedTypes('is_ultra_restricted', ['bool']);
        $optionsResolver->addAllowedTypes('real_name', ['string']);
        $optionsResolver->addAllowedTypes('resend', ['bool']);
        $optionsResolver->addAllowedTypes('team_id', ['string']);

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
     * @return \JoliCode\Slack\Api\Model\AdminUsersInvitePostResponse200|\JoliCode\Slack\Api\Model\AdminUsersInvitePostResponsedefault|null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AdminUsersInvitePostResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\AdminUsersInvitePostResponsedefault', 'json');
    }
}
