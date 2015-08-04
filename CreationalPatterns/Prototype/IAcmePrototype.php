<?php

/**
 * Created by PhpStorm.
 * User: vs
 * Date: 04/08/15
 * Time: 14:12
 */
namespace CreationalPatterns\Prototype;

abstract class IAcmePrototype
{
    protected $name;
    protected $id;
    protected $employeePic;
    protected $dept;

    abstract function getDept();

    abstract function setDept($orgCode);

    abstract function __clone();

    public function getName()
    {
        return $this->name;
    }

    public function setName($emName)
    {
        $this->name = $emName;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($emId)
    {
        $this->id = $emId;
    }

    public function setPic($ePic)
    {
        $this->employeePic = $ePic;
    }

    public function getPic()
    {
        return $this->employeePic;
    }
}