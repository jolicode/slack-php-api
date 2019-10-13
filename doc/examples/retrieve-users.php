<?php

use JoliCode\Slack\Api\Model\ObjsUser;
use JoliCode\Slack\ClientFactory;
use JoliCode\Slack\Exception\SlackErrorResponse;

require_once __DIR__.'/../../vendor/autoload.php';

$client = ClientFactory::create('Your token');

/** @var ObjsUser[] $users */
$users = [];
$cursor = '';

try {
    do {
        // This method requires your token to have the scope "users:read"
        $response = $client->usersList([
            'limit' => 200,
            'cursor' => $cursor,
        ]);

        $users = array_merge($users, $response->getMembers());
        $cursor = $response->getResponseMetadata() ? $response->getResponseMetadata()->getNextCursor() : '';
    } while (!empty($cursor));

    echo sprintf('Here is the names of the members of your workspace: %s', implode(', ', array_map(function(ObjsUser $user) {
        return $user->getName();
    }, $users)));
} catch (SlackErrorResponse $e) {
    echo 'Fail to retrieve the members.', PHP_EOL, $e->getMessage();
}
