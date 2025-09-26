<?php

function difference($Number){

    if($Number < 51){
        return 51 - $Number;
    }else{
         return ($Number - 51) * 3;
    }
}

echo difference(53). "\n";
echo difference(30). "\n";
echo difference(51);
?>