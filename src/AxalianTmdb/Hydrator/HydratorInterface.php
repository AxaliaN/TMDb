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
     * Extract values from an object
     *
     * @param  object $object
     * @return array
     */
    public function extract($object);

    /**
     * Hydrate $object with the provided $data.
     *
     * @param  array $data
     * @param  object $object
     * @return object
     */
    public function hydrate(array $data, $object);

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