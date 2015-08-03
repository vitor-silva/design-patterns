<?php
/**
 * Created by PhpStorm.
 * User: vs
 * Date: 03/08/15
 * Time: 12:34
 */
function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
    $fileName = __DIR__ . DIRECTORY_SEPARATOR . $fileName;

    require $fileName;
}

spl_autoload_register('autoload');