<?php 

function potencia($base, $exponente){ 
    $aaa = 1;
    for ($i=$exponente; $i > 0 ; $i--) { 
        $aaa = $aaa * $base;
    }
    return $aaa;
}

echo potencia(2,4);

?>