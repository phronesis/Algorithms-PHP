<?php
/**
 * Created by PhpStorm.
 * User: dave
 * Date: 21/05/2017
 * Time: 7:32 AM
 */

namespace DavidUmoh\Algorithms;

class QuickUnionUF implements UnionFindInterface{

    private $id;
    private $count;

    public function __construct(int $N)
    {
        $this->count = $N;
        $this->id = new \SplFixedArray($N);
        for($i = 0; $i < $N; $i++){
            $this->id[$i] = $i;
        }
    }

    public function connected(int $p, int $q)
    {
        return $this->root($p) === $this->root($q);
    }

    public function union(int $p, int $q)
    {
        $pId = $this->root($p);
        $qId = $this->root($q);
        if($pId === $qId) return;
        $this->id[$pId] = $qId;
        $this->count--;
    }

    public function count()
    {
        return $this->count;
    }

    public function find($p)
    {
        return $this->id[$p];
    }

    private function root(int $i){
        while($i != $this->id[$i] ) $i = $this->id[$i];
        return $i;
    }
}