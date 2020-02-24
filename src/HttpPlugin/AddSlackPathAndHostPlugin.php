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

namespace JoliCode\Slack\HttpPlugin;

use Http\Client\Common\Plugin;
use Http\Promise\Promise;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\UriInterface;

class AddSlackPathAndHostPlugin implements Plugin
{
    /**
     * @var UriInterface
     */
    private $uri;

    public function __construct(UriInterface $uri)
    {
        if ('' === $uri->getHost()) {
            throw new \LogicException('Host can not be empty');
        }

        if ('' === $uri->getPath()) {
            throw new \LogicException('URI path cannot be empty');
        }

        if ('/' === substr($uri->getPath(), -1)) {
            $uri = $uri->withPath(rtrim($uri->getPath(), '/'));
        }

        $this->uri = $uri;
    }

    public function handleRequest(RequestInterface $request, callable $next, callable $first): Promise
    {
        if ($this->uri->getHost() !== $request->getUri()->getHost()) {
            $uri = $request->getUri()
                ->withHost($this->uri->getHost())
                ->withScheme($this->uri->getScheme())
                ->withPort($this->uri->getPort())
                ->withPath($this->uri->getPath().$request->getUri()->getPath())
            ;

            $request = $request->withUri($uri);
        }

        return $next($request);
    }
}
