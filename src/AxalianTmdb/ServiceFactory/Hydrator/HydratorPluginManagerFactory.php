<?php
/**
 * HydratorPluginManager
 *
 * @category  AxalianTmdb\ServiceFactory\Hydrator
 * @package   AxalianTmdb\ServiceFactory\Hydrator
 * @author    Michel Maas <michel@michelmaas.com>
 */
 

namespace AxalianTmdb\ServiceFactory\Hydrator;

use AxalianTmdb\Hydrator\HydratorPluginManager;
use AxalianTmdb\Options\ModuleOptions;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class HydratorPluginManagerFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /** @var ModuleOptions $moduleOptions */
        $moduleOptions = $serviceLocator->get('AxalianTmdb\Options\ModuleOptions');

        $pluginManager = new HydratorPluginManager($moduleOptions->getHydrators());

        return $pluginManager;
    }
}
