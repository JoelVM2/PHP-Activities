<?php

for ($i=0; $i <= 50; $i++) { 

    if($i%3==0&&$i%5==0){
        echo $i. " FizzBuzz". "\n";
    }else if($i%3==0){
        echo $i. " Fizz". "\n";
    }else if($i%5==0){
        echo $i. " Buzz". "\n";
    }else{
        echo $i . "\n";
    }
}


?>