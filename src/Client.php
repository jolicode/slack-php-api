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
use JoliCode\Slack\Api\Model\FilesCompleteUploadExternalPostResponse200;
use JoliCode\Slack\Api\Model\FilesCompleteUploadExternalPostResponsedefault;
use JoliCode\Slack\Api\Model\ObjsConversation;
use JoliCode\Slack\Api\Model\ObjsMessage;
use JoliCode\Slack\Api\Model\ObjsSubteam;
use JoliCode\Slack\Api\Model\ObjsUser;
use Nyholm\Psr7\Stream;

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

    /**
     * Uploads one or more files to Slack using the external file upload flow.
     *
     * Each file must include a 'path' key. Optional keys per file:
     * - 'title': Custom display name (defaults to file name)
     * - 'alt_text': Description for screen readers
     * - 'snippet_type': Syntax highlighting language (for code snippets)
     *
     * @param array       $files          Array of files to upload. Each file should be an associative array:
     *                                    [
     *                                    'path' => '/path/to/file.png',
     *                                    'title' => 'My File', // optional
     *                                    'alt_text' => 'Screen reader description', // optional
     *                                    'snippet_type' => 'php', // optional
     *                                    ]
     * @param string      $channelId      The Slack channel ID to upload files to (e.g., 'C12345678').
     * @param string|null $initialComment optional comment to add with the upload
     *
     * @throws \RuntimeException if upload or Slack API interaction fails
     * @throws \JsonException
     *
     * @example
     * $this->filesUploadV2([
     *     ['path' => '/tmp/image.png', 'title' => 'Bot Logo', 'alt_text' => 'Slack Bot Logo'],
     *     ['path' => '/tmp/script.js', 'snippet_type' => 'javascript']
     * ], 'C12345678', 'Here are the uploaded files:');
     */
    public function filesUploadV2(
        array $files,
        string $channelId,
        ?string $initialComment = null,
    ): FilesCompleteUploadExternalPostResponsedefault|FilesCompleteUploadExternalPostResponse200|null {
        $filesPayload = [];

        foreach ($files as $file) {
            $filePath = $file['path'];
            $fileName = basename($filePath);
            $title = $file['title'] ?? $fileName;
            $altText = $file['alt_text'] ?? null;
            $snippetType = $file['snippet_type'] ?? null;

            $fileStream = Stream::create(fopen($filePath, 'r'));
            $fileSize = $fileStream->getSize();

            // Step 1: Get upload URL from Slack
            $queryParams = array_filter(
                [
                    'filename' => $fileName,
                    'length' => $fileSize,
                    'alt_txt' => $altText,
                    'snippet_type' => $snippetType,
                ]
            );

            $uploadInfo = $this->filesGetUploadUrlExternal($queryParams);
            $uploadUrl = $uploadInfo?->getUploadUrl();
            $fileId = $uploadInfo?->getFileId();

            if (null === $uploadUrl || null === $fileId) {
                throw new \RuntimeException("Slack did not return upload URL or file ID for {$fileName}");
            }

            // Step 2: Upload file data using cURL
            $this->uploadToSlackUrlWithCurl($uploadUrl, $filePath);

            // Step 3: Build file metadata
            $filesPayload[] = [
                'id' => $fileId,
                'title' => $title,
            ];
        }

        // Step 4: Complete upload
        return $this->filesCompleteUploadExternal(
            array_filter(
                [
                    'files' => json_encode($filesPayload, \JSON_THROW_ON_ERROR),
                    'channel_id' => $channelId,
                    'initial_comment' => $initialComment,
                ]
            )
        );
    }

    private function uploadToSlackUrlWithCurl(string $uploadUrl, string $filePath): void
    {
        $fileHandle = fopen($filePath, 'rb');

        $ch = curl_init($uploadUrl);
        curl_setopt_array(
            $ch,
            [
                \CURLOPT_POST => true,
                \CURLOPT_POSTFIELDS => fread($fileHandle, filesize($filePath)),
                \CURLOPT_RETURNTRANSFER => true,
                \CURLOPT_HTTPHEADER => ['Content-Type: application/octet-stream'],
            ]
        );

        $response = curl_exec($ch);
        $error = curl_error($ch);
        $status = curl_getinfo($ch, \CURLINFO_HTTP_CODE);

        curl_close($ch);
        fclose($fileHandle);

        if ($error || $status >= 400) {
            throw new \RuntimeException("Upload failed: {$error} (HTTP {$status})");
        }
    }
}
