<?php
/**
 * Created by PhpStorm.
 * User: Michel
 * Date: 2-11-13
 * Time: 10:11
 */

namespace AxalianTmdb\Entity\Tv;


use DateTime;

class Episode
{
    /**
     * @var DateTime
     */
    protected $airDate;

    /**
     * @var int
     */
    protected $episodeNumber;

    /**
     * @var name
     */
    protected $name;

    /**
     * @var string
     */
    protected $overview;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $productionCode;

    /**
     * @var int
     */
    protected $seasonNumber;

    /**
     * @var string
     */
    protected $stillPath;

    /**
     * @var float
     */
    protected $voteAverage;

    /**
     * @var int
     */
    protected $voteCount;
} 