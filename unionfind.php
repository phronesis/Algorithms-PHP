<?php
/**
 * Created by PhpStorm.
 * User: dave
 * Date: 20/05/2017
 * Time: 11:44 AM
 */
include_once 'bootstrap.php';

use DavidUmoh\Algorithms\Utilities\StdIn;
use DavidUmoh\Algorithms\Utilities\StdOut;

function run($algorithm){

    $count = (int) StdIn::readLine();
    $unionFind = algoFactory($algorithm,$count);
    while($line = StdIn::readLine()){
        list($p,$q)  =  explode(" ",$line);
        if($unionFind->connected($p,$q)) continue;
        $unionFind->union($p,$q);
        StdOut::printLn($p." ".$q);
    }
    StdOut::printLn($unionFind->count()." components");
    StdOut::printLn("Algorithm: ".$algorithm);
}

function algoFactory($algorithm,$count){

    $algorithmClass =  "\\DavidUmoh\\Algorithms\\{$algorithm}UF";
    if(!class_exists($algorithmClass)) {
        StdOut::printLn("Class ".$algorithmClass." does not exist");
        exit(-1);
    }
        $class = new $algorithmClass($count);

    return $class;
}
$algorithm = $argv[1];
run($algorithm);