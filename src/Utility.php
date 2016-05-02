<?php
/**
 * Created by PhpStorm.
 * User: Ross
 * Date: 30/04/2016
 * Time: 17:01
 */
namespace Itb;

class Utility{
    public static function controller($namespace, $shortName){
        list($shortClass,$shortMethod) = explode('/',$shortName,2);

        $shortClassCapitlise = ucfirst($shortClass);

        $namespaceClassAction = sprintf($namespace.'\\'.$shortClassCapitlise.'Controller::'.$shortMethod.'Action');
        return $namespaceClassAction;
    }
}