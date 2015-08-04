<?php
/**
 * Created by PhpStorm.
 * User: vs
 * Date: 04/08/15
 * Time: 14:27
 */

namespace CreationalPatterns\Prototype;


class Management extends IAcmePrototype
{
    const UNIT = 'Management';
    private $_research = 'research';
    private $_plan = 'planning';
    private $_operations = 'operations';

    public function setDept($orgCode)
    {
        switch ($orgCode) {
            case 201:
                $this->dept = $this->_research;
                break;
            case 202:
                $this->dept = $this->_plan;
                break;
            case 203:
                $this->dept = $this->_operations;
                break;

            default:
                $this->dept = 'Unrecognized Management';
        }
    }

    public function getDept()
    {
        return $this->dept;
    }

    function __clone()
    {
    }
}