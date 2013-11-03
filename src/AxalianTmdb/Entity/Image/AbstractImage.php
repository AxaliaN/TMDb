<?php
/**
 * Created by PhpStorm.
 * User: Michel
 * Date: 2-11-13
 * Time: 9:55
 */

namespace AxalianTmdb\Entity\Image;


use AxalianTmdb\Enum\ImageType;

class AbstractImage
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var ImageType
     */
    protected $type;

    /**
     * @var float
     */
    protected $aspectRatio;

    /**
     * @var string
     */
    protected $filePath;

    /**
     * @var int
     */
    protected $height;

    /**
     * @var string|null
     */
    protected $iso6391;

    /**
     * @var string
     */
    protected $width;

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
     * @return \AxalianTmdb\Enum\ImageType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param \AxalianTmdb\Enum\ImageType $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return float
     */
    public function getAspectRatio()
    {
        return $this->aspectRatio;
    }

    /**
     * @param float $aspectRatio
     */
    public function setAspectRatio($aspectRatio)
    {
        $this->aspectRatio = $aspectRatio;
    }

    /**
     * @return string
     */
    public function getFilePath()
    {
        return $this->filePath;
    }

    /**
     * @param string $filePath
     */
    public function setFilePath($filePath)
    {
        $this->filePath = $filePath;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return null|string
     */
    public function getIso6391()
    {
        return $this->iso6391;
    }

    /**
     * @param null|string $iso6391
     */
    public function setIso6391($iso6391)
    {
        $this->iso6391 = $iso6391;
    }

    /**
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param string $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }
} 