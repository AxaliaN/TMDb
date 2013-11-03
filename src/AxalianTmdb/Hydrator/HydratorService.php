<?php
/**
 * Service
 *
 * @category  AxalianTmdb\Hydrator
 * @package   AxalianTmdb\Hydrator
 * @author    Michel Maas <michel@michelmaas.com>
 */
 

namespace AxalianTmdb\Hydrator;

use AxalianTmdb\Entity\AbstractEntity;
use AxalianTmdb\Exception\RuntimeException;

class HydratorService
{
    /**
     * @var HydratorPluginManager
     */
    protected $hydratorProviderPluginManager;

    /**
     * @param HydratorPluginManager $hydratorPluginManager
     */
    public function __construct(HydratorPluginManager $hydratorPluginManager)
    {
        $this->setHydratorPluginManager($hydratorPluginManager);
    }

    /**
     * @param string $data JSON string containing API response
     * @param string $type Type of data requested
     * @throws RuntimeException
     * @return AbstractEntity
     */
    public function hydrateData($data, $type)
    {
        /** @var HydratorInterface $hydrator */
        $hydrator = $this->getHydratorForType($type);

        if (!$hydrator) {
            throw new RuntimeException('No hydrator registered for object type ' . $type);
        }

        return $hydrator->hydrate(json_decode($data, true), $hydrator->createObject());
    }

    /**
     * @param string $type
     * @return HydratorInterface[]
     */
    public function getHydratorForType($type)
    {
        foreach ($this->getHydrators() as $hydrator) {
            /** @var HydratorInterface $hydrator */
            if ($type == $hydrator->getSupportedType()) {
                return $hydrator;
            }
        }

        return false;
    }

    public function getHydrators()
    {
        $hydrators = array();

        foreach ($this->getHydratorPluginManager()->getCanonicalNames() as $hydratorAlias) {
            $hydrators[] = $this->getHydratorPluginManager()->get($hydratorAlias);
        }

        return $hydrators;
    }

    /**
     * @return HydratorPluginManager
     */
    public function getHydratorPluginManager()
    {
        return $this->hydratorPluginManager;
    }

    /**
     * @param HydratorPluginManager $hydratorProviderPluginManager
     */
    public function setHydratorPluginManager($hydratorPluginManager)
    {
        $this->hydratorPluginManager = $hydratorPluginManager;
    }


}
