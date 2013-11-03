<?php
/**
 * MovieHydratorTest
 *
 * @category  AxalianTmdbTest\Hydrator
 * @package   AxalianTmdbTest\Hydrator
 * @author    Michel Maas <michel@michelmaas.com>
 */
 

namespace AxalianTmdbTest\Hydrator;


use AxalianTmdb\Entity\Movie;
use AxalianTmdb\Exception\RuntimeException;
use AxalianTmdb\Hydrator\MovieHydrator;

class MovieHydratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var MovieHydrator
     */
    protected $hydrator;

    public function setUp()
    {
        $this->hydrator = new MovieHydrator();
    }

    public function testIfHydratorHydratesCorrectly()
    {
        $object = $this->hydrator->createObject();

        $data = json_decode('{"adult":false,"backdrop_path":"/8uO0gUM8aNqYLs1OsTBQiXu0fEv.jpg","belongs_to_collection":null,"budget":63000000,"genres":[{"id":28,"name":"Action"},{"id":18,"name":"Drama"},{"id":53,"name":"Thriller"}],"homepage":"","id":550,"imdb_id":"tt0137523","original_title":"Fight Club","overview":"A ticking-time-bomb insomniac and a slippery soap salesman channel primal male aggression into a shocking new form of therapy. Their concept catches on, with underground \"fight clubs\" forming in every town, until an eccentric gets in the way and ignites an out-of-control spiral toward oblivion.","popularity":14.3792044669819,"poster_path":"/2lECpi35Hnbpa4y46JX0aY3AWTy.jpg","production_companies":[{"name":"20th Century Fox","id":25},{"name":"Fox 2000 Pictures","id":711},{"name":"Regency Enterprises","id":508}],"production_countries":[{"iso_3166_1":"DE","name":"Germany"},{"iso_3166_1":"US","name":"United States of America"}],"release_date":"1999-10-14","revenue":100853753,"runtime":139,"spoken_languages":[{"iso_639_1":"en","name":"English"}],"status":"Released","tagline":"How much can you know about yourself if you\'ve never been in a fight?","title":"Fight Club","vote_average":7.6,"vote_count":2671}', true);

        $this->hydrator->hydrate($data, $object);

        $this->assertFalse($object->getAdult());
        $this->assertEquals('/8uO0gUM8aNqYLs1OsTBQiXu0fEv.jpg', $object->getBackdropPath());
    }

    /**
     * @expectedException \AxalianTmdb\Exception\RuntimeException
     * @expectedExceptionMessaage Type dummy not supported by this hydrator.
     */
    public function testIfExceptionThrownWhenTryingToGetUnsupportedLinkedEntity()
    {
        $object = \Mockery::mock('AxalianTmdb\Entity\Movie')
                ->shouldReceive('getLinkedEntityTypes')
                ->andReturn(array('dummy'))
                ->getMock();

        $data = array();

        $this->hydrator->hydrate($data, $object);
    }

    public function testIfSupportedTypeReturned()
    {
        $this->assertEquals('movie', $this->hydrator->getSupportedType());
    }
}
 