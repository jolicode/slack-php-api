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

namespace JoliCode\Slack;

use JoliCode\Slack\Api\Client as ApiClient;
use JoliCode\Slack\Api\Model\FilesGetUploadURLExternalGetResponse200;
use JoliCode\Slack\Api\Model\ObjsConversation;
use JoliCode\Slack\Api\Model\ObjsMessage;
use JoliCode\Slack\Api\Model\ObjsSubteam;
use JoliCode\Slack\Api\Model\ObjsUser;
use JoliCode\Slack\CustomRoutes\Model\FilesUploadToURLExternalPostResponse200;

/**
 * @method iterable<ObjsMessage>      iterateConversationsHistory(array $arguments = [])
 * @method iterable<ObjsConversation> iterateConversationsList(array $arguments = [])
 * @method iterable<string>           iterateConversationsMembers(array $arguments = [])
 * @method iterable<mixed>            iterateConversationsReplies(array $arguments = [])
 * @method iterable<mixed>            iterateFilesInfo(array $arguments = [])
 * @method iterable<ObjsSubteam>      iterateUsergroupsList(array $arguments = [])
 * @method iterable<mixed>            iterateReactionsList(array $arguments = [])
 * @method iterable<mixed>            iterateStarsList(array $arguments = [])
 * @method iterable<ObjsUser>         iterateUsersList(array $arguments = [])
 */
class Client extends ApiClient
{
    public const CURSOR_PAGINATION = [
        'conversationsHistory' => 'messages',
        'conversationsList' => 'channels',
        'conversationsMembers' => 'members',
        'conversationsReplies' => 'messages',
        'filesInfo' => 'comments',
        'usergroupsList' => 'usergroups',
        'reactionsList' => 'items',
        'starsList' => 'items',
        'usersList' => 'members',
    ];

    public function __call(string $name, $arguments)
    {
        $method = lcfirst(str_replace('iterate', '', $name));

        if (isset(self::CURSOR_PAGINATION[$method])) {
            return $this->iterate($method, $arguments);
        }

        throw new \BadMethodCallException(\sprintf('Unknown method %s::%s()', self::class, $name));
    }

    public function iterate(string $method, array $arguments): iterable
    {
        $getter = 'get' . self::CURSOR_PAGINATION[$method];

        $arguments[0] ??= [];
        $arguments[0]['limit'] ??= 1000;

        $cursor = '';

        do {
            $arguments[0]['cursor'] = $cursor;

            $response = $this->{$method}(...$arguments);

            foreach ($response->{$getter}() as $item) {
                yield $item;
            }

            $cursor = $response->getResponseMetadata() ? $response->getResponseMetadata()->getNextCursor() : '';
        } while (!empty($cursor));
    }

    public function FileUploadToURLExternal(string $uploadUri, array $formParameters = [], string $fetch = self::FETCH_OBJECT): \Psr\Http\Message\ResponseInterface
    {
        return $this->executeEndpoint(new CustomRoutes\Endpoint\FilesUploadToURLExternal($uploadUri, $formParameters), $fetch);
    }

    /**
     * In following with additions to the Slack Web API, filesUploadV2 is being provided as a convenience wrapper
     * around the new file upload methods.
     */
    public function filesUploadV2(string $fileWithPath, string $channelId): void
    {
        $filename = basename($fileWithPath);

        // Step 1: Get an upload url
        /** @var FilesGetUploadURLExternalGetResponse200 $response */
        $response = $this->filesGetUploadURLExternal([
            'filename' => $filename,
            'length' => filesize($fileWithPath),
        ]);

        // Save values for confirming upload
        $fileId = $response->getFileId();
        $uploadUrl = $response->getUploadUrl();

        // Step 2: Send file in post request
        /** @var FilesUploadToURLExternalPostResponse200 $response */
        $response = $this->FileUploadToURLExternal($uploadUrl, [
            'filename' => $filename,
            'content' => file_get_contents(__DIR__ . '/resources/test-image.png'),
        ]);

        // Step 3: Confirm upload

        $filesArr = [
            [
                'id' => $fileId,
                'title' => $filename,
            ],
        ];

        $response = $this->filesCompleteUploadExternal([
            'channel_id' => $channelId,
            'files' => json_encode($filesArr),
        ]);
    }
}
