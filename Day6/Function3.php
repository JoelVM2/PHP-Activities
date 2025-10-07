<?php

echo reverseString("cabeza");

function reverseString($word){
    $reversal = "";
    for ($i=strlen($word); $i >= 0  ; $i--) { 
       $reversal = $reversal . substr($word ,$i,1);
    } 
    echo $reversal;
}
?>