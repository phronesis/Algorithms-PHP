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

function run(){
    $count = (int) StdIn::readLine();
    $unionFind = new \DavidUmoh\Algorithms\QuickFindUF($count);
    while($line = StdIn::readLine()){
        list($p,$q)  =  explode(" ",$line);
        if($unionFind->connected($p,$q)) continue;
        $unionFind->union($p,$q);
        StdOut::printLn($p." ".$q);
    }

    StdOut::printLn($unionFind->count()." components");
}

run();