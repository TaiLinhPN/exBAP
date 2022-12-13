<?php
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
print_r( quadraticEquation2(2,4,0));

?>