<?php
// a. for loop (index array)
$cars = array("Toyota", "Ford", "Tesla");

for($i=0; $i<count($cars); $i++){
    echo $cars[$i] . "<br>";
}

// b. foreach (associative array)
$car_price = array(
    "Toyota" => 20000,
    "Ford" => 30000,
    "Tesla" => 50000
);

foreach($car_price as $car => $price){
    echo $car . " = " . $price . "<br>";
}

// c. array functions
array_push($cars, "BMW");
array_pop($cars);

$newArray = array_merge($cars, array("Audi"));
print_r($newArray);

$slice = array_slice($cars, 0, 2);
print_r($slice);

$keys = array_keys($car_price);
print_r($keys);
?>