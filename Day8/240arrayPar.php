<?php
function esPar(int $num): bool
{
    return $num % 2 === 0;
}

echo esPar(5);

function arrayAleatorio(int $tam, $min, $max): array
{
    $numbers = [];
    for ($i = 1; $i <= $tam; $i++) {
        $numbers[] =  rand($min, $max);
    }
    shuffle($numbers);
    return $numbers;
}


function arrayPares(array $array): int
{
    $numbers = 0;
    foreach ($array as $num) {
        if (esPar($num)) {
            $numbers++;;
        }
    }
    return $numbers;
}

$testArray = arrayAleatorio(50, 0, 100);

echo arrayPares($testArray);
