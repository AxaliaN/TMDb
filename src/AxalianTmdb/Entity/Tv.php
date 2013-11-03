<?php
/**
 * Created by PhpStorm.
 * User: Michel
 * Date: 2-11-13
 * Time: 9:59
 */

namespace AxalianTmdb\Entity;


use AxalianTmdb\Entity\Tv\Network;
use AxalianTmdb\Entity\Tv\Season;
use AxalianTmdb\Enum\TvStatus;
use DateTime;

class Tv extends AbstractEntity
{
    /**
     * @var string
     */
    protected $backdropPath;

    /**
     * @var Person
     */
    protected $createdBy;

    /**
     * @var array
     */
    protected $episodeRunTime;

    /**
     * @var DateTime
     */
    protected $firstAirDate;

    /**
     * @var Genre[]
     */
    protected $genres;

    /**
     * @var string
     */
    protected $homepage;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var bool
     */
    protected $inProduction;

    /**
     * @var array
     */
    protected $languages;

    /**
     * @var DateTime
     */
    protected $lastAirDate;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var Network[]
     */
    protected $networks;

    /**
     * @var int
     */
    protected $numberOfEpisodes;

    /**
     * @var int
     */
    protected $numberOfSeasons;

    /**
     * @var string
     */
    protected $originalName;

    /**
     * @var array
     */
    protected $originCountry;

    /**
     * @var string
     */
    protected $overview;

    /**
     * @var float
     */
    protected $popularity;

    /**
     * @var string
     */
    protected $posterPath;

    /**
     * @var Season[]
     */
    protected $seasons;

    /**
     * @var TvStatus
     */
    protected $status;

    /**
     * @var float
     */
    protected $voteAverage;

    /**
     * @var int
     */
    protected $voteCount;

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
     * @return \AxalianTmdb\Entity\Person
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param \AxalianTmdb\Entity\Person $createdBy
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @return array
     */
    public function getEpisodeRunTime()
    {
        return $this->episodeRunTime;
    }

    /**
     * @param array $episodeRunTime
     */
    public function setEpisodeRunTime($episodeRunTime)
    {
        $this->episodeRunTime = $episodeRunTime;
    }

    /**
     * @return DateTime
     */
    public function getFirstAirDate()
    {
        return $this->firstAirDate;
    }

    /**
     * @param DateTime $firstAirDate
     */
    public function setFirstAirDate($firstAirDate)
    {
        $this->firstAirDate = $firstAirDate;
    }

    /**
     * @return \AxalianTmdb\Entity\Genre[]
     */
    public function getGenres()
    {
        return $this->genres;
    }

    /**
     * @param \AxalianTmdb\Entity\Genre[] $genres
     */
    public function setGenres($genres)
    {
        $this->genres = $genres;
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
     * @return boolean
     */
    public function getInProduction()
    {
        return $this->inProduction;
    }

    /**
     * @param boolean $inProduction
     */
    public function setInProduction($inProduction)
    {
        $this->inProduction = $inProduction;
    }

    /**
     * @return array
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * @param array $languages
     */
    public function setLanguages($languages)
    {
        $this->languages = $languages;
    }

    /**
     * @return DateTime
     */
    public function getLastAirDate()
    {
        return $this->lastAirDate;
    }

    /**
     * @param DateTime $lastAirDate
     */
    public function setLastAirDate($lastAirDate)
    {
        $this->lastAirDate = $lastAirDate;
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
     * @return \AxalianTmdb\Entity\Tv\Network[]
     */
    public function getNetworks()
    {
        return $this->networks;
    }

    /**
     * @param \AxalianTmdb\Entity\Tv\Network[] $networks
     */
    public function setNetworks($networks)
    {
        $this->networks = $networks;
    }

    /**
     * @return int
     */
    public function getNumberOfEpisodes()
    {
        return $this->numberOfEpisodes;
    }

    /**
     * @param int $numberOfEpisodes
     */
    public function setNumberOfEpisodes($numberOfEpisodes)
    {
        $this->numberOfEpisodes = $numberOfEpisodes;
    }

    /**
     * @return int
     */
    public function getNumberOfSeasons()
    {
        return $this->numberOfSeasons;
    }

    /**
     * @param int $numberOfSeasons
     */
    public function setNumberOfSeasons($numberOfSeasons)
    {
        $this->numberOfSeasons = $numberOfSeasons;
    }

    /**
     * @return string
     */
    public function getOriginalName()
    {
        return $this->originalName;
    }

    /**
     * @param string $originalName
     */
    public function setOriginalName($originalName)
    {
        $this->originalName = $originalName;
    }

    /**
     * @return array
     */
    public function getOriginCountry()
    {
        return $this->originCountry;
    }

    /**
     * @param array $originCountry
     */
    public function setOriginCountry($originCountry)
    {
        $this->originCountry = $originCountry;
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
     * @return float
     */
    public function getPopularity()
    {
        return $this->popularity;
    }

    /**
     * @param float $popularity
     */
    public function setPopularity($popularity)
    {
        $this->popularity = $popularity;
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
     * @return \AxalianTmdb\Entity\Tv\Season[]
     */
    public function getSeasons()
    {
        return $this->seasons;
    }

    /**
     * @param \AxalianTmdb\Entity\Tv\Season[] $seasons
     */
    public function setSeasons($seasons)
    {
        $this->seasons = $seasons;
    }

    /**
     * @return \AxalianTmdb\Enum\TvStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param \AxalianTmdb\Enum\TvStatus $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return float
     */
    public function getVoteAverage()
    {
        return $this->voteAverage;
    }

    /**
     * @param float $voteAverage
     */
    public function setVoteAverage($voteAverage)
    {
        $this->voteAverage = $voteAverage;
    }

    /**
     * @return int
     */
    public function getVoteCount()
    {
        return $this->voteCount;
    }

    /**
     * @param int $voteCount
     */
    public function setVoteCount($voteCount)
    {
        $this->voteCount = $voteCount;
    }
} 