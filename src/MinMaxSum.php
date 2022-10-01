<?php

namespace App;

class MinMaxSum 
{
    protected $minSum = 0;
    protected $maxSum = 0;

    public function minMax(array $array): array {
        // sort array in ascending order
        $sortedArray = $this->sortArray($array);

        $minSum = $this->minSum($sortedArray);
        $maxSum = $this->maxSum($sortedArray);
    }

    public function sortArray(array $array): array {
        if (!$length = count($array)) {
            return $array;
        }

        for ($outer = 0; $outer < $length; $outer++) {
            for ($inner = 0; $inner < $length; $inner++) {
                if ($array[$outer] < $array[$inner]) {
                    $temp = $array[$outer];
                    $array[$outer] = $array[$inner];
                    $array[$inner] = $temp;
                }
            }
        }

        return $array;
    }

}