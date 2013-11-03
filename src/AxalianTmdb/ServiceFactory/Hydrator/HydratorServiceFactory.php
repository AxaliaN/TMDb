<?php
/**
 * HydratorServiceFactory
 *
 * @category  AxalianTmdb\ServiceFactory\Hydrator
 * @package   AxalianTmdb\ServiceFactory\Hydrator
 * @author    Michel Maas <michel@michelmaas.com>
 */
 

namespace AxalianTmdb\ServiceFactory\Hydrator;


use AxalianTmdb\Hydrator\HydratorPluginManager;
use AxalianTmdb\Hydrator\HydratorService;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class HydratorServiceFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /** @var HydratorPluginManager $pluginManager */
        $pluginManager = $serviceLocator->get('AxalianTmdb\Hydrator\HydratorPluginManager');
        return new HydratorService($pluginManager);
    }
}
 