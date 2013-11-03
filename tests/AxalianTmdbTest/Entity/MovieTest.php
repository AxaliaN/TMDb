<?php
/**
 * MovieTest
 *
 * @category  AxalianTmdbTest\Entity
 * @package   AxalianTmdbTest\Entity
 * @author    Michel Maas <michel@michelmaas.com>
 */
 

namespace AxalianTmdbTest\Entity;

use AxalianTmdb\Entity\Movie;

class MovieTest extends AbstractEntityTest
{
    /**
     * Get instance of entity to test
     * @return mixed
     */
    protected function getEntity()
    {
        return new Movie();
    }
}
 