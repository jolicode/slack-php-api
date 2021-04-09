<?php

use JoliCode\Slack\Api\Model\ObjsUser;
use JoliCode\Slack\ClientFactory;
use JoliCode\Slack\Exception\SlackErrorResponse;

require_once __DIR__.'/../../vendor/autoload.php';

$client = ClientFactory::create('Your token');

try {
    /** @var ObjsUser[] $users */
    $users = iterator_to_array($client->iterateUsersList());

    echo sprintf('Here is the names of the members of your workspace: %s', implode(', ', array_map(function(ObjsUser $user) {
        return $user->getName();
    }, $users)));
} catch (SlackErrorResponse $e) {
    echo 'Fail to retrieve the members.', PHP_EOL, $e->getMessage();
}
