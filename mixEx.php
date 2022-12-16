<?php

include_once "utils/index.php";

use Utils\Calculation\ICalculation;
use Utils\Calculation\Addition;
use Utils\Calculation\Subtraction;
use Utils\Calculation\Multiplication;
use Utils\Calculation\Division;

use Utils\IPrime\FindPrime;

function quadraticEquation2($a, $b, $c) {
    if ($a == 0) {
        if ($b == 0) {
            echo ("no solution");
        } else {
            echo ("solution: " . (- $c / $b));
        }
        return;
    }
    $delta = $b * $b - 4 * $a * $c;
    $x = "";
    $y = "";

    if ($delta > 0) {
        $x = (- $b + sqrt ( $delta )) / (2 * $a);
        $y = (- $b - sqrt ( $delta )) / (2 * $a);
        echo ("x = " . $x . " and y = " . $y);
    } else if ($delta == 0) {
        $x = (- $b / (2 * $a));
        echo ("x = y = " . $x);
    }
}

function totalOfPrimes(ICalculation $calculation, FindPrime $prime ,  $num){
    $total = 0;
    for ($i = 0; $i <= $num; $i++){
        $findPrime = $prime->prime($i);
        if($findPrime){
            $total = $calculation-> calculate($total, $i);
        }
    }
    return $total;
}

function Calculator(string $calculation, int $a, int $b){
  
    switch ($calculation) {
        case "+":{
                $result = new Addition();
                return $result -> calculate($a, $b);}
        case "-": {
                $result = new Subtraction();
                return $result->calculate($a, $b);
            }
        case "*": {
                $result = new Multiplication();
                return $result->calculate($a, $b);
            }
        case "/": {
                $result = new Division();
                return $result->calculate($a, $b);
            }
        default:
            return "Invalid";
    }
    
      
}

print_r(Calculator('+',1,100));

?>