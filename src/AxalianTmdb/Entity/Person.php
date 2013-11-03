<?php
/**
 * Created by PhpStorm.
 * User: Michel
 * Date: 2-11-13
 * Time: 10:03
 */

namespace AxalianTmdb\Entity;


use DateTime;

class Person
{
    /**
     * @var bool
     */
    protected $adult;

    /**
     * @var array
     */
    protected $alsoKnownAs;

    /**
     * @var string
     */
    protected $biography;

    /**
     * @var DateTime
     */
    protected $birthday;

    /**
     * @var DateTime
     */
    protected $deathday;

    /**
     * @var string
     */
    protected $homepage;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $placeOfBirth;

    /**
     * @var string
     */
    protected $profilePath;

    /**
     * @return boolean
     */
    public function getAdult()
    {
        return $this->adult;
    }

    /**
     * @param boolean $adult
     */
    public function setAdult($adult)
    {
        $this->adult = $adult;
    }

    /**
     * @return array
     */
    public function getAlsoKnownAs()
    {
        return $this->alsoKnownAs;
    }

    /**
     * @param array $alsoKnownAs
     */
    public function setAlsoKnownAs($alsoKnownAs)
    {
        $this->alsoKnownAs = $alsoKnownAs;
    }

    /**
     * @return string
     */
    public function getBiography()
    {
        return $this->biography;
    }

    /**
     * @param string $biography
     */
    public function setBiography($biography)
    {
        $this->biography = $biography;
    }

    /**
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param \DateTime $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
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
     * @return \DateTime
     */
    public function getDeathday()
    {
        return $this->deathday;
    }

    /**
     * @param \DateTime $deathday
     */
    public function setDeathday($deathday)
    {
        $this->deathday = $deathday;
    }

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
     * @return string
     */
    public function getPlaceOfBirth()
    {
        return $this->placeOfBirth;
    }

    /**
     * @param string $placeOfBirth
     */
    public function setPlaceOfBirth($placeOfBirth)
    {
        $this->placeOfBirth = $placeOfBirth;
    }

    /**
     * @return string
     */
    public function getProfilePath()
    {
        return $this->profilePath;
    }

    /**
     * @param string $profilePath
     */
    public function setProfilePath($profilePath)
    {
        $this->profilePath = $profilePath;
    }
}