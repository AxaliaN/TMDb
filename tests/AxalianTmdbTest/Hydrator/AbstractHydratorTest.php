<?php
/**
 * AbstractHydratorTest
 *
 * @category  AxalianTmdbTest\Hydrator
 * @package   AxalianTmdbTest\Hydrator
 * @author    Michel Maas <michel@michelmaas.com>
 */
 

namespace AxalianTmdbTest\Hydrator;

use AxalianTmdb\Entity\AbstractEntity;
use AxalianTmdb\Entity\Genre;
use AxalianTmdb\Hydrator\AbstractHydrator;

class AbstractHydratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var AbstractHydrator
     */
    protected $hydrator;

    public function setUp()
    {
        $this->hydrator = new AbstractHydrator();
    }

    public function testIfHydrateHydratesArray()
    {
        $object = new Genre();

        $data = array(
            'id' => 1,
            'name' => 'Tests'
        );

        $this->hydrator->hydrate($data, $object);

        $this->assertEquals($data['id'], $object->getId());
        $this->assertEquals($data['name'], $object->getName());
    }

    /**
     * The things I do for 100% coverage...
     */
    public function testIfExtractReturnsObject()
    {
        $object = new AbstractEntity();
        $objectExtracted = $this->hydrator->extract($object);

        $this->assertEquals($object, $objectExtracted);
    }
}
