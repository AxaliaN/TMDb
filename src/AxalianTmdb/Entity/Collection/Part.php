<?php
/**
 * Created by PhpStorm.
 * User: Michel
 * Date: 2-11-13
 * Time: 9:47
 */

namespace AxalianTmdb\Entity\Collection;

use DateTime;

class Part
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $backdropPath;

    /**
     * @var string
     */
    protected $posterPath;

    /**
     * @var DateTime
     */
    protected $releaseDate;

    /**
     * @var string
     */
    protected $title;

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
    public function getBackdropPath()
    {
        return $this->backdropPath;
    }

    /**
     * @param string $backdropPath
     */
    public function setBackdropPath($backdropPath)
    {
        $this->backdropPath = $backdropPath;
    }

    /**
     * @return string
     */
    public function getPosterPath()
    {
        return $this->posterPath;
    }

    /**
     * @param string $posterPath
     */
    public function setPosterPath($posterPath)
    {
        $this->posterPath = $posterPath;
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
}