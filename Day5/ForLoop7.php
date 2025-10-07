<?php
$word = "w3resource";
$count = 0;
for ($i=0; $i < strlen($word) ; $i++) {    
    if(substr($word,$i,1) == "r"){
        $count++;
    }
}
echo $count; 
?>