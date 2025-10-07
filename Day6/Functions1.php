<?php

echo factorial(5);

function factorial($number){
     $factorial = 1;
    for ($i=$number; $i > 0 ; $i--) {    
        $factorial = $factorial * $i;
    }
    return $factorial; 
}

?>