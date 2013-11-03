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
        $moduleOptions = $serviceLocator->get('AxalianTmdb\Options\ModuleOptions');
        $client = new GuzzleClient($moduleOptions->getProxy() . '/' . $moduleOptions->getApiVersion());
        $client->setDefaultOption('headers/Accept', 'application/json');
        $client->setDefaultOption('query/api_key', $moduleOptions->getApiKey());

        $hydratorService = $serviceLocator->get('AxalianTmdb\Hydrator\HydratorService');

        return new Client($client, $hydratorService);
    }
}