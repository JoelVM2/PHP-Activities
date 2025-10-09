<?php

function digits(int $num):int{
    return strlen($num);
}

function digitN(int $num,int $pos):int{
    $numbers = str_split(strval($num));
    
    return $numbers[$pos];
}

function lastDigit(int $num,int $cant):int{
    
    $last = substr($num, 0, strlen($num) - $cant);
    return $last;
}

function firstDigit(int $num,int $cant):int{
    $last = substr($num, $cant);
    return $last;
}

echo digits(123445) ;
echo "---";
echo digitN(1234,3) ;
echo "---";
echo lastDigit(1234567,2) ;
echo "---";
echo firstDigit(1234567,2) ;

?>