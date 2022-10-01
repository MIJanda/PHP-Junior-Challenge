<?php

use PHPUnit\Framework\TestCase;
use App\MinMaxSum;


class MinMaxSumTest extends TestCase
{
    protected $minMaxSum;
    protected $testArray;

    protected function setUp(): void
    {
        $this->minMaxSum = new MinMaxSum();
        $this->testArray = [1, 3, 5, 7, 9];
    }

    protected function tearDown(): void
    {
        $this->minMaxSum->minSum = 0;
        $this->minMaxSum->maxSum = 0;
    }
    
    public function testMinMaxSumReturnsExpectedValues()
    {
        $expected = [16, 24];
        $actual = $this->minMaxSum->minMax($this->testArray);
        $this->assertEquals($expected, $actual);
    }

    public function testSortArray()
    {
        $expected = [1, 3, 5, 7, 9];
        $unsortedArray = [9, 5, 3, 1, 7];
        $actual = $this->minMaxSum->sortArray($unsortedArray);

        $this->assertEquals($expected, $actual);
    }
}
