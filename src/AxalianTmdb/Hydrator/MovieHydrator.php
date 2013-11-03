<?php
/**
 * Created by PhpStorm.
 * User: Michel
 * Date: 3-11-13
 * Time: 9:26
 */

namespace AxalianTmdb\Hydrator;

use AxalianTmdb\Entity\AbstractEntity;
use AxalianTmdb\Entity\Company;
use AxalianTmdb\Entity\Country;
use AxalianTmdb\Entity\Genre;
use AxalianTmdb\Entity\Movie;
use AxalianTmdb\Exception\RuntimeException;
use Zend\Filter\Word\UnderscoreToCamelCase;

class MovieHydrator extends AbstractHydrator implements HydratorInterface
{
    /**
     * Hydrate $object with the provided $data.
     *
     * @param  array $data
     * @param  object $object
     * @return object
     */
    public function hydrate(array $data, $object)
    {
        /** @var Movie $object */
        $this->hydrateFromArray($data, $object);

        $linkedEntityTypes = $object->getLinkedEntityTypes();
        $this->hydrateLinkedEntities($object, $linkedEntityTypes);

        return $object;
    }

    /**
     * @param Movie $object
     * @param array $types
     */
    protected function hydrateLinkedEntities(Movie $object, array $types)
    {
        foreach ($types as $type) {
            switch($type) {
                case 'genre':
                    $getter = 'getGenres';
                    $setter = 'setGenres';
                    $entityName = 'AxalianTmdb\Entity\Genre';
                    break;
                case 'company':
                    $getter = 'getProductionCompanies';
                    $setter = 'setProductionCompanies';
                    $entityName = 'AxalianTmdb\Entity\Company';
                    break;
                case 'country':
                    $getter = 'getProductionCountries';
                    $setter = 'setProductionCountries';
                    $entityName = 'AxalianTmdb\Entity\Country';
                    break;
                case 'language':
                    $getter = 'getSpokenLanguages';
                    $setter = 'setSpokenLanguages';
                    $entityName = 'AxalianTmdb\Entity\Language';
                    break;
                default:
                    throw new RuntimeException('Type ' . $type . ' not supported by this hydrator.');
            }

            $entities = array();

            foreach ($object->$getter() as $item) {
                $entity = new $entityName();

                $this->hydrateFromArray($item, $entity);

                $entities[] = $entity;
            }

            $object->$setter($entities);
        }
    }

    /**
     * Gets the type of object this hydrator supports
     *
     * @return string
     */
    public function getSupportedType()
    {
        return 'movie';
    }

    /**
     * @return AbstractEntity
     */
    public function createObject()
    {
        return new Movie();
    }
}