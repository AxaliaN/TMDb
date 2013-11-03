<?php
/**
 * Created by PhpStorm.
 * User: Michel
 * Date: 2-11-13
 * Time: 10:30
 */

namespace AxalianTmdb\Entity\Credit;


class Cast extends AbstractCredit
{
    /**
     * @var string
     */
    protected $character;

    /**
     * @return string
     */
    public function getCharacter()
    {
        return $this->character;
    }

    /**
     * @param string $character
     */
    public function setCharacter($character)
    {
        $this->character = $character;
    }
}