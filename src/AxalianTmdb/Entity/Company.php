<?php
/**
 * Created by PhpStorm.
 * User: Michel
 * Date: 2-11-13
 * Time: 9:20
 */

namespace AxalianTmdb\Entity;


class Company extends AbstractEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $headquarters;

    /**
     * @var string
     */
    protected $homepage;

    /**
     * @var string
     */
    protected $logoPath;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $parentCompany;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getHeadquarters()
    {
        return $this->headquarters;
    }

    /**
     * @param string $headquarters
     */
    public function setHeadquarters($headquarters)
    {
        $this->headquarters = $headquarters;
    }

    /**
     * @return string
     */
    public function getHomepage()
    {
        return $this->homepage;
    }

    /**
     * @param string $homepage
     */
    public function setHomepage($homepage)
    {
        $this->homepage = $homepage;
    }

    /**
     * @return string
     */
    public function getLogoPath()
    {
        return $this->logoPath;
    }

    /**
     * @param string $logoPath
     */
    public function setLogoPath($logoPath)
    {
        $this->logoPath = $logoPath;
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
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getParentCompany()
    {
        return $this->parentCompany;
    }

    /**
     * @param int $parentCompany
     */
    public function setParentCompany($parentCompany)
    {
        $this->parentCompany = $parentCompany;
    }
}