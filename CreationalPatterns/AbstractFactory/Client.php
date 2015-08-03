<?php

/**
 * Created by PhpStorm.
 * User: vs
 * Date: 03/08/15
 * Time: 12:23
 */
namespace CreationalPatterns\AbstractFactory;

require(__DIR__ . '/../../autoload.php');

class Client
{
    private $_someGraphicObject;
    private $_someTextObject;

    public function __construct()
    {
        $this->_someGraphicObject = new GraphicFactory();
        echo $this->_someGraphicObject->startFactory() . PHP_EOL;

        $this->_someTextObject = new TextFactory();
        echo $this->_someTextObject->startFactory() . PHP_EOL;
    }
}

$worker = new Client();