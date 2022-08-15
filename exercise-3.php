<?php
/**
 * Given an array of integers, compute a total score based on the following rules:
 * a. Add 1 point for every even number in the array
 * b. Add 3 points for every odd number in the array
 * c. Add 5 points for every time you encounter an 8 in the array
 * Sample Input:
 * 1,2,3,4,5
 * 8,5,2
 * Sample Output:
 * 11
 * 9
 *
 * @param $intArray
 *
 * @return int|mixed
 */
function totalScore($intArray) {
    $total = 0;
    foreach($intArray as $int) {
        if($int === 8) {
            $total = $total + 5;
        } elseif($int % 2 === 0) {
            $total = $total + 1;
        } else {
            $total = $total + 3;
        }
    }

    return $total;
}
