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

class Client extends Runtime\Client\Client
{
    /**
     * Approve an app for installation on a workspace.
     *
     * @param array{
     *    "app_id"?: string, //The id of the app to approve.
     *    "request_id"?: string, //The id of the request to approve.
     *    "team_id"?: string,
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.apps:write`
     * } $headerParameters
     *
     * @return Model\AdminAppsApprovePostResponse200|Model\AdminAppsApprovePostResponsedefault
     */
    public function adminAppsApprove(array $formParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminAppsApprove($formParameters, $headerParameters));
    }

    /**
     * List approved apps for an org or workspace.
     *
     * @param array{
     *    "cursor"?: string, //Set `cursor` to `next_cursor` returned by the previous call to list items in the next page
     *    "enterprise_id"?: string,
     *    "limit"?: int, //The maximum number of items to return. Must be between 1 - 1000 both inclusive.
     *    "team_id"?: string,
     *    "token"?: string, //Authentication token. Requires scope: `admin.apps:read`
     * } $queryParameters
     *
     * @return Model\AdminAppsApprovedListGetResponse200|Model\AdminAppsApprovedListGetResponsedefault
     */
    public function adminAppsApprovedList(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminAppsApprovedList($queryParameters));
    }

    /**
     * List app requests for a team/workspace.
     *
     * @param array{
     *    "cursor"?: string, //Set `cursor` to `next_cursor` returned by the previous call to list items in the next page
     *    "limit"?: int, //The maximum number of items to return. Must be between 1 - 1000 both inclusive.
     *    "team_id"?: string,
     *    "token"?: string, //Authentication token. Requires scope: `admin.apps:read`
     * } $queryParameters
     *
     * @return Model\AdminAppsRequestsListGetResponse200|Model\AdminAppsRequestsListGetResponsedefault
     */
    public function adminAppsRequestsList(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminAppsRequestsList($queryParameters));
    }

    /**
     * Restrict an app for installation on a workspace.
     *
     * @param array{
     *    "app_id"?: string, //The id of the app to restrict.
     *    "request_id"?: string, //The id of the request to restrict.
     *    "team_id"?: string,
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.apps:write`
     * } $headerParameters
     *
     * @return Model\AdminAppsRestrictPostResponse200|Model\AdminAppsRestrictPostResponsedefault
     */
    public function adminAppsRestrict(array $formParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminAppsRestrict($formParameters, $headerParameters));
    }

    /**
     * List restricted apps for an org or workspace.
     *
     * @param array{
     *    "cursor"?: string, //Set `cursor` to `next_cursor` returned by the previous call to list items in the next page
     *    "enterprise_id"?: string,
     *    "limit"?: int, //The maximum number of items to return. Must be between 1 - 1000 both inclusive.
     *    "team_id"?: string,
     *    "token"?: string, //Authentication token. Requires scope: `admin.apps:read`
     * } $queryParameters
     *
     * @return Model\AdminAppsRestrictedListGetResponse200|Model\AdminAppsRestrictedListGetResponsedefault
     */
    public function adminAppsRestrictedList(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminAppsRestrictedList($queryParameters));
    }

    /**
     * Archive a public or private channel.
     *
     * @param array{
     *    "channel_id": string, //The channel to archive.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.conversations:write`
     * } $headerParameters
     *
     * @return Model\AdminConversationsArchivePostResponse200|Model\AdminConversationsArchivePostResponsedefault
     */
    public function adminConversationsArchive(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminConversationsArchive($formParameters, $headerParameters));
    }

    /**
     * Convert a public channel to a private channel.
     *
     * @param array{
     *    "channel_id": string, //The channel to convert to private.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.conversations:write`
     * } $headerParameters
     *
     * @return Model\AdminConversationsConvertToPrivatePostResponse200|Model\AdminConversationsConvertToPrivatePostResponsedefault
     */
    public function adminConversationsConvertToPrivate(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminConversationsConvertToPrivate($formParameters, $headerParameters));
    }

    /**
     * Create a public or private channel-based conversation.
     *
     * @param array{
     *    "description"?: string, //Description of the public or private channel to create.
     *    "is_private": bool, //When `true`, creates a private channel instead of a public channel
     *    "name": string, //Name of the public or private channel to create.
     *    "org_wide"?: bool, //When `true`, the channel will be available org-wide. Note: if the channel is not `org_wide=true`, you must specify a `team_id` for this channel
     *    "team_id"?: string, //The workspace to create the channel in. Note: this argument is required unless you set `org_wide=true`.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.conversations:write`
     * } $headerParameters
     *
     * @return Model\AdminConversationsCreatePostResponse200|Model\AdminConversationsCreatePostResponsedefault
     */
    public function adminConversationsCreate(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminConversationsCreate($formParameters, $headerParameters));
    }

    /**
     * Delete a public or private channel.
     *
     * @param array{
     *    "channel_id": string, //The channel to delete.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.conversations:write`
     * } $headerParameters
     *
     * @return Model\AdminConversationsDeletePostResponse200|Model\AdminConversationsDeletePostResponsedefault
     */
    public function adminConversationsDelete(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminConversationsDelete($formParameters, $headerParameters));
    }

    /**
     * Disconnect a connected channel from one or more workspaces.
     *
     * @param array{
     *    "channel_id": string, //The channel to be disconnected from some workspaces.
     *    "leaving_team_ids"?: string, //The team to be removed from the channel. Currently only a single team id can be specified.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.conversations:write`
     * } $headerParameters
     *
     * @return Model\AdminConversationsDisconnectSharedPostResponse200|Model\AdminConversationsDisconnectSharedPostResponsedefault
     */
    public function adminConversationsDisconnectShared(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminConversationsDisconnectShared($formParameters, $headerParameters));
    }

    /**
     * List all disconnected channels—i.e., channels that were once connected to other workspaces and then disconnected—and the corresponding original channel IDs for key revocation with EKM.
     *
     * @param array{
     *    "channel_ids"?: string, //A comma-separated list of channels to filter to.
     *    "cursor"?: string, //Set `cursor` to `next_cursor` returned by the previous call to list items in the next page.
     *    "limit"?: int, //The maximum number of items to return. Must be between 1 - 1000 both inclusive.
     *    "team_ids"?: string, //A comma-separated list of the workspaces to which the channels you would like returned belong.
     *    "token"?: string, //Authentication token. Requires scope: `admin.conversations:read`
     * } $queryParameters
     *
     * @return Model\AdminConversationsEkmListOriginalConnectedChannelInfoGetResponse200|Model\AdminConversationsEkmListOriginalConnectedChannelInfoGetResponsedefault
     */
    public function adminConversationsEkmListOriginalConnectedChannelInfo(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminConversationsEkmListOriginalConnectedChannelInfo($queryParameters));
    }

    /**
     * Get conversation preferences for a public or private channel.
     *
     * @param array{
     *    "channel_id": string, //The channel to get preferences for.
     * } $queryParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.conversations:read`
     * } $headerParameters
     *
     * @return Model\AdminConversationsGetConversationPrefsGetResponse200|Model\AdminConversationsGetConversationPrefsGetResponsedefault
     */
    public function adminConversationsGetConversationPrefs(array $queryParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminConversationsGetConversationPrefs($queryParameters, $headerParameters));
    }

    /**
     * Get all the workspaces a given public or private channel is connected to within this Enterprise org.
     *
     * @param array{
     *    "channel_id": string, //The channel to determine connected workspaces within the organization for.
     *    "cursor"?: string, //Set `cursor` to `next_cursor` returned by the previous call to list items in the next page
     *    "limit"?: int, //The maximum number of items to return. Must be between 1 - 1000 both inclusive.
     * } $queryParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.conversations:read`
     * } $headerParameters
     *
     * @return Model\AdminConversationsGetTeamsGetResponse200|Model\AdminConversationsGetTeamsGetResponsedefault
     */
    public function adminConversationsGetTeams(array $queryParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminConversationsGetTeams($queryParameters, $headerParameters));
    }

    /**
     * Invite a user to a public or private channel.
     *
     * @param array{
     *    "channel_id": string, //The channel that the users will be invited to.
     *    "user_ids": string, //The users to invite.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.conversations:write`
     * } $headerParameters
     *
     * @return Model\AdminConversationsInvitePostResponse200|Model\AdminConversationsInvitePostResponsedefault
     */
    public function adminConversationsInvite(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminConversationsInvite($formParameters, $headerParameters));
    }

    /**
     * Rename a public or private channel.
     *
     * @param array{
     *    "channel_id": string, //The channel to rename.
     *    "name": string,
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.conversations:write`
     * } $headerParameters
     *
     * @return Model\AdminConversationsRenamePostResponse200|Model\AdminConversationsRenamePostResponsedefault
     */
    public function adminConversationsRename(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminConversationsRename($formParameters, $headerParameters));
    }

    /**
     * Add an allowlist of IDP groups for accessing a channel.
     *
     * @param array{
     *    "channel_id": string, //The channel to link this group to.
     *    "group_id": string, //The [IDP Group](https://slack.com/help/articles/115001435788-Connect-identity-provider-groups-to-your-Enterprise-Grid-org) ID to be an allowlist for the private channel.
     *    "team_id"?: string, //The workspace where the channel exists. This argument is required for channels only tied to one workspace, and optional for channels that are shared across an organization.
     *    "token"?: string, //Authentication token. Requires scope: `admin.conversations:write`
     * } $formParameters
     *
     * @return Model\AdminConversationsRestrictAccessAddGroupPostResponse200|Model\AdminConversationsRestrictAccessAddGroupPostResponsedefault
     */
    public function adminConversationsRestrictAccessAddGroup(array $formParameters)
    {
        return $this->executeEndpoint(new Endpoint\AdminConversationsRestrictAccessAddGroup($formParameters));
    }

    /**
     * List all IDP Groups linked to a channel.
     *
     * @param array{
     *    "channel_id": string,
     *    "team_id"?: string, //The workspace where the channel exists. This argument is required for channels only tied to one workspace, and optional for channels that are shared across an organization.
     *    "token"?: string, //Authentication token. Requires scope: `admin.conversations:read`
     * } $queryParameters
     *
     * @return Model\AdminConversationsRestrictAccessListGroupsGetResponse200|Model\AdminConversationsRestrictAccessListGroupsGetResponsedefault
     */
    public function adminConversationsRestrictAccessListGroups(array $queryParameters)
    {
        return $this->executeEndpoint(new Endpoint\AdminConversationsRestrictAccessListGroups($queryParameters));
    }

    /**
     * Remove a linked IDP group linked from a private channel.
     *
     * @param array{
     *    "channel_id": string, //The channel to remove the linked group from.
     *    "group_id": string, //The [IDP Group](https://slack.com/help/articles/115001435788-Connect-identity-provider-groups-to-your-Enterprise-Grid-org) ID to remove from the private channel.
     *    "team_id": string, //The workspace where the channel exists. This argument is required for channels only tied to one workspace, and optional for channels that are shared across an organization.
     *    "token"?: string, //Authentication token. Requires scope: `admin.conversations:write`
     * } $formParameters
     *
     * @return Model\AdminConversationsRestrictAccessRemoveGroupPostResponse200|Model\AdminConversationsRestrictAccessRemoveGroupPostResponsedefault
     */
    public function adminConversationsRestrictAccessRemoveGroup(array $formParameters)
    {
        return $this->executeEndpoint(new Endpoint\AdminConversationsRestrictAccessRemoveGroup($formParameters));
    }

    /**
     * Search for public or private channels in an Enterprise organization.
     *
     * @param array{
     *    "cursor"?: string, //Set `cursor` to `next_cursor` returned by the previous call to list items in the next page.
     *    "limit"?: int, //Maximum number of items to be returned. Must be between 1 - 20 both inclusive. Default is 10.
     *    "query"?: string, //Name of the the channel to query by.
     *    "search_channel_types"?: string, //The type of channel to include or exclude in the search. For example `private` will search private channels, while `private_exclude` will exclude them. For a full list of types, check the [Types section](#types).
     *    "sort"?: string, //Possible values are `relevant` (search ranking based on what we think is closest), `name` (alphabetical), `member_count` (number of users in the channel), and `created` (date channel was created). You can optionally pair this with the `sort_dir` arg to change how it is sorted
     *    "sort_dir"?: string, //Sort direction. Possible values are `asc` for ascending order like (1, 2, 3) or (a, b, c), and `desc` for descending order like (3, 2, 1) or (c, b, a)
     *    "team_ids"?: string, //Comma separated string of team IDs, signifying the workspaces to search through.
     * } $queryParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.conversations:read`
     * } $headerParameters
     *
     * @return Model\AdminConversationsSearchGetResponse200|Model\AdminConversationsSearchGetResponsedefault
     */
    public function adminConversationsSearch(array $queryParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminConversationsSearch($queryParameters, $headerParameters));
    }

    /**
     * Set the posting permissions for a public or private channel.
     *
     * @param array{
     *    "channel_id": string, //The channel to set the prefs for
     *    "prefs": string, //The prefs for this channel in a stringified JSON format.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.conversations:write`
     * } $headerParameters
     *
     * @return Model\AdminConversationsSetConversationPrefsPostResponse200|Model\AdminConversationsSetConversationPrefsPostResponsedefault
     */
    public function adminConversationsSetConversationPrefs(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminConversationsSetConversationPrefs($formParameters, $headerParameters));
    }

    /**
     * Set the workspaces in an Enterprise grid org that connect to a public or private channel.
     *
     * @param array{
     *    "channel_id": string, //The encoded `channel_id` to add or remove to workspaces.
     *    "org_channel"?: bool, //True if channel has to be converted to an org channel
     *    "target_team_ids"?: string, //A comma-separated list of workspaces to which the channel should be shared. Not required if the channel is being shared org-wide.
     *    "team_id"?: string, //The workspace to which the channel belongs. Omit this argument if the channel is a cross-workspace shared channel.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.conversations:write`
     * } $headerParameters
     *
     * @return Model\AdminConversationsSetTeamsPostResponse200|Model\AdminConversationsSetTeamsPostResponsedefault
     */
    public function adminConversationsSetTeams(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminConversationsSetTeams($formParameters, $headerParameters));
    }

    /**
     * Unarchive a public or private channel.
     *
     * @param array{
     *    "channel_id": string, //The channel to unarchive.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.conversations:write`
     * } $headerParameters
     *
     * @return Model\AdminConversationsUnarchivePostResponse200|Model\AdminConversationsUnarchivePostResponsedefault
     */
    public function adminConversationsUnarchive(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminConversationsUnarchive($formParameters, $headerParameters));
    }

    /**
     * Add an emoji.
     *
     * @param array{
     *    "name": string, //The name of the emoji to be removed. Colons (`:myemoji:`) around the value are not required, although they may be included.
     *    "token"?: string, //Authentication token. Requires scope: `admin.teams:write`
     *    "url": string, //The URL of a file to use as an image for the emoji. Square images under 128KB and with transparent backgrounds work best.
     * } $formParameters
     *
     * @return Model\AdminEmojiAddPostResponse200|Model\AdminEmojiAddPostResponsedefault
     */
    public function adminEmojiAdd(array $formParameters)
    {
        return $this->executeEndpoint(new Endpoint\AdminEmojiAdd($formParameters));
    }

    /**
     * Add an emoji alias.
     *
     * @param array{
     *    "alias_for": string, //The alias of the emoji.
     *    "name": string, //The name of the emoji to be aliased. Colons (`:myemoji:`) around the value are not required, although they may be included.
     *    "token"?: string, //Authentication token. Requires scope: `admin.teams:write`
     * } $formParameters
     *
     * @return Model\AdminEmojiAddAliasPostResponse200|Model\AdminEmojiAddAliasPostResponsedefault
     */
    public function adminEmojiAddAlias(array $formParameters)
    {
        return $this->executeEndpoint(new Endpoint\AdminEmojiAddAlias($formParameters));
    }

    /**
     * List emoji for an Enterprise Grid organization.
     *
     * @param array{
     *    "cursor"?: string, //Set `cursor` to `next_cursor` returned by the previous call to list items in the next page
     *    "limit"?: int, //The maximum number of items to return. Must be between 1 - 1000 both inclusive.
     *    "token"?: string, //Authentication token. Requires scope: `admin.teams:read`
     * } $queryParameters
     *
     * @return Model\AdminEmojiListGetResponse200|Model\AdminEmojiListGetResponsedefault
     */
    public function adminEmojiList(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminEmojiList($queryParameters));
    }

    /**
     * Remove an emoji across an Enterprise Grid organization.
     *
     * @param array{
     *    "name": string, //The name of the emoji to be removed. Colons (`:myemoji:`) around the value are not required, although they may be included.
     *    "token"?: string, //Authentication token. Requires scope: `admin.teams:write`
     * } $formParameters
     *
     * @return Model\AdminEmojiRemovePostResponse200|Model\AdminEmojiRemovePostResponsedefault
     */
    public function adminEmojiRemove(array $formParameters)
    {
        return $this->executeEndpoint(new Endpoint\AdminEmojiRemove($formParameters));
    }

    /**
     * Rename an emoji.
     *
     * @param array{
     *    "name": string, //The name of the emoji to be renamed. Colons (`:myemoji:`) around the value are not required, although they may be included.
     *    "new_name": string, //The new name of the emoji.
     *    "token"?: string, //Authentication token. Requires scope: `admin.teams:write`
     * } $formParameters
     *
     * @return Model\AdminEmojiRenamePostResponse200|Model\AdminEmojiRenamePostResponsedefault
     */
    public function adminEmojiRename(array $formParameters)
    {
        return $this->executeEndpoint(new Endpoint\AdminEmojiRename($formParameters));
    }

    /**
     * Approve a workspace invite request.
     *
     * @param array{
     *    "invite_request_id": string, //ID of the request to invite.
     *    "team_id"?: string, //ID for the workspace where the invite request was made.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.invites:write`
     * } $headerParameters
     *
     * @return Model\AdminInviteRequestsApprovePostResponse200|Model\AdminInviteRequestsApprovePostResponsedefault
     */
    public function adminInviteRequestsApprove(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminInviteRequestsApprove($formParameters, $headerParameters));
    }

    /**
     * List all approved workspace invite requests.
     *
     * @param array{
     *    "cursor"?: string, //Value of the `next_cursor` field sent as part of the previous API response
     *    "limit"?: int, //The number of results that will be returned by the API on each invocation. Must be between 1 - 1000, both inclusive
     *    "team_id"?: string, //ID for the workspace where the invite requests were made.
     * } $queryParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.invites:read`
     * } $headerParameters
     *
     * @return Model\AdminInviteRequestsApprovedListGetResponse200|Model\AdminInviteRequestsApprovedListGetResponsedefault
     */
    public function adminInviteRequestsApprovedList(array $queryParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminInviteRequestsApprovedList($queryParameters, $headerParameters));
    }

    /**
     * List all denied workspace invite requests.
     *
     * @param array{
     *    "cursor"?: string, //Value of the `next_cursor` field sent as part of the previous api response
     *    "limit"?: int, //The number of results that will be returned by the API on each invocation. Must be between 1 - 1000 both inclusive
     *    "team_id"?: string, //ID for the workspace where the invite requests were made.
     * } $queryParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.invites:read`
     * } $headerParameters
     *
     * @return Model\AdminInviteRequestsDeniedListGetResponse200|Model\AdminInviteRequestsDeniedListGetResponsedefault
     */
    public function adminInviteRequestsDeniedList(array $queryParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminInviteRequestsDeniedList($queryParameters, $headerParameters));
    }

    /**
     * Deny a workspace invite request.
     *
     * @param array{
     *    "invite_request_id": string, //ID of the request to invite.
     *    "team_id"?: string, //ID for the workspace where the invite request was made.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.invites:write`
     * } $headerParameters
     *
     * @return Model\AdminInviteRequestsDenyPostResponse200|Model\AdminInviteRequestsDenyPostResponsedefault
     */
    public function adminInviteRequestsDeny(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminInviteRequestsDeny($formParameters, $headerParameters));
    }

    /**
     * List all pending workspace invite requests.
     *
     * @param array{
     *    "cursor"?: string, //Value of the `next_cursor` field sent as part of the previous API response
     *    "limit"?: int, //The number of results that will be returned by the API on each invocation. Must be between 1 - 1000, both inclusive
     *    "team_id"?: string, //ID for the workspace where the invite requests were made.
     * } $queryParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.invites:read`
     * } $headerParameters
     *
     * @return Model\AdminInviteRequestsListGetResponse200|Model\AdminInviteRequestsListGetResponsedefault
     */
    public function adminInviteRequestsList(array $queryParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminInviteRequestsList($queryParameters, $headerParameters));
    }

    /**
     * List all of the admins on a given workspace.
     *
     * @param array{
     *    "cursor"?: string, //Set `cursor` to `next_cursor` returned by the previous call to list items in the next page.
     *    "limit"?: int, //The maximum number of items to return.
     *    "team_id": string,
     *    "token"?: string, //Authentication token. Requires scope: `admin.teams:read`
     * } $queryParameters
     *
     * @return Model\AdminTeamsAdminsListGetResponse200|Model\AdminTeamsAdminsListGetResponsedefault
     */
    public function adminTeamsAdminsList(array $queryParameters)
    {
        return $this->executeEndpoint(new Endpoint\AdminTeamsAdminsList($queryParameters));
    }

    /**
     * Create an Enterprise team.
     *
     * @param array{
     *    "team_description"?: string, //Description for the team.
     *    "team_discoverability"?: string, //Who can join the team. A team's discoverability can be `open`, `closed`, `invite_only`, or `unlisted`.
     *    "team_domain": string, //Team domain (for example, slacksoftballteam).
     *    "team_name": string, //Team name (for example, Slack Softball Team).
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.teams:write`
     * } $headerParameters
     *
     * @return Model\AdminTeamsCreatePostResponse200|Model\AdminTeamsCreatePostResponsedefault
     */
    public function adminTeamsCreate(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminTeamsCreate($formParameters, $headerParameters));
    }

    /**
     * List all teams on an Enterprise organization.
     *
     * @param array{
     *    "cursor"?: string, //Set `cursor` to `next_cursor` returned by the previous call to list items in the next page.
     *    "limit"?: int, //The maximum number of items to return. Must be between 1 - 100 both inclusive.
     * } $queryParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.teams:read`
     * } $headerParameters
     *
     * @return Model\AdminTeamsListGetResponse200|Model\AdminTeamsListGetResponsedefault
     */
    public function adminTeamsList(array $queryParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminTeamsList($queryParameters, $headerParameters));
    }

    /**
     * List all of the owners on a given workspace.
     *
     * @param array{
     *    "cursor"?: string, //Set `cursor` to `next_cursor` returned by the previous call to list items in the next page.
     *    "limit"?: int, //The maximum number of items to return. Must be between 1 - 1000 both inclusive.
     *    "team_id": string,
     *    "token"?: string, //Authentication token. Requires scope: `admin.teams:read`
     * } $queryParameters
     *
     * @return Model\AdminTeamsOwnersListGetResponse200|Model\AdminTeamsOwnersListGetResponsedefault
     */
    public function adminTeamsOwnersList(array $queryParameters)
    {
        return $this->executeEndpoint(new Endpoint\AdminTeamsOwnersList($queryParameters));
    }

    /**
     * Fetch information about settings in a workspace.
     *
     * @param array{
     *    "team_id": string,
     * } $queryParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.teams:read`
     * } $headerParameters
     *
     * @return Model\AdminTeamsSettingsInfoGetResponse200|Model\AdminTeamsSettingsInfoGetResponsedefault
     */
    public function adminTeamsSettingsInfo(array $queryParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminTeamsSettingsInfo($queryParameters, $headerParameters));
    }

    /**
     * Set the default channels of a workspace.
     *
     * @param array{
     *    "channel_ids": string, //An array of channel IDs.
     *    "team_id": string, //ID for the workspace to set the default channel for.
     *    "token"?: string, //Authentication token. Requires scope: `admin.teams:write`
     * } $formParameters
     *
     * @return Model\AdminTeamsSettingsSetDefaultChannelsPostResponse200|Model\AdminTeamsSettingsSetDefaultChannelsPostResponsedefault
     */
    public function adminTeamsSettingsSetDefaultChannels(array $formParameters)
    {
        return $this->executeEndpoint(new Endpoint\AdminTeamsSettingsSetDefaultChannels($formParameters));
    }

    /**
     * Set the description of a given workspace.
     *
     * @param array{
     *    "description": string, //The new description for the workspace.
     *    "team_id": string, //ID for the workspace to set the description for.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.teams:write`
     * } $headerParameters
     *
     * @return Model\AdminTeamsSettingsSetDescriptionPostResponse200|Model\AdminTeamsSettingsSetDescriptionPostResponsedefault
     */
    public function adminTeamsSettingsSetDescription(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminTeamsSettingsSetDescription($formParameters, $headerParameters));
    }

    /**
     * An API method that allows admins to set the discoverability of a given workspace.
     *
     * @param array{
     *    "discoverability": string, //This workspace's discovery setting. It must be set to one of `open`, `invite_only`, `closed`, or `unlisted`.
     *    "team_id": string, //The ID of the workspace to set discoverability on.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.teams:write`
     * } $headerParameters
     *
     * @return Model\AdminTeamsSettingsSetDiscoverabilityPostResponse200|Model\AdminTeamsSettingsSetDiscoverabilityPostResponsedefault
     */
    public function adminTeamsSettingsSetDiscoverability(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminTeamsSettingsSetDiscoverability($formParameters, $headerParameters));
    }

    /**
     * Sets the icon of a workspace.
     *
     * @param array{
     *    "image_url": string, //Image URL for the icon
     *    "team_id": string, //ID for the workspace to set the icon for.
     *    "token"?: string, //Authentication token. Requires scope: `admin.teams:write`
     * } $formParameters
     *
     * @return Model\AdminTeamsSettingsSetIconPostResponse200|Model\AdminTeamsSettingsSetIconPostResponsedefault
     */
    public function adminTeamsSettingsSetIcon(array $formParameters)
    {
        return $this->executeEndpoint(new Endpoint\AdminTeamsSettingsSetIcon($formParameters));
    }

    /**
     * Set the name of a given workspace.
     *
     * @param array{
     *    "name": string, //The new name of the workspace.
     *    "team_id": string, //ID for the workspace to set the name for.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.teams:write`
     * } $headerParameters
     *
     * @return Model\AdminTeamsSettingsSetNamePostResponse200|Model\AdminTeamsSettingsSetNamePostResponsedefault
     */
    public function adminTeamsSettingsSetName(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminTeamsSettingsSetName($formParameters, $headerParameters));
    }

    /**
     * Add one or more default channels to an IDP group.
     *
     * @param array{
     *    "channel_ids": string, //Comma separated string of channel IDs.
     *    "team_id"?: string, //The workspace to add default channels in.
     *    "usergroup_id": string, //ID of the IDP group to add default channels for.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.usergroups:write`
     * } $headerParameters
     *
     * @return Model\AdminUsergroupsAddChannelsPostResponse200|Model\AdminUsergroupsAddChannelsPostResponsedefault
     */
    public function adminUsergroupsAddChannels(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminUsergroupsAddChannels($formParameters, $headerParameters));
    }

    /**
     * Associate one or more default workspaces with an organization-wide IDP group.
     *
     * @param array{
     *    "auto_provision"?: bool, //When `true`, this method automatically creates new workspace accounts for the IDP group members.
     *    "team_ids": string, //A comma separated list of encoded team (workspace) IDs. Each workspace *MUST* belong to the organization associated with the token.
     *    "usergroup_id": string, //An encoded usergroup (IDP Group) ID.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.teams:write`
     * } $headerParameters
     *
     * @return Model\AdminUsergroupsAddTeamsPostResponse200|Model\AdminUsergroupsAddTeamsPostResponsedefault
     */
    public function adminUsergroupsAddTeams(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminUsergroupsAddTeams($formParameters, $headerParameters));
    }

    /**
     * List the channels linked to an org-level IDP group (user group).
     *
     * @param array{
     *    "include_num_members"?: bool, //Flag to include or exclude the count of members per channel.
     *    "team_id"?: string, //ID of the the workspace.
     *    "usergroup_id": string, //ID of the IDP group to list default channels for.
     * } $queryParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.usergroups:read`
     * } $headerParameters
     *
     * @return Model\AdminUsergroupsListChannelsGetResponse200|Model\AdminUsergroupsListChannelsGetResponsedefault
     */
    public function adminUsergroupsListChannels(array $queryParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminUsergroupsListChannels($queryParameters, $headerParameters));
    }

    /**
     * Remove one or more default channels from an org-level IDP group (user group).
     *
     * @param array{
     *    "channel_ids": string, //Comma-separated string of channel IDs
     *    "usergroup_id": string, //ID of the IDP Group
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.usergroups:write`
     * } $headerParameters
     *
     * @return Model\AdminUsergroupsRemoveChannelsPostResponse200|Model\AdminUsergroupsRemoveChannelsPostResponsedefault
     */
    public function adminUsergroupsRemoveChannels(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminUsergroupsRemoveChannels($formParameters, $headerParameters));
    }

    /**
     * Add an Enterprise user to a workspace.
     *
     * @param array{
     *    "channel_ids"?: string, //Comma separated values of channel IDs to add user in the new workspace.
     *    "is_restricted"?: bool, //True if user should be added to the workspace as a guest.
     *    "is_ultra_restricted"?: bool, //True if user should be added to the workspace as a single-channel guest.
     *    "team_id": string, //The ID (`T1234`) of the workspace.
     *    "user_id": string, //The ID of the user to add to the workspace.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.users:write`
     * } $headerParameters
     *
     * @return Model\AdminUsersAssignPostResponse200|Model\AdminUsersAssignPostResponsedefault
     */
    public function adminUsersAssign(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminUsersAssign($formParameters, $headerParameters));
    }

    /**
     * Invite a user to a workspace.
     *
     * @param array{
     *    "channel_ids": string, //A comma-separated list of `channel_id`s for this user to join. At least one channel is required.
     *    "custom_message"?: string, //An optional message to send to the user in the invite email.
     *    "email": string, //The email address of the person to invite.
     *    "guest_expiration_ts"?: string, //Timestamp when guest account should be disabled. Only include this timestamp if you are inviting a guest user and you want their account to expire on a certain date.
     *    "is_restricted"?: bool, //Is this user a multi-channel guest user? (default: false)
     *    "is_ultra_restricted"?: bool, //Is this user a single channel guest user? (default: false)
     *    "real_name"?: string, //Full name of the user.
     *    "resend"?: bool, //Allow this invite to be resent in the future if a user has not signed up yet. (default: false)
     *    "team_id": string, //The ID (`T1234`) of the workspace.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.users:write`
     * } $headerParameters
     *
     * @return Model\AdminUsersInvitePostResponse200|Model\AdminUsersInvitePostResponsedefault
     */
    public function adminUsersInvite(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminUsersInvite($formParameters, $headerParameters));
    }

    /**
     * List users on a workspace.
     *
     * @param array{
     *    "cursor"?: string, //Set `cursor` to `next_cursor` returned by the previous call to list items in the next page.
     *    "limit"?: int, //Limit for how many users to be retrieved per page
     *    "team_id": string, //The ID (`T1234`) of the workspace.
     * } $queryParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.users:read`
     * } $headerParameters
     *
     * @return Model\AdminUsersListGetResponse200|Model\AdminUsersListGetResponsedefault
     */
    public function adminUsersList(array $queryParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminUsersList($queryParameters, $headerParameters));
    }

    /**
     * Remove a user from a workspace.
     *
     * @param array{
     *    "team_id": string, //The ID (`T1234`) of the workspace.
     *    "user_id": string, //The ID of the user to remove.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.users:write`
     * } $headerParameters
     *
     * @return Model\AdminUsersRemovePostResponse200|Model\AdminUsersRemovePostResponsedefault
     */
    public function adminUsersRemove(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminUsersRemove($formParameters, $headerParameters));
    }

    /**
     * Invalidate a single session for a user by session_id.
     *
     * @param array{
     *    "session_id": int,
     *    "team_id": string, //ID of the team that the session belongs to
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.users:write`
     * } $headerParameters
     *
     * @return Model\AdminUsersSessionInvalidatePostResponse200|Model\AdminUsersSessionInvalidatePostResponsedefault
     */
    public function adminUsersSessionInvalidate(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminUsersSessionInvalidate($formParameters, $headerParameters));
    }

    /**
     * Wipes all valid sessions on all devices for a given user.
     *
     * @param array{
     *    "mobile_only"?: bool, //Only expire mobile sessions (default: false)
     *    "user_id": string, //The ID of the user to wipe sessions for
     *    "web_only"?: bool, //Only expire web sessions (default: false)
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.users:write`
     * } $headerParameters
     *
     * @return Model\AdminUsersSessionResetPostResponse200|Model\AdminUsersSessionResetPostResponsedefault
     */
    public function adminUsersSessionReset(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminUsersSessionReset($formParameters, $headerParameters));
    }

    /**
     * Set an existing guest, regular user, or owner to be an admin user.
     *
     * @param array{
     *    "team_id": string, //The ID (`T1234`) of the workspace.
     *    "user_id": string, //The ID of the user to designate as an admin.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.users:write`
     * } $headerParameters
     *
     * @return Model\AdminUsersSetAdminPostResponse200|Model\AdminUsersSetAdminPostResponsedefault
     */
    public function adminUsersSetAdmin(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminUsersSetAdmin($formParameters, $headerParameters));
    }

    /**
     * Set an expiration for a guest user.
     *
     * @param array{
     *    "expiration_ts": int, //Timestamp when guest account should be disabled.
     *    "team_id": string, //The ID (`T1234`) of the workspace.
     *    "user_id": string, //The ID of the user to set an expiration for.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.users:write`
     * } $headerParameters
     *
     * @return Model\AdminUsersSetExpirationPostResponse200|Model\AdminUsersSetExpirationPostResponsedefault
     */
    public function adminUsersSetExpiration(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminUsersSetExpiration($formParameters, $headerParameters));
    }

    /**
     * Set an existing guest, regular user, or admin user to be a workspace owner.
     *
     * @param array{
     *    "team_id": string, //The ID (`T1234`) of the workspace.
     *    "user_id": string, //Id of the user to promote to owner.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.users:write`
     * } $headerParameters
     *
     * @return Model\AdminUsersSetOwnerPostResponse200|Model\AdminUsersSetOwnerPostResponsedefault
     */
    public function adminUsersSetOwner(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminUsersSetOwner($formParameters, $headerParameters));
    }

    /**
     * Set an existing guest user, admin user, or owner to be a regular user.
     *
     * @param array{
     *    "team_id": string, //The ID (`T1234`) of the workspace.
     *    "user_id": string, //The ID of the user to designate as a regular user.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin.users:write`
     * } $headerParameters
     *
     * @return Model\AdminUsersSetRegularPostResponse200|Model\AdminUsersSetRegularPostResponsedefault
     */
    public function adminUsersSetRegular(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AdminUsersSetRegular($formParameters, $headerParameters));
    }

    /**
     * Checks API calling code.
     *
     * @param array{
     *    "error"?: string, //Error response to return
     *    "foo"?: string, //example property to return
     * } $queryParameters
     *
     * @return Model\ApiTestGetResponse200|Model\ApiTestGetResponsedefault
     */
    public function apiTest(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ApiTest($queryParameters));
    }

    /**
     * Get a list of authorizations for the given event context. Each authorization represents an app installation that the event is visible to.
     *
     * @param array{
     *    "cursor"?: string,
     *    "event_context": string,
     *    "limit"?: int,
     * } $queryParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `authorizations:read`
     * } $headerParameters
     *
     * @return Model\AppsEventAuthorizationsListGetResponse200|Model\AppsEventAuthorizationsListGetResponsedefault
     */
    public function appsEventAuthorizationsList(array $queryParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AppsEventAuthorizationsList($queryParameters, $headerParameters));
    }

    /**
     * Returns list of permissions this app has on a team.
     *
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `none`
     * } $queryParameters
     *
     * @return Model\AppsPermissionsInfoGetResponse200|Model\AppsPermissionsInfoGetResponsedefault
     */
    public function appsPermissionsInfo(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AppsPermissionsInfo($queryParameters));
    }

    /**
     * Allows an app to request additional scopes.
     *
     * @param array{
     *    "scopes": string, //A comma separated list of scopes to request for
     *    "token"?: string, //Authentication token. Requires scope: `none`
     *    "trigger_id": string, //Token used to trigger the permissions API
     * } $queryParameters
     *
     * @return Model\AppsPermissionsRequestGetResponse200|Model\AppsPermissionsRequestGetResponsedefault
     */
    public function appsPermissionsRequest(array $queryParameters)
    {
        return $this->executeEndpoint(new Endpoint\AppsPermissionsRequest($queryParameters));
    }

    /**
     * Returns list of resource grants this app has on a team.
     *
     * @param array{
     *    "cursor"?: string, //Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     *    "limit"?: int, //The maximum number of items to return.
     *    "token"?: string, //Authentication token. Requires scope: `none`
     * } $queryParameters
     *
     * @return Model\AppsPermissionsResourcesListGetResponse200|Model\AppsPermissionsResourcesListGetResponsedefault
     */
    public function appsPermissionsResourcesList(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AppsPermissionsResourcesList($queryParameters));
    }

    /**
     * Returns list of scopes this app has on a team.
     *
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `none`
     * } $queryParameters
     *
     * @return Model\AppsPermissionsScopesListGetResponse200|Model\AppsPermissionsScopesListGetResponsedefault
     */
    public function appsPermissionsScopesList(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AppsPermissionsScopesList($queryParameters));
    }

    /**
     * Returns list of user grants and corresponding scopes this app has on a team.
     *
     * @param array{
     *    "cursor"?: string, //Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     *    "limit"?: int, //The maximum number of items to return.
     *    "token"?: string, //Authentication token. Requires scope: `none`
     * } $queryParameters
     *
     * @return Model\AppsPermissionsUsersListGetResponse200|Model\AppsPermissionsUsersListGetResponsedefault
     */
    public function appsPermissionsUsersList(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AppsPermissionsUsersList($queryParameters));
    }

    /**
     * Enables an app to trigger a permissions modal to grant an app access to a user access scope.
     *
     * @param array{
     *    "scopes": string, //A comma separated list of user scopes to request for
     *    "token"?: string, //Authentication token. Requires scope: `none`
     *    "trigger_id": string, //Token used to trigger the request
     *    "user": string, //The user this scope is being requested for
     * } $queryParameters
     *
     * @return Model\AppsPermissionsUsersRequestGetResponse200|Model\AppsPermissionsUsersRequestGetResponsedefault
     */
    public function appsPermissionsUsersRequest(array $queryParameters)
    {
        return $this->executeEndpoint(new Endpoint\AppsPermissionsUsersRequest($queryParameters));
    }

    /**
     * Uninstalls your app from a workspace.
     *
     * @param array{
     *    "client_id"?: string, //Issued when you created your application.
     *    "client_secret"?: string, //Issued when you created your application.
     *    "token"?: string, //Authentication token. Requires scope: `none`
     * } $queryParameters
     *
     * @return Model\AppsUninstallGetResponse200|Model\AppsUninstallGetResponsedefault
     */
    public function appsUninstall(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AppsUninstall($queryParameters));
    }

    /**
     * Revokes a token.
     *
     * @param array{
     *    "test"?: bool, //Setting this parameter to `1` triggers a _testing mode_ where the specified token will not actually be revoked.
     *    "token"?: string, //Authentication token. Requires scope: `none`
     * } $queryParameters
     *
     * @return Model\AuthRevokeGetResponse200|Model\AuthRevokeGetResponsedefault
     */
    public function authRevoke(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AuthRevoke($queryParameters));
    }

    /**
     * Checks authentication & identity.
     *
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `none`
     * } $headerParameters
     *
     * @return Model\AuthTestGetResponse200|Model\AuthTestGetResponsedefault
     */
    public function authTest(array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\AuthTest($headerParameters));
    }

    /**
     * Gets information about a bot user.
     *
     * @param array{
     *    "bot"?: string, //Bot user to get info on
     *    "token"?: string, //Authentication token. Requires scope: `users:read`
     * } $queryParameters
     *
     * @return Model\BotsInfoGetResponse200|Model\BotsInfoGetResponsedefault
     */
    public function botsInfo(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\BotsInfo($queryParameters));
    }

    /**
     * Registers a new Call.
     *
     * @param array{
     *    "created_by"?: string, //The valid Slack user ID of the user who created this Call. When this method is called with a user token, the `created_by` field is optional and defaults to the authed user of the token. Otherwise, the field is required.
     *    "date_start"?: int, //Call start time in UTC UNIX timestamp format
     *    "desktop_app_join_url"?: string, //When supplied, available Slack clients will attempt to directly launch the 3rd-party Call with this URL.
     *    "external_display_id"?: string, //An optional, human-readable ID supplied by the 3rd-party Call provider. If supplied, this ID will be displayed in the Call object.
     *    "external_unique_id": string, //An ID supplied by the 3rd-party Call provider. It must be unique across all Calls from that service.
     *    "join_url": string, //The URL required for a client to join the Call.
     *    "title"?: string, //The name of the Call.
     *    "users"?: string, //The list of users to register as participants in the Call. [Read more on how to specify users here](/apis/calls#users).
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `calls:write`
     * } $headerParameters
     *
     * @return Model\CallsAddPostResponse200|Model\CallsAddPostResponsedefault
     */
    public function callsAdd(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\CallsAdd($formParameters, $headerParameters));
    }

    /**
     * Ends a Call.
     *
     * @param array{
     *    "duration"?: int, //Call duration in seconds
     *    "id": string, //`id` returned when registering the call using the [`calls.add`](/methods/calls.add) method.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `calls:write`
     * } $headerParameters
     *
     * @return Model\CallsEndPostResponse200|Model\CallsEndPostResponsedefault
     */
    public function callsEnd(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\CallsEnd($formParameters, $headerParameters));
    }

    /**
     * Returns information about a Call.
     *
     * @param array{
     *    "id": string, //`id` of the Call returned by the [`calls.add`](/methods/calls.add) method.
     * } $queryParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `calls:read`
     * } $headerParameters
     *
     * @return Model\CallsInfoGetResponse200|Model\CallsInfoGetResponsedefault
     */
    public function callsInfo(array $queryParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\CallsInfo($queryParameters, $headerParameters));
    }

    /**
     * Registers new participants added to a Call.
     *
     * @param array{
     *    "id": string, //`id` returned by the [`calls.add`](/methods/calls.add) method.
     *    "users": string, //The list of users to add as participants in the Call. [Read more on how to specify users here](/apis/calls#users).
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `calls:write`
     * } $headerParameters
     *
     * @return Model\CallsParticipantsAddPostResponse200|Model\CallsParticipantsAddPostResponsedefault
     */
    public function callsParticipantsAdd(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\CallsParticipantsAdd($formParameters, $headerParameters));
    }

    /**
     * Registers participants removed from a Call.
     *
     * @param array{
     *    "id": string, //`id` returned by the [`calls.add`](/methods/calls.add) method.
     *    "users": string, //The list of users to remove as participants in the Call. [Read more on how to specify users here](/apis/calls#users).
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `calls:write`
     * } $headerParameters
     *
     * @return Model\CallsParticipantsRemovePostResponse200|Model\CallsParticipantsRemovePostResponsedefault
     */
    public function callsParticipantsRemove(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\CallsParticipantsRemove($formParameters, $headerParameters));
    }

    /**
     * Updates information about a Call.
     *
     * @param array{
     *    "desktop_app_join_url"?: string, //When supplied, available Slack clients will attempt to directly launch the 3rd-party Call with this URL.
     *    "id": string, //`id` returned by the [`calls.add`](/methods/calls.add) method.
     *    "join_url"?: string, //The URL required for a client to join the Call.
     *    "title"?: string, //The name of the Call.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `calls:write`
     * } $headerParameters
     *
     * @return Model\CallsUpdatePostResponse200|Model\CallsUpdatePostResponsedefault
     */
    public function callsUpdate(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\CallsUpdate($formParameters, $headerParameters));
    }

    /**
     * Deletes a message.
     *
     * @param array{
     *    "as_user"?: bool, //Pass true to delete the message as the authed user with `chat:write:user` scope. [Bot users](/bot-users) in this context are considered authed users. If unused or false, the message will be deleted with `chat:write:bot` scope.
     *    "channel"?: string, //Channel containing the message to be deleted.
     *    "ts"?: string, //Timestamp of the message to be deleted.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `chat:write`
     * } $headerParameters
     *
     * @return Model\ChatDeletePostResponse200|Model\ChatDeletePostResponsedefault
     */
    public function chatDelete(array $formParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ChatDelete($formParameters, $headerParameters));
    }

    /**
     * Deletes a pending scheduled message from the queue.
     *
     * @param array{
     *    "as_user"?: bool, //Pass true to delete the message as the authed user with `chat:write:user` scope. [Bot users](/bot-users) in this context are considered authed users. If unused or false, the message will be deleted with `chat:write:bot` scope.
     *    "channel": string, //The channel the scheduled_message is posting to
     *    "scheduled_message_id": string, //`scheduled_message_id` returned from call to chat.scheduleMessage
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `chat:write`
     * } $headerParameters
     *
     * @return Model\ChatDeleteScheduledMessagePostResponse200|Model\ChatDeleteScheduledMessagePostResponsedefault
     */
    public function chatDeleteScheduledMessage(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ChatDeleteScheduledMessage($formParameters, $headerParameters));
    }

    /**
     * Retrieve a permalink URL for a specific extant message.
     *
     * @param array{
     *    "channel": string, //The ID of the conversation or channel containing the message
     *    "message_ts": string, //A message's `ts` value, uniquely identifying it within a channel
     *    "token"?: string, //Authentication token. Requires scope: `none`
     * } $queryParameters
     *
     * @return Model\ChatGetPermalinkGetResponse200|Model\ChatGetPermalinkGetResponsedefault
     */
    public function chatGetPermalink(array $queryParameters)
    {
        return $this->executeEndpoint(new Endpoint\ChatGetPermalink($queryParameters));
    }

    /**
     * Share a me message into a channel.
     *
     * @param array{
     *    "channel"?: string, //Channel to send message to. Can be a public channel, private group or IM channel. Can be an encoded ID, or a name.
     *    "text"?: string, //Text of the message to send.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `chat:write`
     * } $headerParameters
     *
     * @return Model\ChatMeMessagePostResponse200|Model\ChatMeMessagePostResponsedefault
     */
    public function chatMeMessage(array $formParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ChatMeMessage($formParameters, $headerParameters));
    }

    /**
     * Sends an ephemeral message to a user in a channel.
     *
     * @param array{
     *    "as_user"?: bool, //Pass true to post the message as the authed user. Defaults to true if the chat:write:bot scope is not included. Otherwise, defaults to false.
     *    "attachments"?: string, //A JSON-based array of structured attachments, presented as a URL-encoded string.
     *    "blocks"?: string, //A JSON-based array of structured blocks, presented as a URL-encoded string.
     *    "channel": string, //Channel, private group, or IM channel to send message to. Can be an encoded ID, or a name.
     *    "icon_emoji"?: string, //Emoji to use as the icon for this message. Overrides `icon_url`. Must be used in conjunction with `as_user` set to `false`, otherwise ignored. See [authorship](#authorship) below.
     *    "icon_url"?: string, //URL to an image to use as the icon for this message. Must be used in conjunction with `as_user` set to false, otherwise ignored. See [authorship](#authorship) below.
     *    "link_names"?: bool, //Find and link channel names and usernames.
     *    "parse"?: string, //Change how messages are treated. Defaults to `none`. See [below](#formatting).
     *    "text"?: string, //How this field works and whether it is required depends on other fields you use in your API call. [See below](#text_usage) for more detail.
     *    "thread_ts"?: string, //Provide another message's `ts` value to post this message in a thread. Avoid using a reply's `ts` value; use its parent's value instead. Ephemeral messages in threads are only shown if there is already an active thread.
     *    "user": string, //`id` of the user who will receive the ephemeral message. The user should be in the channel specified by the `channel` argument.
     *    "username"?: string, //Set your bot's user name. Must be used in conjunction with `as_user` set to false, otherwise ignored. See [authorship](#authorship) below.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `chat:write`
     * } $headerParameters
     *
     * @return Model\ChatPostEphemeralPostResponse200|Model\ChatPostEphemeralPostResponsedefault
     */
    public function chatPostEphemeral(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ChatPostEphemeral($formParameters, $headerParameters));
    }

    /**
     * Sends a message to a channel.
     *
     * @param array{
     *    "as_user"?: bool, //Pass true to post the message as the authed user, instead of as a bot. Defaults to false. See [authorship](#authorship) below.
     *    "attachments"?: string, //A JSON-based array of structured attachments, presented as a URL-encoded string.
     *    "blocks"?: string, //A JSON-based array of structured blocks, presented as a URL-encoded string.
     *    "channel": string, //Channel, private group, or IM channel to send message to. Can be an encoded ID, or a name. See [below](#channels) for more details.
     *    "icon_emoji"?: string, //Emoji to use as the icon for this message. Overrides `icon_url`. Must be used in conjunction with `as_user` set to `false`, otherwise ignored. See [authorship](#authorship) below.
     *    "icon_url"?: string, //URL to an image to use as the icon for this message. Must be used in conjunction with `as_user` set to false, otherwise ignored. See [authorship](#authorship) below.
     *    "link_names"?: bool, //Find and link channel names and usernames.
     *    "metadata"?: string, //JSON object with event_type and event_payload fields, presented as a URL-encoded string. Metadata you post to Slack is accessible to any app or user who is a member of that workspace.
     *    "mrkdwn"?: bool, //Disable Slack markup parsing by setting to `false`. Enabled by default.
     *    "parse"?: string, //Change how messages are treated. Defaults to `none`. See [below](#formatting).
     *    "reply_broadcast"?: bool, //Used in conjunction with `thread_ts` and indicates whether reply should be made visible to everyone in the channel or conversation. Defaults to `false`.
     *    "text"?: string, //How this field works and whether it is required depends on other fields you use in your API call. [See below](#text_usage) for more detail.
     *    "thread_ts"?: string, //Provide another message's `ts` value to make this message a reply. Avoid using a reply's `ts` value; use its parent instead.
     *    "unfurl_links"?: bool, //Pass true to enable unfurling of primarily text-based content.
     *    "unfurl_media"?: bool, //Pass false to disable unfurling of media content.
     *    "username"?: string, //Set your bot's user name. Must be used in conjunction with `as_user` set to false, otherwise ignored. See [authorship](#authorship) below.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `chat:write`
     * } $headerParameters
     *
     * @return Model\ChatPostMessagePostResponse200|Model\ChatPostMessagePostResponsedefault
     */
    public function chatPostMessage(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ChatPostMessage($formParameters, $headerParameters));
    }

    /**
     * Schedules a message to be sent to a channel.
     *
     * @param array{
     *    "as_user"?: bool, //Pass true to post the message as the authed user, instead of as a bot. Defaults to false. See [chat.postMessage](chat.postMessage#authorship).
     *    "attachments"?: string, //A JSON-based array of structured attachments, presented as a URL-encoded string.
     *    "blocks"?: string, //A JSON-based array of structured blocks, presented as a URL-encoded string.
     *    "channel"?: string, //Channel, private group, or DM channel to send message to. Can be an encoded ID, or a name. See [below](#channels) for more details.
     *    "link_names"?: bool, //Find and link channel names and usernames.
     *    "parse"?: string, //Change how messages are treated. Defaults to `none`. See [chat.postMessage](chat.postMessage#formatting).
     *    "post_at"?: int, //Unix EPOCH timestamp of time in future to send the message.
     *    "reply_broadcast"?: bool, //Used in conjunction with `thread_ts` and indicates whether reply should be made visible to everyone in the channel or conversation. Defaults to `false`.
     *    "text"?: string, //How this field works and whether it is required depends on other fields you use in your API call. [See below](#text_usage) for more detail.
     *    "thread_ts"?: string, //Provide another message's `ts` value to make this message a reply. Avoid using a reply's `ts` value; use its parent instead.
     *    "unfurl_links"?: bool, //Pass true to enable unfurling of primarily text-based content.
     *    "unfurl_media"?: bool, //Pass false to disable unfurling of media content.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `chat:write`
     * } $headerParameters
     *
     * @return Model\ChatScheduleMessagePostResponse200|Model\ChatScheduleMessagePostResponsedefault
     */
    public function chatScheduleMessage(array $formParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ChatScheduleMessage($formParameters, $headerParameters));
    }

    /**
     * Returns a list of scheduled messages.
     *
     * @param array{
     *    "channel"?: string, //The channel of the scheduled messages
     *    "cursor"?: string, //For pagination purposes, this is the `cursor` value returned from a previous call to `chat.scheduledmessages.list` indicating where you want to start this call from.
     *    "latest"?: string, //A UNIX timestamp of the latest value in the time range
     *    "limit"?: int, //Maximum number of original entries to return.
     *    "oldest"?: string, //A UNIX timestamp of the oldest value in the time range
     * } $queryParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `none`
     * } $headerParameters
     *
     * @return Model\ChatScheduledMessagesListGetResponse200|Model\ChatScheduledMessagesListGetResponsedefault
     */
    public function chatScheduledMessagesList(array $queryParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ChatScheduledMessagesList($queryParameters, $headerParameters));
    }

    /**
     * Provide custom unfurl behavior for user-posted URLs.
     *
     * @param array{
     *    "channel": string, //Channel ID of the message
     *    "ts": string, //Timestamp of the message to add unfurl behavior to.
     *    "unfurls"?: string, //URL-encoded JSON map with keys set to URLs featured in the the message, pointing to their unfurl blocks or message attachments.
     *    "user_auth_message"?: string, //Provide a simply-formatted string to send as an ephemeral message to the user as invitation to authenticate further and enable full unfurling behavior
     *    "user_auth_required"?: bool, //Set to `true` or `1` to indicate the user must install your Slack app to trigger unfurls for this domain
     *    "user_auth_url"?: string, //Send users to this custom URL where they will complete authentication in your app to fully trigger unfurling. Value should be properly URL-encoded.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `links:write`
     * } $headerParameters
     *
     * @return Model\ChatUnfurlPostResponse200|Model\ChatUnfurlPostResponsedefault
     */
    public function chatUnfurl(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ChatUnfurl($formParameters, $headerParameters));
    }

    /**
     * Updates a message.
     *
     * @param array{
     *    "as_user"?: bool, //Pass true to update the message as the authed user. [Bot users](/bot-users) in this context are considered authed users.
     *    "attachments"?: string, //A JSON-based array of structured attachments, presented as a URL-encoded string. This field is required when not presenting `text`. If you don't include this field, the message's previous `attachments` will be retained. To remove previous `attachments`, include an empty array for this field.
     *    "blocks"?: string, //A JSON-based array of [structured blocks](/block-kit/building), presented as a URL-encoded string. If you don't include this field, the message's previous `blocks` will be retained. To remove previous `blocks`, include an empty array for this field.
     *    "channel": string, //Channel containing the message to be updated.
     *    "link_names"?: string, //Find and link channel names and usernames. Defaults to `none`. If you do not specify a value for this field, the original value set for the message will be overwritten with the default, `none`.
     *    "parse"?: string, //Change how messages are treated. Defaults to `client`, unlike `chat.postMessage`. Accepts either `none` or `full`. If you do not specify a value for this field, the original value set for the message will be overwritten with the default, `client`.
     *    "text"?: string, //New text for the message, using the [default formatting rules](/reference/surfaces/formatting). It's not required when presenting `blocks` or `attachments`.
     *    "ts": string, //Timestamp of the message to be updated.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `chat:write`
     * } $headerParameters
     *
     * @return Model\ChatUpdatePostResponse200|Model\ChatUpdatePostResponsedefault
     */
    public function chatUpdate(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ChatUpdate($formParameters, $headerParameters));
    }

    /**
     * Archives a conversation.
     *
     * @param array{
     *    "channel"?: string, //ID of conversation to archive
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `conversations:write`
     * } $headerParameters
     *
     * @return Model\ConversationsArchivePostResponse200|Model\ConversationsArchivePostResponsedefault
     */
    public function conversationsArchive(array $formParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ConversationsArchive($formParameters, $headerParameters));
    }

    /**
     * Closes a direct message or multi-person direct message.
     *
     * @param array{
     *    "channel"?: string, //Conversation to close.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `conversations:write`
     * } $headerParameters
     *
     * @return Model\ConversationsClosePostResponse200|Model\ConversationsClosePostResponsedefault
     */
    public function conversationsClose(array $formParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ConversationsClose($formParameters, $headerParameters));
    }

    /**
     * Initiates a public or private channel-based conversation.
     *
     * @param array{
     *    "is_private"?: bool, //Create a private channel instead of a public one
     *    "name"?: string, //Name of the public or private channel to create
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `conversations:write`
     * } $headerParameters
     *
     * @return Model\ConversationsCreatePostResponse200|Model\ConversationsCreatePostResponsedefault
     */
    public function conversationsCreate(array $formParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ConversationsCreate($formParameters, $headerParameters));
    }

    /**
     * Fetches a conversation's history of messages and events.
     *
     * @param array{
     *    "channel"?: string, //Conversation ID to fetch history for.
     *    "cursor"?: string, //Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     *    "include_all_metadata"?: bool, //Return all metadata associated with this message.
     *    "inclusive"?: bool, //Include messages with latest or oldest timestamp in results only when either timestamp is specified.
     *    "latest"?: string, //End of time range of messages to include in results.
     *    "limit"?: int, //The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the users list hasn't been reached.
     *    "oldest"?: string, //Start of time range of messages to include in results.
     *    "token"?: string, //Authentication token. Requires scope: `conversations:history`
     * } $queryParameters
     *
     * @return Model\ConversationsHistoryGetResponse200|Model\ConversationsHistoryGetResponsedefault
     */
    public function conversationsHistory(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ConversationsHistory($queryParameters));
    }

    /**
     * Retrieve information about a conversation.
     *
     * @param array{
     *    "channel"?: string, //Conversation ID to learn more about
     *    "include_locale"?: bool, //Set this to `true` to receive the locale for this conversation. Defaults to `false`
     *    "include_num_members"?: bool, //Set to `true` to include the member count for the specified conversation. Defaults to `false`
     *    "token"?: string, //Authentication token. Requires scope: `conversations:read`
     * } $queryParameters
     *
     * @return Model\ConversationsInfoGetResponse200|Model\ConversationsInfoGetResponsedefault
     */
    public function conversationsInfo(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ConversationsInfo($queryParameters));
    }

    /**
     * Invites users to a channel.
     *
     * @param array{
     *    "channel"?: string, //The ID of the public or private channel to invite user(s) to.
     *    "users"?: string, //A comma separated list of user IDs. Up to 1000 users may be listed.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `conversations:write`
     * } $headerParameters
     *
     * @return Model\ConversationsInvitePostResponse200|Model\ConversationsInvitePostResponsedefault
     */
    public function conversationsInvite(array $formParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ConversationsInvite($formParameters, $headerParameters));
    }

    /**
     * Joins an existing conversation.
     *
     * @param array{
     *    "channel"?: string, //ID of conversation to join
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `channels:write`
     * } $headerParameters
     *
     * @return Model\ConversationsJoinPostResponse200|Model\ConversationsJoinPostResponsedefault
     */
    public function conversationsJoin(array $formParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ConversationsJoin($formParameters, $headerParameters));
    }

    /**
     * Removes a user from a conversation.
     *
     * @param array{
     *    "channel"?: string, //ID of conversation to remove user from.
     *    "user"?: string, //User ID to be removed.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `conversations:write`
     * } $headerParameters
     *
     * @return Model\ConversationsKickPostResponse200|Model\ConversationsKickPostResponsedefault
     */
    public function conversationsKick(array $formParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ConversationsKick($formParameters, $headerParameters));
    }

    /**
     * Leaves a conversation.
     *
     * @param array{
     *    "channel"?: string, //Conversation to leave
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `conversations:write`
     * } $headerParameters
     *
     * @return Model\ConversationsLeavePostResponse200|Model\ConversationsLeavePostResponsedefault
     */
    public function conversationsLeave(array $formParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ConversationsLeave($formParameters, $headerParameters));
    }

    /**
     * Lists all channels in a Slack team.
     *
     * @param array{
     *    "cursor"?: string, //Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     *    "exclude_archived"?: bool, //Set to `true` to exclude archived channels from the list
     *    "limit"?: int, //The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn't been reached. Must be an integer no larger than 1000.
     *    "team_id"?: string, //Encoded team id to list channels in, required if token belongs to org-wide app
     *    "token"?: string, //Authentication token. Requires scope: `conversations:read`
     *    "types"?: string, //Mix and match channel types by providing a comma-separated list of any combination of `public_channel`, `private_channel`, `mpim`, `im`
     * } $queryParameters
     *
     * @return Model\ConversationsListGetResponse200|Model\ConversationsListGetResponsedefault
     */
    public function conversationsList(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ConversationsList($queryParameters));
    }

    /**
     * Sets the read cursor in a channel.
     *
     * @param array{
     *    "channel"?: string, //Channel or conversation to set the read cursor for.
     *    "ts"?: string, //Unique identifier of message you want marked as most recently seen in this conversation.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `conversations:write`
     * } $headerParameters
     *
     * @return Model\ConversationsMarkPostResponse200|Model\ConversationsMarkPostResponsedefault
     */
    public function conversationsMark(array $formParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ConversationsMark($formParameters, $headerParameters));
    }

    /**
     * Retrieve members of a conversation.
     *
     * @param array{
     *    "channel"?: string, //ID of the conversation to retrieve members for
     *    "cursor"?: string, //Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     *    "limit"?: int, //The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the users list hasn't been reached.
     *    "token"?: string, //Authentication token. Requires scope: `conversations:read`
     * } $queryParameters
     *
     * @return Model\ConversationsMembersGetResponse200|Model\ConversationsMembersGetResponsedefault
     */
    public function conversationsMembers(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ConversationsMembers($queryParameters));
    }

    /**
     * Opens or resumes a direct message or multi-person direct message.
     *
     * @param array{
     *    "channel"?: string, //Resume a conversation by supplying an `im` or `mpim`'s ID. Or provide the `users` field instead.
     *    "return_im"?: bool, //Boolean, indicates you want the full IM channel definition in the response.
     *    "users"?: string, //Comma separated lists of users. If only one user is included, this creates a 1:1 DM.  The ordering of the users is preserved whenever a multi-person direct message is returned. Supply a `channel` when not supplying `users`.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `conversations:write`
     * } $headerParameters
     *
     * @return Model\ConversationsOpenPostResponse200|Model\ConversationsOpenPostResponsedefault
     */
    public function conversationsOpen(array $formParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ConversationsOpen($formParameters, $headerParameters));
    }

    /**
     * Renames a conversation.
     *
     * @param array{
     *    "channel"?: string, //ID of conversation to rename
     *    "name"?: string, //New name for conversation.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `conversations:write`
     * } $headerParameters
     *
     * @return Model\ConversationsRenamePostResponse200|Model\ConversationsRenamePostResponsedefault
     */
    public function conversationsRename(array $formParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ConversationsRename($formParameters, $headerParameters));
    }

    /**
     * Retrieve a thread of messages posted to a conversation.
     *
     * @param array{
     *    "channel"?: string, //Conversation ID to fetch thread from.
     *    "cursor"?: string, //Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     *    "inclusive"?: bool, //Include messages with latest or oldest timestamp in results only when either timestamp is specified.
     *    "latest"?: string, //End of time range of messages to include in results.
     *    "limit"?: int, //The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the users list hasn't been reached.
     *    "oldest"?: string, //Start of time range of messages to include in results.
     *    "token"?: string, //Authentication token. Requires scope: `conversations:history`
     *    "ts"?: string, //Unique identifier of a thread's parent message. `ts` must be the timestamp of an existing message with 0 or more replies. If there are no replies then just the single message referenced by `ts` will return - it is just an ordinary, unthreaded message.
     * } $queryParameters
     *
     * @return Model\ConversationsRepliesGetResponse200|Model\ConversationsRepliesGetResponsedefault
     */
    public function conversationsReplies(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ConversationsReplies($queryParameters));
    }

    /**
     * Sets the purpose for a conversation.
     *
     * @param array{
     *    "channel"?: string, //Conversation to set the purpose of
     *    "purpose"?: string, //A new, specialer purpose
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `conversations:write`
     * } $headerParameters
     *
     * @return Model\ConversationsSetPurposePostResponse200|Model\ConversationsSetPurposePostResponsedefault
     */
    public function conversationsSetPurpose(array $formParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ConversationsSetPurpose($formParameters, $headerParameters));
    }

    /**
     * Sets the topic for a conversation.
     *
     * @param array{
     *    "channel"?: string, //Conversation to set the topic of
     *    "topic"?: string, //The new topic string. Does not support formatting or linkification.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `conversations:write`
     * } $headerParameters
     *
     * @return Model\ConversationsSetTopicPostResponse200|Model\ConversationsSetTopicPostResponsedefault
     */
    public function conversationsSetTopic(array $formParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ConversationsSetTopic($formParameters, $headerParameters));
    }

    /**
     * Reverses conversation archival.
     *
     * @param array{
     *    "channel"?: string, //ID of conversation to unarchive
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `conversations:write`
     * } $headerParameters
     *
     * @return Model\ConversationsUnarchivePostResponse200|Model\ConversationsUnarchivePostResponsedefault
     */
    public function conversationsUnarchive(array $formParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ConversationsUnarchive($formParameters, $headerParameters));
    }

    /**
     * Open a dialog with a user.
     *
     * @param array{
     *    "dialog": string, //The dialog definition. This must be a JSON-encoded string.
     *    "trigger_id": string, //Exchange a trigger to post to the user.
     * } $queryParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `none`
     * } $headerParameters
     *
     * @return Model\DialogOpenGetResponse200|Model\DialogOpenGetResponsedefault
     */
    public function dialogOpen(array $queryParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\DialogOpen($queryParameters, $headerParameters));
    }

    /**
     * Ends the current user's Do Not Disturb session immediately.
     *
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `dnd:write`
     * } $headerParameters
     *
     * @return Model\DndEndDndPostResponse200|Model\DndEndDndPostResponsedefault
     */
    public function dndEndDnd(array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\DndEndDnd($headerParameters));
    }

    /**
     * Ends the current user's snooze mode immediately.
     *
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `dnd:write`
     * } $headerParameters
     *
     * @return Model\DndEndSnoozePostResponse200|Model\DndEndSnoozePostResponsedefault
     */
    public function dndEndSnooze(array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\DndEndSnooze($headerParameters));
    }

    /**
     * Retrieves a user's current Do Not Disturb status.
     *
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `dnd:read`
     *    "user"?: string, //User to fetch status for (defaults to current user)
     * } $queryParameters
     *
     * @return Model\DndInfoGetResponse200|Model\DndInfoGetResponsedefault
     */
    public function dndInfo(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\DndInfo($queryParameters));
    }

    /**
     * Turns on Do Not Disturb mode for the current user, or changes its duration.
     *
     * @param array{
     *    "num_minutes": string, //Number of minutes, from now, to snooze until.
     *    "token"?: string, //Authentication token. Requires scope: `dnd:write`
     * } $formParameters
     *
     * @return Model\DndSetSnoozePostResponse200|Model\DndSetSnoozePostResponsedefault
     */
    public function dndSetSnooze(array $formParameters)
    {
        return $this->executeEndpoint(new Endpoint\DndSetSnooze($formParameters));
    }

    /**
     * Retrieves the Do Not Disturb status for up to 50 users on a team.
     *
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `dnd:read`
     *    "users"?: string, //Comma-separated list of users to fetch Do Not Disturb status for
     * } $queryParameters
     *
     * @return Model\DndTeamInfoGetResponse200|Model\DndTeamInfoGetResponsedefault
     */
    public function dndTeamInfo(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\DndTeamInfo($queryParameters));
    }

    /**
     * Lists custom emoji for a team.
     *
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `emoji:read`
     * } $queryParameters
     *
     * @return Model\EmojiListGetResponse200|Model\EmojiListGetResponsedefault
     */
    public function emojiList(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\EmojiList($queryParameters));
    }

    /**
     * Deletes an existing comment on a file.
     *
     * @param array{
     *    "file"?: string, //File to delete a comment from.
     *    "id"?: string, //The comment to delete.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `files:write:user`
     * } $headerParameters
     *
     * @return Model\FilesCommentsDeletePostResponse200|Model\FilesCommentsDeletePostResponsedefault
     */
    public function filesCommentsDelete(array $formParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\FilesCommentsDelete($formParameters, $headerParameters));
    }

    /**
     * Finishes an upload started with files.getUploadURLExternal.
     *
     * @param array{
     *    "blocks"?: string, //A JSON-based array of structured rich text blocks, presented as a URL-encoded string. If the `initial_comment` field is provided, the `blocks` field is ignored.
     *    "channel_id"?: string, //Channel ID where the file will be shared. If not specified, the file will remain private.
     *    "channels"?: string, //Comma-separated list of channel IDs where the file will be shared.
     *    "files": string, //An array of file objects, each containing the `id` of the file to be completed.
     *    "initial_comment"?: string, //The message text introducing the file in specified channels.
     *    "thread_ts"?: string, //Provide another message's `ts` value to upload this file as a reply. Never use a reply's `ts` value; use its parent instead. Also, make sure to provide only one channel when using `thread_ts`.
     * } $queryParameters
     * @param array{
     *    "token"?: string, //Authentication token bearing required scopes. Tokens should be passed as an HTTP Authorization header or alternatively, as a POST parameter.
     * } $formParameters
     *
     * @return Model\FilesCompleteUploadExternalPostResponse200|Model\FilesCompleteUploadExternalPostResponsedefault
     */
    public function filesCompleteUploadExternal(array $queryParameters, array $formParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\FilesCompleteUploadExternal($queryParameters, $formParameters));
    }

    /**
     * Deletes a file.
     *
     * @param array{
     *    "file"?: string, //ID of file to delete.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `files:write:user`
     * } $headerParameters
     *
     * @return Model\FilesDeletePostResponse200|Model\FilesDeletePostResponsedefault
     */
    public function filesDelete(array $formParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\FilesDelete($formParameters, $headerParameters));
    }

    /**
     * Gets a URL for an edge external file upload.
     *
     * @param array{
     *    "alt_txt"?: string, //Description of image for screen-reader.
     *    "filename": string, //Name of the file being uploaded.
     *    "length": int, //Size in bytes of the file being uploaded.
     *    "snippet_type"?: string, //Syntax type of the snippet being uploaded.
     * } $queryParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `files:write`
     * } $formParameters
     *
     * @return Model\FilesGetUploadURLExternalPostResponse200|Model\FilesGetUploadURLExternalPostResponsedefault
     */
    public function filesGetUploadUrlExternal(array $queryParameters, array $formParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\FilesGetUploadUrlExternal($queryParameters, $formParameters));
    }

    /**
     * Gets information about a file.
     *
     * @param array{
     *    "count"?: string,
     *    "cursor"?: string, //Parameter for pagination. File comments are paginated for a single file. Set `cursor` equal to the `next_cursor` attribute returned by the previous request's `response_metadata`. This parameter is optional, but pagination is mandatory: the default value simply fetches the first "page" of the collection of comments. See [pagination](/docs/pagination) for more details.
     *    "file"?: string, //Specify a file by providing its ID.
     *    "limit"?: int, //The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn't been reached.
     *    "page"?: string,
     *    "token"?: string, //Authentication token. Requires scope: `files:read`
     * } $queryParameters
     *
     * @return Model\FilesInfoGetResponse200|Model\FilesInfoGetResponsedefault
     */
    public function filesInfo(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\FilesInfo($queryParameters));
    }

    /**
     * List for a team, in a channel, or from a user with applied filters.
     *
     * @param array{
     *    "channel"?: string, //Filter files appearing in a specific channel, indicated by its ID.
     *    "count"?: string,
     *    "page"?: string,
     *    "show_files_hidden_by_limit"?: bool, //Show truncated file info for files hidden due to being too old, and the team who owns the file being over the file limit.
     *    "token"?: string, //Authentication token. Requires scope: `files:read`
     *    "ts_from"?: string, //Filter files created after this timestamp (inclusive).
     *    "ts_to"?: string, //Filter files created before this timestamp (inclusive).
     *    "types"?: string, //Filter files by type ([see below](#file_types)). You can pass multiple values in the types argument, like `types=spaces,snippets`.The default value is `all`, which does not filter the list.
     *    "user"?: string, //Filter files created by a single user.
     * } $queryParameters
     *
     * @return Model\FilesListGetResponse200|Model\FilesListGetResponsedefault
     */
    public function filesList(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\FilesList($queryParameters));
    }

    /**
     * Adds a file from a remote service.
     *
     * @param array{
     *    "external_id"?: string, //Creator defined GUID for the file.
     *    "external_url"?: string, //URL of the remote file.
     *    "filetype"?: string, //type of file
     *    "indexable_file_contents"?: string, //A text file (txt, pdf, doc, etc.) containing textual search terms that are used to improve discovery of the remote file.
     *    "preview_image"?: string, //Preview of the document via `multipart/form-data`.
     *    "title"?: string, //Title of the file being shared.
     *    "token"?: string, //Authentication token. Requires scope: `remote_files:write`
     * } $formParameters
     *
     * @return Model\FilesRemoteAddPostResponse200|Model\FilesRemoteAddPostResponsedefault
     */
    public function filesRemoteAdd(array $formParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\FilesRemoteAdd($formParameters));
    }

    /**
     * Retrieve information about a remote file added to Slack.
     *
     * @param array{
     *    "external_id"?: string, //Creator defined GUID for the file.
     *    "file"?: string, //Specify a file by providing its ID.
     *    "token"?: string, //Authentication token. Requires scope: `remote_files:read`
     * } $queryParameters
     *
     * @return Model\FilesRemoteInfoGetResponse200|Model\FilesRemoteInfoGetResponsedefault
     */
    public function filesRemoteInfo(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\FilesRemoteInfo($queryParameters));
    }

    /**
     * Retrieve information about a remote file added to Slack.
     *
     * @param array{
     *    "channel"?: string, //Filter files appearing in a specific channel, indicated by its ID.
     *    "cursor"?: string, //Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     *    "limit"?: int, //The maximum number of items to return.
     *    "token"?: string, //Authentication token. Requires scope: `remote_files:read`
     *    "ts_from"?: string, //Filter files created after this timestamp (inclusive).
     *    "ts_to"?: string, //Filter files created before this timestamp (inclusive).
     * } $queryParameters
     *
     * @return Model\FilesRemoteListGetResponse200|Model\FilesRemoteListGetResponsedefault
     */
    public function filesRemoteList(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\FilesRemoteList($queryParameters));
    }

    /**
     * Remove a remote file.
     *
     * @param array{
     *    "external_id"?: string, //Creator defined GUID for the file.
     *    "file"?: string, //Specify a file by providing its ID.
     *    "token"?: string, //Authentication token. Requires scope: `remote_files:write`
     * } $formParameters
     *
     * @return Model\FilesRemoteRemovePostResponse200|Model\FilesRemoteRemovePostResponsedefault
     */
    public function filesRemoteRemove(array $formParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\FilesRemoteRemove($formParameters));
    }

    /**
     * Share a remote file into a channel.
     *
     * @param array{
     *    "channels"?: string, //Comma-separated list of channel IDs where the file will be shared.
     *    "external_id"?: string, //The globally unique identifier (GUID) for the file, as set by the app registering the file with Slack.  Either this field or `file` or both are required.
     *    "file"?: string, //Specify a file registered with Slack by providing its ID. Either this field or `external_id` or both are required.
     *    "token"?: string, //Authentication token. Requires scope: `remote_files:share`
     * } $queryParameters
     *
     * @return Model\FilesRemoteShareGetResponse200|Model\FilesRemoteShareGetResponsedefault
     */
    public function filesRemoteShare(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\FilesRemoteShare($queryParameters));
    }

    /**
     * Updates an existing remote file.
     *
     * @param array{
     *    "external_id"?: string, //Creator defined GUID for the file.
     *    "external_url"?: string, //URL of the remote file.
     *    "file"?: string, //Specify a file by providing its ID.
     *    "filetype"?: string, //type of file
     *    "indexable_file_contents"?: string, //File containing contents that can be used to improve searchability for the remote file.
     *    "preview_image"?: string, //Preview of the document via `multipart/form-data`.
     *    "title"?: string, //Title of the file being shared.
     *    "token"?: string, //Authentication token. Requires scope: `remote_files:write`
     * } $formParameters
     *
     * @return Model\FilesRemoteUpdatePostResponse200|Model\FilesRemoteUpdatePostResponsedefault
     */
    public function filesRemoteUpdate(array $formParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\FilesRemoteUpdate($formParameters));
    }

    /**
     * Revokes public/external sharing access for a file.
     *
     * @param array{
     *    "file"?: string, //File to revoke
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `files:write:user`
     * } $headerParameters
     *
     * @return Model\FilesRevokePublicURLPostResponse200|Model\FilesRevokePublicURLPostResponsedefault
     */
    public function filesRevokePublicURL(array $formParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\FilesRevokePublicURL($formParameters, $headerParameters));
    }

    /**
     * Enables a file for public/external sharing.
     *
     * @param array{
     *    "file"?: string, //File to share
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `files:write:user`
     * } $headerParameters
     *
     * @return Model\FilesSharedPublicURLPostResponse200|Model\FilesSharedPublicURLPostResponsedefault
     */
    public function filesSharedPublicURL(array $formParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\FilesSharedPublicURL($formParameters, $headerParameters));
    }

    /**
     * Uploads or creates a file.
     *
     * @param array{
     *    "channels"?: string, //Comma-separated list of channel names or IDs where the file will be shared.
     *    "content"?: string, //File contents via a POST variable. If omitting this parameter, you must provide a `file`.
     *    "file"?: string|resource, //File contents via `multipart/form-data`. If omitting this parameter, you must submit `content`.
     *    "filename"?: string, //Filename of file.
     *    "filetype"?: string, //A [file type](/types/file#file_types) identifier.
     *    "initial_comment"?: string, //The message text introducing the file in specified `channels`.
     *    "thread_ts"?: string, //Provide another message's `ts` value to upload this file as a reply. Never use a reply's `ts` value; use its parent instead.
     *    "title"?: string, //Title of file.
     *    "token"?: string, //Authentication token. Requires scope: `files:write:user`
     * } $formParameters
     *
     * @return Model\FilesUploadPostResponse200|Model\FilesUploadPostResponsedefault
     */
    public function filesUpload(array $formParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\FilesUpload($formParameters));
    }

    /**
     * For Enterprise Grid workspaces, map local user IDs to global user IDs.
     *
     * @param array{
     *    "team_id"?: string, //Specify team_id starts with `T` in case of Org Token
     *    "to_old"?: bool, //Specify `true` to convert `W` global user IDs to workspace-specific `U` IDs. Defaults to `false`.
     *    "token"?: string, //Authentication token. Requires scope: `tokens.basic`
     *    "users": string, //A comma-separated list of user ids, up to 400 per request
     * } $queryParameters
     *
     * @return Model\MigrationExchangeGetResponse200|Model\MigrationExchangeGetResponsedefault
     */
    public function migrationExchange(array $queryParameters)
    {
        return $this->executeEndpoint(new Endpoint\MigrationExchange($queryParameters));
    }

    /**
     * Exchanges a temporary OAuth verifier code for an access token.
     *
     * @param array{
     *    "client_id"?: string, //Issued when you created your application.
     *    "client_secret"?: string, //Issued when you created your application.
     *    "code"?: string, //The `code` param returned via the OAuth callback.
     *    "redirect_uri"?: string, //This must match the originally submitted URI (if one was sent).
     *    "single_channel"?: bool, //Request the user to add your app only to a single channel. Only valid with a [legacy workspace app](https://api.slack.com/legacy-workspace-apps).
     * } $queryParameters
     *
     * @return Model\OauthAccessGetResponse200|Model\OauthAccessGetResponsedefault
     */
    public function oauthAccess(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\OauthAccess($queryParameters));
    }

    /**
     * Exchanges a temporary OAuth verifier code for a workspace token.
     *
     * @param array{
     *    "client_id"?: string, //Issued when you created your application.
     *    "client_secret"?: string, //Issued when you created your application.
     *    "code"?: string, //The `code` param returned via the OAuth callback.
     *    "redirect_uri"?: string, //This must match the originally submitted URI (if one was sent).
     *    "single_channel"?: bool, //Request the user to add your app only to a single channel.
     * } $queryParameters
     *
     * @return Model\OauthTokenGetResponse200|Model\OauthTokenGetResponsedefault
     */
    public function oauthToken(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\OauthToken($queryParameters));
    }

    /**
     * Exchanges a temporary OAuth verifier code for an access token.
     *
     * @param array{
     *    "client_id"?: string, //Issued when you created your application.
     *    "client_secret"?: string, //Issued when you created your application.
     *    "code": string, //The `code` param returned via the OAuth callback.
     *    "redirect_uri"?: string, //This must match the originally submitted URI (if one was sent).
     * } $queryParameters
     *
     * @return Model\OauthV2AccessGetResponse200|Model\OauthV2AccessGetResponsedefault
     */
    public function oauthV2Access(array $queryParameters)
    {
        return $this->executeEndpoint(new Endpoint\OauthV2Access($queryParameters));
    }

    /**
     * Pins an item to a channel.
     *
     * @param array{
     *    "channel"?: string, //Channel to pin the item in.
     *    "timestamp"?: string, //Timestamp of the message to pin.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `pins:write`
     * } $headerParameters
     *
     * @return Model\PinsAddPostResponse200|Model\PinsAddPostResponsedefault
     */
    public function pinsAdd(array $formParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\PinsAdd($formParameters, $headerParameters));
    }

    /**
     * Lists items pinned to a channel.
     *
     * @param array{
     *    "channel"?: string, //Channel to get pinned items for.
     *    "token"?: string, //Authentication token. Requires scope: `pins:read`
     * } $queryParameters
     *
     * @return Model\PinsListGetResponsedefault|null
     */
    public function pinsList(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\PinsList($queryParameters));
    }

    /**
     * Un-pins an item from a channel.
     *
     * @param array{
     *    "channel": string, //Channel where the item is pinned to.
     *    "timestamp"?: string, //Timestamp of the message to un-pin.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `pins:write`
     * } $headerParameters
     *
     * @return Model\PinsRemovePostResponse200|Model\PinsRemovePostResponsedefault
     */
    public function pinsRemove(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\PinsRemove($formParameters, $headerParameters));
    }

    /**
     * Adds a reaction to an item.
     *
     * @param array{
     *    "channel": string, //Channel where the message to add reaction to was posted.
     *    "name": string, //Reaction (emoji) name.
     *    "timestamp": string, //Timestamp of the message to add reaction to.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `reactions:write`
     * } $headerParameters
     *
     * @return Model\ReactionsAddPostResponse200|Model\ReactionsAddPostResponsedefault
     */
    public function reactionsAdd(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ReactionsAdd($formParameters, $headerParameters));
    }

    /**
     * Gets reactions for an item.
     *
     * @param array{
     *    "channel"?: string, //Channel where the message to get reactions for was posted.
     *    "file"?: string, //File to get reactions for.
     *    "file_comment"?: string, //File comment to get reactions for.
     *    "full"?: bool, //If true always return the complete reaction list.
     *    "timestamp"?: string, //Timestamp of the message to get reactions for.
     *    "token"?: string, //Authentication token. Requires scope: `reactions:read`
     * } $queryParameters
     *
     * @return Model\ReactionsGetGetResponsedefault|null
     */
    public function reactionsGet(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ReactionsGet($queryParameters));
    }

    /**
     * Lists reactions made by a user.
     *
     * @param array{
     *    "count"?: int,
     *    "cursor"?: string, //Parameter for pagination. Set `cursor` equal to the `next_cursor` attribute returned by the previous request's `response_metadata`. This parameter is optional, but pagination is mandatory: the default value simply fetches the first "page" of the collection. See [pagination](/docs/pagination) for more details.
     *    "full"?: bool, //If true always return the complete reaction list.
     *    "limit"?: int, //The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn't been reached.
     *    "page"?: int,
     *    "token"?: string, //Authentication token. Requires scope: `reactions:read`
     *    "user"?: string, //Show reactions made by this user. Defaults to the authed user.
     * } $queryParameters
     *
     * @return Model\ReactionsListGetResponse200|Model\ReactionsListGetResponsedefault
     */
    public function reactionsList(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ReactionsList($queryParameters));
    }

    /**
     * Removes a reaction from an item.
     *
     * @param array{
     *    "channel"?: string, //Channel where the message to remove reaction from was posted.
     *    "file"?: string, //File to remove reaction from.
     *    "file_comment"?: string, //File comment to remove reaction from.
     *    "name": string, //Reaction (emoji) name.
     *    "timestamp"?: string, //Timestamp of the message to remove reaction from.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `reactions:write`
     * } $headerParameters
     *
     * @return Model\ReactionsRemovePostResponse200|Model\ReactionsRemovePostResponsedefault
     */
    public function reactionsRemove(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ReactionsRemove($formParameters, $headerParameters));
    }

    /**
     * Creates a reminder.
     *
     * @param array{
     *    "text": string, //The content of the reminder
     *    "time": string, //When this reminder should happen: the Unix timestamp (up to five years from now), the number of seconds until the reminder (if within 24 hours), or a natural language description (Ex. "in 15 minutes," or "every Thursday")
     *    "user"?: string, //The user who will receive the reminder. If no user is specified, the reminder will go to user who created it.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `reminders:write`
     * } $headerParameters
     *
     * @return Model\RemindersAddPostResponse200|Model\RemindersAddPostResponsedefault
     */
    public function remindersAdd(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\RemindersAdd($formParameters, $headerParameters));
    }

    /**
     * Marks a reminder as complete.
     *
     * @param array{
     *    "reminder"?: string, //The ID of the reminder to be marked as complete
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `reminders:write`
     * } $headerParameters
     *
     * @return Model\RemindersCompletePostResponse200|Model\RemindersCompletePostResponsedefault
     */
    public function remindersComplete(array $formParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\RemindersComplete($formParameters, $headerParameters));
    }

    /**
     * Deletes a reminder.
     *
     * @param array{
     *    "reminder"?: string, //The ID of the reminder
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `reminders:write`
     * } $headerParameters
     *
     * @return Model\RemindersDeletePostResponse200|Model\RemindersDeletePostResponsedefault
     */
    public function remindersDelete(array $formParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\RemindersDelete($formParameters, $headerParameters));
    }

    /**
     * Gets information about a reminder.
     *
     * @param array{
     *    "reminder"?: string, //The ID of the reminder
     *    "token"?: string, //Authentication token. Requires scope: `reminders:read`
     * } $queryParameters
     *
     * @return Model\RemindersInfoGetResponse200|Model\RemindersInfoGetResponsedefault
     */
    public function remindersInfo(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\RemindersInfo($queryParameters));
    }

    /**
     * Lists all reminders created by or for a given user.
     *
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `reminders:read`
     * } $queryParameters
     *
     * @return Model\RemindersListGetResponse200|Model\RemindersListGetResponsedefault
     */
    public function remindersList(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\RemindersList($queryParameters));
    }

    /**
     * Starts a Real Time Messaging session.
     *
     * @param array{
     *    "batch_presence_aware"?: bool, //Batch presence deliveries via subscription. Enabling changes the shape of `presence_change` events. See [batch presence](/docs/presence-and-status#batching).
     *    "presence_sub"?: bool, //Only deliver presence events when requested by subscription. See [presence subscriptions](/docs/presence-and-status#subscriptions).
     *    "token"?: string, //Authentication token. Requires scope: `rtm:stream`
     * } $queryParameters
     *
     * @return Model\RtmConnectGetResponse200|Model\RtmConnectGetResponsedefault
     */
    public function rtmConnect(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\RtmConnect($queryParameters));
    }

    /**
     * Searches for messages matching a query.
     *
     * @param array{
     *    "count"?: int, //Pass the number of results you want per "page". Maximum of `100`.
     *    "highlight"?: bool, //Pass a value of `true` to enable query highlight markers (see below).
     *    "page"?: int,
     *    "query": string, //Search query.
     *    "sort"?: string, //Return matches sorted by either `score` or `timestamp`.
     *    "sort_dir"?: string, //Change sort direction to ascending (`asc`) or descending (`desc`).
     *    "token"?: string, //Authentication token. Requires scope: `search:read`
     * } $queryParameters
     *
     * @return Model\SearchMessagesGetResponse200|Model\SearchMessagesGetResponsedefault
     */
    public function searchMessages(array $queryParameters)
    {
        return $this->executeEndpoint(new Endpoint\SearchMessages($queryParameters));
    }

    /**
     * Adds a star to an item.
     *
     * @param array{
     *    "channel"?: string, //Channel to add star to, or channel where the message to add star to was posted (used with `timestamp`).
     *    "file"?: string, //File to add star to.
     *    "file_comment"?: string, //File comment to add star to.
     *    "timestamp"?: string, //Timestamp of the message to add star to.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `stars:write`
     * } $headerParameters
     *
     * @return Model\StarsAddPostResponse200|Model\StarsAddPostResponsedefault
     */
    public function starsAdd(array $formParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\StarsAdd($formParameters, $headerParameters));
    }

    /**
     * Lists stars for a user.
     *
     * @param array{
     *    "count"?: string,
     *    "cursor"?: string, //Parameter for pagination. Set `cursor` equal to the `next_cursor` attribute returned by the previous request's `response_metadata`. This parameter is optional, but pagination is mandatory: the default value simply fetches the first "page" of the collection. See [pagination](/docs/pagination) for more details.
     *    "limit"?: int, //The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn't been reached.
     *    "page"?: string,
     *    "token"?: string, //Authentication token. Requires scope: `stars:read`
     * } $queryParameters
     *
     * @return Model\StarsListGetResponse200|Model\StarsListGetResponsedefault
     */
    public function starsList(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\StarsList($queryParameters));
    }

    /**
     * Removes a star from an item.
     *
     * @param array{
     *    "channel"?: string, //Channel to remove star from, or channel where the message to remove star from was posted (used with `timestamp`).
     *    "file"?: string, //File to remove star from.
     *    "file_comment"?: string, //File comment to remove star from.
     *    "timestamp"?: string, //Timestamp of the message to remove star from.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `stars:write`
     * } $headerParameters
     *
     * @return Model\StarsRemovePostResponse200|Model\StarsRemovePostResponsedefault
     */
    public function starsRemove(array $formParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\StarsRemove($formParameters, $headerParameters));
    }

    /**
     * Gets the access logs for the current team.
     *
     * @param array{
     *    "before"?: string, //End of time range of logs to include in results (inclusive).
     *    "count"?: string,
     *    "page"?: string,
     *    "token"?: string, //Authentication token. Requires scope: `admin`
     * } $queryParameters
     *
     * @return Model\TeamAccessLogsGetResponse200|Model\TeamAccessLogsGetResponsedefault
     */
    public function teamAccessLogs(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\TeamAccessLogs($queryParameters));
    }

    /**
     * Gets billable users information for the current team.
     *
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `admin`
     *    "user"?: string, //A user to retrieve the billable information for. Defaults to all users.
     * } $queryParameters
     *
     * @return Model\TeamBillableInfoGetResponse200|Model\TeamBillableInfoGetResponsedefault
     */
    public function teamBillableInfo(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\TeamBillableInfo($queryParameters));
    }

    /**
     * Gets information about the current team.
     *
     * @param array{
     *    "team"?: string, //Team to get info on, if omitted, will return information about the current team. Will only return team that the authenticated token is allowed to see through external shared channels
     *    "token"?: string, //Authentication token. Requires scope: `team:read`
     * } $queryParameters
     *
     * @return Model\TeamInfoGetResponse200|Model\TeamInfoGetResponsedefault
     */
    public function teamInfo(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\TeamInfo($queryParameters));
    }

    /**
     * Gets the integration logs for the current team.
     *
     * @param array{
     *    "app_id"?: string, //Filter logs to this Slack app. Defaults to all logs.
     *    "change_type"?: string, //Filter logs with this change type. Defaults to all logs.
     *    "count"?: string,
     *    "page"?: string,
     *    "service_id"?: string, //Filter logs to this service. Defaults to all logs.
     *    "token"?: string, //Authentication token. Requires scope: `admin`
     *    "user"?: string, //Filter logs generated by this user’s actions. Defaults to all logs.
     * } $queryParameters
     *
     * @return Model\TeamIntegrationLogsGetResponse200|Model\TeamIntegrationLogsGetResponsedefault
     */
    public function teamIntegrationLogs(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\TeamIntegrationLogs($queryParameters));
    }

    /**
     * Retrieve a team's profile.
     *
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `users.profile:read`
     *    "visibility"?: string, //Filter by visibility.
     * } $queryParameters
     *
     * @return Model\TeamProfileGetGetResponse200|Model\TeamProfileGetGetResponsedefault
     */
    public function teamProfileGet(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\TeamProfileGet($queryParameters));
    }

    /**
     * Create a User Group.
     *
     * @param array{
     *    "channels"?: string, //A comma separated string of encoded channel IDs for which the User Group uses as a default.
     *    "description"?: string, //A short description of the User Group.
     *    "handle"?: string, //A mention handle. Must be unique among channels, users and User Groups.
     *    "include_count"?: bool, //Include the number of users in each User Group.
     *    "name": string, //A name for the User Group. Must be unique among User Groups.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `usergroups:write`
     * } $headerParameters
     *
     * @return Model\UsergroupsCreatePostResponse200|Model\UsergroupsCreatePostResponsedefault
     */
    public function usergroupsCreate(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\UsergroupsCreate($formParameters, $headerParameters));
    }

    /**
     * Disable an existing User Group.
     *
     * @param array{
     *    "include_count"?: bool, //Include the number of users in the User Group.
     *    "usergroup": string, //The encoded ID of the User Group to disable.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `usergroups:write`
     * } $headerParameters
     *
     * @return Model\UsergroupsDisablePostResponse200|Model\UsergroupsDisablePostResponsedefault
     */
    public function usergroupsDisable(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\UsergroupsDisable($formParameters, $headerParameters));
    }

    /**
     * Enable a User Group.
     *
     * @param array{
     *    "include_count"?: bool, //Include the number of users in the User Group.
     *    "usergroup": string, //The encoded ID of the User Group to enable.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `usergroups:write`
     * } $headerParameters
     *
     * @return Model\UsergroupsEnablePostResponse200|Model\UsergroupsEnablePostResponsedefault
     */
    public function usergroupsEnable(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\UsergroupsEnable($formParameters, $headerParameters));
    }

    /**
     * List all User Groups for a team.
     *
     * @param array{
     *    "include_count"?: bool, //Include the number of users in each User Group.
     *    "include_disabled"?: bool, //Include disabled User Groups.
     *    "include_users"?: bool, //Include the list of users for each User Group.
     *    "team_id"?: string, //Encoded team id to list user groups in, required if org token is used
     *    "token"?: string, //Authentication token. Requires scope: `usergroups:read`
     * } $queryParameters
     *
     * @return Model\UsergroupsListGetResponse200|Model\UsergroupsListGetResponsedefault
     */
    public function usergroupsList(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\UsergroupsList($queryParameters));
    }

    /**
     * Update an existing User Group.
     *
     * @param array{
     *    "channels"?: string, //A comma separated string of encoded channel IDs for which the User Group uses as a default.
     *    "description"?: string, //A short description of the User Group.
     *    "handle"?: string, //A mention handle. Must be unique among channels, users and User Groups.
     *    "include_count"?: bool, //Include the number of users in the User Group.
     *    "name"?: string, //A name for the User Group. Must be unique among User Groups.
     *    "usergroup": string, //The encoded ID of the User Group to update.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `usergroups:write`
     * } $headerParameters
     *
     * @return Model\UsergroupsUpdatePostResponse200|Model\UsergroupsUpdatePostResponsedefault
     */
    public function usergroupsUpdate(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\UsergroupsUpdate($formParameters, $headerParameters));
    }

    /**
     * List all users in a User Group.
     *
     * @param array{
     *    "include_disabled"?: bool, //Allow results that involve disabled User Groups.
     *    "team_id"?: string, //The user group's encoded team ID. Required if org token is used.
     *    "token"?: string, //Authentication token. Requires scope: `usergroups:read`
     *    "usergroup": string, //The encoded ID of the User Group to read.
     * } $queryParameters
     *
     * @return Model\UsergroupsUsersListGetResponse200|Model\UsergroupsUsersListGetResponsedefault
     */
    public function usergroupsUsersList(array $queryParameters)
    {
        return $this->executeEndpoint(new Endpoint\UsergroupsUsersList($queryParameters));
    }

    /**
     * Update the list of users for a User Group.
     *
     * @param array{
     *    "include_count"?: bool, //Include the number of users in the User Group.
     *    "usergroup": string, //The encoded ID of the User Group to update.
     *    "users": string, //A comma separated string of encoded user IDs that represent the entire list of users for the User Group.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `usergroups:write`
     * } $headerParameters
     *
     * @return Model\UsergroupsUsersUpdatePostResponse200|Model\UsergroupsUsersUpdatePostResponsedefault
     */
    public function usergroupsUsersUpdate(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\UsergroupsUsersUpdate($formParameters, $headerParameters));
    }

    /**
     * List conversations the calling user may access.
     *
     * @param array{
     *    "cursor"?: string, //Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     *    "exclude_archived"?: bool, //Set to `true` to exclude archived channels from the list
     *    "limit"?: int, //The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn't been reached. Must be an integer no larger than 1000.
     *    "token"?: string, //Authentication token. Requires scope: `conversations:read`
     *    "types"?: string, //Mix and match channel types by providing a comma-separated list of any combination of `public_channel`, `private_channel`, `mpim`, `im`
     *    "user"?: string, //Browse conversations by a specific user ID's membership. Non-public channels are restricted to those where the calling user shares membership.
     * } $queryParameters
     *
     * @return Model\UsersConversationsGetResponse200|Model\UsersConversationsGetResponsedefault
     */
    public function usersConversations(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\UsersConversations($queryParameters));
    }

    /**
     * Delete the user profile photo.
     *
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `users.profile:write`
     * } $formParameters
     *
     * @return Model\UsersDeletePhotoPostResponse200|Model\UsersDeletePhotoPostResponsedefault
     */
    public function usersDeletePhoto(array $formParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\UsersDeletePhoto($formParameters));
    }

    /**
     * Gets user presence information.
     *
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `users:read`
     *    "user"?: string, //User to get presence info on. Defaults to the authed user.
     * } $queryParameters
     *
     * @return Model\UsersGetPresenceGetResponse200|Model\UsersGetPresenceGetResponsedefault
     */
    public function usersGetPresence(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\UsersGetPresence($queryParameters));
    }

    /**
     * Get a user's identity.
     *
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `identity.basic`
     * } $queryParameters
     *
     * @return Model\UsersIdentityGetResponsedefault|null
     */
    public function usersIdentity(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\UsersIdentity($queryParameters));
    }

    /**
     * Gets information about a user.
     *
     * @param array{
     *    "include_locale"?: bool, //Set this to `true` to receive the locale for this user. Defaults to `false`
     *    "token"?: string, //Authentication token. Requires scope: `users:read`
     *    "user"?: string, //User to get info on
     * } $queryParameters
     *
     * @return Model\UsersInfoGetResponse200|Model\UsersInfoGetResponsedefault
     */
    public function usersInfo(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\UsersInfo($queryParameters));
    }

    /**
     * Lists all users in a Slack team.
     *
     * @param array{
     *    "cursor"?: string, //Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     *    "include_locale"?: bool, //Set this to `true` to receive the locale for users. Defaults to `false`
     *    "limit"?: int, //The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the users list hasn't been reached. Providing no `limit` value will result in Slack attempting to deliver you the entire result set. If the collection is too large you may experience `limit_required` or HTTP 500 errors.
     *    "team_id"?: string, //Encoded team id to list users in, required if org token is used
     *    "token"?: string, //Authentication token. Requires scope: `users:read`
     * } $queryParameters
     *
     * @return Model\UsersListGetResponse200|Model\UsersListGetResponsedefault
     */
    public function usersList(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\UsersList($queryParameters));
    }

    /**
     * Find a user with an email address.
     *
     * @param array{
     *    "email"?: string, //An email address belonging to a user in the workspace
     *    "token"?: string, //Authentication token. Requires scope: `users:read.email`
     * } $queryParameters
     *
     * @return Model\UsersLookupByEmailGetResponse200|Model\UsersLookupByEmailGetResponsedefault
     */
    public function usersLookupByEmail(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\UsersLookupByEmail($queryParameters));
    }

    /**
     * Retrieves a user's profile information.
     *
     * @param array{
     *    "include_labels"?: bool, //Include labels for each ID in custom profile fields
     *    "token"?: string, //Authentication token. Requires scope: `users.profile:read`
     *    "user"?: string, //User to retrieve profile info for
     * } $queryParameters
     *
     * @return Model\UsersProfileGetGetResponse200|Model\UsersProfileGetGetResponsedefault
     */
    public function usersProfileGet(array $queryParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\UsersProfileGet($queryParameters));
    }

    /**
     * Set the profile information for a user.
     *
     * @param array{
     *    "name"?: string, //Name of a single key to set. Usable only if `profile` is not passed.
     *    "profile"?: string, //Collection of key:value pairs presented as a URL-encoded JSON hash. At most 50 fields may be set. Each field name is limited to 255 characters.
     *    "user"?: string, //ID of user to change. This argument may only be specified by team admins on paid teams.
     *    "value"?: string, //Value to set a single key to. Usable only if `profile` is not passed.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `users.profile:write`
     * } $headerParameters
     *
     * @return Model\UsersProfileSetPostResponse200|Model\UsersProfileSetPostResponsedefault
     */
    public function usersProfileSet(array $formParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\UsersProfileSet($formParameters, $headerParameters));
    }

    /**
     * Marked a user as active. Deprecated and non-functional.
     *
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `users:write`
     * } $headerParameters
     *
     * @return Model\UsersSetActivePostResponse200|Model\UsersSetActivePostResponsedefault
     */
    public function usersSetActive(array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\UsersSetActive($headerParameters));
    }

    /**
     * Set the user profile photo.
     *
     * @param array{
     *    "crop_w"?: string, //Width/height of crop box (always square)
     *    "crop_x"?: string, //X coordinate of top-left corner of crop box
     *    "crop_y"?: string, //Y coordinate of top-left corner of crop box
     *    "image"?: string, //File contents via `multipart/form-data`.
     *    "token"?: string, //Authentication token. Requires scope: `users.profile:write`
     * } $formParameters
     *
     * @return Model\UsersSetPhotoPostResponse200|Model\UsersSetPhotoPostResponsedefault
     */
    public function usersSetPhoto(array $formParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\UsersSetPhoto($formParameters));
    }

    /**
     * Manually sets user presence.
     *
     * @param array{
     *    "presence": string, //Either `auto` or `away`
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `users:write`
     * } $headerParameters
     *
     * @return Model\UsersSetPresencePostResponse200|Model\UsersSetPresencePostResponsedefault
     */
    public function usersSetPresence(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\UsersSetPresence($formParameters, $headerParameters));
    }

    /**
     * Open a view for a user.
     *
     * @param array{
     *    "trigger_id": string, //Exchange a trigger to post to the user.
     *    "view": string, //A [view payload](/reference/surfaces/views). This must be a JSON-encoded string.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `none`
     * } $headerParameters
     *
     * @return Model\ViewsOpenPostResponse200|Model\ViewsOpenPostResponsedefault
     */
    public function viewsOpen(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ViewsOpen($formParameters, $headerParameters));
    }

    /**
     * Publish a static view for a User.
     *
     * @param array{
     *    "hash"?: string, //A string that represents view state to protect against possible race conditions.
     *    "user_id": string, //`id` of the user you want publish a view to.
     *    "view": string, //A [view payload](/reference/surfaces/views). This must be a JSON-encoded string.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `none`
     * } $headerParameters
     *
     * @return Model\ViewsPublishPostResponse200|Model\ViewsPublishPostResponsedefault
     */
    public function viewsPublish(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ViewsPublish($formParameters, $headerParameters));
    }

    /**
     * Push a view onto the stack of a root view.
     *
     * @param array{
     *    "trigger_id": string, //Exchange a trigger to post to the user.
     *    "view": string, //A [view payload](/reference/surfaces/views). This must be a JSON-encoded string.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `none`
     * } $headerParameters
     *
     * @return Model\ViewsPushPostResponse200|Model\ViewsPushPostResponsedefault
     */
    public function viewsPush(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ViewsPush($formParameters, $headerParameters));
    }

    /**
     * Update an existing view.
     *
     * @param array{
     *    "external_id"?: string, //A unique identifier of the view set by the developer. Must be unique for all views on a team. Max length of 255 characters. Either `view_id` or `external_id` is required.
     *    "hash"?: string, //A string that represents view state to protect against possible race conditions.
     *    "view"?: string, //A [view object](/reference/surfaces/views). This must be a JSON-encoded string.
     *    "view_id"?: string, //A unique identifier of the view to be updated. Either `view_id` or `external_id` is required.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `none`
     * } $headerParameters
     *
     * @return Model\ViewsUpdatePostResponse200|Model\ViewsUpdatePostResponsedefault
     */
    public function viewsUpdate(array $formParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\ViewsUpdate($formParameters, $headerParameters));
    }

    /**
     * Indicate that an app's step in a workflow completed execution.
     *
     * @param array{
     *    "outputs"?: string, //Key-value object of outputs from your step. Keys of this object reflect the configured `key` properties of your [`outputs`](/reference/workflows/workflow_step#output) array from your `workflow_step` object.
     *    "workflow_step_execute_id": string, //Context identifier that maps to the correct workflow step execution.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `workflow.steps:execute`
     * } $headerParameters
     *
     * @return Model\WorkflowsStepCompletedPostResponse200|Model\WorkflowsStepCompletedPostResponsedefault
     */
    public function workflowsStepCompleted(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\WorkflowsStepCompleted($formParameters, $headerParameters));
    }

    /**
     * Indicate that an app's step in a workflow failed to execute.
     *
     * @param array{
     *    "error": string, //A JSON-based object with a `message` property that should contain a human readable error message.
     *    "workflow_step_execute_id": string, //Context identifier that maps to the correct workflow step execution.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `workflow.steps:execute`
     * } $headerParameters
     *
     * @return Model\WorkflowsStepFailedPostResponse200|Model\WorkflowsStepFailedPostResponsedefault
     */
    public function workflowsStepFailed(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\WorkflowsStepFailed($formParameters, $headerParameters));
    }

    /**
     * Update the configuration for a workflow extension step.
     *
     * @param array{
     *    "inputs"?: string, //A JSON key-value map of inputs required from a user during configuration. This is the data your app expects to receive when the workflow step starts. **Please note**: the embedded variable format is set and replaced by the workflow system. You cannot create custom variables that will be replaced at runtime. [Read more about variables in workflow steps here](/workflows/steps#variables).
     *    "outputs"?: string, //An JSON array of output objects used during step execution. This is the data your app agrees to provide when your workflow step was executed.
     *    "step_image_url"?: string, //An optional field that can be used to override app image that is shown in the Workflow Builder.
     *    "step_name"?: string, //An optional field that can be used to override the step name that is shown in the Workflow Builder.
     *    "workflow_step_edit_id": string, //A context identifier provided with `view_submission` payloads used to call back to `workflows.updateStep`.
     * } $formParameters
     * @param array{
     *    "token"?: string, //Authentication token. Requires scope: `workflow.steps:execute`
     * } $headerParameters
     *
     * @return Model\WorkflowsUpdateStepPostResponse200|Model\WorkflowsUpdateStepPostResponsedefault
     */
    public function workflowsUpdateStep(array $formParameters, array $headerParameters = [])
    {
        return $this->executeEndpoint(new Endpoint\WorkflowsUpdateStep($formParameters, $headerParameters));
    }

    /**
     * @param list<callable(\Symfony\Contracts\HttpClient\HttpClientInterface): \Symfony\Contracts\HttpClient\HttpClientInterface>              $additionalPlugins     HttpClientInterface decorator factories, applied left-to-right after the server URL decorator
     * @param list<\Symfony\Component\Serializer\Normalizer\NormalizerInterface|\Symfony\Component\Serializer\Normalizer\DenormalizerInterface> $additionalNormalizers
     */
    public static function create(?\Symfony\Contracts\HttpClient\HttpClientInterface $httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [], bool $applyServerPlugins = true)
    {
        $plugins = [];
        if (null === $httpClient) {
            $httpClient = \Symfony\Component\HttpClient\HttpClient::create();
        }
        if ($applyServerPlugins) {
            $plugins[] = new \Jane\Component\OpenApiRuntime\Client\Plugin\ServerUrlHttpClient('https://slack.com/api');
        }
        if (\count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }
        foreach ($plugins as $plugin) {
            $httpClient = $plugin($httpClient);
        }
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new Normalizer\JaneObjectNormalizer()];
        if (\count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new Runtime\Client\FormEncoder()]);

        return new static($httpClient, $serializer);
    }
}
