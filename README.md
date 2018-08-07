# PHP: OO and Functional Comparison

This is just a simple comparison of an interace example with a possible functional replacement.

The [Object Oriented version](oo.php) was taken from [Stack Overflow](https://stackoverflow.com/questions/26839331/laravel-interface#26840455).

```php
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

```

The [Functional version](fun.php) was created by myself and should be taken as an amateur's attempt:

```php
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
```
