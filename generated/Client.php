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

namespace JoliCode\Slack\Api;

class Client extends \JoliCode\Slack\Api\Runtime\Client\Client
{
    /**
     * Approve an app for installation on a workspace.
     *
     * @param array $formParameters {
     *
     *     @var string $app_id the id of the app to approve
     *     @var string $request_id the id of the request to approve
     *     @var string $team_id
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.apps:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminAppsApprovePostResponse200|\JoliCode\Slack\Api\Model\AdminAppsApprovePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminAppsApprove(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminAppsApprove($formParameters, $headerParameters), $fetch);
    }

    /**
     * List approved apps for an org or workspace.
     *
     * @param array $queryParameters {
     *
     *     @var string $cursor Set `cursor` to `next_cursor` returned by the previous call to list items in the next page
     *     @var string $enterprise_id
     *     @var int $limit The maximum number of items to return. Must be between 1 - 1000 both inclusive.
     *     @var string $team_id
     *     @var string $token Authentication token. Requires scope: `admin.apps:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminAppsApprovedListGetResponse200|\JoliCode\Slack\Api\Model\AdminAppsApprovedListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminAppsApprovedList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminAppsApprovedList($queryParameters), $fetch);
    }

    /**
     * List app requests for a team/workspace.
     *
     * @param array $queryParameters {
     *
     *     @var string $cursor Set `cursor` to `next_cursor` returned by the previous call to list items in the next page
     *     @var int $limit The maximum number of items to return. Must be between 1 - 1000 both inclusive.
     *     @var string $team_id
     *     @var string $token Authentication token. Requires scope: `admin.apps:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminAppsRequestsListGetResponse200|\JoliCode\Slack\Api\Model\AdminAppsRequestsListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminAppsRequestsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminAppsRequestsList($queryParameters), $fetch);
    }

    /**
     * Restrict an app for installation on a workspace.
     *
     * @param array $formParameters {
     *
     *     @var string $app_id the id of the app to restrict
     *     @var string $request_id the id of the request to restrict
     *     @var string $team_id
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.apps:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminAppsRestrictPostResponse200|\JoliCode\Slack\Api\Model\AdminAppsRestrictPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminAppsRestrict(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminAppsRestrict($formParameters, $headerParameters), $fetch);
    }

    /**
     * List restricted apps for an org or workspace.
     *
     * @param array $queryParameters {
     *
     *     @var string $cursor Set `cursor` to `next_cursor` returned by the previous call to list items in the next page
     *     @var string $enterprise_id
     *     @var int $limit The maximum number of items to return. Must be between 1 - 1000 both inclusive.
     *     @var string $team_id
     *     @var string $token Authentication token. Requires scope: `admin.apps:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminAppsRestrictedListGetResponse200|\JoliCode\Slack\Api\Model\AdminAppsRestrictedListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminAppsRestrictedList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminAppsRestrictedList($queryParameters), $fetch);
    }

    /**
     * Archive a public or private channel.
     *
     * @param array $formParameters {
     *
     *     @var string $channel_id The channel to archive.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminConversationsArchivePostResponse200|\JoliCode\Slack\Api\Model\AdminConversationsArchivePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminConversationsArchive(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminConversationsArchive($formParameters, $headerParameters), $fetch);
    }

    /**
     * Convert a public channel to a private channel.
     *
     * @param array $formParameters {
     *
     *     @var string $channel_id The channel to convert to private.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminConversationsConvertToPrivatePostResponse200|\JoliCode\Slack\Api\Model\AdminConversationsConvertToPrivatePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminConversationsConvertToPrivate(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminConversationsConvertToPrivate($formParameters, $headerParameters), $fetch);
    }

    /**
     * Create a public or private channel-based conversation.
     *
     * @param array $formParameters {
     *
     *     @var string $description description of the public or private channel to create
     *     @var bool $is_private When `true`, creates a private channel instead of a public channel
     *     @var string $name name of the public or private channel to create
     *     @var bool $org_wide When `true`, the channel will be available org-wide. Note: if the channel is not `org_wide=true`, you must specify a `team_id` for this channel
     *     @var string $team_id The workspace to create the channel in. Note: this argument is required unless you set `org_wide=true`.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminConversationsCreatePostResponse200|\JoliCode\Slack\Api\Model\AdminConversationsCreatePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminConversationsCreate(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminConversationsCreate($formParameters, $headerParameters), $fetch);
    }

    /**
     * Delete a public or private channel.
     *
     * @param array $formParameters {
     *
     *     @var string $channel_id The channel to delete.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminConversationsDeletePostResponse200|\JoliCode\Slack\Api\Model\AdminConversationsDeletePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminConversationsDelete(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminConversationsDelete($formParameters, $headerParameters), $fetch);
    }

    /**
     * Disconnect a connected channel from one or more workspaces.
     *
     * @param array $formParameters {
     *
     *     @var string $channel_id the channel to be disconnected from some workspaces
     *     @var string $leaving_team_ids The team to be removed from the channel. Currently only a single team id can be specified.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminConversationsDisconnectSharedPostResponse200|\JoliCode\Slack\Api\Model\AdminConversationsDisconnectSharedPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminConversationsDisconnectShared(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminConversationsDisconnectShared($formParameters, $headerParameters), $fetch);
    }

    /**
     * List all disconnected channels—i.e., channels that were once connected to other workspaces and then disconnected—and the corresponding original channel IDs for key revocation with EKM.
     *
     * @param array $queryParameters {
     *
     *     @var string $channel_ids a comma-separated list of channels to filter to
     *     @var string $cursor set `cursor` to `next_cursor` returned by the previous call to list items in the next page
     *     @var int $limit The maximum number of items to return. Must be between 1 - 1000 both inclusive.
     *     @var string $team_ids a comma-separated list of the workspaces to which the channels you would like returned belong
     *     @var string $token Authentication token. Requires scope: `admin.conversations:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminConversationsEkmListOriginalConnectedChannelInfoGetResponse200|\JoliCode\Slack\Api\Model\AdminConversationsEkmListOriginalConnectedChannelInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminConversationsEkmListOriginalConnectedChannelInfo(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminConversationsEkmListOriginalConnectedChannelInfo($queryParameters), $fetch);
    }

    /**
     * Get conversation preferences for a public or private channel.
     *
     * @param array $queryParameters {
     *
     *     @var string $channel_id The channel to get preferences for.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.conversations:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminConversationsGetConversationPrefsGetResponse200|\JoliCode\Slack\Api\Model\AdminConversationsGetConversationPrefsGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminConversationsGetConversationPrefs(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminConversationsGetConversationPrefs($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Get all the workspaces a given public or private channel is connected to within this Enterprise org.
     *
     * @param array $queryParameters {
     *
     *     @var string $channel_id the channel to determine connected workspaces within the organization for
     *     @var string $cursor Set `cursor` to `next_cursor` returned by the previous call to list items in the next page
     *     @var int $limit The maximum number of items to return. Must be between 1 - 1000 both inclusive.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.conversations:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminConversationsGetTeamsGetResponse200|\JoliCode\Slack\Api\Model\AdminConversationsGetTeamsGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminConversationsGetTeams(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminConversationsGetTeams($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Invite a user to a public or private channel.
     *
     * @param array $formParameters {
     *
     *     @var string $channel_id the channel that the users will be invited to
     *     @var string $user_ids The users to invite.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminConversationsInvitePostResponse200|\JoliCode\Slack\Api\Model\AdminConversationsInvitePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminConversationsInvite(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminConversationsInvite($formParameters, $headerParameters), $fetch);
    }

    /**
     * Rename a public or private channel.
     *
     * @param array $formParameters {
     *
     *     @var string $channel_id the channel to rename
     *     @var string $name
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminConversationsRenamePostResponse200|\JoliCode\Slack\Api\Model\AdminConversationsRenamePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminConversationsRename(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminConversationsRename($formParameters, $headerParameters), $fetch);
    }

    /**
     * Add an allowlist of IDP groups for accessing a channel.
     *
     * @param array $formParameters {
     *
     *     @var string $channel_id the channel to link this group to
     *     @var string $group_id The [IDP Group](https://slack.com/help/articles/115001435788-Connect-identity-provider-groups-to-your-Enterprise-Grid-org) ID to be an allowlist for the private channel.
     *     @var string $team_id The workspace where the channel exists. This argument is required for channels only tied to one workspace, and optional for channels that are shared across an organization.
     *     @var string $token Authentication token. Requires scope: `admin.conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminConversationsRestrictAccessAddGroupPostResponse200|\JoliCode\Slack\Api\Model\AdminConversationsRestrictAccessAddGroupPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminConversationsRestrictAccessAddGroup(array $formParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminConversationsRestrictAccessAddGroup($formParameters), $fetch);
    }

    /**
     * List all IDP Groups linked to a channel.
     *
     * @param array $queryParameters {
     *
     *     @var string $channel_id
     *     @var string $team_id The workspace where the channel exists. This argument is required for channels only tied to one workspace, and optional for channels that are shared across an organization.
     *     @var string $token Authentication token. Requires scope: `admin.conversations:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminConversationsRestrictAccessListGroupsGetResponse200|\JoliCode\Slack\Api\Model\AdminConversationsRestrictAccessListGroupsGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminConversationsRestrictAccessListGroups(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminConversationsRestrictAccessListGroups($queryParameters), $fetch);
    }

    /**
     * Remove a linked IDP group linked from a private channel.
     *
     * @param array $formParameters {
     *
     *     @var string $channel_id the channel to remove the linked group from
     *     @var string $group_id The [IDP Group](https://slack.com/help/articles/115001435788-Connect-identity-provider-groups-to-your-Enterprise-Grid-org) ID to remove from the private channel.
     *     @var string $team_id The workspace where the channel exists. This argument is required for channels only tied to one workspace, and optional for channels that are shared across an organization.
     *     @var string $token Authentication token. Requires scope: `admin.conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminConversationsRestrictAccessRemoveGroupPostResponse200|\JoliCode\Slack\Api\Model\AdminConversationsRestrictAccessRemoveGroupPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminConversationsRestrictAccessRemoveGroup(array $formParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminConversationsRestrictAccessRemoveGroup($formParameters), $fetch);
    }

    /**
     * Search for public or private channels in an Enterprise organization.
     *
     * @param array $queryParameters {
     *
     *     @var string $cursor set `cursor` to `next_cursor` returned by the previous call to list items in the next page
     *     @var int $limit Maximum number of items to be returned. Must be between 1 - 20 both inclusive. Default is 10.
     *     @var string $query name of the the channel to query by
     *     @var string $search_channel_types The type of channel to include or exclude in the search. For example `private` will search private channels, while `private_exclude` will exclude them. For a full list of types, check the [Types section](#types).
     *     @var string $sort Possible values are `relevant` (search ranking based on what we think is closest), `name` (alphabetical), `member_count` (number of users in the channel), and `created` (date channel was created). You can optionally pair this with the `sort_dir` arg to change how it is sorted
     *     @var string $sort_dir Sort direction. Possible values are `asc` for ascending order like (1, 2, 3) or (a, b, c), and `desc` for descending order like (3, 2, 1) or (c, b, a)
     *     @var string $team_ids Comma separated string of team IDs, signifying the workspaces to search through.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.conversations:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminConversationsSearchGetResponse200|\JoliCode\Slack\Api\Model\AdminConversationsSearchGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminConversationsSearch(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminConversationsSearch($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Set the posting permissions for a public or private channel.
     *
     * @param array $formParameters {
     *
     *     @var string $channel_id The channel to set the prefs for
     *     @var string $prefs The prefs for this channel in a stringified JSON format.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminConversationsSetConversationPrefsPostResponse200|\JoliCode\Slack\Api\Model\AdminConversationsSetConversationPrefsPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminConversationsSetConversationPrefs(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminConversationsSetConversationPrefs($formParameters, $headerParameters), $fetch);
    }

    /**
     * Set the workspaces in an Enterprise grid org that connect to a public or private channel.
     *
     * @param array $formParameters {
     *
     *     @var string $channel_id the encoded `channel_id` to add or remove to workspaces
     *     @var bool $org_channel True if channel has to be converted to an org channel
     *     @var string $target_team_ids A comma-separated list of workspaces to which the channel should be shared. Not required if the channel is being shared org-wide.
     *     @var string $team_id The workspace to which the channel belongs. Omit this argument if the channel is a cross-workspace shared channel.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminConversationsSetTeamsPostResponse200|\JoliCode\Slack\Api\Model\AdminConversationsSetTeamsPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminConversationsSetTeams(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminConversationsSetTeams($formParameters, $headerParameters), $fetch);
    }

    /**
     * Unarchive a public or private channel.
     *
     * @param array $formParameters {
     *
     *     @var string $channel_id The channel to unarchive.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminConversationsUnarchivePostResponse200|\JoliCode\Slack\Api\Model\AdminConversationsUnarchivePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminConversationsUnarchive(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminConversationsUnarchive($formParameters, $headerParameters), $fetch);
    }

    /**
     * Add an emoji.
     *
     * @param array $formParameters {
     *
     *     @var string $name The name of the emoji to be removed. Colons (`:myemoji:`) around the value are not required, although they may be included.
     *     @var string $token Authentication token. Requires scope: `admin.teams:write`
     *     @var string $url The URL of a file to use as an image for the emoji. Square images under 128KB and with transparent backgrounds work best.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminEmojiAddPostResponse200|\JoliCode\Slack\Api\Model\AdminEmojiAddPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminEmojiAdd(array $formParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminEmojiAdd($formParameters), $fetch);
    }

    /**
     * Add an emoji alias.
     *
     * @param array $formParameters {
     *
     *     @var string $alias_for the alias of the emoji
     *     @var string $name The name of the emoji to be aliased. Colons (`:myemoji:`) around the value are not required, although they may be included.
     *     @var string $token Authentication token. Requires scope: `admin.teams:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminEmojiAddAliasPostResponse200|\JoliCode\Slack\Api\Model\AdminEmojiAddAliasPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminEmojiAddAlias(array $formParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminEmojiAddAlias($formParameters), $fetch);
    }

    /**
     * List emoji for an Enterprise Grid organization.
     *
     * @param array $queryParameters {
     *
     *     @var string $cursor Set `cursor` to `next_cursor` returned by the previous call to list items in the next page
     *     @var int $limit The maximum number of items to return. Must be between 1 - 1000 both inclusive.
     *     @var string $token Authentication token. Requires scope: `admin.teams:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminEmojiListGetResponse200|\JoliCode\Slack\Api\Model\AdminEmojiListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminEmojiList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminEmojiList($queryParameters), $fetch);
    }

    /**
     * Remove an emoji across an Enterprise Grid organization.
     *
     * @param array $formParameters {
     *
     *     @var string $name The name of the emoji to be removed. Colons (`:myemoji:`) around the value are not required, although they may be included.
     *     @var string $token Authentication token. Requires scope: `admin.teams:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminEmojiRemovePostResponse200|\JoliCode\Slack\Api\Model\AdminEmojiRemovePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminEmojiRemove(array $formParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminEmojiRemove($formParameters), $fetch);
    }

    /**
     * Rename an emoji.
     *
     * @param array $formParameters {
     *
     *     @var string $name The name of the emoji to be renamed. Colons (`:myemoji:`) around the value are not required, although they may be included.
     *     @var string $new_name the new name of the emoji
     *     @var string $token Authentication token. Requires scope: `admin.teams:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminEmojiRenamePostResponse200|\JoliCode\Slack\Api\Model\AdminEmojiRenamePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminEmojiRename(array $formParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminEmojiRename($formParameters), $fetch);
    }

    /**
     * Approve a workspace invite request.
     *
     * @param array $formParameters {
     *
     *     @var string $invite_request_id ID of the request to invite
     *     @var string $team_id ID for the workspace where the invite request was made.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.invites:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminInviteRequestsApprovePostResponse200|\JoliCode\Slack\Api\Model\AdminInviteRequestsApprovePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminInviteRequestsApprove(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminInviteRequestsApprove($formParameters, $headerParameters), $fetch);
    }

    /**
     * List all approved workspace invite requests.
     *
     * @param array $queryParameters {
     *
     *     @var string $cursor Value of the `next_cursor` field sent as part of the previous API response
     *     @var int $limit The number of results that will be returned by the API on each invocation. Must be between 1 - 1000, both inclusive
     *     @var string $team_id ID for the workspace where the invite requests were made.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.invites:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminInviteRequestsApprovedListGetResponse200|\JoliCode\Slack\Api\Model\AdminInviteRequestsApprovedListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminInviteRequestsApprovedList(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminInviteRequestsApprovedList($queryParameters, $headerParameters), $fetch);
    }

    /**
     * List all denied workspace invite requests.
     *
     * @param array $queryParameters {
     *
     *     @var string $cursor Value of the `next_cursor` field sent as part of the previous api response
     *     @var int $limit The number of results that will be returned by the API on each invocation. Must be between 1 - 1000 both inclusive
     *     @var string $team_id ID for the workspace where the invite requests were made.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.invites:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminInviteRequestsDeniedListGetResponse200|\JoliCode\Slack\Api\Model\AdminInviteRequestsDeniedListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminInviteRequestsDeniedList(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminInviteRequestsDeniedList($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Deny a workspace invite request.
     *
     * @param array $formParameters {
     *
     *     @var string $invite_request_id ID of the request to invite
     *     @var string $team_id ID for the workspace where the invite request was made.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.invites:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminInviteRequestsDenyPostResponse200|\JoliCode\Slack\Api\Model\AdminInviteRequestsDenyPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminInviteRequestsDeny(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminInviteRequestsDeny($formParameters, $headerParameters), $fetch);
    }

    /**
     * List all pending workspace invite requests.
     *
     * @param array $queryParameters {
     *
     *     @var string $cursor Value of the `next_cursor` field sent as part of the previous API response
     *     @var int $limit The number of results that will be returned by the API on each invocation. Must be between 1 - 1000, both inclusive
     *     @var string $team_id ID for the workspace where the invite requests were made.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.invites:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminInviteRequestsListGetResponse200|\JoliCode\Slack\Api\Model\AdminInviteRequestsListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminInviteRequestsList(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminInviteRequestsList($queryParameters, $headerParameters), $fetch);
    }

    /**
     * List all of the admins on a given workspace.
     *
     * @param array $queryParameters {
     *
     *     @var string $cursor set `cursor` to `next_cursor` returned by the previous call to list items in the next page
     *     @var int $limit the maximum number of items to return
     *     @var string $team_id
     *     @var string $token Authentication token. Requires scope: `admin.teams:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminTeamsAdminsListGetResponse200|\JoliCode\Slack\Api\Model\AdminTeamsAdminsListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminTeamsAdminsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminTeamsAdminsList($queryParameters), $fetch);
    }

    /**
     * Create an Enterprise team.
     *
     * @param array $formParameters {
     *
     *     @var string $team_description description for the team
     *     @var string $team_discoverability Who can join the team. A team's discoverability can be `open`, `closed`, `invite_only`, or `unlisted`.
     *     @var string $team_domain team domain (for example, slacksoftballteam)
     *     @var string $team_name Team name (for example, Slack Softball Team).
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.teams:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminTeamsCreatePostResponse200|\JoliCode\Slack\Api\Model\AdminTeamsCreatePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminTeamsCreate(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminTeamsCreate($formParameters, $headerParameters), $fetch);
    }

    /**
     * List all teams on an Enterprise organization.
     *
     * @param array $queryParameters {
     *
     *     @var string $cursor set `cursor` to `next_cursor` returned by the previous call to list items in the next page
     *     @var int $limit The maximum number of items to return. Must be between 1 - 100 both inclusive.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.teams:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminTeamsListGetResponse200|\JoliCode\Slack\Api\Model\AdminTeamsListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminTeamsList(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminTeamsList($queryParameters, $headerParameters), $fetch);
    }

    /**
     * List all of the owners on a given workspace.
     *
     * @param array $queryParameters {
     *
     *     @var string $cursor set `cursor` to `next_cursor` returned by the previous call to list items in the next page
     *     @var int $limit The maximum number of items to return. Must be between 1 - 1000 both inclusive.
     *     @var string $team_id
     *     @var string $token Authentication token. Requires scope: `admin.teams:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminTeamsOwnersListGetResponse200|\JoliCode\Slack\Api\Model\AdminTeamsOwnersListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminTeamsOwnersList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminTeamsOwnersList($queryParameters), $fetch);
    }

    /**
     * Fetch information about settings in a workspace.
     *
     * @param array $queryParameters {
     *
     *     @var string $team_id
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.teams:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminTeamsSettingsInfoGetResponse200|\JoliCode\Slack\Api\Model\AdminTeamsSettingsInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminTeamsSettingsInfo(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminTeamsSettingsInfo($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Set the default channels of a workspace.
     *
     * @param array $formParameters {
     *
     *     @var string $channel_ids an array of channel IDs
     *     @var string $team_id ID for the workspace to set the default channel for
     *     @var string $token Authentication token. Requires scope: `admin.teams:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetDefaultChannelsPostResponse200|\JoliCode\Slack\Api\Model\AdminTeamsSettingsSetDefaultChannelsPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminTeamsSettingsSetDefaultChannels(array $formParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminTeamsSettingsSetDefaultChannels($formParameters), $fetch);
    }

    /**
     * Set the description of a given workspace.
     *
     * @param array $formParameters {
     *
     *     @var string $description the new description for the workspace
     *     @var string $team_id ID for the workspace to set the description for.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.teams:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetDescriptionPostResponse200|\JoliCode\Slack\Api\Model\AdminTeamsSettingsSetDescriptionPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminTeamsSettingsSetDescription(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminTeamsSettingsSetDescription($formParameters, $headerParameters), $fetch);
    }

    /**
     * An API method that allows admins to set the discoverability of a given workspace.
     *
     * @param array $formParameters {
     *
     *     @var string $discoverability This workspace's discovery setting. It must be set to one of `open`, `invite_only`, `closed`, or `unlisted`.
     *     @var string $team_id The ID of the workspace to set discoverability on.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.teams:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetDiscoverabilityPostResponse200|\JoliCode\Slack\Api\Model\AdminTeamsSettingsSetDiscoverabilityPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminTeamsSettingsSetDiscoverability(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminTeamsSettingsSetDiscoverability($formParameters, $headerParameters), $fetch);
    }

    /**
     * Sets the icon of a workspace.
     *
     * @param array $formParameters {
     *
     *     @var string $image_url Image URL for the icon
     *     @var string $team_id ID for the workspace to set the icon for
     *     @var string $token Authentication token. Requires scope: `admin.teams:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetIconPostResponse200|\JoliCode\Slack\Api\Model\AdminTeamsSettingsSetIconPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminTeamsSettingsSetIcon(array $formParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminTeamsSettingsSetIcon($formParameters), $fetch);
    }

    /**
     * Set the name of a given workspace.
     *
     * @param array $formParameters {
     *
     *     @var string $name the new name of the workspace
     *     @var string $team_id ID for the workspace to set the name for.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.teams:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetNamePostResponse200|\JoliCode\Slack\Api\Model\AdminTeamsSettingsSetNamePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminTeamsSettingsSetName(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminTeamsSettingsSetName($formParameters, $headerParameters), $fetch);
    }

    /**
     * Add one or more default channels to an IDP group.
     *
     * @param array $formParameters {
     *
     *     @var string $channel_ids comma separated string of channel IDs
     *     @var string $team_id the workspace to add default channels in
     *     @var string $usergroup_id ID of the IDP group to add default channels for.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.usergroups:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminUsergroupsAddChannelsPostResponse200|\JoliCode\Slack\Api\Model\AdminUsergroupsAddChannelsPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminUsergroupsAddChannels(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminUsergroupsAddChannels($formParameters, $headerParameters), $fetch);
    }

    /**
     * Associate one or more default workspaces with an organization-wide IDP group.
     *
     * @param array $formParameters {
     *
     *     @var bool $auto_provision when `true`, this method automatically creates new workspace accounts for the IDP group members
     *     @var string $team_ids A comma separated list of encoded team (workspace) IDs. Each workspace *MUST* belong to the organization associated with the token.
     *     @var string $usergroup_id An encoded usergroup (IDP Group) ID.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.teams:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminUsergroupsAddTeamsPostResponse200|\JoliCode\Slack\Api\Model\AdminUsergroupsAddTeamsPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminUsergroupsAddTeams(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminUsergroupsAddTeams($formParameters, $headerParameters), $fetch);
    }

    /**
     * List the channels linked to an org-level IDP group (user group).
     *
     * @param array $queryParameters {
     *
     *     @var bool $include_num_members flag to include or exclude the count of members per channel
     *     @var string $team_id ID of the the workspace
     *     @var string $usergroup_id ID of the IDP group to list default channels for.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.usergroups:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminUsergroupsListChannelsGetResponse200|\JoliCode\Slack\Api\Model\AdminUsergroupsListChannelsGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminUsergroupsListChannels(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminUsergroupsListChannels($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Remove one or more default channels from an org-level IDP group (user group).
     *
     * @param array $formParameters {
     *
     *     @var string $channel_ids Comma-separated string of channel IDs
     *     @var string $usergroup_id ID of the IDP Group
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.usergroups:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminUsergroupsRemoveChannelsPostResponse200|\JoliCode\Slack\Api\Model\AdminUsergroupsRemoveChannelsPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminUsergroupsRemoveChannels(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminUsergroupsRemoveChannels($formParameters, $headerParameters), $fetch);
    }

    /**
     * Add an Enterprise user to a workspace.
     *
     * @param array $formParameters {
     *
     *     @var string $channel_ids comma separated values of channel IDs to add user in the new workspace
     *     @var bool $is_restricted true if user should be added to the workspace as a guest
     *     @var bool $is_ultra_restricted true if user should be added to the workspace as a single-channel guest
     *     @var string $team_id the ID (`T1234`) of the workspace
     *     @var string $user_id The ID of the user to add to the workspace.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.users:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminUsersAssignPostResponse200|\JoliCode\Slack\Api\Model\AdminUsersAssignPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminUsersAssign(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminUsersAssign($formParameters, $headerParameters), $fetch);
    }

    /**
     * Invite a user to a workspace.
     *
     * @param array $formParameters {
     *
     *     @var string $channel_ids A comma-separated list of `channel_id`s for this user to join. At least one channel is required.
     *     @var string $custom_message an optional message to send to the user in the invite email
     *     @var string $email the email address of the person to invite
     *     @var string $guest_expiration_ts Timestamp when guest account should be disabled. Only include this timestamp if you are inviting a guest user and you want their account to expire on a certain date.
     *     @var bool $is_restricted Is this user a multi-channel guest user? (default: false)
     *     @var bool $is_ultra_restricted Is this user a single channel guest user? (default: false)
     *     @var string $real_name full name of the user
     *     @var bool $resend Allow this invite to be resent in the future if a user has not signed up yet. (default: false)
     *     @var string $team_id The ID (`T1234`) of the workspace.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.users:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminUsersInvitePostResponse200|\JoliCode\Slack\Api\Model\AdminUsersInvitePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminUsersInvite(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminUsersInvite($formParameters, $headerParameters), $fetch);
    }

    /**
     * List users on a workspace.
     *
     * @param array $queryParameters {
     *
     *     @var string $cursor set `cursor` to `next_cursor` returned by the previous call to list items in the next page
     *     @var int $limit Limit for how many users to be retrieved per page
     *     @var string $team_id The ID (`T1234`) of the workspace.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.users:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminUsersListGetResponse200|\JoliCode\Slack\Api\Model\AdminUsersListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminUsersList(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminUsersList($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Remove a user from a workspace.
     *
     * @param array $formParameters {
     *
     *     @var string $team_id the ID (`T1234`) of the workspace
     *     @var string $user_id The ID of the user to remove.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.users:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminUsersRemovePostResponse200|\JoliCode\Slack\Api\Model\AdminUsersRemovePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminUsersRemove(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminUsersRemove($formParameters, $headerParameters), $fetch);
    }

    /**
     * Invalidate a single session for a user by session_id.
     *
     * @param array $formParameters {
     *
     *     @var int $session_id
     *     @var string $team_id ID of the team that the session belongs to
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.users:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminUsersSessionInvalidatePostResponse200|\JoliCode\Slack\Api\Model\AdminUsersSessionInvalidatePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminUsersSessionInvalidate(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminUsersSessionInvalidate($formParameters, $headerParameters), $fetch);
    }

    /**
     * Wipes all valid sessions on all devices for a given user.
     *
     * @param array $formParameters {
     *
     *     @var bool $mobile_only Only expire mobile sessions (default: false)
     *     @var string $user_id The ID of the user to wipe sessions for
     *     @var bool $web_only Only expire web sessions (default: false)
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.users:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminUsersSessionResetPostResponse200|\JoliCode\Slack\Api\Model\AdminUsersSessionResetPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminUsersSessionReset(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminUsersSessionReset($formParameters, $headerParameters), $fetch);
    }

    /**
     * Set an existing guest, regular user, or owner to be an admin user.
     *
     * @param array $formParameters {
     *
     *     @var string $team_id the ID (`T1234`) of the workspace
     *     @var string $user_id The ID of the user to designate as an admin.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.users:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminUsersSetAdminPostResponse200|\JoliCode\Slack\Api\Model\AdminUsersSetAdminPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminUsersSetAdmin(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminUsersSetAdmin($formParameters, $headerParameters), $fetch);
    }

    /**
     * Set an expiration for a guest user.
     *
     * @param array $formParameters {
     *
     *     @var int $expiration_ts timestamp when guest account should be disabled
     *     @var string $team_id the ID (`T1234`) of the workspace
     *     @var string $user_id The ID of the user to set an expiration for.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.users:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminUsersSetExpirationPostResponse200|\JoliCode\Slack\Api\Model\AdminUsersSetExpirationPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminUsersSetExpiration(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminUsersSetExpiration($formParameters, $headerParameters), $fetch);
    }

    /**
     * Set an existing guest, regular user, or admin user to be a workspace owner.
     *
     * @param array $formParameters {
     *
     *     @var string $team_id the ID (`T1234`) of the workspace
     *     @var string $user_id Id of the user to promote to owner.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.users:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminUsersSetOwnerPostResponse200|\JoliCode\Slack\Api\Model\AdminUsersSetOwnerPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminUsersSetOwner(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminUsersSetOwner($formParameters, $headerParameters), $fetch);
    }

    /**
     * Set an existing guest user, admin user, or owner to be a regular user.
     *
     * @param array $formParameters {
     *
     *     @var string $team_id the ID (`T1234`) of the workspace
     *     @var string $user_id The ID of the user to designate as a regular user.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin.users:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AdminUsersSetRegularPostResponse200|\JoliCode\Slack\Api\Model\AdminUsersSetRegularPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function adminUsersSetRegular(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AdminUsersSetRegular($formParameters, $headerParameters), $fetch);
    }

    /**
     * Checks API calling code.
     *
     * @param array $queryParameters {
     *
     *     @var string $error Error response to return
     *     @var string $foo example property to return
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ApiTestGetResponse200|\JoliCode\Slack\Api\Model\ApiTestGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiTest(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ApiTest($queryParameters), $fetch);
    }

    /**
     * Get a list of authorizations for the given event context. Each authorization represents an app installation that the event is visible to.
     *
     * @param array $queryParameters {
     *
     *     @var string $cursor
     *     @var string $event_context
     *     @var int $limit
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `authorizations:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AppsEventAuthorizationsListGetResponse200|\JoliCode\Slack\Api\Model\AppsEventAuthorizationsListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function appsEventAuthorizationsList(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AppsEventAuthorizationsList($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Returns list of permissions this app has on a team.
     *
     * @param array $queryParameters {
     *
     *     @var string $token Authentication token. Requires scope: `none`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200|\JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function appsPermissionsInfo(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AppsPermissionsInfo($queryParameters), $fetch);
    }

    /**
     * Allows an app to request additional scopes.
     *
     * @param array $queryParameters {
     *
     *     @var string $scopes A comma separated list of scopes to request for
     *     @var string $token Authentication token. Requires scope: `none`
     *     @var string $trigger_id Token used to trigger the permissions API
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AppsPermissionsRequestGetResponse200|\JoliCode\Slack\Api\Model\AppsPermissionsRequestGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function appsPermissionsRequest(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AppsPermissionsRequest($queryParameters), $fetch);
    }

    /**
     * Returns list of resource grants this app has on a team.
     *
     * @param array $queryParameters {
     *
     *     @var string $cursor Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     *     @var int $limit the maximum number of items to return
     *     @var string $token Authentication token. Requires scope: `none`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AppsPermissionsResourcesListGetResponse200|\JoliCode\Slack\Api\Model\AppsPermissionsResourcesListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function appsPermissionsResourcesList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AppsPermissionsResourcesList($queryParameters), $fetch);
    }

    /**
     * Returns list of scopes this app has on a team.
     *
     * @param array $queryParameters {
     *
     *     @var string $token Authentication token. Requires scope: `none`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AppsPermissionsScopesListGetResponse200|\JoliCode\Slack\Api\Model\AppsPermissionsScopesListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function appsPermissionsScopesList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AppsPermissionsScopesList($queryParameters), $fetch);
    }

    /**
     * Returns list of user grants and corresponding scopes this app has on a team.
     *
     * @param array $queryParameters {
     *
     *     @var string $cursor Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     *     @var int $limit the maximum number of items to return
     *     @var string $token Authentication token. Requires scope: `none`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AppsPermissionsUsersListGetResponse200|\JoliCode\Slack\Api\Model\AppsPermissionsUsersListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function appsPermissionsUsersList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AppsPermissionsUsersList($queryParameters), $fetch);
    }

    /**
     * Enables an app to trigger a permissions modal to grant an app access to a user access scope.
     *
     * @param array $queryParameters {
     *
     *     @var string $scopes A comma separated list of user scopes to request for
     *     @var string $token Authentication token. Requires scope: `none`
     *     @var string $trigger_id Token used to trigger the request
     *     @var string $user The user this scope is being requested for
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AppsPermissionsUsersRequestGetResponse200|\JoliCode\Slack\Api\Model\AppsPermissionsUsersRequestGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function appsPermissionsUsersRequest(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AppsPermissionsUsersRequest($queryParameters), $fetch);
    }

    /**
     * Uninstalls your app from a workspace.
     *
     * @param array $queryParameters {
     *
     *     @var string $client_id issued when you created your application
     *     @var string $client_secret issued when you created your application
     *     @var string $token Authentication token. Requires scope: `none`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AppsUninstallGetResponse200|\JoliCode\Slack\Api\Model\AppsUninstallGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function appsUninstall(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AppsUninstall($queryParameters), $fetch);
    }

    /**
     * Revokes a token.
     *
     * @param array $queryParameters {
     *
     *     @var bool $test setting this parameter to `1` triggers a _testing mode_ where the specified token will not actually be revoked
     *     @var string $token Authentication token. Requires scope: `none`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AuthRevokeGetResponse200|\JoliCode\Slack\Api\Model\AuthRevokeGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function authRevoke(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AuthRevoke($queryParameters), $fetch);
    }

    /**
     * Checks authentication & identity.
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `none`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\AuthTestGetResponse200|\JoliCode\Slack\Api\Model\AuthTestGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function authTest(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\AuthTest($headerParameters), $fetch);
    }

    /**
     * Gets information about a bot user.
     *
     * @param array $queryParameters {
     *
     *     @var string $bot Bot user to get info on
     *     @var string $token Authentication token. Requires scope: `users:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\BotsInfoGetResponse200|\JoliCode\Slack\Api\Model\BotsInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function botsInfo(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\BotsInfo($queryParameters), $fetch);
    }

    /**
     * Registers a new Call.
     *
     * @param array $formParameters {
     *
     *     @var string $created_by The valid Slack user ID of the user who created this Call. When this method is called with a user token, the `created_by` field is optional and defaults to the authed user of the token. Otherwise, the field is required.
     *     @var int $date_start Call start time in UTC UNIX timestamp format
     *     @var string $desktop_app_join_url when supplied, available Slack clients will attempt to directly launch the 3rd-party Call with this URL
     *     @var string $external_display_id An optional, human-readable ID supplied by the 3rd-party Call provider. If supplied, this ID will be displayed in the Call object.
     *     @var string $external_unique_id An ID supplied by the 3rd-party Call provider. It must be unique across all Calls from that service.
     *     @var string $join_url the URL required for a client to join the Call
     *     @var string $title the name of the Call
     *     @var string $users The list of users to register as participants in the Call. [Read more on how to specify users here](/apis/calls#users).
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `calls:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\CallsAddPostResponse200|\JoliCode\Slack\Api\Model\CallsAddPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function callsAdd(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\CallsAdd($formParameters, $headerParameters), $fetch);
    }

    /**
     * Ends a Call.
     *
     * @param array $formParameters {
     *
     *     @var int $duration Call duration in seconds
     *     @var string $id `id` returned when registering the call using the [`calls.add`](/methods/calls.add) method.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `calls:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\CallsEndPostResponse200|\JoliCode\Slack\Api\Model\CallsEndPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function callsEnd(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\CallsEnd($formParameters, $headerParameters), $fetch);
    }

    /**
     * Returns information about a Call.
     *
     * @param array $queryParameters {
     *
     *     @var string $id `id` of the Call returned by the [`calls.add`](/methods/calls.add) method.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `calls:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\CallsInfoGetResponse200|\JoliCode\Slack\Api\Model\CallsInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function callsInfo(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\CallsInfo($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Registers new participants added to a Call.
     *
     * @param array $formParameters {
     *
     *     @var string $id `id` returned by the [`calls.add`](/methods/calls.add) method.
     *     @var string $users The list of users to add as participants in the Call. [Read more on how to specify users here](/apis/calls#users).
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `calls:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\CallsParticipantsAddPostResponse200|\JoliCode\Slack\Api\Model\CallsParticipantsAddPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function callsParticipantsAdd(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\CallsParticipantsAdd($formParameters, $headerParameters), $fetch);
    }

    /**
     * Registers participants removed from a Call.
     *
     * @param array $formParameters {
     *
     *     @var string $id `id` returned by the [`calls.add`](/methods/calls.add) method.
     *     @var string $users The list of users to remove as participants in the Call. [Read more on how to specify users here](/apis/calls#users).
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `calls:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\CallsParticipantsRemovePostResponse200|\JoliCode\Slack\Api\Model\CallsParticipantsRemovePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function callsParticipantsRemove(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\CallsParticipantsRemove($formParameters, $headerParameters), $fetch);
    }

    /**
     * Updates information about a Call.
     *
     * @param array $formParameters {
     *
     *     @var string $desktop_app_join_url when supplied, available Slack clients will attempt to directly launch the 3rd-party Call with this URL
     *     @var string $id `id` returned by the [`calls.add`](/methods/calls.add) method.
     *     @var string $join_url the URL required for a client to join the Call
     *     @var string $title The name of the Call.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `calls:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\CallsUpdatePostResponse200|\JoliCode\Slack\Api\Model\CallsUpdatePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function callsUpdate(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\CallsUpdate($formParameters, $headerParameters), $fetch);
    }

    /**
     * Deletes a message.
     *
     * @param array $formParameters {
     *
     *     @var bool $as_user Pass true to delete the message as the authed user with `chat:write:user` scope. [Bot users](/bot-users) in this context are considered authed users. If unused or false, the message will be deleted with `chat:write:bot` scope.
     *     @var string $channel channel containing the message to be deleted
     *     @var string $ts Timestamp of the message to be deleted.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `chat:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChatDeletePostResponse200|\JoliCode\Slack\Api\Model\ChatDeletePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function chatDelete(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ChatDelete($formParameters, $headerParameters), $fetch);
    }

    /**
     * Deletes a pending scheduled message from the queue.
     *
     * @param array $formParameters {
     *
     *     @var bool $as_user Pass true to delete the message as the authed user with `chat:write:user` scope. [Bot users](/bot-users) in this context are considered authed users. If unused or false, the message will be deleted with `chat:write:bot` scope.
     *     @var string $channel The channel the scheduled_message is posting to
     *     @var string $scheduled_message_id `scheduled_message_id` returned from call to chat.scheduleMessage
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `chat:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChatDeleteScheduledMessagePostResponse200|\JoliCode\Slack\Api\Model\ChatDeleteScheduledMessagePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function chatDeleteScheduledMessage(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ChatDeleteScheduledMessage($formParameters, $headerParameters), $fetch);
    }

    /**
     * Retrieve a permalink URL for a specific extant message.
     *
     * @param array $queryParameters {
     *
     *     @var string $channel The ID of the conversation or channel containing the message
     *     @var string $message_ts A message's `ts` value, uniquely identifying it within a channel
     *     @var string $token Authentication token. Requires scope: `none`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChatGetPermalinkGetResponse200|\JoliCode\Slack\Api\Model\ChatGetPermalinkGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function chatGetPermalink(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ChatGetPermalink($queryParameters), $fetch);
    }

    /**
     * Share a me message into a channel.
     *
     * @param array $formParameters {
     *
     *     @var string $channel Channel to send message to. Can be a public channel, private group or IM channel. Can be an encoded ID, or a name.
     *     @var string $text Text of the message to send.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `chat:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChatMeMessagePostResponse200|\JoliCode\Slack\Api\Model\ChatMeMessagePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function chatMeMessage(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ChatMeMessage($formParameters, $headerParameters), $fetch);
    }

    /**
     * Sends an ephemeral message to a user in a channel.
     *
     * @param array $formParameters {
     *
     *     @var bool $as_user Pass true to post the message as the authed user. Defaults to true if the chat:write:bot scope is not included. Otherwise, defaults to false.
     *     @var string $attachments a JSON-based array of structured attachments, presented as a URL-encoded string
     *     @var string $blocks a JSON-based array of structured blocks, presented as a URL-encoded string
     *     @var string $channel Channel, private group, or IM channel to send message to. Can be an encoded ID, or a name.
     *     @var string $icon_emoji Emoji to use as the icon for this message. Overrides `icon_url`. Must be used in conjunction with `as_user` set to `false`, otherwise ignored. See [authorship](#authorship) below.
     *     @var string $icon_url URL to an image to use as the icon for this message. Must be used in conjunction with `as_user` set to false, otherwise ignored. See [authorship](#authorship) below.
     *     @var bool $link_names find and link channel names and usernames
     *     @var string $parse Change how messages are treated. Defaults to `none`. See [below](#formatting).
     *     @var string $text How this field works and whether it is required depends on other fields you use in your API call. [See below](#text_usage) for more detail.
     *     @var string $thread_ts Provide another message's `ts` value to post this message in a thread. Avoid using a reply's `ts` value; use its parent's value instead. Ephemeral messages in threads are only shown if there is already an active thread.
     *     @var string $user `id` of the user who will receive the ephemeral message. The user should be in the channel specified by the `channel` argument.
     *     @var string $username Set your bot's user name. Must be used in conjunction with `as_user` set to false, otherwise ignored. See [authorship](#authorship) below.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `chat:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChatPostEphemeralPostResponse200|\JoliCode\Slack\Api\Model\ChatPostEphemeralPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function chatPostEphemeral(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ChatPostEphemeral($formParameters, $headerParameters), $fetch);
    }

    /**
     * Sends a message to a channel.
     *
     * @param array $formParameters {
     *
     *     @var bool $as_user Pass true to post the message as the authed user, instead of as a bot. Defaults to false. See [authorship](#authorship) below.
     *     @var string $attachments a JSON-based array of structured attachments, presented as a URL-encoded string
     *     @var string $blocks a JSON-based array of structured blocks, presented as a URL-encoded string
     *     @var string $channel Channel, private group, or IM channel to send message to. Can be an encoded ID, or a name. See [below](#channels) for more details.
     *     @var string $icon_emoji Emoji to use as the icon for this message. Overrides `icon_url`. Must be used in conjunction with `as_user` set to `false`, otherwise ignored. See [authorship](#authorship) below.
     *     @var string $icon_url URL to an image to use as the icon for this message. Must be used in conjunction with `as_user` set to false, otherwise ignored. See [authorship](#authorship) below.
     *     @var bool $link_names find and link channel names and usernames
     *     @var bool $mrkdwn Disable Slack markup parsing by setting to `false`. Enabled by default.
     *     @var string $parse Change how messages are treated. Defaults to `none`. See [below](#formatting).
     *     @var bool $reply_broadcast Used in conjunction with `thread_ts` and indicates whether reply should be made visible to everyone in the channel or conversation. Defaults to `false`.
     *     @var string $text How this field works and whether it is required depends on other fields you use in your API call. [See below](#text_usage) for more detail.
     *     @var string $thread_ts Provide another message's `ts` value to make this message a reply. Avoid using a reply's `ts` value; use its parent instead.
     *     @var bool $unfurl_links pass true to enable unfurling of primarily text-based content
     *     @var bool $unfurl_media pass false to disable unfurling of media content
     *     @var string $username Set your bot's user name. Must be used in conjunction with `as_user` set to false, otherwise ignored. See [authorship](#authorship) below.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `chat:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChatPostMessagePostResponse200|\JoliCode\Slack\Api\Model\ChatPostMessagePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function chatPostMessage(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ChatPostMessage($formParameters, $headerParameters), $fetch);
    }

    /**
     * Schedules a message to be sent to a channel.
     *
     * @param array $formParameters {
     *
     *     @var bool $as_user Pass true to post the message as the authed user, instead of as a bot. Defaults to false. See [chat.postMessage](chat.postMessage#authorship).
     *     @var string $attachments a JSON-based array of structured attachments, presented as a URL-encoded string
     *     @var string $blocks a JSON-based array of structured blocks, presented as a URL-encoded string
     *     @var string $channel Channel, private group, or DM channel to send message to. Can be an encoded ID, or a name. See [below](#channels) for more details.
     *     @var bool $link_names find and link channel names and usernames
     *     @var string $parse Change how messages are treated. Defaults to `none`. See [chat.postMessage](chat.postMessage#formatting).
     *     @var int $post_at unix EPOCH timestamp of time in future to send the message
     *     @var bool $reply_broadcast Used in conjunction with `thread_ts` and indicates whether reply should be made visible to everyone in the channel or conversation. Defaults to `false`.
     *     @var string $text How this field works and whether it is required depends on other fields you use in your API call. [See below](#text_usage) for more detail.
     *     @var string $thread_ts Provide another message's `ts` value to make this message a reply. Avoid using a reply's `ts` value; use its parent instead.
     *     @var bool $unfurl_links pass true to enable unfurling of primarily text-based content
     *     @var bool $unfurl_media Pass false to disable unfurling of media content.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `chat:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200|\JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function chatScheduleMessage(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ChatScheduleMessage($formParameters, $headerParameters), $fetch);
    }

    /**
     * Returns a list of scheduled messages.
     *
     * @param array $queryParameters {
     *
     *     @var string $channel The channel of the scheduled messages
     *     @var string $cursor For pagination purposes, this is the `cursor` value returned from a previous call to `chat.scheduledmessages.list` indicating where you want to start this call from.
     *     @var string $latest A UNIX timestamp of the latest value in the time range
     *     @var int $limit maximum number of original entries to return
     *     @var string $oldest A UNIX timestamp of the oldest value in the time range
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `none`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChatScheduledMessagesListGetResponse200|\JoliCode\Slack\Api\Model\ChatScheduledMessagesListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function chatScheduledMessagesList(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ChatScheduledMessagesList($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Provide custom unfurl behavior for user-posted URLs.
     *
     * @param array $formParameters {
     *
     *     @var string $channel Channel ID of the message
     *     @var string $ts timestamp of the message to add unfurl behavior to
     *     @var string $unfurls URL-encoded JSON map with keys set to URLs featured in the the message, pointing to their unfurl blocks or message attachments
     *     @var string $user_auth_message Provide a simply-formatted string to send as an ephemeral message to the user as invitation to authenticate further and enable full unfurling behavior
     *     @var bool $user_auth_required Set to `true` or `1` to indicate the user must install your Slack app to trigger unfurls for this domain
     *     @var string $user_auth_url Send users to this custom URL where they will complete authentication in your app to fully trigger unfurling. Value should be properly URL-encoded.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `links:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChatUnfurlPostResponse200|\JoliCode\Slack\Api\Model\ChatUnfurlPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function chatUnfurl(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ChatUnfurl($formParameters, $headerParameters), $fetch);
    }

    /**
     * Updates a message.
     *
     * @param array $formParameters {
     *
     *     @var bool $as_user Pass true to update the message as the authed user. [Bot users](/bot-users) in this context are considered authed users.
     *     @var string $attachments A JSON-based array of structured attachments, presented as a URL-encoded string. This field is required when not presenting `text`. If you don't include this field, the message's previous `attachments` will be retained. To remove previous `attachments`, include an empty array for this field.
     *     @var string $blocks A JSON-based array of [structured blocks](/block-kit/building), presented as a URL-encoded string. If you don't include this field, the message's previous `blocks` will be retained. To remove previous `blocks`, include an empty array for this field.
     *     @var string $channel channel containing the message to be updated
     *     @var string $link_names Find and link channel names and usernames. Defaults to `none`. If you do not specify a value for this field, the original value set for the message will be overwritten with the default, `none`.
     *     @var string $parse Change how messages are treated. Defaults to `client`, unlike `chat.postMessage`. Accepts either `none` or `full`. If you do not specify a value for this field, the original value set for the message will be overwritten with the default, `client`.
     *     @var string $text New text for the message, using the [default formatting rules](/reference/surfaces/formatting). It's not required when presenting `blocks` or `attachments`.
     *     @var string $ts Timestamp of the message to be updated.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `chat:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ChatUpdatePostResponse200|\JoliCode\Slack\Api\Model\ChatUpdatePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function chatUpdate(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ChatUpdate($formParameters, $headerParameters), $fetch);
    }

    /**
     * Archives a conversation.
     *
     * @param array $formParameters {
     *
     *     @var string $channel ID of conversation to archive
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsArchivePostResponse200|\JoliCode\Slack\Api\Model\ConversationsArchivePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsArchive(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsArchive($formParameters, $headerParameters), $fetch);
    }

    /**
     * Closes a direct message or multi-person direct message.
     *
     * @param array $formParameters {
     *
     *     @var string $channel Conversation to close.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsClosePostResponse200|\JoliCode\Slack\Api\Model\ConversationsClosePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsClose(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsClose($formParameters, $headerParameters), $fetch);
    }

    /**
     * Initiates a public or private channel-based conversation.
     *
     * @param array $formParameters {
     *
     *     @var bool $is_private Create a private channel instead of a public one
     *     @var string $name Name of the public or private channel to create
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsCreatePostResponse200|\JoliCode\Slack\Api\Model\ConversationsCreatePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsCreate(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsCreate($formParameters, $headerParameters), $fetch);
    }

    /**
     * Fetches a conversation's history of messages and events.
     *
     * @param array $queryParameters {
     *
     *     @var string $channel conversation ID to fetch history for
     *     @var string $cursor Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     *     @var bool $inclusive include messages with latest or oldest timestamp in results only when either timestamp is specified
     *     @var string $latest end of time range of messages to include in results
     *     @var int $limit The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the users list hasn't been reached.
     *     @var string $oldest start of time range of messages to include in results
     *     @var string $token Authentication token. Requires scope: `conversations:history`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsHistoryGetResponse200|\JoliCode\Slack\Api\Model\ConversationsHistoryGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsHistory(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsHistory($queryParameters), $fetch);
    }

    /**
     * Retrieve information about a conversation.
     *
     * @param array $queryParameters {
     *
     *     @var string $channel Conversation ID to learn more about
     *     @var bool $include_locale Set this to `true` to receive the locale for this conversation. Defaults to `false`
     *     @var bool $include_num_members Set to `true` to include the member count for the specified conversation. Defaults to `false`
     *     @var string $token Authentication token. Requires scope: `conversations:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsInfoGetResponse200|\JoliCode\Slack\Api\Model\ConversationsInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsInfo(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsInfo($queryParameters), $fetch);
    }

    /**
     * Invites users to a channel.
     *
     * @param array $formParameters {
     *
     *     @var string $channel the ID of the public or private channel to invite user(s) to
     *     @var string $users A comma separated list of user IDs. Up to 1000 users may be listed.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsInvitePostResponse200|\JoliCode\Slack\Api\Model\ConversationsInvitePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsInvite(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsInvite($formParameters, $headerParameters), $fetch);
    }

    /**
     * Joins an existing conversation.
     *
     * @param array $formParameters {
     *
     *     @var string $channel ID of conversation to join
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `channels:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsJoinPostResponse200|\JoliCode\Slack\Api\Model\ConversationsJoinPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsJoin(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsJoin($formParameters, $headerParameters), $fetch);
    }

    /**
     * Removes a user from a conversation.
     *
     * @param array $formParameters {
     *
     *     @var string $channel ID of conversation to remove user from
     *     @var string $user User ID to be removed.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsKickPostResponse200|\JoliCode\Slack\Api\Model\ConversationsKickPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsKick(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsKick($formParameters, $headerParameters), $fetch);
    }

    /**
     * Leaves a conversation.
     *
     * @param array $formParameters {
     *
     *     @var string $channel Conversation to leave
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsLeavePostResponse200|\JoliCode\Slack\Api\Model\ConversationsLeavePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsLeave(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsLeave($formParameters, $headerParameters), $fetch);
    }

    /**
     * Lists all channels in a Slack team.
     *
     * @param array $queryParameters {
     *
     *     @var string $cursor Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     *     @var bool $exclude_archived Set to `true` to exclude archived channels from the list
     *     @var int $limit The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn't been reached. Must be an integer no larger than 1000.
     *     @var string $token Authentication token. Requires scope: `conversations:read`
     *     @var string $types Mix and match channel types by providing a comma-separated list of any combination of `public_channel`, `private_channel`, `mpim`, `im`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsListGetResponse200|\JoliCode\Slack\Api\Model\ConversationsListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsList($queryParameters), $fetch);
    }

    /**
     * Sets the read cursor in a channel.
     *
     * @param array $formParameters {
     *
     *     @var string $channel channel or conversation to set the read cursor for
     *     @var string $ts Unique identifier of message you want marked as most recently seen in this conversation.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsMarkPostResponse200|\JoliCode\Slack\Api\Model\ConversationsMarkPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsMark(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsMark($formParameters, $headerParameters), $fetch);
    }

    /**
     * Retrieve members of a conversation.
     *
     * @param array $queryParameters {
     *
     *     @var string $channel ID of the conversation to retrieve members for
     *     @var string $cursor Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     *     @var int $limit The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the users list hasn't been reached.
     *     @var string $token Authentication token. Requires scope: `conversations:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsMembersGetResponse200|\JoliCode\Slack\Api\Model\ConversationsMembersGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsMembers(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsMembers($queryParameters), $fetch);
    }

    /**
     * Opens or resumes a direct message or multi-person direct message.
     *
     * @param array $formParameters {
     *
     *     @var string $channel Resume a conversation by supplying an `im` or `mpim`'s ID. Or provide the `users` field instead.
     *     @var bool $return_im boolean, indicates you want the full IM channel definition in the response
     *     @var string $users Comma separated lists of users. If only one user is included, this creates a 1:1 DM.  The ordering of the users is preserved whenever a multi-person direct message is returned. Supply a `channel` when not supplying `users`.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsOpenPostResponse200|\JoliCode\Slack\Api\Model\ConversationsOpenPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsOpen(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsOpen($formParameters, $headerParameters), $fetch);
    }

    /**
     * Renames a conversation.
     *
     * @param array $formParameters {
     *
     *     @var string $channel ID of conversation to rename
     *     @var string $name New name for conversation.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsRenamePostResponse200|\JoliCode\Slack\Api\Model\ConversationsRenamePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsRename(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsRename($formParameters, $headerParameters), $fetch);
    }

    /**
     * Retrieve a thread of messages posted to a conversation.
     *
     * @param array $queryParameters {
     *
     *     @var string $channel conversation ID to fetch thread from
     *     @var string $cursor Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     *     @var bool $inclusive include messages with latest or oldest timestamp in results only when either timestamp is specified
     *     @var string $latest end of time range of messages to include in results
     *     @var int $limit The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the users list hasn't been reached.
     *     @var string $oldest start of time range of messages to include in results
     *     @var string $token Authentication token. Requires scope: `conversations:history`
     *     @var string $ts Unique identifier of a thread's parent message. `ts` must be the timestamp of an existing message with 0 or more replies. If there are no replies then just the single message referenced by `ts` will return - it is just an ordinary, unthreaded message.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsRepliesGetResponse200|\JoliCode\Slack\Api\Model\ConversationsRepliesGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsReplies(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsReplies($queryParameters), $fetch);
    }

    /**
     * Sets the purpose for a conversation.
     *
     * @param array $formParameters {
     *
     *     @var string $channel Conversation to set the purpose of
     *     @var string $purpose A new, specialer purpose
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsSetPurposePostResponse200|\JoliCode\Slack\Api\Model\ConversationsSetPurposePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsSetPurpose(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsSetPurpose($formParameters, $headerParameters), $fetch);
    }

    /**
     * Sets the topic for a conversation.
     *
     * @param array $formParameters {
     *
     *     @var string $channel Conversation to set the topic of
     *     @var string $topic The new topic string. Does not support formatting or linkification.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsSetTopicPostResponse200|\JoliCode\Slack\Api\Model\ConversationsSetTopicPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsSetTopic(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsSetTopic($formParameters, $headerParameters), $fetch);
    }

    /**
     * Reverses conversation archival.
     *
     * @param array $formParameters {
     *
     *     @var string $channel ID of conversation to unarchive
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `conversations:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ConversationsUnarchivePostResponse200|\JoliCode\Slack\Api\Model\ConversationsUnarchivePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function conversationsUnarchive(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ConversationsUnarchive($formParameters, $headerParameters), $fetch);
    }

    /**
     * Open a dialog with a user.
     *
     * @param array $queryParameters {
     *
     *     @var string $dialog The dialog definition. This must be a JSON-encoded string.
     *     @var string $trigger_id Exchange a trigger to post to the user.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `none`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\DialogOpenGetResponse200|\JoliCode\Slack\Api\Model\DialogOpenGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function dialogOpen(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\DialogOpen($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Ends the current user's Do Not Disturb session immediately.
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `dnd:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\DndEndDndPostResponse200|\JoliCode\Slack\Api\Model\DndEndDndPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function dndEndDnd(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\DndEndDnd($headerParameters), $fetch);
    }

    /**
     * Ends the current user's snooze mode immediately.
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `dnd:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\DndEndSnoozePostResponse200|\JoliCode\Slack\Api\Model\DndEndSnoozePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function dndEndSnooze(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\DndEndSnooze($headerParameters), $fetch);
    }

    /**
     * Retrieves a user's current Do Not Disturb status.
     *
     * @param array $queryParameters {
     *
     *     @var string $token Authentication token. Requires scope: `dnd:read`
     *     @var string $user User to fetch status for (defaults to current user)
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\DndInfoGetResponse200|\JoliCode\Slack\Api\Model\DndInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function dndInfo(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\DndInfo($queryParameters), $fetch);
    }

    /**
     * Turns on Do Not Disturb mode for the current user, or changes its duration.
     *
     * @param array $formParameters {
     *
     *     @var string $num_minutes number of minutes, from now, to snooze until
     *     @var string $token Authentication token. Requires scope: `dnd:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\DndSetSnoozePostResponse200|\JoliCode\Slack\Api\Model\DndSetSnoozePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function dndSetSnooze(array $formParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\DndSetSnooze($formParameters), $fetch);
    }

    /**
     * Retrieves the Do Not Disturb status for up to 50 users on a team.
     *
     * @param array $queryParameters {
     *
     *     @var string $token Authentication token. Requires scope: `dnd:read`
     *     @var string $users Comma-separated list of users to fetch Do Not Disturb status for
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\DndTeamInfoGetResponse200|\JoliCode\Slack\Api\Model\DndTeamInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function dndTeamInfo(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\DndTeamInfo($queryParameters), $fetch);
    }

    /**
     * Lists custom emoji for a team.
     *
     * @param array $queryParameters {
     *
     *     @var string $token Authentication token. Requires scope: `emoji:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\EmojiListGetResponse200|\JoliCode\Slack\Api\Model\EmojiListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function emojiList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\EmojiList($queryParameters), $fetch);
    }

    /**
     * Deletes an existing comment on a file.
     *
     * @param array $formParameters {
     *
     *     @var string $file file to delete a comment from
     *     @var string $id The comment to delete.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `files:write:user`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\FilesCommentsDeletePostResponse200|\JoliCode\Slack\Api\Model\FilesCommentsDeletePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function filesCommentsDelete(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\FilesCommentsDelete($formParameters, $headerParameters), $fetch);
    }

    /**
     * Deletes a file.
     *
     * @param array $formParameters {
     *
     *     @var string $file ID of file to delete.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `files:write:user`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\FilesDeletePostResponse200|\JoliCode\Slack\Api\Model\FilesDeletePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function filesDelete(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\FilesDelete($formParameters, $headerParameters), $fetch);
    }

    /**
     * Gets information about a file.
     *
     * @param array $queryParameters {
     *
     *     @var string $count
     *     @var string $cursor Parameter for pagination. File comments are paginated for a single file. Set `cursor` equal to the `next_cursor` attribute returned by the previous request's `response_metadata`. This parameter is optional, but pagination is mandatory: the default value simply fetches the first "page" of the collection of comments. See [pagination](/docs/pagination) for more details.
     *     @var string $file specify a file by providing its ID
     *     @var int $limit The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn't been reached.
     *     @var string $page
     *     @var string $token Authentication token. Requires scope: `files:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\FilesInfoGetResponse200|\JoliCode\Slack\Api\Model\FilesInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function filesInfo(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\FilesInfo($queryParameters), $fetch);
    }

    /**
     * List for a team, in a channel, or from a user with applied filters.
     *
     * @param array $queryParameters {
     *
     *     @var string $channel filter files appearing in a specific channel, indicated by its ID
     *     @var string $count
     *     @var string $page
     *     @var bool $show_files_hidden_by_limit show truncated file info for files hidden due to being too old, and the team who owns the file being over the file limit
     *     @var string $token Authentication token. Requires scope: `files:read`
     *     @var string $ts_from filter files created after this timestamp (inclusive)
     *     @var string $ts_to filter files created before this timestamp (inclusive)
     *     @var string $types Filter files by type ([see below](#file_types)). You can pass multiple values in the types argument, like `types=spaces,snippets`.The default value is `all`, which does not filter the list.
     *     @var string $user Filter files created by a single user.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\FilesListGetResponse200|\JoliCode\Slack\Api\Model\FilesListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function filesList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\FilesList($queryParameters), $fetch);
    }

    /**
     * Adds a file from a remote service.
     *
     * @param array $formParameters {
     *
     *     @var string $external_id creator defined GUID for the file
     *     @var string $external_url URL of the remote file
     *     @var string $filetype type of file
     *     @var string $indexable_file_contents A text file (txt, pdf, doc, etc.) containing textual search terms that are used to improve discovery of the remote file.
     *     @var string $preview_image preview of the document via `multipart/form-data`
     *     @var string $title title of the file being shared
     *     @var string $token Authentication token. Requires scope: `remote_files:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\FilesRemoteAddPostResponse200|\JoliCode\Slack\Api\Model\FilesRemoteAddPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function filesRemoteAdd(array $formParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\FilesRemoteAdd($formParameters), $fetch);
    }

    /**
     * Retrieve information about a remote file added to Slack.
     *
     * @param array $queryParameters {
     *
     *     @var string $external_id creator defined GUID for the file
     *     @var string $file specify a file by providing its ID
     *     @var string $token Authentication token. Requires scope: `remote_files:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\FilesRemoteInfoGetResponse200|\JoliCode\Slack\Api\Model\FilesRemoteInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function filesRemoteInfo(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\FilesRemoteInfo($queryParameters), $fetch);
    }

    /**
     * Retrieve information about a remote file added to Slack.
     *
     * @param array $queryParameters {
     *
     *     @var string $channel filter files appearing in a specific channel, indicated by its ID
     *     @var string $cursor Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     *     @var int $limit the maximum number of items to return
     *     @var string $token Authentication token. Requires scope: `remote_files:read`
     *     @var string $ts_from filter files created after this timestamp (inclusive)
     *     @var string $ts_to Filter files created before this timestamp (inclusive).
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\FilesRemoteListGetResponse200|\JoliCode\Slack\Api\Model\FilesRemoteListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function filesRemoteList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\FilesRemoteList($queryParameters), $fetch);
    }

    /**
     * Remove a remote file.
     *
     * @param array $formParameters {
     *
     *     @var string $external_id creator defined GUID for the file
     *     @var string $file specify a file by providing its ID
     *     @var string $token Authentication token. Requires scope: `remote_files:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\FilesRemoteRemovePostResponse200|\JoliCode\Slack\Api\Model\FilesRemoteRemovePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function filesRemoteRemove(array $formParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\FilesRemoteRemove($formParameters), $fetch);
    }

    /**
     * Share a remote file into a channel.
     *
     * @param array $queryParameters {
     *
     *     @var string $channels comma-separated list of channel IDs where the file will be shared
     *     @var string $external_id The globally unique identifier (GUID) for the file, as set by the app registering the file with Slack.  Either this field or `file` or both are required.
     *     @var string $file Specify a file registered with Slack by providing its ID. Either this field or `external_id` or both are required.
     *     @var string $token Authentication token. Requires scope: `remote_files:share`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\FilesRemoteShareGetResponse200|\JoliCode\Slack\Api\Model\FilesRemoteShareGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function filesRemoteShare(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\FilesRemoteShare($queryParameters), $fetch);
    }

    /**
     * Updates an existing remote file.
     *
     * @param array $formParameters {
     *
     *     @var string $external_id creator defined GUID for the file
     *     @var string $external_url URL of the remote file
     *     @var string $file specify a file by providing its ID
     *     @var string $filetype type of file
     *     @var string $indexable_file_contents file containing contents that can be used to improve searchability for the remote file
     *     @var string $preview_image preview of the document via `multipart/form-data`
     *     @var string $title title of the file being shared
     *     @var string $token Authentication token. Requires scope: `remote_files:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\FilesRemoteUpdatePostResponse200|\JoliCode\Slack\Api\Model\FilesRemoteUpdatePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function filesRemoteUpdate(array $formParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\FilesRemoteUpdate($formParameters), $fetch);
    }

    /**
     * Revokes public/external sharing access for a file.
     *
     * @param array $formParameters {
     *
     *     @var string $file File to revoke
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `files:write:user`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\FilesRevokePublicURLPostResponse200|\JoliCode\Slack\Api\Model\FilesRevokePublicURLPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function filesRevokePublicURL(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\FilesRevokePublicURL($formParameters, $headerParameters), $fetch);
    }

    /**
     * Enables a file for public/external sharing.
     *
     * @param array $formParameters {
     *
     *     @var string $file File to share
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `files:write:user`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\FilesSharedPublicURLPostResponse200|\JoliCode\Slack\Api\Model\FilesSharedPublicURLPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function filesSharedPublicURL(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\FilesSharedPublicURL($formParameters, $headerParameters), $fetch);
    }

    /**
     * Uploads or creates a file.
     *
     * @param array $formParameters {
     *
     *     @var string $channels comma-separated list of channel names or IDs where the file will be shared
     *     @var string $content File contents via a POST variable. If omitting this parameter, you must provide a `file`.
     *     @var string|resource|\Psr\Http\Message\StreamInterface $file File contents via `multipart/form-data`. If omitting this parameter, you must submit `content`.
     *     @var string $filename filename of file
     *     @var string $filetype a [file type](/types/file#file_types) identifier
     *     @var string $initial_comment the message text introducing the file in specified `channels`
     *     @var string $thread_ts Provide another message's `ts` value to upload this file as a reply. Never use a reply's `ts` value; use its parent instead.
     *     @var string $title title of file
     *     @var string $token Authentication token. Requires scope: `files:write:user`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\FilesUploadPostResponse200|\JoliCode\Slack\Api\Model\FilesUploadPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function filesUpload(array $formParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\FilesUpload($formParameters), $fetch);
    }

    /**
     * For Enterprise Grid workspaces, map local user IDs to global user IDs.
     *
     * @param array $queryParameters {
     *
     *     @var string $team_id Specify team_id starts with `T` in case of Org Token
     *     @var bool $to_old Specify `true` to convert `W` global user IDs to workspace-specific `U` IDs. Defaults to `false`.
     *     @var string $token Authentication token. Requires scope: `tokens.basic`
     *     @var string $users A comma-separated list of user ids, up to 400 per request
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\MigrationExchangeGetResponse200|\JoliCode\Slack\Api\Model\MigrationExchangeGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function migrationExchange(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\MigrationExchange($queryParameters), $fetch);
    }

    /**
     * Exchanges a temporary OAuth verifier code for an access token.
     *
     * @param array $queryParameters {
     *
     *     @var string $client_id issued when you created your application
     *     @var string $client_secret issued when you created your application
     *     @var string $code the `code` param returned via the OAuth callback
     *     @var string $redirect_uri this must match the originally submitted URI (if one was sent)
     *     @var bool $single_channel Request the user to add your app only to a single channel. Only valid with a [legacy workspace app](https://api.slack.com/legacy-workspace-apps).
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\OauthAccessGetResponse200|\JoliCode\Slack\Api\Model\OauthAccessGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function oauthAccess(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\OauthAccess($queryParameters), $fetch);
    }

    /**
     * Exchanges a temporary OAuth verifier code for a workspace token.
     *
     * @param array $queryParameters {
     *
     *     @var string $client_id issued when you created your application
     *     @var string $client_secret issued when you created your application
     *     @var string $code the `code` param returned via the OAuth callback
     *     @var string $redirect_uri this must match the originally submitted URI (if one was sent)
     *     @var bool $single_channel Request the user to add your app only to a single channel.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\OauthTokenGetResponse200|\JoliCode\Slack\Api\Model\OauthTokenGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function oauthToken(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\OauthToken($queryParameters), $fetch);
    }

    /**
     * Exchanges a temporary OAuth verifier code for an access token.
     *
     * @param array $queryParameters {
     *
     *     @var string $client_id issued when you created your application
     *     @var string $client_secret issued when you created your application
     *     @var string $code the `code` param returned via the OAuth callback
     *     @var string $redirect_uri This must match the originally submitted URI (if one was sent).
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\OauthV2AccessGetResponse200|\JoliCode\Slack\Api\Model\OauthV2AccessGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function oauthV2Access(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\OauthV2Access($queryParameters), $fetch);
    }

    /**
     * Pins an item to a channel.
     *
     * @param array $formParameters {
     *
     *     @var string $channel channel to pin the item in
     *     @var string $timestamp Timestamp of the message to pin.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `pins:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\PinsAddPostResponse200|\JoliCode\Slack\Api\Model\PinsAddPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function pinsAdd(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\PinsAdd($formParameters, $headerParameters), $fetch);
    }

    /**
     * Lists items pinned to a channel.
     *
     * @param array $queryParameters {
     *
     *     @var string $channel channel to get pinned items for
     *     @var string $token Authentication token. Requires scope: `pins:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\PinsListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function pinsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\PinsList($queryParameters), $fetch);
    }

    /**
     * Un-pins an item from a channel.
     *
     * @param array $formParameters {
     *
     *     @var string $channel channel where the item is pinned to
     *     @var string $timestamp Timestamp of the message to un-pin.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `pins:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\PinsRemovePostResponse200|\JoliCode\Slack\Api\Model\PinsRemovePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function pinsRemove(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\PinsRemove($formParameters, $headerParameters), $fetch);
    }

    /**
     * Adds a reaction to an item.
     *
     * @param array $formParameters {
     *
     *     @var string $channel channel where the message to add reaction to was posted
     *     @var string $name reaction (emoji) name
     *     @var string $timestamp Timestamp of the message to add reaction to.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `reactions:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ReactionsAddPostResponse200|\JoliCode\Slack\Api\Model\ReactionsAddPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function reactionsAdd(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ReactionsAdd($formParameters, $headerParameters), $fetch);
    }

    /**
     * Gets reactions for an item.
     *
     * @param array $queryParameters {
     *
     *     @var string $channel channel where the message to get reactions for was posted
     *     @var string $file file to get reactions for
     *     @var string $file_comment file comment to get reactions for
     *     @var bool $full if true always return the complete reaction list
     *     @var string $timestamp timestamp of the message to get reactions for
     *     @var string $token Authentication token. Requires scope: `reactions:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ReactionsGetGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function reactionsGet(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ReactionsGet($queryParameters), $fetch);
    }

    /**
     * Lists reactions made by a user.
     *
     * @param array $queryParameters {
     *
     *     @var int $count
     *     @var string $cursor Parameter for pagination. Set `cursor` equal to the `next_cursor` attribute returned by the previous request's `response_metadata`. This parameter is optional, but pagination is mandatory: the default value simply fetches the first "page" of the collection. See [pagination](/docs/pagination) for more details.
     *     @var bool $full if true always return the complete reaction list
     *     @var int $limit The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn't been reached.
     *     @var int $page
     *     @var string $token Authentication token. Requires scope: `reactions:read`
     *     @var string $user Show reactions made by this user. Defaults to the authed user.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ReactionsListGetResponse200|\JoliCode\Slack\Api\Model\ReactionsListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function reactionsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ReactionsList($queryParameters), $fetch);
    }

    /**
     * Removes a reaction from an item.
     *
     * @param array $formParameters {
     *
     *     @var string $channel channel where the message to remove reaction from was posted
     *     @var string $file file to remove reaction from
     *     @var string $file_comment file comment to remove reaction from
     *     @var string $name reaction (emoji) name
     *     @var string $timestamp Timestamp of the message to remove reaction from.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `reactions:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ReactionsRemovePostResponse200|\JoliCode\Slack\Api\Model\ReactionsRemovePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function reactionsRemove(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ReactionsRemove($formParameters, $headerParameters), $fetch);
    }

    /**
     * Creates a reminder.
     *
     * @param array $formParameters {
     *
     *     @var string $text The content of the reminder
     *     @var string $time When this reminder should happen: the Unix timestamp (up to five years from now), the number of seconds until the reminder (if within 24 hours), or a natural language description (Ex. "in 15 minutes," or "every Thursday")
     *     @var string $user The user who will receive the reminder. If no user is specified, the reminder will go to user who created it.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `reminders:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\RemindersAddPostResponse200|\JoliCode\Slack\Api\Model\RemindersAddPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function remindersAdd(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\RemindersAdd($formParameters, $headerParameters), $fetch);
    }

    /**
     * Marks a reminder as complete.
     *
     * @param array $formParameters {
     *
     *     @var string $reminder The ID of the reminder to be marked as complete
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `reminders:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\RemindersCompletePostResponse200|\JoliCode\Slack\Api\Model\RemindersCompletePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function remindersComplete(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\RemindersComplete($formParameters, $headerParameters), $fetch);
    }

    /**
     * Deletes a reminder.
     *
     * @param array $formParameters {
     *
     *     @var string $reminder The ID of the reminder
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `reminders:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\RemindersDeletePostResponse200|\JoliCode\Slack\Api\Model\RemindersDeletePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function remindersDelete(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\RemindersDelete($formParameters, $headerParameters), $fetch);
    }

    /**
     * Gets information about a reminder.
     *
     * @param array $queryParameters {
     *
     *     @var string $reminder The ID of the reminder
     *     @var string $token Authentication token. Requires scope: `reminders:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\RemindersInfoGetResponse200|\JoliCode\Slack\Api\Model\RemindersInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function remindersInfo(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\RemindersInfo($queryParameters), $fetch);
    }

    /**
     * Lists all reminders created by or for a given user.
     *
     * @param array $queryParameters {
     *
     *     @var string $token Authentication token. Requires scope: `reminders:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\RemindersListGetResponse200|\JoliCode\Slack\Api\Model\RemindersListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function remindersList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\RemindersList($queryParameters), $fetch);
    }

    /**
     * Starts a Real Time Messaging session.
     *
     * @param array $queryParameters {
     *
     *     @var bool $batch_presence_aware Batch presence deliveries via subscription. Enabling changes the shape of `presence_change` events. See [batch presence](/docs/presence-and-status#batching).
     *     @var bool $presence_sub Only deliver presence events when requested by subscription. See [presence subscriptions](/docs/presence-and-status#subscriptions).
     *     @var string $token Authentication token. Requires scope: `rtm:stream`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\RtmConnectGetResponse200|\JoliCode\Slack\Api\Model\RtmConnectGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function rtmConnect(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\RtmConnect($queryParameters), $fetch);
    }

    /**
     * Searches for messages matching a query.
     *
     * @param array $queryParameters {
     *
     *     @var int $count Pass the number of results you want per "page". Maximum of `100`.
     *     @var bool $highlight pass a value of `true` to enable query highlight markers (see below)
     *     @var int $page
     *     @var string $query search query
     *     @var string $sort return matches sorted by either `score` or `timestamp`
     *     @var string $sort_dir change sort direction to ascending (`asc`) or descending (`desc`)
     *     @var string $token Authentication token. Requires scope: `search:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\SearchMessagesGetResponse200|\JoliCode\Slack\Api\Model\SearchMessagesGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function searchMessages(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\SearchMessages($queryParameters), $fetch);
    }

    /**
     * Adds a star to an item.
     *
     * @param array $formParameters {
     *
     *     @var string $channel channel to add star to, or channel where the message to add star to was posted (used with `timestamp`)
     *     @var string $file file to add star to
     *     @var string $file_comment file comment to add star to
     *     @var string $timestamp Timestamp of the message to add star to.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `stars:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\StarsAddPostResponse200|\JoliCode\Slack\Api\Model\StarsAddPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function starsAdd(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\StarsAdd($formParameters, $headerParameters), $fetch);
    }

    /**
     * Lists stars for a user.
     *
     * @param array $queryParameters {
     *
     *     @var string $count
     *     @var string $cursor Parameter for pagination. Set `cursor` equal to the `next_cursor` attribute returned by the previous request's `response_metadata`. This parameter is optional, but pagination is mandatory: the default value simply fetches the first "page" of the collection. See [pagination](/docs/pagination) for more details.
     *     @var int $limit The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn't been reached.
     *     @var string $page
     *     @var string $token Authentication token. Requires scope: `stars:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\StarsListGetResponse200|\JoliCode\Slack\Api\Model\StarsListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function starsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\StarsList($queryParameters), $fetch);
    }

    /**
     * Removes a star from an item.
     *
     * @param array $formParameters {
     *
     *     @var string $channel channel to remove star from, or channel where the message to remove star from was posted (used with `timestamp`)
     *     @var string $file file to remove star from
     *     @var string $file_comment file comment to remove star from
     *     @var string $timestamp Timestamp of the message to remove star from.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `stars:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\StarsRemovePostResponse200|\JoliCode\Slack\Api\Model\StarsRemovePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function starsRemove(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\StarsRemove($formParameters, $headerParameters), $fetch);
    }

    /**
     * Gets the access logs for the current team.
     *
     * @param array $queryParameters {
     *
     *     @var string $before end of time range of logs to include in results (inclusive)
     *     @var string $count
     *     @var string $page
     *     @var string $token Authentication token. Requires scope: `admin`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\TeamAccessLogsGetResponse200|\JoliCode\Slack\Api\Model\TeamAccessLogsGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function teamAccessLogs(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\TeamAccessLogs($queryParameters), $fetch);
    }

    /**
     * Gets billable users information for the current team.
     *
     * @param array $queryParameters {
     *
     *     @var string $token Authentication token. Requires scope: `admin`
     *     @var string $user A user to retrieve the billable information for. Defaults to all users.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\TeamBillableInfoGetResponse200|\JoliCode\Slack\Api\Model\TeamBillableInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function teamBillableInfo(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\TeamBillableInfo($queryParameters), $fetch);
    }

    /**
     * Gets information about the current team.
     *
     * @param array $queryParameters {
     *
     *     @var string $team Team to get info on, if omitted, will return information about the current team. Will only return team that the authenticated token is allowed to see through external shared channels
     *     @var string $token Authentication token. Requires scope: `team:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\TeamInfoGetResponse200|\JoliCode\Slack\Api\Model\TeamInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function teamInfo(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\TeamInfo($queryParameters), $fetch);
    }

    /**
     * Gets the integration logs for the current team.
     *
     * @param array $queryParameters {
     *
     *     @var string $app_id Filter logs to this Slack app. Defaults to all logs.
     *     @var string $change_type Filter logs with this change type. Defaults to all logs.
     *     @var string $count
     *     @var string $page
     *     @var string $service_id Filter logs to this service. Defaults to all logs.
     *     @var string $token Authentication token. Requires scope: `admin`
     *     @var string $user Filter logs generated by this user’s actions. Defaults to all logs.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\TeamIntegrationLogsGetResponse200|\JoliCode\Slack\Api\Model\TeamIntegrationLogsGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function teamIntegrationLogs(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\TeamIntegrationLogs($queryParameters), $fetch);
    }

    /**
     * Retrieve a team's profile.
     *
     * @param array $queryParameters {
     *
     *     @var string $token Authentication token. Requires scope: `users.profile:read`
     *     @var string $visibility Filter by visibility.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\TeamProfileGetGetResponse200|\JoliCode\Slack\Api\Model\TeamProfileGetGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function teamProfileGet(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\TeamProfileGet($queryParameters), $fetch);
    }

    /**
     * Create a User Group.
     *
     * @param array $formParameters {
     *
     *     @var string $channels a comma separated string of encoded channel IDs for which the User Group uses as a default
     *     @var string $description a short description of the User Group
     *     @var string $handle A mention handle. Must be unique among channels, users and User Groups.
     *     @var bool $include_count include the number of users in each User Group
     *     @var string $name A name for the User Group. Must be unique among User Groups.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `usergroups:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsergroupsCreatePostResponse200|\JoliCode\Slack\Api\Model\UsergroupsCreatePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usergroupsCreate(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\UsergroupsCreate($formParameters, $headerParameters), $fetch);
    }

    /**
     * Disable an existing User Group.
     *
     * @param array $formParameters {
     *
     *     @var bool $include_count include the number of users in the User Group
     *     @var string $usergroup The encoded ID of the User Group to disable.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `usergroups:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsergroupsDisablePostResponse200|\JoliCode\Slack\Api\Model\UsergroupsDisablePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usergroupsDisable(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\UsergroupsDisable($formParameters, $headerParameters), $fetch);
    }

    /**
     * Enable a User Group.
     *
     * @param array $formParameters {
     *
     *     @var bool $include_count include the number of users in the User Group
     *     @var string $usergroup The encoded ID of the User Group to enable.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `usergroups:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsergroupsEnablePostResponse200|\JoliCode\Slack\Api\Model\UsergroupsEnablePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usergroupsEnable(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\UsergroupsEnable($formParameters, $headerParameters), $fetch);
    }

    /**
     * List all User Groups for a team.
     *
     * @param array $queryParameters {
     *
     *     @var bool $include_count include the number of users in each User Group
     *     @var bool $include_disabled include disabled User Groups
     *     @var bool $include_users include the list of users for each User Group
     *     @var string $token Authentication token. Requires scope: `usergroups:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsergroupsListGetResponse200|\JoliCode\Slack\Api\Model\UsergroupsListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usergroupsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\UsergroupsList($queryParameters), $fetch);
    }

    /**
     * Update an existing User Group.
     *
     * @param array $formParameters {
     *
     *     @var string $channels a comma separated string of encoded channel IDs for which the User Group uses as a default
     *     @var string $description a short description of the User Group
     *     @var string $handle A mention handle. Must be unique among channels, users and User Groups.
     *     @var bool $include_count include the number of users in the User Group
     *     @var string $name A name for the User Group. Must be unique among User Groups.
     *     @var string $usergroup The encoded ID of the User Group to update.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `usergroups:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsergroupsUpdatePostResponse200|\JoliCode\Slack\Api\Model\UsergroupsUpdatePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usergroupsUpdate(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\UsergroupsUpdate($formParameters, $headerParameters), $fetch);
    }

    /**
     * List all users in a User Group.
     *
     * @param array $queryParameters {
     *
     *     @var bool $include_disabled allow results that involve disabled User Groups
     *     @var string $token Authentication token. Requires scope: `usergroups:read`
     *     @var string $usergroup The encoded ID of the User Group to read.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsergroupsUsersListGetResponse200|\JoliCode\Slack\Api\Model\UsergroupsUsersListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usergroupsUsersList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\UsergroupsUsersList($queryParameters), $fetch);
    }

    /**
     * Update the list of users for a User Group.
     *
     * @param array $formParameters {
     *
     *     @var bool $include_count include the number of users in the User Group
     *     @var string $usergroup the encoded ID of the User Group to update
     *     @var string $users A comma separated string of encoded user IDs that represent the entire list of users for the User Group.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `usergroups:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsergroupsUsersUpdatePostResponse200|\JoliCode\Slack\Api\Model\UsergroupsUsersUpdatePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usergroupsUsersUpdate(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\UsergroupsUsersUpdate($formParameters, $headerParameters), $fetch);
    }

    /**
     * List conversations the calling user may access.
     *
     * @param array $queryParameters {
     *
     *     @var string $cursor Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     *     @var bool $exclude_archived Set to `true` to exclude archived channels from the list
     *     @var int $limit The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn't been reached. Must be an integer no larger than 1000.
     *     @var string $token Authentication token. Requires scope: `conversations:read`
     *     @var string $types Mix and match channel types by providing a comma-separated list of any combination of `public_channel`, `private_channel`, `mpim`, `im`
     *     @var string $user Browse conversations by a specific user ID's membership. Non-public channels are restricted to those where the calling user shares membership.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsersConversationsGetResponse200|\JoliCode\Slack\Api\Model\UsersConversationsGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usersConversations(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\UsersConversations($queryParameters), $fetch);
    }

    /**
     * Delete the user profile photo.
     *
     * @param array $formParameters {
     *
     *     @var string $token Authentication token. Requires scope: `users.profile:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsersDeletePhotoPostResponse200|\JoliCode\Slack\Api\Model\UsersDeletePhotoPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usersDeletePhoto(array $formParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\UsersDeletePhoto($formParameters), $fetch);
    }

    /**
     * Gets user presence information.
     *
     * @param array $queryParameters {
     *
     *     @var string $token Authentication token. Requires scope: `users:read`
     *     @var string $user User to get presence info on. Defaults to the authed user.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsersGetPresenceGetResponse200|\JoliCode\Slack\Api\Model\UsersGetPresenceGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usersGetPresence(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\UsersGetPresence($queryParameters), $fetch);
    }

    /**
     * Get a user's identity.
     *
     * @param array $queryParameters {
     *
     *     @var string $token Authentication token. Requires scope: `identity.basic`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsersIdentityGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usersIdentity(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\UsersIdentity($queryParameters), $fetch);
    }

    /**
     * Gets information about a user.
     *
     * @param array $queryParameters {
     *
     *     @var bool $include_locale Set this to `true` to receive the locale for this user. Defaults to `false`
     *     @var string $token Authentication token. Requires scope: `users:read`
     *     @var string $user User to get info on
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsersInfoGetResponse200|\JoliCode\Slack\Api\Model\UsersInfoGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usersInfo(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\UsersInfo($queryParameters), $fetch);
    }

    /**
     * Lists all users in a Slack team.
     *
     * @param array $queryParameters {
     *
     *     @var string $cursor Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     *     @var bool $include_locale Set this to `true` to receive the locale for users. Defaults to `false`
     *     @var int $limit The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the users list hasn't been reached. Providing no `limit` value will result in Slack attempting to deliver you the entire result set. If the collection is too large you may experience `limit_required` or HTTP 500 errors.
     *     @var string $token Authentication token. Requires scope: `users:read`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsersListGetResponse200|\JoliCode\Slack\Api\Model\UsersListGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usersList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\UsersList($queryParameters), $fetch);
    }

    /**
     * Find a user with an email address.
     *
     * @param array $queryParameters {
     *
     *     @var string $email An email address belonging to a user in the workspace
     *     @var string $token Authentication token. Requires scope: `users:read.email`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsersLookupByEmailGetResponse200|\JoliCode\Slack\Api\Model\UsersLookupByEmailGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usersLookupByEmail(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\UsersLookupByEmail($queryParameters), $fetch);
    }

    /**
     * Retrieves a user's profile information.
     *
     * @param array $queryParameters {
     *
     *     @var bool $include_labels Include labels for each ID in custom profile fields
     *     @var string $token Authentication token. Requires scope: `users.profile:read`
     *     @var string $user User to retrieve profile info for
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsersProfileGetGetResponse200|\JoliCode\Slack\Api\Model\UsersProfileGetGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usersProfileGet(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\UsersProfileGet($queryParameters), $fetch);
    }

    /**
     * Set the profile information for a user.
     *
     * @param array $formParameters {
     *
     *     @var string $name Name of a single key to set. Usable only if `profile` is not passed.
     *     @var string $profile Collection of key:value pairs presented as a URL-encoded JSON hash. At most 50 fields may be set. Each field name is limited to 255 characters.
     *     @var string $user ID of user to change. This argument may only be specified by team admins on paid teams.
     *     @var string $value Value to set a single key to. Usable only if `profile` is not passed.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `users.profile:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsersProfileSetPostResponse200|\JoliCode\Slack\Api\Model\UsersProfileSetPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usersProfileSet(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\UsersProfileSet($formParameters, $headerParameters), $fetch);
    }

    /**
     * Marked a user as active. Deprecated and non-functional.
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `users:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsersSetActivePostResponse200|\JoliCode\Slack\Api\Model\UsersSetActivePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usersSetActive(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\UsersSetActive($headerParameters), $fetch);
    }

    /**
     * Set the user profile photo.
     *
     * @param array $formParameters {
     *
     *     @var string $crop_w Width/height of crop box (always square)
     *     @var string $crop_x X coordinate of top-left corner of crop box
     *     @var string $crop_y Y coordinate of top-left corner of crop box
     *     @var string $image file contents via `multipart/form-data`
     *     @var string $token Authentication token. Requires scope: `users.profile:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsersSetPhotoPostResponse200|\JoliCode\Slack\Api\Model\UsersSetPhotoPostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usersSetPhoto(array $formParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\UsersSetPhoto($formParameters), $fetch);
    }

    /**
     * Manually sets user presence.
     *
     * @param array $formParameters {
     *
     *     @var string $presence Either `auto` or `away`
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `users:write`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\UsersSetPresencePostResponse200|\JoliCode\Slack\Api\Model\UsersSetPresencePostResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function usersSetPresence(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\UsersSetPresence($formParameters, $headerParameters), $fetch);
    }

    /**
     * Open a view for a user.
     *
     * @param array $queryParameters {
     *
     *     @var string $trigger_id exchange a trigger to post to the user
     *     @var string $view A [view payload](/reference/surfaces/views). This must be a JSON-encoded string.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `none`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ViewsOpenGetResponse200|\JoliCode\Slack\Api\Model\ViewsOpenGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function viewsOpen(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ViewsOpen($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Publish a static view for a User.
     *
     * @param array $queryParameters {
     *
     *     @var string $hash a string that represents view state to protect against possible race conditions
     *     @var string $user_id `id` of the user you want publish a view to
     *     @var string $view A [view payload](/reference/surfaces/views). This must be a JSON-encoded string.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `none`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ViewsPublishGetResponse200|\JoliCode\Slack\Api\Model\ViewsPublishGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function viewsPublish(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ViewsPublish($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Push a view onto the stack of a root view.
     *
     * @param array $queryParameters {
     *
     *     @var string $trigger_id exchange a trigger to post to the user
     *     @var string $view A [view payload](/reference/surfaces/views). This must be a JSON-encoded string.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `none`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ViewsPushGetResponse200|\JoliCode\Slack\Api\Model\ViewsPushGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function viewsPush(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ViewsPush($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Update an existing view.
     *
     * @param array $queryParameters {
     *
     *     @var string $external_id A unique identifier of the view set by the developer. Must be unique for all views on a team. Max length of 255 characters. Either `view_id` or `external_id` is required.
     *     @var string $hash a string that represents view state to protect against possible race conditions
     *     @var string $view A [view object](/reference/surfaces/views). This must be a JSON-encoded string.
     *     @var string $view_id A unique identifier of the view to be updated. Either `view_id` or `external_id` is required.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `none`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\ViewsUpdateGetResponse200|\JoliCode\Slack\Api\Model\ViewsUpdateGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function viewsUpdate(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\ViewsUpdate($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Indicate that an app's step in a workflow completed execution.
     *
     * @param array $queryParameters {
     *
     *     @var string $outputs Key-value object of outputs from your step. Keys of this object reflect the configured `key` properties of your [`outputs`](/reference/workflows/workflow_step#output) array from your `workflow_step` object.
     *     @var string $workflow_step_execute_id Context identifier that maps to the correct workflow step execution.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `workflow.steps:execute`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\WorkflowsStepCompletedGetResponse200|\JoliCode\Slack\Api\Model\WorkflowsStepCompletedGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function workflowsStepCompleted(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\WorkflowsStepCompleted($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Indicate that an app's step in a workflow failed to execute.
     *
     * @param array $queryParameters {
     *
     *     @var string $error a JSON-based object with a `message` property that should contain a human readable error message
     *     @var string $workflow_step_execute_id Context identifier that maps to the correct workflow step execution.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `workflow.steps:execute`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\WorkflowsStepFailedGetResponse200|\JoliCode\Slack\Api\Model\WorkflowsStepFailedGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function workflowsStepFailed(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\WorkflowsStepFailed($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Update the configuration for a workflow extension step.
     *
     * @param array $queryParameters {
     *
     *     @var string $inputs A JSON key-value map of inputs required from a user during configuration. This is the data your app expects to receive when the workflow step starts. **Please note**: the embedded variable format is set and replaced by the workflow system. You cannot create custom variables that will be replaced at runtime. [Read more about variables in workflow steps here](/workflows/steps#variables).
     *     @var string $outputs An JSON array of output objects used during step execution. This is the data your app agrees to provide when your workflow step was executed.
     *     @var string $step_image_url an optional field that can be used to override app image that is shown in the Workflow Builder
     *     @var string $step_name an optional field that can be used to override the step name that is shown in the Workflow Builder
     *     @var string $workflow_step_edit_id A context identifier provided with `view_submission` payloads used to call back to `workflows.updateStep`.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires scope: `workflow.steps:execute`
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Slack\Api\Model\WorkflowsUpdateStepGetResponse200|\JoliCode\Slack\Api\Model\WorkflowsUpdateStepGetResponsedefault|\Psr\Http\Message\ResponseInterface|null
     */
    public function workflowsUpdateStep(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Slack\Api\Endpoint\WorkflowsUpdateStep($queryParameters, $headerParameters), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://slack.com/api');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (\count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer([new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \JoliCode\Slack\Api\Normalizer\JaneObjectNormalizer()], [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
