<?php

$cars = array("Volvo", "BMW", "Toyota", "Kijang");

// a
echo 'a. "' . implode('", "', $cars) . '"' . "<br>";

// b
$tempCar = $cars[0];
for ($i = 0; $i < count($cars) ; $i++) {
    $cars[0] = $cars[1];
}
$cars[1] = $tempCar;
echo 'b. "' . implode('", "', $cars) . '"' . "<br>";

// c
$tempCar = $cars[0];
$temp2 = $cars[1];
for ($i = 0; $i < count($cars) - 2; $i++) {
    $cars[$i] = $cars[$i + 2];
    $cars[1] = $temp2;
}
$cars[count($cars) - 2] = $tempCar;
echo 'c. "' . implode('", "', $cars) . '"' . "<br>";

// d
$tempCar2 = $cars[3];
for ($i = 0; $i < count($cars) ; $i++) {
    $cars[3] = $cars[1];
}
$cars[1] = $cars[0];
$cars[0] = $tempCar2;
echo 'd. "' . implode('", "', $cars) . '"' . "<br>";

?>