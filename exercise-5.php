<?php
/**
 * Write a function that takes a list of strings an prints them, one per line, in a rectangular frame.
 * Sample Input:
 * ["Hello", "World", "in", "a", "frame"]
 * Sample Output:
 *    *********
 *    * Hello *
 *    * World *
 *    * in    *
 *    * a     *
 *    * frame *
 *    *********
 *
 * @param $wordsArray
 *
 * @return string
 */
function printToFrame($wordsArray) {
    $size = max(array_map('strlen', $wordsArray));
    $result = str_repeat('*', $size + 6) . "\n";
    foreach($wordsArray as $word) {
        $result .= "*  " . str_pad($word, $size, " ") . "  *\n";
    }
    $result .= str_repeat('*', $size + 6);
    return $result;
}