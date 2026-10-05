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

namespace JoliCode\Slack\Api\Exception;

class UnexpectedStatusCodeException extends \RuntimeException implements ClientException, WithResponseInterface
{
    /**
     * @var \Symfony\Contracts\HttpClient\ResponseInterface|null
     */
    private $response;

    public function __construct($status, $message = '', ?\Symfony\Contracts\HttpClient\ResponseInterface $response = null)
    {
        parent::__construct($message, $status);
        $this->response = $response;
    }

    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}
