<?php
include_once "utils/index.php";

use Utils\Sorter\ISorter;
use Utils\Sorter\BubbleSort;
use Utils\Sorter\QuickSort;

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

function sortArr(ISorter $sorter, $arr){
    $arr = $sorter->sort($arr);
    return $arr;
}

function deleteDuplicates(ISorter $sorter, $arr){
    $arr = $sorter->sort($arr);
    for($i=0; $i < count($arr) -1; $i++){
        if($arr[$i] === $arr[$i+1] ){
            unset($arr[$i]);
        }
    }
    return  $arr;
}

print_r(sortArr(new QuickSort(), $numbers));

?>