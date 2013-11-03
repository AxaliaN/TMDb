<?php
/**
 * Country
 *
 * @category  AxalianTmdb\Entity
 * @package   AxalianTmdb\Entity
 * @author    Michel Maas <michel@michelmaas.com>
 */
 

namespace AxalianTmdb\Entity;


class Country extends AbstractEntity
{
    /**
     * @var string
     */
    protected $iso31661;

    /**
     * @var string
     */
    protected $name;

    /**
     * @return string
     */
    public function getIso31661()
    {
        return $this->iso31661;
    }

    /**
     * @param string $iso31661
     * @return Country
     */
    public function setIso31661($iso31661)
    {
        $this->iso31661 = $iso31661;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Country
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
 