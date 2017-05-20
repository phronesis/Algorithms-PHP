<?php
/**
 * Created by PhpStorm.
 * User: dave
 * Date: 19/05/2017
 * Time: 5:02 PM
 */
namespace DavidUmoh\Algorithms\Utilities;

class StdIn {


    public static function readLine(){
        return trim(fgets(STDIN));
    }
}