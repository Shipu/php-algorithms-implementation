<?php

    function bubbleSort($array = [])
    {
        /*
         * Bubble Sort Works
         * Unorder Array => 3 1 2
         * In Algo -
         * Step 1 => 1 3 2
         * Step 2 => 1 2 3
         */

        // Just ask one time the length of the array
        $n = count($array);
        if(!$n) {
            return $array;
        }
        // Iterate over all the elments
        for($i = $n-2; $i >= 0; $i--) {
            for($j = 0; $j <=$i ; $j++) {
                if($array[$j] > $array[$j+1]){
                    // Swap values
                    $temp = $array[$j+1];
                    $array[$j+1] = $array[$j];
                    $array[$j] = $temp;
                }
            }
        }

        return $array;
    }