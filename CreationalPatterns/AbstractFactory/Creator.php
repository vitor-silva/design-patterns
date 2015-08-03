<?php

/**
 * Created by PhpStorm.
 * User: vs
 * Date: 03/08/15
 * Time: 12:02
 */
namespace CreationalPatterns\AbstractFactory;

abstract class Creator
{
    public function startFactory()
    {
        $mfg = $this->factoryMethod();
        return $mfg;
    }

    protected abstract function factoryMethod();
}