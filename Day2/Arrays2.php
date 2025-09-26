<?php

$colors = array('white', 'green', 'red');

foreach($colors as $color ){
    echo "$color, ";
}

sort($colors);

echo "<ul>";

foreach($colors as $color2 ){
    echo "<li>$color2</li>";
}

echo "</ul>";
?>