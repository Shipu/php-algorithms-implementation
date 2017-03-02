<?php

require "BubbleSort.php";
require "../vendor/autoload.php";

use PHPUnit\Framework\TestCase;


Class BubbleSortTest extends TestCase
{
    // Given an unorder array
    private $test = [6,6,1,6,5,9,4,100,-4,50];

    public function testOrderAnArray()
    {
        $sorted = $this->test;
        sort($sorted, SORT_NUMERIC);
        $this->assertEquals($sorted, bubbleSort($this->test));
    }

    public function testNoParameters()
    {
        $this->assertEmpty(bubbleSort([]));
    }

}