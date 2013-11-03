<?php
/**
 * Language
 *
 * @category  AxalianTmdb\Entity
 * @package   AxalianTmdb\Entity
 * @author    Michel Maas <michel@michelmaas.com>
 */
 

namespace AxalianTmdb\Entity;


class Language extends AbstractEntity
{
    /**
     * @var string
     */
    protected $iso6391;

    /**
     * @var string
     */
    protected $name;

    /**
     * @return string
     */
    public function getIso6391()
    {
        return $this->iso6391;
    }

    /**
     * @param string $iso6391
     * @return Language
     */
    public function setIso6391($iso6391)
    {
        $this->iso6391 = $iso6391;

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
     * @return Language
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
 