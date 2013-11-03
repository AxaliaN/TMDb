<?php
/**
 * Created by PhpStorm.
 * User: Michel
 * Date: 3-11-13
 * Time: 8:57
 */

namespace AxalianTmdb\ServiceFactory\Options;

use AxalianTmdb\Options\ModuleOptions;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ModuleOptionsFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @throws \RuntimeException
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('Config');

        if (!isset($config['axalian_tmdb'])) {
            throw new \RuntimeException('axalian_tmdb key not found in config.');
        }

        return new ModuleOptions($config['axalian_tmdb']);
    }
}