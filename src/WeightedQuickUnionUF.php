<?php

namespace DavidUmoh\Algorithms;

class WeightedQuickUnionUF implements UnionFindInterface{

    protected $id;
    protected $count;
    protected $sz;

    public function __construct(int $N)
    {
        $this->count = $N;
        $this->id = new \SplFixedArray($N);
        $this->sz = new \SplFixedArray($N);
        for($i = 0; $i < $N; $i++) {
            $this->id[$i] = $i;
            $this->sz[$i] = 1;
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

        if($this->sz[$pId] < $this->sz[$qId]){
            $this->id[$pId] = $qId;
            $this->sz[$qId] += $this->sz[$pId];
        }else{
            $this->id[$qId] = $pId;
            $this->sz[$pId] += $this->sz[$qId];
        }
        $this->count--;
    }

    protected function root($i){
        while($i != $this->id[$i]) $i = $this->id[$i];
        return $i;
    }

    public function find($p)
    {
        return $this->id[$p];
    }

    public function count()
    {
        return $this->count;
    }
}