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
    class ObjsEnterpriseUserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\ObjsEnterpriseUser' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsEnterpriseUser' === \get_class($data);
        }

        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ObjsEnterpriseUser();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('enterprise_id', $data) && null !== $data['enterprise_id']) {
                $object->setEnterpriseId($data['enterprise_id']);
            } elseif (\array_key_exists('enterprise_id', $data) && null === $data['enterprise_id']) {
                $object->setEnterpriseId(null);
            }
            if (\array_key_exists('enterprise_name', $data) && null !== $data['enterprise_name']) {
                $object->setEnterpriseName($data['enterprise_name']);
            } elseif (\array_key_exists('enterprise_name', $data) && null === $data['enterprise_name']) {
                $object->setEnterpriseName(null);
            }
            if (\array_key_exists('id', $data) && null !== $data['id']) {
                $object->setId($data['id']);
            } elseif (\array_key_exists('id', $data) && null === $data['id']) {
                $object->setId(null);
            }
            if (\array_key_exists('is_admin', $data) && null !== $data['is_admin']) {
                $object->setIsAdmin($data['is_admin']);
            } elseif (\array_key_exists('is_admin', $data) && null === $data['is_admin']) {
                $object->setIsAdmin(null);
            }
            if (\array_key_exists('is_owner', $data) && null !== $data['is_owner']) {
                $object->setIsOwner($data['is_owner']);
            } elseif (\array_key_exists('is_owner', $data) && null === $data['is_owner']) {
                $object->setIsOwner(null);
            }
            if (\array_key_exists('teams', $data) && null !== $data['teams']) {
                $values = [];
                foreach ($data['teams'] as $value) {
                    $values[] = $value;
                }
                $object->setTeams($values);
            } elseif (\array_key_exists('teams', $data) && null === $data['teams']) {
                $object->setTeams(null);
            }

            return $object;
        }

        public function normalize(mixed $object, string $format = null, array $context = []): null|array|\ArrayObject|bool|float|int|string
        {
            $data = [];
            $data['enterprise_id'] = $object->getEnterpriseId();
            $data['enterprise_name'] = $object->getEnterpriseName();
            $data['id'] = $object->getId();
            $data['is_admin'] = $object->getIsAdmin();
            $data['is_owner'] = $object->getIsOwner();
            $values = [];
            foreach ($object->getTeams() as $value) {
                $values[] = $value;
            }
            $data['teams'] = $values;

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\ObjsEnterpriseUser' => false];
        }
    }
} else {
    class ObjsEnterpriseUserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Slack\\Api\\Model\\ObjsEnterpriseUser' === $type;
        }

        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ObjsEnterpriseUser' === \get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Slack\Api\Model\ObjsEnterpriseUser();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('enterprise_id', $data) && null !== $data['enterprise_id']) {
                $object->setEnterpriseId($data['enterprise_id']);
            } elseif (\array_key_exists('enterprise_id', $data) && null === $data['enterprise_id']) {
                $object->setEnterpriseId(null);
            }
            if (\array_key_exists('enterprise_name', $data) && null !== $data['enterprise_name']) {
                $object->setEnterpriseName($data['enterprise_name']);
            } elseif (\array_key_exists('enterprise_name', $data) && null === $data['enterprise_name']) {
                $object->setEnterpriseName(null);
            }
            if (\array_key_exists('id', $data) && null !== $data['id']) {
                $object->setId($data['id']);
            } elseif (\array_key_exists('id', $data) && null === $data['id']) {
                $object->setId(null);
            }
            if (\array_key_exists('is_admin', $data) && null !== $data['is_admin']) {
                $object->setIsAdmin($data['is_admin']);
            } elseif (\array_key_exists('is_admin', $data) && null === $data['is_admin']) {
                $object->setIsAdmin(null);
            }
            if (\array_key_exists('is_owner', $data) && null !== $data['is_owner']) {
                $object->setIsOwner($data['is_owner']);
            } elseif (\array_key_exists('is_owner', $data) && null === $data['is_owner']) {
                $object->setIsOwner(null);
            }
            if (\array_key_exists('teams', $data) && null !== $data['teams']) {
                $values = [];
                foreach ($data['teams'] as $value) {
                    $values[] = $value;
                }
                $object->setTeams($values);
            } elseif (\array_key_exists('teams', $data) && null === $data['teams']) {
                $object->setTeams(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['enterprise_id'] = $object->getEnterpriseId();
            $data['enterprise_name'] = $object->getEnterpriseName();
            $data['id'] = $object->getId();
            $data['is_admin'] = $object->getIsAdmin();
            $data['is_owner'] = $object->getIsOwner();
            $values = [];
            foreach ($object->getTeams() as $value) {
                $values[] = $value;
            }
            $data['teams'] = $values;

            return $data;
        }

        public function getSupportedTypes(string $format = null): array
        {
            return ['JoliCode\\Slack\\Api\\Model\\ObjsEnterpriseUser' => false];
        }
    }
}
