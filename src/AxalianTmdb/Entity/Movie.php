<?php
/**
 * Created by PhpStorm.
 * User: Michel
 * Date: 2-11-13
 * Time: 9:10
 */

namespace AxalianTmdb\Entity;


use AxalianTmdb\Enum\MovieStatus;
use DateTime;

class Movie
{
    /**
     * @var bool
     */
    protected $adult;

    /**
     * @var string
     */
    protected $backdrop_path;

    /**
     * @var int
     */
    protected $belongsToCollection;

    /**
     * @var int
     */
    protected $budget;

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
     * @var string
     */
    protected $imdbId;

    /**
     * @var string
     */
    protected $originalTitle;

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
     * @var Company[]
     */
    protected $productionCompanies;

    /**
     * @var array
     */
    protected $productionCountries;

    /**
     * @var DateTime
     */
    protected $releaseDate;

    /**
     * @var int
     */
    protected $revenue;

    /**
     * @var int
     */
    protected $runtime;

    /**
     * @var array
     */
    protected $spokenLanguages;

    /**
     * @var MovieStatus
     */
    protected $status;

    /**
     * @var string
     */
    protected $tagline;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var float
     */
    protected $voteAverage;

    /**
     * @var int
     */
    protected $voteCount;

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
    public function getTagline()
    {
        return $this->tagline;
    }

    /**
     * @param string $tagline
     */
    public function setTagline($tagline)
    {
        $this->tagline = $tagline;
    }

    /**
     * @return \AxalianTmdb\Enum\MovieStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param \AxalianTmdb\Enum\MovieStatus $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return array
     */
    public function getSpokenLanguages()
    {
        return $this->spokenLanguages;
    }

    /**
     * @param array $spokenLanguages
     */
    public function setSpokenLanguages($spokenLanguages)
    {
        $this->spokenLanguages = $spokenLanguages;
    }

    /**
     * @return int
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    /**
     * @param int $runtime
     */
    public function setRuntime($runtime)
    {
        $this->runtime = $runtime;
    }

    /**
     * @return int
     */
    public function getRevenue()
    {
        return $this->revenue;
    }

    /**
     * @param int $revenue
     */
    public function setRevenue($revenue)
    {
        $this->revenue = $revenue;
    }

    /**
     * @return \Zend\Stdlib\DateTime
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * @param \Zend\Stdlib\DateTime $releaseDate
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;
    }

    /**
     * @return array
     */
    public function getProductionCountries()
    {
        return $this->productionCountries;
    }

    /**
     * @param array $productionCountries
     */
    public function setProductionCountries($productionCountries)
    {
        $this->productionCountries = $productionCountries;
    }

    /**
     * @return \AxalianTmdb\Entity\Company[]
     */
    public function getProductionCompanies()
    {
        return $this->productionCompanies;
    }

    /**
     * @param \AxalianTmdb\Entity\Company[] $productionCompanies
     */
    public function setProductionCompanies($productionCompanies)
    {
        $this->productionCompanies = $productionCompanies;
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
     * @return string
     */
    public function getImdbId()
    {
        return $this->imdbId;
    }

    /**
     * @param string $imdbId
     */
    public function setImdbId($imdbId)
    {
        $this->imdbId = $imdbId;
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
     * @return int
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * @param int $budget
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;
    }

    /**
     * @return int
     */
    public function getBelongsToCollection()
    {
        return $this->belongsToCollection;
    }

    /**
     * @param int $belongsToCollection
     */
    public function setBelongsToCollection($belongsToCollection)
    {
        $this->belongsToCollection = $belongsToCollection;
    }

    /**
     * @return string
     */
    public function getBackdropPath()
    {
        return $this->backdrop_path;
    }

    /**
     * @param string $backdrop_path
     */
    public function setBackdropPath($backdrop_path)
    {
        $this->backdrop_path = $backdrop_path;
    }
}