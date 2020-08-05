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
    public function sort(string $content): string
    {
        $content = json_decode($content);
        $content = $this->recursiveAlphabeticalSort($content);

        return json_encode($content, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }

    public function recursiveAlphabeticalSort($item)
    {
        if (\is_object($item)) {
            $asArray = (array) $item;

            if (0 === \count($asArray)) {
                return $item;
            }

            foreach ($asArray as $key => $subItem) {
                $asArray[$key] = $this->recursiveAlphabeticalSort($item->$key);
            }

            $item = $asArray;
            ksort($item, SORT_STRING);

            return $item;
        } elseif (!\is_array($item)) {
            return $item;
        }

        foreach ($item as $key => $value) {
            $item[$key] = $this->recursiveAlphabeticalSort($value);
        }

        $types = array_unique(array_map('getType', $item));

        if (1 === \count($types) && \in_array($types[0], ['string', 'int'], true)) {
            sort($item, SORT_STRING);
        }

        return $item;
    }
}
