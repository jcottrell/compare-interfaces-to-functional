<?php
namespace Test;

class Calculator
{
    protected $result = null;
    protected $numbers = [];
    protected $calculation;

    public function getResult()
    {
        return $this->result;
    }

    public function setNumbers()
    {
        $this->numbers = func_get_args();
    }

    public function setCalculation(CalculationInterface $calculation, int $initial)
    {
        $this->calculation = $calculation;
        $this->initial = $initial;
    }

    public function calculate()
    {
        foreach ($this->numbers as $num) {
            $this->result = $this->calculation->run($num, $this->result ?: $this->initial);
        }

        return $this->result;
    }
}
