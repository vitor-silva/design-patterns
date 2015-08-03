<?php

/**
 * Created by PhpStorm.
 * User: vs
 * Date: 03/08/15
 * Time: 12:10
 */
namespace CreationalPatterns\AbstractFactory;

class GraphicFactory extends Creator
{
    protected function factoryMethod()
    {
        $product = new GraphicProduct();
        return ($product->getProperties());
    }
}