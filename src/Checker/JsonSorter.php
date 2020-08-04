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

namespace JoliCode\Slack\Checker;

class JsonSorter
{
    public static function isCollection($value): bool
    {
        return \is_array($value) && array_keys($value) === range(0, \count($value) - 1);
    }

    public static function recursiveAlphabeticalSort($item)
    {
        if (\is_object($item)) {
            $asArray = (array) $item;
            if (0 === \count($asArray)) {
                return $item;
            }

            foreach ($asArray as $key => $subItem) {
                $asArray[$key] = self::recursiveAlphabeticalSort($item->$key);
            }

            $item = $asArray;
        } elseif (!\is_array($item)) {
            return $item;
        } else {
            foreach ($item as $key => $value) {
                $item[$key] = self::recursiveAlphabeticalSort($value);
            }
        }

        if (self::isCollection($item)) {
            $types = array_unique(array_map('getType', $item));

            if (1 === \count($types) && \in_array($types[0], ['string', 'int'], true)) {
                sort($item, SORT_STRING);
            }
        } else {
            ksort($item, SORT_STRING);
        }

        return $item;
    }
}
