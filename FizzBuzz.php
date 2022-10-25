class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */

  
    function fizzBuzz($n) {
        $numbers = array();
    for($j=1; $j<=$n; $j++ )
    {    
    if($j%3==0)
    {
        $divisibleByThree= true;
    }
    else
    {
        $divisibleByThree= false;   
    }
    if($j%5 == 0)
    {
        $divisibleByFive= true;
    }
     else
    {
        $divisibleByFive= false;   
    }    
        if($divisibleByThree == true && $divisibleByFive == true)
        {
             $numbers[$j] = "FizzBuzz";
        }
        else if($divisibleByThree == true)
        {
            $numbers[$j] = "Fizz";
        }
        else if($divisibleByFive == true)
        {
             $numbers[$j] = "Buzz";
        }
        else
        {
            $numbers[$j] = (string)$j;
        }
        
    }   
    return $numbers;
    }
}
