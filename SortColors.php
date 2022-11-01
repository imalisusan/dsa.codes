class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function sortColors(&$nums) {
        
        for($j = 0; $j < count($nums); $j ++) {
            for($i = 0; $i < count($nums)-1; $i ++){
                if($nums[$i] > $nums[$i+1]) {
                    $temp = $nums[$i+1];
                    $nums[$i+1]=$nums[$i];
                    $nums[$i]=$temp;
                }       
            }
        }
    }
}
