<?php

use JoliCode\Slack\Api\Model\ObjsUser;
use JoliCode\Slack\ClientFactory;

require_once __DIR__.'/../../vendor/autoload.php';

$client = ClientFactory::create('Your token');

/** @var ObjsUser $users */
$users = [];
$cursor = '';

do {
    // This method require your token to have the scope "users:read"
    $response = $client->usersList([
        'limit' => 200,
        'cursor' => $cursor,
    ]);

    if ($response->getOk()) {
        $users = array_merge($users, $response->getMembers());
        $cursor = $response->getResponseMetadata() ? $response->getResponseMetadata()->getNextCursor() : '';
    } else {
        echo 'Could not retrieve the users list.', PHP_EOL;
    }
} while (!empty($cursor));

if ($users) {
    echo sprintf('Here is the names of the members of your workspace: %s', implode(', ', array_map(function(ObjsUser $user) {
        return $user->getName();
    }, $users)));
}
