<?php

$numbers = "";

for ($x=1; $x <=10; $x++){
    if($x == 1){
        $numbers = $numbers .  $x ;
        continue;
    }
    $numbers = $numbers . -  $x ;
}

echo $numbers;
?>