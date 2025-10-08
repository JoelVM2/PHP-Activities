<?php

function oneToTen($start,$end){
    $aux = 0;
    for ($i=$start; $i <=$end ; $i++) { 
      $aux += $i;
    }
    echo $aux;
}

oneToTen(1,1002299945);

?>