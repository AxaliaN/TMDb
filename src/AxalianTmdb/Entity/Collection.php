<?php
/**
 * Created by PhpStorm.
 * User: Michel
 * Date: 2-11-13
 * Time: 9:47
 */

namespace AxalianTmdb\Entity;


use AxalianTmdb\Entity\Collection\Part;

class Collection
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
    protected $name;

    /**
     * @var Part[]
     */
    protected $parts;

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
     * @return Part[]
     */
    public function getParts()
    {
        return $this->parts;
    }

    /**
     * @param Part[] $parts
     */
    public function setParts($parts)
    {
        $this->parts = $parts;
    }
} 