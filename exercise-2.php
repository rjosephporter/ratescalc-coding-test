<?php
/**
 * Write a function that combines two lists by alternatingly taking elements
 * Sample Input:
 * [a,b,c], [1,2,3]
 * Sample Output:
 * [a,1,b,2,c,3]
 *
 * @param $array1
 * @param $array2
 *
 * @return array
 */
function arrayCombine($array1, $array2) {
    $result = [];
    $totalLength = count($array1) + count($array2);
    for($i = 0; $i < $totalLength; $i++) {
        if(isset($array1[$i])) {
            $result[] = $array1[$i];
        }
        if(isset($array2[$i])) {
            $result[] = $array2[$i];
        }
    }

    return $result;
}
