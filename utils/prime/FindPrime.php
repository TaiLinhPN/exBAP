<?php

namespace Utils\IPrime;

class FindPrime
{
    function prime(int $num): bool
    {

        if ($num <= 1) {
            return false;;
        }
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }
}