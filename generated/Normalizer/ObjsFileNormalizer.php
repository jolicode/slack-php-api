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

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ObjsFileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ObjsFile' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsFile' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!\is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsFile();
        if (property_exists($data, 'channels') && null !== $data->{'channels'}) {
            $values = [];
            foreach ($data->{'channels'} as $value) {
                $values[] = $value;
            }
            $object->setChannels($values);
        } elseif (property_exists($data, 'channels') && null === $data->{'channels'}) {
            $object->setChannels(null);
        }
        if (property_exists($data, 'comments_count') && null !== $data->{'comments_count'}) {
            $object->setCommentsCount($data->{'comments_count'});
        } elseif (property_exists($data, 'comments_count') && null === $data->{'comments_count'}) {
            $object->setCommentsCount(null);
        }
        if (property_exists($data, 'created') && null !== $data->{'created'}) {
            $object->setCreated($data->{'created'});
        } elseif (property_exists($data, 'created') && null === $data->{'created'}) {
            $object->setCreated(null);
        }
        if (property_exists($data, 'display_as_bot') && null !== $data->{'display_as_bot'}) {
            $object->setDisplayAsBot($data->{'display_as_bot'});
        } elseif (property_exists($data, 'display_as_bot') && null === $data->{'display_as_bot'}) {
            $object->setDisplayAsBot(null);
        }
        if (property_exists($data, 'editable') && null !== $data->{'editable'}) {
            $object->setEditable($data->{'editable'});
        } elseif (property_exists($data, 'editable') && null === $data->{'editable'}) {
            $object->setEditable(null);
        }
        if (property_exists($data, 'editor') && null !== $data->{'editor'}) {
            $object->setEditor($data->{'editor'});
        } elseif (property_exists($data, 'editor') && null === $data->{'editor'}) {
            $object->setEditor(null);
        }
        if (property_exists($data, 'external_id') && null !== $data->{'external_id'}) {
            $object->setExternalId($data->{'external_id'});
        } elseif (property_exists($data, 'external_id') && null === $data->{'external_id'}) {
            $object->setExternalId(null);
        }
        if (property_exists($data, 'external_type') && null !== $data->{'external_type'}) {
            $object->setExternalType($data->{'external_type'});
        } elseif (property_exists($data, 'external_type') && null === $data->{'external_type'}) {
            $object->setExternalType(null);
        }
        if (property_exists($data, 'external_url') && null !== $data->{'external_url'}) {
            $object->setExternalUrl($data->{'external_url'});
        } elseif (property_exists($data, 'external_url') && null === $data->{'external_url'}) {
            $object->setExternalUrl(null);
        }
        if (property_exists($data, 'filetype') && null !== $data->{'filetype'}) {
            $object->setFiletype($data->{'filetype'});
        } elseif (property_exists($data, 'filetype') && null === $data->{'filetype'}) {
            $object->setFiletype(null);
        }
        if (property_exists($data, 'groups') && null !== $data->{'groups'}) {
            $values_1 = [];
            foreach ($data->{'groups'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setGroups($values_1);
        } elseif (property_exists($data, 'groups') && null === $data->{'groups'}) {
            $object->setGroups(null);
        }
        if (property_exists($data, 'has_rich_preview') && null !== $data->{'has_rich_preview'}) {
            $object->setHasRichPreview($data->{'has_rich_preview'});
        } elseif (property_exists($data, 'has_rich_preview') && null === $data->{'has_rich_preview'}) {
            $object->setHasRichPreview(null);
        }
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        } elseif (property_exists($data, 'id') && null === $data->{'id'}) {
            $object->setId(null);
        }
        if (property_exists($data, 'image_exif_rotation') && null !== $data->{'image_exif_rotation'}) {
            $object->setImageExifRotation($data->{'image_exif_rotation'});
        } elseif (property_exists($data, 'image_exif_rotation') && null === $data->{'image_exif_rotation'}) {
            $object->setImageExifRotation(null);
        }
        if (property_exists($data, 'ims') && null !== $data->{'ims'}) {
            $values_2 = [];
            foreach ($data->{'ims'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setIms($values_2);
        } elseif (property_exists($data, 'ims') && null === $data->{'ims'}) {
            $object->setIms(null);
        }
        if (property_exists($data, 'is_external') && null !== $data->{'is_external'}) {
            $object->setIsExternal($data->{'is_external'});
        } elseif (property_exists($data, 'is_external') && null === $data->{'is_external'}) {
            $object->setIsExternal(null);
        }
        if (property_exists($data, 'is_public') && null !== $data->{'is_public'}) {
            $object->setIsPublic($data->{'is_public'});
        } elseif (property_exists($data, 'is_public') && null === $data->{'is_public'}) {
            $object->setIsPublic(null);
        }
        if (property_exists($data, 'is_starred') && null !== $data->{'is_starred'}) {
            $object->setIsStarred($data->{'is_starred'});
        } elseif (property_exists($data, 'is_starred') && null === $data->{'is_starred'}) {
            $object->setIsStarred(null);
        }
        if (property_exists($data, 'is_tombstoned') && null !== $data->{'is_tombstoned'}) {
            $object->setIsTombstoned($data->{'is_tombstoned'});
        } elseif (property_exists($data, 'is_tombstoned') && null === $data->{'is_tombstoned'}) {
            $object->setIsTombstoned(null);
        }
        if (property_exists($data, 'last_editor') && null !== $data->{'last_editor'}) {
            $object->setLastEditor($data->{'last_editor'});
        } elseif (property_exists($data, 'last_editor') && null === $data->{'last_editor'}) {
            $object->setLastEditor(null);
        }
        if (property_exists($data, 'mimetype') && null !== $data->{'mimetype'}) {
            $object->setMimetype($data->{'mimetype'});
        } elseif (property_exists($data, 'mimetype') && null === $data->{'mimetype'}) {
            $object->setMimetype(null);
        }
        if (property_exists($data, 'mode') && null !== $data->{'mode'}) {
            $object->setMode($data->{'mode'});
        } elseif (property_exists($data, 'mode') && null === $data->{'mode'}) {
            $object->setMode(null);
        }
        if (property_exists($data, 'name') && null !== $data->{'name'}) {
            $object->setName($data->{'name'});
        } elseif (property_exists($data, 'name') && null === $data->{'name'}) {
            $object->setName(null);
        }
        if (property_exists($data, 'num_stars') && null !== $data->{'num_stars'}) {
            $object->setNumStars($data->{'num_stars'});
        } elseif (property_exists($data, 'num_stars') && null === $data->{'num_stars'}) {
            $object->setNumStars(null);
        }
        if (property_exists($data, 'original_h') && null !== $data->{'original_h'}) {
            $object->setOriginalH($data->{'original_h'});
        } elseif (property_exists($data, 'original_h') && null === $data->{'original_h'}) {
            $object->setOriginalH(null);
        }
        if (property_exists($data, 'original_w') && null !== $data->{'original_w'}) {
            $object->setOriginalW($data->{'original_w'});
        } elseif (property_exists($data, 'original_w') && null === $data->{'original_w'}) {
            $object->setOriginalW(null);
        }
        if (property_exists($data, 'permalink') && null !== $data->{'permalink'}) {
            $object->setPermalink($data->{'permalink'});
        } elseif (property_exists($data, 'permalink') && null === $data->{'permalink'}) {
            $object->setPermalink(null);
        }
        if (property_exists($data, 'permalink_public') && null !== $data->{'permalink_public'}) {
            $object->setPermalinkPublic($data->{'permalink_public'});
        } elseif (property_exists($data, 'permalink_public') && null === $data->{'permalink_public'}) {
            $object->setPermalinkPublic(null);
        }
        if (property_exists($data, 'pinned_info') && null !== $data->{'pinned_info'}) {
            $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'pinned_info'} as $key => $value_3) {
                $values_3[$key] = $this->denormalizer->denormalize($value_3, 'JoliCode\\Slack\\Api\\Model\\DefsPinnedInfoItem', 'json', $context);
            }
            $object->setPinnedInfo($values_3);
        } elseif (property_exists($data, 'pinned_info') && null === $data->{'pinned_info'}) {
            $object->setPinnedInfo(null);
        }
        if (property_exists($data, 'pinned_to') && null !== $data->{'pinned_to'}) {
            $values_4 = [];
            foreach ($data->{'pinned_to'} as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setPinnedTo($values_4);
        } elseif (property_exists($data, 'pinned_to') && null === $data->{'pinned_to'}) {
            $object->setPinnedTo(null);
        }
        if (property_exists($data, 'pretty_type') && null !== $data->{'pretty_type'}) {
            $object->setPrettyType($data->{'pretty_type'});
        } elseif (property_exists($data, 'pretty_type') && null === $data->{'pretty_type'}) {
            $object->setPrettyType(null);
        }
        if (property_exists($data, 'preview') && null !== $data->{'preview'}) {
            $object->setPreview($data->{'preview'});
        } elseif (property_exists($data, 'preview') && null === $data->{'preview'}) {
            $object->setPreview(null);
        }
        if (property_exists($data, 'public_url_shared') && null !== $data->{'public_url_shared'}) {
            $object->setPublicUrlShared($data->{'public_url_shared'});
        } elseif (property_exists($data, 'public_url_shared') && null === $data->{'public_url_shared'}) {
            $object->setPublicUrlShared(null);
        }
        if (property_exists($data, 'reactions') && null !== $data->{'reactions'}) {
            $values_5 = [];
            foreach ($data->{'reactions'} as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'JoliCode\\Slack\\Api\\Model\\ObjsReaction', 'json', $context);
            }
            $object->setReactions($values_5);
        } elseif (property_exists($data, 'reactions') && null === $data->{'reactions'}) {
            $object->setReactions(null);
        }
        if (property_exists($data, 'shares') && null !== $data->{'shares'}) {
            $object->setShares($this->denormalizer->denormalize($data->{'shares'}, 'JoliCode\\Slack\\Api\\Model\\ObjsFileShares', 'json', $context));
        } elseif (property_exists($data, 'shares') && null === $data->{'shares'}) {
            $object->setShares(null);
        }
        if (property_exists($data, 'size') && null !== $data->{'size'}) {
            $object->setSize($data->{'size'});
        } elseif (property_exists($data, 'size') && null === $data->{'size'}) {
            $object->setSize(null);
        }
        if (property_exists($data, 'source_team') && null !== $data->{'source_team'}) {
            $object->setSourceTeam($data->{'source_team'});
        } elseif (property_exists($data, 'source_team') && null === $data->{'source_team'}) {
            $object->setSourceTeam(null);
        }
        if (property_exists($data, 'state') && null !== $data->{'state'}) {
            $object->setState($data->{'state'});
        } elseif (property_exists($data, 'state') && null === $data->{'state'}) {
            $object->setState(null);
        }
        if (property_exists($data, 'thumb_1024') && null !== $data->{'thumb_1024'}) {
            $object->setThumb1024($data->{'thumb_1024'});
        } elseif (property_exists($data, 'thumb_1024') && null === $data->{'thumb_1024'}) {
            $object->setThumb1024(null);
        }
        if (property_exists($data, 'thumb_1024_h') && null !== $data->{'thumb_1024_h'}) {
            $object->setThumb1024H($data->{'thumb_1024_h'});
        } elseif (property_exists($data, 'thumb_1024_h') && null === $data->{'thumb_1024_h'}) {
            $object->setThumb1024H(null);
        }
        if (property_exists($data, 'thumb_1024_w') && null !== $data->{'thumb_1024_w'}) {
            $object->setThumb1024W($data->{'thumb_1024_w'});
        } elseif (property_exists($data, 'thumb_1024_w') && null === $data->{'thumb_1024_w'}) {
            $object->setThumb1024W(null);
        }
        if (property_exists($data, 'thumb_160') && null !== $data->{'thumb_160'}) {
            $object->setThumb160($data->{'thumb_160'});
        } elseif (property_exists($data, 'thumb_160') && null === $data->{'thumb_160'}) {
            $object->setThumb160(null);
        }
        if (property_exists($data, 'thumb_360') && null !== $data->{'thumb_360'}) {
            $object->setThumb360($data->{'thumb_360'});
        } elseif (property_exists($data, 'thumb_360') && null === $data->{'thumb_360'}) {
            $object->setThumb360(null);
        }
        if (property_exists($data, 'thumb_360_h') && null !== $data->{'thumb_360_h'}) {
            $object->setThumb360H($data->{'thumb_360_h'});
        } elseif (property_exists($data, 'thumb_360_h') && null === $data->{'thumb_360_h'}) {
            $object->setThumb360H(null);
        }
        if (property_exists($data, 'thumb_360_w') && null !== $data->{'thumb_360_w'}) {
            $object->setThumb360W($data->{'thumb_360_w'});
        } elseif (property_exists($data, 'thumb_360_w') && null === $data->{'thumb_360_w'}) {
            $object->setThumb360W(null);
        }
        if (property_exists($data, 'thumb_480') && null !== $data->{'thumb_480'}) {
            $object->setThumb480($data->{'thumb_480'});
        } elseif (property_exists($data, 'thumb_480') && null === $data->{'thumb_480'}) {
            $object->setThumb480(null);
        }
        if (property_exists($data, 'thumb_480_h') && null !== $data->{'thumb_480_h'}) {
            $object->setThumb480H($data->{'thumb_480_h'});
        } elseif (property_exists($data, 'thumb_480_h') && null === $data->{'thumb_480_h'}) {
            $object->setThumb480H(null);
        }
        if (property_exists($data, 'thumb_480_w') && null !== $data->{'thumb_480_w'}) {
            $object->setThumb480W($data->{'thumb_480_w'});
        } elseif (property_exists($data, 'thumb_480_w') && null === $data->{'thumb_480_w'}) {
            $object->setThumb480W(null);
        }
        if (property_exists($data, 'thumb_64') && null !== $data->{'thumb_64'}) {
            $object->setThumb64($data->{'thumb_64'});
        } elseif (property_exists($data, 'thumb_64') && null === $data->{'thumb_64'}) {
            $object->setThumb64(null);
        }
        if (property_exists($data, 'thumb_720') && null !== $data->{'thumb_720'}) {
            $object->setThumb720($data->{'thumb_720'});
        } elseif (property_exists($data, 'thumb_720') && null === $data->{'thumb_720'}) {
            $object->setThumb720(null);
        }
        if (property_exists($data, 'thumb_720_h') && null !== $data->{'thumb_720_h'}) {
            $object->setThumb720H($data->{'thumb_720_h'});
        } elseif (property_exists($data, 'thumb_720_h') && null === $data->{'thumb_720_h'}) {
            $object->setThumb720H(null);
        }
        if (property_exists($data, 'thumb_720_w') && null !== $data->{'thumb_720_w'}) {
            $object->setThumb720W($data->{'thumb_720_w'});
        } elseif (property_exists($data, 'thumb_720_w') && null === $data->{'thumb_720_w'}) {
            $object->setThumb720W(null);
        }
        if (property_exists($data, 'thumb_80') && null !== $data->{'thumb_80'}) {
            $object->setThumb80($data->{'thumb_80'});
        } elseif (property_exists($data, 'thumb_80') && null === $data->{'thumb_80'}) {
            $object->setThumb80(null);
        }
        if (property_exists($data, 'thumb_800') && null !== $data->{'thumb_800'}) {
            $object->setThumb800($data->{'thumb_800'});
        } elseif (property_exists($data, 'thumb_800') && null === $data->{'thumb_800'}) {
            $object->setThumb800(null);
        }
        if (property_exists($data, 'thumb_800_h') && null !== $data->{'thumb_800_h'}) {
            $object->setThumb800H($data->{'thumb_800_h'});
        } elseif (property_exists($data, 'thumb_800_h') && null === $data->{'thumb_800_h'}) {
            $object->setThumb800H(null);
        }
        if (property_exists($data, 'thumb_800_w') && null !== $data->{'thumb_800_w'}) {
            $object->setThumb800W($data->{'thumb_800_w'});
        } elseif (property_exists($data, 'thumb_800_w') && null === $data->{'thumb_800_w'}) {
            $object->setThumb800W(null);
        }
        if (property_exists($data, 'thumb_960') && null !== $data->{'thumb_960'}) {
            $object->setThumb960($data->{'thumb_960'});
        } elseif (property_exists($data, 'thumb_960') && null === $data->{'thumb_960'}) {
            $object->setThumb960(null);
        }
        if (property_exists($data, 'thumb_960_h') && null !== $data->{'thumb_960_h'}) {
            $object->setThumb960H($data->{'thumb_960_h'});
        } elseif (property_exists($data, 'thumb_960_h') && null === $data->{'thumb_960_h'}) {
            $object->setThumb960H(null);
        }
        if (property_exists($data, 'thumb_960_w') && null !== $data->{'thumb_960_w'}) {
            $object->setThumb960W($data->{'thumb_960_w'});
        } elseif (property_exists($data, 'thumb_960_w') && null === $data->{'thumb_960_w'}) {
            $object->setThumb960W(null);
        }
        if (property_exists($data, 'timestamp') && null !== $data->{'timestamp'}) {
            $object->setTimestamp($data->{'timestamp'});
        } elseif (property_exists($data, 'timestamp') && null === $data->{'timestamp'}) {
            $object->setTimestamp(null);
        }
        if (property_exists($data, 'title') && null !== $data->{'title'}) {
            $object->setTitle($data->{'title'});
        } elseif (property_exists($data, 'title') && null === $data->{'title'}) {
            $object->setTitle(null);
        }
        if (property_exists($data, 'updated') && null !== $data->{'updated'}) {
            $object->setUpdated($data->{'updated'});
        } elseif (property_exists($data, 'updated') && null === $data->{'updated'}) {
            $object->setUpdated(null);
        }
        if (property_exists($data, 'url_private') && null !== $data->{'url_private'}) {
            $object->setUrlPrivate($data->{'url_private'});
        } elseif (property_exists($data, 'url_private') && null === $data->{'url_private'}) {
            $object->setUrlPrivate(null);
        }
        if (property_exists($data, 'url_private_download') && null !== $data->{'url_private_download'}) {
            $object->setUrlPrivateDownload($data->{'url_private_download'});
        } elseif (property_exists($data, 'url_private_download') && null === $data->{'url_private_download'}) {
            $object->setUrlPrivateDownload(null);
        }
        if (property_exists($data, 'user') && null !== $data->{'user'}) {
            $object->setUser($data->{'user'});
        } elseif (property_exists($data, 'user') && null === $data->{'user'}) {
            $object->setUser(null);
        }
        if (property_exists($data, 'user_team') && null !== $data->{'user_team'}) {
            $object->setUserTeam($data->{'user_team'});
        } elseif (property_exists($data, 'user_team') && null === $data->{'user_team'}) {
            $object->setUserTeam(null);
        }
        if (property_exists($data, 'username') && null !== $data->{'username'}) {
            $object->setUsername($data->{'username'});
        } elseif (property_exists($data, 'username') && null === $data->{'username'}) {
            $object->setUsername(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getChannels()) {
            $values = [];
            foreach ($object->getChannels() as $value) {
                $values[] = $value;
            }
            $data->{'channels'} = $values;
        } else {
            $data->{'channels'} = null;
        }
        if (null !== $object->getCommentsCount()) {
            $data->{'comments_count'} = $object->getCommentsCount();
        } else {
            $data->{'comments_count'} = null;
        }
        if (null !== $object->getCreated()) {
            $data->{'created'} = $object->getCreated();
        } else {
            $data->{'created'} = null;
        }
        if (null !== $object->getDisplayAsBot()) {
            $data->{'display_as_bot'} = $object->getDisplayAsBot();
        } else {
            $data->{'display_as_bot'} = null;
        }
        if (null !== $object->getEditable()) {
            $data->{'editable'} = $object->getEditable();
        } else {
            $data->{'editable'} = null;
        }
        if (null !== $object->getEditor()) {
            $data->{'editor'} = $object->getEditor();
        } else {
            $data->{'editor'} = null;
        }
        if (null !== $object->getExternalId()) {
            $data->{'external_id'} = $object->getExternalId();
        } else {
            $data->{'external_id'} = null;
        }
        if (null !== $object->getExternalType()) {
            $data->{'external_type'} = $object->getExternalType();
        } else {
            $data->{'external_type'} = null;
        }
        if (null !== $object->getExternalUrl()) {
            $data->{'external_url'} = $object->getExternalUrl();
        } else {
            $data->{'external_url'} = null;
        }
        if (null !== $object->getFiletype()) {
            $data->{'filetype'} = $object->getFiletype();
        } else {
            $data->{'filetype'} = null;
        }
        if (null !== $object->getGroups()) {
            $values_1 = [];
            foreach ($object->getGroups() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'groups'} = $values_1;
        } else {
            $data->{'groups'} = null;
        }
        if (null !== $object->getHasRichPreview()) {
            $data->{'has_rich_preview'} = $object->getHasRichPreview();
        } else {
            $data->{'has_rich_preview'} = null;
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        } else {
            $data->{'id'} = null;
        }
        if (null !== $object->getImageExifRotation()) {
            $data->{'image_exif_rotation'} = $object->getImageExifRotation();
        } else {
            $data->{'image_exif_rotation'} = null;
        }
        if (null !== $object->getIms()) {
            $values_2 = [];
            foreach ($object->getIms() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'ims'} = $values_2;
        } else {
            $data->{'ims'} = null;
        }
        if (null !== $object->getIsExternal()) {
            $data->{'is_external'} = $object->getIsExternal();
        } else {
            $data->{'is_external'} = null;
        }
        if (null !== $object->getIsPublic()) {
            $data->{'is_public'} = $object->getIsPublic();
        } else {
            $data->{'is_public'} = null;
        }
        if (null !== $object->getIsStarred()) {
            $data->{'is_starred'} = $object->getIsStarred();
        } else {
            $data->{'is_starred'} = null;
        }
        if (null !== $object->getIsTombstoned()) {
            $data->{'is_tombstoned'} = $object->getIsTombstoned();
        } else {
            $data->{'is_tombstoned'} = null;
        }
        if (null !== $object->getLastEditor()) {
            $data->{'last_editor'} = $object->getLastEditor();
        } else {
            $data->{'last_editor'} = null;
        }
        if (null !== $object->getMimetype()) {
            $data->{'mimetype'} = $object->getMimetype();
        } else {
            $data->{'mimetype'} = null;
        }
        if (null !== $object->getMode()) {
            $data->{'mode'} = $object->getMode();
        } else {
            $data->{'mode'} = null;
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        } else {
            $data->{'name'} = null;
        }
        if (null !== $object->getNumStars()) {
            $data->{'num_stars'} = $object->getNumStars();
        } else {
            $data->{'num_stars'} = null;
        }
        if (null !== $object->getOriginalH()) {
            $data->{'original_h'} = $object->getOriginalH();
        } else {
            $data->{'original_h'} = null;
        }
        if (null !== $object->getOriginalW()) {
            $data->{'original_w'} = $object->getOriginalW();
        } else {
            $data->{'original_w'} = null;
        }
        if (null !== $object->getPermalink()) {
            $data->{'permalink'} = $object->getPermalink();
        } else {
            $data->{'permalink'} = null;
        }
        if (null !== $object->getPermalinkPublic()) {
            $data->{'permalink_public'} = $object->getPermalinkPublic();
        } else {
            $data->{'permalink_public'} = null;
        }
        if (null !== $object->getPinnedInfo()) {
            $values_3 = new \stdClass();
            foreach ($object->getPinnedInfo() as $key => $value_3) {
                $values_3->{$key} = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'pinned_info'} = $values_3;
        } else {
            $data->{'pinned_info'} = null;
        }
        if (null !== $object->getPinnedTo()) {
            $values_4 = [];
            foreach ($object->getPinnedTo() as $value_4) {
                $values_4[] = $value_4;
            }
            $data->{'pinned_to'} = $values_4;
        } else {
            $data->{'pinned_to'} = null;
        }
        if (null !== $object->getPrettyType()) {
            $data->{'pretty_type'} = $object->getPrettyType();
        } else {
            $data->{'pretty_type'} = null;
        }
        if (null !== $object->getPreview()) {
            $data->{'preview'} = $object->getPreview();
        } else {
            $data->{'preview'} = null;
        }
        if (null !== $object->getPublicUrlShared()) {
            $data->{'public_url_shared'} = $object->getPublicUrlShared();
        } else {
            $data->{'public_url_shared'} = null;
        }
        if (null !== $object->getReactions()) {
            $values_5 = [];
            foreach ($object->getReactions() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data->{'reactions'} = $values_5;
        } else {
            $data->{'reactions'} = null;
        }
        if (null !== $object->getShares()) {
            $data->{'shares'} = $this->normalizer->normalize($object->getShares(), 'json', $context);
        } else {
            $data->{'shares'} = null;
        }
        if (null !== $object->getSize()) {
            $data->{'size'} = $object->getSize();
        } else {
            $data->{'size'} = null;
        }
        if (null !== $object->getSourceTeam()) {
            $data->{'source_team'} = $object->getSourceTeam();
        } else {
            $data->{'source_team'} = null;
        }
        if (null !== $object->getState()) {
            $data->{'state'} = $object->getState();
        } else {
            $data->{'state'} = null;
        }
        if (null !== $object->getThumb1024()) {
            $data->{'thumb_1024'} = $object->getThumb1024();
        } else {
            $data->{'thumb_1024'} = null;
        }
        if (null !== $object->getThumb1024H()) {
            $data->{'thumb_1024_h'} = $object->getThumb1024H();
        } else {
            $data->{'thumb_1024_h'} = null;
        }
        if (null !== $object->getThumb1024W()) {
            $data->{'thumb_1024_w'} = $object->getThumb1024W();
        } else {
            $data->{'thumb_1024_w'} = null;
        }
        if (null !== $object->getThumb160()) {
            $data->{'thumb_160'} = $object->getThumb160();
        } else {
            $data->{'thumb_160'} = null;
        }
        if (null !== $object->getThumb360()) {
            $data->{'thumb_360'} = $object->getThumb360();
        } else {
            $data->{'thumb_360'} = null;
        }
        if (null !== $object->getThumb360H()) {
            $data->{'thumb_360_h'} = $object->getThumb360H();
        } else {
            $data->{'thumb_360_h'} = null;
        }
        if (null !== $object->getThumb360W()) {
            $data->{'thumb_360_w'} = $object->getThumb360W();
        } else {
            $data->{'thumb_360_w'} = null;
        }
        if (null !== $object->getThumb480()) {
            $data->{'thumb_480'} = $object->getThumb480();
        } else {
            $data->{'thumb_480'} = null;
        }
        if (null !== $object->getThumb480H()) {
            $data->{'thumb_480_h'} = $object->getThumb480H();
        } else {
            $data->{'thumb_480_h'} = null;
        }
        if (null !== $object->getThumb480W()) {
            $data->{'thumb_480_w'} = $object->getThumb480W();
        } else {
            $data->{'thumb_480_w'} = null;
        }
        if (null !== $object->getThumb64()) {
            $data->{'thumb_64'} = $object->getThumb64();
        } else {
            $data->{'thumb_64'} = null;
        }
        if (null !== $object->getThumb720()) {
            $data->{'thumb_720'} = $object->getThumb720();
        } else {
            $data->{'thumb_720'} = null;
        }
        if (null !== $object->getThumb720H()) {
            $data->{'thumb_720_h'} = $object->getThumb720H();
        } else {
            $data->{'thumb_720_h'} = null;
        }
        if (null !== $object->getThumb720W()) {
            $data->{'thumb_720_w'} = $object->getThumb720W();
        } else {
            $data->{'thumb_720_w'} = null;
        }
        if (null !== $object->getThumb80()) {
            $data->{'thumb_80'} = $object->getThumb80();
        } else {
            $data->{'thumb_80'} = null;
        }
        if (null !== $object->getThumb800()) {
            $data->{'thumb_800'} = $object->getThumb800();
        } else {
            $data->{'thumb_800'} = null;
        }
        if (null !== $object->getThumb800H()) {
            $data->{'thumb_800_h'} = $object->getThumb800H();
        } else {
            $data->{'thumb_800_h'} = null;
        }
        if (null !== $object->getThumb800W()) {
            $data->{'thumb_800_w'} = $object->getThumb800W();
        } else {
            $data->{'thumb_800_w'} = null;
        }
        if (null !== $object->getThumb960()) {
            $data->{'thumb_960'} = $object->getThumb960();
        } else {
            $data->{'thumb_960'} = null;
        }
        if (null !== $object->getThumb960H()) {
            $data->{'thumb_960_h'} = $object->getThumb960H();
        } else {
            $data->{'thumb_960_h'} = null;
        }
        if (null !== $object->getThumb960W()) {
            $data->{'thumb_960_w'} = $object->getThumb960W();
        } else {
            $data->{'thumb_960_w'} = null;
        }
        if (null !== $object->getTimestamp()) {
            $data->{'timestamp'} = $object->getTimestamp();
        } else {
            $data->{'timestamp'} = null;
        }
        if (null !== $object->getTitle()) {
            $data->{'title'} = $object->getTitle();
        } else {
            $data->{'title'} = null;
        }
        if (null !== $object->getUpdated()) {
            $data->{'updated'} = $object->getUpdated();
        } else {
            $data->{'updated'} = null;
        }
        if (null !== $object->getUrlPrivate()) {
            $data->{'url_private'} = $object->getUrlPrivate();
        } else {
            $data->{'url_private'} = null;
        }
        if (null !== $object->getUrlPrivateDownload()) {
            $data->{'url_private_download'} = $object->getUrlPrivateDownload();
        } else {
            $data->{'url_private_download'} = null;
        }
        if (null !== $object->getUser()) {
            $data->{'user'} = $object->getUser();
        } else {
            $data->{'user'} = null;
        }
        if (null !== $object->getUserTeam()) {
            $data->{'user_team'} = $object->getUserTeam();
        } else {
            $data->{'user_team'} = null;
        }
        if (null !== $object->getUsername()) {
            $data->{'username'} = $object->getUsername();
        } else {
            $data->{'username'} = null;
        }

        return $data;
    }
}
