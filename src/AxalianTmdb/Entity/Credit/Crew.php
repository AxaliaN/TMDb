<?php
/**
 * Created by PhpStorm.
 * User: Michel
 * Date: 2-11-13
 * Time: 10:31
 */

namespace AxalianTmdb\Entity\Credit;


use AxalianTmdb\Enum\DepartmentType;

class Crew extends AbstractCredit
{
    /**
     * @var DepartmentType
     */
    protected $department;


    protected $job;
} 