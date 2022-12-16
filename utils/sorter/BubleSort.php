<?php
namespace Utils\Sorter;

class BubbleSort implements ISorter {
    private function swap($arr, $i, $j) {
        $tmp = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $tmp;
    }
    function sort(array $arr): array {
        $len = count($arr);
        for ($i = 0; $i < $len - 1; $i ++) {
            for ($j = $i + 1; $j < $len; $j ++) {
                if ($arr[$i] > $arr[$j]) $this->swap($arr, $i, $j);
            }
        }
        return $arr;
    }
}