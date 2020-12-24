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

class WorkflowsUpdateStep extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    use \JoliCode\Slack\Api\Runtime\Client\EndpointTrait;

    /**
     * Update the configuration for a workflow extension step.
     *
     * @param array $queryParameters {
     *
     *     @var string $inputs A JSON key-value map of inputs required from a user during configuration. This is the data your app expects to receive when the workflow step starts. **Please note**: the embedded variable format is set and replaced by the workflow system. You cannot create custom variables that will be replaced at runtime. [Read more about variables in workflow steps here](/workflows/steps#variables).
     *     @var string $outputs An JSON array of output objects used during step execution. This is the data your app agrees to provide when your workflow step was executed.
     *     @var string $step_image_url an optional field that can be used to override app image that is shown in the Workflow Builder
     *     @var string $step_name an optional field that can be used to override the step name that is shown in the Workflow Builder
     *     @var string $workflow_step_edit_id A context identifier provided with `view_submission` payloads used to call back to `workflows.updateStep`.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `workflow.steps:execute`
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
        return '/workflows.updateStep';
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
        $optionsResolver->setDefined(['inputs', 'outputs', 'step_image_url', 'step_name', 'workflow_step_edit_id']);
        $optionsResolver->setRequired(['workflow_step_edit_id']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('inputs', ['string']);
        $optionsResolver->setAllowedTypes('outputs', ['string']);
        $optionsResolver->setAllowedTypes('step_image_url', ['string']);
        $optionsResolver->setAllowedTypes('step_name', ['string']);
        $optionsResolver->setAllowedTypes('workflow_step_edit_id', ['string']);

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
     * @return \JoliCode\Slack\Api\Model\WorkflowsUpdateStepGetResponse200|\JoliCode\Slack\Api\Model\WorkflowsUpdateStepGetResponsedefault|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\WorkflowsUpdateStepGetResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\WorkflowsUpdateStepGetResponsedefault', 'json');
    }
}
