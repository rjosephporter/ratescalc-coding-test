<?php
/**
 * Given students' names along with the grade that they are in, create a roster for the school and
 * display each list in alphabetical order.
 * Sample Output:
 * Grade 1
 *  Ana
 *  Bert
 *  Ernie
 * Grade 2
 *  Andy
 *  Bob
 *  David
 */
$students = [
    [
        'name' => 'David',
        'grade' => 'Grade 2',
    ],
    [
        'name' => 'Ernie',
        'grade' => 'Grade 1',
    ],
    [
        'name' => 'Bob',
        'grade' => 'Grade 2',
    ],
    [
        'name' => 'Bert',
        'grade' => 'Grade 1',
    ],
    [
        'name' => 'Andy',
        'grade' => 'Grade 2',
    ],
    [
        'name' => 'Ana',
        'grade' => 'Grade 1',
    ],
];

function displayRoster($students) {
    $result = [];
    foreach($students as $student) {
        $result[$student['grade']][] = $student['name'];
    }

    ksort($result);

    foreach($result as &$students) {
        sort($students);
    }

    return $result;
}

displayRoster($students);