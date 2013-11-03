<?php
/**
 * Created by PhpStorm.
 * User: Michel
 * Date: 2-11-13
 * Time: 10:24
 */

namespace AxalianTmdb\Entity;


use AxalianTmdb\Enum\MediaType;

class Review
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $author;

    /**
     * @var string
     */
    protected $content;

    /**
     * @var string
     */
    protected $iso6391;

    /**
     * @var int
     */
    protected $mediaID;

    /**
     * @var MediaType
     */
    protected $mediaType;

    /**
     * @var string
     */
    protected $mediaTitle;

    /**
     * @var string
     */
    protected $url;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getIso6391()
    {
        return $this->iso6391;
    }

    /**
     * @param string $iso6391
     */
    public function setIso6391($iso6391)
    {
        $this->iso6391 = $iso6391;
    }

    /**
     * @return int
     */
    public function getMediaID()
    {
        return $this->mediaID;
    }

    /**
     * @param int $mediaID
     */
    public function setMediaID($mediaID)
    {
        $this->mediaID = $mediaID;
    }

    /**
     * @return \AxalianTmdb\Enum\MediaType
     */
    public function getMediaType()
    {
        return $this->mediaType;
    }

    /**
     * @param \AxalianTmdb\Enum\MediaType $mediaType
     */
    public function setMediaType($mediaType)
    {
        $this->mediaType = $mediaType;
    }

    /**
     * @return string
     */
    public function getMediaTitle()
    {
        return $this->mediaTitle;
    }

    /**
     * @param string $mediaTitle
     */
    public function setMediaTitle($mediaTitle)
    {
        $this->mediaTitle = $mediaTitle;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
}