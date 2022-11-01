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
   sort($nums);

  $indices = array();
  for($l=0; $l <= $n; $l++)
  {
    if($target === $nums[$l])
    {
    array_push($indices, $l);
    }

 
  }


 return $indices;

    }
}
