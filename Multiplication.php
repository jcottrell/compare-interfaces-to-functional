<?php

namespace Test;

class Multiplication implements CalculationInterface
{
    public function run(int $num, int $current) : int
    {
        return $current * $num;
    }
}
