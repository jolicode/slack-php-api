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

namespace JoliCode\Slack\Api\Normalizer;

use JoliCode\Slack\Api\Runtime\Normalizer\CheckArray;
use JoliCode\Slack\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;
    protected $normalizers = [
        \JoliCode\Slack\Api\Model\BlocksItem::class => BlocksItemNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsBotProfile::class => ObjsBotProfileNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsBotProfileIcons::class => ObjsBotProfileIconsNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsChannel::class => ObjsChannelNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsChannelPurpose::class => ObjsChannelPurposeNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsChannelTopic::class => ObjsChannelTopicNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsComment::class => ObjsCommentNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsConversation::class => ObjsConversationNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsConversationDisplayCounts::class => ObjsConversationDisplayCountsNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsConversationPurpose::class => ObjsConversationPurposeNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsConversationSharesItem::class => ObjsConversationSharesItemNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsConversationTopic::class => ObjsConversationTopicNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsEnterpriseUser::class => ObjsEnterpriseUserNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsExternalOrgMigrations::class => ObjsExternalOrgMigrationsNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsExternalOrgMigrationsCurrentItem::class => ObjsExternalOrgMigrationsCurrentItemNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsFile::class => ObjsFileNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsFileShares::class => ObjsFileSharesNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsIcon::class => ObjsIconNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsMessage::class => ObjsMessageNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItem::class => ObjsMessageAttachmentsItemNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItemActionsItem::class => ObjsMessageAttachmentsItemActionsItemNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItemFieldsItem::class => ObjsMessageAttachmentsItemFieldsItemNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsMessageIcons::class => ObjsMessageIconsNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsMetadata::class => ObjsMetadataNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsPaging::class => ObjsPagingNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsPrimaryOwner::class => ObjsPrimaryOwnerNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsReaction::class => ObjsReactionNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsReminder::class => ObjsReminderNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsResources::class => ObjsResourcesNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsResponseMetadata::class => ObjsResponseMetadataNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsSubteam::class => ObjsSubteamNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsSubteamPrefs::class => ObjsSubteamPrefsNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsTeam::class => ObjsTeamNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsTeamSsoProvider::class => ObjsTeamSsoProviderNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsTeamProfileField::class => ObjsTeamProfileFieldNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsTeamProfileFieldOption::class => ObjsTeamProfileFieldOptionNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsUser::class => ObjsUserNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsUserTeamProfile::class => ObjsUserTeamProfileNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsUserProfile::class => ObjsUserProfileNormalizer::class,

        \JoliCode\Slack\Api\Model\ObjsUserProfileShort::class => ObjsUserProfileShortNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminAppsApprovePostResponse200::class => AdminAppsApprovePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminAppsApprovePostResponsedefault::class => AdminAppsApprovePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminAppsApprovedListGetResponse200::class => AdminAppsApprovedListGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminAppsApprovedListGetResponsedefault::class => AdminAppsApprovedListGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminAppsRequestsListGetResponse200::class => AdminAppsRequestsListGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminAppsRequestsListGetResponsedefault::class => AdminAppsRequestsListGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminAppsRestrictPostResponse200::class => AdminAppsRestrictPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminAppsRestrictPostResponsedefault::class => AdminAppsRestrictPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminAppsRestrictedListGetResponse200::class => AdminAppsRestrictedListGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminAppsRestrictedListGetResponsedefault::class => AdminAppsRestrictedListGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsArchivePostResponse200::class => AdminConversationsArchivePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsArchivePostResponsedefault::class => AdminConversationsArchivePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsConvertToPrivatePostResponse200::class => AdminConversationsConvertToPrivatePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsConvertToPrivatePostResponsedefault::class => AdminConversationsConvertToPrivatePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsCreatePostResponse200::class => AdminConversationsCreatePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsCreatePostResponsedefault::class => AdminConversationsCreatePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsDeletePostResponse200::class => AdminConversationsDeletePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsDeletePostResponsedefault::class => AdminConversationsDeletePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsDisconnectSharedPostResponse200::class => AdminConversationsDisconnectSharedPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsDisconnectSharedPostResponsedefault::class => AdminConversationsDisconnectSharedPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsEkmListOriginalConnectedChannelInfoGetResponse200::class => AdminConversationsEkmListOriginalConnectedChannelInfoGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsEkmListOriginalConnectedChannelInfoGetResponsedefault::class => AdminConversationsEkmListOriginalConnectedChannelInfoGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsGetConversationPrefsGetResponse200::class => AdminConversationsGetConversationPrefsGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsGetConversationPrefsGetResponse200Prefs::class => AdminConversationsGetConversationPrefsGetResponse200PrefsNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsGetConversationPrefsGetResponse200PrefsCanThread::class => AdminConversationsGetConversationPrefsGetResponse200PrefsCanThreadNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsGetConversationPrefsGetResponse200PrefsWhoCanPost::class => AdminConversationsGetConversationPrefsGetResponse200PrefsWhoCanPostNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsGetConversationPrefsGetResponsedefault::class => AdminConversationsGetConversationPrefsGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsGetTeamsGetResponse200::class => AdminConversationsGetTeamsGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsGetTeamsGetResponse200ResponseMetadata::class => AdminConversationsGetTeamsGetResponse200ResponseMetadataNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsGetTeamsGetResponsedefault::class => AdminConversationsGetTeamsGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsInvitePostResponse200::class => AdminConversationsInvitePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsInvitePostResponsedefault::class => AdminConversationsInvitePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsRenamePostResponse200::class => AdminConversationsRenamePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsRenamePostResponsedefault::class => AdminConversationsRenamePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsRestrictAccessAddGroupPostResponse200::class => AdminConversationsRestrictAccessAddGroupPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsRestrictAccessAddGroupPostResponsedefault::class => AdminConversationsRestrictAccessAddGroupPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsRestrictAccessListGroupsGetResponse200::class => AdminConversationsRestrictAccessListGroupsGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsRestrictAccessListGroupsGetResponsedefault::class => AdminConversationsRestrictAccessListGroupsGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsRestrictAccessRemoveGroupPostResponse200::class => AdminConversationsRestrictAccessRemoveGroupPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsRestrictAccessRemoveGroupPostResponsedefault::class => AdminConversationsRestrictAccessRemoveGroupPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsSearchGetResponse200::class => AdminConversationsSearchGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsSearchGetResponsedefault::class => AdminConversationsSearchGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsSetConversationPrefsPostResponse200::class => AdminConversationsSetConversationPrefsPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsSetConversationPrefsPostResponsedefault::class => AdminConversationsSetConversationPrefsPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsSetTeamsPostResponse200::class => AdminConversationsSetTeamsPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsSetTeamsPostResponsedefault::class => AdminConversationsSetTeamsPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsUnarchivePostResponse200::class => AdminConversationsUnarchivePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminConversationsUnarchivePostResponsedefault::class => AdminConversationsUnarchivePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminEmojiAddPostResponse200::class => AdminEmojiAddPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminEmojiAddPostResponsedefault::class => AdminEmojiAddPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminEmojiAddAliasPostResponse200::class => AdminEmojiAddAliasPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminEmojiAddAliasPostResponsedefault::class => AdminEmojiAddAliasPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminEmojiListGetResponse200::class => AdminEmojiListGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminEmojiListGetResponsedefault::class => AdminEmojiListGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminEmojiRemovePostResponse200::class => AdminEmojiRemovePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminEmojiRemovePostResponsedefault::class => AdminEmojiRemovePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminEmojiRenamePostResponse200::class => AdminEmojiRenamePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminEmojiRenamePostResponsedefault::class => AdminEmojiRenamePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminInviteRequestsApprovePostResponse200::class => AdminInviteRequestsApprovePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminInviteRequestsApprovePostResponsedefault::class => AdminInviteRequestsApprovePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminInviteRequestsApprovedListGetResponse200::class => AdminInviteRequestsApprovedListGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminInviteRequestsApprovedListGetResponsedefault::class => AdminInviteRequestsApprovedListGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminInviteRequestsDeniedListGetResponse200::class => AdminInviteRequestsDeniedListGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminInviteRequestsDeniedListGetResponsedefault::class => AdminInviteRequestsDeniedListGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminInviteRequestsDenyPostResponse200::class => AdminInviteRequestsDenyPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminInviteRequestsDenyPostResponsedefault::class => AdminInviteRequestsDenyPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminInviteRequestsListGetResponse200::class => AdminInviteRequestsListGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminInviteRequestsListGetResponsedefault::class => AdminInviteRequestsListGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminTeamsAdminsListGetResponse200::class => AdminTeamsAdminsListGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminTeamsAdminsListGetResponsedefault::class => AdminTeamsAdminsListGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminTeamsCreatePostResponse200::class => AdminTeamsCreatePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminTeamsCreatePostResponsedefault::class => AdminTeamsCreatePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminTeamsListGetResponse200::class => AdminTeamsListGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminTeamsListGetResponsedefault::class => AdminTeamsListGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminTeamsOwnersListGetResponse200::class => AdminTeamsOwnersListGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminTeamsOwnersListGetResponsedefault::class => AdminTeamsOwnersListGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminTeamsSettingsInfoGetResponse200::class => AdminTeamsSettingsInfoGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminTeamsSettingsInfoGetResponsedefault::class => AdminTeamsSettingsInfoGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetDefaultChannelsPostResponse200::class => AdminTeamsSettingsSetDefaultChannelsPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetDefaultChannelsPostResponsedefault::class => AdminTeamsSettingsSetDefaultChannelsPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetDescriptionPostResponse200::class => AdminTeamsSettingsSetDescriptionPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetDescriptionPostResponsedefault::class => AdminTeamsSettingsSetDescriptionPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetDiscoverabilityPostResponse200::class => AdminTeamsSettingsSetDiscoverabilityPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetDiscoverabilityPostResponsedefault::class => AdminTeamsSettingsSetDiscoverabilityPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetIconPostResponse200::class => AdminTeamsSettingsSetIconPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetIconPostResponsedefault::class => AdminTeamsSettingsSetIconPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetNamePostResponse200::class => AdminTeamsSettingsSetNamePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetNamePostResponsedefault::class => AdminTeamsSettingsSetNamePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminUsergroupsAddChannelsPostResponse200::class => AdminUsergroupsAddChannelsPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminUsergroupsAddChannelsPostResponsedefault::class => AdminUsergroupsAddChannelsPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminUsergroupsAddTeamsPostResponse200::class => AdminUsergroupsAddTeamsPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminUsergroupsAddTeamsPostResponsedefault::class => AdminUsergroupsAddTeamsPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminUsergroupsListChannelsGetResponse200::class => AdminUsergroupsListChannelsGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminUsergroupsListChannelsGetResponsedefault::class => AdminUsergroupsListChannelsGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminUsergroupsRemoveChannelsPostResponse200::class => AdminUsergroupsRemoveChannelsPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminUsergroupsRemoveChannelsPostResponsedefault::class => AdminUsergroupsRemoveChannelsPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminUsersAssignPostResponse200::class => AdminUsersAssignPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminUsersAssignPostResponsedefault::class => AdminUsersAssignPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminUsersInvitePostResponse200::class => AdminUsersInvitePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminUsersInvitePostResponsedefault::class => AdminUsersInvitePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminUsersListGetResponse200::class => AdminUsersListGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminUsersListGetResponsedefault::class => AdminUsersListGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminUsersRemovePostResponse200::class => AdminUsersRemovePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminUsersRemovePostResponsedefault::class => AdminUsersRemovePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminUsersSessionInvalidatePostResponse200::class => AdminUsersSessionInvalidatePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminUsersSessionInvalidatePostResponsedefault::class => AdminUsersSessionInvalidatePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminUsersSessionResetPostResponse200::class => AdminUsersSessionResetPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminUsersSessionResetPostResponsedefault::class => AdminUsersSessionResetPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminUsersSetAdminPostResponse200::class => AdminUsersSetAdminPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminUsersSetAdminPostResponsedefault::class => AdminUsersSetAdminPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminUsersSetExpirationPostResponse200::class => AdminUsersSetExpirationPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminUsersSetExpirationPostResponsedefault::class => AdminUsersSetExpirationPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminUsersSetOwnerPostResponse200::class => AdminUsersSetOwnerPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminUsersSetOwnerPostResponsedefault::class => AdminUsersSetOwnerPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AdminUsersSetRegularPostResponse200::class => AdminUsersSetRegularPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AdminUsersSetRegularPostResponsedefault::class => AdminUsersSetRegularPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ApiTestGetResponse200::class => ApiTestGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ApiTestGetResponsedefault::class => ApiTestGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AppsEventAuthorizationsListGetResponse200::class => AppsEventAuthorizationsListGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AppsEventAuthorizationsListGetResponsedefault::class => AppsEventAuthorizationsListGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200::class => AppsPermissionsInfoGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200Info::class => AppsPermissionsInfoGetResponse200InfoNormalizer::class,

        \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoAppHome::class => AppsPermissionsInfoGetResponse200InfoAppHomeNormalizer::class,

        \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoChannel::class => AppsPermissionsInfoGetResponse200InfoChannelNormalizer::class,

        \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoGroup::class => AppsPermissionsInfoGetResponse200InfoGroupNormalizer::class,

        \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoIm::class => AppsPermissionsInfoGetResponse200InfoImNormalizer::class,

        \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoMpim::class => AppsPermissionsInfoGetResponse200InfoMpimNormalizer::class,

        \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoTeam::class => AppsPermissionsInfoGetResponse200InfoTeamNormalizer::class,

        \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponsedefault::class => AppsPermissionsInfoGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AppsPermissionsRequestGetResponse200::class => AppsPermissionsRequestGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AppsPermissionsRequestGetResponsedefault::class => AppsPermissionsRequestGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AppsPermissionsResourcesListGetResponse200::class => AppsPermissionsResourcesListGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AppsPermissionsResourcesListGetResponse200ResourcesItem::class => AppsPermissionsResourcesListGetResponse200ResourcesItemNormalizer::class,

        \JoliCode\Slack\Api\Model\AppsPermissionsResourcesListGetResponse200ResponseMetadata::class => AppsPermissionsResourcesListGetResponse200ResponseMetadataNormalizer::class,

        \JoliCode\Slack\Api\Model\AppsPermissionsResourcesListGetResponsedefault::class => AppsPermissionsResourcesListGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AppsPermissionsScopesListGetResponse200::class => AppsPermissionsScopesListGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AppsPermissionsScopesListGetResponse200Scopes::class => AppsPermissionsScopesListGetResponse200ScopesNormalizer::class,

        \JoliCode\Slack\Api\Model\AppsPermissionsScopesListGetResponsedefault::class => AppsPermissionsScopesListGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AppsPermissionsUsersListGetResponse200::class => AppsPermissionsUsersListGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AppsPermissionsUsersListGetResponsedefault::class => AppsPermissionsUsersListGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AppsPermissionsUsersRequestGetResponse200::class => AppsPermissionsUsersRequestGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AppsPermissionsUsersRequestGetResponsedefault::class => AppsPermissionsUsersRequestGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AppsUninstallGetResponse200::class => AppsUninstallGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AppsUninstallGetResponsedefault::class => AppsUninstallGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AuthRevokeGetResponse200::class => AuthRevokeGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AuthRevokeGetResponsedefault::class => AuthRevokeGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\AuthTestGetResponse200::class => AuthTestGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\AuthTestGetResponsedefault::class => AuthTestGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\BotsInfoGetResponse200::class => BotsInfoGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\BotsInfoGetResponse200Bot::class => BotsInfoGetResponse200BotNormalizer::class,

        \JoliCode\Slack\Api\Model\BotsInfoGetResponse200BotIcons::class => BotsInfoGetResponse200BotIconsNormalizer::class,

        \JoliCode\Slack\Api\Model\BotsInfoGetResponsedefault::class => BotsInfoGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\CallsAddPostResponse200::class => CallsAddPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\CallsAddPostResponsedefault::class => CallsAddPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\CallsEndPostResponse200::class => CallsEndPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\CallsEndPostResponsedefault::class => CallsEndPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\CallsInfoGetResponse200::class => CallsInfoGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\CallsInfoGetResponsedefault::class => CallsInfoGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\CallsParticipantsAddPostResponse200::class => CallsParticipantsAddPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\CallsParticipantsAddPostResponsedefault::class => CallsParticipantsAddPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\CallsParticipantsRemovePostResponse200::class => CallsParticipantsRemovePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\CallsParticipantsRemovePostResponsedefault::class => CallsParticipantsRemovePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\CallsUpdatePostResponse200::class => CallsUpdatePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\CallsUpdatePostResponsedefault::class => CallsUpdatePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ChatDeletePostResponse200::class => ChatDeletePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ChatDeletePostResponsedefault::class => ChatDeletePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ChatDeleteScheduledMessagePostResponse200::class => ChatDeleteScheduledMessagePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ChatDeleteScheduledMessagePostResponsedefault::class => ChatDeleteScheduledMessagePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ChatGetPermalinkGetResponse200::class => ChatGetPermalinkGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ChatGetPermalinkGetResponsedefault::class => ChatGetPermalinkGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ChatMeMessagePostResponse200::class => ChatMeMessagePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ChatMeMessagePostResponsedefault::class => ChatMeMessagePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ChatPostEphemeralPostResponse200::class => ChatPostEphemeralPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ChatPostEphemeralPostResponsedefault::class => ChatPostEphemeralPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ChatPostMessagePostResponse200::class => ChatPostMessagePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ChatPostMessagePostResponsedefault::class => ChatPostMessagePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200::class => ChatScheduleMessagePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200Message::class => ChatScheduleMessagePostResponse200MessageNormalizer::class,

        \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200MessageAttachmentsItem::class => ChatScheduleMessagePostResponse200MessageAttachmentsItemNormalizer::class,

        \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponsedefault::class => ChatScheduleMessagePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ChatScheduledMessagesListGetResponse200::class => ChatScheduledMessagesListGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ChatScheduledMessagesListGetResponse200ResponseMetadata::class => ChatScheduledMessagesListGetResponse200ResponseMetadataNormalizer::class,

        \JoliCode\Slack\Api\Model\ChatScheduledMessagesListGetResponse200ScheduledMessagesItem::class => ChatScheduledMessagesListGetResponse200ScheduledMessagesItemNormalizer::class,

        \JoliCode\Slack\Api\Model\ChatScheduledMessagesListGetResponsedefault::class => ChatScheduledMessagesListGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ChatUnfurlPostResponse200::class => ChatUnfurlPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ChatUnfurlPostResponsedefault::class => ChatUnfurlPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ChatUpdatePostResponse200::class => ChatUpdatePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ChatUpdatePostResponse200Message::class => ChatUpdatePostResponse200MessageNormalizer::class,

        \JoliCode\Slack\Api\Model\ChatUpdatePostResponsedefault::class => ChatUpdatePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsArchivePostResponse200::class => ConversationsArchivePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsArchivePostResponsedefault::class => ConversationsArchivePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsClosePostResponse200::class => ConversationsClosePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsClosePostResponsedefault::class => ConversationsClosePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsCreatePostResponse200::class => ConversationsCreatePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsCreatePostResponsedefault::class => ConversationsCreatePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsHistoryGetResponse200::class => ConversationsHistoryGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsHistoryGetResponse200ResponseMetadata::class => ConversationsHistoryGetResponse200ResponseMetadataNormalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsHistoryGetResponsedefault::class => ConversationsHistoryGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsInfoGetResponse200::class => ConversationsInfoGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsInfoGetResponsedefault::class => ConversationsInfoGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsInvitePostResponse200::class => ConversationsInvitePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsInvitePostResponsedefault::class => ConversationsInvitePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsInvitePostResponsedefaultErrorsItem::class => ConversationsInvitePostResponsedefaultErrorsItemNormalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsJoinPostResponse200::class => ConversationsJoinPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsJoinPostResponse200ResponseMetadata::class => ConversationsJoinPostResponse200ResponseMetadataNormalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsJoinPostResponsedefault::class => ConversationsJoinPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsKickPostResponse200::class => ConversationsKickPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsKickPostResponsedefault::class => ConversationsKickPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsLeavePostResponse200::class => ConversationsLeavePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsLeavePostResponsedefault::class => ConversationsLeavePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsListGetResponse200::class => ConversationsListGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsListGetResponse200ResponseMetadata::class => ConversationsListGetResponse200ResponseMetadataNormalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsListGetResponsedefault::class => ConversationsListGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsMarkPostResponse200::class => ConversationsMarkPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsMarkPostResponsedefault::class => ConversationsMarkPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsMembersGetResponse200::class => ConversationsMembersGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsMembersGetResponse200ResponseMetadata::class => ConversationsMembersGetResponse200ResponseMetadataNormalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsMembersGetResponsedefault::class => ConversationsMembersGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsOpenPostResponse200::class => ConversationsOpenPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsOpenPostResponse200ChannelItem1::class => ConversationsOpenPostResponse200ChannelItem1Normalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsOpenPostResponsedefault::class => ConversationsOpenPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsRenamePostResponse200::class => ConversationsRenamePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsRenamePostResponsedefault::class => ConversationsRenamePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsRepliesGetResponse200::class => ConversationsRepliesGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsRepliesGetResponse200MessagesItemItem0::class => ConversationsRepliesGetResponse200MessagesItemItem0Normalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsRepliesGetResponse200MessagesItemItem1::class => ConversationsRepliesGetResponse200MessagesItemItem1Normalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsRepliesGetResponse200ResponseMetadata::class => ConversationsRepliesGetResponse200ResponseMetadataNormalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsRepliesGetResponsedefault::class => ConversationsRepliesGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsSetPurposePostResponse200::class => ConversationsSetPurposePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsSetPurposePostResponsedefault::class => ConversationsSetPurposePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsSetTopicPostResponse200::class => ConversationsSetTopicPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsSetTopicPostResponsedefault::class => ConversationsSetTopicPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsUnarchivePostResponse200::class => ConversationsUnarchivePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ConversationsUnarchivePostResponsedefault::class => ConversationsUnarchivePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\DialogOpenGetResponse200::class => DialogOpenGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\DialogOpenGetResponsedefault::class => DialogOpenGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\DndEndDndPostResponse200::class => DndEndDndPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\DndEndDndPostResponsedefault::class => DndEndDndPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\DndEndSnoozePostResponse200::class => DndEndSnoozePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\DndEndSnoozePostResponsedefault::class => DndEndSnoozePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\DndInfoGetResponse200::class => DndInfoGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\DndInfoGetResponsedefault::class => DndInfoGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\DndSetSnoozePostResponse200::class => DndSetSnoozePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\DndSetSnoozePostResponsedefault::class => DndSetSnoozePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\DndTeamInfoGetResponse200::class => DndTeamInfoGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\DndTeamInfoGetResponsedefault::class => DndTeamInfoGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\EmojiListGetResponse200::class => EmojiListGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\EmojiListGetResponsedefault::class => EmojiListGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\FilesCommentsDeletePostResponse200::class => FilesCommentsDeletePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\FilesCommentsDeletePostResponsedefault::class => FilesCommentsDeletePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\FilesCompleteUploadExternalPostResponse200::class => FilesCompleteUploadExternalPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\FilesCompleteUploadExternalPostResponse200FilesItem::class => FilesCompleteUploadExternalPostResponse200FilesItemNormalizer::class,

        \JoliCode\Slack\Api\Model\FilesCompleteUploadExternalPostResponsedefault::class => FilesCompleteUploadExternalPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\FilesDeletePostResponse200::class => FilesDeletePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\FilesDeletePostResponsedefault::class => FilesDeletePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\FilesGetUploadURLExternalPostResponse200::class => FilesGetUploadURLExternalPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\FilesGetUploadURLExternalPostResponsedefault::class => FilesGetUploadURLExternalPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\FilesInfoGetResponse200::class => FilesInfoGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\FilesInfoGetResponsedefault::class => FilesInfoGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\FilesListGetResponse200::class => FilesListGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\FilesListGetResponsedefault::class => FilesListGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\FilesRemoteAddPostResponse200::class => FilesRemoteAddPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\FilesRemoteAddPostResponsedefault::class => FilesRemoteAddPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\FilesRemoteInfoGetResponse200::class => FilesRemoteInfoGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\FilesRemoteInfoGetResponsedefault::class => FilesRemoteInfoGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\FilesRemoteListGetResponse200::class => FilesRemoteListGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\FilesRemoteListGetResponsedefault::class => FilesRemoteListGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\FilesRemoteRemovePostResponse200::class => FilesRemoteRemovePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\FilesRemoteRemovePostResponsedefault::class => FilesRemoteRemovePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\FilesRemoteShareGetResponse200::class => FilesRemoteShareGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\FilesRemoteShareGetResponsedefault::class => FilesRemoteShareGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\FilesRemoteUpdatePostResponse200::class => FilesRemoteUpdatePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\FilesRemoteUpdatePostResponsedefault::class => FilesRemoteUpdatePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\FilesRevokePublicURLPostResponse200::class => FilesRevokePublicURLPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\FilesRevokePublicURLPostResponsedefault::class => FilesRevokePublicURLPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\FilesSharedPublicURLPostResponse200::class => FilesSharedPublicURLPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\FilesSharedPublicURLPostResponsedefault::class => FilesSharedPublicURLPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\FilesUploadPostResponse200::class => FilesUploadPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\FilesUploadPostResponsedefault::class => FilesUploadPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\MigrationExchangeGetResponse200::class => MigrationExchangeGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\MigrationExchangeGetResponsedefault::class => MigrationExchangeGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\OauthAccessGetResponse200::class => OauthAccessGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\OauthAccessGetResponsedefault::class => OauthAccessGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\OauthTokenGetResponse200::class => OauthTokenGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\OauthTokenGetResponsedefault::class => OauthTokenGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\OauthV2AccessGetResponse200::class => OauthV2AccessGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\OauthV2AccessGetResponsedefault::class => OauthV2AccessGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\PinsAddPostResponse200::class => PinsAddPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\PinsAddPostResponsedefault::class => PinsAddPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\PinsListGetResponse200Item0::class => PinsListGetResponse200Item0Normalizer::class,

        \JoliCode\Slack\Api\Model\PinsListGetResponse200Item0ItemsItem0::class => PinsListGetResponse200Item0ItemsItem0Normalizer::class,

        \JoliCode\Slack\Api\Model\PinsListGetResponse200Item0ItemsItem1::class => PinsListGetResponse200Item0ItemsItem1Normalizer::class,

        \JoliCode\Slack\Api\Model\PinsListGetResponse200Item1::class => PinsListGetResponse200Item1Normalizer::class,

        \JoliCode\Slack\Api\Model\PinsListGetResponsedefault::class => PinsListGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\PinsRemovePostResponse200::class => PinsRemovePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\PinsRemovePostResponsedefault::class => PinsRemovePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ReactionsAddPostResponse200::class => ReactionsAddPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ReactionsAddPostResponsedefault::class => ReactionsAddPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ReactionsGetGetResponsedefault::class => ReactionsGetGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ReactionsListGetResponse200::class => ReactionsListGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ReactionsListGetResponse200ItemsItemItem0::class => ReactionsListGetResponse200ItemsItemItem0Normalizer::class,

        \JoliCode\Slack\Api\Model\ReactionsListGetResponse200ItemsItemItem1::class => ReactionsListGetResponse200ItemsItemItem1Normalizer::class,

        \JoliCode\Slack\Api\Model\ReactionsListGetResponse200ItemsItemItem2::class => ReactionsListGetResponse200ItemsItemItem2Normalizer::class,

        \JoliCode\Slack\Api\Model\ReactionsListGetResponsedefault::class => ReactionsListGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ReactionsRemovePostResponse200::class => ReactionsRemovePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ReactionsRemovePostResponsedefault::class => ReactionsRemovePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\RemindersAddPostResponse200::class => RemindersAddPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\RemindersAddPostResponsedefault::class => RemindersAddPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\RemindersCompletePostResponse200::class => RemindersCompletePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\RemindersCompletePostResponsedefault::class => RemindersCompletePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\RemindersDeletePostResponse200::class => RemindersDeletePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\RemindersDeletePostResponsedefault::class => RemindersDeletePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\RemindersInfoGetResponse200::class => RemindersInfoGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\RemindersInfoGetResponsedefault::class => RemindersInfoGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\RemindersListGetResponse200::class => RemindersListGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\RemindersListGetResponsedefault::class => RemindersListGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\RtmConnectGetResponse200::class => RtmConnectGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\RtmConnectGetResponse200Self::class => RtmConnectGetResponse200SelfNormalizer::class,

        \JoliCode\Slack\Api\Model\RtmConnectGetResponse200Team::class => RtmConnectGetResponse200TeamNormalizer::class,

        \JoliCode\Slack\Api\Model\RtmConnectGetResponsedefault::class => RtmConnectGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\SearchMessagesGetResponse200::class => SearchMessagesGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\SearchMessagesGetResponsedefault::class => SearchMessagesGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\StarsAddPostResponse200::class => StarsAddPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\StarsAddPostResponsedefault::class => StarsAddPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\StarsListGetResponse200::class => StarsListGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\StarsListGetResponse200ItemsItemItem0::class => StarsListGetResponse200ItemsItemItem0Normalizer::class,

        \JoliCode\Slack\Api\Model\StarsListGetResponse200ItemsItemItem1::class => StarsListGetResponse200ItemsItemItem1Normalizer::class,

        \JoliCode\Slack\Api\Model\StarsListGetResponse200ItemsItemItem2::class => StarsListGetResponse200ItemsItemItem2Normalizer::class,

        \JoliCode\Slack\Api\Model\StarsListGetResponse200ItemsItemItem3::class => StarsListGetResponse200ItemsItemItem3Normalizer::class,

        \JoliCode\Slack\Api\Model\StarsListGetResponse200ItemsItemItem4::class => StarsListGetResponse200ItemsItemItem4Normalizer::class,

        \JoliCode\Slack\Api\Model\StarsListGetResponse200ItemsItemItem5::class => StarsListGetResponse200ItemsItemItem5Normalizer::class,

        \JoliCode\Slack\Api\Model\StarsListGetResponsedefault::class => StarsListGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\StarsRemovePostResponse200::class => StarsRemovePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\StarsRemovePostResponsedefault::class => StarsRemovePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\TeamAccessLogsGetResponse200::class => TeamAccessLogsGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\TeamAccessLogsGetResponse200LoginsItem::class => TeamAccessLogsGetResponse200LoginsItemNormalizer::class,

        \JoliCode\Slack\Api\Model\TeamAccessLogsGetResponsedefault::class => TeamAccessLogsGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\TeamBillableInfoGetResponse200::class => TeamBillableInfoGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\TeamBillableInfoGetResponsedefault::class => TeamBillableInfoGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\TeamInfoGetResponse200::class => TeamInfoGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\TeamInfoGetResponsedefault::class => TeamInfoGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\TeamIntegrationLogsGetResponse200::class => TeamIntegrationLogsGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\TeamIntegrationLogsGetResponse200LogsItem::class => TeamIntegrationLogsGetResponse200LogsItemNormalizer::class,

        \JoliCode\Slack\Api\Model\TeamIntegrationLogsGetResponsedefault::class => TeamIntegrationLogsGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\TeamProfileGetGetResponse200::class => TeamProfileGetGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\TeamProfileGetGetResponse200Profile::class => TeamProfileGetGetResponse200ProfileNormalizer::class,

        \JoliCode\Slack\Api\Model\TeamProfileGetGetResponsedefault::class => TeamProfileGetGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\UsergroupsCreatePostResponse200::class => UsergroupsCreatePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\UsergroupsCreatePostResponsedefault::class => UsergroupsCreatePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\UsergroupsDisablePostResponse200::class => UsergroupsDisablePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\UsergroupsDisablePostResponsedefault::class => UsergroupsDisablePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\UsergroupsEnablePostResponse200::class => UsergroupsEnablePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\UsergroupsEnablePostResponsedefault::class => UsergroupsEnablePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\UsergroupsListGetResponse200::class => UsergroupsListGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\UsergroupsListGetResponsedefault::class => UsergroupsListGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\UsergroupsUpdatePostResponse200::class => UsergroupsUpdatePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\UsergroupsUpdatePostResponsedefault::class => UsergroupsUpdatePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\UsergroupsUsersListGetResponse200::class => UsergroupsUsersListGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\UsergroupsUsersListGetResponsedefault::class => UsergroupsUsersListGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\UsergroupsUsersUpdatePostResponse200::class => UsergroupsUsersUpdatePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\UsergroupsUsersUpdatePostResponsedefault::class => UsergroupsUsersUpdatePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\UsersConversationsGetResponse200::class => UsersConversationsGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\UsersConversationsGetResponse200ResponseMetadata::class => UsersConversationsGetResponse200ResponseMetadataNormalizer::class,

        \JoliCode\Slack\Api\Model\UsersConversationsGetResponsedefault::class => UsersConversationsGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\UsersDeletePhotoPostResponse200::class => UsersDeletePhotoPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\UsersDeletePhotoPostResponsedefault::class => UsersDeletePhotoPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\UsersGetPresenceGetResponse200::class => UsersGetPresenceGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\UsersGetPresenceGetResponsedefault::class => UsersGetPresenceGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item0::class => UsersIdentityGetResponse200Item0Normalizer::class,

        \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item0Team::class => UsersIdentityGetResponse200Item0TeamNormalizer::class,

        \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item0User::class => UsersIdentityGetResponse200Item0UserNormalizer::class,

        \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item1::class => UsersIdentityGetResponse200Item1Normalizer::class,

        \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item1Team::class => UsersIdentityGetResponse200Item1TeamNormalizer::class,

        \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item1User::class => UsersIdentityGetResponse200Item1UserNormalizer::class,

        \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item2::class => UsersIdentityGetResponse200Item2Normalizer::class,

        \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item2Team::class => UsersIdentityGetResponse200Item2TeamNormalizer::class,

        \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item2User::class => UsersIdentityGetResponse200Item2UserNormalizer::class,

        \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item3::class => UsersIdentityGetResponse200Item3Normalizer::class,

        \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item3Team::class => UsersIdentityGetResponse200Item3TeamNormalizer::class,

        \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item3User::class => UsersIdentityGetResponse200Item3UserNormalizer::class,

        \JoliCode\Slack\Api\Model\UsersIdentityGetResponsedefault::class => UsersIdentityGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\UsersInfoGetResponse200::class => UsersInfoGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\UsersInfoGetResponsedefault::class => UsersInfoGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\UsersListGetResponse200::class => UsersListGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\UsersListGetResponsedefault::class => UsersListGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\UsersLookupByEmailGetResponse200::class => UsersLookupByEmailGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\UsersLookupByEmailGetResponsedefault::class => UsersLookupByEmailGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\UsersProfileGetGetResponse200::class => UsersProfileGetGetResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\UsersProfileGetGetResponsedefault::class => UsersProfileGetGetResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\UsersProfileSetPostResponse200::class => UsersProfileSetPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\UsersProfileSetPostResponsedefault::class => UsersProfileSetPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\UsersSetActivePostResponse200::class => UsersSetActivePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\UsersSetActivePostResponsedefault::class => UsersSetActivePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\UsersSetPhotoPostResponse200::class => UsersSetPhotoPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\UsersSetPhotoPostResponse200Profile::class => UsersSetPhotoPostResponse200ProfileNormalizer::class,

        \JoliCode\Slack\Api\Model\UsersSetPhotoPostResponsedefault::class => UsersSetPhotoPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\UsersSetPresencePostResponse200::class => UsersSetPresencePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\UsersSetPresencePostResponsedefault::class => UsersSetPresencePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ViewsOpenPostResponse200::class => ViewsOpenPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ViewsOpenPostResponsedefault::class => ViewsOpenPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ViewsPublishPostResponse200::class => ViewsPublishPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ViewsPublishPostResponsedefault::class => ViewsPublishPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ViewsPushPostResponse200::class => ViewsPushPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ViewsPushPostResponsedefault::class => ViewsPushPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\ViewsUpdatePostResponse200::class => ViewsUpdatePostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\ViewsUpdatePostResponsedefault::class => ViewsUpdatePostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\WorkflowsStepCompletedPostResponse200::class => WorkflowsStepCompletedPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\WorkflowsStepCompletedPostResponsedefault::class => WorkflowsStepCompletedPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\WorkflowsStepFailedPostResponse200::class => WorkflowsStepFailedPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\WorkflowsStepFailedPostResponsedefault::class => WorkflowsStepFailedPostResponsedefaultNormalizer::class,

        \JoliCode\Slack\Api\Model\WorkflowsUpdateStepPostResponse200::class => WorkflowsUpdateStepPostResponse200Normalizer::class,

        \JoliCode\Slack\Api\Model\WorkflowsUpdateStepPostResponsedefault::class => WorkflowsUpdateStepPostResponsedefaultNormalizer::class,

        \Jane\Component\JsonSchemaRuntime\Reference::class => \JoliCode\Slack\Api\Runtime\Normalizer\ReferenceNormalizer::class,
    ];
    protected $normalizersCache = [];

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \array_key_exists($type, $this->normalizers);
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \array_key_exists(\get_class($data), $this->normalizers);
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[\get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);

        return $normalizer->normalize($data, $format, $context);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);

        return $denormalizer->denormalize($data, $type, $format, $context);
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return array_combine(array_keys($this->normalizers), array_fill(0, \count($this->normalizers), false));
    }

    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }

    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = match ($normalizerClass) {
            BlocksItemNormalizer::class => new BlocksItemNormalizer(),
            ObjsBotProfileNormalizer::class => new ObjsBotProfileNormalizer(),
            ObjsBotProfileIconsNormalizer::class => new ObjsBotProfileIconsNormalizer(),
            ObjsChannelNormalizer::class => new ObjsChannelNormalizer(),
            ObjsChannelPurposeNormalizer::class => new ObjsChannelPurposeNormalizer(),
            ObjsChannelTopicNormalizer::class => new ObjsChannelTopicNormalizer(),
            ObjsCommentNormalizer::class => new ObjsCommentNormalizer(),
            ObjsConversationNormalizer::class => new ObjsConversationNormalizer(),
            ObjsConversationDisplayCountsNormalizer::class => new ObjsConversationDisplayCountsNormalizer(),
            ObjsConversationPurposeNormalizer::class => new ObjsConversationPurposeNormalizer(),
            ObjsConversationSharesItemNormalizer::class => new ObjsConversationSharesItemNormalizer(),
            ObjsConversationTopicNormalizer::class => new ObjsConversationTopicNormalizer(),
            ObjsEnterpriseUserNormalizer::class => new ObjsEnterpriseUserNormalizer(),
            ObjsExternalOrgMigrationsNormalizer::class => new ObjsExternalOrgMigrationsNormalizer(),
            ObjsExternalOrgMigrationsCurrentItemNormalizer::class => new ObjsExternalOrgMigrationsCurrentItemNormalizer(),
            ObjsFileNormalizer::class => new ObjsFileNormalizer(),
            ObjsFileSharesNormalizer::class => new ObjsFileSharesNormalizer(),
            ObjsIconNormalizer::class => new ObjsIconNormalizer(),
            ObjsMessageNormalizer::class => new ObjsMessageNormalizer(),
            ObjsMessageAttachmentsItemNormalizer::class => new ObjsMessageAttachmentsItemNormalizer(),
            ObjsMessageAttachmentsItemActionsItemNormalizer::class => new ObjsMessageAttachmentsItemActionsItemNormalizer(),
            ObjsMessageAttachmentsItemFieldsItemNormalizer::class => new ObjsMessageAttachmentsItemFieldsItemNormalizer(),
            ObjsMessageIconsNormalizer::class => new ObjsMessageIconsNormalizer(),
            ObjsMetadataNormalizer::class => new ObjsMetadataNormalizer(),
            ObjsPagingNormalizer::class => new ObjsPagingNormalizer(),
            ObjsPrimaryOwnerNormalizer::class => new ObjsPrimaryOwnerNormalizer(),
            ObjsReactionNormalizer::class => new ObjsReactionNormalizer(),
            ObjsReminderNormalizer::class => new ObjsReminderNormalizer(),
            ObjsResourcesNormalizer::class => new ObjsResourcesNormalizer(),
            ObjsResponseMetadataNormalizer::class => new ObjsResponseMetadataNormalizer(),
            ObjsSubteamNormalizer::class => new ObjsSubteamNormalizer(),
            ObjsSubteamPrefsNormalizer::class => new ObjsSubteamPrefsNormalizer(),
            ObjsTeamNormalizer::class => new ObjsTeamNormalizer(),
            ObjsTeamSsoProviderNormalizer::class => new ObjsTeamSsoProviderNormalizer(),
            ObjsTeamProfileFieldNormalizer::class => new ObjsTeamProfileFieldNormalizer(),
            ObjsTeamProfileFieldOptionNormalizer::class => new ObjsTeamProfileFieldOptionNormalizer(),
            ObjsUserNormalizer::class => new ObjsUserNormalizer(),
            ObjsUserTeamProfileNormalizer::class => new ObjsUserTeamProfileNormalizer(),
            ObjsUserProfileNormalizer::class => new ObjsUserProfileNormalizer(),
            ObjsUserProfileShortNormalizer::class => new ObjsUserProfileShortNormalizer(),
            AdminAppsApprovePostResponse200Normalizer::class => new AdminAppsApprovePostResponse200Normalizer(),
            AdminAppsApprovePostResponsedefaultNormalizer::class => new AdminAppsApprovePostResponsedefaultNormalizer(),
            AdminAppsApprovedListGetResponse200Normalizer::class => new AdminAppsApprovedListGetResponse200Normalizer(),
            AdminAppsApprovedListGetResponsedefaultNormalizer::class => new AdminAppsApprovedListGetResponsedefaultNormalizer(),
            AdminAppsRequestsListGetResponse200Normalizer::class => new AdminAppsRequestsListGetResponse200Normalizer(),
            AdminAppsRequestsListGetResponsedefaultNormalizer::class => new AdminAppsRequestsListGetResponsedefaultNormalizer(),
            AdminAppsRestrictPostResponse200Normalizer::class => new AdminAppsRestrictPostResponse200Normalizer(),
            AdminAppsRestrictPostResponsedefaultNormalizer::class => new AdminAppsRestrictPostResponsedefaultNormalizer(),
            AdminAppsRestrictedListGetResponse200Normalizer::class => new AdminAppsRestrictedListGetResponse200Normalizer(),
            AdminAppsRestrictedListGetResponsedefaultNormalizer::class => new AdminAppsRestrictedListGetResponsedefaultNormalizer(),
            AdminConversationsArchivePostResponse200Normalizer::class => new AdminConversationsArchivePostResponse200Normalizer(),
            AdminConversationsArchivePostResponsedefaultNormalizer::class => new AdminConversationsArchivePostResponsedefaultNormalizer(),
            AdminConversationsConvertToPrivatePostResponse200Normalizer::class => new AdminConversationsConvertToPrivatePostResponse200Normalizer(),
            AdminConversationsConvertToPrivatePostResponsedefaultNormalizer::class => new AdminConversationsConvertToPrivatePostResponsedefaultNormalizer(),
            AdminConversationsCreatePostResponse200Normalizer::class => new AdminConversationsCreatePostResponse200Normalizer(),
            AdminConversationsCreatePostResponsedefaultNormalizer::class => new AdminConversationsCreatePostResponsedefaultNormalizer(),
            AdminConversationsDeletePostResponse200Normalizer::class => new AdminConversationsDeletePostResponse200Normalizer(),
            AdminConversationsDeletePostResponsedefaultNormalizer::class => new AdminConversationsDeletePostResponsedefaultNormalizer(),
            AdminConversationsDisconnectSharedPostResponse200Normalizer::class => new AdminConversationsDisconnectSharedPostResponse200Normalizer(),
            AdminConversationsDisconnectSharedPostResponsedefaultNormalizer::class => new AdminConversationsDisconnectSharedPostResponsedefaultNormalizer(),
            AdminConversationsEkmListOriginalConnectedChannelInfoGetResponse200Normalizer::class => new AdminConversationsEkmListOriginalConnectedChannelInfoGetResponse200Normalizer(),
            AdminConversationsEkmListOriginalConnectedChannelInfoGetResponsedefaultNormalizer::class => new AdminConversationsEkmListOriginalConnectedChannelInfoGetResponsedefaultNormalizer(),
            AdminConversationsGetConversationPrefsGetResponse200Normalizer::class => new AdminConversationsGetConversationPrefsGetResponse200Normalizer(),
            AdminConversationsGetConversationPrefsGetResponse200PrefsNormalizer::class => new AdminConversationsGetConversationPrefsGetResponse200PrefsNormalizer(),
            AdminConversationsGetConversationPrefsGetResponse200PrefsCanThreadNormalizer::class => new AdminConversationsGetConversationPrefsGetResponse200PrefsCanThreadNormalizer(),
            AdminConversationsGetConversationPrefsGetResponse200PrefsWhoCanPostNormalizer::class => new AdminConversationsGetConversationPrefsGetResponse200PrefsWhoCanPostNormalizer(),
            AdminConversationsGetConversationPrefsGetResponsedefaultNormalizer::class => new AdminConversationsGetConversationPrefsGetResponsedefaultNormalizer(),
            AdminConversationsGetTeamsGetResponse200Normalizer::class => new AdminConversationsGetTeamsGetResponse200Normalizer(),
            AdminConversationsGetTeamsGetResponse200ResponseMetadataNormalizer::class => new AdminConversationsGetTeamsGetResponse200ResponseMetadataNormalizer(),
            AdminConversationsGetTeamsGetResponsedefaultNormalizer::class => new AdminConversationsGetTeamsGetResponsedefaultNormalizer(),
            AdminConversationsInvitePostResponse200Normalizer::class => new AdminConversationsInvitePostResponse200Normalizer(),
            AdminConversationsInvitePostResponsedefaultNormalizer::class => new AdminConversationsInvitePostResponsedefaultNormalizer(),
            AdminConversationsRenamePostResponse200Normalizer::class => new AdminConversationsRenamePostResponse200Normalizer(),
            AdminConversationsRenamePostResponsedefaultNormalizer::class => new AdminConversationsRenamePostResponsedefaultNormalizer(),
            AdminConversationsRestrictAccessAddGroupPostResponse200Normalizer::class => new AdminConversationsRestrictAccessAddGroupPostResponse200Normalizer(),
            AdminConversationsRestrictAccessAddGroupPostResponsedefaultNormalizer::class => new AdminConversationsRestrictAccessAddGroupPostResponsedefaultNormalizer(),
            AdminConversationsRestrictAccessListGroupsGetResponse200Normalizer::class => new AdminConversationsRestrictAccessListGroupsGetResponse200Normalizer(),
            AdminConversationsRestrictAccessListGroupsGetResponsedefaultNormalizer::class => new AdminConversationsRestrictAccessListGroupsGetResponsedefaultNormalizer(),
            AdminConversationsRestrictAccessRemoveGroupPostResponse200Normalizer::class => new AdminConversationsRestrictAccessRemoveGroupPostResponse200Normalizer(),
            AdminConversationsRestrictAccessRemoveGroupPostResponsedefaultNormalizer::class => new AdminConversationsRestrictAccessRemoveGroupPostResponsedefaultNormalizer(),
            AdminConversationsSearchGetResponse200Normalizer::class => new AdminConversationsSearchGetResponse200Normalizer(),
            AdminConversationsSearchGetResponsedefaultNormalizer::class => new AdminConversationsSearchGetResponsedefaultNormalizer(),
            AdminConversationsSetConversationPrefsPostResponse200Normalizer::class => new AdminConversationsSetConversationPrefsPostResponse200Normalizer(),
            AdminConversationsSetConversationPrefsPostResponsedefaultNormalizer::class => new AdminConversationsSetConversationPrefsPostResponsedefaultNormalizer(),
            AdminConversationsSetTeamsPostResponse200Normalizer::class => new AdminConversationsSetTeamsPostResponse200Normalizer(),
            AdminConversationsSetTeamsPostResponsedefaultNormalizer::class => new AdminConversationsSetTeamsPostResponsedefaultNormalizer(),
            AdminConversationsUnarchivePostResponse200Normalizer::class => new AdminConversationsUnarchivePostResponse200Normalizer(),
            AdminConversationsUnarchivePostResponsedefaultNormalizer::class => new AdminConversationsUnarchivePostResponsedefaultNormalizer(),
            AdminEmojiAddPostResponse200Normalizer::class => new AdminEmojiAddPostResponse200Normalizer(),
            AdminEmojiAddPostResponsedefaultNormalizer::class => new AdminEmojiAddPostResponsedefaultNormalizer(),
            AdminEmojiAddAliasPostResponse200Normalizer::class => new AdminEmojiAddAliasPostResponse200Normalizer(),
            AdminEmojiAddAliasPostResponsedefaultNormalizer::class => new AdminEmojiAddAliasPostResponsedefaultNormalizer(),
            AdminEmojiListGetResponse200Normalizer::class => new AdminEmojiListGetResponse200Normalizer(),
            AdminEmojiListGetResponsedefaultNormalizer::class => new AdminEmojiListGetResponsedefaultNormalizer(),
            AdminEmojiRemovePostResponse200Normalizer::class => new AdminEmojiRemovePostResponse200Normalizer(),
            AdminEmojiRemovePostResponsedefaultNormalizer::class => new AdminEmojiRemovePostResponsedefaultNormalizer(),
            AdminEmojiRenamePostResponse200Normalizer::class => new AdminEmojiRenamePostResponse200Normalizer(),
            AdminEmojiRenamePostResponsedefaultNormalizer::class => new AdminEmojiRenamePostResponsedefaultNormalizer(),
            AdminInviteRequestsApprovePostResponse200Normalizer::class => new AdminInviteRequestsApprovePostResponse200Normalizer(),
            AdminInviteRequestsApprovePostResponsedefaultNormalizer::class => new AdminInviteRequestsApprovePostResponsedefaultNormalizer(),
            AdminInviteRequestsApprovedListGetResponse200Normalizer::class => new AdminInviteRequestsApprovedListGetResponse200Normalizer(),
            AdminInviteRequestsApprovedListGetResponsedefaultNormalizer::class => new AdminInviteRequestsApprovedListGetResponsedefaultNormalizer(),
            AdminInviteRequestsDeniedListGetResponse200Normalizer::class => new AdminInviteRequestsDeniedListGetResponse200Normalizer(),
            AdminInviteRequestsDeniedListGetResponsedefaultNormalizer::class => new AdminInviteRequestsDeniedListGetResponsedefaultNormalizer(),
            AdminInviteRequestsDenyPostResponse200Normalizer::class => new AdminInviteRequestsDenyPostResponse200Normalizer(),
            AdminInviteRequestsDenyPostResponsedefaultNormalizer::class => new AdminInviteRequestsDenyPostResponsedefaultNormalizer(),
            AdminInviteRequestsListGetResponse200Normalizer::class => new AdminInviteRequestsListGetResponse200Normalizer(),
            AdminInviteRequestsListGetResponsedefaultNormalizer::class => new AdminInviteRequestsListGetResponsedefaultNormalizer(),
            AdminTeamsAdminsListGetResponse200Normalizer::class => new AdminTeamsAdminsListGetResponse200Normalizer(),
            AdminTeamsAdminsListGetResponsedefaultNormalizer::class => new AdminTeamsAdminsListGetResponsedefaultNormalizer(),
            AdminTeamsCreatePostResponse200Normalizer::class => new AdminTeamsCreatePostResponse200Normalizer(),
            AdminTeamsCreatePostResponsedefaultNormalizer::class => new AdminTeamsCreatePostResponsedefaultNormalizer(),
            AdminTeamsListGetResponse200Normalizer::class => new AdminTeamsListGetResponse200Normalizer(),
            AdminTeamsListGetResponsedefaultNormalizer::class => new AdminTeamsListGetResponsedefaultNormalizer(),
            AdminTeamsOwnersListGetResponse200Normalizer::class => new AdminTeamsOwnersListGetResponse200Normalizer(),
            AdminTeamsOwnersListGetResponsedefaultNormalizer::class => new AdminTeamsOwnersListGetResponsedefaultNormalizer(),
            AdminTeamsSettingsInfoGetResponse200Normalizer::class => new AdminTeamsSettingsInfoGetResponse200Normalizer(),
            AdminTeamsSettingsInfoGetResponsedefaultNormalizer::class => new AdminTeamsSettingsInfoGetResponsedefaultNormalizer(),
            AdminTeamsSettingsSetDefaultChannelsPostResponse200Normalizer::class => new AdminTeamsSettingsSetDefaultChannelsPostResponse200Normalizer(),
            AdminTeamsSettingsSetDefaultChannelsPostResponsedefaultNormalizer::class => new AdminTeamsSettingsSetDefaultChannelsPostResponsedefaultNormalizer(),
            AdminTeamsSettingsSetDescriptionPostResponse200Normalizer::class => new AdminTeamsSettingsSetDescriptionPostResponse200Normalizer(),
            AdminTeamsSettingsSetDescriptionPostResponsedefaultNormalizer::class => new AdminTeamsSettingsSetDescriptionPostResponsedefaultNormalizer(),
            AdminTeamsSettingsSetDiscoverabilityPostResponse200Normalizer::class => new AdminTeamsSettingsSetDiscoverabilityPostResponse200Normalizer(),
            AdminTeamsSettingsSetDiscoverabilityPostResponsedefaultNormalizer::class => new AdminTeamsSettingsSetDiscoverabilityPostResponsedefaultNormalizer(),
            AdminTeamsSettingsSetIconPostResponse200Normalizer::class => new AdminTeamsSettingsSetIconPostResponse200Normalizer(),
            AdminTeamsSettingsSetIconPostResponsedefaultNormalizer::class => new AdminTeamsSettingsSetIconPostResponsedefaultNormalizer(),
            AdminTeamsSettingsSetNamePostResponse200Normalizer::class => new AdminTeamsSettingsSetNamePostResponse200Normalizer(),
            AdminTeamsSettingsSetNamePostResponsedefaultNormalizer::class => new AdminTeamsSettingsSetNamePostResponsedefaultNormalizer(),
            AdminUsergroupsAddChannelsPostResponse200Normalizer::class => new AdminUsergroupsAddChannelsPostResponse200Normalizer(),
            AdminUsergroupsAddChannelsPostResponsedefaultNormalizer::class => new AdminUsergroupsAddChannelsPostResponsedefaultNormalizer(),
            AdminUsergroupsAddTeamsPostResponse200Normalizer::class => new AdminUsergroupsAddTeamsPostResponse200Normalizer(),
            AdminUsergroupsAddTeamsPostResponsedefaultNormalizer::class => new AdminUsergroupsAddTeamsPostResponsedefaultNormalizer(),
            AdminUsergroupsListChannelsGetResponse200Normalizer::class => new AdminUsergroupsListChannelsGetResponse200Normalizer(),
            AdminUsergroupsListChannelsGetResponsedefaultNormalizer::class => new AdminUsergroupsListChannelsGetResponsedefaultNormalizer(),
            AdminUsergroupsRemoveChannelsPostResponse200Normalizer::class => new AdminUsergroupsRemoveChannelsPostResponse200Normalizer(),
            AdminUsergroupsRemoveChannelsPostResponsedefaultNormalizer::class => new AdminUsergroupsRemoveChannelsPostResponsedefaultNormalizer(),
            AdminUsersAssignPostResponse200Normalizer::class => new AdminUsersAssignPostResponse200Normalizer(),
            AdminUsersAssignPostResponsedefaultNormalizer::class => new AdminUsersAssignPostResponsedefaultNormalizer(),
            AdminUsersInvitePostResponse200Normalizer::class => new AdminUsersInvitePostResponse200Normalizer(),
            AdminUsersInvitePostResponsedefaultNormalizer::class => new AdminUsersInvitePostResponsedefaultNormalizer(),
            AdminUsersListGetResponse200Normalizer::class => new AdminUsersListGetResponse200Normalizer(),
            AdminUsersListGetResponsedefaultNormalizer::class => new AdminUsersListGetResponsedefaultNormalizer(),
            AdminUsersRemovePostResponse200Normalizer::class => new AdminUsersRemovePostResponse200Normalizer(),
            AdminUsersRemovePostResponsedefaultNormalizer::class => new AdminUsersRemovePostResponsedefaultNormalizer(),
            AdminUsersSessionInvalidatePostResponse200Normalizer::class => new AdminUsersSessionInvalidatePostResponse200Normalizer(),
            AdminUsersSessionInvalidatePostResponsedefaultNormalizer::class => new AdminUsersSessionInvalidatePostResponsedefaultNormalizer(),
            AdminUsersSessionResetPostResponse200Normalizer::class => new AdminUsersSessionResetPostResponse200Normalizer(),
            AdminUsersSessionResetPostResponsedefaultNormalizer::class => new AdminUsersSessionResetPostResponsedefaultNormalizer(),
            AdminUsersSetAdminPostResponse200Normalizer::class => new AdminUsersSetAdminPostResponse200Normalizer(),
            AdminUsersSetAdminPostResponsedefaultNormalizer::class => new AdminUsersSetAdminPostResponsedefaultNormalizer(),
            AdminUsersSetExpirationPostResponse200Normalizer::class => new AdminUsersSetExpirationPostResponse200Normalizer(),
            AdminUsersSetExpirationPostResponsedefaultNormalizer::class => new AdminUsersSetExpirationPostResponsedefaultNormalizer(),
            AdminUsersSetOwnerPostResponse200Normalizer::class => new AdminUsersSetOwnerPostResponse200Normalizer(),
            AdminUsersSetOwnerPostResponsedefaultNormalizer::class => new AdminUsersSetOwnerPostResponsedefaultNormalizer(),
            AdminUsersSetRegularPostResponse200Normalizer::class => new AdminUsersSetRegularPostResponse200Normalizer(),
            AdminUsersSetRegularPostResponsedefaultNormalizer::class => new AdminUsersSetRegularPostResponsedefaultNormalizer(),
            ApiTestGetResponse200Normalizer::class => new ApiTestGetResponse200Normalizer(),
            ApiTestGetResponsedefaultNormalizer::class => new ApiTestGetResponsedefaultNormalizer(),
            AppsEventAuthorizationsListGetResponse200Normalizer::class => new AppsEventAuthorizationsListGetResponse200Normalizer(),
            AppsEventAuthorizationsListGetResponsedefaultNormalizer::class => new AppsEventAuthorizationsListGetResponsedefaultNormalizer(),
            AppsPermissionsInfoGetResponse200Normalizer::class => new AppsPermissionsInfoGetResponse200Normalizer(),
            AppsPermissionsInfoGetResponse200InfoNormalizer::class => new AppsPermissionsInfoGetResponse200InfoNormalizer(),
            AppsPermissionsInfoGetResponse200InfoAppHomeNormalizer::class => new AppsPermissionsInfoGetResponse200InfoAppHomeNormalizer(),
            AppsPermissionsInfoGetResponse200InfoChannelNormalizer::class => new AppsPermissionsInfoGetResponse200InfoChannelNormalizer(),
            AppsPermissionsInfoGetResponse200InfoGroupNormalizer::class => new AppsPermissionsInfoGetResponse200InfoGroupNormalizer(),
            AppsPermissionsInfoGetResponse200InfoImNormalizer::class => new AppsPermissionsInfoGetResponse200InfoImNormalizer(),
            AppsPermissionsInfoGetResponse200InfoMpimNormalizer::class => new AppsPermissionsInfoGetResponse200InfoMpimNormalizer(),
            AppsPermissionsInfoGetResponse200InfoTeamNormalizer::class => new AppsPermissionsInfoGetResponse200InfoTeamNormalizer(),
            AppsPermissionsInfoGetResponsedefaultNormalizer::class => new AppsPermissionsInfoGetResponsedefaultNormalizer(),
            AppsPermissionsRequestGetResponse200Normalizer::class => new AppsPermissionsRequestGetResponse200Normalizer(),
            AppsPermissionsRequestGetResponsedefaultNormalizer::class => new AppsPermissionsRequestGetResponsedefaultNormalizer(),
            AppsPermissionsResourcesListGetResponse200Normalizer::class => new AppsPermissionsResourcesListGetResponse200Normalizer(),
            AppsPermissionsResourcesListGetResponse200ResourcesItemNormalizer::class => new AppsPermissionsResourcesListGetResponse200ResourcesItemNormalizer(),
            AppsPermissionsResourcesListGetResponse200ResponseMetadataNormalizer::class => new AppsPermissionsResourcesListGetResponse200ResponseMetadataNormalizer(),
            AppsPermissionsResourcesListGetResponsedefaultNormalizer::class => new AppsPermissionsResourcesListGetResponsedefaultNormalizer(),
            AppsPermissionsScopesListGetResponse200Normalizer::class => new AppsPermissionsScopesListGetResponse200Normalizer(),
            AppsPermissionsScopesListGetResponse200ScopesNormalizer::class => new AppsPermissionsScopesListGetResponse200ScopesNormalizer(),
            AppsPermissionsScopesListGetResponsedefaultNormalizer::class => new AppsPermissionsScopesListGetResponsedefaultNormalizer(),
            AppsPermissionsUsersListGetResponse200Normalizer::class => new AppsPermissionsUsersListGetResponse200Normalizer(),
            AppsPermissionsUsersListGetResponsedefaultNormalizer::class => new AppsPermissionsUsersListGetResponsedefaultNormalizer(),
            AppsPermissionsUsersRequestGetResponse200Normalizer::class => new AppsPermissionsUsersRequestGetResponse200Normalizer(),
            AppsPermissionsUsersRequestGetResponsedefaultNormalizer::class => new AppsPermissionsUsersRequestGetResponsedefaultNormalizer(),
            AppsUninstallGetResponse200Normalizer::class => new AppsUninstallGetResponse200Normalizer(),
            AppsUninstallGetResponsedefaultNormalizer::class => new AppsUninstallGetResponsedefaultNormalizer(),
            AuthRevokeGetResponse200Normalizer::class => new AuthRevokeGetResponse200Normalizer(),
            AuthRevokeGetResponsedefaultNormalizer::class => new AuthRevokeGetResponsedefaultNormalizer(),
            AuthTestGetResponse200Normalizer::class => new AuthTestGetResponse200Normalizer(),
            AuthTestGetResponsedefaultNormalizer::class => new AuthTestGetResponsedefaultNormalizer(),
            BotsInfoGetResponse200Normalizer::class => new BotsInfoGetResponse200Normalizer(),
            BotsInfoGetResponse200BotNormalizer::class => new BotsInfoGetResponse200BotNormalizer(),
            BotsInfoGetResponse200BotIconsNormalizer::class => new BotsInfoGetResponse200BotIconsNormalizer(),
            BotsInfoGetResponsedefaultNormalizer::class => new BotsInfoGetResponsedefaultNormalizer(),
            CallsAddPostResponse200Normalizer::class => new CallsAddPostResponse200Normalizer(),
            CallsAddPostResponsedefaultNormalizer::class => new CallsAddPostResponsedefaultNormalizer(),
            CallsEndPostResponse200Normalizer::class => new CallsEndPostResponse200Normalizer(),
            CallsEndPostResponsedefaultNormalizer::class => new CallsEndPostResponsedefaultNormalizer(),
            CallsInfoGetResponse200Normalizer::class => new CallsInfoGetResponse200Normalizer(),
            CallsInfoGetResponsedefaultNormalizer::class => new CallsInfoGetResponsedefaultNormalizer(),
            CallsParticipantsAddPostResponse200Normalizer::class => new CallsParticipantsAddPostResponse200Normalizer(),
            CallsParticipantsAddPostResponsedefaultNormalizer::class => new CallsParticipantsAddPostResponsedefaultNormalizer(),
            CallsParticipantsRemovePostResponse200Normalizer::class => new CallsParticipantsRemovePostResponse200Normalizer(),
            CallsParticipantsRemovePostResponsedefaultNormalizer::class => new CallsParticipantsRemovePostResponsedefaultNormalizer(),
            CallsUpdatePostResponse200Normalizer::class => new CallsUpdatePostResponse200Normalizer(),
            CallsUpdatePostResponsedefaultNormalizer::class => new CallsUpdatePostResponsedefaultNormalizer(),
            ChatDeletePostResponse200Normalizer::class => new ChatDeletePostResponse200Normalizer(),
            ChatDeletePostResponsedefaultNormalizer::class => new ChatDeletePostResponsedefaultNormalizer(),
            ChatDeleteScheduledMessagePostResponse200Normalizer::class => new ChatDeleteScheduledMessagePostResponse200Normalizer(),
            ChatDeleteScheduledMessagePostResponsedefaultNormalizer::class => new ChatDeleteScheduledMessagePostResponsedefaultNormalizer(),
            ChatGetPermalinkGetResponse200Normalizer::class => new ChatGetPermalinkGetResponse200Normalizer(),
            ChatGetPermalinkGetResponsedefaultNormalizer::class => new ChatGetPermalinkGetResponsedefaultNormalizer(),
            ChatMeMessagePostResponse200Normalizer::class => new ChatMeMessagePostResponse200Normalizer(),
            ChatMeMessagePostResponsedefaultNormalizer::class => new ChatMeMessagePostResponsedefaultNormalizer(),
            ChatPostEphemeralPostResponse200Normalizer::class => new ChatPostEphemeralPostResponse200Normalizer(),
            ChatPostEphemeralPostResponsedefaultNormalizer::class => new ChatPostEphemeralPostResponsedefaultNormalizer(),
            ChatPostMessagePostResponse200Normalizer::class => new ChatPostMessagePostResponse200Normalizer(),
            ChatPostMessagePostResponsedefaultNormalizer::class => new ChatPostMessagePostResponsedefaultNormalizer(),
            ChatScheduleMessagePostResponse200Normalizer::class => new ChatScheduleMessagePostResponse200Normalizer(),
            ChatScheduleMessagePostResponse200MessageNormalizer::class => new ChatScheduleMessagePostResponse200MessageNormalizer(),
            ChatScheduleMessagePostResponse200MessageAttachmentsItemNormalizer::class => new ChatScheduleMessagePostResponse200MessageAttachmentsItemNormalizer(),
            ChatScheduleMessagePostResponsedefaultNormalizer::class => new ChatScheduleMessagePostResponsedefaultNormalizer(),
            ChatScheduledMessagesListGetResponse200Normalizer::class => new ChatScheduledMessagesListGetResponse200Normalizer(),
            ChatScheduledMessagesListGetResponse200ResponseMetadataNormalizer::class => new ChatScheduledMessagesListGetResponse200ResponseMetadataNormalizer(),
            ChatScheduledMessagesListGetResponse200ScheduledMessagesItemNormalizer::class => new ChatScheduledMessagesListGetResponse200ScheduledMessagesItemNormalizer(),
            ChatScheduledMessagesListGetResponsedefaultNormalizer::class => new ChatScheduledMessagesListGetResponsedefaultNormalizer(),
            ChatUnfurlPostResponse200Normalizer::class => new ChatUnfurlPostResponse200Normalizer(),
            ChatUnfurlPostResponsedefaultNormalizer::class => new ChatUnfurlPostResponsedefaultNormalizer(),
            ChatUpdatePostResponse200Normalizer::class => new ChatUpdatePostResponse200Normalizer(),
            ChatUpdatePostResponse200MessageNormalizer::class => new ChatUpdatePostResponse200MessageNormalizer(),
            ChatUpdatePostResponsedefaultNormalizer::class => new ChatUpdatePostResponsedefaultNormalizer(),
            ConversationsArchivePostResponse200Normalizer::class => new ConversationsArchivePostResponse200Normalizer(),
            ConversationsArchivePostResponsedefaultNormalizer::class => new ConversationsArchivePostResponsedefaultNormalizer(),
            ConversationsClosePostResponse200Normalizer::class => new ConversationsClosePostResponse200Normalizer(),
            ConversationsClosePostResponsedefaultNormalizer::class => new ConversationsClosePostResponsedefaultNormalizer(),
            ConversationsCreatePostResponse200Normalizer::class => new ConversationsCreatePostResponse200Normalizer(),
            ConversationsCreatePostResponsedefaultNormalizer::class => new ConversationsCreatePostResponsedefaultNormalizer(),
            ConversationsHistoryGetResponse200Normalizer::class => new ConversationsHistoryGetResponse200Normalizer(),
            ConversationsHistoryGetResponse200ResponseMetadataNormalizer::class => new ConversationsHistoryGetResponse200ResponseMetadataNormalizer(),
            ConversationsHistoryGetResponsedefaultNormalizer::class => new ConversationsHistoryGetResponsedefaultNormalizer(),
            ConversationsInfoGetResponse200Normalizer::class => new ConversationsInfoGetResponse200Normalizer(),
            ConversationsInfoGetResponsedefaultNormalizer::class => new ConversationsInfoGetResponsedefaultNormalizer(),
            ConversationsInvitePostResponse200Normalizer::class => new ConversationsInvitePostResponse200Normalizer(),
            ConversationsInvitePostResponsedefaultNormalizer::class => new ConversationsInvitePostResponsedefaultNormalizer(),
            ConversationsInvitePostResponsedefaultErrorsItemNormalizer::class => new ConversationsInvitePostResponsedefaultErrorsItemNormalizer(),
            ConversationsJoinPostResponse200Normalizer::class => new ConversationsJoinPostResponse200Normalizer(),
            ConversationsJoinPostResponse200ResponseMetadataNormalizer::class => new ConversationsJoinPostResponse200ResponseMetadataNormalizer(),
            ConversationsJoinPostResponsedefaultNormalizer::class => new ConversationsJoinPostResponsedefaultNormalizer(),
            ConversationsKickPostResponse200Normalizer::class => new ConversationsKickPostResponse200Normalizer(),
            ConversationsKickPostResponsedefaultNormalizer::class => new ConversationsKickPostResponsedefaultNormalizer(),
            ConversationsLeavePostResponse200Normalizer::class => new ConversationsLeavePostResponse200Normalizer(),
            ConversationsLeavePostResponsedefaultNormalizer::class => new ConversationsLeavePostResponsedefaultNormalizer(),
            ConversationsListGetResponse200Normalizer::class => new ConversationsListGetResponse200Normalizer(),
            ConversationsListGetResponse200ResponseMetadataNormalizer::class => new ConversationsListGetResponse200ResponseMetadataNormalizer(),
            ConversationsListGetResponsedefaultNormalizer::class => new ConversationsListGetResponsedefaultNormalizer(),
            ConversationsMarkPostResponse200Normalizer::class => new ConversationsMarkPostResponse200Normalizer(),
            ConversationsMarkPostResponsedefaultNormalizer::class => new ConversationsMarkPostResponsedefaultNormalizer(),
            ConversationsMembersGetResponse200Normalizer::class => new ConversationsMembersGetResponse200Normalizer(),
            ConversationsMembersGetResponse200ResponseMetadataNormalizer::class => new ConversationsMembersGetResponse200ResponseMetadataNormalizer(),
            ConversationsMembersGetResponsedefaultNormalizer::class => new ConversationsMembersGetResponsedefaultNormalizer(),
            ConversationsOpenPostResponse200Normalizer::class => new ConversationsOpenPostResponse200Normalizer(),
            ConversationsOpenPostResponse200ChannelItem1Normalizer::class => new ConversationsOpenPostResponse200ChannelItem1Normalizer(),
            ConversationsOpenPostResponsedefaultNormalizer::class => new ConversationsOpenPostResponsedefaultNormalizer(),
            ConversationsRenamePostResponse200Normalizer::class => new ConversationsRenamePostResponse200Normalizer(),
            ConversationsRenamePostResponsedefaultNormalizer::class => new ConversationsRenamePostResponsedefaultNormalizer(),
            ConversationsRepliesGetResponse200Normalizer::class => new ConversationsRepliesGetResponse200Normalizer(),
            ConversationsRepliesGetResponse200MessagesItemItem0Normalizer::class => new ConversationsRepliesGetResponse200MessagesItemItem0Normalizer(),
            ConversationsRepliesGetResponse200MessagesItemItem1Normalizer::class => new ConversationsRepliesGetResponse200MessagesItemItem1Normalizer(),
            ConversationsRepliesGetResponse200ResponseMetadataNormalizer::class => new ConversationsRepliesGetResponse200ResponseMetadataNormalizer(),
            ConversationsRepliesGetResponsedefaultNormalizer::class => new ConversationsRepliesGetResponsedefaultNormalizer(),
            ConversationsSetPurposePostResponse200Normalizer::class => new ConversationsSetPurposePostResponse200Normalizer(),
            ConversationsSetPurposePostResponsedefaultNormalizer::class => new ConversationsSetPurposePostResponsedefaultNormalizer(),
            ConversationsSetTopicPostResponse200Normalizer::class => new ConversationsSetTopicPostResponse200Normalizer(),
            ConversationsSetTopicPostResponsedefaultNormalizer::class => new ConversationsSetTopicPostResponsedefaultNormalizer(),
            ConversationsUnarchivePostResponse200Normalizer::class => new ConversationsUnarchivePostResponse200Normalizer(),
            ConversationsUnarchivePostResponsedefaultNormalizer::class => new ConversationsUnarchivePostResponsedefaultNormalizer(),
            DialogOpenGetResponse200Normalizer::class => new DialogOpenGetResponse200Normalizer(),
            DialogOpenGetResponsedefaultNormalizer::class => new DialogOpenGetResponsedefaultNormalizer(),
            DndEndDndPostResponse200Normalizer::class => new DndEndDndPostResponse200Normalizer(),
            DndEndDndPostResponsedefaultNormalizer::class => new DndEndDndPostResponsedefaultNormalizer(),
            DndEndSnoozePostResponse200Normalizer::class => new DndEndSnoozePostResponse200Normalizer(),
            DndEndSnoozePostResponsedefaultNormalizer::class => new DndEndSnoozePostResponsedefaultNormalizer(),
            DndInfoGetResponse200Normalizer::class => new DndInfoGetResponse200Normalizer(),
            DndInfoGetResponsedefaultNormalizer::class => new DndInfoGetResponsedefaultNormalizer(),
            DndSetSnoozePostResponse200Normalizer::class => new DndSetSnoozePostResponse200Normalizer(),
            DndSetSnoozePostResponsedefaultNormalizer::class => new DndSetSnoozePostResponsedefaultNormalizer(),
            DndTeamInfoGetResponse200Normalizer::class => new DndTeamInfoGetResponse200Normalizer(),
            DndTeamInfoGetResponsedefaultNormalizer::class => new DndTeamInfoGetResponsedefaultNormalizer(),
            EmojiListGetResponse200Normalizer::class => new EmojiListGetResponse200Normalizer(),
            EmojiListGetResponsedefaultNormalizer::class => new EmojiListGetResponsedefaultNormalizer(),
            FilesCommentsDeletePostResponse200Normalizer::class => new FilesCommentsDeletePostResponse200Normalizer(),
            FilesCommentsDeletePostResponsedefaultNormalizer::class => new FilesCommentsDeletePostResponsedefaultNormalizer(),
            FilesCompleteUploadExternalPostResponse200Normalizer::class => new FilesCompleteUploadExternalPostResponse200Normalizer(),
            FilesCompleteUploadExternalPostResponse200FilesItemNormalizer::class => new FilesCompleteUploadExternalPostResponse200FilesItemNormalizer(),
            FilesCompleteUploadExternalPostResponsedefaultNormalizer::class => new FilesCompleteUploadExternalPostResponsedefaultNormalizer(),
            FilesDeletePostResponse200Normalizer::class => new FilesDeletePostResponse200Normalizer(),
            FilesDeletePostResponsedefaultNormalizer::class => new FilesDeletePostResponsedefaultNormalizer(),
            FilesGetUploadURLExternalPostResponse200Normalizer::class => new FilesGetUploadURLExternalPostResponse200Normalizer(),
            FilesGetUploadURLExternalPostResponsedefaultNormalizer::class => new FilesGetUploadURLExternalPostResponsedefaultNormalizer(),
            FilesInfoGetResponse200Normalizer::class => new FilesInfoGetResponse200Normalizer(),
            FilesInfoGetResponsedefaultNormalizer::class => new FilesInfoGetResponsedefaultNormalizer(),
            FilesListGetResponse200Normalizer::class => new FilesListGetResponse200Normalizer(),
            FilesListGetResponsedefaultNormalizer::class => new FilesListGetResponsedefaultNormalizer(),
            FilesRemoteAddPostResponse200Normalizer::class => new FilesRemoteAddPostResponse200Normalizer(),
            FilesRemoteAddPostResponsedefaultNormalizer::class => new FilesRemoteAddPostResponsedefaultNormalizer(),
            FilesRemoteInfoGetResponse200Normalizer::class => new FilesRemoteInfoGetResponse200Normalizer(),
            FilesRemoteInfoGetResponsedefaultNormalizer::class => new FilesRemoteInfoGetResponsedefaultNormalizer(),
            FilesRemoteListGetResponse200Normalizer::class => new FilesRemoteListGetResponse200Normalizer(),
            FilesRemoteListGetResponsedefaultNormalizer::class => new FilesRemoteListGetResponsedefaultNormalizer(),
            FilesRemoteRemovePostResponse200Normalizer::class => new FilesRemoteRemovePostResponse200Normalizer(),
            FilesRemoteRemovePostResponsedefaultNormalizer::class => new FilesRemoteRemovePostResponsedefaultNormalizer(),
            FilesRemoteShareGetResponse200Normalizer::class => new FilesRemoteShareGetResponse200Normalizer(),
            FilesRemoteShareGetResponsedefaultNormalizer::class => new FilesRemoteShareGetResponsedefaultNormalizer(),
            FilesRemoteUpdatePostResponse200Normalizer::class => new FilesRemoteUpdatePostResponse200Normalizer(),
            FilesRemoteUpdatePostResponsedefaultNormalizer::class => new FilesRemoteUpdatePostResponsedefaultNormalizer(),
            FilesRevokePublicURLPostResponse200Normalizer::class => new FilesRevokePublicURLPostResponse200Normalizer(),
            FilesRevokePublicURLPostResponsedefaultNormalizer::class => new FilesRevokePublicURLPostResponsedefaultNormalizer(),
            FilesSharedPublicURLPostResponse200Normalizer::class => new FilesSharedPublicURLPostResponse200Normalizer(),
            FilesSharedPublicURLPostResponsedefaultNormalizer::class => new FilesSharedPublicURLPostResponsedefaultNormalizer(),
            FilesUploadPostResponse200Normalizer::class => new FilesUploadPostResponse200Normalizer(),
            FilesUploadPostResponsedefaultNormalizer::class => new FilesUploadPostResponsedefaultNormalizer(),
            MigrationExchangeGetResponse200Normalizer::class => new MigrationExchangeGetResponse200Normalizer(),
            MigrationExchangeGetResponsedefaultNormalizer::class => new MigrationExchangeGetResponsedefaultNormalizer(),
            OauthAccessGetResponse200Normalizer::class => new OauthAccessGetResponse200Normalizer(),
            OauthAccessGetResponsedefaultNormalizer::class => new OauthAccessGetResponsedefaultNormalizer(),
            OauthTokenGetResponse200Normalizer::class => new OauthTokenGetResponse200Normalizer(),
            OauthTokenGetResponsedefaultNormalizer::class => new OauthTokenGetResponsedefaultNormalizer(),
            OauthV2AccessGetResponse200Normalizer::class => new OauthV2AccessGetResponse200Normalizer(),
            OauthV2AccessGetResponsedefaultNormalizer::class => new OauthV2AccessGetResponsedefaultNormalizer(),
            PinsAddPostResponse200Normalizer::class => new PinsAddPostResponse200Normalizer(),
            PinsAddPostResponsedefaultNormalizer::class => new PinsAddPostResponsedefaultNormalizer(),
            PinsListGetResponse200Item0Normalizer::class => new PinsListGetResponse200Item0Normalizer(),
            PinsListGetResponse200Item0ItemsItem0Normalizer::class => new PinsListGetResponse200Item0ItemsItem0Normalizer(),
            PinsListGetResponse200Item0ItemsItem1Normalizer::class => new PinsListGetResponse200Item0ItemsItem1Normalizer(),
            PinsListGetResponse200Item1Normalizer::class => new PinsListGetResponse200Item1Normalizer(),
            PinsListGetResponsedefaultNormalizer::class => new PinsListGetResponsedefaultNormalizer(),
            PinsRemovePostResponse200Normalizer::class => new PinsRemovePostResponse200Normalizer(),
            PinsRemovePostResponsedefaultNormalizer::class => new PinsRemovePostResponsedefaultNormalizer(),
            ReactionsAddPostResponse200Normalizer::class => new ReactionsAddPostResponse200Normalizer(),
            ReactionsAddPostResponsedefaultNormalizer::class => new ReactionsAddPostResponsedefaultNormalizer(),
            ReactionsGetGetResponsedefaultNormalizer::class => new ReactionsGetGetResponsedefaultNormalizer(),
            ReactionsListGetResponse200Normalizer::class => new ReactionsListGetResponse200Normalizer(),
            ReactionsListGetResponse200ItemsItemItem0Normalizer::class => new ReactionsListGetResponse200ItemsItemItem0Normalizer(),
            ReactionsListGetResponse200ItemsItemItem1Normalizer::class => new ReactionsListGetResponse200ItemsItemItem1Normalizer(),
            ReactionsListGetResponse200ItemsItemItem2Normalizer::class => new ReactionsListGetResponse200ItemsItemItem2Normalizer(),
            ReactionsListGetResponsedefaultNormalizer::class => new ReactionsListGetResponsedefaultNormalizer(),
            ReactionsRemovePostResponse200Normalizer::class => new ReactionsRemovePostResponse200Normalizer(),
            ReactionsRemovePostResponsedefaultNormalizer::class => new ReactionsRemovePostResponsedefaultNormalizer(),
            RemindersAddPostResponse200Normalizer::class => new RemindersAddPostResponse200Normalizer(),
            RemindersAddPostResponsedefaultNormalizer::class => new RemindersAddPostResponsedefaultNormalizer(),
            RemindersCompletePostResponse200Normalizer::class => new RemindersCompletePostResponse200Normalizer(),
            RemindersCompletePostResponsedefaultNormalizer::class => new RemindersCompletePostResponsedefaultNormalizer(),
            RemindersDeletePostResponse200Normalizer::class => new RemindersDeletePostResponse200Normalizer(),
            RemindersDeletePostResponsedefaultNormalizer::class => new RemindersDeletePostResponsedefaultNormalizer(),
            RemindersInfoGetResponse200Normalizer::class => new RemindersInfoGetResponse200Normalizer(),
            RemindersInfoGetResponsedefaultNormalizer::class => new RemindersInfoGetResponsedefaultNormalizer(),
            RemindersListGetResponse200Normalizer::class => new RemindersListGetResponse200Normalizer(),
            RemindersListGetResponsedefaultNormalizer::class => new RemindersListGetResponsedefaultNormalizer(),
            RtmConnectGetResponse200Normalizer::class => new RtmConnectGetResponse200Normalizer(),
            RtmConnectGetResponse200SelfNormalizer::class => new RtmConnectGetResponse200SelfNormalizer(),
            RtmConnectGetResponse200TeamNormalizer::class => new RtmConnectGetResponse200TeamNormalizer(),
            RtmConnectGetResponsedefaultNormalizer::class => new RtmConnectGetResponsedefaultNormalizer(),
            SearchMessagesGetResponse200Normalizer::class => new SearchMessagesGetResponse200Normalizer(),
            SearchMessagesGetResponsedefaultNormalizer::class => new SearchMessagesGetResponsedefaultNormalizer(),
            StarsAddPostResponse200Normalizer::class => new StarsAddPostResponse200Normalizer(),
            StarsAddPostResponsedefaultNormalizer::class => new StarsAddPostResponsedefaultNormalizer(),
            StarsListGetResponse200Normalizer::class => new StarsListGetResponse200Normalizer(),
            StarsListGetResponse200ItemsItemItem0Normalizer::class => new StarsListGetResponse200ItemsItemItem0Normalizer(),
            StarsListGetResponse200ItemsItemItem1Normalizer::class => new StarsListGetResponse200ItemsItemItem1Normalizer(),
            StarsListGetResponse200ItemsItemItem2Normalizer::class => new StarsListGetResponse200ItemsItemItem2Normalizer(),
            StarsListGetResponse200ItemsItemItem3Normalizer::class => new StarsListGetResponse200ItemsItemItem3Normalizer(),
            StarsListGetResponse200ItemsItemItem4Normalizer::class => new StarsListGetResponse200ItemsItemItem4Normalizer(),
            StarsListGetResponse200ItemsItemItem5Normalizer::class => new StarsListGetResponse200ItemsItemItem5Normalizer(),
            StarsListGetResponsedefaultNormalizer::class => new StarsListGetResponsedefaultNormalizer(),
            StarsRemovePostResponse200Normalizer::class => new StarsRemovePostResponse200Normalizer(),
            StarsRemovePostResponsedefaultNormalizer::class => new StarsRemovePostResponsedefaultNormalizer(),
            TeamAccessLogsGetResponse200Normalizer::class => new TeamAccessLogsGetResponse200Normalizer(),
            TeamAccessLogsGetResponse200LoginsItemNormalizer::class => new TeamAccessLogsGetResponse200LoginsItemNormalizer(),
            TeamAccessLogsGetResponsedefaultNormalizer::class => new TeamAccessLogsGetResponsedefaultNormalizer(),
            TeamBillableInfoGetResponse200Normalizer::class => new TeamBillableInfoGetResponse200Normalizer(),
            TeamBillableInfoGetResponsedefaultNormalizer::class => new TeamBillableInfoGetResponsedefaultNormalizer(),
            TeamInfoGetResponse200Normalizer::class => new TeamInfoGetResponse200Normalizer(),
            TeamInfoGetResponsedefaultNormalizer::class => new TeamInfoGetResponsedefaultNormalizer(),
            TeamIntegrationLogsGetResponse200Normalizer::class => new TeamIntegrationLogsGetResponse200Normalizer(),
            TeamIntegrationLogsGetResponse200LogsItemNormalizer::class => new TeamIntegrationLogsGetResponse200LogsItemNormalizer(),
            TeamIntegrationLogsGetResponsedefaultNormalizer::class => new TeamIntegrationLogsGetResponsedefaultNormalizer(),
            TeamProfileGetGetResponse200Normalizer::class => new TeamProfileGetGetResponse200Normalizer(),
            TeamProfileGetGetResponse200ProfileNormalizer::class => new TeamProfileGetGetResponse200ProfileNormalizer(),
            TeamProfileGetGetResponsedefaultNormalizer::class => new TeamProfileGetGetResponsedefaultNormalizer(),
            UsergroupsCreatePostResponse200Normalizer::class => new UsergroupsCreatePostResponse200Normalizer(),
            UsergroupsCreatePostResponsedefaultNormalizer::class => new UsergroupsCreatePostResponsedefaultNormalizer(),
            UsergroupsDisablePostResponse200Normalizer::class => new UsergroupsDisablePostResponse200Normalizer(),
            UsergroupsDisablePostResponsedefaultNormalizer::class => new UsergroupsDisablePostResponsedefaultNormalizer(),
            UsergroupsEnablePostResponse200Normalizer::class => new UsergroupsEnablePostResponse200Normalizer(),
            UsergroupsEnablePostResponsedefaultNormalizer::class => new UsergroupsEnablePostResponsedefaultNormalizer(),
            UsergroupsListGetResponse200Normalizer::class => new UsergroupsListGetResponse200Normalizer(),
            UsergroupsListGetResponsedefaultNormalizer::class => new UsergroupsListGetResponsedefaultNormalizer(),
            UsergroupsUpdatePostResponse200Normalizer::class => new UsergroupsUpdatePostResponse200Normalizer(),
            UsergroupsUpdatePostResponsedefaultNormalizer::class => new UsergroupsUpdatePostResponsedefaultNormalizer(),
            UsergroupsUsersListGetResponse200Normalizer::class => new UsergroupsUsersListGetResponse200Normalizer(),
            UsergroupsUsersListGetResponsedefaultNormalizer::class => new UsergroupsUsersListGetResponsedefaultNormalizer(),
            UsergroupsUsersUpdatePostResponse200Normalizer::class => new UsergroupsUsersUpdatePostResponse200Normalizer(),
            UsergroupsUsersUpdatePostResponsedefaultNormalizer::class => new UsergroupsUsersUpdatePostResponsedefaultNormalizer(),
            UsersConversationsGetResponse200Normalizer::class => new UsersConversationsGetResponse200Normalizer(),
            UsersConversationsGetResponse200ResponseMetadataNormalizer::class => new UsersConversationsGetResponse200ResponseMetadataNormalizer(),
            UsersConversationsGetResponsedefaultNormalizer::class => new UsersConversationsGetResponsedefaultNormalizer(),
            UsersDeletePhotoPostResponse200Normalizer::class => new UsersDeletePhotoPostResponse200Normalizer(),
            UsersDeletePhotoPostResponsedefaultNormalizer::class => new UsersDeletePhotoPostResponsedefaultNormalizer(),
            UsersGetPresenceGetResponse200Normalizer::class => new UsersGetPresenceGetResponse200Normalizer(),
            UsersGetPresenceGetResponsedefaultNormalizer::class => new UsersGetPresenceGetResponsedefaultNormalizer(),
            UsersIdentityGetResponse200Item0Normalizer::class => new UsersIdentityGetResponse200Item0Normalizer(),
            UsersIdentityGetResponse200Item0TeamNormalizer::class => new UsersIdentityGetResponse200Item0TeamNormalizer(),
            UsersIdentityGetResponse200Item0UserNormalizer::class => new UsersIdentityGetResponse200Item0UserNormalizer(),
            UsersIdentityGetResponse200Item1Normalizer::class => new UsersIdentityGetResponse200Item1Normalizer(),
            UsersIdentityGetResponse200Item1TeamNormalizer::class => new UsersIdentityGetResponse200Item1TeamNormalizer(),
            UsersIdentityGetResponse200Item1UserNormalizer::class => new UsersIdentityGetResponse200Item1UserNormalizer(),
            UsersIdentityGetResponse200Item2Normalizer::class => new UsersIdentityGetResponse200Item2Normalizer(),
            UsersIdentityGetResponse200Item2TeamNormalizer::class => new UsersIdentityGetResponse200Item2TeamNormalizer(),
            UsersIdentityGetResponse200Item2UserNormalizer::class => new UsersIdentityGetResponse200Item2UserNormalizer(),
            UsersIdentityGetResponse200Item3Normalizer::class => new UsersIdentityGetResponse200Item3Normalizer(),
            UsersIdentityGetResponse200Item3TeamNormalizer::class => new UsersIdentityGetResponse200Item3TeamNormalizer(),
            UsersIdentityGetResponse200Item3UserNormalizer::class => new UsersIdentityGetResponse200Item3UserNormalizer(),
            UsersIdentityGetResponsedefaultNormalizer::class => new UsersIdentityGetResponsedefaultNormalizer(),
            UsersInfoGetResponse200Normalizer::class => new UsersInfoGetResponse200Normalizer(),
            UsersInfoGetResponsedefaultNormalizer::class => new UsersInfoGetResponsedefaultNormalizer(),
            UsersListGetResponse200Normalizer::class => new UsersListGetResponse200Normalizer(),
            UsersListGetResponsedefaultNormalizer::class => new UsersListGetResponsedefaultNormalizer(),
            UsersLookupByEmailGetResponse200Normalizer::class => new UsersLookupByEmailGetResponse200Normalizer(),
            UsersLookupByEmailGetResponsedefaultNormalizer::class => new UsersLookupByEmailGetResponsedefaultNormalizer(),
            UsersProfileGetGetResponse200Normalizer::class => new UsersProfileGetGetResponse200Normalizer(),
            UsersProfileGetGetResponsedefaultNormalizer::class => new UsersProfileGetGetResponsedefaultNormalizer(),
            UsersProfileSetPostResponse200Normalizer::class => new UsersProfileSetPostResponse200Normalizer(),
            UsersProfileSetPostResponsedefaultNormalizer::class => new UsersProfileSetPostResponsedefaultNormalizer(),
            UsersSetActivePostResponse200Normalizer::class => new UsersSetActivePostResponse200Normalizer(),
            UsersSetActivePostResponsedefaultNormalizer::class => new UsersSetActivePostResponsedefaultNormalizer(),
            UsersSetPhotoPostResponse200Normalizer::class => new UsersSetPhotoPostResponse200Normalizer(),
            UsersSetPhotoPostResponse200ProfileNormalizer::class => new UsersSetPhotoPostResponse200ProfileNormalizer(),
            UsersSetPhotoPostResponsedefaultNormalizer::class => new UsersSetPhotoPostResponsedefaultNormalizer(),
            UsersSetPresencePostResponse200Normalizer::class => new UsersSetPresencePostResponse200Normalizer(),
            UsersSetPresencePostResponsedefaultNormalizer::class => new UsersSetPresencePostResponsedefaultNormalizer(),
            ViewsOpenPostResponse200Normalizer::class => new ViewsOpenPostResponse200Normalizer(),
            ViewsOpenPostResponsedefaultNormalizer::class => new ViewsOpenPostResponsedefaultNormalizer(),
            ViewsPublishPostResponse200Normalizer::class => new ViewsPublishPostResponse200Normalizer(),
            ViewsPublishPostResponsedefaultNormalizer::class => new ViewsPublishPostResponsedefaultNormalizer(),
            ViewsPushPostResponse200Normalizer::class => new ViewsPushPostResponse200Normalizer(),
            ViewsPushPostResponsedefaultNormalizer::class => new ViewsPushPostResponsedefaultNormalizer(),
            ViewsUpdatePostResponse200Normalizer::class => new ViewsUpdatePostResponse200Normalizer(),
            ViewsUpdatePostResponsedefaultNormalizer::class => new ViewsUpdatePostResponsedefaultNormalizer(),
            WorkflowsStepCompletedPostResponse200Normalizer::class => new WorkflowsStepCompletedPostResponse200Normalizer(),
            WorkflowsStepCompletedPostResponsedefaultNormalizer::class => new WorkflowsStepCompletedPostResponsedefaultNormalizer(),
            WorkflowsStepFailedPostResponse200Normalizer::class => new WorkflowsStepFailedPostResponse200Normalizer(),
            WorkflowsStepFailedPostResponsedefaultNormalizer::class => new WorkflowsStepFailedPostResponsedefaultNormalizer(),
            WorkflowsUpdateStepPostResponse200Normalizer::class => new WorkflowsUpdateStepPostResponse200Normalizer(),
            WorkflowsUpdateStepPostResponsedefaultNormalizer::class => new WorkflowsUpdateStepPostResponsedefaultNormalizer(),
            \JoliCode\Slack\Api\Runtime\Normalizer\ReferenceNormalizer::class => new \JoliCode\Slack\Api\Runtime\Normalizer\ReferenceNormalizer(),
            default => throw new \InvalidArgumentException('Unknown normalizer class: ' . $normalizerClass),
        };
        if ($normalizer instanceof NormalizerAwareInterface) {
            $normalizer->setNormalizer($this->normalizer);
        }
        if ($normalizer instanceof DenormalizerAwareInterface) {
            $normalizer->setDenormalizer($this->denormalizer);
        }
        $this->normalizersCache[$normalizerClass] = $normalizer;

        return $normalizer;
    }
}
