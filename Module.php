<?php
/**
 * Created by PhpStorm.
 * User: Michel
 * Date: 3-11-13
 * Time: 8:28
 */

namespace AxalianTmdb;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\ServiceProviderInterface;


class Module implements ServiceProviderInterface, ConfigProviderInterface, AutoloaderProviderInterface
{
    /**
     * Expected to return \Zend\ServiceManager\Config object or array to
     * seed such an object.
     *
     * @return array|\Zend\ServiceManager\Config
     */
    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'AxalianTmdb\Client\Client' => 'AxalianTmdb\ServiceFactory\Client\ClientFactory',
                'AxalianTmdb\Options\ModuleOptions' => 'AxalianTmdb\ServiceFactory\Options\ModuleOptionsFactory',
                'AxalianTmdb\Hydrator\HydratorService' => 'AxalianTmdb\ServiceFactory\Hydrator\HydratorServiceFactory',
                'AxalianTmdb\Hydrator\HydratorPluginManager' => 'AxalianTmdb\ServiceFactory\Hydrator\HydratorPluginManagerFactory',
            )
        );
    }

    /**
     * Returns configuration to merge with application configuration
     *
     * @return array|\Traversable
     */
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    /**
     * Return an array for passing to Zend\Loader\AutoloaderFactory.
     *
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}