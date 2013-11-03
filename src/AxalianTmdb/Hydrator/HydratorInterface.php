<?php
/**
 * Created by PhpStorm.
 * User: Michel
 * Date: 3-11-13
 * Time: 9:32
 */

namespace AxalianTmdb\Hydrator;

use AxalianTmdb\Entity\AbstractEntity;
use \Zend\Stdlib\Hydrator\HydratorInterface as ZendHydratorInterface;

interface HydratorInterface extends ZendHydratorInterface
{
    /**
     * @return AbstractEntity
     */
    public function createObject();

    /**
     * Gets the type of object this hydrator supports
     *
     * @return string
     */
    public function getSupportedType();
}