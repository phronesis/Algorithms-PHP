<?php


namespace DavidUmoh\Algorithms;

interface UnionFindInterface{

    public function connected(int $p, int $q);

    public function union(int $p, int $q);

    public function find($p);

    public function count();
}