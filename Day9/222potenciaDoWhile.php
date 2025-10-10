<?php 

function potencia($base, $exponente){
        if($exponente == 0){
            return 1;
        }
        $result = 1;
    do{
        $result = $result * $base;
        $exponente--;
    }while($exponente >0);

    return $result;
}

echo potencia(2,4);

?>