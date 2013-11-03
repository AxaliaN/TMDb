<?php
/**
 * AbstractEntity
 *
 * @category  AxalianTmdb\Entity
 * @package   AxalianTmdb\Entity
 * @author    Michel Maas <michel@michelmaas.com>
 */
 

namespace AxalianTmdb\Entity;


use Zend\Filter\Word\UnderscoreToCamelCase;

class AbstractEntity
{
    /**
     * @return array
     */
    public function getLinkedEntityTypes()
    {
        return $this->linkedEntityTypes;
    }
}
