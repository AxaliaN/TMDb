<?php
/**
 * Created by PhpStorm.
 * User: Michel
 * Date: 2-11-13
 * Time: 10:30
 */

namespace AxalianTmdb\Entity\Credit;


use AxalianTmdb\Enum\CreditType;
use DateTime;

class AbstractCredit
{
    /**
     * @var CreditType
     */
    protected $type;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $originalTitle;

    /**
     * @var DateTime
     */
    protected $releaseDate;

    /**
     * @var bool
     */
    protected $adult;

    /**
     * @var string
     */
    protected $postPath;

    /**
     * @return \AxalianTmdb\Enum\CreditType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param \AxalianTmdb\Enum\CreditType $type
     */
    public function setType($type)
    {
        $this->type = $type;
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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getOriginalTitle()
    {
        return $this->originalTitle;
    }

    /**
     * @param string $originalTitle
     */
    public function setOriginalTitle($originalTitle)
    {
        $this->originalTitle = $originalTitle;
    }

    /**
     * @return \DateTime
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * @param \DateTime $releaseDate
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;
    }

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
     * @return string
     */
    public function getPostPath()
    {
        return $this->postPath;
    }

    /**
     * @param string $postPath
     */
    public function setPostPath($postPath)
    {
        $this->postPath = $postPath;
    }
} 