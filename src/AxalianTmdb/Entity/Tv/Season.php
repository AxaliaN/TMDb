<?php
/**
 * Created by PhpStorm.
 * User: Michel
 * Date: 2-11-13
 * Time: 10:06
 */

namespace AxalianTmdb\Entity\Tv;


use DateTime;

class Season {
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
    protected $overview;

    /**
     * @var int
     */
    protected $seasonNumber;

    /**
     * @var string
     */
    protected $posterPath;

    /**
     * @var DateTime
     */
    protected $airDate;

    /**
     * @var Episode[]
     */
    protected $episodes;

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
     * @return \AxalianTmdb\Entity\Tv\Episode[]
     */
    public function getEpisodes()
    {
        return $this->episodes;
    }

    /**
     * @param \AxalianTmdb\Entity\Tv\Episode[] $episodes
     */
    public function setEpisodes($episodes)
    {
        $this->episodes = $episodes;
    }

    /**
     * @return string
     */
    public function getOverview()
    {
        return $this->overview;
    }

    /**
     * @param string $overview
     */
    public function setOverview($overview)
    {
        $this->overview = $overview;
    }

    /**
     * @return int
     */
    public function getSeasonNumber()
    {
        return $this->seasonNumber;
    }

    /**
     * @param int $seasonNumber
     */
    public function setSeasonNumber($seasonNumber)
    {
        $this->seasonNumber = $seasonNumber;
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
    public function getAirDate()
    {
        return $this->airDate;
    }

    /**
     * @param \DateTime $airDate
     */
    public function setAirDate($airDate)
    {
        $this->airDate = $airDate;
    }
} 