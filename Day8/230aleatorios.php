<?php

$numbers=[];

for ($i=1; $i < 50; $i++) { 
    $numbers[] =  rand(0,99);
}

shuffle($numbers);

foreach($numbers as $number){
    echo $number . " ";
}

?>