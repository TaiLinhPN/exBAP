<?php

namespace Utils\Calculation;

class Addition implements ICalculation
{
    function calculate(int $a, int $b): int
    {
        $result = $a + $b;
        return $result;
    }
}
