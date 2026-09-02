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

namespace JoliCode\Slack\Api\Runtime\Normalizer;

class InvalidDateException extends \RuntimeException
{
    public function __construct(mixed $value, string $format)
    {
        parent::__construct(\sprintf('Invalid date value "%s": does not match the expected format "%s".', \is_scalar($value) ? (string) $value : get_debug_type($value), $format));
    }
}
