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
use JoliCode\Slack\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ObjsFileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsFile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('channels', $data) && null !== $data['channels']) {
            $values = [];
            foreach ($data['channels'] as $value) {
                $values[] = $value;
            }
            $object->setChannels($values);
        } elseif (\array_key_exists('channels', $data) && null === $data['channels']) {
            $object->setChannels(null);
        }
        if (\array_key_exists('comments_count', $data) && null !== $data['comments_count']) {
            $object->setCommentsCount($data['comments_count']);
        } elseif (\array_key_exists('comments_count', $data) && null === $data['comments_count']) {
            $object->setCommentsCount(null);
        }
        if (\array_key_exists('created', $data) && null !== $data['created']) {
            $object->setCreated($data['created']);
        } elseif (\array_key_exists('created', $data) && null === $data['created']) {
            $object->setCreated(null);
        }
        if (\array_key_exists('date_delete', $data) && null !== $data['date_delete']) {
            $object->setDateDelete($data['date_delete']);
        } elseif (\array_key_exists('date_delete', $data) && null === $data['date_delete']) {
            $object->setDateDelete(null);
        }
        if (\array_key_exists('deanimate_gif', $data) && null !== $data['deanimate_gif']) {
            $object->setDeanimateGif($data['deanimate_gif']);
        } elseif (\array_key_exists('deanimate_gif', $data) && null === $data['deanimate_gif']) {
            $object->setDeanimateGif(null);
        }
        if (\array_key_exists('display_as_bot', $data) && null !== $data['display_as_bot']) {
            $object->setDisplayAsBot($data['display_as_bot']);
        } elseif (\array_key_exists('display_as_bot', $data) && null === $data['display_as_bot']) {
            $object->setDisplayAsBot(null);
        }
        if (\array_key_exists('editable', $data) && null !== $data['editable']) {
            $object->setEditable($data['editable']);
        } elseif (\array_key_exists('editable', $data) && null === $data['editable']) {
            $object->setEditable(null);
        }
        if (\array_key_exists('editor', $data) && null !== $data['editor']) {
            $object->setEditor($data['editor']);
        } elseif (\array_key_exists('editor', $data) && null === $data['editor']) {
            $object->setEditor(null);
        }
        if (\array_key_exists('external_id', $data) && null !== $data['external_id']) {
            $object->setExternalId($data['external_id']);
        } elseif (\array_key_exists('external_id', $data) && null === $data['external_id']) {
            $object->setExternalId(null);
        }
        if (\array_key_exists('external_type', $data) && null !== $data['external_type']) {
            $object->setExternalType($data['external_type']);
        } elseif (\array_key_exists('external_type', $data) && null === $data['external_type']) {
            $object->setExternalType(null);
        }
        if (\array_key_exists('external_url', $data) && null !== $data['external_url']) {
            $object->setExternalUrl($data['external_url']);
        } elseif (\array_key_exists('external_url', $data) && null === $data['external_url']) {
            $object->setExternalUrl(null);
        }
        if (\array_key_exists('filetype', $data) && null !== $data['filetype']) {
            $object->setFiletype($data['filetype']);
        } elseif (\array_key_exists('filetype', $data) && null === $data['filetype']) {
            $object->setFiletype(null);
        }
        if (\array_key_exists('groups', $data) && null !== $data['groups']) {
            $values_1 = [];
            foreach ($data['groups'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setGroups($values_1);
        } elseif (\array_key_exists('groups', $data) && null === $data['groups']) {
            $object->setGroups(null);
        }
        if (\array_key_exists('has_rich_preview', $data) && null !== $data['has_rich_preview']) {
            $object->setHasRichPreview($data['has_rich_preview']);
        } elseif (\array_key_exists('has_rich_preview', $data) && null === $data['has_rich_preview']) {
            $object->setHasRichPreview(null);
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('image_exif_rotation', $data) && null !== $data['image_exif_rotation']) {
            $object->setImageExifRotation($data['image_exif_rotation']);
        } elseif (\array_key_exists('image_exif_rotation', $data) && null === $data['image_exif_rotation']) {
            $object->setImageExifRotation(null);
        }
        if (\array_key_exists('ims', $data) && null !== $data['ims']) {
            $values_2 = [];
            foreach ($data['ims'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setIms($values_2);
        } elseif (\array_key_exists('ims', $data) && null === $data['ims']) {
            $object->setIms(null);
        }
        if (\array_key_exists('is_external', $data) && null !== $data['is_external']) {
            $object->setIsExternal($data['is_external']);
        } elseif (\array_key_exists('is_external', $data) && null === $data['is_external']) {
            $object->setIsExternal(null);
        }
        if (\array_key_exists('is_public', $data) && null !== $data['is_public']) {
            $object->setIsPublic($data['is_public']);
        } elseif (\array_key_exists('is_public', $data) && null === $data['is_public']) {
            $object->setIsPublic(null);
        }
        if (\array_key_exists('is_starred', $data) && null !== $data['is_starred']) {
            $object->setIsStarred($data['is_starred']);
        } elseif (\array_key_exists('is_starred', $data) && null === $data['is_starred']) {
            $object->setIsStarred(null);
        }
        if (\array_key_exists('is_tombstoned', $data) && null !== $data['is_tombstoned']) {
            $object->setIsTombstoned($data['is_tombstoned']);
        } elseif (\array_key_exists('is_tombstoned', $data) && null === $data['is_tombstoned']) {
            $object->setIsTombstoned(null);
        }
        if (\array_key_exists('last_editor', $data) && null !== $data['last_editor']) {
            $object->setLastEditor($data['last_editor']);
        } elseif (\array_key_exists('last_editor', $data) && null === $data['last_editor']) {
            $object->setLastEditor(null);
        }
        if (\array_key_exists('mimetype', $data) && null !== $data['mimetype']) {
            $object->setMimetype($data['mimetype']);
        } elseif (\array_key_exists('mimetype', $data) && null === $data['mimetype']) {
            $object->setMimetype(null);
        }
        if (\array_key_exists('mode', $data) && null !== $data['mode']) {
            $object->setMode($data['mode']);
        } elseif (\array_key_exists('mode', $data) && null === $data['mode']) {
            $object->setMode(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('non_owner_editable', $data) && null !== $data['non_owner_editable']) {
            $object->setNonOwnerEditable($data['non_owner_editable']);
        } elseif (\array_key_exists('non_owner_editable', $data) && null === $data['non_owner_editable']) {
            $object->setNonOwnerEditable(null);
        }
        if (\array_key_exists('num_stars', $data) && null !== $data['num_stars']) {
            $object->setNumStars($data['num_stars']);
        } elseif (\array_key_exists('num_stars', $data) && null === $data['num_stars']) {
            $object->setNumStars(null);
        }
        if (\array_key_exists('original_h', $data) && null !== $data['original_h']) {
            $object->setOriginalH($data['original_h']);
        } elseif (\array_key_exists('original_h', $data) && null === $data['original_h']) {
            $object->setOriginalH(null);
        }
        if (\array_key_exists('original_w', $data) && null !== $data['original_w']) {
            $object->setOriginalW($data['original_w']);
        } elseif (\array_key_exists('original_w', $data) && null === $data['original_w']) {
            $object->setOriginalW(null);
        }
        if (\array_key_exists('permalink', $data) && null !== $data['permalink']) {
            $object->setPermalink($data['permalink']);
        } elseif (\array_key_exists('permalink', $data) && null === $data['permalink']) {
            $object->setPermalink(null);
        }
        if (\array_key_exists('permalink_public', $data) && null !== $data['permalink_public']) {
            $object->setPermalinkPublic($data['permalink_public']);
        } elseif (\array_key_exists('permalink_public', $data) && null === $data['permalink_public']) {
            $object->setPermalinkPublic(null);
        }
        if (\array_key_exists('pinned_info', $data) && null !== $data['pinned_info']) {
            $object->setPinnedInfo($data['pinned_info']);
        } elseif (\array_key_exists('pinned_info', $data) && null === $data['pinned_info']) {
            $object->setPinnedInfo(null);
        }
        if (\array_key_exists('pinned_to', $data) && null !== $data['pinned_to']) {
            $values_3 = [];
            foreach ($data['pinned_to'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setPinnedTo($values_3);
        } elseif (\array_key_exists('pinned_to', $data) && null === $data['pinned_to']) {
            $object->setPinnedTo(null);
        }
        if (\array_key_exists('pjpeg', $data) && null !== $data['pjpeg']) {
            $object->setPjpeg($data['pjpeg']);
        } elseif (\array_key_exists('pjpeg', $data) && null === $data['pjpeg']) {
            $object->setPjpeg(null);
        }
        if (\array_key_exists('pretty_type', $data) && null !== $data['pretty_type']) {
            $object->setPrettyType($data['pretty_type']);
        } elseif (\array_key_exists('pretty_type', $data) && null === $data['pretty_type']) {
            $object->setPrettyType(null);
        }
        if (\array_key_exists('preview', $data) && null !== $data['preview']) {
            $object->setPreview($data['preview']);
        } elseif (\array_key_exists('preview', $data) && null === $data['preview']) {
            $object->setPreview(null);
        }
        if (\array_key_exists('public_url_shared', $data) && null !== $data['public_url_shared']) {
            $object->setPublicUrlShared($data['public_url_shared']);
        } elseif (\array_key_exists('public_url_shared', $data) && null === $data['public_url_shared']) {
            $object->setPublicUrlShared(null);
        }
        if (\array_key_exists('reactions', $data) && null !== $data['reactions']) {
            $values_4 = [];
            foreach ($data['reactions'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'JoliCode\\Slack\\Api\\Model\\ObjsReaction', 'json', $context);
            }
            $object->setReactions($values_4);
        } elseif (\array_key_exists('reactions', $data) && null === $data['reactions']) {
            $object->setReactions(null);
        }
        if (\array_key_exists('shares', $data) && null !== $data['shares']) {
            $object->setShares($this->denormalizer->denormalize($data['shares'], 'JoliCode\\Slack\\Api\\Model\\ObjsFileShares', 'json', $context));
        } elseif (\array_key_exists('shares', $data) && null === $data['shares']) {
            $object->setShares(null);
        }
        if (\array_key_exists('size', $data) && null !== $data['size']) {
            $object->setSize($data['size']);
        } elseif (\array_key_exists('size', $data) && null === $data['size']) {
            $object->setSize(null);
        }
        if (\array_key_exists('source_team', $data) && null !== $data['source_team']) {
            $object->setSourceTeam($data['source_team']);
        } elseif (\array_key_exists('source_team', $data) && null === $data['source_team']) {
            $object->setSourceTeam(null);
        }
        if (\array_key_exists('state', $data) && null !== $data['state']) {
            $object->setState($data['state']);
        } elseif (\array_key_exists('state', $data) && null === $data['state']) {
            $object->setState(null);
        }
        if (\array_key_exists('thumb_1024', $data) && null !== $data['thumb_1024']) {
            $object->setThumb1024($data['thumb_1024']);
        } elseif (\array_key_exists('thumb_1024', $data) && null === $data['thumb_1024']) {
            $object->setThumb1024(null);
        }
        if (\array_key_exists('thumb_1024_h', $data) && null !== $data['thumb_1024_h']) {
            $object->setThumb1024H($data['thumb_1024_h']);
        } elseif (\array_key_exists('thumb_1024_h', $data) && null === $data['thumb_1024_h']) {
            $object->setThumb1024H(null);
        }
        if (\array_key_exists('thumb_1024_w', $data) && null !== $data['thumb_1024_w']) {
            $object->setThumb1024W($data['thumb_1024_w']);
        } elseif (\array_key_exists('thumb_1024_w', $data) && null === $data['thumb_1024_w']) {
            $object->setThumb1024W(null);
        }
        if (\array_key_exists('thumb_160', $data) && null !== $data['thumb_160']) {
            $object->setThumb160($data['thumb_160']);
        } elseif (\array_key_exists('thumb_160', $data) && null === $data['thumb_160']) {
            $object->setThumb160(null);
        }
        if (\array_key_exists('thumb_360', $data) && null !== $data['thumb_360']) {
            $object->setThumb360($data['thumb_360']);
        } elseif (\array_key_exists('thumb_360', $data) && null === $data['thumb_360']) {
            $object->setThumb360(null);
        }
        if (\array_key_exists('thumb_360_gif', $data) && null !== $data['thumb_360_gif']) {
            $object->setThumb360Gif($data['thumb_360_gif']);
        } elseif (\array_key_exists('thumb_360_gif', $data) && null === $data['thumb_360_gif']) {
            $object->setThumb360Gif(null);
        }
        if (\array_key_exists('thumb_360_h', $data) && null !== $data['thumb_360_h']) {
            $object->setThumb360H($data['thumb_360_h']);
        } elseif (\array_key_exists('thumb_360_h', $data) && null === $data['thumb_360_h']) {
            $object->setThumb360H(null);
        }
        if (\array_key_exists('thumb_360_w', $data) && null !== $data['thumb_360_w']) {
            $object->setThumb360W($data['thumb_360_w']);
        } elseif (\array_key_exists('thumb_360_w', $data) && null === $data['thumb_360_w']) {
            $object->setThumb360W(null);
        }
        if (\array_key_exists('thumb_480', $data) && null !== $data['thumb_480']) {
            $object->setThumb480($data['thumb_480']);
        } elseif (\array_key_exists('thumb_480', $data) && null === $data['thumb_480']) {
            $object->setThumb480(null);
        }
        if (\array_key_exists('thumb_480_h', $data) && null !== $data['thumb_480_h']) {
            $object->setThumb480H($data['thumb_480_h']);
        } elseif (\array_key_exists('thumb_480_h', $data) && null === $data['thumb_480_h']) {
            $object->setThumb480H(null);
        }
        if (\array_key_exists('thumb_480_w', $data) && null !== $data['thumb_480_w']) {
            $object->setThumb480W($data['thumb_480_w']);
        } elseif (\array_key_exists('thumb_480_w', $data) && null === $data['thumb_480_w']) {
            $object->setThumb480W(null);
        }
        if (\array_key_exists('thumb_64', $data) && null !== $data['thumb_64']) {
            $object->setThumb64($data['thumb_64']);
        } elseif (\array_key_exists('thumb_64', $data) && null === $data['thumb_64']) {
            $object->setThumb64(null);
        }
        if (\array_key_exists('thumb_720', $data) && null !== $data['thumb_720']) {
            $object->setThumb720($data['thumb_720']);
        } elseif (\array_key_exists('thumb_720', $data) && null === $data['thumb_720']) {
            $object->setThumb720(null);
        }
        if (\array_key_exists('thumb_720_h', $data) && null !== $data['thumb_720_h']) {
            $object->setThumb720H($data['thumb_720_h']);
        } elseif (\array_key_exists('thumb_720_h', $data) && null === $data['thumb_720_h']) {
            $object->setThumb720H(null);
        }
        if (\array_key_exists('thumb_720_w', $data) && null !== $data['thumb_720_w']) {
            $object->setThumb720W($data['thumb_720_w']);
        } elseif (\array_key_exists('thumb_720_w', $data) && null === $data['thumb_720_w']) {
            $object->setThumb720W(null);
        }
        if (\array_key_exists('thumb_80', $data) && null !== $data['thumb_80']) {
            $object->setThumb80($data['thumb_80']);
        } elseif (\array_key_exists('thumb_80', $data) && null === $data['thumb_80']) {
            $object->setThumb80(null);
        }
        if (\array_key_exists('thumb_800', $data) && null !== $data['thumb_800']) {
            $object->setThumb800($data['thumb_800']);
        } elseif (\array_key_exists('thumb_800', $data) && null === $data['thumb_800']) {
            $object->setThumb800(null);
        }
        if (\array_key_exists('thumb_800_h', $data) && null !== $data['thumb_800_h']) {
            $object->setThumb800H($data['thumb_800_h']);
        } elseif (\array_key_exists('thumb_800_h', $data) && null === $data['thumb_800_h']) {
            $object->setThumb800H(null);
        }
        if (\array_key_exists('thumb_800_w', $data) && null !== $data['thumb_800_w']) {
            $object->setThumb800W($data['thumb_800_w']);
        } elseif (\array_key_exists('thumb_800_w', $data) && null === $data['thumb_800_w']) {
            $object->setThumb800W(null);
        }
        if (\array_key_exists('thumb_960', $data) && null !== $data['thumb_960']) {
            $object->setThumb960($data['thumb_960']);
        } elseif (\array_key_exists('thumb_960', $data) && null === $data['thumb_960']) {
            $object->setThumb960(null);
        }
        if (\array_key_exists('thumb_960_h', $data) && null !== $data['thumb_960_h']) {
            $object->setThumb960H($data['thumb_960_h']);
        } elseif (\array_key_exists('thumb_960_h', $data) && null === $data['thumb_960_h']) {
            $object->setThumb960H(null);
        }
        if (\array_key_exists('thumb_960_w', $data) && null !== $data['thumb_960_w']) {
            $object->setThumb960W($data['thumb_960_w']);
        } elseif (\array_key_exists('thumb_960_w', $data) && null === $data['thumb_960_w']) {
            $object->setThumb960W(null);
        }
        if (\array_key_exists('thumb_tiny', $data) && null !== $data['thumb_tiny']) {
            $object->setThumbTiny($data['thumb_tiny']);
        } elseif (\array_key_exists('thumb_tiny', $data) && null === $data['thumb_tiny']) {
            $object->setThumbTiny(null);
        }
        if (\array_key_exists('timestamp', $data) && null !== $data['timestamp']) {
            $value_5 = $data['timestamp'];
            if (\is_int($data['timestamp'])) {
                $value_5 = $data['timestamp'];
            } elseif (\is_string($data['timestamp'])) {
                $value_5 = $data['timestamp'];
            }
            $object->setTimestamp($value_5);
        } elseif (\array_key_exists('timestamp', $data) && null === $data['timestamp']) {
            $object->setTimestamp(null);
        }
        if (\array_key_exists('title', $data) && null !== $data['title']) {
            $object->setTitle($data['title']);
        } elseif (\array_key_exists('title', $data) && null === $data['title']) {
            $object->setTitle(null);
        }
        if (\array_key_exists('updated', $data) && null !== $data['updated']) {
            $object->setUpdated($data['updated']);
        } elseif (\array_key_exists('updated', $data) && null === $data['updated']) {
            $object->setUpdated(null);
        }
        if (\array_key_exists('url_private', $data) && null !== $data['url_private']) {
            $object->setUrlPrivate($data['url_private']);
        } elseif (\array_key_exists('url_private', $data) && null === $data['url_private']) {
            $object->setUrlPrivate(null);
        }
        if (\array_key_exists('url_private_download', $data) && null !== $data['url_private_download']) {
            $object->setUrlPrivateDownload($data['url_private_download']);
        } elseif (\array_key_exists('url_private_download', $data) && null === $data['url_private_download']) {
            $object->setUrlPrivateDownload(null);
        }
        if (\array_key_exists('user', $data) && null !== $data['user']) {
            $object->setUser($data['user']);
        } elseif (\array_key_exists('user', $data) && null === $data['user']) {
            $object->setUser(null);
        }
        if (\array_key_exists('user_team', $data) && null !== $data['user_team']) {
            $object->setUserTeam($data['user_team']);
        } elseif (\array_key_exists('user_team', $data) && null === $data['user_team']) {
            $object->setUserTeam(null);
        }
        if (\array_key_exists('username', $data) && null !== $data['username']) {
            $object->setUsername($data['username']);
        } elseif (\array_key_exists('username', $data) && null === $data['username']) {
            $object->setUsername(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getChannels()) {
            $values = [];
            foreach ($object->getChannels() as $value) {
                $values[] = $value;
            }
            $data['channels'] = $values;
        }
        if (null !== $object->getCommentsCount()) {
            $data['comments_count'] = $object->getCommentsCount();
        }
        if (null !== $object->getCreated()) {
            $data['created'] = $object->getCreated();
        }
        if (null !== $object->getDateDelete()) {
            $data['date_delete'] = $object->getDateDelete();
        }
        if (null !== $object->getDeanimateGif()) {
            $data['deanimate_gif'] = $object->getDeanimateGif();
        }
        if (null !== $object->getDisplayAsBot()) {
            $data['display_as_bot'] = $object->getDisplayAsBot();
        }
        if (null !== $object->getEditable()) {
            $data['editable'] = $object->getEditable();
        }
        if (null !== $object->getEditor()) {
            $data['editor'] = $object->getEditor();
        }
        if (null !== $object->getExternalId()) {
            $data['external_id'] = $object->getExternalId();
        }
        if (null !== $object->getExternalType()) {
            $data['external_type'] = $object->getExternalType();
        }
        if (null !== $object->getExternalUrl()) {
            $data['external_url'] = $object->getExternalUrl();
        }
        if (null !== $object->getFiletype()) {
            $data['filetype'] = $object->getFiletype();
        }
        if (null !== $object->getGroups()) {
            $values_1 = [];
            foreach ($object->getGroups() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['groups'] = $values_1;
        }
        if (null !== $object->getHasRichPreview()) {
            $data['has_rich_preview'] = $object->getHasRichPreview();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getImageExifRotation()) {
            $data['image_exif_rotation'] = $object->getImageExifRotation();
        }
        if (null !== $object->getIms()) {
            $values_2 = [];
            foreach ($object->getIms() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['ims'] = $values_2;
        }
        if (null !== $object->getIsExternal()) {
            $data['is_external'] = $object->getIsExternal();
        }
        if (null !== $object->getIsPublic()) {
            $data['is_public'] = $object->getIsPublic();
        }
        if (null !== $object->getIsStarred()) {
            $data['is_starred'] = $object->getIsStarred();
        }
        if (null !== $object->getIsTombstoned()) {
            $data['is_tombstoned'] = $object->getIsTombstoned();
        }
        if (null !== $object->getLastEditor()) {
            $data['last_editor'] = $object->getLastEditor();
        }
        if (null !== $object->getMimetype()) {
            $data['mimetype'] = $object->getMimetype();
        }
        if (null !== $object->getMode()) {
            $data['mode'] = $object->getMode();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getNonOwnerEditable()) {
            $data['non_owner_editable'] = $object->getNonOwnerEditable();
        }
        if (null !== $object->getNumStars()) {
            $data['num_stars'] = $object->getNumStars();
        }
        if (null !== $object->getOriginalH()) {
            $data['original_h'] = $object->getOriginalH();
        }
        if (null !== $object->getOriginalW()) {
            $data['original_w'] = $object->getOriginalW();
        }
        if (null !== $object->getPermalink()) {
            $data['permalink'] = $object->getPermalink();
        }
        if (null !== $object->getPermalinkPublic()) {
            $data['permalink_public'] = $object->getPermalinkPublic();
        }
        if (null !== $object->getPinnedInfo()) {
            $data['pinned_info'] = $object->getPinnedInfo();
        }
        if (null !== $object->getPinnedTo()) {
            $values_3 = [];
            foreach ($object->getPinnedTo() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['pinned_to'] = $values_3;
        }
        if (null !== $object->getPjpeg()) {
            $data['pjpeg'] = $object->getPjpeg();
        }
        if (null !== $object->getPrettyType()) {
            $data['pretty_type'] = $object->getPrettyType();
        }
        if (null !== $object->getPreview()) {
            $data['preview'] = $object->getPreview();
        }
        if (null !== $object->getPublicUrlShared()) {
            $data['public_url_shared'] = $object->getPublicUrlShared();
        }
        if (null !== $object->getReactions()) {
            $values_4 = [];
            foreach ($object->getReactions() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['reactions'] = $values_4;
        }
        if (null !== $object->getShares()) {
            $data['shares'] = $this->normalizer->normalize($object->getShares(), 'json', $context);
        }
        if (null !== $object->getSize()) {
            $data['size'] = $object->getSize();
        }
        if (null !== $object->getSourceTeam()) {
            $data['source_team'] = $object->getSourceTeam();
        }
        if (null !== $object->getState()) {
            $data['state'] = $object->getState();
        }
        if (null !== $object->getThumb1024()) {
            $data['thumb_1024'] = $object->getThumb1024();
        }
        if (null !== $object->getThumb1024H()) {
            $data['thumb_1024_h'] = $object->getThumb1024H();
        }
        if (null !== $object->getThumb1024W()) {
            $data['thumb_1024_w'] = $object->getThumb1024W();
        }
        if (null !== $object->getThumb160()) {
            $data['thumb_160'] = $object->getThumb160();
        }
        if (null !== $object->getThumb360()) {
            $data['thumb_360'] = $object->getThumb360();
        }
        if (null !== $object->getThumb360Gif()) {
            $data['thumb_360_gif'] = $object->getThumb360Gif();
        }
        if (null !== $object->getThumb360H()) {
            $data['thumb_360_h'] = $object->getThumb360H();
        }
        if (null !== $object->getThumb360W()) {
            $data['thumb_360_w'] = $object->getThumb360W();
        }
        if (null !== $object->getThumb480()) {
            $data['thumb_480'] = $object->getThumb480();
        }
        if (null !== $object->getThumb480H()) {
            $data['thumb_480_h'] = $object->getThumb480H();
        }
        if (null !== $object->getThumb480W()) {
            $data['thumb_480_w'] = $object->getThumb480W();
        }
        if (null !== $object->getThumb64()) {
            $data['thumb_64'] = $object->getThumb64();
        }
        if (null !== $object->getThumb720()) {
            $data['thumb_720'] = $object->getThumb720();
        }
        if (null !== $object->getThumb720H()) {
            $data['thumb_720_h'] = $object->getThumb720H();
        }
        if (null !== $object->getThumb720W()) {
            $data['thumb_720_w'] = $object->getThumb720W();
        }
        if (null !== $object->getThumb80()) {
            $data['thumb_80'] = $object->getThumb80();
        }
        if (null !== $object->getThumb800()) {
            $data['thumb_800'] = $object->getThumb800();
        }
        if (null !== $object->getThumb800H()) {
            $data['thumb_800_h'] = $object->getThumb800H();
        }
        if (null !== $object->getThumb800W()) {
            $data['thumb_800_w'] = $object->getThumb800W();
        }
        if (null !== $object->getThumb960()) {
            $data['thumb_960'] = $object->getThumb960();
        }
        if (null !== $object->getThumb960H()) {
            $data['thumb_960_h'] = $object->getThumb960H();
        }
        if (null !== $object->getThumb960W()) {
            $data['thumb_960_w'] = $object->getThumb960W();
        }
        if (null !== $object->getThumbTiny()) {
            $data['thumb_tiny'] = $object->getThumbTiny();
        }
        if (null !== $object->getTimestamp()) {
            $value_5 = $object->getTimestamp();
            if (\is_int($object->getTimestamp())) {
                $value_5 = $object->getTimestamp();
            } elseif (\is_string($object->getTimestamp())) {
                $value_5 = $object->getTimestamp();
            }
            $data['timestamp'] = $value_5;
        }
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if (null !== $object->getUpdated()) {
            $data['updated'] = $object->getUpdated();
        }
        if (null !== $object->getUrlPrivate()) {
            $data['url_private'] = $object->getUrlPrivate();
        }
        if (null !== $object->getUrlPrivateDownload()) {
            $data['url_private_download'] = $object->getUrlPrivateDownload();
        }
        if (null !== $object->getUser()) {
            $data['user'] = $object->getUser();
        }
        if (null !== $object->getUserTeam()) {
            $data['user_team'] = $object->getUserTeam();
        }
        if (null !== $object->getUsername()) {
            $data['username'] = $object->getUsername();
        }

        return $data;
    }
}
