<?php

function greater(): int{
$args = func_get_args();
$aux= 0;
foreach ($args as $num) {
    if($num > $aux){
        $aux = $num;
    }
}
return $aux;
}

function concatenate(...$words): string{
$aux= "";
foreach ($words as $word) {
    $aux .= $word ." ";
}
return $aux;
}

echo concatenate("Hola","perro","perrito");
echo greater(2,4,6,1,9,2);
?>