 <?php 
    $x = 0;
    $y = 1;
    
    for($number =1; $number <=5; $number++){
        $result = $x + $y;
        // echo $result .PHP_EOL;
       $x = $y;
    //    echo $x .PHP_EOL;
       $y = $result;
    //    echo $x .PHP_EOL;

       echo $result .PHP_EOL;
        
       
    }

?> 


<?php
// Function to print the first n numbers in the Fibonacci series
// function printFibonacci($n) {
//     $first = 0;
//     $second = 1;

//     for ($i = 1; $i <= $n; $i++) {
//         // Print the current Fibonacci number
//         echo $first . " ";

//         // Calculate the next Fibonacci number
//         $next = $first + $second;

//         // Update the values of $first and $second for the next iteration
//         $first = $second;
//         $second = $next;
//     }
// }

// // Call the function to print the first 15 Fibonacci numbers
// printFibonacci(5);
// ?>
