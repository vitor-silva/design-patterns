<?php
/**
 * Created by PhpStorm.
 * User: vs
 * Date: 04/08/15
 * Time: 14:30
 */

namespace CreationalPatterns\Prototype;


class Engineering extends IAcmePrototype
{
    const UNIT = 'Engineering';
    private $_development = 'programming';
    private $_design = 'digital artwork';
    private $_sysAd = 'system administration';

    public function setDept($orgCode)
    {
        switch ($orgCode) {
            case 301:
                $this->dept = $this->_development;
                break;
            case 302:
                $this->dept = $this->_design;
                break;
            case 303:
                $this->dept = $this->_sysAd;
                break;

            default:
                $this->dept = 'Unrecognized Engineering';
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