<?php

/**
 * Created by PhpStorm.
 * User: vs
 * Date: 03/08/15
 * Time: 12:19
 */
namespace CreationalPatterns\AbstractFactory;

class GraphicProduct implements Product
{
    private $_product;

    public function getProperties()
    {
        $this->_product = "this a graphic.";
        return $this->_product;
    }
}