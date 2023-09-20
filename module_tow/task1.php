<?php 

function allEvenNumberforLoop($fristNumber, $lastNumber){
  $i = 0;
  for($i = $fristNumber; $i<=$lastNumber; $i++){
    $evenNumbercheck = ($i%2==0);
    if($evenNumbercheck){
        echo $i ."\n";
      
    }
    
   
  }
}    


echo allEvenNumberforLoop(1,20);

echo "</br>";echo "</br>";

function allEvenNumberWhileLoop($number1, $number2){
    $venNumber = 1;
    while($venNumber <=$number2){
        if($venNumber %2==0){
            echo $venNumber ."\n" ;
            
        }
        $venNumber++;
    }
}

allEvenNumberWhileLoop(2,20);

echo "</br>";echo "</br>";




function printEvenNumber ($number3, $number4){
 $i = 1;
 do{
  if($i % 2==0){
    echo $i ."\n";
  
  }$i++;
 }while($i <= $number4);


}

 printEvenNumber (1, 20);
