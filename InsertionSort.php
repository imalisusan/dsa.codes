<?php

/*
 * Complete the 'insertionSort1' function below.
 *
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER_ARRAY arr
 */

function insertionSort1($n, $arr) {
    // Write your code here
    $insert_num = $arr[$n-1]; //the last element
   
    $i = $n-2;
    while($arr[$i] >= $insert_num)
    {
        $arr[$i+1] = $arr[$i]; 
        $i--;
        for($j = 0; $j < $n; $j++)
        {
            echo $arr[$j]. " ";
        }
        echo "\n";
    }
    
    $arr[$i+1] = $insert_num;
    for($k = 0; $k < $n; $k++)
        {
            echo $arr[$k]. " ";
        }
    
    


}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

insertionSort1($n, $arr);
