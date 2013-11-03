<?php
/**
 * Created by PhpStorm.
 * User: Michel
 * Date: 3-11-13
 * Time: 9:27
 */

namespace AxalianTmdb\Hydrator;

use Zend\ServiceManager\AbstractPluginManager;
use Zend\ServiceManager\Exception;

class HydratorPluginManager extends AbstractPluginManager
{

    /**
     * Validate the plugin
     *
     * Checks that the filter loaded is either a valid callback or an instance
     * of FilterInterface.
     *
     * @param  mixed $plugin
     * @return void
     * @throws Exception\RuntimeException if invalid
     */
    public function validatePlugin($plugin)
    {
        if ($plugin instanceof HydratorInterface) {
            return; // Good to go!
        }

        throw new Exception\RuntimeException(
            sprintf(
                'Plugin of type %s is invalid; must implement AxalianTmdb\Hydrator\HydratorInterface',
                (is_object($plugin) ? get_class($plugin) : gettype($plugin))
            )
        );
    }
}