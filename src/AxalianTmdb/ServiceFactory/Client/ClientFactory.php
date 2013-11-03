<?php
/**
 * Created by PhpStorm.
 * User: Michel
 * Date: 3-11-13
 * Time: 8:25
 */

namespace AxalianTmdb\ServiceFactory\Client;

use AxalianTmdb\Client\Client;
use AxalianTmdb\Options\ModuleOptions;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Guzzle\Http\Client as GuzzleClient;

class ClientFactory implements FactoryInterface
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
        $moduleOptions = $serviceLocator->get('AxalianTmdb\Options\ModuleOption');
        $client = new GuzzleClient($moduleOptions->getProxy());

        return new Client($client);
    }
}