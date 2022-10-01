<?php

namespace App;

class MinMaxSum 
{
    public int $minSum = 0;
    public int $maxSum = 0;

    public function minMax(array $array) {
        // sort array in ascending order
        $sortedArray = $this->sortArray($array);

        $minSum = $this->minSum($sortedArray);
        $maxSum = $this->maxSum($sortedArray);

        return [$minSum, $maxSum];
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

    public function minSum(array $array): int {
        foreach($array as $key => $value) {
            if ($key == (count($array) - 1)) {
                return $this->minSum;
            }
            $this->minSum += $value;
        }
    }

    public function maxSum(array $array): int {
        foreach($array as $key => $value) {
            if ($key == 0) {
                continue;
            }
            $this->maxSum += $value;
        }

        return $this->maxSum;
    }
}