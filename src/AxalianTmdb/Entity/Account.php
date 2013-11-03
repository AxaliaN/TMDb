<?php

namespace AxalianTmdb\Entity;

class Account
{
    /**
     * @var int;
     */
    protected $id;

    /**
     * @var bool
     */
    protected $includeAdult;

    /**
     * @var string
     */
    protected $iso31661;

    /**
     * @var string
     */
    protected $iso6391;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $username;

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
    public function getIncludeAdult()
    {
        return $this->includeAdult;
    }

    /**
     * @param boolean $includeAdult
     */
    public function setIncludeAdult($includeAdult)
    {
        $this->includeAdult = $includeAdult;
    }

    /**
     * @return string
     */
    public function getIso31661()
    {
        return $this->iso31661;
    }

    /**
     * @param string $iso31661
     */
    public function setIso31661($iso31661)
    {
        $this->iso31661 = $iso31661;
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
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }
} 