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

use Symfony\Component\Serializer\Encoder\DecoderInterface;
use Symfony\Component\Serializer\Encoder\EncoderInterface;

/**
 * Encodes and decodes application/x-www-form-urlencoded data.
 *
 * Encoding:   http_build_query($data)
 * Decoding:   parse_str($data, $result) → array
 *
 * Note: PHP's parse_str() converts dots (.) in keys to underscores (_)
 * and respects the max_input_vars ini setting.
 */
final class FormEncoder implements EncoderInterface, DecoderInterface
{
    public const FORMAT = 'form';

    public function encode(mixed $data, string $format, array $context = []): string
    {
        return http_build_query($data);
    }

    public function decode(string $data, string $format, array $context = []): mixed
    {
        parse_str($data, $result);

        return $result;
    }

    public function supportsEncoding(string $format): bool
    {
        return self::FORMAT === $format;
    }

    public function supportsDecoding(string $format): bool
    {
        return self::FORMAT === $format;
    }
}
