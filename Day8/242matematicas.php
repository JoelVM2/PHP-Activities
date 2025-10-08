<?php

function digits(int $num):int{
    return strlen($num);
}

function digitN(int $num,int $pos):int{
    $numbers = str_split(strval($num));
    
    return $numbers[$pos];
}

function lastDigit(int $num,int $cant):int{
    
    $last = substr($num, 0, $cant);
    return $last;
}

function firstDigit(int $num,int $cant):int{
    $last = substr($num, 0, $cant);
    return $last;
}

echo digits(123445);
echo digitN(1234,3);

// terminar las dos funciones, lastdigit es funcional first digit no 
echo lastDigit(1234567,-2);
echo firstDigit(1234567,2);

?>