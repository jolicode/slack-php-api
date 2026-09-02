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

use Symfony\Component\Serializer\SerializerInterface;

final class JsonPayload
{
    /**
     * Encodes an object-shaped payload for a JSON request body.
     *
     * Only called for bodies resolving to a generated model class: a
     * normalized empty PHP array must go on the wire as a JSON object ('{}'),
     * not as an empty JSON array ('[]').
     */
    public static function encode(SerializerInterface $serializer, mixed $body): string
    {
        $serialized = $serializer->serialize($body, 'json');
        if ('[]' === $serialized) {
            return '{}';
        }

        return $serialized;
    }
}
