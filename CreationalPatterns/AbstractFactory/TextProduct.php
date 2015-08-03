<?php

/**
 * Created by PhpStorm.
 * User: vs
 * Date: 03/08/15
 * Time: 12:14
 */

namespace CreationalPatterns\AbstractFactory;


class TextProduct implements Product
{
    private $_product;

    public function getProperties()
    {
        $this->_product = "this is text.";
        return $this->_product;
    }
}