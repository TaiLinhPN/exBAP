<?php
$numbers = array(1,3,5,4,7,3,4,10,20);

function findMax($arr){
    $max = $arr[0];
    
    foreach ($arr as $value) {
        if ($value > $max) $max = $value;
    }
    return $max;
}

function findMin($arr){
    $min = $arr[0];
    
    foreach ($arr as $value) {
        if ($value < $min) $min = $value;
    }
    return $min;
}

function findEqual($arr){
    $equalArr=[];

    for($i = 0; $i < count($arr); $i++) {
        for($j = $i+1; $j < count($arr); $j++) {
            if ($arr[$j] == $arr[$i]) {
                $equalArr[] = $arr[$i];
                break;
            }
        }
    }
  
    return $equalArr;
}

function deleteFirstKey($arr){
    unset($arr[0]);
    return $arr;
}

function sortArr($arr){
    $len = count($arr);
    for ($i = 0; $i < $len - 1; $i++)
      for ($j = $i + 1; $j < $len; $j++)
        if ($arr[$i] > $arr[$j]) {
          $x = $arr[$j];
            $arr[$j] = $arr[$i];
            $arr[$i] = $x;
        }
    return $arr;
}


print_r( sortArr($numbers));

?>