<?php

namespace DavidUmoh\Algorithms;

class QuickFindUF implements UnionFindInterface
{

    private $id;
    private $count;

    public function __construct(int $N)
    {
        $this->count = $N;
        $this->id = new \SplFixedArray($N);
        for ($i = 0; $i < $N; $i++) {
            $this->id[$i] = $i;
        }
    }

    public function union(int $p, int $q)
    {
        $pId = $this->id[$p];
        $qId = $this->id[$q];
        if($pId === $qId) return;
        for ($i = 0; $i < $this->id->getSize(); $i++) {
            if ($this->id[$i] === $pId) $this->id[$i] = $qId;
        }
        $this->count--;
    }

    public function connected(int $p, int $q)
    {
        return $this->find($p) === $this->find($q);
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

?>
