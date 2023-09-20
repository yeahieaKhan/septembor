<?php 
function printFibonacci($n) {
    $x = 0;
    $y = 1;
    
    for($number =1; $number <=$n; $number++){
        $result = $x + $y;
        // echo $result .PHP_EOL;
       $x = $y;
    //    echo $x .PHP_EOL;
       $y = $result;
    //    echo $x .PHP_EOL;

       echo $result .PHP_EOL;
        
       
    }
}


printFibonacci(15);





?>
