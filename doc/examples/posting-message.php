<?php

use JoliCode\Slack\ClientFactory;

require_once __DIR__.'/../../vendor/autoload.php';

$client = ClientFactory::create('Your token');

// This method require your token to have the scope "chat:write"
$result = $client->chatPostMessage([
    'username' => 'example bot',
    'channel' => 'general',
    'text' => 'Hello world',
]);

if ($result->getOk()) {
    echo 'Message sent.';
} else {
    echo 'Fail to send the message.';
}
