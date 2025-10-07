<?php

$numbers=[];

for ($i=1; $i < 50; $i++) { 
    $numbers[] =  $i;
}

shuffle($numbers);

for ($i=0; $i <= 50 ; $i++) { 
    if($numbers[$i]%2==0){
        echo $numbers[$i] . " ";
    }
}

?>