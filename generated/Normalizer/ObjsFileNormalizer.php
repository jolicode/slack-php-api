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

use Jane\Component\JsonSchemaRuntime\Reference;
use JoliCode\Slack\Api\Runtime\Normalizer\CheckArray;
use JoliCode\Slack\Api\Runtime\Normalizer\ValidatorTrait;
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
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Slack\Api\Model\ObjsFile::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Slack\Api\Model\ObjsFile::class === \get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsFile();
        if (\array_key_exists('display_as_bot', $data) && \is_int($data['display_as_bot'])) {
            $data['display_as_bot'] = (bool) $data['display_as_bot'];
        }
        if (\array_key_exists('editable', $data) && \is_int($data['editable'])) {
            $data['editable'] = (bool) $data['editable'];
        }
        if (\array_key_exists('has_rich_preview', $data) && \is_int($data['has_rich_preview'])) {
            $data['has_rich_preview'] = (bool) $data['has_rich_preview'];
        }
        if (\array_key_exists('is_external', $data) && \is_int($data['is_external'])) {
            $data['is_external'] = (bool) $data['is_external'];
        }
        if (\array_key_exists('is_public', $data) && \is_int($data['is_public'])) {
            $data['is_public'] = (bool) $data['is_public'];
        }
        if (\array_key_exists('is_starred', $data) && \is_int($data['is_starred'])) {
            $data['is_starred'] = (bool) $data['is_starred'];
        }
        if (\array_key_exists('is_tombstoned', $data) && \is_int($data['is_tombstoned'])) {
            $data['is_tombstoned'] = (bool) $data['is_tombstoned'];
        }
        if (\array_key_exists('non_owner_editable', $data) && \is_int($data['non_owner_editable'])) {
            $data['non_owner_editable'] = (bool) $data['non_owner_editable'];
        }
        if (\array_key_exists('public_url_shared', $data) && \is_int($data['public_url_shared'])) {
            $data['public_url_shared'] = (bool) $data['public_url_shared'];
        }
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
                $values_4[] = $this->denormalizer->denormalize($value_4, \JoliCode\Slack\Api\Model\ObjsReaction::class, 'json', $context);
            }
            $object->setReactions($values_4);
        } elseif (\array_key_exists('reactions', $data) && null === $data['reactions']) {
            $object->setReactions(null);
        }
        if (\array_key_exists('shares', $data) && null !== $data['shares']) {
            $object->setShares($this->denormalizer->denormalize($data['shares'], \JoliCode\Slack\Api\Model\ObjsFileShares::class, 'json', $context));
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

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('channels') && null !== $data->getChannels()) {
            $values = [];
            foreach ($data->getChannels() as $value) {
                $values[] = $value;
            }
            $dataArray['channels'] = $values;
        }
        if ($data->isInitialized('commentsCount') && null !== $data->getCommentsCount()) {
            $dataArray['comments_count'] = $data->getCommentsCount();
        }
        if ($data->isInitialized('created') && null !== $data->getCreated()) {
            $dataArray['created'] = $data->getCreated();
        }
        if ($data->isInitialized('dateDelete') && null !== $data->getDateDelete()) {
            $dataArray['date_delete'] = $data->getDateDelete();
        }
        if ($data->isInitialized('deanimateGif') && null !== $data->getDeanimateGif()) {
            $dataArray['deanimate_gif'] = $data->getDeanimateGif();
        }
        if ($data->isInitialized('displayAsBot') && null !== $data->getDisplayAsBot()) {
            $dataArray['display_as_bot'] = $data->getDisplayAsBot();
        }
        if ($data->isInitialized('editable') && null !== $data->getEditable()) {
            $dataArray['editable'] = $data->getEditable();
        }
        if ($data->isInitialized('editor') && null !== $data->getEditor()) {
            $dataArray['editor'] = $data->getEditor();
        }
        if ($data->isInitialized('externalId') && null !== $data->getExternalId()) {
            $dataArray['external_id'] = $data->getExternalId();
        }
        if ($data->isInitialized('externalType') && null !== $data->getExternalType()) {
            $dataArray['external_type'] = $data->getExternalType();
        }
        if ($data->isInitialized('externalUrl') && null !== $data->getExternalUrl()) {
            $dataArray['external_url'] = $data->getExternalUrl();
        }
        if ($data->isInitialized('filetype') && null !== $data->getFiletype()) {
            $dataArray['filetype'] = $data->getFiletype();
        }
        if ($data->isInitialized('groups') && null !== $data->getGroups()) {
            $values_1 = [];
            foreach ($data->getGroups() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['groups'] = $values_1;
        }
        if ($data->isInitialized('hasRichPreview') && null !== $data->getHasRichPreview()) {
            $dataArray['has_rich_preview'] = $data->getHasRichPreview();
        }
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('imageExifRotation') && null !== $data->getImageExifRotation()) {
            $dataArray['image_exif_rotation'] = $data->getImageExifRotation();
        }
        if ($data->isInitialized('ims') && null !== $data->getIms()) {
            $values_2 = [];
            foreach ($data->getIms() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['ims'] = $values_2;
        }
        if ($data->isInitialized('isExternal') && null !== $data->getIsExternal()) {
            $dataArray['is_external'] = $data->getIsExternal();
        }
        if ($data->isInitialized('isPublic') && null !== $data->getIsPublic()) {
            $dataArray['is_public'] = $data->getIsPublic();
        }
        if ($data->isInitialized('isStarred') && null !== $data->getIsStarred()) {
            $dataArray['is_starred'] = $data->getIsStarred();
        }
        if ($data->isInitialized('isTombstoned') && null !== $data->getIsTombstoned()) {
            $dataArray['is_tombstoned'] = $data->getIsTombstoned();
        }
        if ($data->isInitialized('lastEditor') && null !== $data->getLastEditor()) {
            $dataArray['last_editor'] = $data->getLastEditor();
        }
        if ($data->isInitialized('mimetype') && null !== $data->getMimetype()) {
            $dataArray['mimetype'] = $data->getMimetype();
        }
        if ($data->isInitialized('mode') && null !== $data->getMode()) {
            $dataArray['mode'] = $data->getMode();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('nonOwnerEditable') && null !== $data->getNonOwnerEditable()) {
            $dataArray['non_owner_editable'] = $data->getNonOwnerEditable();
        }
        if ($data->isInitialized('numStars') && null !== $data->getNumStars()) {
            $dataArray['num_stars'] = $data->getNumStars();
        }
        if ($data->isInitialized('originalH') && null !== $data->getOriginalH()) {
            $dataArray['original_h'] = $data->getOriginalH();
        }
        if ($data->isInitialized('originalW') && null !== $data->getOriginalW()) {
            $dataArray['original_w'] = $data->getOriginalW();
        }
        if ($data->isInitialized('permalink') && null !== $data->getPermalink()) {
            $dataArray['permalink'] = $data->getPermalink();
        }
        if ($data->isInitialized('permalinkPublic') && null !== $data->getPermalinkPublic()) {
            $dataArray['permalink_public'] = $data->getPermalinkPublic();
        }
        if ($data->isInitialized('pinnedInfo') && null !== $data->getPinnedInfo()) {
            $dataArray['pinned_info'] = $data->getPinnedInfo();
        }
        if ($data->isInitialized('pinnedTo') && null !== $data->getPinnedTo()) {
            $values_3 = [];
            foreach ($data->getPinnedTo() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['pinned_to'] = $values_3;
        }
        if ($data->isInitialized('pjpeg') && null !== $data->getPjpeg()) {
            $dataArray['pjpeg'] = $data->getPjpeg();
        }
        if ($data->isInitialized('prettyType') && null !== $data->getPrettyType()) {
            $dataArray['pretty_type'] = $data->getPrettyType();
        }
        if ($data->isInitialized('preview') && null !== $data->getPreview()) {
            $dataArray['preview'] = $data->getPreview();
        }
        if ($data->isInitialized('publicUrlShared') && null !== $data->getPublicUrlShared()) {
            $dataArray['public_url_shared'] = $data->getPublicUrlShared();
        }
        if ($data->isInitialized('reactions') && null !== $data->getReactions()) {
            $values_4 = [];
            foreach ($data->getReactions() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['reactions'] = $values_4;
        }
        if ($data->isInitialized('shares') && null !== $data->getShares()) {
            $dataArray['shares'] = $this->normalizer->normalize($data->getShares(), 'json', $context);
        }
        if ($data->isInitialized('size') && null !== $data->getSize()) {
            $dataArray['size'] = $data->getSize();
        }
        if ($data->isInitialized('sourceTeam') && null !== $data->getSourceTeam()) {
            $dataArray['source_team'] = $data->getSourceTeam();
        }
        if ($data->isInitialized('state') && null !== $data->getState()) {
            $dataArray['state'] = $data->getState();
        }
        if ($data->isInitialized('thumb1024') && null !== $data->getThumb1024()) {
            $dataArray['thumb_1024'] = $data->getThumb1024();
        }
        if ($data->isInitialized('thumb1024H') && null !== $data->getThumb1024H()) {
            $dataArray['thumb_1024_h'] = $data->getThumb1024H();
        }
        if ($data->isInitialized('thumb1024W') && null !== $data->getThumb1024W()) {
            $dataArray['thumb_1024_w'] = $data->getThumb1024W();
        }
        if ($data->isInitialized('thumb160') && null !== $data->getThumb160()) {
            $dataArray['thumb_160'] = $data->getThumb160();
        }
        if ($data->isInitialized('thumb360') && null !== $data->getThumb360()) {
            $dataArray['thumb_360'] = $data->getThumb360();
        }
        if ($data->isInitialized('thumb360Gif') && null !== $data->getThumb360Gif()) {
            $dataArray['thumb_360_gif'] = $data->getThumb360Gif();
        }
        if ($data->isInitialized('thumb360H') && null !== $data->getThumb360H()) {
            $dataArray['thumb_360_h'] = $data->getThumb360H();
        }
        if ($data->isInitialized('thumb360W') && null !== $data->getThumb360W()) {
            $dataArray['thumb_360_w'] = $data->getThumb360W();
        }
        if ($data->isInitialized('thumb480') && null !== $data->getThumb480()) {
            $dataArray['thumb_480'] = $data->getThumb480();
        }
        if ($data->isInitialized('thumb480H') && null !== $data->getThumb480H()) {
            $dataArray['thumb_480_h'] = $data->getThumb480H();
        }
        if ($data->isInitialized('thumb480W') && null !== $data->getThumb480W()) {
            $dataArray['thumb_480_w'] = $data->getThumb480W();
        }
        if ($data->isInitialized('thumb64') && null !== $data->getThumb64()) {
            $dataArray['thumb_64'] = $data->getThumb64();
        }
        if ($data->isInitialized('thumb720') && null !== $data->getThumb720()) {
            $dataArray['thumb_720'] = $data->getThumb720();
        }
        if ($data->isInitialized('thumb720H') && null !== $data->getThumb720H()) {
            $dataArray['thumb_720_h'] = $data->getThumb720H();
        }
        if ($data->isInitialized('thumb720W') && null !== $data->getThumb720W()) {
            $dataArray['thumb_720_w'] = $data->getThumb720W();
        }
        if ($data->isInitialized('thumb80') && null !== $data->getThumb80()) {
            $dataArray['thumb_80'] = $data->getThumb80();
        }
        if ($data->isInitialized('thumb800') && null !== $data->getThumb800()) {
            $dataArray['thumb_800'] = $data->getThumb800();
        }
        if ($data->isInitialized('thumb800H') && null !== $data->getThumb800H()) {
            $dataArray['thumb_800_h'] = $data->getThumb800H();
        }
        if ($data->isInitialized('thumb800W') && null !== $data->getThumb800W()) {
            $dataArray['thumb_800_w'] = $data->getThumb800W();
        }
        if ($data->isInitialized('thumb960') && null !== $data->getThumb960()) {
            $dataArray['thumb_960'] = $data->getThumb960();
        }
        if ($data->isInitialized('thumb960H') && null !== $data->getThumb960H()) {
            $dataArray['thumb_960_h'] = $data->getThumb960H();
        }
        if ($data->isInitialized('thumb960W') && null !== $data->getThumb960W()) {
            $dataArray['thumb_960_w'] = $data->getThumb960W();
        }
        if ($data->isInitialized('thumbTiny') && null !== $data->getThumbTiny()) {
            $dataArray['thumb_tiny'] = $data->getThumbTiny();
        }
        if ($data->isInitialized('timestamp') && null !== $data->getTimestamp()) {
            $value_5 = $data->getTimestamp();
            if (\is_int($data->getTimestamp())) {
                $value_5 = $data->getTimestamp();
            } elseif (\is_string($data->getTimestamp())) {
                $value_5 = $data->getTimestamp();
            }
            $dataArray['timestamp'] = $value_5;
        }
        if ($data->isInitialized('title') && null !== $data->getTitle()) {
            $dataArray['title'] = $data->getTitle();
        }
        if ($data->isInitialized('updated') && null !== $data->getUpdated()) {
            $dataArray['updated'] = $data->getUpdated();
        }
        if ($data->isInitialized('urlPrivate') && null !== $data->getUrlPrivate()) {
            $dataArray['url_private'] = $data->getUrlPrivate();
        }
        if ($data->isInitialized('urlPrivateDownload') && null !== $data->getUrlPrivateDownload()) {
            $dataArray['url_private_download'] = $data->getUrlPrivateDownload();
        }
        if ($data->isInitialized('user') && null !== $data->getUser()) {
            $dataArray['user'] = $data->getUser();
        }
        if ($data->isInitialized('userTeam') && null !== $data->getUserTeam()) {
            $dataArray['user_team'] = $data->getUserTeam();
        }
        if ($data->isInitialized('username') && null !== $data->getUsername()) {
            $dataArray['username'] = $data->getUsername();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\ObjsFile::class => false];
    }
}
