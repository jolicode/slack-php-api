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

namespace JoliCode\Slack\Api\Runtime\Client;

use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

trait EndpointTrait
{
    public function parseResponse(ResponseInterface $response, SerializerInterface $serializer, string $fetchMode = Client::FETCH_OBJECT)
    {
        $contentType = $response->hasHeader('Content-Type') ? current($response->getHeader('Content-Type')) : null;

        return $this->transformResponseBody($response, $serializer, $contentType);
    }

    abstract protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, string $contentType = null);
}
