<?php

$students = array("Alice", "Bob", "Charlie", "David", "Eva", "Frank");
echo "<h2>Original Array:</h2>";
print_r($students); 

asort($students);
echo "<h2>Sorted Array (using asort):</h2>";
print_r($students);  

arsort($students);
echo "<h2>Sorted Array (using arsort):</h2>";
print_r($students);  
echo "<h2>sort on the basis of value:</h2>";
$flower = array("one"=>"Sunflower", "two"=>"Rose", "three"=>"Dahlia");
asort($flower);
print_r($flower);
echo "<h2>reverse sort on the basis of value:</h2>";
arsort($flower);
print_r($flower);
echo "<h2> sort on the basis of key:</h2>";
ksort($flower);
print_r($flower);
echo "<h2>reverse sort on the basis of key</h2>";
krsort($flower);
print_r($flower);

?>
