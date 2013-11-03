<?php
/**
 * AbstractHydrator
 *
 * @category  AxalianTmdb\Hydrator
 * @package   AxalianTmdb\Hydrator
 * @author    Michel Maas <michel@michelmaas.com>
 */
 

namespace AxalianTmdb\Hydrator;

use AxalianTmdb\Entity\AbstractEntity;
use Zend\Filter\Word\UnderscoreToCamelCase;

class AbstractHydrator
{
    /**
     * Extract values from an object
     *
     * @param  object $object
     * @return array
     * @todo Implement extract function
     */
    public function extract($object)
    {
       return $object;
    }

    /**
     * Hydrate $object with the provided $data.
     *
     * @param  array $data
     * @param  object $object
     * @return object
     */
    public function hydrate(array $data, $object)
    {
        return $this->hydrateFromArray($data, $object);
    }

    /**
     * @param array $array
     * @param AbstractEntity $object
     * @return AbstractEntity
     */
    public function hydrateFromArray(array $array, AbstractEntity $object)
    {
        $filter = new UnderscoreToCamelCase();

        foreach ($array as $key => $value) {
            $function = 'set' . str_replace('_', '', $filter->filter($key));
            $object->$function($value);
        }

        return $object;
    }
}
 