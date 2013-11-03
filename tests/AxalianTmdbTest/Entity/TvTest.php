<?php
/**
 * TvTest
 *
 * @category  AxalianTmdbTest\Entity
 * @package   AxalianTmdbTest\Entity
 * @author    Michel Maas <michel@michelmaas.com>
 */
 

namespace AxalianTmdbTest\Entity;


use AxalianTmdb\Entity\Tv;

class TvTest extends AbstractEntityTest
{

    /**
     * Get instance of entity to test
     * @return mixed
     */
    protected function getEntity()
    {
        return new Tv();
    }
}
 