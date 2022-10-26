class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function smallerNumbersThanCurrent($nums) {
        $arr_length = count($nums);
        $smaller_nums = array();
        for($i = 0; $i < $arr_length; $i++)
        {
        $count = 0;
            for($j = 0; $j < $arr_length; $j++)
            {
                if( $nums[$i] > $nums[$j])
                {
                    $count++;
                }
                
            }
            $smaller_nums[$i] = $count;
        }
        return $smaller_nums;
    }
}
