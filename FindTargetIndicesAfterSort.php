class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function targetIndices($nums, $target) {
         //code here
   $n = count($nums) - 1;
   $j= 1;
   for ($i= 0; $i < $n; $i++) {
        for ($j = $i; $j < $n; $j++) {
            $jj = $j+1;
            // Swap adjacent elements if they are in decreasing order
            if ($nums[$i] > $nums[$jj]) {
                list($nums[$j],$nums[$jj]) = array($nums[$jj],$nums[$j]);
            }
        } 
    }
 
  $indices = array();
  for($l=0; $l <= $n; $l++)
  {
    if($target == $nums[$l])
    {
    array_push($indices, $l);
    }

 
  }


 return $indices;

    }
}
