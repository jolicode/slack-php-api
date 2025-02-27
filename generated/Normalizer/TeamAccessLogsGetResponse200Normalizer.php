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
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) || (Kernel::MAJOR_VERSION >= 7 || Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4)) {
    class TeamAccessLogsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \JoliCode\Slack\Api\Model\TeamAccessLogsGetResponse200::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && \JoliCode\Slack\Api\Model\TeamAccessLogsGetResponse200::class === \get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\TeamAccessLogsGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('logins', $data) && null !== $data['logins']) {
                $values = [];
                foreach ($data['logins'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \JoliCode\Slack\Api\Model\TeamAccessLogsGetResponse200LoginsItem::class, 'json', $context);
                }
                $object->setLogins($values);
            } elseif (\array_key_exists('logins', $data) && null === $data['logins']) {
                $object->setLogins(null);
            }
            if (\array_key_exists('ok', $data) && null !== $data['ok']) {
                $object->setOk($data['ok']);
            } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
                $object->setOk(null);
            }
            if (\array_key_exists('paging', $data) && null !== $data['paging']) {
                $object->setPaging($this->denormalizer->denormalize($data['paging'], \JoliCode\Slack\Api\Model\ObjsPaging::class, 'json', $context));
            } elseif (\array_key_exists('paging', $data) && null === $data['paging']) {
                $object->setPaging(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $values = [];
            foreach ($object->getLogins() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['logins'] = $values;
            $data['ok'] = $object->getOk();
            $data['paging'] = $this->normalizer->normalize($object->getPaging(), 'json', $context);

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\JoliCode\Slack\Api\Model\TeamAccessLogsGetResponse200::class => false];
        }
    }
} else {
    class TeamAccessLogsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \JoliCode\Slack\Api\Model\TeamAccessLogsGetResponse200::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && \JoliCode\Slack\Api\Model\TeamAccessLogsGetResponse200::class === \get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\TeamAccessLogsGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('logins', $data) && null !== $data['logins']) {
                $values = [];
                foreach ($data['logins'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \JoliCode\Slack\Api\Model\TeamAccessLogsGetResponse200LoginsItem::class, 'json', $context);
                }
                $object->setLogins($values);
            } elseif (\array_key_exists('logins', $data) && null === $data['logins']) {
                $object->setLogins(null);
            }
            if (\array_key_exists('ok', $data) && null !== $data['ok']) {
                $object->setOk($data['ok']);
            } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
                $object->setOk(null);
            }
            if (\array_key_exists('paging', $data) && null !== $data['paging']) {
                $object->setPaging($this->denormalizer->denormalize($data['paging'], \JoliCode\Slack\Api\Model\ObjsPaging::class, 'json', $context));
            } elseif (\array_key_exists('paging', $data) && null === $data['paging']) {
                $object->setPaging(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $values = [];
            foreach ($object->getLogins() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['logins'] = $values;
            $data['ok'] = $object->getOk();
            $data['paging'] = $this->normalizer->normalize($object->getPaging(), 'json', $context);

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\JoliCode\Slack\Api\Model\TeamAccessLogsGetResponse200::class => false];
        }
    }
}
