<?php

$people = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

echo "
Associative array : Ascending order sort by value";
asort($people);
foreach($people as $key=> $value ){
  echo "\nAge of " . $key. " is ". $value;  
}

echo "
Associative array : Ascending order sort by Key";
ksort($people);
foreach($people as $key=> $value ){
  echo "\nAge of " . $key. " is ". $value;  
}

echo "
Associative array : Descending order sorting by Value";
arsort($people);
foreach($people as $key=> $value ){
  echo "\nAge of " . $key. " is ". $value;  
}

echo "
Associative array : Descending order sorting by Key";
krsort($people);
foreach($people as $key=> $value ){
  echo "\nAge of " . $key. " is ". $value;  
}
?>