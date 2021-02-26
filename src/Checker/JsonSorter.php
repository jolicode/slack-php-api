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
    public function sort(string $content, bool $prettyPrint = true): string
    {
        $content = json_decode($content);
        $content = $this->mergeNodes($content);
        $content = $this->recursiveAlphabeticalSort($content);

        return json_encode($content, $prettyPrint ? \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES : \JSON_UNESCAPED_SLASHES);
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

                if ('parameters' === $key) {
                    usort($asArray['parameters'], function ($a, $b) {
                        return (isset($a['name']) && isset($b['name']) && $a['name'] > $b['name']) ? 1 : 0;
                    });
                }
            }

            $item = $asArray;
            ksort($item, \SORT_STRING);

            return $item;
        } elseif (!\is_array($item)) {
            return $item;
        }

        foreach ($item as $key => $value) {
            $item[$key] = $this->recursiveAlphabeticalSort($value);
        }

        $types = array_unique(array_map('getType', $item));

        if (1 === \count($types) && \in_array($types[0], ['string', 'int'], true)) {
            sort($item, \SORT_STRING);
        }

        return $item;
    }

    private function mergeNodes($item)
    {
        if (isset($item->definitions->objs_user->items)) {
            $objsUser = $this->mergeNodeItems($item->definitions->objs_user->items);
            $objsUser->description = 'Merged user object for non enterprise type and enterprise user';
            $item->definitions->objs_user = $objsUser;
        }

        if (isset($item->definitions->objs_conversation->items)) {
            $objsConversation = $this->mergeNodeItems($item->definitions->objs_conversation->items);
            $objsConversation->properties->id->{'$ref'} = '#/definitions/defs_channel';
            $objsConversation->title = 'Merged: Conversation MPIM Object, Conversation IM Channel Object from conversations.* methods, or Conversation object';
            $item->definitions->objs_conversation = $objsConversation;
        }

        return $item;
    }

    private function mergeNodeItems($items)
    {
        $result = $items[0];

        foreach ($items as $item) {
            $result->properties = $this->union($result->properties, $item->properties);
            $result->required = array_intersect($result->required, $item->required);
        }

        return $result;
    }

    private function union($cargo, $addition)
    {
        foreach ($addition as $key => $value) {
            if (isset($cargo->$key) && \is_object($cargo->$key)) {
                $cargo->$key = $this->union($cargo->$key, $value);
            } else {
                $cargo->$key = $value;
            }
        }

        return $cargo;
    }
}
