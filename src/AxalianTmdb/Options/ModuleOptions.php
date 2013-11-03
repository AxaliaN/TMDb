<?php
 /**
 * ModuleOptions
 *
 * @category  AxalianTmdb\Options
 * @package   AxalianTmdb\Options
 * @copyright 2013 ACSI Holding bv (http://www.acsi.eu)
 * @version   SVN: $Id$
 */

namespace AxalianTmdb\Options;

use Zend\ServiceManager\Config;
use Zend\Stdlib\AbstractOptions;

class ModuleOptions extends AbstractOptions
{
    /**
     * @var string API key
     */
    protected $apiKey;

    /**
     * @var string The proxy to use
     */
    protected $proxy;

    /**
     * @var int The version of the TMDb API to use
     */
    protected $apiVersion;

    /**
     * @var array
     */
    protected $hydrators;

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     * @return ModuleOptions $this
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    /**
     * @return string
     */
    public function getProxy()
    {
        return $this->proxy;
    }

    /**
     * @param string $proxy
     */
    public function setProxy($proxy)
    {
        $this->proxy = $proxy;
    }

    /**
     * @return int
     */
    public function getApiVersion()
    {
        return $this->apiVersion;
    }

    /**
     * @param int $apiVersion
     */
    public function setApiVersion($apiVersion)
    {
        $this->apiVersion = $apiVersion;
    }

    /**
     * @return array
     */
    public function getHydrators()
    {
        return $this->hydrators;
    }

    /**
     * @param array $hydrators
     */
    public function setHydrators($hydrators)
    {
        $this->hydrators = new Config($hydrators);
    }

}
