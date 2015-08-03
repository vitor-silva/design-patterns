<?php

/**
 * Created by PhpStorm.
 * User: vs
 * Date: 03/08/15
 * Time: 12:05
 */
namespace CreationalPatterns\AbstractFactory;

class TextFactory extends Creator
{
    protected function factoryMethod()
    {
        $product = new TextProduct();
        return ($product->getProperties());
    }
}