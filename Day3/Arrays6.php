<?php

function show($key, $value){
    echo "$key : $value" . "\n";
}

$book ='{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}}';

$decodedJson = json_decode($book,true);

array_walk_recursive($decodedJson, "show");
?>