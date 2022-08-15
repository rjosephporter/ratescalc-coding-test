<?php
/**
 * Write a function that translates a text to Pig Latin and back. English is translated to Pig Latin by
 * taking the first letter of every word, moving it to the end of the word and adding ‘ay’.
 * Sample Input:
 * a. "The quick brown fox"
 * b. "Ackpay ymay oxbay ithway ivefay ozenday iquorlay ugsjay"
 * Sample Output:
 * a. "Hetay uickqay rownbay oxfay"
 * b. "Pack my box with five dozen liquor jugs"
 *
 * @param string $input
 *
 * @return string
 */
function translateSentence(string $input) {
    // Assign each word in the sentence into an array
    $inputArray = explode(" ", $input);

    // Determine if sentence is English or Pig Latin
    $counter = 0;
    foreach($inputArray as $word) {
        if(str_ends_with($word, 'ay')) {
            $counter++;
        }
    }

    $translationArray = [];

    if($counter === count($inputArray)) {
        // Translate to English
        foreach($inputArray as $word) {
            // Remove the last "ay" from the word
            $englishWord = substr($word, 0, strlen($word) - 2);

            // Get the last letter of the word and move it to first
            $englishWord = strtolower(substr($englishWord, -1) . substr($englishWord, 0, strlen($englishWord) - 1));

            // Add the English word to the new array
            $translationArray[] = $englishWord;
        }
    } else {
        // Translate to Pig Latin
        foreach($inputArray as $word) {
            // Get first character of the word
            $first = substr($word, 0, 1);

            // Get remaining letters of the word
            $remaining = substr($word, 1, strlen($word) - 1);

            // Add the pig latin word to the new array
            $translationArray[] = strtolower($remaining.$first."ay");
        }
    }

    return ucfirst(implode(" ", $translationArray));
}
