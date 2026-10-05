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
        $object = new \JoliCode\Slack\Api\Model\ObjsFile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
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
        if (\array_key_exists('channels', $data) && null !== $data['channels']) {
            $values = [];
            foreach ($data['channels'] as $value) {
                $values[] = $value;
            }
            $object->channels = $values;
        } elseif (\array_key_exists('channels', $data)) {
            $object->channels = null;
        }
        if (\array_key_exists('comments_count', $data) && null !== $data['comments_count']) {
            $object->commentsCount = $data['comments_count'];
        } elseif (\array_key_exists('comments_count', $data)) {
            $object->commentsCount = null;
        }
        if (\array_key_exists('created', $data) && null !== $data['created']) {
            $object->created = $data['created'];
        } elseif (\array_key_exists('created', $data)) {
            $object->created = null;
        }
        if (\array_key_exists('date_delete', $data) && null !== $data['date_delete']) {
            $object->dateDelete = $data['date_delete'];
        } elseif (\array_key_exists('date_delete', $data)) {
            $object->dateDelete = null;
        }
        if (\array_key_exists('deanimate_gif', $data) && null !== $data['deanimate_gif']) {
            $object->deanimateGif = $data['deanimate_gif'];
        } elseif (\array_key_exists('deanimate_gif', $data)) {
            $object->deanimateGif = null;
        }
        if (\array_key_exists('display_as_bot', $data) && null !== $data['display_as_bot']) {
            $object->displayAsBot = $data['display_as_bot'];
        } elseif (\array_key_exists('display_as_bot', $data)) {
            $object->displayAsBot = null;
        }
        if (\array_key_exists('editable', $data) && null !== $data['editable']) {
            $object->editable = $data['editable'];
        } elseif (\array_key_exists('editable', $data)) {
            $object->editable = null;
        }
        if (\array_key_exists('editor', $data) && null !== $data['editor']) {
            $object->editor = $data['editor'];
        } elseif (\array_key_exists('editor', $data)) {
            $object->editor = null;
        }
        if (\array_key_exists('external_id', $data) && null !== $data['external_id']) {
            $object->externalId = $data['external_id'];
        } elseif (\array_key_exists('external_id', $data)) {
            $object->externalId = null;
        }
        if (\array_key_exists('external_type', $data) && null !== $data['external_type']) {
            $object->externalType = $data['external_type'];
        } elseif (\array_key_exists('external_type', $data)) {
            $object->externalType = null;
        }
        if (\array_key_exists('external_url', $data) && null !== $data['external_url']) {
            $object->externalUrl = $data['external_url'];
        } elseif (\array_key_exists('external_url', $data)) {
            $object->externalUrl = null;
        }
        if (\array_key_exists('filetype', $data) && null !== $data['filetype']) {
            $object->filetype = $data['filetype'];
        } elseif (\array_key_exists('filetype', $data)) {
            $object->filetype = null;
        }
        if (\array_key_exists('groups', $data) && null !== $data['groups']) {
            $values_1 = [];
            foreach ($data['groups'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->groups = $values_1;
        } elseif (\array_key_exists('groups', $data)) {
            $object->groups = null;
        }
        if (\array_key_exists('has_rich_preview', $data) && null !== $data['has_rich_preview']) {
            $object->hasRichPreview = $data['has_rich_preview'];
        } elseif (\array_key_exists('has_rich_preview', $data)) {
            $object->hasRichPreview = null;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->id = $data['id'];
        } elseif (\array_key_exists('id', $data)) {
            $object->id = null;
        }
        if (\array_key_exists('image_exif_rotation', $data) && null !== $data['image_exif_rotation']) {
            $object->imageExifRotation = $data['image_exif_rotation'];
        } elseif (\array_key_exists('image_exif_rotation', $data)) {
            $object->imageExifRotation = null;
        }
        if (\array_key_exists('ims', $data) && null !== $data['ims']) {
            $values_2 = [];
            foreach ($data['ims'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->ims = $values_2;
        } elseif (\array_key_exists('ims', $data)) {
            $object->ims = null;
        }
        if (\array_key_exists('is_external', $data) && null !== $data['is_external']) {
            $object->isExternal = $data['is_external'];
        } elseif (\array_key_exists('is_external', $data)) {
            $object->isExternal = null;
        }
        if (\array_key_exists('is_public', $data) && null !== $data['is_public']) {
            $object->isPublic = $data['is_public'];
        } elseif (\array_key_exists('is_public', $data)) {
            $object->isPublic = null;
        }
        if (\array_key_exists('is_starred', $data) && null !== $data['is_starred']) {
            $object->isStarred = $data['is_starred'];
        } elseif (\array_key_exists('is_starred', $data)) {
            $object->isStarred = null;
        }
        if (\array_key_exists('is_tombstoned', $data) && null !== $data['is_tombstoned']) {
            $object->isTombstoned = $data['is_tombstoned'];
        } elseif (\array_key_exists('is_tombstoned', $data)) {
            $object->isTombstoned = null;
        }
        if (\array_key_exists('last_editor', $data) && null !== $data['last_editor']) {
            $object->lastEditor = $data['last_editor'];
        } elseif (\array_key_exists('last_editor', $data)) {
            $object->lastEditor = null;
        }
        if (\array_key_exists('mimetype', $data) && null !== $data['mimetype']) {
            $object->mimetype = $data['mimetype'];
        } elseif (\array_key_exists('mimetype', $data)) {
            $object->mimetype = null;
        }
        if (\array_key_exists('mode', $data) && null !== $data['mode']) {
            $object->mode = $data['mode'];
        } elseif (\array_key_exists('mode', $data)) {
            $object->mode = null;
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->name = $data['name'];
        } elseif (\array_key_exists('name', $data)) {
            $object->name = null;
        }
        if (\array_key_exists('non_owner_editable', $data) && null !== $data['non_owner_editable']) {
            $object->nonOwnerEditable = $data['non_owner_editable'];
        } elseif (\array_key_exists('non_owner_editable', $data)) {
            $object->nonOwnerEditable = null;
        }
        if (\array_key_exists('num_stars', $data) && null !== $data['num_stars']) {
            $object->numStars = $data['num_stars'];
        } elseif (\array_key_exists('num_stars', $data)) {
            $object->numStars = null;
        }
        if (\array_key_exists('original_h', $data) && null !== $data['original_h']) {
            $object->originalH = $data['original_h'];
        } elseif (\array_key_exists('original_h', $data)) {
            $object->originalH = null;
        }
        if (\array_key_exists('original_w', $data) && null !== $data['original_w']) {
            $object->originalW = $data['original_w'];
        } elseif (\array_key_exists('original_w', $data)) {
            $object->originalW = null;
        }
        if (\array_key_exists('permalink', $data) && null !== $data['permalink']) {
            $object->permalink = $data['permalink'];
        } elseif (\array_key_exists('permalink', $data)) {
            $object->permalink = null;
        }
        if (\array_key_exists('permalink_public', $data) && null !== $data['permalink_public']) {
            $object->permalinkPublic = $data['permalink_public'];
        } elseif (\array_key_exists('permalink_public', $data)) {
            $object->permalinkPublic = null;
        }
        if (\array_key_exists('pinned_info', $data) && null !== $data['pinned_info']) {
            $object->pinnedInfo = $data['pinned_info'];
        } elseif (\array_key_exists('pinned_info', $data)) {
            $object->pinnedInfo = null;
        }
        if (\array_key_exists('pinned_to', $data) && null !== $data['pinned_to']) {
            $values_3 = [];
            foreach ($data['pinned_to'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->pinnedTo = $values_3;
        } elseif (\array_key_exists('pinned_to', $data)) {
            $object->pinnedTo = null;
        }
        if (\array_key_exists('pjpeg', $data) && null !== $data['pjpeg']) {
            $object->pjpeg = $data['pjpeg'];
        } elseif (\array_key_exists('pjpeg', $data)) {
            $object->pjpeg = null;
        }
        if (\array_key_exists('pretty_type', $data) && null !== $data['pretty_type']) {
            $object->prettyType = $data['pretty_type'];
        } elseif (\array_key_exists('pretty_type', $data)) {
            $object->prettyType = null;
        }
        if (\array_key_exists('preview', $data) && null !== $data['preview']) {
            $object->preview = $data['preview'];
        } elseif (\array_key_exists('preview', $data)) {
            $object->preview = null;
        }
        if (\array_key_exists('public_url_shared', $data) && null !== $data['public_url_shared']) {
            $object->publicUrlShared = $data['public_url_shared'];
        } elseif (\array_key_exists('public_url_shared', $data)) {
            $object->publicUrlShared = null;
        }
        if (\array_key_exists('reactions', $data) && null !== $data['reactions']) {
            $values_4 = [];
            foreach ($data['reactions'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \JoliCode\Slack\Api\Model\ObjsReaction::class, 'json', $context);
            }
            $object->reactions = $values_4;
        } elseif (\array_key_exists('reactions', $data)) {
            $object->reactions = null;
        }
        if (\array_key_exists('shares', $data) && null !== $data['shares']) {
            $object->shares = $this->denormalizer->denormalize($data['shares'], \JoliCode\Slack\Api\Model\ObjsFileShares::class, 'json', $context);
        } elseif (\array_key_exists('shares', $data)) {
            $object->shares = null;
        }
        if (\array_key_exists('size', $data) && null !== $data['size']) {
            $object->size = $data['size'];
        } elseif (\array_key_exists('size', $data)) {
            $object->size = null;
        }
        if (\array_key_exists('source_team', $data) && null !== $data['source_team']) {
            $object->sourceTeam = $data['source_team'];
        } elseif (\array_key_exists('source_team', $data)) {
            $object->sourceTeam = null;
        }
        if (\array_key_exists('state', $data) && null !== $data['state']) {
            $object->state = $data['state'];
        } elseif (\array_key_exists('state', $data)) {
            $object->state = null;
        }
        if (\array_key_exists('thumb_1024', $data) && null !== $data['thumb_1024']) {
            $object->thumb1024 = $data['thumb_1024'];
        } elseif (\array_key_exists('thumb_1024', $data)) {
            $object->thumb1024 = null;
        }
        if (\array_key_exists('thumb_1024_h', $data) && null !== $data['thumb_1024_h']) {
            $object->thumb1024H = $data['thumb_1024_h'];
        } elseif (\array_key_exists('thumb_1024_h', $data)) {
            $object->thumb1024H = null;
        }
        if (\array_key_exists('thumb_1024_w', $data) && null !== $data['thumb_1024_w']) {
            $object->thumb1024W = $data['thumb_1024_w'];
        } elseif (\array_key_exists('thumb_1024_w', $data)) {
            $object->thumb1024W = null;
        }
        if (\array_key_exists('thumb_160', $data) && null !== $data['thumb_160']) {
            $object->thumb160 = $data['thumb_160'];
        } elseif (\array_key_exists('thumb_160', $data)) {
            $object->thumb160 = null;
        }
        if (\array_key_exists('thumb_360', $data) && null !== $data['thumb_360']) {
            $object->thumb360 = $data['thumb_360'];
        } elseif (\array_key_exists('thumb_360', $data)) {
            $object->thumb360 = null;
        }
        if (\array_key_exists('thumb_360_gif', $data) && null !== $data['thumb_360_gif']) {
            $object->thumb360Gif = $data['thumb_360_gif'];
        } elseif (\array_key_exists('thumb_360_gif', $data)) {
            $object->thumb360Gif = null;
        }
        if (\array_key_exists('thumb_360_h', $data) && null !== $data['thumb_360_h']) {
            $object->thumb360H = $data['thumb_360_h'];
        } elseif (\array_key_exists('thumb_360_h', $data)) {
            $object->thumb360H = null;
        }
        if (\array_key_exists('thumb_360_w', $data) && null !== $data['thumb_360_w']) {
            $object->thumb360W = $data['thumb_360_w'];
        } elseif (\array_key_exists('thumb_360_w', $data)) {
            $object->thumb360W = null;
        }
        if (\array_key_exists('thumb_480', $data) && null !== $data['thumb_480']) {
            $object->thumb480 = $data['thumb_480'];
        } elseif (\array_key_exists('thumb_480', $data)) {
            $object->thumb480 = null;
        }
        if (\array_key_exists('thumb_480_h', $data) && null !== $data['thumb_480_h']) {
            $object->thumb480H = $data['thumb_480_h'];
        } elseif (\array_key_exists('thumb_480_h', $data)) {
            $object->thumb480H = null;
        }
        if (\array_key_exists('thumb_480_w', $data) && null !== $data['thumb_480_w']) {
            $object->thumb480W = $data['thumb_480_w'];
        } elseif (\array_key_exists('thumb_480_w', $data)) {
            $object->thumb480W = null;
        }
        if (\array_key_exists('thumb_64', $data) && null !== $data['thumb_64']) {
            $object->thumb64 = $data['thumb_64'];
        } elseif (\array_key_exists('thumb_64', $data)) {
            $object->thumb64 = null;
        }
        if (\array_key_exists('thumb_720', $data) && null !== $data['thumb_720']) {
            $object->thumb720 = $data['thumb_720'];
        } elseif (\array_key_exists('thumb_720', $data)) {
            $object->thumb720 = null;
        }
        if (\array_key_exists('thumb_720_h', $data) && null !== $data['thumb_720_h']) {
            $object->thumb720H = $data['thumb_720_h'];
        } elseif (\array_key_exists('thumb_720_h', $data)) {
            $object->thumb720H = null;
        }
        if (\array_key_exists('thumb_720_w', $data) && null !== $data['thumb_720_w']) {
            $object->thumb720W = $data['thumb_720_w'];
        } elseif (\array_key_exists('thumb_720_w', $data)) {
            $object->thumb720W = null;
        }
        if (\array_key_exists('thumb_80', $data) && null !== $data['thumb_80']) {
            $object->thumb80 = $data['thumb_80'];
        } elseif (\array_key_exists('thumb_80', $data)) {
            $object->thumb80 = null;
        }
        if (\array_key_exists('thumb_800', $data) && null !== $data['thumb_800']) {
            $object->thumb800 = $data['thumb_800'];
        } elseif (\array_key_exists('thumb_800', $data)) {
            $object->thumb800 = null;
        }
        if (\array_key_exists('thumb_800_h', $data) && null !== $data['thumb_800_h']) {
            $object->thumb800H = $data['thumb_800_h'];
        } elseif (\array_key_exists('thumb_800_h', $data)) {
            $object->thumb800H = null;
        }
        if (\array_key_exists('thumb_800_w', $data) && null !== $data['thumb_800_w']) {
            $object->thumb800W = $data['thumb_800_w'];
        } elseif (\array_key_exists('thumb_800_w', $data)) {
            $object->thumb800W = null;
        }
        if (\array_key_exists('thumb_960', $data) && null !== $data['thumb_960']) {
            $object->thumb960 = $data['thumb_960'];
        } elseif (\array_key_exists('thumb_960', $data)) {
            $object->thumb960 = null;
        }
        if (\array_key_exists('thumb_960_h', $data) && null !== $data['thumb_960_h']) {
            $object->thumb960H = $data['thumb_960_h'];
        } elseif (\array_key_exists('thumb_960_h', $data)) {
            $object->thumb960H = null;
        }
        if (\array_key_exists('thumb_960_w', $data) && null !== $data['thumb_960_w']) {
            $object->thumb960W = $data['thumb_960_w'];
        } elseif (\array_key_exists('thumb_960_w', $data)) {
            $object->thumb960W = null;
        }
        if (\array_key_exists('thumb_tiny', $data) && null !== $data['thumb_tiny']) {
            $object->thumbTiny = $data['thumb_tiny'];
        } elseif (\array_key_exists('thumb_tiny', $data)) {
            $object->thumbTiny = null;
        }
        if (\array_key_exists('timestamp', $data) && null !== $data['timestamp']) {
            $value_5 = $data['timestamp'];
            if (\is_int($data['timestamp'])) {
                $value_5 = $data['timestamp'];
            } elseif (\is_string($data['timestamp'])) {
                $value_5 = $data['timestamp'];
            }
            $object->timestamp = $value_5;
        } elseif (\array_key_exists('timestamp', $data)) {
            $object->timestamp = null;
        }
        if (\array_key_exists('title', $data) && null !== $data['title']) {
            $object->title = $data['title'];
        } elseif (\array_key_exists('title', $data)) {
            $object->title = null;
        }
        if (\array_key_exists('updated', $data) && null !== $data['updated']) {
            $object->updated = $data['updated'];
        } elseif (\array_key_exists('updated', $data)) {
            $object->updated = null;
        }
        if (\array_key_exists('url_private', $data) && null !== $data['url_private']) {
            $object->urlPrivate = $data['url_private'];
        } elseif (\array_key_exists('url_private', $data)) {
            $object->urlPrivate = null;
        }
        if (\array_key_exists('url_private_download', $data) && null !== $data['url_private_download']) {
            $object->urlPrivateDownload = $data['url_private_download'];
        } elseif (\array_key_exists('url_private_download', $data)) {
            $object->urlPrivateDownload = null;
        }
        if (\array_key_exists('user', $data) && null !== $data['user']) {
            $object->user = $data['user'];
        } elseif (\array_key_exists('user', $data)) {
            $object->user = null;
        }
        if (\array_key_exists('user_team', $data) && null !== $data['user_team']) {
            $object->userTeam = $data['user_team'];
        } elseif (\array_key_exists('user_team', $data)) {
            $object->userTeam = null;
        }
        if (\array_key_exists('username', $data) && null !== $data['username']) {
            $object->username = $data['username'];
        } elseif (\array_key_exists('username', $data)) {
            $object->username = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('channels', get_object_vars($data)) && null !== ($data->channels ?? null)) {
            $values = [];
            foreach ($data->channels as $value) {
                $values[] = $value;
            }
            $dataArray['channels'] = $values;
        }
        if (\array_key_exists('commentsCount', get_object_vars($data)) && null !== ($data->commentsCount ?? null)) {
            $dataArray['comments_count'] = $data->commentsCount;
        }
        if (\array_key_exists('created', get_object_vars($data)) && null !== ($data->created ?? null)) {
            $dataArray['created'] = $data->created;
        }
        if (\array_key_exists('dateDelete', get_object_vars($data)) && null !== ($data->dateDelete ?? null)) {
            $dataArray['date_delete'] = $data->dateDelete;
        }
        if (\array_key_exists('deanimateGif', get_object_vars($data)) && null !== ($data->deanimateGif ?? null)) {
            $dataArray['deanimate_gif'] = $data->deanimateGif;
        }
        if (\array_key_exists('displayAsBot', get_object_vars($data)) && null !== ($data->displayAsBot ?? null)) {
            $dataArray['display_as_bot'] = $data->displayAsBot;
        }
        if (\array_key_exists('editable', get_object_vars($data)) && null !== ($data->editable ?? null)) {
            $dataArray['editable'] = $data->editable;
        }
        if (\array_key_exists('editor', get_object_vars($data)) && null !== ($data->editor ?? null)) {
            $dataArray['editor'] = $data->editor;
        }
        if (\array_key_exists('externalId', get_object_vars($data)) && null !== ($data->externalId ?? null)) {
            $dataArray['external_id'] = $data->externalId;
        }
        if (\array_key_exists('externalType', get_object_vars($data)) && null !== ($data->externalType ?? null)) {
            $dataArray['external_type'] = $data->externalType;
        }
        if (\array_key_exists('externalUrl', get_object_vars($data)) && null !== ($data->externalUrl ?? null)) {
            $dataArray['external_url'] = $data->externalUrl;
        }
        if (\array_key_exists('filetype', get_object_vars($data)) && null !== ($data->filetype ?? null)) {
            $dataArray['filetype'] = $data->filetype;
        }
        if (\array_key_exists('groups', get_object_vars($data)) && null !== ($data->groups ?? null)) {
            $values_1 = [];
            foreach ($data->groups as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['groups'] = $values_1;
        }
        if (\array_key_exists('hasRichPreview', get_object_vars($data)) && null !== ($data->hasRichPreview ?? null)) {
            $dataArray['has_rich_preview'] = $data->hasRichPreview;
        }
        if (\array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id;
        }
        if (\array_key_exists('imageExifRotation', get_object_vars($data)) && null !== ($data->imageExifRotation ?? null)) {
            $dataArray['image_exif_rotation'] = $data->imageExifRotation;
        }
        if (\array_key_exists('ims', get_object_vars($data)) && null !== ($data->ims ?? null)) {
            $values_2 = [];
            foreach ($data->ims as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['ims'] = $values_2;
        }
        if (\array_key_exists('isExternal', get_object_vars($data)) && null !== ($data->isExternal ?? null)) {
            $dataArray['is_external'] = $data->isExternal;
        }
        if (\array_key_exists('isPublic', get_object_vars($data)) && null !== ($data->isPublic ?? null)) {
            $dataArray['is_public'] = $data->isPublic;
        }
        if (\array_key_exists('isStarred', get_object_vars($data)) && null !== ($data->isStarred ?? null)) {
            $dataArray['is_starred'] = $data->isStarred;
        }
        if (\array_key_exists('isTombstoned', get_object_vars($data)) && null !== ($data->isTombstoned ?? null)) {
            $dataArray['is_tombstoned'] = $data->isTombstoned;
        }
        if (\array_key_exists('lastEditor', get_object_vars($data)) && null !== ($data->lastEditor ?? null)) {
            $dataArray['last_editor'] = $data->lastEditor;
        }
        if (\array_key_exists('mimetype', get_object_vars($data)) && null !== ($data->mimetype ?? null)) {
            $dataArray['mimetype'] = $data->mimetype;
        }
        if (\array_key_exists('mode', get_object_vars($data)) && null !== ($data->mode ?? null)) {
            $dataArray['mode'] = $data->mode;
        }
        if (\array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name;
        }
        if (\array_key_exists('nonOwnerEditable', get_object_vars($data)) && null !== ($data->nonOwnerEditable ?? null)) {
            $dataArray['non_owner_editable'] = $data->nonOwnerEditable;
        }
        if (\array_key_exists('numStars', get_object_vars($data)) && null !== ($data->numStars ?? null)) {
            $dataArray['num_stars'] = $data->numStars;
        }
        if (\array_key_exists('originalH', get_object_vars($data)) && null !== ($data->originalH ?? null)) {
            $dataArray['original_h'] = $data->originalH;
        }
        if (\array_key_exists('originalW', get_object_vars($data)) && null !== ($data->originalW ?? null)) {
            $dataArray['original_w'] = $data->originalW;
        }
        if (\array_key_exists('permalink', get_object_vars($data)) && null !== ($data->permalink ?? null)) {
            $dataArray['permalink'] = $data->permalink;
        }
        if (\array_key_exists('permalinkPublic', get_object_vars($data)) && null !== ($data->permalinkPublic ?? null)) {
            $dataArray['permalink_public'] = $data->permalinkPublic;
        }
        if (\array_key_exists('pinnedInfo', get_object_vars($data)) && null !== ($data->pinnedInfo ?? null)) {
            $dataArray['pinned_info'] = $data->pinnedInfo;
        }
        if (\array_key_exists('pinnedTo', get_object_vars($data)) && null !== ($data->pinnedTo ?? null)) {
            $values_3 = [];
            foreach ($data->pinnedTo as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['pinned_to'] = $values_3;
        }
        if (\array_key_exists('pjpeg', get_object_vars($data)) && null !== ($data->pjpeg ?? null)) {
            $dataArray['pjpeg'] = $data->pjpeg;
        }
        if (\array_key_exists('prettyType', get_object_vars($data)) && null !== ($data->prettyType ?? null)) {
            $dataArray['pretty_type'] = $data->prettyType;
        }
        if (\array_key_exists('preview', get_object_vars($data)) && null !== ($data->preview ?? null)) {
            $dataArray['preview'] = $data->preview;
        }
        if (\array_key_exists('publicUrlShared', get_object_vars($data)) && null !== ($data->publicUrlShared ?? null)) {
            $dataArray['public_url_shared'] = $data->publicUrlShared;
        }
        if (\array_key_exists('reactions', get_object_vars($data)) && null !== ($data->reactions ?? null)) {
            $values_4 = [];
            foreach ($data->reactions as $value_4) {
                $normalized = null === $value_4 ? null : $this->normalizer->normalize($value_4, 'json', $context);
                $values_4[] = is_iterable($normalized) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['reactions'] = $values_4;
        }
        if (\array_key_exists('shares', get_object_vars($data)) && null !== ($data->shares ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->shares, 'json', $context);
            $dataArray['shares'] = is_iterable($normalized_1) ? new \JoliCode\Slack\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (\array_key_exists('size', get_object_vars($data)) && null !== ($data->size ?? null)) {
            $dataArray['size'] = $data->size;
        }
        if (\array_key_exists('sourceTeam', get_object_vars($data)) && null !== ($data->sourceTeam ?? null)) {
            $dataArray['source_team'] = $data->sourceTeam;
        }
        if (\array_key_exists('state', get_object_vars($data)) && null !== ($data->state ?? null)) {
            $dataArray['state'] = $data->state;
        }
        if (\array_key_exists('thumb1024', get_object_vars($data)) && null !== ($data->thumb1024 ?? null)) {
            $dataArray['thumb_1024'] = $data->thumb1024;
        }
        if (\array_key_exists('thumb1024H', get_object_vars($data)) && null !== ($data->thumb1024H ?? null)) {
            $dataArray['thumb_1024_h'] = $data->thumb1024H;
        }
        if (\array_key_exists('thumb1024W', get_object_vars($data)) && null !== ($data->thumb1024W ?? null)) {
            $dataArray['thumb_1024_w'] = $data->thumb1024W;
        }
        if (\array_key_exists('thumb160', get_object_vars($data)) && null !== ($data->thumb160 ?? null)) {
            $dataArray['thumb_160'] = $data->thumb160;
        }
        if (\array_key_exists('thumb360', get_object_vars($data)) && null !== ($data->thumb360 ?? null)) {
            $dataArray['thumb_360'] = $data->thumb360;
        }
        if (\array_key_exists('thumb360Gif', get_object_vars($data)) && null !== ($data->thumb360Gif ?? null)) {
            $dataArray['thumb_360_gif'] = $data->thumb360Gif;
        }
        if (\array_key_exists('thumb360H', get_object_vars($data)) && null !== ($data->thumb360H ?? null)) {
            $dataArray['thumb_360_h'] = $data->thumb360H;
        }
        if (\array_key_exists('thumb360W', get_object_vars($data)) && null !== ($data->thumb360W ?? null)) {
            $dataArray['thumb_360_w'] = $data->thumb360W;
        }
        if (\array_key_exists('thumb480', get_object_vars($data)) && null !== ($data->thumb480 ?? null)) {
            $dataArray['thumb_480'] = $data->thumb480;
        }
        if (\array_key_exists('thumb480H', get_object_vars($data)) && null !== ($data->thumb480H ?? null)) {
            $dataArray['thumb_480_h'] = $data->thumb480H;
        }
        if (\array_key_exists('thumb480W', get_object_vars($data)) && null !== ($data->thumb480W ?? null)) {
            $dataArray['thumb_480_w'] = $data->thumb480W;
        }
        if (\array_key_exists('thumb64', get_object_vars($data)) && null !== ($data->thumb64 ?? null)) {
            $dataArray['thumb_64'] = $data->thumb64;
        }
        if (\array_key_exists('thumb720', get_object_vars($data)) && null !== ($data->thumb720 ?? null)) {
            $dataArray['thumb_720'] = $data->thumb720;
        }
        if (\array_key_exists('thumb720H', get_object_vars($data)) && null !== ($data->thumb720H ?? null)) {
            $dataArray['thumb_720_h'] = $data->thumb720H;
        }
        if (\array_key_exists('thumb720W', get_object_vars($data)) && null !== ($data->thumb720W ?? null)) {
            $dataArray['thumb_720_w'] = $data->thumb720W;
        }
        if (\array_key_exists('thumb80', get_object_vars($data)) && null !== ($data->thumb80 ?? null)) {
            $dataArray['thumb_80'] = $data->thumb80;
        }
        if (\array_key_exists('thumb800', get_object_vars($data)) && null !== ($data->thumb800 ?? null)) {
            $dataArray['thumb_800'] = $data->thumb800;
        }
        if (\array_key_exists('thumb800H', get_object_vars($data)) && null !== ($data->thumb800H ?? null)) {
            $dataArray['thumb_800_h'] = $data->thumb800H;
        }
        if (\array_key_exists('thumb800W', get_object_vars($data)) && null !== ($data->thumb800W ?? null)) {
            $dataArray['thumb_800_w'] = $data->thumb800W;
        }
        if (\array_key_exists('thumb960', get_object_vars($data)) && null !== ($data->thumb960 ?? null)) {
            $dataArray['thumb_960'] = $data->thumb960;
        }
        if (\array_key_exists('thumb960H', get_object_vars($data)) && null !== ($data->thumb960H ?? null)) {
            $dataArray['thumb_960_h'] = $data->thumb960H;
        }
        if (\array_key_exists('thumb960W', get_object_vars($data)) && null !== ($data->thumb960W ?? null)) {
            $dataArray['thumb_960_w'] = $data->thumb960W;
        }
        if (\array_key_exists('thumbTiny', get_object_vars($data)) && null !== ($data->thumbTiny ?? null)) {
            $dataArray['thumb_tiny'] = $data->thumbTiny;
        }
        if (\array_key_exists('timestamp', get_object_vars($data)) && null !== ($data->timestamp ?? null)) {
            $value_5 = $data->timestamp;
            if (\is_int($data->timestamp)) {
                $value_5 = $data->timestamp;
            } elseif (\is_string($data->timestamp)) {
                $value_5 = $data->timestamp;
            }
            $dataArray['timestamp'] = $value_5;
        }
        if (\array_key_exists('title', get_object_vars($data)) && null !== ($data->title ?? null)) {
            $dataArray['title'] = $data->title;
        }
        if (\array_key_exists('updated', get_object_vars($data)) && null !== ($data->updated ?? null)) {
            $dataArray['updated'] = $data->updated;
        }
        if (\array_key_exists('urlPrivate', get_object_vars($data)) && null !== ($data->urlPrivate ?? null)) {
            $dataArray['url_private'] = $data->urlPrivate;
        }
        if (\array_key_exists('urlPrivateDownload', get_object_vars($data)) && null !== ($data->urlPrivateDownload ?? null)) {
            $dataArray['url_private_download'] = $data->urlPrivateDownload;
        }
        if (\array_key_exists('user', get_object_vars($data)) && null !== ($data->user ?? null)) {
            $dataArray['user'] = $data->user;
        }
        if (\array_key_exists('userTeam', get_object_vars($data)) && null !== ($data->userTeam ?? null)) {
            $dataArray['user_team'] = $data->userTeam;
        }
        if (\array_key_exists('username', get_object_vars($data)) && null !== ($data->username ?? null)) {
            $dataArray['username'] = $data->username;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Slack\Api\Model\ObjsFile::class => false];
    }
}
