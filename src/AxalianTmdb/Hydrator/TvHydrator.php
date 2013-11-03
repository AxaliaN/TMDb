<?php
/**
 * TvHydrator
 *
 * @category  AxalianTmdb\Hydrator
 * @package   AxalianTmdb\Hydrator
 * @author    Michel Maas <michel@michelmaas.com>
 */
 

namespace AxalianTmdb\Hydrator;


use AxalianTmdb\Entity\AbstractEntity;
use AxalianTmdb\Entity\Tv;

class TvHydrator extends AbstractHydrator implements HydratorInterface
{

    /**
     * Extract values from an object
     *
     * @param  object $object
     * @return array
     */
    public function extract($object)
    {
        // TODO: Implement extract() method.
    }

    /**
     * @return AbstractEntity
     */
    public function createObject()
    {
        return new Tv();
    }

    /**
     * Gets the type of object this hydrator supports
     *
     * @return string
     */
    public function getSupportedType()
    {
        return 'tv';
    }
}
 