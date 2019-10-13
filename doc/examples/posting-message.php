<?php

use JoliCode\Slack\ClientFactory;
use JoliCode\Slack\Exception\SlackErrorResponse;

require_once __DIR__.'/../../vendor/autoload.php';

$client = ClientFactory::create('Your token');

try {
    // This method requires your token to have the scope "chat:write"
    $result = $client->chatPostMessage([
        'username' => 'example bot',
        'channel' => 'general',
        'text' => 'Hello world',
    ]);

    echo 'Message sent.';
} catch (SlackErrorResponse $e) {
    echo 'Fail to send the message.', PHP_EOL, $e->getMessage();
}
