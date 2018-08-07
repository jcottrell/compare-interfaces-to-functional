<?php

namespace Test;

require('Calculator.php');
require('CalculationInterface.php');
require('Addition.php');
require('Multiplication.php');

$calc = new Calculator;
$calc->setNumbers(5, 3, 7, 10);
$calc->setCalculation(new Addition, 0);
$result = $calc->calculate();

echo "\nAddition Result: $result\n";

$calc = new Calculator;
$calc->setNumbers(5, 3, 7, 10);
$calc->setCalculation(new Multiplication, 1);
$result = $calc->calculate();

echo "\nMultiplication Result: $result\n";
