<?php
/*
What is an Array?
An array stores multiple values in one single variable.

there are 3 type of array...

1)indexed array :- Arrays with a numeric index.
2)associative array :- Arrays with named keys with print.
3)multidimensional array :-  one or more arrays as same time to print.

*/

//1)indexed array
$cars = array("rahul", "priyank", "darshan"); 
var_dump($cars);

echo "<br>";

//2)associative array
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);

echo "<br>";
//3)multidimensional array


$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
  
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
?>