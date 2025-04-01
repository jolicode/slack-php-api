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
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) || (Kernel::MAJOR_VERSION >= 7 || Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4)) {
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

        public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
        {
            return \array_key_exists($type, $this->normalizers);
        }

        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return \is_object($data) && \array_key_exists(\get_class($data), $this->normalizers);
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $normalizerClass = $this->normalizers[\get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);

            return $normalizer->normalize($object, $format, $context);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);

            return $denormalizer->denormalize($data, $type, $format, $context);
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [
                \JoliCode\Slack\Api\Model\BlocksItem::class => false,
                \JoliCode\Slack\Api\Model\ObjsBotProfile::class => false,
                \JoliCode\Slack\Api\Model\ObjsBotProfileIcons::class => false,
                \JoliCode\Slack\Api\Model\ObjsChannel::class => false,
                \JoliCode\Slack\Api\Model\ObjsChannelPurpose::class => false,
                \JoliCode\Slack\Api\Model\ObjsChannelTopic::class => false,
                \JoliCode\Slack\Api\Model\ObjsComment::class => false,
                \JoliCode\Slack\Api\Model\ObjsConversation::class => false,
                \JoliCode\Slack\Api\Model\ObjsConversationDisplayCounts::class => false,
                \JoliCode\Slack\Api\Model\ObjsConversationPurpose::class => false,
                \JoliCode\Slack\Api\Model\ObjsConversationSharesItem::class => false,
                \JoliCode\Slack\Api\Model\ObjsConversationTopic::class => false,
                \JoliCode\Slack\Api\Model\ObjsEnterpriseUser::class => false,
                \JoliCode\Slack\Api\Model\ObjsExternalOrgMigrations::class => false,
                \JoliCode\Slack\Api\Model\ObjsExternalOrgMigrationsCurrentItem::class => false,
                \JoliCode\Slack\Api\Model\ObjsFile::class => false,
                \JoliCode\Slack\Api\Model\ObjsFileShares::class => false,
                \JoliCode\Slack\Api\Model\ObjsIcon::class => false,
                \JoliCode\Slack\Api\Model\ObjsMessage::class => false,
                \JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItem::class => false,
                \JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItemActionsItem::class => false,
                \JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItemFieldsItem::class => false,
                \JoliCode\Slack\Api\Model\ObjsMessageIcons::class => false,
                \JoliCode\Slack\Api\Model\ObjsMetadata::class => false,
                \JoliCode\Slack\Api\Model\ObjsPaging::class => false,
                \JoliCode\Slack\Api\Model\ObjsPrimaryOwner::class => false,
                \JoliCode\Slack\Api\Model\ObjsReaction::class => false,
                \JoliCode\Slack\Api\Model\ObjsReminder::class => false,
                \JoliCode\Slack\Api\Model\ObjsResources::class => false,
                \JoliCode\Slack\Api\Model\ObjsResponseMetadata::class => false,
                \JoliCode\Slack\Api\Model\ObjsSubteam::class => false,
                \JoliCode\Slack\Api\Model\ObjsSubteamPrefs::class => false,
                \JoliCode\Slack\Api\Model\ObjsTeam::class => false,
                \JoliCode\Slack\Api\Model\ObjsTeamSsoProvider::class => false,
                \JoliCode\Slack\Api\Model\ObjsTeamProfileField::class => false,
                \JoliCode\Slack\Api\Model\ObjsTeamProfileFieldOption::class => false,
                \JoliCode\Slack\Api\Model\ObjsUser::class => false,
                \JoliCode\Slack\Api\Model\ObjsUserTeamProfile::class => false,
                \JoliCode\Slack\Api\Model\ObjsUserProfile::class => false,
                \JoliCode\Slack\Api\Model\ObjsUserProfileShort::class => false,
                \JoliCode\Slack\Api\Model\AdminAppsApprovePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminAppsApprovePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminAppsApprovedListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminAppsApprovedListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminAppsRequestsListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminAppsRequestsListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminAppsRestrictPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminAppsRestrictPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminAppsRestrictedListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminAppsRestrictedListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsArchivePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsArchivePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsConvertToPrivatePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsConvertToPrivatePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsCreatePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsCreatePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsDeletePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsDeletePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsDisconnectSharedPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsDisconnectSharedPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsEkmListOriginalConnectedChannelInfoGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsEkmListOriginalConnectedChannelInfoGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsGetConversationPrefsGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsGetConversationPrefsGetResponse200Prefs::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsGetConversationPrefsGetResponse200PrefsCanThread::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsGetConversationPrefsGetResponse200PrefsWhoCanPost::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsGetConversationPrefsGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsGetTeamsGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsGetTeamsGetResponse200ResponseMetadata::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsGetTeamsGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsInvitePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsInvitePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsRenamePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsRenamePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsRestrictAccessAddGroupPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsRestrictAccessAddGroupPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsRestrictAccessListGroupsGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsRestrictAccessListGroupsGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsRestrictAccessRemoveGroupPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsRestrictAccessRemoveGroupPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsSearchGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsSearchGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsSetConversationPrefsPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsSetConversationPrefsPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsSetTeamsPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsSetTeamsPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsUnarchivePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsUnarchivePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminEmojiAddPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminEmojiAddPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminEmojiAddAliasPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminEmojiAddAliasPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminEmojiListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminEmojiListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminEmojiRemovePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminEmojiRemovePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminEmojiRenamePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminEmojiRenamePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminInviteRequestsApprovePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminInviteRequestsApprovePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminInviteRequestsApprovedListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminInviteRequestsApprovedListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminInviteRequestsDeniedListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminInviteRequestsDeniedListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminInviteRequestsDenyPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminInviteRequestsDenyPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminInviteRequestsListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminInviteRequestsListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsAdminsListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsAdminsListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsCreatePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsCreatePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsOwnersListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsOwnersListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsSettingsInfoGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsSettingsInfoGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetDefaultChannelsPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetDefaultChannelsPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetDescriptionPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetDescriptionPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetDiscoverabilityPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetDiscoverabilityPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetIconPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetIconPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetNamePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetNamePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminUsergroupsAddChannelsPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminUsergroupsAddChannelsPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminUsergroupsAddTeamsPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminUsergroupsAddTeamsPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminUsergroupsListChannelsGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminUsergroupsListChannelsGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminUsergroupsRemoveChannelsPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminUsergroupsRemoveChannelsPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersAssignPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersAssignPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersInvitePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersInvitePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersRemovePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersRemovePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersSessionInvalidatePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersSessionInvalidatePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersSessionResetPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersSessionResetPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersSetAdminPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersSetAdminPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersSetExpirationPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersSetExpirationPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersSetOwnerPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersSetOwnerPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersSetRegularPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersSetRegularPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ApiTestGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\ApiTestGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AppsEventAuthorizationsListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AppsEventAuthorizationsListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200Info::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoAppHome::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoChannel::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoGroup::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoIm::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoMpim::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoTeam::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsRequestGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsRequestGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsResourcesListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsResourcesListGetResponse200ResourcesItem::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsResourcesListGetResponse200ResponseMetadata::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsResourcesListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsScopesListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsScopesListGetResponse200Scopes::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsScopesListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsUsersListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsUsersListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsUsersRequestGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsUsersRequestGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AppsUninstallGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AppsUninstallGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AuthRevokeGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AuthRevokeGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AuthTestGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AuthTestGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\BotsInfoGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\BotsInfoGetResponse200Bot::class => false,
                \JoliCode\Slack\Api\Model\BotsInfoGetResponse200BotIcons::class => false,
                \JoliCode\Slack\Api\Model\BotsInfoGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\CallsAddPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\CallsAddPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\CallsEndPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\CallsEndPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\CallsInfoGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\CallsInfoGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\CallsParticipantsAddPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\CallsParticipantsAddPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\CallsParticipantsRemovePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\CallsParticipantsRemovePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\CallsUpdatePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\CallsUpdatePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ChatDeletePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ChatDeletePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ChatDeleteScheduledMessagePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ChatDeleteScheduledMessagePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ChatGetPermalinkGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\ChatGetPermalinkGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ChatMeMessagePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ChatMeMessagePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ChatPostEphemeralPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ChatPostEphemeralPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ChatPostMessagePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ChatPostMessagePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200Message::class => false,
                \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200MessageAttachmentsItem::class => false,
                \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ChatScheduledMessagesListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\ChatScheduledMessagesListGetResponse200ResponseMetadata::class => false,
                \JoliCode\Slack\Api\Model\ChatScheduledMessagesListGetResponse200ScheduledMessagesItem::class => false,
                \JoliCode\Slack\Api\Model\ChatScheduledMessagesListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ChatUnfurlPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ChatUnfurlPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ChatUpdatePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ChatUpdatePostResponse200Message::class => false,
                \JoliCode\Slack\Api\Model\ChatUpdatePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsArchivePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsArchivePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsClosePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsClosePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsCreatePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsCreatePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsHistoryGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsHistoryGetResponse200ResponseMetadata::class => false,
                \JoliCode\Slack\Api\Model\ConversationsHistoryGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsInfoGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsInfoGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsInvitePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsInvitePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsInvitePostResponsedefaultErrorsItem::class => false,
                \JoliCode\Slack\Api\Model\ConversationsJoinPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsJoinPostResponse200ResponseMetadata::class => false,
                \JoliCode\Slack\Api\Model\ConversationsJoinPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsKickPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsKickPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsLeavePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsLeavePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsListGetResponse200ResponseMetadata::class => false,
                \JoliCode\Slack\Api\Model\ConversationsListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsMarkPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsMarkPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsMembersGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsMembersGetResponse200ResponseMetadata::class => false,
                \JoliCode\Slack\Api\Model\ConversationsMembersGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsOpenPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsOpenPostResponse200ChannelItem1::class => false,
                \JoliCode\Slack\Api\Model\ConversationsOpenPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsRenamePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsRenamePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsRepliesGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsRepliesGetResponse200MessagesItemItem0::class => false,
                \JoliCode\Slack\Api\Model\ConversationsRepliesGetResponse200MessagesItemItem1::class => false,
                \JoliCode\Slack\Api\Model\ConversationsRepliesGetResponse200ResponseMetadata::class => false,
                \JoliCode\Slack\Api\Model\ConversationsRepliesGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsSetPurposePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsSetPurposePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsSetTopicPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsSetTopicPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsUnarchivePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsUnarchivePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\DialogOpenGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\DialogOpenGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\DndEndDndPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\DndEndDndPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\DndEndSnoozePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\DndEndSnoozePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\DndInfoGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\DndInfoGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\DndSetSnoozePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\DndSetSnoozePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\DndTeamInfoGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\DndTeamInfoGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\EmojiListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\EmojiListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\FilesCommentsDeletePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\FilesCommentsDeletePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\FilesCompleteUploadExternalPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\FilesCompleteUploadExternalPostResponse200FilesItem::class => false,
                \JoliCode\Slack\Api\Model\FilesCompleteUploadExternalPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\FilesDeletePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\FilesDeletePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\FilesGetUploadURLExternalPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\FilesGetUploadURLExternalPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\FilesInfoGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\FilesInfoGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\FilesListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\FilesListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\FilesRemoteAddPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\FilesRemoteAddPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\FilesRemoteInfoGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\FilesRemoteInfoGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\FilesRemoteListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\FilesRemoteListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\FilesRemoteRemovePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\FilesRemoteRemovePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\FilesRemoteShareGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\FilesRemoteShareGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\FilesRemoteUpdatePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\FilesRemoteUpdatePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\FilesRevokePublicURLPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\FilesRevokePublicURLPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\FilesSharedPublicURLPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\FilesSharedPublicURLPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\FilesUploadPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\FilesUploadPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\MigrationExchangeGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\MigrationExchangeGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\OauthAccessGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\OauthAccessGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\OauthTokenGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\OauthTokenGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\OauthV2AccessGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\OauthV2AccessGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\PinsAddPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\PinsAddPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\PinsListGetResponse200Item0::class => false,
                \JoliCode\Slack\Api\Model\PinsListGetResponse200Item0ItemsItem0::class => false,
                \JoliCode\Slack\Api\Model\PinsListGetResponse200Item0ItemsItem1::class => false,
                \JoliCode\Slack\Api\Model\PinsListGetResponse200Item1::class => false,
                \JoliCode\Slack\Api\Model\PinsListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\PinsRemovePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\PinsRemovePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ReactionsAddPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ReactionsAddPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ReactionsGetGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ReactionsListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\ReactionsListGetResponse200ItemsItemItem0::class => false,
                \JoliCode\Slack\Api\Model\ReactionsListGetResponse200ItemsItemItem1::class => false,
                \JoliCode\Slack\Api\Model\ReactionsListGetResponse200ItemsItemItem2::class => false,
                \JoliCode\Slack\Api\Model\ReactionsListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ReactionsRemovePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ReactionsRemovePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\RemindersAddPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\RemindersAddPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\RemindersCompletePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\RemindersCompletePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\RemindersDeletePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\RemindersDeletePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\RemindersInfoGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\RemindersInfoGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\RemindersListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\RemindersListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\RtmConnectGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\RtmConnectGetResponse200Self::class => false,
                \JoliCode\Slack\Api\Model\RtmConnectGetResponse200Team::class => false,
                \JoliCode\Slack\Api\Model\RtmConnectGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\SearchMessagesGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\SearchMessagesGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\StarsAddPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\StarsAddPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\StarsListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\StarsListGetResponse200ItemsItemItem0::class => false,
                \JoliCode\Slack\Api\Model\StarsListGetResponse200ItemsItemItem1::class => false,
                \JoliCode\Slack\Api\Model\StarsListGetResponse200ItemsItemItem2::class => false,
                \JoliCode\Slack\Api\Model\StarsListGetResponse200ItemsItemItem3::class => false,
                \JoliCode\Slack\Api\Model\StarsListGetResponse200ItemsItemItem4::class => false,
                \JoliCode\Slack\Api\Model\StarsListGetResponse200ItemsItemItem5::class => false,
                \JoliCode\Slack\Api\Model\StarsListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\StarsRemovePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\StarsRemovePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\TeamAccessLogsGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\TeamAccessLogsGetResponse200LoginsItem::class => false,
                \JoliCode\Slack\Api\Model\TeamAccessLogsGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\TeamBillableInfoGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\TeamBillableInfoGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\TeamInfoGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\TeamInfoGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\TeamIntegrationLogsGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\TeamIntegrationLogsGetResponse200LogsItem::class => false,
                \JoliCode\Slack\Api\Model\TeamIntegrationLogsGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\TeamProfileGetGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\TeamProfileGetGetResponse200Profile::class => false,
                \JoliCode\Slack\Api\Model\TeamProfileGetGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsergroupsCreatePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsergroupsCreatePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsergroupsDisablePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsergroupsDisablePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsergroupsEnablePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsergroupsEnablePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsergroupsListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsergroupsListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsergroupsUpdatePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsergroupsUpdatePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsergroupsUsersListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsergroupsUsersListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsergroupsUsersUpdatePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsergroupsUsersUpdatePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsersConversationsGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsersConversationsGetResponse200ResponseMetadata::class => false,
                \JoliCode\Slack\Api\Model\UsersConversationsGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsersDeletePhotoPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsersDeletePhotoPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsersGetPresenceGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsersGetPresenceGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item0::class => false,
                \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item0Team::class => false,
                \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item0User::class => false,
                \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item1::class => false,
                \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item1Team::class => false,
                \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item1User::class => false,
                \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item2::class => false,
                \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item2Team::class => false,
                \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item2User::class => false,
                \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item3::class => false,
                \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item3Team::class => false,
                \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item3User::class => false,
                \JoliCode\Slack\Api\Model\UsersIdentityGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsersInfoGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsersInfoGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsersListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsersListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsersLookupByEmailGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsersLookupByEmailGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsersProfileGetGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsersProfileGetGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsersProfileSetPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsersProfileSetPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsersSetActivePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsersSetActivePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsersSetPhotoPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsersSetPhotoPostResponse200Profile::class => false,
                \JoliCode\Slack\Api\Model\UsersSetPhotoPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsersSetPresencePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsersSetPresencePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ViewsOpenPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ViewsOpenPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ViewsPublishPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ViewsPublishPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ViewsPushPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ViewsPushPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ViewsUpdatePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ViewsUpdatePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\WorkflowsStepCompletedPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\WorkflowsStepCompletedPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\WorkflowsStepFailedPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\WorkflowsStepFailedPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\WorkflowsUpdateStepPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\WorkflowsUpdateStepPostResponsedefault::class => false,
                \Jane\Component\JsonSchemaRuntime\Reference::class => false,
            ];
        }

        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }

        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;

            return $normalizer;
        }
    }
} else {
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

        public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
        {
            return \array_key_exists($type, $this->normalizers);
        }

        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return \is_object($data) && \array_key_exists(\get_class($data), $this->normalizers);
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $normalizerClass = $this->normalizers[\get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);

            return $normalizer->normalize($object, $format, $context);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);

            return $denormalizer->denormalize($data, $type, $format, $context);
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [
                \JoliCode\Slack\Api\Model\BlocksItem::class => false,
                \JoliCode\Slack\Api\Model\ObjsBotProfile::class => false,
                \JoliCode\Slack\Api\Model\ObjsBotProfileIcons::class => false,
                \JoliCode\Slack\Api\Model\ObjsChannel::class => false,
                \JoliCode\Slack\Api\Model\ObjsChannelPurpose::class => false,
                \JoliCode\Slack\Api\Model\ObjsChannelTopic::class => false,
                \JoliCode\Slack\Api\Model\ObjsComment::class => false,
                \JoliCode\Slack\Api\Model\ObjsConversation::class => false,
                \JoliCode\Slack\Api\Model\ObjsConversationDisplayCounts::class => false,
                \JoliCode\Slack\Api\Model\ObjsConversationPurpose::class => false,
                \JoliCode\Slack\Api\Model\ObjsConversationSharesItem::class => false,
                \JoliCode\Slack\Api\Model\ObjsConversationTopic::class => false,
                \JoliCode\Slack\Api\Model\ObjsEnterpriseUser::class => false,
                \JoliCode\Slack\Api\Model\ObjsExternalOrgMigrations::class => false,
                \JoliCode\Slack\Api\Model\ObjsExternalOrgMigrationsCurrentItem::class => false,
                \JoliCode\Slack\Api\Model\ObjsFile::class => false,
                \JoliCode\Slack\Api\Model\ObjsFileShares::class => false,
                \JoliCode\Slack\Api\Model\ObjsIcon::class => false,
                \JoliCode\Slack\Api\Model\ObjsMessage::class => false,
                \JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItem::class => false,
                \JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItemActionsItem::class => false,
                \JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItemFieldsItem::class => false,
                \JoliCode\Slack\Api\Model\ObjsMessageIcons::class => false,
                \JoliCode\Slack\Api\Model\ObjsMetadata::class => false,
                \JoliCode\Slack\Api\Model\ObjsPaging::class => false,
                \JoliCode\Slack\Api\Model\ObjsPrimaryOwner::class => false,
                \JoliCode\Slack\Api\Model\ObjsReaction::class => false,
                \JoliCode\Slack\Api\Model\ObjsReminder::class => false,
                \JoliCode\Slack\Api\Model\ObjsResources::class => false,
                \JoliCode\Slack\Api\Model\ObjsResponseMetadata::class => false,
                \JoliCode\Slack\Api\Model\ObjsSubteam::class => false,
                \JoliCode\Slack\Api\Model\ObjsSubteamPrefs::class => false,
                \JoliCode\Slack\Api\Model\ObjsTeam::class => false,
                \JoliCode\Slack\Api\Model\ObjsTeamSsoProvider::class => false,
                \JoliCode\Slack\Api\Model\ObjsTeamProfileField::class => false,
                \JoliCode\Slack\Api\Model\ObjsTeamProfileFieldOption::class => false,
                \JoliCode\Slack\Api\Model\ObjsUser::class => false,
                \JoliCode\Slack\Api\Model\ObjsUserTeamProfile::class => false,
                \JoliCode\Slack\Api\Model\ObjsUserProfile::class => false,
                \JoliCode\Slack\Api\Model\ObjsUserProfileShort::class => false,
                \JoliCode\Slack\Api\Model\AdminAppsApprovePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminAppsApprovePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminAppsApprovedListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminAppsApprovedListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminAppsRequestsListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminAppsRequestsListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminAppsRestrictPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminAppsRestrictPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminAppsRestrictedListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminAppsRestrictedListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsArchivePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsArchivePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsConvertToPrivatePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsConvertToPrivatePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsCreatePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsCreatePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsDeletePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsDeletePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsDisconnectSharedPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsDisconnectSharedPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsEkmListOriginalConnectedChannelInfoGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsEkmListOriginalConnectedChannelInfoGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsGetConversationPrefsGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsGetConversationPrefsGetResponse200Prefs::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsGetConversationPrefsGetResponse200PrefsCanThread::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsGetConversationPrefsGetResponse200PrefsWhoCanPost::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsGetConversationPrefsGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsGetTeamsGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsGetTeamsGetResponse200ResponseMetadata::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsGetTeamsGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsInvitePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsInvitePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsRenamePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsRenamePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsRestrictAccessAddGroupPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsRestrictAccessAddGroupPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsRestrictAccessListGroupsGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsRestrictAccessListGroupsGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsRestrictAccessRemoveGroupPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsRestrictAccessRemoveGroupPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsSearchGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsSearchGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsSetConversationPrefsPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsSetConversationPrefsPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsSetTeamsPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsSetTeamsPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsUnarchivePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminConversationsUnarchivePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminEmojiAddPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminEmojiAddPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminEmojiAddAliasPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminEmojiAddAliasPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminEmojiListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminEmojiListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminEmojiRemovePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminEmojiRemovePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminEmojiRenamePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminEmojiRenamePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminInviteRequestsApprovePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminInviteRequestsApprovePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminInviteRequestsApprovedListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminInviteRequestsApprovedListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminInviteRequestsDeniedListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminInviteRequestsDeniedListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminInviteRequestsDenyPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminInviteRequestsDenyPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminInviteRequestsListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminInviteRequestsListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsAdminsListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsAdminsListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsCreatePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsCreatePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsOwnersListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsOwnersListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsSettingsInfoGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsSettingsInfoGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetDefaultChannelsPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetDefaultChannelsPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetDescriptionPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetDescriptionPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetDiscoverabilityPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetDiscoverabilityPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetIconPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetIconPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetNamePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminTeamsSettingsSetNamePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminUsergroupsAddChannelsPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminUsergroupsAddChannelsPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminUsergroupsAddTeamsPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminUsergroupsAddTeamsPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminUsergroupsListChannelsGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminUsergroupsListChannelsGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminUsergroupsRemoveChannelsPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminUsergroupsRemoveChannelsPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersAssignPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersAssignPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersInvitePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersInvitePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersRemovePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersRemovePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersSessionInvalidatePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersSessionInvalidatePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersSessionResetPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersSessionResetPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersSetAdminPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersSetAdminPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersSetExpirationPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersSetExpirationPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersSetOwnerPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersSetOwnerPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersSetRegularPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\AdminUsersSetRegularPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ApiTestGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\ApiTestGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AppsEventAuthorizationsListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AppsEventAuthorizationsListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200Info::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoAppHome::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoChannel::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoGroup::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoIm::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoMpim::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponse200InfoTeam::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsInfoGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsRequestGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsRequestGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsResourcesListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsResourcesListGetResponse200ResourcesItem::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsResourcesListGetResponse200ResponseMetadata::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsResourcesListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsScopesListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsScopesListGetResponse200Scopes::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsScopesListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsUsersListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsUsersListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsUsersRequestGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AppsPermissionsUsersRequestGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AppsUninstallGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AppsUninstallGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AuthRevokeGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AuthRevokeGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\AuthTestGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\AuthTestGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\BotsInfoGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\BotsInfoGetResponse200Bot::class => false,
                \JoliCode\Slack\Api\Model\BotsInfoGetResponse200BotIcons::class => false,
                \JoliCode\Slack\Api\Model\BotsInfoGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\CallsAddPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\CallsAddPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\CallsEndPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\CallsEndPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\CallsInfoGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\CallsInfoGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\CallsParticipantsAddPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\CallsParticipantsAddPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\CallsParticipantsRemovePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\CallsParticipantsRemovePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\CallsUpdatePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\CallsUpdatePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ChatDeletePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ChatDeletePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ChatDeleteScheduledMessagePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ChatDeleteScheduledMessagePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ChatGetPermalinkGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\ChatGetPermalinkGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ChatMeMessagePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ChatMeMessagePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ChatPostEphemeralPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ChatPostEphemeralPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ChatPostMessagePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ChatPostMessagePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200Message::class => false,
                \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200MessageAttachmentsItem::class => false,
                \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ChatScheduledMessagesListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\ChatScheduledMessagesListGetResponse200ResponseMetadata::class => false,
                \JoliCode\Slack\Api\Model\ChatScheduledMessagesListGetResponse200ScheduledMessagesItem::class => false,
                \JoliCode\Slack\Api\Model\ChatScheduledMessagesListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ChatUnfurlPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ChatUnfurlPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ChatUpdatePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ChatUpdatePostResponse200Message::class => false,
                \JoliCode\Slack\Api\Model\ChatUpdatePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsArchivePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsArchivePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsClosePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsClosePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsCreatePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsCreatePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsHistoryGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsHistoryGetResponse200ResponseMetadata::class => false,
                \JoliCode\Slack\Api\Model\ConversationsHistoryGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsInfoGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsInfoGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsInvitePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsInvitePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsInvitePostResponsedefaultErrorsItem::class => false,
                \JoliCode\Slack\Api\Model\ConversationsJoinPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsJoinPostResponse200ResponseMetadata::class => false,
                \JoliCode\Slack\Api\Model\ConversationsJoinPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsKickPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsKickPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsLeavePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsLeavePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsListGetResponse200ResponseMetadata::class => false,
                \JoliCode\Slack\Api\Model\ConversationsListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsMarkPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsMarkPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsMembersGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsMembersGetResponse200ResponseMetadata::class => false,
                \JoliCode\Slack\Api\Model\ConversationsMembersGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsOpenPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsOpenPostResponse200ChannelItem1::class => false,
                \JoliCode\Slack\Api\Model\ConversationsOpenPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsRenamePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsRenamePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsRepliesGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsRepliesGetResponse200MessagesItemItem0::class => false,
                \JoliCode\Slack\Api\Model\ConversationsRepliesGetResponse200MessagesItemItem1::class => false,
                \JoliCode\Slack\Api\Model\ConversationsRepliesGetResponse200ResponseMetadata::class => false,
                \JoliCode\Slack\Api\Model\ConversationsRepliesGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsSetPurposePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsSetPurposePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsSetTopicPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsSetTopicPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ConversationsUnarchivePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ConversationsUnarchivePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\DialogOpenGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\DialogOpenGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\DndEndDndPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\DndEndDndPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\DndEndSnoozePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\DndEndSnoozePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\DndInfoGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\DndInfoGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\DndSetSnoozePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\DndSetSnoozePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\DndTeamInfoGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\DndTeamInfoGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\EmojiListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\EmojiListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\FilesCommentsDeletePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\FilesCommentsDeletePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\FilesCompleteUploadExternalPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\FilesCompleteUploadExternalPostResponse200FilesItem::class => false,
                \JoliCode\Slack\Api\Model\FilesCompleteUploadExternalPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\FilesDeletePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\FilesDeletePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\FilesGetUploadURLExternalPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\FilesGetUploadURLExternalPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\FilesInfoGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\FilesInfoGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\FilesListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\FilesListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\FilesRemoteAddPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\FilesRemoteAddPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\FilesRemoteInfoGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\FilesRemoteInfoGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\FilesRemoteListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\FilesRemoteListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\FilesRemoteRemovePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\FilesRemoteRemovePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\FilesRemoteShareGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\FilesRemoteShareGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\FilesRemoteUpdatePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\FilesRemoteUpdatePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\FilesRevokePublicURLPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\FilesRevokePublicURLPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\FilesSharedPublicURLPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\FilesSharedPublicURLPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\FilesUploadPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\FilesUploadPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\MigrationExchangeGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\MigrationExchangeGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\OauthAccessGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\OauthAccessGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\OauthTokenGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\OauthTokenGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\OauthV2AccessGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\OauthV2AccessGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\PinsAddPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\PinsAddPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\PinsListGetResponse200Item0::class => false,
                \JoliCode\Slack\Api\Model\PinsListGetResponse200Item0ItemsItem0::class => false,
                \JoliCode\Slack\Api\Model\PinsListGetResponse200Item0ItemsItem1::class => false,
                \JoliCode\Slack\Api\Model\PinsListGetResponse200Item1::class => false,
                \JoliCode\Slack\Api\Model\PinsListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\PinsRemovePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\PinsRemovePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ReactionsAddPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ReactionsAddPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ReactionsGetGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ReactionsListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\ReactionsListGetResponse200ItemsItemItem0::class => false,
                \JoliCode\Slack\Api\Model\ReactionsListGetResponse200ItemsItemItem1::class => false,
                \JoliCode\Slack\Api\Model\ReactionsListGetResponse200ItemsItemItem2::class => false,
                \JoliCode\Slack\Api\Model\ReactionsListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ReactionsRemovePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ReactionsRemovePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\RemindersAddPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\RemindersAddPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\RemindersCompletePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\RemindersCompletePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\RemindersDeletePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\RemindersDeletePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\RemindersInfoGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\RemindersInfoGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\RemindersListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\RemindersListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\RtmConnectGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\RtmConnectGetResponse200Self::class => false,
                \JoliCode\Slack\Api\Model\RtmConnectGetResponse200Team::class => false,
                \JoliCode\Slack\Api\Model\RtmConnectGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\SearchMessagesGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\SearchMessagesGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\StarsAddPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\StarsAddPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\StarsListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\StarsListGetResponse200ItemsItemItem0::class => false,
                \JoliCode\Slack\Api\Model\StarsListGetResponse200ItemsItemItem1::class => false,
                \JoliCode\Slack\Api\Model\StarsListGetResponse200ItemsItemItem2::class => false,
                \JoliCode\Slack\Api\Model\StarsListGetResponse200ItemsItemItem3::class => false,
                \JoliCode\Slack\Api\Model\StarsListGetResponse200ItemsItemItem4::class => false,
                \JoliCode\Slack\Api\Model\StarsListGetResponse200ItemsItemItem5::class => false,
                \JoliCode\Slack\Api\Model\StarsListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\StarsRemovePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\StarsRemovePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\TeamAccessLogsGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\TeamAccessLogsGetResponse200LoginsItem::class => false,
                \JoliCode\Slack\Api\Model\TeamAccessLogsGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\TeamBillableInfoGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\TeamBillableInfoGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\TeamInfoGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\TeamInfoGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\TeamIntegrationLogsGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\TeamIntegrationLogsGetResponse200LogsItem::class => false,
                \JoliCode\Slack\Api\Model\TeamIntegrationLogsGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\TeamProfileGetGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\TeamProfileGetGetResponse200Profile::class => false,
                \JoliCode\Slack\Api\Model\TeamProfileGetGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsergroupsCreatePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsergroupsCreatePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsergroupsDisablePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsergroupsDisablePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsergroupsEnablePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsergroupsEnablePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsergroupsListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsergroupsListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsergroupsUpdatePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsergroupsUpdatePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsergroupsUsersListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsergroupsUsersListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsergroupsUsersUpdatePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsergroupsUsersUpdatePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsersConversationsGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsersConversationsGetResponse200ResponseMetadata::class => false,
                \JoliCode\Slack\Api\Model\UsersConversationsGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsersDeletePhotoPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsersDeletePhotoPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsersGetPresenceGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsersGetPresenceGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item0::class => false,
                \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item0Team::class => false,
                \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item0User::class => false,
                \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item1::class => false,
                \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item1Team::class => false,
                \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item1User::class => false,
                \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item2::class => false,
                \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item2Team::class => false,
                \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item2User::class => false,
                \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item3::class => false,
                \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item3Team::class => false,
                \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item3User::class => false,
                \JoliCode\Slack\Api\Model\UsersIdentityGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsersInfoGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsersInfoGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsersListGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsersListGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsersLookupByEmailGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsersLookupByEmailGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsersProfileGetGetResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsersProfileGetGetResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsersProfileSetPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsersProfileSetPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsersSetActivePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsersSetActivePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsersSetPhotoPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsersSetPhotoPostResponse200Profile::class => false,
                \JoliCode\Slack\Api\Model\UsersSetPhotoPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\UsersSetPresencePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\UsersSetPresencePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ViewsOpenPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ViewsOpenPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ViewsPublishPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ViewsPublishPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ViewsPushPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ViewsPushPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\ViewsUpdatePostResponse200::class => false,
                \JoliCode\Slack\Api\Model\ViewsUpdatePostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\WorkflowsStepCompletedPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\WorkflowsStepCompletedPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\WorkflowsStepFailedPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\WorkflowsStepFailedPostResponsedefault::class => false,
                \JoliCode\Slack\Api\Model\WorkflowsUpdateStepPostResponse200::class => false,
                \JoliCode\Slack\Api\Model\WorkflowsUpdateStepPostResponsedefault::class => false,
                \Jane\Component\JsonSchemaRuntime\Reference::class => false,
            ];
        }

        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }

        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;

            return $normalizer;
        }
    }
}
