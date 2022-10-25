<?php

/*
 * Complete the 'gradingStudents' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY grades as parameter.
 */

function gradingStudents($grades) {
    // Write your code here
    $count = count($grades);
    for ($j = 0; $j < $count; $j++) {
        $nearest_num = round($grades[$j] / 5) *5;
        $diff = $nearest_num - $grades[$j] ;
        if($grades[$j] < 38)
        {
            $grades[$j] = $grades[$j];
        }
        else if($diff < 3 && $nearest_num > $grades[$j])
        {
            $grades[$j] = $nearest_num;
        }
    }
    return $grades;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$grades_count = intval(trim(fgets(STDIN)));

$grades = array();

for ($i = 0; $i < $grades_count; $i++) {
    $grades_item = intval(trim(fgets(STDIN)));
    $grades[] = $grades_item;
}

$result = gradingStudents($grades);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);
