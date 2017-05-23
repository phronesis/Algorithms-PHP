<?php

namespace DavidUmoh\Algorithms;

class WQUWPathCompressionUF extends WeightedQuickUnionUF{

    protected function root($i)
    {
        while($i != $this->id[$i]){
            $this->id[$i] = $this->id[$this->id[$i]];
            $i = $this->id[$i];
        }
        return $i;
    }
}