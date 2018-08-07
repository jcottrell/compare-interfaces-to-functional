<?php

function numbers(int ...$xs) : array
{
    return $xs;
}

function calculate(Closure $calculator, array $numbers, int $start) : int
{
    return array_reduce($numbers, $calculator, $start);
}

$addition = function (int $soFar, int $x) : int {
    return $soFar + $x;
};

$multiplication = function (int $soFar, int $x) : int {
    return $soFar * $x;
};

$result = calculate($addition, numbers(5, 3, 7, 10), 0);
echo "\nAddition Result: $result\n";

$result = calculate($multiplication, numbers(5, 3, 7, 10), 1);
echo "\nMultiplication Result: $result\n";
