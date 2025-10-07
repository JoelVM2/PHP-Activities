<?php

echo isPrimeNumber(4);

function isPrimeNumber($number){
    for ($i=2; $i < $number; $i++) { 
        if ($number % $i == 0)
        {
            return 0;
        }
    }
    return 1;
}

?>