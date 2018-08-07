<?php

namespace Test;

class Addition implements CalculationInterface
{
    public function run(int $num, int $current) : int
    {
        return $current + $num;
    }
}
