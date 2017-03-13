<?php

function insertionSort($array = [])
{
    /*
     * Insertion Sort Works
     * Unorder Array => 3 2 1
     * In Algo -
     * Step 1: 3 2 1
     * Step 2: 2 3 1
     * Step 3: 1 2 3
     */

    // Just ask one time the length of the array
    $n = count($array);
    if(!$n) {
        return $array;
    }
    // Iterate over all the elments
    for($i = 0; $i < $n; $i++){
        $element = $array[$i];
        $j = $i;
        for($j = $i; $j > 0 && $array[$j-1] > $element; $j--) {
            $array[$j] = $array[$j-1];
        }
        $array[$j] = $element;
    }

    return $array;
}
