<?php

/*
 * Complete the 'countSwaps' function below.
 *
 * The function accepts INTEGER_ARRAY a as parameter.
 */

function countSwaps($a) {
    // Write your code here
    $swap_num = 0;
    $n = count($a);
    for ($i= 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - 1; $j++) {
            $jj = $j+1;
            // Swap adjacent elements if they are in decreasing order
            if ($a[$j] > $a[$jj]) {
                list($a[$j],$a[$jj]) = array($a[$jj],$a[$j]);
                $swap_num++;
            }
        } 
    }
    echo "Array is sorted in ".$swap_num ." swaps.\n";
    echo "First Element: ".$a[0]. "\n";
    echo "Last Element: ".$a[$j]. "\n";
}

$n = intval(trim(fgets(STDIN)));

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

countSwaps($a);
