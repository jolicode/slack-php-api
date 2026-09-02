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

namespace JoliCode\Slack\Api\Runtime;

class JsonObject extends \stdClass implements \ArrayAccess, \Countable, \IteratorAggregate
{
    public function __construct(iterable $values = [])
    {
        foreach ($values as $key => $value) {
            $this->{$key} = $value;
        }
    }

    public function offsetExists(mixed $offset): bool
    {
        return \array_key_exists($offset, get_object_vars($this));
    }

    public function offsetGet(mixed $offset): mixed
    {
        return $this->{$offset} ?? null;
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        $this->{$offset} = $value;
    }

    public function offsetUnset(mixed $offset): void
    {
        unset($this->{$offset});
    }

    public function count(): int
    {
        return \count(get_object_vars($this));
    }

    public function getIterator(): \ArrayIterator
    {
        return new \ArrayIterator(get_object_vars($this));
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
