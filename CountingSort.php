<?php

/*
 * Complete the 'countingSort' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function countingSort($arr) {
    // Write your code here
    $highest = max($arr);
    $freq_array = array();
    
    for ($i = 0; $i < 100; $i++)
    {
        array_push($freq_array, 0);
    }
    
    for($j=0; $j < 100; $j++)
    {
        $freq_array[$arr[$j]]++;   
    }
    return $freq_array;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = countingSort($arr);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($fptr);
