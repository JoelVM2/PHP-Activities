<?php

function factorial($Number){
    $factorial = 1;
    for ($i=$Number; $i > 0 ; $i--) {    
        $factorial = $factorial * $i;
    }
    return $factorial;
}


echo factorial(5)

?>