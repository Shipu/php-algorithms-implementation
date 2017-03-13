<?php

require "InsertionSort.php";
require "../vendor/autoload.php";

use PHPUnit\Framework\TestCase;


Class InsertionSortTest extends TestCase
{
    // Given an unorder array
    private $test = [3, 3242, 21, 55, 653, 19, 139, 459, 138, 45349, 19, 2, 1];

    public function testUnOrderArray(){
        $sorted = $this->test;
        sort($sorted, SORT_NUMERIC);
        $this->assertEquals($sorted, insertionSort($this->test));
    }
    public function testOrderArray(){
        $sorted = $this->test;
        sort($sorted, SORT_NUMERIC);
        $this->assertEquals($sorted, insertionSort($this->test));
    }
    public function testNoParameters(){
        $this->assertEmpty(insertionSort([]));
    }

}