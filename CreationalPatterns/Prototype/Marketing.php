<?php
/**
 * Created by PhpStorm.
 * User: vs
 * Date: 04/08/15
 * Time: 14:20
 */

namespace CreationalPatterns\Prototype;


class Marketing extends IAcmePrototype
{
    const UNIT = 'Marketing';
    private $_sales = 'sales';
    private $_promotion = 'promotion';
    private $_strategic = 'strategic planning';

    public function setDept($orgCode)
    {
        switch ($orgCode) {
            case 101:
                $this->dept = $this->_sales;
                break;
            case 102:
                $this->dept = $this->_promotion;
                break;
            case 103:
                $this->dept = $this->_strategic;
                break;

            default:
                $this->dept = 'Unrecognized Marketing';
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