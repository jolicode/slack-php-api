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

namespace JoliCode\Slack\Tests;

use JoliCode\Slack\Checker\JsonSorter;
use PHPUnit\Framework\TestCase;

class JsonSorterTest extends TestCase
{
    private JsonSorter $sorter;

    protected function setUp(): void
    {
        $this->sorter = new JsonSorter();
    }

    /**
     * @dataProvider provideJsonStrings
     */
    public function testItCanSortJsonString(string $source, string $expectedResult)
    {
        $this->sorter->sort($source);
        $this->assertSame(
            $expectedResult,
            $this->sorter->sort($source, false)
        );
    }

    public function provideJsonStrings()
    {
        return [[
            '{}',
            '{}',
        ], [
            '[]',
            '[]',
        ], [
            '[{}]',
            '[{}]',
        ], [
            '{"a":"b"}',
            '{"a":"b"}',
        ], [
            '{"a":{"b":"c"},"d":{"e":"f"}}',
            '{"a":{"b":"c"},"d":{"e":"f"}}',
        ],[
            '{"AA":{"b":"c"},"d":{"e":"f"},"1000":"a","9":"b","A1":"c"}',
            '{"1000":"a","9":"b","A1":"c","AA":{"b":"c"},"d":{"e":"f"}}',
        ],[
            '{"DA":{"b":"c"},"a":{"e":"f"},"1000":"a","9":"b","D1":"c"}',
            '{"1000":"a","9":"b","D1":"c","DA":{"b":"c"},"a":{"e":"f"}}',
        ], [
            '[{"z":999},{"a":1}]',
            '[{"z":999},{"a":1}]',
        ], [
            '{"a":{}}',
            '{"a":{}}',
        ], [
            '{"a":[{}]}',
            '{"a":[{}]}',
        ], [
            '["b","c","a","d"]',
            '["a","b","c","d"]',
        ], [
            '{"d":["b","c","a","d"],"a":{"b":"a"},"c":{},"b":[]}',
            '{"a":{"b":"a"},"b":[],"c":{},"d":["a","b","c","d"]}',
        ], [
            '{"b":[{"c":{"x":"y"},"a":{"a":"b"},"B":{"a":"b"}}]}',
            '{"b":[{"B":{"a":"b"},"a":{"a":"b"},"c":{"x":"y"}}]}',
        ], [
            '{"b":{"a":"b"},"1000":{},"1":{},"200":{},"30":{},"a":12}',
            '{"1":{},"1000":{},"200":{},"30":{},"a":12,"b":{"a":"b"}}',
        ]];
    }
}
