<?php

$listOfNumbers= "";

for ($i=200; $i<=250 ; $i+=4){
       $listOfNumbers=$listOfNumbers . $i . "," ;  
}
    echo implode(",", range(200, 250, 4)) . "\n";

    echo $listOfNumbers;
?>