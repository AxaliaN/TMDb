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
}
 