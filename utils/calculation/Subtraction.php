<?php

namespace Utils\Calculation;

class Subtraction implements ICalculation
{
    function calculate(int $a, int $b): int
    {
        $result = $a - $b;
        return $result;
    }
}
